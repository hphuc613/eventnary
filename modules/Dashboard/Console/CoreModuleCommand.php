<?php

namespace HPro\Base\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
class CoreModuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The systems will create module with name you entered';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $module = $this->argument('name');

        if (!file_exists(base_path("modules/{$module}"))) {
            mkdir(base_path("modules/{$module}"), 0777, true);
            $this->config($module);
            $this->console($module);
            $this->entities($module);
            $this->file($module);
            $this->services($module);
        }

        $this->info("Module {$module} has been createed");
    }

    protected function config($module){
        mkdir(base_path("modules/{$module}/Config"), 0777, true);
            $content = "<?php 
                            return [
                                'modules' => '".$module."'
                            ];";
                                        $fp = fopen(base_path("modules/{$module}/Config/config.php"),"wb");
                                        fwrite($fp,$content);
                                        fclose($fp);

                                        //menu

                                        $content = "<?php 

                            return [
                                'name' => '".$module."',
                                'route' => '',
                                'sort' => 1,
                                'active'=> '".strtolower($module)."',
                                'icon' => ' icon-menu',
                                'middleware' => [],
                                'group' => [
                                    
                                ]
                            ];";
                                        $fp = fopen(base_path("modules/{$module}/Config/menu.php"),"wb");
                                        fwrite($fp,$content);
                                        fclose($fp);

                                        //permission

                                        $content = "<?php 
                            return [
                                '".strtolower($module)."' => ''
                            ];";
                                        $fp = fopen(base_path("modules/{$module}/Config/permission.php"),"wb");
                                        fwrite($fp,$content);
                                        fclose($fp);
    }

    /**
     *
     * Module Console
     *
     */
    
//     protected function console($module){
//         mkdir(base_path("modules/{$module}/Console"), 0777, true);
//         $content = "<?php

// namespace TTSoft\\{$module}\\Console;

// use Illuminate\Console\Command;
// use Illuminate\Support\Facades\Artisan;
// class {$module}Command extends Command
// {
//     /**
//      * The name and signature of the console command.
//      *
//      * @var string
//      */
//     protected {signature} = '".strtolower($module).":setup';

//     /**
//      * The console command description.
//      *
//      * @var string
//      */
//     protected {description} = 'The systems will setup Ialc English';

//     /**
//      * Create a new command instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         parent::__construct();
//     }

//     /**
//      * Execute the console command.
//      *
//      * @return mixed
//      */
//     public function handle()
//     {
        
//     }
// }
// ";
//             $fp = fopen(base_path("modules/{$module}/Console/{$module}Console.php"),"wb");
//             fwrite($fp,$content);
//             fclose($fp);
//     }

//     protected function entities($module){
//         mkdir(base_path("modules/{$module}/Entities"), 0777, true);
//         $content = "<?php

// namespace TTSoft\\{$module}\\Entities;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

// class {$module} extends Model
// {
//     use SoftDeletes;

//     protected {table} = '".strtolower($module)."';

//     protected {primaryKey} = 'id';

//     protected {dates} = ['deleted_at'];
    
//     protected {guarded} = [];

//     public {timestamps} = true;

 
// }
// ";
//             $fp = fopen(base_path("modules/{$module}/Entities/{$module}.php"),"wb");
//             fwrite($fp,$content);
//             fclose($fp);
//     }

//     protected function file($module){
//         $content = '';
//         $fp = fopen(base_path("modules/{$module}/composer.json"),"wb");
//             fwrite($fp,$content);
//             fclose($fp);
//         $fp = fopen(base_path("modules/{$module}/module.json"),"wb");
//             fwrite($fp,$content);
//             fclose($fp);
//         $fp = fopen(base_path("modules/{$module}/README.md"),"wb");
//             fwrite($fp,$content);
//             fclose($fp);
//     }

//     protected function services($module){
//         mkdir(base_path("modules/{$module}/Services"), 0777, true);
//         $content = "<?php

// namespace TTSoft\\{$module}\\Services;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

// class {$module}Services extends Model
// {
//     public function __construct(argument)
//     {
//         # code...
//     }
// }
// ";
//             $fp = fopen(base_path("modules/{$module}/Services/{$module}Services.php"),"wb");
//             fwrite($fp,$content);
//             fclose($fp);
//     }
}
