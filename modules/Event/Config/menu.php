<?php 

return [
        'name' => 'Sự kiện',
        'route' => '',
        'sort' => 2,
        'active'=> 'event',
        'icon' => ' ti-calendar',
        'middleware' => [],
        'group' => [
                'list-event' => [
                        'name'  => trans('Danh sách sự kiện'),
                        'icon'  => '',
                        'route' => ''   ,
                        'active'=> 'list-event ',
                        'middleware' => [],
                ],
                'create-event' => [
                        'name'  => trans('Thêm mới sự kiện'),
                        'icon'  => null,
                        'route' => '',
                        'active'=> 'create-event ',
                        'middleware' => [],
                ],
                'edit-event' => [
                        'name'  => trans('Chỉnh sửa sự kiện'),
                        'icon'  => null,
                        'route' => ''   ,
                        'active'=> 'create-event ',
                        'middleware' => [],
                ],
        ]
];