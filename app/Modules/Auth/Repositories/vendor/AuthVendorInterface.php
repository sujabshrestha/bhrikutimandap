<?php

namespace Auth\Repositories\vendor;


interface AuthVendorInterface
{
    public function loginSubmit($request);

    public function registerSubmit($request);

}
