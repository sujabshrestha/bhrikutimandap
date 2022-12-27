<?php

namespace Auth\Repositories;


interface AuthInterface
{
    public function loginSubmit($request);

    public function registerSubmit($request);

}
