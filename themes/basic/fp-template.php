<?php
/*
Template Name: Шаблон главной
Template Post Type: page
*/
get_header();
?>

<?php

get_block('headertop');

get_block('headermedia');

get_block('howitworks');

$args = [
    'caption'=>'',
    'title'=>'Наши услуги',
    'img'=>get_template_directory_uri().'/inc/images/features1.png',
    'blocks'=>[
        [
            'img'=>get_template_directory_uri().'/inc/images/features1.png',
            'title'=>'Профессиональная уборка квартиры и замена постельного белья',
            'description'=>'Качественно уберемся в вашей квартире до и после проживания жильцов'
        ],
        [
            'img'=>get_template_directory_uri().'/inc/images/features1.png',
            'title'=>'Поддержка и мелкий ремонт',
            'description'=>'Проведем быстрый ремонт и будем поддерживать вашу в квартиру в пригодном состоянии'
        ],
        [
            'img'=>get_template_directory_uri().'/inc/images/features1.png',
            'title'=>'Банные принадлежности',
            'description'=>'Мы закупим и пополним средства личной гигиены в вашей квартире'
        ],
        [
            'img'=>get_template_directory_uri().'/inc/images/features1.png',
            'title'=>'Составим граммотный и надежный договор с квартирантами',
            'description'=>'Наши юристы помогут составить надежные юридические документы'
        ]
    ]
];
get_block('features',$args);

$args = [
    'class'=>'rtl',
    'caption'=>'',
    'title'=>'Наши услуги',
    'img'=>get_template_directory_uri().'/inc/images/features2.png',
    'blocks'=>[
        [
            'img'=>get_template_directory_uri().'/inc/images/features2.png',
            'title'=>'Размещение рекламы на платформах',
            'description'=>'Мы размещаем рекламу на различных площадках и принимаем звонки от жильцов'
        ],
        [
            'img'=>get_template_directory_uri().'/inc/images/features2.png',
            'title'=>'Персональные встречи и приветствия гостей',
            'description'=>'Лично встретимся и поприветсвуем ваших гостей'
        ],
        [
            'img'=>get_template_directory_uri().'/inc/images/features2.png',
            'title'=>'Коммуникации с гостями по всем вопросам',
            'description'=>'Самостоятельно коммуницируем с гостями и отвечаем на все их вопросы'
        ],
        [
            'img'=>get_template_directory_uri().'/inc/images/features2.png',
            'title'=>'Профессиональные фотографии квартиры',
            'description'=>'Наши опытные фотографы представят ваше помещение в самом выгодном ключе'
        ]
    ]
];
get_block('features',$args);


get_block('chooseus');

get_block('tariffs');

//get_block('whyus');

get_block('faq');

get_footer();
