<?php 

return [
        'name' => 'Khách mời',
        'route' => '',
        'sort' => 3,
        'active'=> 'customer',
        'icon' => 'icon-user',
        'middleware' => [],
        'group' => [
                'list-customer' => [
                        'name'  => trans('Danh sách người dùng'),
                        'icon'  => null,
                        'route' => route('get.list.customer')   ,
                        'active'=> 'list-customer ',
                        'middleware' => [],
                ],
                'create-customer' => [
                        'name'  => trans('Thêm mới người dùng'),
                        'icon'  => null,
                        'route' => route('get.create.customer'),
                        'active'=> 'create-customer',
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