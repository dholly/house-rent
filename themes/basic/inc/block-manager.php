<?php

function get_block($name, $args = null)
{
    if (function_exists($name))
        $name($args);
    /*$last_tick = timer_stop(0, 3);
    $diff = str_replace(',','.',$last_tick)-(float)str_replace(',','.',$GLOBALS['last_tick']);
    echo '<b style = "font-size:24px">'.$name.' WP-time:' .number_format($diff,3) . '</b>';
    $GLOBALS['last_tick'] = $last_tick;*/
}

function headertop($args)
{
    $args ['socials'] = [
        ['icon' => 'youtube',
            'link' => 'https://www.youtube.com/#',
        ],
        [
            'icon' => 'instagram',
            'link' => 'https://www.instagram.com/#',
        ],
        [
            'icon' => 'vk',
            'link' => 'https://vk.com/#',
        ],
    ];
    ?>

    <div class="header" id="header">
        <div class="header__top">
            <div class="mw d-flex je">
                <div class="header-socials">
                    <div class="header-phone">
                        <a class="icon-phone" href="tel:+79998886996"><span>+7 (999) 888-69-96</span></a>
                    </div>
                    <?php foreach ($args['socials'] as $contact) {
                        ?>
                        <div class="header-socials-icon">
                            <a class="
                            icon-<?php echo $contact['icon'] ?>"
                               href="<?php echo $contact['link'] ?>">
                            </a>
                        </div>
                        <?php
                    }
                    ?> </div>
            </div>
        </div>
        <div class="header-wrap">
            <div class="mw d-flex jb     ac">
                <a class="header-logo" href="<?php echo get_site_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/inc/images/logo.png">
                </a>

                <div class="header-menu">


                    <ul class="header-menu-links">
                        <li><a href="<?php echo get_site_url() ?>" class="nav-item" id="home">Главная</a></li>
                        <li><a id="features" class="nav-item">Услуги</a></li>
                        <li><a id="faq" class="nav-item">Частые вопросы</a></li>
                        <li><a id="whyus" class="nav-item">Тарифы</a></li>
                        <li><a id="contacts" class="nav-item">Контакты</a></li>
                    </ul>


                    <?php
                    /*
                                        wp_nav_menu(['menu' => 'primary', 'menu_class' => 'header-menu-links'])
                    */
                    ?>


                    <div class="burger-wrap">
                        <div class="burger"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function contactformHeader($args)
{
    ?>
    <!-- <div class="contactform">
        <div class="contactform-title">Свяжитесь с нами</div>
        <div class="contactform-form">
            <label for="Ваше имя" class="contactform-label">Ваше имя</label>
            <input type="text" class="contactform-input" placeholder="Как к вам обращаться?">
        </div>
        <div class="contactform-form">
            <label for="Ваш телефон" class="contactform-label">Ваш телефон</label>
            <input type="text" class="contactform-input" placeholder="Телефон">
        </div>


        <div class="contactform-form-submit">
            <button class="contactform-form-submit-button">Отправить</button>
        </div>
    </div>-->
    <div class="cf7-wrap">
        <?php

        echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]');
        ?>
    </div>
    <?php

}

function headermedia($args)
{
    ?>
    <div class="headermedia">
        <div class=" headermedia-info-wrap mw">
            <div class="headermedia-preview-wrap">
                <div class="headermedia-preview">
                    <div class="headermedia-title">
                        Доверительное управление квартирами в Сочи
                    </div>
                    <div class="headermedia-text">
                        Сдавайте квартиру в аренду с помощью управляющего, с гарантией всех оплат и заботой о вашем
                        имуществе.

                    </div>
                </div>
            </div>
            <div class="headermedia-form-wrap">
                <div class="headermedia-form">
                    <?php
                    get_block('contactformHeader', ($args));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}


function contactformWhyus($args)
{
    ?>
    <?php
    echo do_shortcode('[contact-form-7 id="24" title="Контактная форма 2"]');

    ?>
    <!-- <div class="contactform onwhyus-form">
        <div class="contactform-title">Свяжитесь с нами</div>
        <div class="contactform-form">
            <input type="text" class="contactform-input onwhyus-inputs" placeholder="Как к вам обращаться?">
        </div>
        <div class="contactform-form">
            <input type="text" class="contactform-input onwhyus-inputs" placeholder="Телефон">
        </div>
        <div class="contactform-form">
            <input type="text" class="contactform-input onwhyus-inputs" placeholder="Электронная почта">
        </div>
        <div class="contactform-form">
            <textarea class="contactform-input message onwhyus-inputs"
                      placeholder="Обращайтесь по любому вопросу!"></textarea>
        </div>
        <div class="contactform-form-submit">
            <button class="contactform-form-submit-button">Отправить</button>
        </div>
    </div> -->
    <?php
}

function footer($args)
{
    $args ['contacts'] = [
        [
            'icon' => 'location',
            'link' => '#',
            'text' => 'Москва, ул. Пушкина д. 34'
        ],
        [
            'icon' => 'phone',
            'link' => 'tel:#',
            'text' => '+79998886996'
        ],
        [
            'icon' => 'envelope',
            'link' => 'mailto:arenda@mail.com',
            'text' => 'arenda@mail.com'
        ],
    ];
    $args ['socials'] = [
        ['icon' => 'youtube',
            'link' => 'https://www.youtube.com/#',

        ],
        [
            'icon' => 'instagram',
            'link' => 'https://www.instagram.com/#',
        ],
        [
            'icon' => 'vk',
            'link' => 'https://vk.com/#',
        ],
    ];
    ?>
    <div class="footer">
        <div class="footer-wrap mw">
            <div class="footer-info">
                <div class="footer-logo">
                    <a href="<?php echo get_site_url() ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/inc/images/logo.png">
                    </a>
                </div>
                <div class="footer__socials">
                    <?php foreach ($args['socials'] as $contact) {
                        ?>
                        <div class="socials-icon">
                            <a class="
                            icon-<?php echo $contact['icon'] ?>"
                               href="<?php echo $contact['link'] ?>">
                            </a>
                        </div>
                        <?php
                    }
                    ?> </div>
            </div>
            <div class="footer-links">
                <div class="footer-links-title">Страницы</div>
                <div class="footer-links-text">
                    <div>
                        <a id="features-footer">Услуги</a>
                    </div>
                    <div>
                        <a id="faq-footer">Частые вопросы</a>
                    </div>
                    <div>
                        <a id="whyus-footer">Тарифы</a>
                    </div>
                </div>
            </div>
            <div class="footer-contacts">
                <div class="footer-contacts-title">Связаться с нами</div>
                <?php foreach ($args['contacts'] as $contact) {
                    ?>
                    <div class="footer-contacts__item">
                        <a class="
                            icon-<?php echo $contact['icon'] ?>"
                           href="<?php echo $contact['link'] ?>">

                            <?php echo $contact['text'] ?>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php


}

function underfooter($args)
{
    ?>
    <div class="underfooter">
        <div class="underfooter-wrap mw">
            <div class="underfooter-first">
                <div class="underfooter-icon icon-checkmark"></div>
                <div class="underfooter-title">1500</div>
                <div class="underfooter-text">Довольных клиентов</div>
            </div>
            <div class="underfooter-second">
                <div class="underfooter-icon icon-file-text2"></div>
                <div class="underfooter-title">500</div>
                <div class="underfooter-text">Завершенных договоров</div>
            </div>
            <div class="underfooter-third">
                <div class="underfooter-icon icon-checkmark"></div>
                <div class="underfooter-title">500</div>
                <div class="underfooter-text">Арендованных квартир</div>
            </div>
        </div>
    </div>

    <?php
}

function howitworks($args)
{
    if (!$args || count($args) === 0) {
        $args['title'] = 'Как это работает?';
        $args['subtitle'] = 'Оперативно находим надежных жильцов, которые будут проживать в квартире длительный срок. Оформляем
                    подробный договор найма. Берем на себя все хлопоты';
        $args['items'] = [
            [
                'icon' => 'file-text2',
                'title' => 'Заключаем договор',
                'caption' => 'Заключаем с Вами агентский договор, все права на квартиру остаются у вас.'
            ],
            [
                'icon' => 'file-text2',
                'title' => 'Находим жильцов',
                'caption' => 'Мы организовываем поиск и тщательно отбираем жильцов в вашу квартиру.'
            ],
            [
                'icon' => 'file-text2',
                'title' => 'Контролируем проживание',
                'caption' => 'Мы берем на себя все заботы по контролю проживания жильцов и оперативно решаем любые проблемы.'
            ],
            [
                'icon' => 'file-text2',
                'title' => 'Вы получаете доход',
                'caption' => 'Ежемесячно начисляем Вам арендную плату и предоставляем отчет о сдаче квартиры.'
            ],
        ];

    }
    ?>
    <div class="howitworks mw">
        <div class="howitworks-wrap">
            <div class="howitworks-info">
                <div class="howitworks-info-title">
                    <?php echo $args['title'] ?>
                </div>
                <div class="howitworks-info-text">
                    <?php echo $args['subtitle'] ?>
                </div>
            </div>
            <div class="howitworks-content-wrap">
                <?php foreach ($args['items'] as $item) {
                    ?>
                    <div class="howitworks-content">
                        <div class="howitworks__icon-wrap">
                            <div class="howitworks__icon icon-<?php echo $item['icon'] ?>">
                            </div>
                        </div>
                        <div class="howitworks-content-title"><?php echo $item['title'] ?></div>
                        <div class="howitworks-content-text"><?php echo $item['caption'] ?></div>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </div>
    <?php
}

function extrafooter()
{
    ?>
    <div class="scrollup icon-scrollup"></div>
    <div class="focusbackground"></div>

    <div class="extrafooter">
        <div class="mw fw">
        <span>
            <span><?php bloginfo('name'); ?></span>
            <span>@</span>
            <span><?php echo get_the_date('Y'); ?></span>
        </span>
            <span>
            &nbsp;Все права защищены
       </span>
            <div>
                <a class="extrafooter-link">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
    <?php
}

function features($args)
{
    $class = isset($args['class']) ? $args['class'] : '';
    $style = "background-image:url(" . $args['img'] . ")";
    ?>
    <div class="features <?php echo $class ?>">
        <div class="features-preview" style="<?php echo $style ?>"></div>
        <div class="features-inview">
            <div class="features-inview__caption"><?php echo $args['caption'] ?></div>
            <div class="features-inview__title"><?php echo $args['title'] ?></div>
            <?php
            foreach ($args['blocks'] as $block) {
                ?>
                <div class="features-inview-content d-flex ac">
                    <img src="<?php echo $block['img'] ?>">
                    <div>
                        <div class="features-inview-title"><?php echo $block['title'] ?></div>
                        <div class="features-inview-text"><?php echo $block['description'] ?></div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}

function featuresback()
{
    ?>
    <div class="features mw">
        <div class="features-wrap second">

            <div class="features-inview">
                <div class="features-inview-doublewrap">
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-coin-dollar"></div>
                        <!-- <div class="features-inview-title">При поиске жильцов</div> -->
                        <div class="features-inview-text">Оперативно находим надежных жильцов, которые будут проживать в
                            квартире длительный срок. Оформляем подробный договор найма. Берем на себя все хлопоты
                        </div>
                    </div>
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-coin-dollar"></div>
                        <div class="features-inview-title">До вселения жильцов</div>
                        <div class="features-inview-text">Проверяем по специальным базам (судимости, судебные
                            производства, исполнительные производства), изучаем репутацию. Фиксируем все особенности
                            квартиры, принимаем звонки жильцов круглосуточно и отвечаем на вопросы
                        </div>
                    </div>
                </div>
                <div class="features-inview-doublewrap">
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-coin-dollar"></div>
                        <!--<div class="features-inview-title">При проживании жильцов</div> -->
                        <div class="features-inview-text">Полностью сопровождаем проживание жильцов, контролируем
                            выполнение жильцами своих обязанностей, находимся круглосуточно на связи, решаем возникающие
                            проблемы
                        </div>
                    </div>
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-coin-dollar"></div>
                        <div class="features-inview-title">После проживания жильцов</div>
                        <div class="features-inview-text">Сопровождаем расторжение договора найма и обеспечиваем полное
                            погашение задолженности и подготовку квартиры к новым жильцам
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-preview">
                <div class="features-preview-title">
                    <div class="features-preview-title-pre">Услуги нашей компании</div>
                    Что мы предлагаем:
                </div>
                <div class="features-preview-img">
                </div>
                <div class="features-preview-button"><a>Узнать подробнее</a></div>
            </div>
        </div>
    </div>
    <?php
}

function whyus()
{
    ?>
    <div class="whyus navsection mw">
        <div class="whyus-wrap">
            <div class="whyus-content">
                <div class="whyus-title">
                    Как мы оформляем договор аренды (найма):
                </div>
                <div class="whyus-edge">
                    <div class="whyus-edge-text">Наши формы договоров и передаточных актов
                        оттачивались годами, прошли десятки выигранных
                        судов и содержат все нюансы, которые важны при
                        проживании жильцов. Мы знаем что прописать в
                        ‘договоре, чтобы снизить количество споров с
                        жильцами, защитить Ваши интересы и обеспечить
                        ответственность жильцов.
                    </div>
                    <div class="whyus-edge-links ">
                        <ul>
                            <li><a>Договор оферты</a></li>
                            <li><a>Поручение по доверительному управлению</a></li>
                            <li><a>Поручение по поиску жильцов</a></li>
                            <li><a>Политика приватности</a></li>
                            <li><a>Проект договора найма</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="whyus-form-wrap">
                <div class="whyus-form">
                    <?php
                    get_block('contactformWhyus');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function chooseus()
{
    ?>
    <div class="chooseus">
        <div class="chooseus-top-bg d-flex fc jc ac tc">
            <div class="chooseus-top-title">Почему выбирают нашу компанию?</div>
            <div class="chooseus-top-text">Мы гарантированно сделаем за вас всё!</div>
        </div>
        <div class="chooseus-bottom mw">
            <div class="chooseus-bottom-content bg1">
                <div class="chooseus-bottom-contentbg">
                    <div class="chooseus-bottom-title">Доходность</div>
                    <div class="chooseus-bottom-text">Действуем в ваших интересах и экономим затраты на содержание
                        квартиры, чем повышаем ваши доходы
                    </div>
                </div>
            </div>
            <div class="chooseus-bottom-content bg2">
                <div class="chooseus-bottom-contentbg">
                    <div class="chooseus-bottom-title">Круглосуточное дежурство</div>
                    <div class="chooseus-bottom-text">На связи 24/7 и готовы к выезду по адресу квартиры для
                        решения любых вопросов.
                    </div>
                </div>
            </div>

            <div class="chooseus-bottom-content bg3">
                <div class="chooseus-bottom-contentbg">
                    <div class="chooseus-bottom-title">Только надежные жильцы</div>
                    <div class="chooseus-bottom-text">Проверяем кандидатов через специальный сервис
                        кредитную историю, историю правонарушений, судебные долги и другое.
                    </div>
                </div>
            </div>

            <div class="chooseus-bottom-content bg4">
                <div class="chooseus-bottom-contentbg">
                    <div class="chooseus-bottom-title">Все это без ваших хлопот</div>
                    <div class="chooseus-bottom-text">Вы можете находиться в любой части мира. Мы
                        контролируем весь процесс аренды квартиры
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php
}

function faq()
{
    ?>
    <div class="faq navsection mw">
        <div class="faq-title tc">FAQ</div>
        <div class="faq-pretitle tc">Самые частозадаваемые вопросы</div>
        <div class="faq-content-wrap">
            <div class="faq-content">
                <div class="faq-content-icon icon-question"></div>
                <div class="faq-content-title">Могу ли я передать вам все заботы или вообще проживать в другом
                    месте?
                </div>
                <div class="faq-content-text">Да, конечно. Все вопросы при сдаче квартиры в наем мы берем на себя,
                    место Вашего жительства не имеет значения при нашей работы. Наши услуги как раз и наиболее
                    востребованы собственниками, проживающими в другом населенном пункте или странe.
                    клиентов).
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-content-icon icon-question"></div>
                <div class="faq-content-title">Должен ли собственник присутствовать при показе квартиры?</div>
                <div class="faq-content-text">Нет. Мы самостоятельно показываем квартиру. Однако право
                    присутствовать у собственника, безусловно, имеется.
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-content-icon icon-question"></div>
                <div class="faq-content-title">Как и кем устанавливается цена аренды квартиры?</div>
                <div class="faq-content-text">Размер арендной платы устанавливает собственник.
                    Мы только даем рекомендации по размеру арендной платы.
                    Пока квартира находится в поиске жильцов, раз в неделю с собственником связывается координатор и
                    докладывает о процессе поиска.
                </div>
            </div>
        </div>
        <div class="tc">
            <!-- <a class="faq-button">Подробнее</a> -->
        </div>

    </div>
    <?php
}

function tariffs()
{
    ?>
    <div class="tariff whyus navsection mw">
        <div class="faq-title tc">Наши тарифы</div>
        <div class="faq-pretitle tc">Мы предлагаем два основных тарифа</div>
        <div class="tariff-grid">
            <div class="tariff-desc">
                <span></span>
                <div>Персональный менеджер</div>
                <div>Размещение рекламы на платформах</div>
                <div>Профессиональная фотосъёмка квартиры</div>
                <div>Организация заезда/выезда</div>
                <div>Онлайн платежи</div>
                <div>Коммуникация с гостями</div>
                <div>Организация уборки</div>
                <div>Замена постельного белья</div>
                <div>Банные принадлежности</div>
                <div>Техническое сопровождение</div>
            </div>
            <div>
                <div class="tariff-fift"><span>Комиссия&nbsp;</span>  15%</div>
                <div class="tariff-point tariff-borders">
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-no icon-clear"></div>
                    <div class="tariff-no icon-clear"></div>
                    <div class="tariff-no icon-clear"></div>
                    <div class="tariff-no icon-clear"></div>
                    <div class="tariff-no icon-clear"></div>
                    <div class="tariff-no icon-clear"></div>
                </div>
            </div>
            <div>
                <div class="tariff-twent"><span>Комиссия&nbsp;</span> 20%</div>
                <div class="tariff-point">
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                    <div class="tariff-yes icon-checkmark"></div>
                </div>
            </div>
        </div>
        <div class='tariff-btn'>
            <div class="tariff-button">Приобрести</div>
        </div>
        <div class="tariff-popup">
            <?php
            get_block('contactformWhyus');
            ?>
        </div>
    </div>

    <?php
}

