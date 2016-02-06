<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "компания, веб студия, агентство, вакансии");
$APPLICATION->SetPageProperty("title", "Jam - О компании");
$APPLICATION->SetPageProperty("keywords", "компания, веб студия, агентство, вакансии");
$APPLICATION->SetPageProperty("description", "Работаем с 2011 года по всем городам России, в команде более 20 специалистов из разных городов с общим опытом работы более 100 лет!");
$APPLICATION->SetPageProperty("slider", "12");
$APPLICATION->SetTitle("Компания");
?>
<?php if ($APPLICATION->GetPageProperty('slider') && empty($_REQUEST['SECTION_CODE'])) {
    $GLOBALS['sliderFilter'] = array(
        "SECTION_ID" => $APPLICATION->GetPageProperty('slider')
    );
    /*
     * привязка к городу элементов слайдера, пока отключено
     */
    //$GLOBALS['sliderFilter'] = array_merge($GLOBALS['sliderFilter'], \Jam\JamSite\JamHelper::getCityFilter('element'))
    ?>
     <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "slider",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => "slider",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(0=>"ID",1=>"CODE",2=>"NAME",3=>"SORT",4=>"PREVIEW_TEXT",5=>"PREVIEW_PICTURE",6=>"DETAIL_TEXT",7=>"DETAIL_PICTURE",8=>"",),
            "FILTER_NAME" => "sliderFilter",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "16",
            "IBLOCK_TYPE" => "banner",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "NEWS_COUNT" => "20",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(0=>"LINK",1=>"",),
            "SET_BROWSER_TITLE" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SORT_BY1" => "SORT",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC"
        )
    );?> <?php }//if ($APPLICATION->GetPageProperty('slider') && empty($_REQUEST['SECTION_CODE'])?>
    <h1>О компании и принципах работы</h1>
<blockquote>
	 Работаем с 2011 года со всеми городами России, главный офис находится в Челябинске и представительский в Москве, в команду входят более 20 специалистов из разных городов с общим опытом работы более 100 лет!
</blockquote>
<h2>Ценности</h2>
<h3>Ответственность</h3>
<p>
	 Мы не молимся на иконы, но стараемся максимально ответственно подходить к работе, другого пути делать крутой продукт нет. Ответственность за конечный результат, если вы не сделали ховер ссылки, потому что его не было в макете — мы с вами не сработаемся.
</p>
<h3>Сила воли</h3>
<p>
	 Любимое дело, это не только моменты вдохновения, но и ежедневная рутина, поэтому необходимо уметь поднять себя рано утром и силой включить в работу.
</p>
<h3>Предприимчивость</h3>
<p>
	 Инициативность невозможно оплатить, она исходит от желания сделать лучше. Если мы решили заниматься рекламой, то будем стараться делать это лучше всех.
</p>
<h2>Работаем в мегаплане</h2>
<p>
	 Один проект можно вести в блокноте, два в Excel, десять в мегаплане. Сейчас уже представить сложно, как можно обойтись без диаграммы Ганта или без шаблонов задач. Качество начинается с порядка на рабочем месте.
</p>
<h2>70% сотрудников на фрилансе</h2>
<p>
	 Так уж получилось, что много операционных работ проходит на фрилансе. Мы любим фрилансеров, под час они даже организованней, чем внутренние сотрудники. Представьте, какую силу воли нужно иметь, чтобы заставить себя работать, когда ты вернулся с пляжа, где-нибудь на Бали :) Но стоит заметить, что это далеко не студенты, которые в любой момент могут пропасть, а взрослые люди, которые умеют нести за себя ответственность.
</p>
<h2>Ведем блог</h2>
<p>
	 Мы постоянно учимся и проводим массу исследований для совершенствования наших продуктов, поэтому рады поделиться с вами опытом и обменяться идеями.
</p>
<p>
	 Написать свою статью в блог может каждый сотрудник, мало того, мы достойно поощряем такую деятельность.
</p>
Смотреть вакансии<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
