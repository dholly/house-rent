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

    <div class="header">
        <div class="header-wrap mw">
            <div class="header-logo">
                <a href="<?php echo get_site_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/inc/images/logo.png">
                </a>
            </div>
            <div class="header-socialslinks-wrap">
                <div class="header-socials">
                    <div class="header-phone">

                        <a class="icon-phone" href="tel:+79998886996"><span>+79998886996</span></a>
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
                <div class="header-menu">
                    <div class="header-menu-links">
                        <a>Главная</a>
                        <a>Документы</a>
                        <a>Контакты</a>
                    </div>
                    <div class="burger-wrap">
                        <div class="burger"><span></span></div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <?php
}

function headermedia($args)
{
    ?>
    <div class="headermedia">
        <div class=" headermedia-info-wrap">
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

                    get_block('contactformHeader'($args));
        ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function contactformHeader($args)
{
    ?>
    <div class="contactform">
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
            <button>Отправить</button>
        </div>
    </div>
    <?php
}
function contactformWhyus($args)
{
    ?>
    <div class="contactform onwhyus-form">
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
            <textarea  class="contactform-input message onwhyus-inputs" placeholder="Обращайтесь по любому вопросу!"></textarea>
        </div>

        <div class="contactform-form-submit">
            <button>Отправить</button>
        </div>
    </div>
    <?php
}

function footer($args)
{
    $args ['contacts'] = [
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
        [
            'icon' => 'location',
            'link' => '#',
            'text' => 'Москва, ул. Пушкина д. 34'
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
    <div class="footer-bg">
        <div class="footer mw">
            <div class="footer-logo">
                <a href="<?php echo get_site_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/inc/images/logo.png">
                </a>
            </div>
            <div class="footer-wrap">

                <div class="footer-info">
                    <div class="footer-info-title">Аренда квартир</div>
                    <div class="footer-info-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua.
                    </div>

                </div>
                <div class="footer-links">
                    <div class="footer-links-title">Ссылки</div>
                    <div class="footer-links-text">
                        <div>
                            <a>О нас</a>
                        </div>
                        <div>
                            <a>Отзывы</a>
                        </div>
                        <div>
                            <a>Документы</a>
                        </div>
                    </div>
                </div>
                <div class="footer-contacts">
                    <div class="footer-contacts-title">Связаться с нами</div>
                    <div class="footer-contacts-icons">
                        <div class="footer__icons-contacts">
                            <?php foreach ($args['contacts'] as $contact) {
                                ?>
                                <div class="">
                                    <a class="
                            icon-<?php echo $contact['icon'] ?>"
                                       href="<?php echo $contact['link'] ?>">

                                        <?php echo $contact['text'] ?>
                                    </a>
                                </div>
                                <?php
                            }
                            ?> </div>
                    </div>
                </div>

            </div>
            <div class="footer__icons-socials">
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
                <div class="underfooter-title">500</div>
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
    ?>
    <div class="howitworks mw">
        <div class="howitworks-wrap">
            <div class="howitworks-info">
                <div class="howitworks-info-title">
                    Как это работает?
                </div>
                <div class="howitworks-info-text">
                    Оперативно находим надежных жильцов, которые будут проживать в квартире длительный срок. Оформляем
                    подробный договор найма. Берем на себя все хлопоты
                </div>
            </div>
            <div class="howitworks-content-wrap">
                <div class="howitworks-content">
                    <div class="icon">
				<span class="icon__square">
                    <div class="icon__content icon-envelope"></div>				</span>
                    </div>
                    <div class="howitworks-content-title">Мы cвяжемся с вами и скинем на почту договор</div>
                    <div class="howitworks-content-text">There are many variations of passages
                        of Lorem Ipsum available, but the majority
                        have Ipsum available.
                    </div>
                </div>
                <div class="howitworks-content">
                    <div class="icon">
				<span class="icon__square">
                    <div class="icon__content icon-file-text2"></div>				</span>
                    </div>
                    <div class="howitworks-content-title">Заключаем договор и начинаем сдавать с этого же дня</div>
                    <div class="howitworks-content-text">There are many variations of passages
                        of Lorem Ipsum available, but the majority
                        have Ipsum available.
                    </div>
                </div>
                <div class="howitworks-content">
                    <div class="icon">
				<span class="icon__square">
                    <div class="icon__content icon-coin-dollar"></div>
                </span>
                    </div>
                    <div class="howitworks-content-title">Через неделю получаете свои первые деньги</div>
                    <div class="howitworks-content-text">There are many variations of passages
                        of Lorem Ipsum available, but the majority
                        have Ipsum available.
                    </div>
                </div>
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
                <a class="extrafooter-link">Соглашение</a>
                <span>&nbsp;|&nbsp;</span>
                <a class="extrafooter-link">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
    <?php
}

function features()
{
    ?>
    <div class="features mw">
        <div class="features-wrap">

            <div class="features-preview">


                <div class="features-preview-title">
                    <div class="features-preview-title-pre">Услуги нашей компании</div>
                    Что мы предлагаем:
                </div>
                <div class="features-preview-img">

                </div>
                <div class="features-preview-button"><a>Узнать подробнее</a></div>

            </div>

            <div class="features-inview">
                <div class="features-inview-doublewrap">
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-happy"></div>
                        <div class="features-inview-title">При поиске жильцов</div>
                        <div class="features-inview-text">Оперативно находим надежных жильцов, которые будут проживать в
                            квартире длительный срок. Оформляем подробный договор найма. Берем на себя все хлопоты
                        </div>
                    </div>
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-happy"></div>
                        <div class="features-inview-title">До вселения жильцов</div>
                        <div class="features-inview-text">Проверяем по специальным базам (судимости, судебные
                            производства, исполнительные производства), изучаем репутацию. Фиксируем все особенности
                            квартиры, принимаем звонки жильцов круглосуточно и отвечаем на вопросы
                        </div>
                    </div>
                </div>
                <div class="features-inview-doublewrap">
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-happy"></div>
                        <div class="features-inview-title">При проживании жильцов</div>
                        <div class="features-inview-text">Полностью сопровождаем проживание жильцов, контролируем
                            выполнение жильцами своих обязанностей, находимся круглосуточно на связи, решаем возникающие
                            проблемы
                        </div>
                    </div>
                    <div class="features-inview-content">
                        <div class="features-inview-icon icon-happy"></div>
                        <div class="features-inview-title">После проживания жильцов</div>
                        <div class="features-inview-text">Сопровождаем расторжение договора найма и обеспечиваем полное
                            погашение задолженности и подготовку квартиры к новым жильцам
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function whyus()
{
    ?>
    <div class="whyus mw">
        <div class="whyus-wrap">
            <div class="whyus-content">
                <div class="whyus-title">
                    <div class="whyus-title-pre">Почему выбирают нас?</div>
                    Наши клиенты выбирают нас потому что:
                </div>
                <div class="whyus-edges">
                    <div class="whyus-edge">
                        <div class="whyus-edge-icon icon-happy"></div>
                        <div class="whyus-edge-wrap">
                            <div class="whyus-edge-title">
                                Lorem ipsum 100%
                            </div>
                            <div class="whyus-edge-text">Aliquam bibendum vel ipsum sit amet commodo. Curabitur porta
                                ornare.
                            </div>
                        </div>
                    </div>

                    <div class="whyus-edge">
                        <div class="whyus-edge-icon icon-happy"></div>
                        <div class="whyus-edge-wrap">
                            <div class="whyus-edge-title">
                                Lorem ipsum 100%
                            </div>
                            <div class="whyus-edge-text">Aliquam bibendum vel ipsum sit amet commodo. Curabitur porta
                                ornare.
                            </div>
                        </div>
                    </div>
                    <div class="whyus-edge">
                        <div class="whyus-edge-icon icon-happy"></div>
                        <div class="whyus-edge-wrap">
                            <div class="whyus-edge-title">
                                Lorem ipsum 24/7
                            </div>
                            <div class="whyus-edge-text">Aliquam bibendum vel ipsum sit amet commodo. Curabitur porta
                                ornare.
                            </div>
                        </div>
                    </div>
                    <div class="whyus-edge">
                        <div class="whyus-edge-icon icon-happy"></div>
                        <div class="whyus-edge-wrap">
                            <div class="whyus-edge-title">
                                Lorem ipsum 24/7
                            </div>
                            <div class="whyus-edge-text">Aliquam bibendum vel ipsum sit amet commodo. Curabitur porta
                                ornare.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whyus-form-wrap">
                <div class="whyus-form">
                    <?php

                    get_block('contactformWhyus'($args));
        ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}