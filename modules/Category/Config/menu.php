<?php 

return [
        'name' => 'Danh mục',
        'route' => '',
        'sort' => 3,
        'active'=> 'category',
        'icon' => 'mdi mdi-format-list-bulleted-type',
        'middleware' => [],
        'group' => [
                'list-type-event' => [
                        'name'  => trans('Loại sự kiện'),
                        'icon'  => null,
                        'route' => route('get.list.eventtype'),
                        'active'=> 'list-type-event',
                        'middleware' => [],
                ],
                'list-type-ticket' => [
                        'name'  => trans('Loại vé'),
                        'icon'  => null,
                        'route' => route('get.list.tickettype'),
                        'active'=> 'list-type-ticket',
                        'middleware' => [],
                ],
                'list-guest-group' => [
                        'name'  => trans('Nhóm khách mời'),
                        'icon'  => null,
                        'route' => route('get.create.guest_group'),
                        'active'=> 'list-guest-group',
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