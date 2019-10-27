<?php

namespace Seasofttintkhant\SeasoftValidation;

use Illuminate\Support\ServiceProvider;
use Seasofttintkhant\SeasoftValidation\Rules\SeasoftValidator;

class SeasoftValidationServiceProvider extends ServiceProvider {

    public function boot()
    {
        \Validator::resolver(function($translator, $data, $rules, $messages)
        {
            return new SeasoftValidator($translator, $data, $rules, $messages);
        });
    }

    public function register()
    {

    }

}


