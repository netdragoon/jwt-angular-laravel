<?php

namespace App\Providers;

use App\Models\EmpresaFuncao;
use Illuminate\Support\ServiceProvider;


class UniqueKeyDupleServiceProvider extends ServiceProvider
{


    public function boot()
    {
        \Validator::extend('uniquekeyduple', function($attribute, $value, $parameters, $validator)
        {
            $value1 = (int)request()->get($parameters[0]);
            if (is_numeric($value) && is_numeric($value1))
            {
                return (!(EmpresaFuncao::where($attribute, $value)
                    ->where($parameters[0], $value1)
                    ->count() > 0));
            }
            return false;
        });
    }

    public function register()
    {
        //
    }
}
