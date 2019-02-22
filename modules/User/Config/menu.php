<?php 

return [
        'name' => 'Người dùng',
        'route' => '',
        'sort' => 3,
        'active'=> 'user',
        'icon' => ' icon-people',
        'middleware' => [],
        'group' => [
                'list-user' => [
                        'name'  => trans('Danh sách người dùng'),
                        'icon'  => null,
                        'route' => route('get.list.user')   ,
                        'active'=> 'list-user ',
                        'middleware' => [],
                ],
                'create-user' => [
                        'name'  => trans('Thêm mới người dùng'),
                        'icon'  => null,
                        'route' => route('get.create.user'),
                        'active'=> 'create-user ',
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