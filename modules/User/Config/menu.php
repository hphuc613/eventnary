<?php 

return [
        'name' => 'Người dùng',
        'route' => '',
        'sort' => 3,
        'active'=> 'user',
        'icon' => 'icon-user',
        'middleware' => [],
        'group' => [
                'create-user' => [
                        'name'  => trans('Thêm mới'),
                        'icon'  => null,
                        'route' => route('get.create.user')   ,
                        'active'=> 'create-user ',
                        'middleware' => [],
                ],
                'list-collaborator' => [
                        'name'  => trans('Danh sách Cộng tác viên'),
                        'icon'  => null,
                        'route' => route('get.list.collaborator')   ,
                        'active'=> 'list-user ',
                        'middleware' => [],
                ],
                'list-user' => [
                        'name'  => trans('Danh sách Quản trị'),
                        'icon'  => null,
                        'route' => route('get.list.user')   ,
                        'active'=> 'list-user ',
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