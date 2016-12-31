<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        /*Custom validator rule for checking base64 images file type.
        value must be and intervention image object.
        */
        Validator::extend('is_mime',function($attribute, $value, $params, $validator) {
            try{
                $mime = $value->mime();

            } catch (\Exception $e){
                return $e->getMessage();
            }

            foreach ($params as $param) {

                if ( $mime == 'image/' . $param){
                    return true;
                }
            }
                return false;
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
