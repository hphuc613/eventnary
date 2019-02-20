<?php

namespace HPro;
use File;


class ServiceProvider extends  \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $listModule = array_map('basename', File::directories(__DIR__));

        foreach ($listModule as $module)
        {

            if(file_exists(__DIR__.'/'.$module.'/Http/routes.php')) {
                include __DIR__.'/'.$module.'/Http/routes.php';
            }
            if(is_dir(__DIR__.'/'.$module.'/Resources/views')) {
                $this->loadViewsFrom(__DIR__.'/'.$module.'/Resources/views', $module);
            }

            if (file_exists($file = __DIR__.'/'.$module.'/Helpers/Helpers.php')){
                require $file;
            }
        }
    }

    

    public function register(){
        
    }
}