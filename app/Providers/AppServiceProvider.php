<?php

namespace App\Providers;

use App\Observers\UserVoteOptionObserver;
use App\UserVoteOption;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
//use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        if ($this->app->environment() !== 'production') {
//           $this->app->register(IdeHelperServiceProvider::class);
//      }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        UserVoteOption::observe(UserVoteOptionObserver::class);
        $this->defineValidationRules();
    }
    private function defineValidationRules(): void
    {
        /**
         *  National code validation for registration form
         */
        Validator::extend('validate', function ($attribute, $value, $parameters, $validator) {
            if (strcmp($parameters[0], 'national_code') === 0) {
                return $this->validateNationalCode($value);
            }
        
            return true;
        });
    }
    private function validateNationalCode($value)
    {
        $flag = false;
        if (!preg_match('/^[0-9]{10}$/', $value)) {
            $flag = false;
        }
        
        for ($i = 0; $i < 10; $i++) {
            if (preg_match('/^'.$i.'{10}$/', $value)) {
                $flag = false;
            }
        }
        
        for ($i = 0, $sum = 0; $i < 9; $i++) {
            $sum += ((10 - $i) * intval(substr($value, $i, 1)));
        }
        
        $ret    = $sum % 11;
        $parity = intval(substr($value, 9, 1));
        if (($ret < 2 && $ret === $parity) || ($ret >= 2 && $ret === 11 - $parity)) {
            $flag = true;
        }
        
        return $flag;
    }
}
