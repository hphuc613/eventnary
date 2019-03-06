<?php 

return [
        'name' => 'Địa điểm',
        'route' => '',
        'sort' => 13,
        'active'=> 'location',
        'icon' => ' icon-location-pin',
        'middleware' => [],
        'group' => [
                'list-city' => [
                        'name'  => trans('Danh sách Tỉnh/Thành'),
                        'icon'  => null,
                        'route' => route('get.create.city'),
                        'active'=> 'list-city ',
                        'middleware' => [],
                ],
                'list-district' => [
                        'name'  => trans('Danh sách Quận/Huyện'),
                        'icon'  => null,
                        'route' => route('get.create.district'),
                        'active'=> 'list-district ',
                        'middleware' => [],
                ],
                'list-ward' => [
                        'name'  => trans('Danh sách Phường/Xã'),
                        'icon'  => null,
                        'route' => route('get.create.ward')   ,
                        'active'=> 'list-ward ',
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