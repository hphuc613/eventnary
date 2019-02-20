<?php 

return [
        'name' => 'Vai trò',
        'route' => '',
        'sort' => 3,
        'active'=> 'role',
        'icon' => ' icon-people',
        'middleware' => [],
        'group' => [
                'list-role' => [
                        'name'  => trans('Danh sách vai trò'),
                        'icon'  => null,
                        'route' => route('get.list.role')   ,
                        'active'=> 'list-role ',
                        'middleware' => [],
                ],
                'create-role' => [
                        'name'  => trans('Thêm mới vai trò'),
                        'icon'  => null,
                        'route' => route('get.create.role'),
                        'active'=> 'create-role ',
                        'middleware' => [],
                ],

        // \TTSoft\Categories\Entities\Category::DOC_STATUS => [
        //     'name'  => trans('Tình trạng chứng từ'),
        //     'icon'  => null,
        //     'route' => route('categories.get.list',\TTSoft\Categories\Entities\Category::DOC_STATUS),
        //     'active'=> 'DOC_STATUS',
        //     'middleware' => [],
        // ],
        // \TTSoft\Categories\Entities\Category::POSITION => [
        //     'name'  => trans('Chức vụ'),
        //     'icon'  => null,
        //     'route' => route('categories.get.list',\TTSoft\Categories\Entities\Category::POSITION),
        //     'active'=> 'POSITION',
        //     'middleware' => [],
        // ],
        // \TTSoft\Categories\Entities\Category::EDUCATION => [
        //     'name'  => trans('Trình độ học vấn'),
        //     'icon'  => null,
        //     'route' => route('categories.get.list',\TTSoft\Categories\Entities\Category::EDUCATION),
        //     'active'=> 'POSITION',
        //     'middleware' => [],
        // ],
        
        ]
];