<?php
if (!function_exists('get_directories')) {
    function get_directories($path){
        $directories = [];
        $items = scandir($path);
        foreach ($items as $item) {
            if($item == '..' || $item == '.')
                continue;
            if(is_dir($path.'/'.$item))
                $directories[] = $item;
        }
        return $directories;
    }
}


if (!function_exists('config_menu_merge')) {
    function config_menu_merge(){
        $menu = get_directories(base_path('modules'));
        $activeMenu = [];
        foreach ($menu as $key => $value) {
            $urlPath = $value.'/Config/menu.php';
            if (file_exists(base_path('modules') . '/' . $urlPath)) {
                $activeMenu[] = require(base_path('modules') . '/' . $urlPath);
            }
        }
        $activeMenu = collect($activeMenu)->sortBy('sort')->toArray();
        return $activeMenu;
    }
}




