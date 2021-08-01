<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'required' => ':attribute'.' ضروری می باشد',
    'exists'   => 'مقدار انتخاب شده برای '.':attribute'.' وجود ندارد',
    'active'   => ':attribute'.' فعال نمی باشد',
    'enable'   => ':attribute'.' فعال نمی باشد',
    'numeric'  => ':attribute'.' باید یک عدد باشد',
    'min'      => [
        'numeric' => ':attribute'.' باید حداقل '.':min'.' باشد',
        'file'    => ':attribute'.' باید حداقل '.':min'.' کیلوبایت باشد',
        'string'  => ':attribute'.' باید حداقل '.':min'.' کاراکتر باشد',
        'array'   => ':attribute'.' باید حداقل دارای '.':min'.' آیتم باشد',
    ],
    'boolean'  => ':attribute'.' باید مقدار بولین داشته باشد',
    'date'     => ':attribute'.' یک تاریخ معتبر نیست',
    'size'     => [
        'numeric' => ':attribute'.' باید '.':size'.' باشد ',
        'file'    => ':attribute'.' باید '.':size'.' کیلوبایت باشد ',
        'string'  => ':attribute'.' باید '.':size'.' کاراکتر باشد ',
        'array'   => ':attribute'.' باید شامل '.':size'.' آیتم باشد ',
    ],
    'unique'   => ':attribute'.' قبلا ثبت شده است',
    'digits'   => ':attribute'.' باید :digits رقم باشد.',


    'custom' => [
        'user_id'  => [
            'unique' => 'شما قبلا برای این سوال رأی داده اید',
        ],
        'password' => [
            'min' => 'کد ملی باید :min رقم باشد.',
        ],
    ],


    'attributes' => [
        'owner_id'      => 'صاحب سوال',
        'user_id'       => 'کاربر',
        'category_id'   => 'دسته',
        'vote_id'       => 'سوال',
        'option_id'     => 'گزینه',
        'enable'        => 'فعال/غیرفعال',
        'subject'       => 'عبارت',
        'display_name'  => 'نام',
        'name'          => 'نام',
        'national_code' => 'کد ملی',
        'order'         => 'ترتیب',
        'title'         => 'عنوان',
        'valid_since'   => 'تاریخ شروع',
        'valid_until'   => 'تاریخ پایان',
        'mobile'        => 'موبایل',
        'password'      => 'کد ملی',
        'code'          => 'کد',
    ],
];
