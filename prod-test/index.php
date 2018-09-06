<?php
defined('_JEXEC') or die;
$app  = JFactory::getApplication();
$user = JFactory::getUser();
// Output as HTML5
$this->setHtml5(true);
// Getting params from template
$params = $app->getTemplate(true)->params;
// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');
//---------------------------------------------------------------------------------------------------//
// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');
// Add template js bootstrap
JHtml::_('script', 'template.js', array('version' => '2', 'relative' => true));
JHtml::_('script', 'popper.min.js', array('version' => '2', 'relative' => true));
JHtml::_('script', 'bootstrap.min.js', array('version' => '2', 'relative' => true));
JHtml::_('script', 'app.js', array('version' => '2', 'relative' => true));
JHtml::_('script', 'owl-carousel/owl.carousel.js', array('version' => '2', 'relative' => true));
JHtml::_('script', 'jouele.min.js', array('version' => '2', 'relative' => true));

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => '2', 'relative' => true, 'conditional' => 'lt IE 9'));
// Add Stylesheets
//JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'bootstrap.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'app.css', array('version' => '2', 'relative' => true));
JHtml::_('stylesheet', 'adaptive.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'owl-carousel/owl.carousel.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'owl-carousel/owl.theme.default.min.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'jouele.min.css', array('version' => 'auto', 'relative' => true));


// Load optional RTL Bootstrap CSS
//JHtml::_('bootstrap.loadCss', false, $this->direction);
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
</head>
<body>

<!--Основной блок с последним видео, всеми меню и прочим-->
<div class="main_last_video_wrapper">

    <div class="bg_wrapper">
        <!--Шапка с меню-->
        <div class="header_container">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <!--Logotype-->
                <a class="navbar-brand border-0" href="/">
                    <div class="logotype"></div>
                    <div class="slogan"></div>
                </a>
                <!-- Menu block start -->
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#main-navbar" aria-controls="main-navbar"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="main-navbar">
                    <jdoc:include type="modules" name="main_top_menu" style="xhtml" />
                </div>
                <!-- Menu block end -->
            </nav>
        </div>
        <?php if (JURI::current() == JURI::base()) : ?>
            <!--Основной блок с последним видео-->
            <jdoc:include type="modules" name="last_video_on_main" style="xhtml" />
            <div class="header_pic dark"></div>
            <div class="header_pic light"></div>
        <?php endif; ?>
    </div>

    <?php if (JURI::current() == JURI::base()) : ?>
    <!--Второе меню, которое снизу и поиск-->
    <div class="second_menu d-flex justify-content-center">
        <!--Второе меню-->
        <div class="scroll-menu-wrapper">
            <div class="nav justify-content-center scroll-menu">
                <jdoc:include type="modules" name="scroll_center_menu" style="xhtml" />
            </div>
        </div>
        <!--Поиск-->
        <jdoc:include type="modules" name="search_on_main" style="xhtml" />
    </div>
    <jdoc:include type="modules" name="kinamania_news_on_main" style="xhtml" />
    <?php endif; ?>
</div>

<!--Основное содержимое-->
<div class="container-fluid main_content">
        <jdoc:include type="message" />
        <jdoc:include type="component" />

    <?php if (JURI::current() == JURI::base()) : ?>
        <jdoc:include type="modules" name="last_videos" style="xhtml" />
        <jdoc:include type="modules" name="one_day_of_childhood" style="xhtml" />
        <jdoc:include type="modules" name="on_ps_age" style="xhtml" />
        <jdoc:include type="modules" name="on_kitchen" style="xhtml" />
        <jdoc:include type="modules" name="about_kinaman" style="xhtml" />
    <?php endif; ?>
</div>

<!--Подвал-->
<!--<footer class="footer">
    <div class="container-fluid row no-gutters">

        <div class="col-6">
            <div class="logotype"></div>
            <div class="copyright">
                <div class="compensate">@ Kinamania Production<br/></div>
                2011−<?=date('Y');?> все права защищены
            </div>
            <div class="contacts">
                <p>По всем вопросам <a href="mailto:kinaman@kinamania.com">kinaman@kinamania.com</a></p>
                <p>Дизайн <a href="https://www.behance.net/sada_ko">Sada-ko</a></p>
                <span>
                    <p style="font-size: 14px;">Разработка <a href="https://freelancehunt.com/freelancer/voron121.html" target="blank">Вадим Voron</a></p>
                </span>
            </div>
        </div>
        <div class="col-6 social text-right">
            <a href="https://vk.com/kinamania" class="mr-3">
                <i class="fa fa-vk fa-lg"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCkwMTlzAyrisud_xYwcgHkg" class="mr-3">
                <i class="fa fa-youtube-play fa-lg"></i>
            </a>
            <a href="https://www.facebook.com/KINAMANIA.OFFICIAL/">
                <i class="fa fa-facebook fa-lg"></i>
            </a>
        </div>
    </div>
</footer>
-->


<!--Подвал-->
<footer class="footer">
    <div class="container-fluid row no-gutters">

        <div class="col-12 col-xl-3 mb-3">
            <div class="logotype"></div>
            <div class="copyright">
                <div class="compensate">@ Kinamania Production<br/></div>
                2011−2017 все права защищены
            </div>

            <div class="contacts">
                <p>Дизайн <a href="https://www.behance.net/sada_ko">Sada-ko</a></p>
                <p>Разработка <a href="https://freelancehunt.com/freelancer/voron121.html" target="blank">Вадим Voron</a></p>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-3">
            <h3>Видео</h3>
            <ul class="text-muted">
                <li>
                    <a href="#">Проклятие Серого Слонёнка</a>
                </li>
                <li>
                    <a href="#">Один День Детства</a>
                </li>
                <li>
                    <a href="#">Dendy Chronicles</a>
                </li>
                <li>
                    <a href="#">Dendy Memories</a>
                </li>
                <li>
                    <a href="#">На кухне</a>
                </li>
                <li>
                    <a href="#">Спецвыпуски</a>
                </li>
                <li>
                    <a href="#">Другое видео</a>
                </li>
            </ul>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-3">
            <h3>Музыка</h3>
            <ul class="text-muted">
                <li>
                    <a href="#">Каверы</a>
                </li>
                <li>
                    <a href="#">Песни П. Гринёва</a>
                </li>
                <li>
                    <a href="#">Саундтреки</a>
                </li>
            </ul>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-xl-2 mb-3">
            <h3>Кинахроника</h3>
            <ul class="text-muted">
                <li>
                    <a href="#">Наши 90-е</a>
                </li>
                <li>
                    <a href="#">Кинаман</a>
                </li>
                <li>
                    <a href="#">Арты</a>
                </li>
                <li>
                    <a href="#">Заметки</a>
                </li>
                <li>
                    <a href="#">Интервью</a>
                </li>
            </ul>
        </div>

        <div class="text-xl-right col-12 col-md-6 col-xl-3">

            <div class="social">
                <a href="#" class="mr-3">
                    <i class="fa fa-vk fa-lg"></i>
                </a>

                <a href="#" class="mr-3">
                    <i class="fa fa-youtube-play fa-lg"></i>
                </a>

                <a href="#">
                    <i class="fa fa-facebook fa-lg"></i>
                </a>
            </div>
                <p>По всем вопросам <a href="mailto:kinaman@kinamania.ru">kinaman@kinamania.ru</a></p>
        </div>

    </div>
</footer>

	<jdoc:include type="modules" name="debug" style="none" />
    <script src="https://use.fontawesome.com/79ca9ae758.js"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter19981870 = new Ya.Metrika2({ id:19981870, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/19981870" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>
