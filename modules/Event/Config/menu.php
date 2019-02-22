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
                        'icon'  => null,
                        'route' => route('get.list.event'),
                        'active'=> 'list-event ',
                        'middleware' => [],
                ],
                'create-event' => [
                        'name'  => trans('Thêm mới sự kiện'),
                        'icon'  => null,
                        'route' => route('get.create.event'),
                        'active'=> 'create-event ',
                        'middleware' => [],
                ],
        ]
];