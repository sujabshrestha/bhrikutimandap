@extends('layouts.vendor.master')

@section('title', 'About')

@section('breadcrumb', 'About')
@push('styles')

@endpush

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <main class = "page-about">
        <div class = "container">
            <section class = "sc-about-block-1 px-3">
                <div class="about-block-1-content py-5">
                    <div class = "row align-items-xl-center">
                        <div class = "col-xl-6 pe-xl-5">
                            <div class="paragraph-content text-justify">
                                <div class="sc-title">
                                    <h3>Bhrikuti Mandap</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur. Ultricies ac enim arcu adipiscing vitae erat lectus id. Dignissim convallis neque sem fames fermentum lectus nec. At ornare turpis nec porttitor. Natoque scelerisque in fames bibendum non scelerisque. Proin netus elementum nisi vitae libero pellentesque viverra nibh a. Risus sem aliquam morbi orci. Sed malesuada phasellus tortor odio curabitur. Aliquet pellentesque in dolor laoreet urna sed nec nisl. Nunc lobortis sit sagittis gravida purus sit nisl. Luctus pretium aliquet leo purus at. Sit scelerisque ornare sagittis sagittis. At pellentesque id in nunc pretium.</p>
                                <p>Arcu magna eros augue ultricies gravida odio scelerisque scelerisque tincidunt. Sed tincidunt id aliquam sed et pellentesque fermentum. Tortor volutpat sapien justo iaculis vitae consequat. Nisl enim mi neque tincidunt tincidunt. Suspendisse pharetra et urna varius gravida quam pellentesque tellus. Aenean egestas auctor tellus aliquam sit. Faucibus arcu fames neque vulputate lorem dolor neque tincidunt. Semper vestibulum sociis augue dignissim ultricies. Amet sit nisi placerat ultricies donec ac rhoncus mauris.</p>
                                <p>Quis magna et pulvinar vel arcu scelerisque tempus non. Rutrum tortor eget quam mus posuere praesent eu mauris. Tellus massa pharetra senectus morbi in imperdiet aliquet a. Scelerisque semper natoque egestas posuere et nullam. Blandit in amet neque ac felis tincidunt. Ornare sagittis volutpat nibh semper at vitae. Nec sed sagittis consequat neque. Nunc magna et accumsan tristique. Dui lectus cras magnis aenean arcu sit diam. Pellentesque diam porta cras massa. Faucibus diam pharetra sed amet. Nec fermentum sed a et. Facilisi vitae nisl semper at fringilla scelerisque erat a. Lectus suspendisse aenean et in.</p>
                            </div>

                            <div class = "about-info-list row">
                                <div class = "col-md-6">
                                    <div class = "info-list-item my-3">
                                        <div class = "item-icon">
                                            <img src = "{{ asset('frontendfiles/assets/images/call-calling.svg')}}">
                                        </div>
                                        <div class = "item-text">
                                            <span class = "d-block fw-6 text mb-1">Contact</span>
                                            <span class = "text-sm">01-3465367,+977-9844635725</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class = "col-md-6">
                                    <div class = "info-list-item my-3">
                                        <div class = "item-icon">
                                            <img src = "{{ asset('frontendfiles/assets/images/sms-tracking.svg')}}">
                                        </div>
                                        <div class = "item-text">
                                            <span class = "d-block fw-6 text mb-1">Mail</span>
                                            <span class = "text-sm">Samajkalyanparisad12@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class = "col-xl-6 mt-4 mt-xl-0">
                            <div class = "row align-items-center">
                                <div class = "col-sm-6">
                                    <div class = "mb-3">
                                        <img src = "{{ asset('frontendfiles/assets/images/about-pg/about-img-1.png') }}" alt = "">
                                    </div>
                                </div>
                                <div class = "col-sm-6">
                                    <div class = "mb-3">
                                        <img src = "{{ asset('frontendfiles/assets/images/about-pg/about-img-2.png') }}" alt = "">
                                    </div>
                                    <div>
                                        <img src = "{{ asset('frontendfiles/assets/images/about-pg/about-img-3.png') }}" alt = "">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class = "sc-about-block-2 px-3">
                <div class = "about-block-2-content py-5">
                    <div class = "row align-items-center">
                        <div class = "col-xl-5 mb-4">
                            <div class = "max-w-wrapper mx-auto">
                                <img src = "{{ asset('frontendfiles/assets/images/about-pg/about-img-3.png') }}" alt = "">

                            </div>
                        </div>
                        <div class = "col-xl-7 ps-xl-5">
                            <div class="sc-title mb-3">
                                <h3>Venues</h3>
                            </div>
                            <div class = "paragraph-content text-justify">
                                <p>Lorem ipsum dolor sit amet consectetur. Ultricies ac enim arcu adipiscing vitae erat lectus id. Dignissim convallis neque sem fames fermentum lectus nec. At ornare turpis nec porttitor. Natoque scelerisque in fames bibendum non scelerisque. Proin netus elementum nisi vitae libero pellentesque viverra nibh a. Risus sem aliquam morbi orci. Sed malesuada phasellus tortor odio curabitur. Aliquet pellentesque in dolor laoreet urna sed nec nisl. Nunc lobortis sit sagittis gravida purus sit nisl. Luctus pretium aliquet leo purus at. Sit scelerisque ornare sagittis sagittis. At pellentesque id in nunc pretium.</p>
                                <p>Arcu magna eros augue ultricies gravida odio scelerisque scelerisque tincidunt. Sed tincidunt id aliquam sed et pellentesque fermentum. Tortor volutpat sapien justo iaculis vitae consequat. Nisl enim mi neque tincidunt tincidunt. Suspendisse pharetra et urna varius gravida quam pellentesque tellus. Aenean egestas auctor tellus aliquam sit. Faucibus arcu fames neque vulputate lorem dolor neque tincidunt. Semper vestibulum sociis augue dignissim ultricies. Amet sit nisi placerat ultricies donec ac rhoncus mauris.</p>
                                <p>Quis magna et pulvinar vel arcu scelerisque tempus non. Rutrum tortor eget quam mus posuere praesent eu mauris. Tellus massa pharetra senectus morbi in imperdiet aliquet a. Scelerisque semper natoque egestas posuere et nullam. Blandit in amet neque ac felis tincidunt. Ornare sagittis volutpat nibh semper at vitae. Nec sed sagittis consequat neque. Nunc magna et accumsan tristique. Dui lectus cras magnis aenean arcu sit diam. Pellentesque diam porta cras massa. Faucibus diam pharetra sed amet. Nec fermentum sed a et.Facilisi vitae nisl semper at fringilla scelerisque erat a. Lectus suspendisse aenean et in.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class = "sc-about-block-3 px-3">
                <div class = "about-block-3-content py-5">
                    <div class = "row">
                        <div class = "col-xl-6">
                            <div class="sc-title mb-3">
                                <h3>Venues</h3>
                            </div>
                            <div class = "paragraph-content">
                                <table class = "table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Venue</th>
                                            <th>Rate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Large Exbition Hall & area around it</td>
                                            <td>RS. 2,50,000/day</td>
                                        </tr>
                                        <tr>
                                            <td>Large Exbition Hall & area around it</td>
                                            <td>RS. 2,50,000/day</td>
                                        </tr>
                                        <tr>
                                            <td>Large Exbition Hall & area around it</td>
                                            <td>RS. 2,50,000/day</td>
                                        </tr>
                                        <tr>
                                            <td>Large Exbition Hall & area around it</td>
                                            <td>RS. 2,50,000/day</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class = "col-xl-6">
                            <div class = "max-w-wrapper mx-auto">
                                <img src = "{{ asset('frontendfiles/assets/images/about-pg/about-img-2.png') }}" alt = "">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <!--  END CONTENT AREA  -->
@endsection

@push('scripts')


@endpush
