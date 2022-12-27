<?php

namespace Auth\Http\Controllers\Vendor;

use App\GlobalServices\ResponseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth\Models\PasswordReset;
use Auth\Repositories\vendor\AuthVendorInterface;
use Brian2694\Toastr\Facades\Toastr;
use Files\Repositories\FileInterface;
use Illuminate\Support\Facades\Auth;
use User\Models\User;
use illuminate\Support\Str;

class AuthVendorController extends Controller
{
    protected $response, $file, $auth;

    public function __construct(ResponseService $response, FileInterface $file, AuthVendorInterface $auth)
    {
        $this->response = $response;
        $this->file = $file;
        $this->auth = $auth;
    }

    public function login()
    {
        try {
            if (Auth::check()) {
                return redirect()->route('vendor.index');
            }
            return view('Auth::vendor.login');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function loginSubmit(Request $request)
    {
        // try {
            $user = $this->auth->loginSubmit($request);
            if($user == true){
                Toastr::success("Successfully logged in");
                return redirect()->route('vendor.login');
            }


        // } catch (\Exception $e) {
        //     Toastr::error($e->getMessage());
        //     return redirect()->back();
        // }
    }


    public function index()
    {
        try {

            return view(
                'Auth::vendor.index',

            );
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function register()
    {
        try {
            return view('Auth::vendor.register');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function registerSubmit(Request $request)
    {
        try {
            $user = $this->auth->registerSubmit($request);
            if ($user) {
                // $data=[
                //     'email'=>$user->email,
                //     'name'=>$user->name,
                //     'phone_no'=>$user->phone_no,
                //     'id'=>$user->id,
                // ];
                // $sendVerificationUserMailJob=(new SendVerificationUserEmail($data))
                //                                 ->delay(Carbon::now()->addSeconds(3));
                // dispatch($sendVerificationUserMailJob);
                Toastr::success('Registration Success !');
                return redirect()->route('vendor.login');
            }
            Toastr::error('Something went wrong');
            return redirect()->route('vendor.register');
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



    public function logout()
    {
        try{
            Auth::logout();
            Toastr::success("Successfully Logout");
            return redirect()->route('vendor.login');
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }


    }


    public function forgetPassword(){
        try{
            return view('Auth::vendor.passwordReset');
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function forgetPasswordSubmit(Request $request){
        try{
            $user = User::where('email', $request->email)->first();
            if($user){

                $token = Str::random(20);


                $details = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'token' => $token,
                ];


                PasswordReset::create([
                    'email' => $user->email,
                    'token' => $token
                ]);

                // $forgetpasswordmail = new UserForgetPasswordMail($details);
                // Mail::to($user->email)->send($forgetpasswordmail);

                Toastr::success('A reset link has been send to your email. Please check your mail');
                return redirect()->route('vendor.login');
            }
            Toastr::error("Vendor not found");
            return redirect()->back();
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



    public function resetPassword($email, $token){
        try{
            $passwordreset = PasswordReset::where('email', $email)
            ->where('token', $token)->first();
            $token = $passwordreset->token;
            if($passwordreset){
                return view('Auth::vendor.passwordResetForm', compact('email', 'token'));
            }
            Toastr::error("Token doesn't match");

        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }



    public function recoverPassword($email, Request $request){
        try{
            $user = User::where('email', $email)->first();
            $passwordreset = PasswordReset::where('email', $email)->where('token', $request->token)->first();

            if($user){
                $user->password = bcrypt($request->password);
                $user->save();

                Toastr::success('Successfully Changed');
                return redirect()->route('vendor.login');
            }
        }catch(\Exception $e){
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }
}
