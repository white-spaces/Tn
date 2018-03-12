<?php
  function wpb_customize_register($wp_customize){
    // showcase

    $wp_customize->add_panel('front_page', array(
      'priority' => 210,
      'title' => 'Tækninám Content'
    ));

    $wp_customize->add_section('showcase', array(
      'title' => __('Hetju - Kafli', 'taekninam'),
      'description' => sprintf(__('Valmökuleikar fyrir Lendingu', 'taekninam')),
      'priority' => 2,
      'panel' => 'front_page'
    ));

    $wp_customize->add_section('nav', array(
      'title' => __('Haus - kafli', 'taekninam'),
      'description' => sprintf(__('Valmökuleikar fyrir Leiðsögn', 'taekninam')),
      'priority' => 1,
      'panel' => 'front_page'
    ));

    $wp_customize->add_section('icon', array(
      'title' => __('Þumal - kafli', 'taekninam'),
      'description' => sprintf(__('Valmökuleikar fyrir Þumla', 'taekninam')),
      'priority' => 3,
      'panel' => 'front_page'
    ));

    $wp_customize->add_section('category', array(
      'title' => __('Flokkar - kafli', 'taekninam'),
      'description' => sprintf(__('Valmökuleikar fyrir Flokka', 'taekninam')),
      'priority' => 4,
      'panel' => 'front_page'
    ));

    $wp_customize->add_section('contact', array(
      'title' => __('Hafa Samband - kafli', 'taekninam'),
      'description' => sprintf(__('Valmökuleikar fyrir Hafa Samband', 'taekninam')),
      'priority' => 5,
      'panel' => 'front_page'
    ));

    $wp_customize->add_section('about', array(
      'title' => __('Um Okkur - kafli', 'taekninam'),
      'description' => sprintf(__('Valmökuleikar fyrir Um Okkur', 'taekninam')),
      'priority' => 6,
      'panel' => 'front_page'
    ));

    $wp_customize->add_section('footer', array(
      'title' => __('Fótur - kafli', 'taekninam'),
      'description' => sprintf(__('Valmökuleikar fyrir Fót', 'taekninam')),
      'priority' => 7,
      'panel' => 'front_page'
    ));

    $wp_customize->add_setting('nav-btn-1', array(
      'default' => _x('Námskeið ', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-btn-1', array(
      'label' => __('Fyrsti Linkur', 'taekninam'),
      'section' => 'nav',
      'priority' => 1
    ));

    $wp_customize->add_setting('nav-btn-2', array(
      'default' => _x('Hafa Samband ', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-btn-2', array(
      'label' => __('Seinni Linkur', 'taekninam'),
      'section' => 'nav',
      'priority' => 2
    ));

    $wp_customize->add_setting('nav-btn-3', array(
      'default' => _x('Um Okkur ', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-btn-3', array(
      'label' => __('Þriðji Linkur', 'taekninam'),
      'section' => 'nav',
      'priority' => 3
    ));

// Nav finished ----------------------------------------------------------------
// Hero section starts ---------------------------------------------------------

    $wp_customize->add_setting('showcase_heading', array(
      'default' => _x('Fjarnám á þínum forsemdum ', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label' => __('Fyrsta lína í hetju kafla', 'taekninam'),
      'section' => 'showcase',
      'priority' => 1
    ));

    $wp_customize->add_setting('showcase-heading-2', array(
      'default' => _x('Hvar sem er ', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('showcase-heading-2', array(
      'label' => __('Seinni lína í hetju kafla', 'taekninam'),
      'section' => 'showcase',
      'priority' => 2
    ));

    $wp_customize->add_setting('showcase-heading-btn', array(
      'default' => _x('Skráðu þig hér ', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('showcase-heading-btn', array(
      'label' => __('Linkur í hetju kafla', 'taekninam'),
      'section' => 'showcase',
      'priority' => 3
    ));

    $wp_customize->add_setting('showcase-heading-btn-url', array(
      'default' => _x('https://sso.teachable.com/secure/144338/users/sign_up?reset_purchase_session=1 ', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('showcase-heading-btn-url', array(
      'label' => __('linkur URL í hetju kafla', 'taekninam'),
      'section' => 'showcase',
      'priority' => 4
    ));

// Hero section ends -----------------------------------------------------------
// Icon section starts ---------------------------------------------------------


    $wp_customize->add_setting('left-icon-head', array(
      'default' => _x('Ótakmarkaður aðgangur', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('left-icon-head', array(
      'label' => __('Vinstri Þumall - Haus', 'taekninam'),
      'section' => 'icon',
      'priority' => 1
    ));

    $wp_customize->add_setting('left-icon-sub', array(
      'default' => _x('Ein kaup að eilífu', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('left-icon-sub', array(
      'label' => __('Vinstri þumall - undir', 'taekninam'),
      'section' => 'icon',
      'priority' => 2
    ));

    $wp_customize->add_setting('mid-icon-head', array(
      'default' => _x('Sérfræðingar Kenna', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('mid-icon-head', array(
      'label' => __('Miðju Þumall - Haus', 'taekninam'),
      'section' => 'icon',
      'priority' => 3
    ));

    $wp_customize->add_setting('mid-icon-sub', array(
      'default' => _x('lærðu frá þeim bestu.', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('mid-icon-sub', array(
      'label' => __('Miðju þumall - undir', 'taekninam'),
      'section' => 'icon',
      'priority' => 4
    ));

    $wp_customize->add_setting('right-icon-head', array(
      'default' => _x('Lærðu hvar sem er!', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('right-icon-head', array(
      'label' => __('Hægri þumall - Haus', 'taekninam'),
      'section' => 'icon',
      'priority' => 5
    ));

    $wp_customize->add_setting('right-icon-sub', array(
      'default' => _x('Sími eða tölva, það skiptir ekki máli.', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('right-icon-sub', array(
      'label' => __('Hægri Þumall - undir', 'taekninam'),
      'section' => 'icon',
      'priority' => 6
    ));

// Icon section ends -----------------------------------------------------------
// Category section starts -----------------------------------------------------


    $wp_customize->add_setting('category-head', array(
      'default' => _x('Flokkarnir Okkar', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('category-head', array(
      'label' => __('Flokkar kafli - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 1
    ));

    $wp_customize->add_setting('category-sub-1', array(
      'default' => _x('Hér eru kúrsar sem við kennum og sérhæfum okkur í.', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('category-sub-1', array(
      'label' => __('Flokkar kafli - undir fyrsti', 'taekninam'),
      'section' => 'category',
      'priority' => 2
    ));

    $wp_customize->add_setting('category-sub-2', array(
      'default' => _x('Veldu flokk til að kynna þér betur', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('category-sub-2', array(
      'label' => __('Flokkar kafli - undir seinni', 'taekninam'),
      'section' => 'category',
      'priority' => 3
    ));

    $wp_customize->add_setting('large-head', array(
      'default' => _x('Office 365', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('large-head', array(
      'label' => __('Stór Kassi - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 4
    ));

    $wp_customize->add_setting('large-des', array(
      'default' => _x('Með office námi okkar nærðu tökum á vinsæla kerfinu "office 365"', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('large-des', array(
      'label' => __('Stór kassi lýsing', 'taekninam'),
      'section' => 'category',
      'priority' => 5
    ));

    $wp_customize->add_setting('large-head-hidden', array(
      'default' => _x('Office 365', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('large-head-hidden', array(
      'label' => __('Stór kassi - falinn haus (hover)', 'taekninam'),
      'section' => 'category',
      'priority' => 6
    ));



    $wp_customize->add_setting('small-head-1', array(
      'default' => _x('SharePoint', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-1', array(
      'label' => __('Lítll kassi 1 - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 7
    ));

    $wp_customize->add_setting('small-des-1', array(
      'default' => _x('Með sharepoint námi okkar nærðu tökum á allri tækni sem tengist Sharepoint', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-des-1', array(
      'label' => __('Lítill kassi 1 - lýsing', 'taekninam'),
      'section' => 'category',
      'priority' => 8
    ));

    $wp_customize->add_setting('small-head-1-hidden', array(
      'default' => _x('SharePoint', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-1-hidden', array(
      'label' => __('Lítill kassi 1 - falinn haus (hover)', 'taekninam'),
      'section' => 'category',
      'priority' => 9
    ));


    $wp_customize->add_setting('small-head-2', array(
      'default' => _x('OneDrive', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-2', array(
      'label' => __('Lítll kassi 2 - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 10
    ));

    $wp_customize->add_setting('small-des-2', array(
      'default' => _x('Með OneDrive námi okkar nærðu tökum á allri tækni sem tengist OneDrive', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-des-2', array(
      'label' => __('Lítill kassi 2 - lýsing', 'taekninam'),
      'section' => 'category',
      'priority' => 11
    ));

    $wp_customize->add_setting('small-head-2-hidden', array(
      'default' => _x('OneDrive', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-2-hidden', array(
      'label' => __('Lítill kassi 2 - falinn haus (hover)', 'taekninam'),
      'section' => 'category',
      'priority' => 12
    ));


    $wp_customize->add_setting('small-head-3', array(
      'default' => _x('OneNote', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-3', array(
      'label' => __('Lítll kassi 3 - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 13
    ));

    $wp_customize->add_setting('small-des-3', array(
      'default' => _x('Með OneNote námi okkar nærðu tökum á allri tækni sem tengist OneNote', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-des-3', array(
      'label' => __('Lítill kassi 3 - lýsing', 'taekninam'),
      'section' => 'category',
      'priority' => 14
    ));

    $wp_customize->add_setting('small-head-3-hidden', array(
      'default' => _x('OneNote', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-3-hidden', array(
      'label' => __('Lítill kassi 3 - falinn haus (hover)', 'taekninam'),
      'section' => 'category',
      'priority' => 15
    ));


    $wp_customize->add_setting('small-head-4', array(
      'default' => _x('Outlook', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-4', array(
      'label' => __('Lítll kassi 4 - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 16
    ));

    $wp_customize->add_setting('small-des-4', array(
      'default' => _x('Með Outlook námi okkar nærðu tökum á allri tækni sem tengist Outlook', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-des-4', array(
      'label' => __('Lítill kassi 4 - lýsing', 'taekninam'),
      'section' => 'category',
      'priority' => 17
    ));

    $wp_customize->add_setting('small-head-4-hidden', array(
      'default' => _x('Outlook', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-4-hidden', array(
      'label' => __('Lítill kassi 4 - falinn haus (hover)', 'taekninam'),
      'section' => 'category',
      'priority' => 18
    ));


    $wp_customize->add_setting('small-head-5', array(
      'default' => _x('Teams', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-5', array(
      'label' => __('Lítll kassi 5 - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 19
    ));

    $wp_customize->add_setting('small-des-5', array(
      'default' => _x('Með Teams námi okkar nærðu tökum á allri tækni sem tengist Teams', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-des-5', array(
      'label' => __('Lítill kassi 5 - lýsing', 'taekninam'),
      'section' => 'category',
      'priority' => 20
    ));

    $wp_customize->add_setting('small-head-5-hidden', array(
      'default' => _x('Teams', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-5-hidden', array(
      'label' => __('Lítill kassi 5 - falinn haus (hover)', 'taekninam'),
      'section' => 'category',
      'priority' => 21
    ));


    $wp_customize->add_setting('small-head-6', array(
      'default' => _x('Skjalastjórnun', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-6', array(
      'label' => __('Lítll kassi 6 - Haus', 'taekninam'),
      'section' => 'category',
      'priority' => 22
    ));

    $wp_customize->add_setting('small-des-6', array(
      'default' => _x('Með Skjalastjórnunar námi okkar nærðu tökum á allri tækni sem tengist Skjalastjórnun', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-des-6', array(
      'label' => __('Lítill kassi 6 - lýsing', 'taekninam'),
      'section' => 'category',
      'priority' => 23
    ));

    $wp_customize->add_setting('small-head-6-hidden', array(
      'default' => _x('Skjalastjórnun', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('small-head-6-hidden', array(
      'label' => __('Lítill kassi 6 - falinn haus (hover)', 'taekninam'),
      'section' => 'category',
      'priority' => 24
    ));

// Categories end --------------------------------------------------------------
// Contact Starts --------------------------------------------------------------


    $wp_customize->add_setting('contact-head', array(
      'default' => _x('Hafðu Samband', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('contact-head', array(
      'label' => __('Hafðu Samband - Haus', 'taekninam'),
      'section' => 'contact',
      'priority' => 1
    ));

// Contact ends ----------------------------------------------------------------
// About us starts -------------------------------------------------------------

    $wp_customize->add_setting('about-head', array(
      'default' => _x('Um Okkur', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('about-head', array(
      'label' => __('Um Okkur - haus', 'taekninam'),
      'section' => 'about',
      'priority' => 1
    ));

    $wp_customize->add_setting('about-sub-1', array(
      'default' => _x('Hér eru upplýsingar um eiganda og skapra allra kenslu á vefnum', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('about-sub-1', array(
      'label' => __('Um Okkur - undir fyrsti', 'taekninam'),
      'section' => 'about',
      'priority' => 2
    ));

    $wp_customize->add_setting('about-sub-2', array(
      'default' => _x('Ekki hika að hafa samband við okkur með spurningar!', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('about-sub-2', array(
      'label' => __('Um Okkur - undir seinni', 'taekninam'),
      'section' => 'about',
      'priority' => 3
    ));


    $wp_customize->add_setting('first-card-name', array(
      'default' => _x('Nafn kemur hér', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('first-card-name', array(
      'label' => __('Fyrsa Spjald - nafn', 'taekninam'),
      'section' => 'about',
      'priority' => 4
    ));

    $wp_customize->add_setting('first-card-profession', array(
      'default' => _x('Sérhæfing Hérna', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('first-card-profession', array(
      'label' => __('Fyrsa Spjald - sérhæfing', 'taekninam'),
      'section' => 'about',
      'priority' => 5
    ));

    $wp_customize->add_setting('skill-1-1', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-1-1', array(
      'label' => __('Fyrsa Spjald - 1 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 6
    ));

    $wp_customize->add_setting('skill-1-2', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-1-2', array(
      'label' => __('Fyrsa Spjald - 2 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 7
    ));

    $wp_customize->add_setting('skill-1-3', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-1-3', array(
      'label' => __('Fyrsa Spjald - 3 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 8
    ));

    $wp_customize->add_setting('first-card-des', array(
      'default' => _x('lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('first-card-des', array(
      'label' => __('Fyrsa Spjald - Lýsing', 'taekninam'),
      'section' => 'about',
      'priority' => 9
    ));



    $wp_customize->add_setting('second-card-name', array(
      'default' => _x('Nafn kemur hér', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('second-card-name', array(
      'label' => __('Seinna Spjald - nafn', 'taekninam'),
      'section' => 'about',
      'priority' => 10
    ));

    $wp_customize->add_setting('second-card-profession', array(
      'default' => _x('Sérhæfing Hérna', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('second-card-profession', array(
      'label' => __('Seinna Spjald - sérhæfing', 'taekninam'),
      'section' => 'about',
      'priority' => 11
    ));

    $wp_customize->add_setting('skill-2-1', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-2-1', array(
      'label' => __('Seinna Spjald - 1 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 12
    ));

    $wp_customize->add_setting('skill-2-2', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-2-2', array(
      'label' => __('Seinna Spjald - 2 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 13
    ));

    $wp_customize->add_setting('skill-2-3', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-2-3', array(
      'label' => __('Seinna Spjald - 3 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 14
    ));

    $wp_customize->add_setting('second-card-des', array(
      'default' => _x('lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('second-card-des', array(
      'label' => __('Seinna Spjald - Lýsing', 'taekninam'),
      'section' => 'about',
      'priority' => 15
    ));



    $wp_customize->add_setting('third-card-name', array(
      'default' => _x('Nafn kemur hér', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('third-card-name', array(
      'label' => __('Þriðja Spjald - nafn', 'taekninam'),
      'section' => 'about',
      'priority' => 16
    ));

    $wp_customize->add_setting('third-card-profession', array(
      'default' => _x('Sérhæfing Hérna', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('third-card-profession', array(
      'label' => __('Þriðja Spjald - sérhæfing', 'taekninam'),
      'section' => 'about',
      'priority' => 17
    ));

    $wp_customize->add_setting('skill-3-1', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-3-1', array(
      'label' => __('Þriðja Spjald - 1 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 18
    ));

    $wp_customize->add_setting('skill-3-2', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-3-2', array(
      'label' => __('Þriðja Spjald - 2 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 19
    ));

    $wp_customize->add_setting('skill-3-3', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-3-3', array(
      'label' => __('Þriðja Spjald - 3 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 20
    ));

    $wp_customize->add_setting('third-card-des', array(
      'default' => _x('lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('third-card-des', array(
      'label' => __('Þriðja Spjald - Lýsing', 'taekninam'),
      'section' => 'about',
      'priority' => 21
    ));



    $wp_customize->add_setting('fourth-card-name', array(
      'default' => _x('Nafn kemur hér', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('fourth-card-name', array(
      'label' => __('Fjórða Spjald - nafn', 'taekninam'),
      'section' => 'about',
      'priority' => 22
    ));

    $wp_customize->add_setting('fourth-card-profession', array(
      'default' => _x('Sérhæfing Hérna', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('fourth-card-profession', array(
      'label' => __('Fjórða Spjald - sérhæfing', 'taekninam'),
      'section' => 'about',
      'priority' => 23
    ));

    $wp_customize->add_setting('skill-4-1', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-4-1', array(
      'label' => __('Fjórða Spjald - 1 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 24
    ));

    $wp_customize->add_setting('skill-4-2', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-4-2', array(
      'label' => __('Fjórða Spjald - 2 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 25
    ));

    $wp_customize->add_setting('skill-4-3', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-4-3', array(
      'label' => __('Fjórða Spjald - 3 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 26
    ));

    $wp_customize->add_setting('fourth-card-des', array(
      'default' => _x('lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('fourth-card-des', array(
      'label' => __('Fjórða Spjald - Lýsing', 'taekninam'),
      'section' => 'about',
      'priority' => 27
    ));




    $wp_customize->add_setting('fifth-card-name', array(
      'default' => _x('Nafn kemur hér', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('fifth-card-name', array(
      'label' => __('Fimmta Spjald - nafn', 'taekninam'),
      'section' => 'about',
      'priority' => 28
    ));

    $wp_customize->add_setting('fifth-card-profession', array(
      'default' => _x('Sérhæfing Hérna', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('fifth-card-profession', array(
      'label' => __('Fimmta Spjald - sérhæfing', 'taekninam'),
      'section' => 'about',
      'priority' => 29
    ));

    $wp_customize->add_setting('skill-5-1', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-5-1', array(
      'label' => __('Fimmta Spjald - 1 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 30
    ));

    $wp_customize->add_setting('skill-5-2', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-5-2', array(
      'label' => __('Fimmta Spjald - 2 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 31
    ));

    $wp_customize->add_setting('skill-5-3', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-5-3', array(
      'label' => __('Fimmta Spjald - 3 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 32
    ));

    $wp_customize->add_setting('fifth-card-des', array(
      'default' => _x('lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('fifth-card-des', array(
      'label' => __('Fimmta Spjald - Lýsing', 'taekninam'),
      'section' => 'about',
      'priority' => 33
    ));




    $wp_customize->add_setting('sixth-card-name', array(
      'default' => _x('Nafn kemur hér', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('sixth-card-name', array(
      'label' => __('Sjötta Spjald - nafn', 'taekninam'),
      'section' => 'about',
      'priority' => 34
    ));

    $wp_customize->add_setting('sixth-card-profession', array(
      'default' => _x('Sérhæfing Hérna', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('sixth-card-profession', array(
      'label' => __('Sjötta Spjald - sérhæfing', 'taekninam'),
      'section' => 'about',
      'priority' => 35
    ));

    $wp_customize->add_setting('skill-6-1', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-6-1', array(
      'label' => __('Sjötta Spjald - 1 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 36
    ));

    $wp_customize->add_setting('skill-6-2', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-6-2', array(
      'label' => __('Sjötta Spjald - 2 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 37
    ));

    $wp_customize->add_setting('skill-6-3', array(
      'default' => _x('Hæfileiki', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('skill-6-3', array(
      'label' => __('Sjötta Spjald - 3 hæfileiki', 'taekninam'),
      'section' => 'about',
      'priority' => 38
    ));

    $wp_customize->add_setting('sixth-card-des', array(
      'default' => _x('lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('sixth-card-des', array(
      'label' => __('Sjötta Spjald - Lýsing', 'taekninam'),
      'section' => 'about',
      'priority' => 39
    ));


// About section ends -----------------------------------------------------------
// Footer Section starts -------------------------------------------------------

    $wp_customize->add_setting('social-head', array(
      'default' => _x('Fylgdu okkur á samfélagsmiðlum', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('social-head', array(
      'label' => __('Samfélagsmiðla kafli - haus', 'taekninam'),
      'section' => 'footer',
      'priority' => 1
    ));

    $wp_customize->add_setting('social-email', array(
      'default' => _x('test@test.com', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('social-email', array(
      'label' => __('netfang', 'taekninam'),
      'section' => 'footer',
      'priority' => 2
    ));

    $wp_customize->add_setting('social-phone', array(
      'default' => _x('111-1111', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('social-phone', array(
      'label' => __('Sími', 'taekninam'),
      'section' => 'footer',
      'priority' => 3
    ));

    $wp_customize->add_setting('social-location', array(
      'default' => _x('hringbraut 1, 101, Reykjavík', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('social-location', array(
      'label' => __('Staðsetning', 'taekninam'),
      'section' => 'footer',
      'priority' => 4
    ));


    $wp_customize->add_setting('maillist-head', array(
      'default' => _x('Fylgstu með', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('maillist-head', array(
      'label' => __('Fréttabréf - haus', 'taekninam'),
      'section' => 'footer',
      'priority' => 5
    ));

    $wp_customize->add_setting('maillist-head-color', array(
      'default' => _x('okkur', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('maillist-head-color', array(
      'label' => __('Fréttabréf - litaður haus', 'taekninam'),
      'section' => 'footer',
      'priority' => 6
    ));

    $wp_customize->add_setting('maillist-des', array(
      'default' => _x('skrifaðu netfang þitt hér fyrir neðan til að fá nýjar upplýsingar um kúrsa', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('maillist-des', array(
      'label' => __('Fréttabréf - lýsing', 'taekninam'),
      'section' => 'footer',
      'priority' => 7
    ));

    $wp_customize->add_setting('maillist-second-head', array(
      'default' => _x('Póstlisti', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('maillist-second-head', array(
      'label' => __('Fréttabréf - undir', 'taekninam'),
      'section' => 'footer',
      'priority' => 8
    ));

    $wp_customize->add_setting('nav-footer-head', array(
      'default' => _x('Hvert viltu stefna?', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-footer-head', array(
      'label' => __('Leiðsögn - haus', 'taekninam'),
      'section' => 'footer',
      'priority' => 9
    ));

    $wp_customize->add_setting('nav-footer-right-1', array(
      'default' => _x('Öll Námskeið', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-footer-right-1', array(
      'label' => __('Leiðsögn hægri - 1', 'taekninam'),
      'section' => 'footer',
      'priority' => 10
    ));

    $wp_customize->add_setting('nav-footer-right-2', array(
      'default' => _x('Skráning á Námskeið', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-footer-right-2', array(
      'label' => __('Leiðsögn hægri - 2', 'taekninam'),
      'section' => 'footer',
      'priority' => 11
    ));

    $wp_customize->add_setting('nav-footer-right-1-url', array(
      'default' => _x('https://namskeid.taekninam.is/courses', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-footer-right-1-url', array(
      'label' => __('Leiðsögn hægri URL - 1', 'taekninam'),
      'section' => 'footer',
      'priority' => 12
    ));

    $wp_customize->add_setting('nav-footer-right-2-url', array(
      'default' => _x('https://sso.teachable.com/secure/144338/users/sign_up?reset_purchase_session=1', 'taekninam'),
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control('nav-footer-right-2-url', array(
      'label' => __('Leiðsögn hægri URL - 2', 'taekninam'),
      'section' => 'footer',
      'priority' => 13
    ));

    $wp_customize->add_setting('card-1-profile', array(
      'default' => get_bloginfo('template_directory').'/img/about/first.jpg',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-1-profile', array(
      'label' => __('fyrsta spjald profile', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-1-profile',
      'priority' => 100
    )));

    $wp_customize->add_setting('card-2-profile', array(
      'default' => get_bloginfo('template_directory').'/img/about/second.jpg', 'taekninam',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-2-profile', array(
      'label' => __('Seinna spjald profile', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-2-profile',
      'priority' => 101
    )));

    $wp_customize->add_setting('card-3-profile', array(
      'default' => get_bloginfo('template_directory').'/img/about/third.jpg', 'taekninam',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-3-profile', array(
      'label' => __('Þriðja spjald profile', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-3-profile',
      'priority' => 102
    )));

    $wp_customize->add_setting('card-4-profile', array(
      'default' => get_bloginfo('template_directory').'/img/about/fourth.jpg', 'taekninam',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-4-profile', array(
      'label' => __('fyrsta spjald profile', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-4-profile',
      'priority' => 103
    )));


    $wp_customize->add_setting('card-1-back', array(
      'default' => get_bloginfo('template_directory').'/img/about/first-back.jpg', 'taekninam',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-1-back', array(
      'label' => __('fyrsta spjald background', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-1-back',
      'priority' => 104
    )));

    $wp_customize->add_setting('card-2-back', array(
      'default' => get_bloginfo('template_directory').'/img/about/second-back.jpg', 'taekninam',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-2-back', array(
      'label' => __('Seinna spjald background', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-2-back',
      'priority' => 105
    )));

    $wp_customize->add_setting('card-3-back', array(
      'default' => get_bloginfo('template_directory').'/img/about/third-back.jpg', 'taekninam',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-3-back', array(
      'label' => __('Þriðja spjald background', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-3-back',
      'priority' => 106
    )));

    $wp_customize->add_setting('card-4-back', array(
      'default' => get_bloginfo('template_directory').'/img/about/fourth-back.jpg', 'taekninam',
      'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-4-back', array(
      'label' => __('Fjórða spjald background', 'taekninam'),
      'section' => 'about',
      'settings' => 'card-4-back',
      'priority' => 107
    )));








  }

  add_action('customize_register', 'wpb_customize_register');
