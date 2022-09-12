<?php

return [
    'main-slider' => [
        'title' => 'اسلایدر اصلی و بنر کناری',
        'image' => 'widgets/slider.jpg',
        'options' => [
            [
                'title'      => 'تعداد اسلایدر',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'default'    => '5',
                'class'      => 'col-md-4 col-6',
                'attributes' => 'required'
            ],
            [
                'title'      => 'جایگاه بنر',
                'key'        => 'banner_position',
                'input-type' => 'select',
                'class'      => 'col-md-4 col-6',
                'options'    => [
                    [
                        'value' => 'left',
                        'title' => 'سمت چپ'
                    ],
                    [
                        'value' => 'right',
                        'title' => 'سمت راست'
                    ]
                ],
                'attributes' => 'required'
            ],
            [
                'title'      => 'ترتیب نمایش',
                'key'        => 'ordering',
                'input-type' => 'select',
                'class'      => 'col-md-4',
                'options'    => [
                    [
                        'value' => 'asc',
                        'title' => 'صعودی'
                    ],
                    [
                        'value' => 'desc',
                        'title' => 'نزولی'
                    ]
                ],
            ],
        ],
        'rules' => [
            'number' => 'required',
            'banner_position' => 'required|in:right,left'
        ]
    ],

    'main-slider2' => [
        'title' => 'اسلایدر اصلی نوع دوم',
        'image' => 'widgets/slider.jpg',
        'options' => [
            [
                'title'      => 'تعداد اسلایدر',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'default'    => '5',
                'class'      => 'col-md-4 col-6',
                'attributes' => 'required'
            ],
            [
                'title'      => 'جایگاه بنر',
                'key'        => 'banner_position',
                'input-type' => 'select',
                'class'      => 'col-md-4 col-6',
                'options'    => [
                    [
                        'value' => 'left',
                        'title' => 'سمت چپ'
                    ],
                    [
                        'value' => 'right',
                        'title' => 'سمت راست'
                    ]
                ],
                'attributes' => 'required'
            ],
            [
                'title'      => 'ترتیب نمایش',
                'key'        => 'ordering',
                'input-type' => 'select',
                'class'      => 'col-md-4',
                'options'    => [
                    [
                        'value' => 'asc',
                        'title' => 'صعودی'
                    ],
                    [
                        'value' => 'desc',
                        'title' => 'نزولی'
                    ]
                ],
            ],
        ],
        'rules' => [
            'number' => 'required',
            'banner_position' => 'required|in:right,left'
        ]
    ],

    'features' => [
        'title' => 'ویژگی ها',
        'image' => 'widgets/features.png',
        'options' => [
            [
                'title'      => 'عنوان',
                'key'        => 'title',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-8 col-12',
            ],
            [
                'title'      => 'تعداد نمایش',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'class'      => 'col-md-4 col-12',
                'attributes' => 'style="text-align:left;direction: ltr;"',
            ],
            [
                'title'      => 'متن زیر عنوان',
                'key'        => 'titleBot',
                'input-type' => 'textarea',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12',
            ],

        ],
        'rules' => [
        ]
    ],

    'about-us' => [
        'title' => 'درباره ما',
        'image' => 'widgets/about-us.png',
        'options' => [
            [
                'title'      => 'عنوان',
                'key'        => 'title',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12',
            ],
            [
                'title'      => 'متن زیر عنوان',
                'key'        => 'titleBot',
                'input-type' => 'textarea',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12',
            ],
            [
                'title'      => 'توضیحات',
                'key'        => 'description',
                'input-type' => 'textarea',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12',
                'attributes' => 'required rows="5"'
            ],
            [
                'title'      => 'آدرس تصویر',
                'key'        => 'image',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12 ',
                'attributes' => 'accept="image/*" style="text-align:left;direction: ltr;"',
                'help'       => 'بهترین اندازه 850 * 500'
            ],
            [
                'title'      => 'لینک',
                'key'        => 'link',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12 ',
                'attributes' => 'accept="image/*" style="text-align:left;direction: ltr;"',
            ]

        ],
        'rules' => [
            'description' => 'required',
        ]
    ],

    'work-samples' => [
        'title' => 'نمونه کارها',
        'image' => 'widgets/work-sample.png',
        'options' => [
            [
                'title'      => 'عنوان',
                'key'        => 'title',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-8 col-12',
            ],
            [
                'title'      => 'تعداد نمایش',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'class'      => 'col-md-4 col-12',
                'attributes' => 'style="text-align:left;direction: ltr;"',
            ],
            [
                'title'      => 'متن زیر عنوان',
                'key'        => 'titleBot',
                'input-type' => 'textarea',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12',
            ],

        ],
        'rules' => [
        ]
    ],

    'work-samples2' => [
        'title' => 'نمونه کارها نوع دوم',
        'image' => 'widgets/work-sample2.png',
        'options' => [
            [
                'title'      => 'عنوان',
                'key'        => 'title',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-8 col-12',
            ],
            [
                'title'      => 'تعداد نمایش',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'class'      => 'col-md-4 col-12',
                'attributes' => 'style="text-align:left;direction: ltr;"',
            ],
            [
                'title'      => 'متن زیر عنوان',
                'key'        => 'titleBot',
                'input-type' => 'textarea',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12',
            ],

        ],
        'rules' => [
        ]
    ],

    'posts' => [
        'title' => 'اخبار و مقالات',
        'image' => 'widgets/posts.png',
        'options' => [
            [
                'title'      => 'عنوان',
                'key'        => 'title',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-8 col-12',
            ],
            [
                'title'      => 'تعداد نمایش',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'class'      => 'col-md-4 col-12',
                'attributes' => 'style="text-align:left;direction: ltr;"',
            ],
            [
                'title'      => 'متن زیر عنوان',
                'key'        => 'titleBot',
                'input-type' => 'textarea',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12',
            ],

        ],
        'rules' => [
            'number' => 'required',
        ]
    ],

    'SpecialComment' => [
        'title' => 'نظرات ویژه',
        'image' => 'widgets/specialComment.png',
        'options' => [
            [
                'title'      => 'عنوان',
                'key'        => 'title',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-8 col-12',
            ],
            [
                'title'      => 'تعداد نمایش',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'class'      => 'col-md-4 col-12',
                'attributes' => 'style="text-align:left;direction: ltr;"',
            ],
            [
                'title'      => 'آدرس تصویر پس ضمینه',
                'key'        => 'image',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-12 col-12 ',
                'attributes' => 'accept="image/*" style="text-align:left;direction: ltr;"',
                'help'       => 'بهترین اندازه 850 * 500'
            ]

        ],
        'rules' => [
        ]
    ],

    'SpecialComment2' => [
        'title' => 'نظرات ویژه نوع دوم',
        'image' => 'widgets/specialComment2.png',
        'options' => [
            [
                'title'      => 'عنوان',
                'key'        => 'title',
                'input-type' => 'input',
                'type'       => 'text',
                'class'      => 'col-md-8 col-12',
            ],

            [
                'title'      => 'تعداد نمایش',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'class'      => 'col-md-4 col-12',
                'attributes' => 'style="text-align:left;direction: ltr;"',
            ],
            [
            'title'      => 'متن زیر عنوان',
            'key'        => 'titleBot',
            'input-type' => 'textarea',
            'type'       => 'text',
            'class'      => 'col-md-12 col-12',
        ],


        ],
        'rules' => [
        ]
    ],

    'WorkSampleTechnology' => [
        'title' => 'فناوری ها',
        'image' => 'widgets/Technology.png',
        'options' => [
            [
                'title'      => 'تعداد نمایش',
                'key'        => 'number',
                'input-type' => 'input',
                'type'       => 'number',
                'class'      => 'col-md-4 col-12',
                'attributes' => 'style="text-align:left;direction: ltr;"',
            ]

        ],
        'rules' => [
        ]
    ],
];
