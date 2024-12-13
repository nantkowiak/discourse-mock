<?php
$ticket = json_decode($storage[$routes[2]], true);

?><!DOCTYPE html>
<!-- saved from url=(0071)https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380 -->
<html lang="de" class="desktop-view not-mobile-device text-size-normal no-touch discourse-no-touch"
      style="--header-offset: 80px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php
        echo $ticket["user_title"]; ?> - Bugs - blau direkt Community</title>
    <meta name="description"
          content="Ein Ort sich über und mit blau direkt auszutauschen, an Projekten und Beta-Programmen mitzuwirken und Feature Requests zu unterbreiten">
    <meta name="discourse_theme_id" content="6">
    <meta name="discourse_current_homepage" content="categories">
    <meta name="generator"
          content="Discourse 2.9.0.beta1 - https://github.com/discourse/discourse version 404f882e5cff7e057ccb128664d0b69b14854c16">
    <link rel="icon" type="image/png"
          href="https://community.blaudirekt.de/uploads/default/optimized/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733_2_32x32.svg">
    <link rel="apple-touch-icon" type="image/png"
          href="https://community.blaudirekt.de/uploads/default/optimized/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733_2_180x180.svg">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <link rel="canonical" href="https://community.blaudirekt.de/">
    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "https://community.blaudirekt.de",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://community.blaudirekt.de/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }</script>
    <link rel="search" type="application/opensearchdescription+xml"
          href="https://community.blaudirekt.de/opensearch.xml" title="blau direkt Community Search">

    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token"
          content="nYOT4diJdmV3pPOyXpM5xjFc2cV00M/1hgXFCdeeJOWEI2hCv6pewLvw/7PeYcC6jBuElzdufll8m2qQyztBUA==">

    <link href="./post_files/color_definitions_basis__6_2e1b0ae7d2c9c645dff3f27bfb2235f1d03d9717.css" media="all"
          rel="stylesheet" class="light-scheme">

    <link href="./post_files/desktop_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all" rel="stylesheet"
          data-target="desktop">


    <link href="./post_files/discourse-chat-integration_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all"
          rel="stylesheet" data-target="discourse-chat-integration">
    <link href="./post_files/discourse-details_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all"
          rel="stylesheet" data-target="discourse-details">
    <link href="./post_files/discourse-local-dates_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all"
          rel="stylesheet" data-target="discourse-local-dates">
    <link href="./post_files/discourse-narrative-bot_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all"
          rel="stylesheet" data-target="discourse-narrative-bot">
    <link href="./post_files/discourse-presence_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all"
          rel="stylesheet" data-target="discourse-presence">
    <link href="./post_files/discourse-solved_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all" rel="stylesheet"
          data-target="discourse-solved">
    <link href="./post_files/discourse-voting_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all" rel="stylesheet"
          data-target="discourse-voting">
    <link href="./post_files/lazy-yt_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all" rel="stylesheet"
          data-target="lazy-yt">
    <link href="./post_files/poll_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all" rel="stylesheet"
          data-target="poll">
    <link href="./post_files/discourse-voting_desktop_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all"
          rel="stylesheet" data-target="discourse-voting_desktop">
    <link href="./post_files/poll_desktop_a01391cb0e8fb0a1e8fde422d59725222f4a04e6.css" media="all" rel="stylesheet"
          data-target="poll_desktop">

    <link href="./post_files/desktop_theme_5_c744aff94aa4023a9b19998f04b106e7bd163e0e.css" media="all" rel="stylesheet"
          data-target="desktop_theme" data-theme-id="5" data-theme-name="weltensprung">
    <link href="./post_files/desktop_theme_6_d8791d1d83e5623b42a23e2b7af4da8456f27ef0.css" media="all" rel="stylesheet"
          data-target="desktop_theme" data-theme-id="6" data-theme-name="default">


    <meta name="fragment" content="!">


    <link rel="preload"
          href="./post_files/start-discourse-330ecabb99d562b3be656b4bfb638312addb2e0ee5f5780aa47d519efd0b53f4.js"
          as="script">
    <link rel="preload"
          href="./post_files/browser-update-eec13eb6f8386f18f10b5dd6ebb7a3598d28421bb796e539b91a7e4a4c5d4c08.js"
          as="script">
    <link rel="preload"
          href="./post_files/browser-detect-16ca87077aead9f656700e192992122d3a7eee8c1bb76da992127945464d4777.js"
          as="script">
    <script src="./post_files/browser-detect-16ca87077aead9f656700e192992122d3a7eee8c1bb76da992127945464d4777.js"></script>


    <link rel="preload" href="./post_files/de-6d0d3fe857adbfddf275c0a65f79b9ab522e331b51ea4c2ec2bb4fa259dc99ad.js"
          as="script">
    <script src="./post_files/de-6d0d3fe857adbfddf275c0a65f79b9ab522e331b51ea4c2ec2bb4fa259dc99ad.js"></script>

    <link rel="preload" href="./post_files/overrides" as="script">
    <script src="./post_files/overrides"></script>

    <link rel="preload" href="./post_files/vendor-f108dcbfc5c54ab543e2a07ba26663d9612b605cffce42c0fb8f3c39580c73ba.js"
          as="script">
    <script src="./post_files/vendor-f108dcbfc5c54ab543e2a07ba26663d9612b605cffce42c0fb8f3c39580c73ba.js"></script>

    <link rel="preload"
          href="./post_files/application-28ca314ca87f02673ad9fbf9e6a8ca5544adeafe4c47a5ea73acd1a451708811.js"
          as="script">
    <script src="./post_files/application-28ca314ca87f02673ad9fbf9e6a8ca5544adeafe4c47a5ea73acd1a451708811.js"></script>

    <link rel="preload"
          href="./post_files/discourse-chat-integration-f16e84d63bacc8515a64930b5b55402f6e5e44229c6cfae2fc14132b5d97f609.js"
          as="script">
    <script src="./post_files/discourse-chat-integration-f16e84d63bacc8515a64930b5b55402f6e5e44229c6cfae2fc14132b5d97f609.js"></script>

    <link rel="preload"
          href="./post_files/discourse-details-a5c71c75398c735e851440262e3c9ba43f9d8a2a7d81d8ecec16c8b2dbf452c3.js"
          as="script">
    <script src="./post_files/discourse-details-a5c71c75398c735e851440262e3c9ba43f9d8a2a7d81d8ecec16c8b2dbf452c3.js"></script>

    <link rel="preload"
          href="./post_files/discourse-local-dates-ae8d26328a3084ce96602d589dd3039f8caec134838a768ee803f9f70c7687e3.js"
          as="script">
    <script src="./post_files/discourse-local-dates-ae8d26328a3084ce96602d589dd3039f8caec134838a768ee803f9f70c7687e3.js"></script>

    <link rel="preload"
          href="./post_files/discourse-narrative-bot-7648c8e9699610bc9a41dc34d627f0227a7501feb863a8d84ec0ab1bdc745e3d.js"
          as="script">
    <script src="./post_files/discourse-narrative-bot-7648c8e9699610bc9a41dc34d627f0227a7501feb863a8d84ec0ab1bdc745e3d.js"></script>

    <link rel="preload"
          href="./post_files/discourse-presence-bc826a395189b32e4676ad0c4414f821f9bab8245747789b6d555fc16581dacd.js"
          as="script">
    <script src="./post_files/discourse-presence-bc826a395189b32e4676ad0c4414f821f9bab8245747789b6d555fc16581dacd.js"></script>

    <link rel="preload"
          href="./post_files/discourse-solved-eca061b819d457c7aad98b15e2a4c2865e014bbcd4fb536055357e91b9799fe3.js"
          as="script">
    <script src="./post_files/discourse-solved-eca061b819d457c7aad98b15e2a4c2865e014bbcd4fb536055357e91b9799fe3.js"></script>

    <link rel="preload"
          href="./post_files/discourse-voting-9552ae46f518fdb4054bf443ca731d7014bd88a6c4ba79426d55d71e609b1f55.js"
          as="script">
    <script src="./post_files/discourse-voting-9552ae46f518fdb4054bf443ca731d7014bd88a6c4ba79426d55d71e609b1f55.js"></script>

    <link rel="preload"
          href="./post_files/docker_manager-4ced9f9c7bda9ba563c04006dbb93828d43f2c7d5b533065717c5a63da77d5fc.js"
          as="script">
    <script src="./post_files/docker_manager-4ced9f9c7bda9ba563c04006dbb93828d43f2c7d5b533065717c5a63da77d5fc.js"></script>

    <link rel="preload" href="./post_files/lazy-yt-362fd991a752ebdc53b9b3b70aea43cb46676f634c323d6c79c0bef4c6bebad3.js"
          as="script">
    <script src="./post_files/lazy-yt-362fd991a752ebdc53b9b3b70aea43cb46676f634c323d6c79c0bef4c6bebad3.js"></script>

    <link rel="preload" href="./post_files/poll-3dc2e1034f464aa9411181503b8e1d9c52d1a76a8e70e93aaf1c4bdf320b3409.js"
          as="script">
    <script src="./post_files/poll-3dc2e1034f464aa9411181503b8e1d9c52d1a76a8e70e93aaf1c4bdf320b3409.js"></script>


    <script src="./post_files/86205a4311265e168f4ce84121f6b3587febd55d.js"></script>
    <script src="./post_files/dfffc9d6303d2fc9da8bb66a39792df448aae3f1.js"></script>


    <link id="manifest-link" rel="manifest" href="https://community.blaudirekt.de/manifest.webmanifest"
          crossorigin="use-credentials">


    <meta property="og:site_name" content="blau direkt Community">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image"
          content="https://community.blaudirekt.de/uploads/default/original/2X/c/c022577238263ca20431f138a6fb931c29951ee5.jpeg">
    <meta property="og:image"
          content="https://community.blaudirekt.de/uploads/default/original/2X/c/c022577238263ca20431f138a6fb931c29951ee5.jpeg">
    <meta property="og:url" content="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380">
    <meta name="twitter:url" content="https://community.blaudirekt.de/">
    <meta property="og:title" content="Tags anlegen funktioniert nicht - Bugs - blau direkt Community">
    <meta name="twitter:title" content="blau direkt Community">
    <meta property="og:description"
          content="Ein Ort sich über und mit blau direkt auszutauschen, an Projekten und Beta-Programmen mitzuwirken und Feature Requests zu unterbreiten">
    <meta name="twitter:description"
          content="Ein Ort sich über und mit blau direkt auszutauschen, an Projekten und Beta-Programmen mitzuwirken und Feature Requests zu unterbreiten">


    <meta id="data-discourse-setup" data-base-url="https://community.blaudirekt.de" data-base-uri=""
          data-environment="production" data-letter-avatar-version="5_7859cc5f9b505b9a052b6057c4205671"
          data-markdown-it-url="/assets/markdown-it-bundle-187cc963718be71de1631e2cb2c78a0529d2b3450a373796244d7bfacff0d699.js"
          data-service-worker-url="service-worker.js" data-default-locale="de"
          data-asset-version="5571a7672d5ce8667d54efa4157d0ba8" data-disable-custom-css="false"
          data-highlight-js-path="/highlight-js/community.blaudirekt.de/084d101d62e4ceb91462fa1464b341511141973f.js"
          data-svg-sprite-path="/svg-sprite/community.blaudirekt.de/svg-6-3688d79a8d87dc580ab6bb85eec1161dcaeebc9a.js"
          data-enable-js-error-reporting="true" data-color-scheme-is-dark="false" data-user-dark-scheme-id="-1">

    <meta name="discourse/config/environment"
          content="%7B%22modulePrefix%22%3A%22discourse%22%2C%22environment%22%3A%22production%22%2C%22rootURL%22%3A%22%22%2C%22locationType%22%3A%22auto%22%2C%22historySupportMiddleware%22%3Afalse%2C%22EmberENV%22%3A%7B%22FEATURES%22%3A%7B%7D%2C%22EXTEND_PROTOTYPES%22%3A%7B%22Date%22%3Afalse%7D%2C%22_APPLICATION_TEMPLATE_WRAPPER%22%3Afalse%2C%22_DEFAULT_ASYNC_OBSERVERS%22%3Atrue%2C%22_JQUERY_INTEGRATION%22%3Atrue%7D%2C%22APP%22%3A%7B%22name%22%3A%22discourse%22%2C%22version%22%3A%222.9.0.beta1%20404f882e5cff7e057ccb128664d0b69b14854c16%22%2C%22exportApplicationGlobal%22%3Atrue%7D%7D">
    <script src="./post_files/svg-6-3688d79a8d87dc580ab6bb85eec1161dcaeebc9a.js"></script>
    <script src="./post_files/jquery.magnific-popup.min.js"></script>
</head>

<body class="primary-group-dionera docked vsc-initialized drop-down-mode archetype-regular category category-bugs">


<section id="main" class="ember-application">
    <div class="ember-view" id="ember4"><a
                href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380#main-container"
                id="skip-link">Zum Hauptinhalt springen</a>
        <!---->
        <!---->
        <div id="ember7" class="d-header-wrap ember-view">
            <header class="d-header clearfix">
                <div class="wrap">
                    <div class="contents clearfix">
                        <div class="title"><a href="https://community.blaudirekt.de/" data-auto-route="true"><img
                                        src="./post_files/55ffcabf0e5952ca2ed24e57d19928d2cfac8a48.svg"
                                        alt="blau direkt Community" id="site-logo" class="logo-big"></a></div>
                        <div class="panel clearfix" role="navigation"><span class="header-buttons"></span>
                            <ul class="icons d-header-icons">
                                <li class="header-dropdown-toggle search-dropdown"><a aria-expanded="false"
                                                                                      aria-haspopup="true"
                                                                                      href="https://community.blaudirekt.de/search"
                                                                                      data-auto-route="true"
                                                                                      title="Suche" aria-label="Suche"
                                                                                      id="search-button"
                                                                                      class="icon btn-flat">
                                        <svg class="fa d-icon d-icon-search svg-icon svg-node" aria-hidden="true">
                                            <use href="#search"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown-toggle hamburger-dropdown"><a aria-expanded="false"
                                                                                         aria-haspopup="true"
                                                                                         href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380"
                                                                                         data-auto-route="true"
                                                                                         title="Menü" aria-label="Menü"
                                                                                         id="toggle-hamburger-menu"
                                                                                         class="icon btn-flat">
                                        <svg class="fa d-icon d-icon-bars svg-icon svg-node" aria-hidden="true">
                                            <use href="#bars"></use>
                                        </svg>
                                    </a></li>
                                <li id="current-user" class="header-dropdown-toggle current-user"><a
                                            aria-haspopup="true" aria-expanded="false"
                                            href="https://community.blaudirekt.de/u/nan" title="Nico Antkowiak"
                                            data-auto-route="true" class="icon">
                                        <div><img alt="Profil, Nachrichten, Lesezeichen und Einstellungen" width="32"
                                                  height="32" src="./post_files/1899_2.png" title="Nico Antkowiak"
                                                  aria-label="Nico Antkowiak" loading="lazy" class="avatar"></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!---->

        <!---->

        <div id="main-outlet" class="wrap" role="main">
            <!---->
            <div class="container" id="main-container">
                <div id="ember11" class="ember-view"></div>
                <div id="ember12" class="controls ember-view"><!----></div>
                <div id="ember13" class="ember-view"><!----></div>
                <div id="ember14" class="ember-view"><!----></div>
                <div id="ember15" class="hidden create-topics-notice ember-view"><!----></div>
                <!---->
            </div>
            <div id="ember617" class="regular read_restricted ember-view">
                <div id="ember618" class="ember-view"></div>
                <!---->
                <div class="container">
                    <div id="ember620" class="ember-view"><!----></div>
                </div>

                <!---->
                <span id="ember621" class="ember-view">  <div id="ember623"
                                                              class="topic-above-post-stream-outlet topic-title-voting ember-view"><!----></div>
</span>

                <div id="topic-title" class="ember-view">
                    <div class="container">
                        <div class="title-wrapper">
                            <h1 data-topic-id="14380">
                                <!---->

                                <div id="ember634" class="topic-statuses ember-view"><!----><!----><!----><!----><!---->
                                    <!----><!----><!----><!----></div>
                                <a href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380"
                                   class="fancy-title" data-ember-action="" data-ember-action-636="636">
                                    <?php
                                    echo $ticket["user_title"]; ?>
                                </a>

                                <!---->          </h1>

                            <div id="ember637" class="topic-category ember-view"><a class="badge-wrapper box"
                                                                                    href="https://community.blaudirekt.de/c/bugs/9"><span
                                            class="badge-category-bg" style="background-color: #BF1E2E;"></span><span
                                            style="color: #FFFFFF;" data-drop-close="true"
                                            class="badge-category clear-badge restricted" title="Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!
Einen Fehler richtig melden
Was ist eigentlich ein Fehler?"><svg class="fa d-icon d-icon-lock svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg"><use href="#lock"></use></svg><span
                                                class="category-name">Bugs</span></span></a>
                                <div class="topic-header-extra">
                                    <div class="list-tags">
                                        <!---->
                                    </div>
                                    <!---->
                                </div>

                                <span id="ember638" class="ember-view"><!----></span>
                            </div>

                        </div>
                        <span id="ember639" class="ember-view"><!----></span>
                    </div>
                </div>
                <!---->

                <div class="container posts">
                    <div class="selected-posts hidden">
                        <div id="ember640" class="ember-view"><p>
  <span id="ember641" class="ember-view">Du hast <b>0</b> Beiträge ausgewählt.
</span>
                            </p>

                            <p>
                                <a class="select-all"
                                   href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380"
                                   data-ember-action="" data-ember-action-642="642">
                                    alle auswählen
                                </a>
                            </p>

                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <p class="cancel">
                                <a href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380"
                                   data-ember-action="" data-ember-action-643="643">
                                    Auswahlvorgang abbrechen
                                </a>
                            </p>
                        </div>
                    </div>

                    <!---->

                    <div id="ember645" class="topic-navigation with-timeline ember-view">
                        <div id="ember648" class="topic-navigation-outlet no-answer ember-view"><!----></div>


                        <div id="ember703" class="ember-view">
                            <div class="timeline-container timeline-docked">
                                <div class="topic-timeline">
                                    <div class="timeline-controls"><span class="topic-admin-menu-button"></span></div>
                                    <div class="timeline-scrollarea-wrapper">
                                        <div class="timeline-date-wrapper"><a class="widget-link start-date"
                                                                              href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380"
                                                                              title="12. Dez."><span class="d-label">12. Dez.</span></a>
                                        </div>
                                        <div style="height: 300px" class="timeline-scrollarea">
                                            <div style="height: 0px" class="timeline-padding"></div>
                                            <div style="height: 50px" class="timeline-scroller">
                                                <div class="timeline-handle"></div>
                                                <div class="timeline-scroller-content">
                                                    <div class="timeline-replies">1/2</div>
                                                    <div class="timeline-ago">12. Dez.</div>
                                                </div>
                                            </div>
                                            <div style="height: 250px" class="timeline-padding"></div>
                                        </div>
                                        <div class="timeline-date-wrapper"><a class="widget-link now-date"
                                                                              href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380"
                                                                              title="vor 30 min"><span class="d-label">vor 30 min</span></a>
                                        </div>
                                    </div>
                                    <div class="timeline-footer-controls">
                                        <button class="widget-button btn btn-default create reply-to-post no-text btn-icon"
                                                title="beginne damit, eine Antwort auf dieses Thema zu verfassen">
                                            <svg class="fa d-icon d-icon-reply svg-icon svg-node" aria-hidden="true">
                                                <use href="#reply"></use>
                                            </svg>
                                        </button>
                                        <div class="widget-component-connector" style="display: inline-flex;">
                                            <div id="ember704" class="topic-notifications-button ember-view">
                                                <details id="ember705"
                                                         class="select-kit single-select dropdown-select-box notifications-button topic-notifications-options has-selection ember-view">
                                                    <summary aria-label="Filtern nach: regular"
                                                             name="Filtern nach: regular" data-name="regular"
                                                             data-value="1" tabindex="0" role="listbox"
                                                             id="ember705-header"
                                                             class="select-kit-header single-select-header dropdown-select-box-header btn no-text btn-icon btn-default ember-view">
                                                        <div class="select-kit-header-wrapper">
                                                            <!---->

                                                            <div role="option"
                                                                 class="select-kit-selected-name selected-name choice">
                                                                <svg class="fa d-icon d-icon-d-regular svg-icon svg-string"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <use href="#far-bell"></use>
                                                                </svg>
                                                            </div>


                                                            <!---->  ​
                                                        </div>
                                                    </summary>

                                                    <div id="ember705-body" class="select-kit-body ember-view"
                                                         style="position: relative;"><!----></div>
                                                </details>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <section class="topic-area" id="topic" data-topic-id="14380">

                            <div class="posts-wrapper">
                                <div id="ember652" class="loading-container ember-view">
                                </div>

                                <span id="ember653" class="ember-view"><!----></span>

                                <div id="ember654" class="ember-view">
                                    <div class="post-stream">
                                        <div class="topic-post clearfix topic-owner regular sticky-avatar">
                                            <article id="post_1" aria-label="Beitrag #1" role="region"
                                                     data-post-id="56008" data-topic-id="14380" data-user-id="471"
                                                     class="boxed onscreen-post"><a
                                                        href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380"
                                                        aria-hidden="true" tabindex="-1" class="tabLoc"></a>
                                                <div class="row">
                                                    <div class="topic-avatar" style="margin-bottom: 56px;">
                                                        <div class="post-avatar"><a
                                                                    class="trigger-user-card main-avatar"
                                                                    href="https://community.blaudirekt.de/u/Daniel-Jahnke"
                                                                    data-user-card="Daniel-Jahnke"
                                                                    aria-hidden="true"><img alt="" width="45"
                                                                                            height="45"
                                                                                            src="./post_files/5527_2.png"
                                                                                            loading="lazy"
                                                                                            class="avatar"></a></div>
                                                    </div>
                                                    <div class="topic-body clearfix">
                                                        <div role="heading" aria-level="2" class="topic-meta-data">
                                                            <div class="names trigger-user-card"><span
                                                                        class="first full-name"><a
                                                                            href="https://community.blaudirekt.de/u/Daniel-Jahnke"
                                                                            data-user-card="Daniel-Jahnke"><?php
                                                                        echo $ticket["username"]; ?></a></span><span
                                                                        class="second username"><a
                                                                            href="https://community.blaudirekt.de/u/Daniel-Jahnke"
                                                                            data-user-card="Daniel-Jahnke"><?php
                                                                        echo $ticket["username"]; ?></a></span></div>
                                                            <div class="post-infos">
                                                                <div class="post-info post-date"><a class="post-date"
                                                                                                    href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380?u=nan"
                                                                                                    data-share-url="/t/tags-anlegen-funktioniert-nicht/14380?u=nan"
                                                                                                    data-post-number="1"><span
                                                                                title="12. Dez. 2024 um 13:58"
                                                                                data-time="1734008318612"
                                                                                data-format="tiny"
                                                                                class="relative-date">3 h</span></a>
                                                                </div>
                                                                <div class="read-state read"
                                                                     title="Beitrag ist ungelesen">
                                                                    <svg class="fa d-icon d-icon-circle svg-icon svg-node"
                                                                         aria-hidden="true">
                                                                        <use href="#circle"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="regular contents">
                                                            <div class="cooked">
                                                                <?php echo $ticket["raw"]; ?>
                                                            </div>
                                                            <section class="post-menu-area clearfix">
                                                                <nav class="post-controls collapsed">
                                                                    <div class="actions">
                                                                        <div class="double-button">
                                                                            <button class="widget-button btn-flat toggle-like like no-text btn-icon"
                                                                                    title="dieser Beitrag gefällt mir"
                                                                                    data-post-id="56008">
                                                                                <svg class="fa d-icon d-icon-d-unliked svg-icon svg-node"
                                                                                     aria-hidden="true">
                                                                                    <use href="#far-heart"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="widget-button btn-flat share no-text btn-icon"
                                                                                title="Link zu diesem Beitrag teilen"
                                                                                data-share-url="/t/tags-anlegen-funktioniert-nicht/14380?u=nan"
                                                                                data-post-number="1">
                                                                            <svg class="fa d-icon d-icon-d-post-share svg-icon svg-node"
                                                                                 aria-hidden="true">
                                                                                <use href="#link"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <button class="widget-button btn-flat show-more-actions no-text btn-icon"
                                                                                title="mehr anzeigen">
                                                                            <svg class="fa d-icon d-icon-ellipsis-h svg-icon svg-node"
                                                                                 aria-hidden="true">
                                                                                <use href="#ellipsis-h"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <button class="widget-button btn-flat reply create fade-out btn-icon-text"
                                                                                title="verfasse eine Antwort auf diesen Beitrag">
                                                                            <svg class="fa d-icon d-icon-reply svg-icon svg-node"
                                                                                 aria-hidden="true">
                                                                                <use href="#reply"></use>
                                                                            </svg>
                                                                            <span class="d-button-label">Antworten</span>
                                                                        </button>
                                                                    </div>
                                                                </nav>
                                                            </section>
                                                        </div>
                                                        <section class="post-actions">
                                                        </section>
                                                        <div class="post-links-container"></div>
                                                        <div class="topic-map">
                                                            <section class="map map-collapsed">
                                                                <nav class="buttons">
                                                                    <button class="widget-button btn no-text btn-icon"
                                                                            title="Themendetails erweitern">
                                                                        <svg class="fa d-icon d-icon-chevron-down svg-icon svg-node"
                                                                             aria-hidden="true">
                                                                            <use href="#chevron-down"></use>
                                                                        </svg>
                                                                    </button>
                                                                </nav>
                                                                <ul class="clearfix">
                                                                    <li class="created-at"><h4 role="presentation">
                                                                            erstellt</h4>
                                                                        <div class="topic-map-post created-at"><a
                                                                                    class="trigger-user-card "
                                                                                    data-user-card="Daniel-Jahnke"
                                                                                    aria-hidden="true"><img alt=""
                                                                                                            width="20"
                                                                                                            height="20"
                                                                                                            src="./post_files/5527_2(1).png"
                                                                                                            title="i.A. Daniel Jahnke - Vertriebsassistent"
                                                                                                            aria-label="i.A. Daniel Jahnke - Vertriebsassistent"
                                                                                                            loading="lazy"
                                                                                                            class="avatar"></a><span
                                                                                    title="12. Dez. 2024 um 13:58"
                                                                                    data-time="1734008318550"
                                                                                    data-format="tiny"
                                                                                    class="relative-date">3 h</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class="last-reply"><a
                                                                                href="https://community.blaudirekt.de/t/tags-anlegen-funktioniert-nicht/14380/2">
                                                                            <h4 role="presentation">letzte Antw.</h4>
                                                                            <div class="topic-map-post last-reply"><a
                                                                                        class="trigger-user-card "
                                                                                        data-user-card="Daniel-Jahnke"
                                                                                        aria-hidden="true"><img alt=""
                                                                                                                width="20"
                                                                                                                height="20"
                                                                                                                src="./post_files/5527_2(1).png"
                                                                                                                title="i.A. Daniel Jahnke - Vertriebsassistent"
                                                                                                                aria-label="i.A. Daniel Jahnke - Vertriebsassistent"
                                                                                                                loading="lazy"
                                                                                                                class="avatar"></a><span
                                                                                        title="12. Dez. 2024 um 16:08"
                                                                                        data-time="1734016098194"
                                                                                        data-format="tiny"
                                                                                        class="relative-date">30 min</span>
                                                                            </div>
                                                                        </a></li>
                                                                    <li class="replies"><span class="number">1</span><h4
                                                                                role="presentation">Antwort</h4></li>
                                                                    <li class="secondary views"><span
                                                                                class="number">29</span><h4
                                                                                role="presentation">Aufrufe</h4></li>
                                                                    <li class="secondary users"><span
                                                                                class="number">1</span><h4
                                                                                role="presentation">Benutzer</h4></li>
                                                                </ul>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>

                                <div id="ember655" class="loading-container ember-view">
                                </div>
                            </div>
                            <div id="topic-bottom"></div>

                            <div id="ember656" class="loading-container ember-view">
                                <!---->
                                <!---->
                                <!---->

                                <div id="ember658" class="topic-timer-info ember-view"><!----></div>

                                <!---->

                            </div>
                        </section>
                    </div>

                </div>
                <span id="ember659" class="ember-view">  <div id="ember661"
                                                              class="topic-above-footer-buttons-outlet presence ember-view"><div
                                id="ember662" class="ember-view"><!----></div>
</div>
</span>

                <div role="region" id="topic-footer-buttons" class="ember-view">
                    <div class="topic-footer-main-buttons">
                        <span id="ember663" class="topic-admin-menu-button-container ember-view"><span
                                    class="topic-admin-menu-button"></span></span>

                        <!---->
                        <button aria-label="Teilen" title="teile einen Link zu diesem Thema"
                                id="topic-footer-button-share-and-invite"
                                class="btn-default topic-footer-button share-and-invite btn btn-icon-text ember-view"
                                type="button">
                            <svg class="fa d-icon d-icon-d-topic-share svg-icon svg-string"
                                 xmlns="http://www.w3.org/2000/svg">
                                <use href="#link"></use>
                            </svg>
                            <span class="d-button-label">Teilen<!----></span>
                        </button>
                        <button aria-label="Lesezeichen setzen"
                                title="Klicke hier, um den ersten Beitrag in diesem Thema mit einem Lesezeichen zu versehen."
                                id="topic-footer-button-bookmark"
                                class="btn-default topic-footer-button bookmark btn btn-icon-text ember-view"
                                type="button">
                            <svg class="fa d-icon d-icon-bookmark svg-icon svg-string"
                                 xmlns="http://www.w3.org/2000/svg">
                                <use href="#bookmark"></use>
                            </svg>
                            <span class="d-button-label">Lesezeichen setzen<!----></span>
                        </button>
                        <button aria-label="Melden"
                                title="Dieses Thema den Moderatoren melden oder eine Nachricht senden."
                                id="topic-footer-button-flag"
                                class="btn-default topic-footer-button flag-topic btn btn-icon-text ember-view"
                                type="button">
                            <svg class="fa d-icon d-icon-flag svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                                <use href="#flag"></use>
                            </svg>
                            <span class="d-button-label">Melden<!----></span>
                        </button>

                        <!---->

                        <button title="beginne damit, eine Antwort auf dieses Thema zu verfassen" id="ember668"
                                class="btn-primary create btn btn-icon-text ember-view" type="button">
                            <svg class="fa d-icon d-icon-reply svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                                <use href="#reply"></use>
                            </svg>
                            <span class="d-button-label">Antworten<!----></span>
                        </button>

                        <!---->
                    </div>

                    <div id="ember670" class="pinned-button is-hidden ember-view"><p class="reason">
                        <details id="ember671"
                                 class="select-kit single-select dropdown-select-box pinned-options has-selection ember-view">
                            <summary aria-label="Filtern nach: unpinned" name="Filtern nach: unpinned"
                                     data-name="unpinned" data-value="false" tabindex="0" role="listbox"
                                     id="ember671-header"
                                     class="select-kit-header single-select-header dropdown-select-box-header btn btn-icon-text btn-default ember-view">
                                <div class="select-kit-header-wrapper">
                                    <!---->

                                    <div title="Losgelöst" data-name="unpinned" role="option"
                                         class="select-kit-selected-name selected-name choice">
                                        <svg class="fa d-icon d-icon-thumbtack unpinned svg-icon svg-string"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <use href="#thumbtack"></use>
                                        </svg>

                                        <span class="name">
      <span>Losgelöst</span>
    </span>

                                        <!---->  </div>


                                    <svg class="fa d-icon d-icon-caret-down svg-icon caret-icon svg-string"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <use href="#caret-down"></use>
                                    </svg>
                                    ​
                                </div>
                            </summary>

                            <div id="ember671-body" class="select-kit-body ember-view" style="position: relative;">
                                <!----></div>
                        </details>
                        <span class="text">Dieses Thema ist für dich losgelöst; es wird in der normalen Reihenfolge angezeigt</span>
                        </p>
                    </div>

                    <div id="ember673" class="topic-notifications-button ember-view"><p class="reason">
                        <details id="ember674"
                                 class="select-kit single-select dropdown-select-box notifications-button topic-notifications-options has-selection ember-view">
                            <summary aria-label="Filtern nach: regular" name="Filtern nach: regular" data-name="regular"
                                     data-value="1" tabindex="0" role="listbox" id="ember674-header"
                                     class="select-kit-header single-select-header dropdown-select-box-header btn btn-icon-text btn-default ember-view">
                                <div class="select-kit-header-wrapper">
                                    <!---->

                                    <div title="Normal" data-value="1" data-name="regular" role="option"
                                         class="select-kit-selected-name selected-name choice">
                                        <svg class="fa d-icon d-icon-d-regular svg-icon svg-string"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <use href="#far-bell"></use>
                                        </svg>

                                        <span class="name">
      Normal
    </span>

                                        <!---->  </div>


                                    <svg class="fa d-icon d-icon-caret-down svg-icon caret-icon svg-string"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <use href="#caret-down"></use>
                                    </svg>
                                    ​
                                </div>
                            </summary>

                            <div id="ember674-body" class="select-kit-body ember-view" style="position: relative;">
                                <!----></div>
                        </details>
                        <span class="text">Du wirst benachrichtigt, wenn jemand deinen Namen mit @ erwähnt oder auf deinen Beitrag antwortet.</span>
                        </p>
                    </div>

                    <!---->
                </div>

                <span id="ember677" class="ember-view"><!----></span>
                <div class=" suggested-topics-wrapper">
                    <!---->
                    <div id="suggested-topics" class="suggested-topics" role="complementary"
                         aria-labelledby="suggested-topics-title">
                        <h3 id="suggested-topics-title" class="suggested-topics-title">
                            Vorgeschlagene Themen
                        </h3>

                        <div class="topics">
                            <div id="ember679" class="ember-view">
                                <div id="ember680" class="loading-container ember-view">
                                    <table id="ember681" class="topic-list ember-view">
                                        <thead class="topic-list-header">
                                        <tr>
                                            <th data-sort-order="default" class="default topic-list-data" scope="col">
                                                Thema
                                            </th>

                                            <th data-sort-order="posts" class="posts num topic-list-data" scope="col">
                                                Antworten
                                            </th>

                                            <th data-sort-order="views" class="views num topic-list-data" scope="col">
                                                Aufrufe
                                            </th>

                                            <th data-sort-order="activity" class="activity num topic-list-data"
                                                scope="col">Aktivität
                                            </th>
                                        </tr>
                                        </thead>

                                        <!---->

                                        <tbody class="topic-list-body">
                                        <tr data-topic-id="14289" id="ember684"
                                            class="topic-list-item category-bugs tag-simplr unread-posts status-solved ember-view">


                                            <td class="main-link clearfix topic-list-data" colspan="1">
  <span class="link-top-line"><div class="topic-statuses">
<span title="Dieses Thema hat eine Lösung" class="topic-status"><svg
            class="fa d-icon d-icon-far-check-square svg-icon solved svg-string" xmlns="http://www.w3.org/2000/svg"><use
                href="#far-check-square"></use></svg></span></div>
<a href="https://community.blaudirekt.de/t/grauer-screen-nach-simplr-login-bei-bestimmtem-kunden/14289/3" role="heading"
   aria-level="2" class="title raw-link raw-topic-link" data-topic-id="14289">Grauer screen nach simplr login bei bestimmtem Kunden</a><span
              class="topic-post-badges">&nbsp;<a
                  href="https://community.blaudirekt.de/t/grauer-screen-nach-simplr-login-bei-bestimmtem-kunden/14289/3"
                  class="badge badge-notification unread-posts"
                  title="du hast 8 ungelesene Beiträge in diesem Thema">8</a></span>
  </span>
                                                <div class="link-bottom-line">

                                                    <a class="badge-wrapper box"
                                                       href="https://community.blaudirekt.de/c/bugs/9"><span
                                                                class="badge-category-bg"
                                                                style="background-color: #BF1E2E;"></span><span
                                                                style="color: #FFFFFF;" data-drop-close="true"
                                                                class="badge-category clear-badge restricted" title="Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!
Einen Fehler richtig melden
Was ist eigentlich ein Fehler?"><svg class="fa d-icon d-icon-lock svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg"><use href="#lock"></use></svg><span
                                                                    class="category-name">Bugs</span></span></a>
                                                    <div class="discourse-tags"><a
                                                                href="https://community.blaudirekt.de/tag/simplr"
                                                                data-tag-name="simplr" class="discourse-tag bullet">simplr</a>
                                                    </div>

                                                </div>
                                            </td>


                                            <td class="num posts-map posts  topic-list-data"
                                                title="Dieses Thema hat 9 Antworten">
                                                <button class="btn-link posts-map badge-posts ">

                                                    <span class="number"
                                                          aria-label="Dieses Thema hat 9 Antworten">9</span>
                                                </button>
                                            </td>


                                            <td class="num views  topic-list-data">

                                                <span class="number"
                                                      title="dieses Thema wurde 108-mal betrachtet">108</span>
                                            </td>

                                            <td class="num topic-list-data age activity" title="Erster Beitrag: 2. Dez. 2024 um 10:39
Geschrieben: 9. Dez. 2024 um 12:06">
                                                <a class="post-activity"
                                                   href="https://community.blaudirekt.de/t/grauer-screen-nach-simplr-login-bei-bestimmtem-kunden/14289/10"><span
                                                            class="relative-date" data-time="1733742418852"
                                                            data-format="tiny">3 d</span></a>
                                            </td>


                                            <!---->
                                        </tr>
                                        <!---->
                                        <tr data-topic-id="13541" id="ember687"
                                            class="topic-list-item category-neuigkeiten tag-changelog unread-posts closed ember-view">


                                            <td class="main-link clearfix topic-list-data" colspan="1">
  <span class="link-top-line"><div class="topic-statuses">
<span title="Dieses Thema ist geschlossen. Das Antworten ist nicht mehr möglich." class="topic-status"><svg
            class="fa d-icon d-icon-lock svg-icon locked svg-string" xmlns="http://www.w3.org/2000/svg"><use
                href="#lock"></use></svg></span></div>
<a href="https://community.blaudirekt.de/t/grosses-update-in-ameise-schaeden-werden-fuer-dich-transparent/13541/18"
   role="heading" aria-level="2" class="title raw-link raw-topic-link" data-topic-id="13541">Großes Update in AMEISE: Schäden werden für dich transparent</a><span
              class="topic-post-badges">&nbsp;<a
                  href="https://community.blaudirekt.de/t/grosses-update-in-ameise-schaeden-werden-fuer-dich-transparent/13541/18"
                  class="badge badge-notification unread-posts" title="du hast 11 ungelesene Beiträge in diesem Thema">11</a></span>
  </span>
                                                <div class="link-bottom-line">

                                                    <a class="badge-wrapper box"
                                                       href="https://community.blaudirekt.de/c/neuigkeiten/6"><span
                                                                class="badge-category-bg"
                                                                style="background-color: #25AAE2;"></span><span
                                                                style="color: #FFFFFF;" data-drop-close="true"
                                                                class="badge-category clear-badge"
                                                                title="An dieser Stelle informieren wir euch über anstehende Veranstaltungen, derzeitige Aktionen und aktuelle News."><span
                                                                    class="category-name">Neuigkeiten</span></span></a>
                                                    <div class="discourse-tags"><a
                                                                href="https://community.blaudirekt.de/tag/changelog"
                                                                data-tag-name="changelog" class="discourse-tag bullet">changelog</a>
                                                    </div>

                                                </div>
                                            </td>


                                            <td class="num posts-map posts heatmap-med topic-list-data"
                                                title="Dieses Thema hat 26 Antworten mit einem sehr hohen Verhältnis von „Gefällt mir“ zu Beiträgen">
                                                <button class="btn-link posts-map badge-posts heatmap-med">

                                                    <span class="number"
                                                          aria-label="Dieses Thema hat 26 Antworten mit einem sehr hohen Verhältnis von „Gefällt mir“ zu Beiträgen">26</span>
                                                </button>
                                            </td>


                                            <td class="num views  topic-list-data">

                                                <span class="number"
                                                      title="dieses Thema wurde 733-mal betrachtet">733</span>
                                            </td>

                                            <td class="num topic-list-data age coldmap-low activity" title="Erster Beitrag: 8. Aug. 2024 um 15:29
Geschrieben: 2. Sep. 2024 um 17:58">
                                                <a class="post-activity"
                                                   href="https://community.blaudirekt.de/t/grosses-update-in-ameise-schaeden-werden-fuer-dich-transparent/13541/28"><span
                                                            class="relative-date" data-time="1725292724686"
                                                            data-format="tiny">2.&nbsp;Sep.</span></a>
                                            </td>


                                            <!---->
                                        </tr>
                                        <!---->
                                        <tr data-topic-id="12721" id="ember690"
                                            class="topic-list-item category-bugs ember-view">


                                            <td class="main-link clearfix topic-list-data" colspan="1">
  <span class="link-top-line"><a
              href="https://community.blaudirekt.de/t/panda-neuen-vertrag-hinzufuegen-speichern-nicht-moeglich/12721"
              role="heading" aria-level="2" class="title raw-link raw-topic-link" data-topic-id="12721">Panda - Neuen Vertrag hinzufügen - Speichern nicht möglich</a><span
              class="topic-post-badges"></span>
  </span>
                                                <div class="link-bottom-line">

                                                    <a class="badge-wrapper box"
                                                       href="https://community.blaudirekt.de/c/bugs/9"><span
                                                                class="badge-category-bg"
                                                                style="background-color: #BF1E2E;"></span><span
                                                                style="color: #FFFFFF;" data-drop-close="true"
                                                                class="badge-category clear-badge restricted" title="Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!
Einen Fehler richtig melden
Was ist eigentlich ein Fehler?"><svg class="fa d-icon d-icon-lock svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg"><use href="#lock"></use></svg><span
                                                                    class="category-name">Bugs</span></span></a>


                                                </div>
                                            </td>


                                            <td class="num posts-map posts  topic-list-data"
                                                title="Dieses Thema hat 1 Antwort">
                                                <button class="btn-link posts-map badge-posts ">

                                                    <span class="number"
                                                          aria-label="Dieses Thema hat 1 Antwort">1</span>
                                                </button>
                                            </td>


                                            <td class="num views  topic-list-data">

                                                <span class="number"
                                                      title="dieses Thema wurde 53-mal betrachtet">53</span>
                                            </td>

                                            <td class="num topic-list-data age activity" title="Erster Beitrag: 2. Apr. 2024 um 12:27
Geschrieben: 2. Apr. 2024 um 14:01">
                                                <a class="post-activity"
                                                   href="https://community.blaudirekt.de/t/panda-neuen-vertrag-hinzufuegen-speichern-nicht-moeglich/12721/2"><span
                                                            class="relative-date" data-time="1712059317557"
                                                            data-format="tiny">2.&nbsp;Apr.</span></a>
                                            </td>


                                            <!---->
                                        </tr>
                                        <!---->
                                        <tr data-topic-id="13436" id="ember693"
                                            class="topic-list-item category-bugs ember-view">


                                            <td class="main-link clearfix topic-list-data" colspan="1">
  <span class="link-top-line"><a
              href="https://community.blaudirekt.de/t/speichern-button-von-sidebar-jetzt-ja-unten-verdeckt/13436"
              role="heading" aria-level="2" class="title raw-link raw-topic-link" data-topic-id="13436">Speichern Button von Sidebar (jetzt ja unten) verdeckt</a><span
              class="topic-post-badges"></span>
  </span>
                                                <div class="link-bottom-line">

                                                    <a class="badge-wrapper box"
                                                       href="https://community.blaudirekt.de/c/bugs/9"><span
                                                                class="badge-category-bg"
                                                                style="background-color: #BF1E2E;"></span><span
                                                                style="color: #FFFFFF;" data-drop-close="true"
                                                                class="badge-category clear-badge restricted" title="Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!
Einen Fehler richtig melden
Was ist eigentlich ein Fehler?"><svg class="fa d-icon d-icon-lock svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg"><use href="#lock"></use></svg><span
                                                                    class="category-name">Bugs</span></span></a>


                                                </div>
                                            </td>


                                            <td class="num posts-map posts  topic-list-data"
                                                title="Dieses Thema hat 14 Antworten">
                                                <button class="btn-link posts-map badge-posts ">

                                                    <span class="number"
                                                          aria-label="Dieses Thema hat 14 Antworten">14</span>
                                                </button>
                                            </td>


                                            <td class="num views  topic-list-data">

                                                <span class="number"
                                                      title="dieses Thema wurde 271-mal betrachtet">271</span>
                                            </td>

                                            <td class="num topic-list-data age coldmap-low activity" title="Erster Beitrag: 23. Juli 2024 um 11:30
Geschrieben: 7. Aug. 2024 um 16:02">
                                                <a class="post-activity"
                                                   href="https://community.blaudirekt.de/t/speichern-button-von-sidebar-jetzt-ja-unten-verdeckt/13436/15"><span
                                                            class="relative-date" data-time="1723039377198"
                                                            data-format="tiny">7.&nbsp;Aug.</span></a>
                                            </td>


                                            <!---->
                                        </tr>
                                        <!---->
                                        <tr data-topic-id="13533" id="ember696"
                                            class="topic-list-item category-bugs tag-panda ember-view">


                                            <td class="main-link clearfix topic-list-data" colspan="1">
  <span class="link-top-line"><a href="https://community.blaudirekt.de/t/panda-loescht-beruf/13533/3" role="heading"
                                 aria-level="2" class="title raw-link raw-topic-link" data-topic-id="13533">Panda löscht Beruf</a><span
              class="topic-post-badges"></span>
  </span>
                                                <div class="link-bottom-line">

                                                    <a class="badge-wrapper box"
                                                       href="https://community.blaudirekt.de/c/bugs/9"><span
                                                                class="badge-category-bg"
                                                                style="background-color: #BF1E2E;"></span><span
                                                                style="color: #FFFFFF;" data-drop-close="true"
                                                                class="badge-category clear-badge restricted" title="Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!
Einen Fehler richtig melden
Was ist eigentlich ein Fehler?"><svg class="fa d-icon d-icon-lock svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg"><use href="#lock"></use></svg><span
                                                                    class="category-name">Bugs</span></span></a>
                                                    <div class="discourse-tags"><a
                                                                href="https://community.blaudirekt.de/tag/panda"
                                                                data-tag-name="panda"
                                                                class="discourse-tag bullet">panda</a></div>

                                                </div>
                                            </td>


                                            <td class="num posts-map posts  topic-list-data"
                                                title="Dieses Thema hat 7 Antworten">
                                                <button class="btn-link posts-map badge-posts ">

                                                    <span class="number"
                                                          aria-label="Dieses Thema hat 7 Antworten">7</span>
                                                </button>
                                            </td>


                                            <td class="num views  topic-list-data">

                                                <span class="number"
                                                      title="dieses Thema wurde 136-mal betrachtet">136</span>
                                            </td>

                                            <td class="num topic-list-data age coldmap-low activity" title="Erster Beitrag: 7. Aug. 2024 um 12:38
Geschrieben: 29. Aug. 2024 um 07:18">
                                                <a class="post-activity"
                                                   href="https://community.blaudirekt.de/t/panda-loescht-beruf/13533/8"><span
                                                            class="relative-date" data-time="1724908696898"
                                                            data-format="tiny">29.&nbsp;Aug.</span></a>
                                            </td>


                                            <!---->
                                        </tr>
                                        <!---->
                                        </tbody>

                                        <!---->
                                    </table>

                                </div>
                            </div>
                        </div>

                        <h3 class="suggested-topics-message">
                            Du hast <a href="https://community.blaudirekt.de/unread">17 ungelesene</a> Themen . Oder
                            entdecke andere Themen in <a class="badge-wrapper box"
                                                         href="https://community.blaudirekt.de/c/bugs/9"><span
                                        class="badge-category-bg" style="background-color: #BF1E2E;"></span><span
                                        style="color: #FFFFFF;" data-drop-close="true"
                                        class="badge-category clear-badge restricted" title="Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!
Einen Fehler richtig melden
Was ist eigentlich ein Fehler?"><svg class="fa d-icon d-icon-lock svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg"><use href="#lock"></use></svg><span
                                            class="category-name">Bugs</span></span></a>
                        </h3>
                    </div>

                    <span id="ember699" class="ember-view"><!----></span>

                </div>

                <div id="share-link" class="ember-view">
                    <div class="title">
                        <h3>[de.share.topic]</h3>

                        <!---->
                        <button title="Schließen" id="ember625"
                                class="btn btn-flat close btn no-text btn-icon ember-view" type="button">
                            <svg class="fa d-icon d-icon-times svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                                <use href="#times"></use>
                            </svg>
                            ​

                        </button>
                    </div>

                    <div class="link-share-container">
                        <input class="share-link-input" aria-label="URL kopieren und teilen" type="text">
                        <button id="ember627" class="btn-primary btn no-text btn-icon ember-view" type="button">
                            <svg class="fa d-icon d-icon-copy svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                                <use href="#copy"></use>
                            </svg>
                            ​

                        </button>

                    </div>

                    <div class="link-share-actions">
                        <div class="sources">
                            <button title="Per E-Mail senden" id="ember630"
                                    class="btn-default share-email btn no-text btn-icon ember-view" type="button">
                                <svg class="fa d-icon d-icon-envelope svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <use href="#envelope"></use>
                                </svg>
                                ​

                            </button>

                        </div>

                        <div class="alt-actions">
                            <button title="Mit verknüpftem Thema antworten" id="ember700"
                                    class="btn btn-default new-topic btn btn-icon-text ember-view" type="button">
                                <svg class="fa d-icon d-icon-plus svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <use href="#plus"></use>
                                </svg>
                                <span class="d-button-label">Neues Thema<!----></span>
                            </button>

                        </div>
                    </div>
                </div>

                <div id="ember631" class="quote-button ember-view">
                    <div class="buttons">
                        <button title="Oder drücke q" id="ember701"
                                class="btn-flat insert-quote btn btn-icon-text ember-view" type="button">
                            <svg class="fa d-icon d-icon-quote-left svg-icon svg-string"
                                 xmlns="http://www.w3.org/2000/svg">
                                <use href="#quote-left"></use>
                            </svg>
                            <span class="d-button-label">Zitat<!----></span>
                        </button>

                        <!---->
                        <!----></div>

                    <div class="extra">
                        <!---->  <!---->
                    </div>
                </div>
            </div>
            <!---->
            <div id="user-card" class="user-card show-badges no-bg group-undefined ember-view"
                 style="left: -9999px; top: -9999px;"><!----></div>

            <div id="group-card" class="no-bg group-card show-badges ember-view" style="left: -9999px; top: -9999px;">
                <!----></div>

        </div>

        <!---->
        <div id="ember702" class="ember-view"></div>
        <!---->

        <div role="dialog" aria-modal="true" data-keyboard="false" id="discourse-modal"
             class="hidden modal d-modal fixed-modal ember-view">
            <div class="modal-outer-container">
                <div class="modal-middle-container">
                    <div class="modal-inner-container">
                        <div class="modal-header ">
                            <button title="schließen" id="ember307"
                                    class="btn-flat modal-close close btn no-text btn-icon ember-view" type="button">
                                <svg class="fa d-icon d-icon-times svg-icon svg-string"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <use href="#times"></use>
                                </svg>
                                ​

                            </button>

                            <!---->
                            <!---->      </div>

                        <div id="modal-alert" role="alert"></div>

                        <div id="ember311" class="ember-view"></div>


                        <!---->    </div>
                </div>
            </div>
        </div>
        <div id="topic-entrance" class="hidden ember-view">
            <button id="ember308" class="btn-default full jump-top btn no-text ember-view" type="button"><!---->​
                <svg class="fa d-icon d-icon-step-backward svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                    <use href="#step-backward"></use>
                </svg>
                Invalid date

            </button>
            <button id="ember309" class="btn-default full jump-bottom btn no-text ember-view" type="button"><!---->​
                Invalid date
                <svg class="fa d-icon d-icon-step-forward svg-icon svg-string" xmlns="http://www.w3.org/2000/svg">
                    <use href="#step-forward"></use>
                </svg>

            </button>
        </div>
        <div id="reply-control" class="closed show-preview group-dionera ember-view">
            <div class="grippie"></div>

            <!----></div>

        <!----></div>
</section>


<div class="hidden" id="data-preloaded"
     data-preloaded="{&quot;site&quot;:&quot;{\&quot;default_archetype\&quot;:\&quot;regular\&quot;,\&quot;notification_types\&quot;:{\&quot;mentioned\&quot;:1,\&quot;replied\&quot;:2,\&quot;quoted\&quot;:3,\&quot;edited\&quot;:4,\&quot;liked\&quot;:5,\&quot;private_message\&quot;:6,\&quot;invited_to_private_message\&quot;:7,\&quot;invitee_accepted\&quot;:8,\&quot;posted\&quot;:9,\&quot;moved_post\&quot;:10,\&quot;linked\&quot;:11,\&quot;granted_badge\&quot;:12,\&quot;invited_to_topic\&quot;:13,\&quot;custom\&quot;:14,\&quot;group_mentioned\&quot;:15,\&quot;group_message_summary\&quot;:16,\&quot;watching_first_post\&quot;:17,\&quot;topic_reminder\&quot;:18,\&quot;liked_consolidated\&quot;:19,\&quot;post_approved\&quot;:20,\&quot;code_review_commit_approved\&quot;:21,\&quot;membership_request_accepted\&quot;:22,\&quot;membership_request_consolidated\&quot;:23,\&quot;bookmark_reminder\&quot;:24,\&quot;reaction\&quot;:25,\&quot;votes_released\&quot;:26,\&quot;event_reminder\&quot;:27,\&quot;event_invitation\&quot;:28,\&quot;chat_mention\&quot;:29,\&quot;chat_message\&quot;:30,\&quot;chat_invitation\&quot;:31,\&quot;chat_group_mention\&quot;:32},\&quot;post_types\&quot;:{\&quot;regular\&quot;:1,\&quot;moderator_action\&quot;:2,\&quot;small_action\&quot;:3,\&quot;whisper\&quot;:4},\&quot;trust_levels\&quot;:{\&quot;newuser\&quot;:0,\&quot;basic\&quot;:1,\&quot;member\&quot;:2,\&quot;regular\&quot;:3,\&quot;leader\&quot;:4},\&quot;groups\&quot;:[{\&quot;id\&quot;:1,\&quot;name\&quot;:\&quot;Administratoren\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:42,\&quot;name\&quot;:\&quot;bisure\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/1/16fe77c6e429b8bae9af8b4f8e5f402568e7e62a.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:45,\&quot;name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:78,\&quot;name\&quot;:\&quot;comparit\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/f/fa6675ee52411e0a30bcee14a76fb4e0b85af1fb.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:71,\&quot;name\&quot;:\&quot;Deeplico\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/4/4d818837c0d6943cf7105b96f718b8c2392e4c8b.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:44,\&quot;name\&quot;:\&quot;dionera\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/6/6f89109dbbed3ce2b6a7dba5e550f526c892f3be.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:55,\&quot;name\&quot;:\&quot;Gruppe_Automatismen\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:\&quot;\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:48,\&quot;name\&quot;:\&quot;kvwerk\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/5/51e0f75e46c0928b9dcc514dbba50b8e5b272876.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:67,\&quot;name\&quot;:\&quot;Makler\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:\&quot;\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:58,\&quot;name\&quot;:\&quot;maklerhomepage.net\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/3/36127ed1142375c36946ba85e84a412867a3e822.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:2,\&quot;name\&quot;:\&quot;moderatoren\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:59,\&quot;name\&quot;:\&quot;ObjectiveIT\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/d/da5bfcccef7c157a2a0cad329c8b8f100f785d55.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:57,\&quot;name\&quot;:\&quot;Partnerbeirat\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:\&quot;\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:72,\&quot;name\&quot;:\&quot;supersonic_group\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/d/d78da725433c89167a47af8fa06438d5bfdac0d0.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:41,\&quot;name\&quot;:\&quot;Support\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:3,\&quot;name\&quot;:\&quot;team\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:10,\&quot;name\&quot;:\&quot;vertrauensstufe_0\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:11,\&quot;name\&quot;:\&quot;vertrauensstufe_1\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:12,\&quot;name\&quot;:\&quot;vertrauensstufe_2\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:13,\&quot;name\&quot;:\&quot;vertrauensstufe_3\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:14,\&quot;name\&quot;:\&quot;vertrauensstufe_4\&quot;,\&quot;flair_url\&quot;:null,\&quot;flair_bg_color\&quot;:null,\&quot;flair_color\&quot;:null},{\&quot;id\&quot;:64,\&quot;name\&quot;:\&quot;WIFO\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/e/e57fdc3338de2f61e38c6c7a1b0b9af1f4fef9bb.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;ffffff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;}],\&quot;filters\&quot;:[\&quot;latest\&quot;,\&quot;unread\&quot;,\&quot;new\&quot;,\&quot;unseen\&quot;,\&quot;top\&quot;,\&quot;read\&quot;,\&quot;posted\&quot;,\&quot;bookmarks\&quot;,\&quot;votes\&quot;],\&quot;periods\&quot;:[\&quot;all\&quot;,\&quot;yearly\&quot;,\&quot;quarterly\&quot;,\&quot;monthly\&quot;,\&quot;weekly\&quot;,\&quot;daily\&quot;],\&quot;top_menu_items\&quot;:[\&quot;latest\&quot;,\&quot;unread\&quot;,\&quot;new\&quot;,\&quot;unseen\&quot;,\&quot;top\&quot;,\&quot;read\&quot;,\&quot;posted\&quot;,\&quot;bookmarks\&quot;,\&quot;categories\&quot;,\&quot;votes\&quot;],\&quot;anonymous_top_menu_items\&quot;:[\&quot;latest\&quot;,\&quot;top\&quot;,\&quot;categories\&quot;,\&quot;categories\&quot;,\&quot;top\&quot;,\&quot;votes\&quot;],\&quot;uncategorized_category_id\&quot;:1,\&quot;user_field_max_length\&quot;:2048,\&quot;post_action_types\&quot;:[{\&quot;id\&quot;:1,\&quot;name_key\&quot;:\&quot;bookmark\&quot;,\&quot;name\&quot;:\&quot;Lesezeichen\&quot;,\&quot;description\&quot;:\&quot;Diesen Beitrag mit Lesezeichen versehen\&quot;,\&quot;short_description\&quot;:\&quot;Diesen Beitrag mit Lesezeichen versehen\&quot;,\&quot;is_flag\&quot;:false,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:2,\&quot;name_key\&quot;:\&quot;like\&quot;,\&quot;name\&quot;:\&quot;Gefällt mir\&quot;,\&quot;description\&quot;:\&quot;Dieser Beitrag gefällt mir\&quot;,\&quot;short_description\&quot;:\&quot;Dieser Beitrag gefällt mir\&quot;,\&quot;is_flag\&quot;:false,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:3,\&quot;name_key\&quot;:\&quot;off_topic\&quot;,\&quot;name\&quot;:\&quot;Am Thema vorbei\&quot;,\&quot;description\&quot;:\&quot;Dieser Beitrag ist nicht relevant für die aktuelle Diskussion im Sinne des Titels und des ersten Beitrags und sollte wohl verschoben werden.\&quot;,\&quot;short_description\&quot;:\&quot;Nicht relevant für die Diskussion\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:4,\&quot;name_key\&quot;:\&quot;inappropriate\&quot;,\&quot;name\&quot;:\&quot;Unangemessen\&quot;,\&quot;description\&quot;:\&quot;Dieser Beitrag enthält Inhalte, die eine vernünftige Person als anstößig, beleidigend oder \\u003ca href=\\\&quot;/guidelines\\\&quot;\\u003eunsere Community-Richtlinien verletzend\\u003c/a\\u003e auffassen würde.\&quot;,\&quot;short_description\&quot;:\&quot;Ein Verstoß gegen \\u003ca href=\\\&quot;/guidelines\\\&quot;\\u003eunsere Community-Richtlinien\\u003c/a\\u003e\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:8,\&quot;name_key\&quot;:\&quot;spam\&quot;,\&quot;name\&quot;:\&quot;Spam\&quot;,\&quot;description\&quot;:\&quot;Dieser Beitrag stellt Werbung oder Vandalismus dar. Er ist für das aktuelle Thema weder nützlich noch relevant.\&quot;,\&quot;short_description\&quot;:\&quot;Dies ist Werbung oder Vandalismus.\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:6,\&quot;name_key\&quot;:\&quot;notify_user\&quot;,\&quot;name\&quot;:\&quot;Schreibe @%{username} eine Nachricht\&quot;,\&quot;description\&quot;:\&quot;Ich möchte mit dieser Person direkt und privat über ihren Beitrag reden.\&quot;,\&quot;short_description\&quot;:\&quot;Ich möchte mit dieser Person direkt und privat über ihren Beitrag reden.\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:true},{\&quot;id\&quot;:null,\&quot;name_key\&quot;:null,\&quot;name\&quot;:\&quot;translation missing: de.post_action_types..title\&quot;,\&quot;description\&quot;:\&quot;translation missing: de.post_action_types.description\&quot;,\&quot;short_description\&quot;:\&quot;translation missing: de.post_action_types.short_description\&quot;,\&quot;is_flag\&quot;:false,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:7,\&quot;name_key\&quot;:\&quot;notify_moderators\&quot;,\&quot;name\&quot;:\&quot;Sonstiges\&quot;,\&quot;description\&quot;:\&quot;Dieser Beitrag erfordert die Aufmerksamkeit des Teams aus einem anderen Grund, der oben nicht aufgeführt ist.\&quot;,\&quot;short_description\&quot;:\&quot;Erfordert aus einem anderen Grund die Aufmerksamkeit des Teams\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:true}],\&quot;topic_flag_types\&quot;:[{\&quot;id\&quot;:4,\&quot;name_key\&quot;:\&quot;inappropriate\&quot;,\&quot;name\&quot;:\&quot;Unangemessen\&quot;,\&quot;description\&quot;:\&quot;Dieses Thema enthält Inhalte, die eine vernünftige Person als anstößig, beleidigend oder \\u003ca href=\\\&quot;/guidelines\\\&quot;\\u003eunsere Community-Richtlinien verletzend\\u003c/a\\u003e auffassen würde.\&quot;,\&quot;short_description\&quot;:\&quot;Ein Verstoß gegen \\u003ca href=\\\&quot;/guidelines\\\&quot;\\u003eunsere Community-Richtlinien\\u003c/a\\u003e\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:8,\&quot;name_key\&quot;:\&quot;spam\&quot;,\&quot;name\&quot;:\&quot;Spam\&quot;,\&quot;description\&quot;:\&quot;Dieses Thema besteht effektiv nur aus Werbung, die nicht als solche ausgewiesen ist. Es trägt nichts zur Website bei.\&quot;,\&quot;short_description\&quot;:\&quot;Dies ist Werbung\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:null,\&quot;name_key\&quot;:null,\&quot;name\&quot;:\&quot;translation missing: de.topic_flag_types..title\&quot;,\&quot;description\&quot;:\&quot;translation missing: de.topic_flag_types.description\&quot;,\&quot;short_description\&quot;:\&quot;translation missing: de.topic_flag_types.short_description\&quot;,\&quot;is_flag\&quot;:false,\&quot;is_custom_flag\&quot;:false},{\&quot;id\&quot;:7,\&quot;name_key\&quot;:\&quot;notify_moderators\&quot;,\&quot;name\&quot;:\&quot;Sonstiges\&quot;,\&quot;description\&quot;:\&quot;Dieses Thema erfordert die allgemeine Aufmerksamkeit des Teams, da es entweder nicht mit den \\u003ca href=\\\&quot;/guidelines\\\&quot;\\u003eRichtlinien\\u003c/a\\u003e oder den \\u003ca href=\\\&quot;/tos\\\&quot;\\u003eNutzungsbedingungen\\u003c/a\\u003e in Einklang zu bringen ist oder aus anderen Gründen.\&quot;,\&quot;short_description\&quot;:\&quot;Erfordert aus einem anderen Grund die Aufmerksamkeit des Teams\&quot;,\&quot;is_flag\&quot;:true,\&quot;is_custom_flag\&quot;:true}],\&quot;can_create_tag\&quot;:false,\&quot;can_tag_topics\&quot;:true,\&quot;can_tag_pms\&quot;:false,\&quot;tags_filter_regexp\&quot;:\&quot;[/\\\\?#\\\\[\\\\]@!\\\\$\\u0026&#39;\\\\(\\\\)\\\\*\\\\+,;=\\\\.%\\\\\\\\`^\\\\s|\\\\{\\\\}\\\&quot;\\u003c\\u003e]+\&quot;,\&quot;top_tags\&quot;:[\&quot;changelog\&quot;,\&quot;kraftfahrtversicherung\&quot;,\&quot;simplr\&quot;,\&quot;panda\&quot;,\&quot;wohngebäudeversicherung\&quot;,\&quot;lebensversicherung\&quot;,\&quot;vergleichsrechner\&quot;,\&quot;haftpflichtversicherung\&quot;,\&quot;komposit-gewerbe\&quot;,\&quot;ameise\&quot;,\&quot;krankenversicherung\&quot;,\&quot;gmail-addon\&quot;,\&quot;robosave\&quot;,\&quot;unfallversicherung\&quot;,\&quot;edocbox\&quot;,\&quot;rechtsschutzversicherung\&quot;,\&quot;dokuh\&quot;,\&quot;bi:sure\&quot;,\&quot;hausratversicherung\&quot;,\&quot;outlook-addin\&quot;,\&quot;covomo\&quot;,\&quot;tierversicherung\&quot;,\&quot;inhaltsversicherung\&quot;,\&quot;levelnine\&quot;,\&quot;neodigital\&quot;,\&quot;bausparen\&quot;,\&quot;deeplico\&quot;,\&quot;leasing\&quot;,\&quot;carddav\&quot;,\&quot;dipay\&quot;,\&quot;reklama\&quot;],\&quot;topic_featured_link_allowed_category_ids\&quot;:[26,35,23,29,24,36,11,16,19,10,9,27,37,4,43,38,7,31,30,13,25,39,14,33,15,1,17,18,41,42,5,32,8,3,22,28,40,6,21],\&quot;user_themes\&quot;:[{\&quot;theme_id\&quot;:6,\&quot;name\&quot;:\&quot;Default\&quot;,\&quot;default\&quot;:true,\&quot;color_scheme_id\&quot;:null}],\&quot;user_color_schemes\&quot;:[],\&quot;default_dark_color_scheme\&quot;:null,\&quot;censored_regexp\&quot;:null,\&quot;custom_emoji_translation\&quot;:{},\&quot;watched_words_replace\&quot;:null,\&quot;watched_words_link\&quot;:null,\&quot;categories\&quot;:[{\&quot;id\&quot;:6,\&quot;name\&quot;:\&quot;Neuigkeiten\&quot;,\&quot;color\&quot;:\&quot;25AAE2\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;neuigkeiten\&quot;,\&quot;topic_count\&quot;:842,\&quot;post_count\&quot;:6214,\&quot;position\&quot;:0,\&quot;description\&quot;:\&quot;An dieser Stelle informieren wir euch über anstehende Veranstaltungen, derzeitige Aktionen und aktuelle News.\&quot;,\&quot;description_text\&quot;:\&quot;An dieser Stelle informieren wir euch über anstehende Veranstaltungen, derzeitige Aktionen und aktuelle News.\&quot;,\&quot;description_excerpt\&quot;:\&quot;An dieser Stelle informieren wir euch über anstehende Veranstaltungen, derzeitige Aktionen und aktuelle News.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-neuigkeiten/15\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:null,\&quot;notification_level\&quot;:4,\&quot;topic_template\&quot;:\&quot;![changelog|690x299](upload://203649QDdSK3wMnm8ViXs7ZOfZ2.jpeg)\\n\\n## Änderungen\\n* [Thema 1](#thema_1)\\n* [Thema 2](#thema_2)\\n\\n\\u003ca name=\\\&quot;thema_1\\\&quot;\\u003e\\u003c/a\\u003e\\n### Thema 1\\nBeschreibung Thema 1\\n\\n\\u003ca name=\\\&quot;thema_2\\\&quot;\\u003e\\u003c/a\\u003e\\n### Thema 2\\nBeschreibung Thema 2\&quot;,\&quot;has_children\&quot;:true,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:true,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;boxes\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[\&quot;Neuigkeiten\&quot;],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:672,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/d008d3f940e770d9ab88945b24e1c4241510463c.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:24,\&quot;name\&quot;:\&quot;blau direkt blog\&quot;,\&quot;color\&quot;:\&quot;0E76BD\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;blog\&quot;,\&quot;topic_count\&quot;:318,\&quot;post_count\&quot;:1142,\&quot;position\&quot;:1,\&quot;description\&quot;:\&quot;Willst du deinen Senf dazugeben? Dann kannst du hier unsere Blog-Beiträge kommentieren. Die Antworten sind auch auf \\u003ca href=\\\&quot;http://blaudirekt.de/blog\\\&quot; class=\\\&quot;inline-onebox-loading\\\&quot; rel=\\\&quot;noopener nofollow ugc\\\&quot;\\u003eblaudirekt.de/blog\\u003c/a\\u003e zu sehen.\&quot;,\&quot;description_text\&quot;:\&quot;Willst du deinen Senf dazugeben? Dann kannst du hier unsere Blog-Beiträge kommentieren. Die Antworten sind auch auf blaudirekt.de\\u0026#x2F;blog zu sehen.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Willst du deinen Senf dazugeben? Dann kannst du hier unsere Blog-Beiträge kommentieren. Die Antworten sind auch auf \\u003ca href=\\\&quot;http://blaudirekt.de/blog\\\&quot; class=\\\&quot;inline-onebox-loading\\\&quot; rel=\\\&quot;noopener nofollow ugc\\\&quot;\\u003eblaudirekt.de/blog\\u003c/a\\u003e zu sehen.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-blau-direkt-blog/1908\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:null,\&quot;parent_category_id\&quot;:6,\&quot;notification_level\&quot;:4,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:21,\&quot;name\&quot;:\&quot;Schulung \\u0026 Termine\&quot;,\&quot;color\&quot;:\&quot;12A89D\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;schulung-termine\&quot;,\&quot;topic_count\&quot;:71,\&quot;post_count\&quot;:489,\&quot;position\&quot;:2,\&quot;description\&quot;:\&quot;Du bist auf der Suche nach Weiterbildungen? In diesem Bereich erhältst du alle Informationen zu den Möglichkeiten die von blau direkt, unseren Kooperationspartnern oder den verschiedenen Produktgebern angeboten werden.\&quot;,\&quot;description_text\&quot;:\&quot;Du bist auf der Suche nach Weiterbildungen? In diesem Bereich erhältst du alle Informationen zu den Möglichkeiten die von blau direkt, unseren Kooperationspartnern oder den verschiedenen Produktgebern angeboten werden.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Du bist auf der Suche nach Weiterbildungen? In diesem Bereich erhältst du alle Informationen zu den Möglichkeiten die von blau direkt, unseren Kooperationspartnern oder den verschiedenen Produktgebern angeboten werden.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-schulung-termine/1516\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:null,\&quot;parent_category_id\&quot;:6,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;![change|690x199](upload://ncl49jZBZ6KzhXNSfB1BIyPqn0.png)\\n\\n## Hier findet Ihr die Schulungen \\u0026 Termine für Juli 2019\\n* [Einen genauen Blick wert!](#absatz_1)\\n* [Präsenzschulungen](#tabsatz_2)\\n* [Webinare](#absatz_3)\\n* [Ausblick gefällig?](#absatz_4)\\n\\n\\n\\u003ca name=\\\&quot;absatz_1\\\&quot;\\u003e\\u003c/a\\u003e\\n### Einen genauen Blick wert! :rotating_light:\\nDiese Schulungen solltest du dir einmal genauer anschauen:\\n\\n\\n\\n\\n\\u003ca name=\\\&quot;absatz_2\\\&quot;\\u003e\\u003c/a\\u003e\\n### Präsenzschulungen :round_pushpin:\\nDu möchtest den direkten Kontakt zum Referenten? Dann triff diese Vor-Ort:\\n\\n\\n\\n\\n\\u003ca name=\\\&quot;absatz_3\\\&quot;\\u003e\\u003c/a\\u003e\\n### Webinare :computer: \\nDu möchtest Zeit sparen und an Seminaren direkt aus dem Büro teilzunehmen? Hier kannst du online teilnehmen:\\n\\n\\n\\n\\n\\u003ca name=\\\&quot;absatz_4\\\&quot;\\u003e\\u003c/a\\u003e\\n### Ausblick gefällig? :soon:\\nDu möchtest schon jetzt wissen, was im nächsten Monat angeboten wird?\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:true,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:23,\&quot;name\&quot;:\&quot;Partnerbeirat\&quot;,\&quot;color\&quot;:\&quot;9EB83B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;partnerbeirat\&quot;,\&quot;topic_count\&quot;:6,\&quot;post_count\&quot;:16,\&quot;position\&quot;:3,\&quot;description\&quot;:\&quot;In dieser Kategorie informiert der Partnerbeirat über aktuelle Themen.\&quot;,\&quot;description_text\&quot;:\&quot;In dieser Kategorie informiert der Partnerbeirat über aktuelle Themen.\&quot;,\&quot;description_excerpt\&quot;:\&quot;In dieser Kategorie informiert der Partnerbeirat über aktuelle Themen.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-partnerbeirat/1837\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:null,\&quot;parent_category_id\&quot;:6,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:1,\&quot;name\&quot;:\&quot;Allgemein\&quot;,\&quot;color\&quot;:\&quot;9EB83B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;allgemein\&quot;,\&quot;topic_count\&quot;:187,\&quot;post_count\&quot;:1170,\&quot;position\&quot;:4,\&quot;description\&quot;:\&quot;Hier findest Du allgemeine Diskussionen\&quot;,\&quot;description_text\&quot;:\&quot;Hier findest Du allgemeine Diskussionen\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier findest Du allgemeine Diskussionen\&quot;,\&quot;topic_url\&quot;:\&quot;/t/\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;false\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:670,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/40f71252f4bb8dc1cbfc41fc8fea1177a762b1db.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:3,\&quot;name\&quot;:\&quot;Fragen und Antworten\&quot;,\&quot;color\&quot;:\&quot;ED207B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;fragen-und-antworten\&quot;,\&quot;topic_count\&quot;:886,\&quot;post_count\&quot;:5465,\&quot;position\&quot;:5,\&quot;description\&quot;:\&quot;Hier kannst Du Fragen stellen und erhältst in Kürze eine Antwort eines Kollegen oder von blau direkt.\&quot;,\&quot;description_text\&quot;:\&quot;Hier kannst Du Fragen stellen und erhältst in Kürze eine Antwort eines Kollegen oder von blau direkt.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier kannst Du Fragen stellen und erhältst in Kürze eine Antwort eines Kollegen oder von blau direkt.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-fragen-und-antworten/2\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:true,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:true,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;boxes\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:673,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/dc51e0bf01228f7054f3507cd6f624127c8935cf.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:7,\&quot;name\&quot;:\&quot;Produkte und Versicherer\&quot;,\&quot;color\&quot;:\&quot;F7941D\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;versicherungen\&quot;,\&quot;topic_count\&quot;:1217,\&quot;post_count\&quot;:6199,\&quot;position\&quot;:6,\&quot;description\&quot;:\&quot;Hier kannst Du alle deine Fragen zu Versicherungsgesellschaften oder/und -produkten stellen.\&quot;,\&quot;description_text\&quot;:\&quot;Hier kannst Du alle deine Fragen zu Versicherungsgesellschaften oder\\u0026#x2F;und -produkten stellen.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier kannst Du alle deine Fragen zu Versicherungsgesellschaften oder/und -produkten stellen.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-produkte-und-versicherer/17\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:3,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[\&quot;Sparten\&quot;],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:8,\&quot;name\&quot;:\&quot;Maklerportal\&quot;,\&quot;color\&quot;:\&quot;0E76BD\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;maklerportal\&quot;,\&quot;topic_count\&quot;:1322,\&quot;post_count\&quot;:8058,\&quot;position\&quot;:7,\&quot;description\&quot;:\&quot;Hier sind alle Fragen rund um das Maklerportal von blau direkt gut aufgehoben.\&quot;,\&quot;description_text\&quot;:\&quot;Hier sind alle Fragen rund um das Maklerportal von blau direkt gut aufgehoben.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier sind alle Fragen rund um das Maklerportal von blau direkt gut aufgehoben.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-maklerportal/18\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:3,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:14,\&quot;name\&quot;:\&quot;Vergleichsrechner\&quot;,\&quot;color\&quot;:\&quot;283890\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;vergleichsrechner\&quot;,\&quot;topic_count\&quot;:549,\&quot;post_count\&quot;:3082,\&quot;position\&quot;:8,\&quot;description\&quot;:\&quot;Hier sind alle Fragen rund um das Vergleichsrechner von blau direkt gut aufgehoben.\&quot;,\&quot;description_text\&quot;:\&quot;Hier sind alle Fragen rund um das Vergleichsrechner von blau direkt gut aufgehoben.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier sind alle Fragen rund um das Vergleichsrechner von blau direkt gut aufgehoben.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-vergleichsrechner/953\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:3,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[\&quot;Sparten\&quot;],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:22,\&quot;name\&quot;:\&quot;Integrationen\&quot;,\&quot;color\&quot;:\&quot;9EB83B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;integrationen\&quot;,\&quot;topic_count\&quot;:607,\&quot;post_count\&quot;:3798,\&quot;position\&quot;:9,\&quot;description\&quot;:\&quot;Hier sind alle Fragen rund um Software, welche ins MVP integriert ist, gut aufgehoben.\&quot;,\&quot;description_text\&quot;:\&quot;Hier sind alle Fragen rund um Software, welche ins MVP integriert ist, gut aufgehoben.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier sind alle Fragen rund um Software, welche ins MVP integriert ist, gut aufgehoben.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-integrationen/1686\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:3,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[\&quot;Integrationen\&quot;],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:5,\&quot;name\&quot;:\&quot;Feature Requests\&quot;,\&quot;color\&quot;:\&quot;0E76BD\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;feature-requests\&quot;,\&quot;topic_count\&quot;:614,\&quot;post_count\&quot;:3688,\&quot;position\&quot;:10,\&quot;description\&quot;:\&quot;Falls Du eine Idee oder Verbesserungsvorschläge hast, dann poste diese und diskutiere mit Anderen über Deine Anregung. Vielleicht landet Deine Idee auf unserer Roadmap.\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;/t/wie-du-fuer-ideen-votest/14\\\&quot;\\u003eFür eine Idee voten\\u003c/a\\u003e\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;/new-topic?category_id=5\\\&quot;\\u003eSchlage eine Idee vor\\u003c/a\\u003e\&quot;,\&quot;description_text\&quot;:\&quot;Falls Du eine Idee oder Verbesserungsvorschläge hast, dann poste diese und diskutiere mit Anderen über Deine Anregung. Vielleicht landet Deine Idee auf unserer Roadmap.\\nFür eine Idee voten\\nSchlage eine Idee vor\&quot;,\&quot;description_excerpt\&quot;:\&quot;Falls Du eine Idee oder Verbesserungsvorschläge hast, dann poste diese und diskutiere mit Anderen über Deine Anregung. Vielleicht landet Deine Idee auf unserer Roadmap. \\n\\u003ca href=\\\&quot;/t/wie-du-fuer-ideen-votest/14\\\&quot;\\u003eFür eine Idee voten\\u003c/a\\u003e \\n\\u003ca href=\\\&quot;/new-topic?category_id=5\\\&quot;\\u003eSchlage eine Idee vor\\u003c/a\\u003e\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-feature-requests/12\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;can_vote\&quot;:true,\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:664,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/e441a291637f75fa35e425c50b20416db19e820e.gif\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:9,\&quot;name\&quot;:\&quot;Bugs\&quot;,\&quot;color\&quot;:\&quot;BF1E2E\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;bugs\&quot;,\&quot;topic_count\&quot;:615,\&quot;post_count\&quot;:4190,\&quot;position\&quot;:11,\&quot;description\&quot;:\&quot;Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/24/1\\\&quot;\\u003eEinen Fehler richtig melden\\u003c/a\\u003e\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/1230/1\\\&quot;\\u003eWas ist eigentlich ein Fehler?\\u003c/a\\u003e\&quot;,\&quot;description_text\&quot;:\&quot;Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!\\nEinen Fehler richtig melden\\nWas ist eigentlich ein Fehler?\&quot;,\&quot;description_excerpt\&quot;:\&quot;Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer! \\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/24/1\\\&quot;\\u003eEinen Fehler richtig melden\\u003c/a\\u003e \\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/1230/1\\\&quot;\\u003eWas ist eigentlich ein Fehler?\\u003c/a\\u003e\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-bugs/23\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;### Infos:\\n**Wichtig:**\\n\\n* PC oder Mobil:\\n* Betriebssystem: \\n* Browser + version: \\n\\n\\n### Erwartetes Verhalten:\\n\\n* \\n\\n\\n### Wirkliches Verhalten:\\n\\n* \\n\\n\\n### Schritte zum Reproduzieren des Fehlers:\\n\\n* \\n\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[\&quot;ameise\&quot;],\&quot;allowed_tag_groups\&quot;:[\&quot;Integrationen\&quot;],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:671,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/3d1643f50b6aa3af51991b7e9b5cc27c293e27f9.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:10,\&quot;name\&quot;:\&quot;Labor\&quot;,\&quot;color\&quot;:\&quot;652D90\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;labor\&quot;,\&quot;topic_count\&quot;:1,\&quot;post_count\&quot;:1,\&quot;position\&quot;:12,\&quot;description\&quot;:\&quot;Dies ist ein geschlossener Bereich für Beta-Tester für verschiedene Beta-Test Programme, Workshops und vieles mehr.\&quot;,\&quot;description_text\&quot;:\&quot;Dies ist ein geschlossener Bereich für Beta-Tester für verschiedene Beta-Test Programme, Workshops und vieles mehr.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Dies ist ein geschlossener Bereich für Beta-Tester für verschiedene Beta-Test Programme, Workshops und vieles mehr.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-labor/50\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:null,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:true,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:true,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:null,\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:701,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/0fd971d693a1c799bce8e63fb954d33b8b925385.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:26,\&quot;name\&quot;:\&quot;Levelnine Integration\&quot;,\&quot;color\&quot;:\&quot;3AB54A\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;levelnine\&quot;,\&quot;topic_count\&quot;:13,\&quot;post_count\&quot;:74,\&quot;position\&quot;:23,\&quot;description\&quot;:\&quot;In dieser Gruppe „Levelnine KV \\u0026amp; LV“ geht es um feedback zur Vollintegration der Levelnine Softwarelösung. Über einen Connector könnt ihr die Software aufrufen, Kundendaten übertragen und euch euren individellen Pass zur Nutzung buchen.\&quot;,\&quot;description_text\&quot;:\&quot;In dieser Gruppe „Levelnine KV \\u0026amp; LV“ geht es um feedback zur Vollintegration der Levelnine Softwarelösung. Über einen Connector könnt ihr die Software aufrufen, Kundendaten übertragen und euch euren individellen Pass zur Nutzung buchen.\&quot;,\&quot;description_excerpt\&quot;:\&quot;In dieser Gruppe „Levelnine KV \\u0026amp; LV“ geht es um feedback zur Vollintegration der Levelnine Softwarelösung. Über einen Connector könnt ihr die Software aufrufen, Kundendaten übertragen und euch euren individellen Pass zur Nutzung buchen.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-levelnine-kv-lv/1989\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:10,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:29,\&quot;name\&quot;:\&quot;Videoberatung\&quot;,\&quot;color\&quot;:\&quot;ED207B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;videoberatung\&quot;,\&quot;topic_count\&quot;:30,\&quot;post_count\&quot;:217,\&quot;position\&quot;:26,\&quot;description\&quot;:\&quot;Auf Grund der aktuellen Situation haben wir hier einen Bereich Rund um das Thema Videoberatung geschaffen.\&quot;,\&quot;description_text\&quot;:\&quot;Auf Grund der aktuellen Situation haben wir hier einen Bereich Rund um das Thema Videoberatung geschaffen.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Auf Grund der aktuellen Situation haben wir hier einen Bereich Rund um das Thema Videoberatung geschaffen.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-videoberatung/3669\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:10,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:37,\&quot;name\&quot;:\&quot;blau direkt Analytics\&quot;,\&quot;color\&quot;:\&quot;F7941D\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;blau-direkt-analytics\&quot;,\&quot;topic_count\&quot;:8,\&quot;post_count\&quot;:23,\&quot;position\&quot;:33,\&quot;description\&quot;:\&quot;Wir wollen dein Feedback hören! Ameise Analytics ist unser neues Tool zum Analysieren deines Bestandes.\&quot;,\&quot;description_text\&quot;:\&quot;Wir wollen dein Feedback hören! Ameise Analytics ist unser neues Tool zum Analysieren deines Bestandes.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Wir wollen dein Feedback hören! Ameise Analytics ist unser neues Tool zum Analysieren deines Bestandes.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-blau-direkt-analytics/10077\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:10,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:36,\&quot;name\&quot;:\&quot;Octi\&quot;,\&quot;color\&quot;:\&quot;ED207B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;octi\&quot;,\&quot;topic_count\&quot;:69,\&quot;post_count\&quot;:389,\&quot;position\&quot;:34,\&quot;description\&quot;:\&quot;Hast Du eine Frage zu Octi, dann schau’ als Erstes in den \\u003ca href=\\\&quot;https://support.blaudirekt.de/hc/de/categories/4491423897105-Octi\\\&quot;\\u003eSupport-Bereich\\u003c/a\\u003e.\&quot;,\&quot;description_text\&quot;:\&quot;Hast Du eine Frage zu Octi, dann schau’ als Erstes in den Support-Bereich.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hast Du eine Frage zu Octi, dann schau’ als Erstes in den \\u003ca href=\\\&quot;https://support.blaudirekt.de/hc/de/categories/4491423897105-Octi\\\&quot;\\u003eSupport-Bereich\\u003c/a\\u003e.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-octii/8202\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:10,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:42,\&quot;name\&quot;:\&quot;comparit\&quot;,\&quot;color\&quot;:\&quot;12A89D\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;comparit\&quot;,\&quot;topic_count\&quot;:96,\&quot;post_count\&quot;:467,\&quot;position\&quot;:37,\&quot;description\&quot;:\&quot;Ab heute stehen euch die cpit Vergleichsrechner von comparit als Integration in der AMEISE zur Verfügung.\&quot;,\&quot;description_text\&quot;:\&quot;Ab heute stehen euch die cpit Vergleichsrechner von comparit als Integration in der AMEISE zur Verfügung.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Ab heute stehen euch die cpit Vergleichsrechner von comparit als Integration in der AMEISE zur Verfügung.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/read-this-first-eine-kleine-uebersicht/13079\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:10,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:\&quot;true\&quot;},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false},{\&quot;id\&quot;:43,\&quot;name\&quot;:\&quot;Schaden\&quot;,\&quot;color\&quot;:\&quot;ED207B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;schaden\&quot;,\&quot;topic_count\&quot;:9,\&quot;post_count\&quot;:53,\&quot;position\&quot;:38,\&quot;description\&quot;:\&quot;Hier könnt ihr Feedback zum neuen Schadentool und der Datenqualität der Gesellschaften geben.\&quot;,\&quot;description_text\&quot;:\&quot;Hier könnt ihr Feedback zum neuen Schadentool und der Datenqualität der Gesellschaften geben.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier könnt ihr Feedback zum neuen Schadentool und der Datenqualität der Gesellschaften geben.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-schaden/13589\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;parent_category_id\&quot;:10,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;custom_fields\&quot;:{\&quot;enable_accepted_answers\&quot;:null},\&quot;allowed_tags\&quot;:[],\&quot;allowed_tag_groups\&quot;:[],\&quot;allow_global_tags\&quot;:false,\&quot;min_tags_from_required_group\&quot;:1,\&quot;required_tag_group_name\&quot;:null,\&quot;read_only_banner\&quot;:\&quot;\&quot;,\&quot;uploaded_logo\&quot;:null,\&quot;uploaded_background\&quot;:null,\&quot;can_edit\&quot;:false}],\&quot;markdown_additional_options\&quot;:{},\&quot;archetypes\&quot;:[{\&quot;id\&quot;:\&quot;regular\&quot;,\&quot;name\&quot;:\&quot;Normales Thema\&quot;,\&quot;options\&quot;:[]},{\&quot;id\&quot;:\&quot;banner\&quot;,\&quot;name\&quot;:\&quot;Thema des Ankündigungsbanners\&quot;,\&quot;options\&quot;:[]}],\&quot;user_fields\&quot;:[],\&quot;auth_providers\&quot;:[{\&quot;name\&quot;:\&quot;google_oauth2\&quot;,\&quot;custom_url\&quot;:null,\&quot;pretty_name_override\&quot;:null,\&quot;title_override\&quot;:null,\&quot;frame_width\&quot;:850,\&quot;frame_height\&quot;:500,\&quot;can_connect\&quot;:true,\&quot;can_revoke\&quot;:true,\&quot;icon\&quot;:null},{\&quot;name\&quot;:\&quot;oauth2_basic\&quot;,\&quot;custom_url\&quot;:null,\&quot;pretty_name_override\&quot;:null,\&quot;title_override\&quot;:\&quot;mit Ameise\&quot;,\&quot;frame_width\&quot;:null,\&quot;frame_height\&quot;:null,\&quot;can_connect\&quot;:true,\&quot;can_revoke\&quot;:true,\&quot;icon\&quot;:null},{\&quot;name\&quot;:\&quot;microsoft_office365\&quot;,\&quot;custom_url\&quot;:null,\&quot;pretty_name_override\&quot;:null,\&quot;title_override\&quot;:null,\&quot;frame_width\&quot;:null,\&quot;frame_height\&quot;:null,\&quot;can_connect\&quot;:true,\&quot;can_revoke\&quot;:true,\&quot;icon\&quot;:\&quot;fab-microsoft\&quot;}]}&quot;,&quot;siteSettings&quot;:&quot;{\&quot;default_locale\&quot;:\&quot;de\&quot;,\&quot;title\&quot;:\&quot;blau direkt Community\&quot;,\&quot;short_site_description\&quot;:\&quot;Ein Ort sich über und mit blau direkt auszutauschen\&quot;,\&quot;exclude_rel_nofollow_domains\&quot;:\&quot;\&quot;,\&quot;logo\&quot;:\&quot;/uploads/default/original/2X/5/55ffcabf0e5952ca2ed24e57d19928d2cfac8a48.svg\&quot;,\&quot;logo_small\&quot;:\&quot;/uploads/default/original/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733.svg\&quot;,\&quot;digest_logo\&quot;:\&quot;/uploads/default/original/2X/c/cd8d2a857f341aad16519920cdcea8f49167cfb8.png\&quot;,\&quot;mobile_logo\&quot;:\&quot;/uploads/default/original/2X/c/cd8d2a857f341aad16519920cdcea8f49167cfb8.png\&quot;,\&quot;logo_dark\&quot;:\&quot;\&quot;,\&quot;logo_small_dark\&quot;:\&quot;\&quot;,\&quot;mobile_logo_dark\&quot;:\&quot;\&quot;,\&quot;large_icon\&quot;:\&quot;/uploads/default/original/1X/3300f93234867bc6c9db798164b01939774190db.jpeg\&quot;,\&quot;favicon\&quot;:\&quot;/uploads/default/original/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733.svg\&quot;,\&quot;apple_touch_icon\&quot;:\&quot;/uploads/default/original/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733.svg\&quot;,\&quot;display_local_time_in_user_card\&quot;:false,\&quot;allow_user_locale\&quot;:false,\&quot;set_locale_from_accept_language_header\&quot;:false,\&quot;support_mixed_text_direction\&quot;:false,\&quot;suggested_topics\&quot;:5,\&quot;ga_universal_tracking_code\&quot;:\&quot;\&quot;,\&quot;ga_universal_domain_name\&quot;:\&quot;auto\&quot;,\&quot;gtm_container_id\&quot;:\&quot;\&quot;,\&quot;top_menu\&quot;:\&quot;categories|latest|new|top\&quot;,\&quot;post_menu\&quot;:\&quot;read|like|share|flag|edit|bookmark|delete|admin|reply\&quot;,\&quot;post_menu_hidden_items\&quot;:\&quot;flag|bookmark|edit|delete|admin\&quot;,\&quot;share_links\&quot;:\&quot;email\&quot;,\&quot;share_quote_visibility\&quot;:\&quot;anonymous\&quot;,\&quot;share_quote_buttons\&quot;:\&quot;twitter|email\&quot;,\&quot;desktop_category_page_style\&quot;:\&quot;categories_and_latest_topics\&quot;,\&quot;category_colors\&quot;:\&quot;BF1E2E|F1592A|F7941D|9EB83B|3AB54A|12A89D|25AAE2|0E76BD|652D90|92278F|ED207B|8C6238|231F20|808281|B3B5B4|E45735\&quot;,\&quot;category_style\&quot;:\&quot;box\&quot;,\&quot;max_category_nesting\&quot;:2,\&quot;enable_mobile_theme\&quot;:true,\&quot;enable_direct_s3_uploads\&quot;:false,\&quot;enable_upload_debug_mode\&quot;:false,\&quot;default_dark_mode_color_scheme_id\&quot;:-1,\&quot;relative_date_duration\&quot;:30,\&quot;fixed_category_positions\&quot;:true,\&quot;fixed_category_positions_on_create\&quot;:false,\&quot;enable_badges\&quot;:true,\&quot;enable_badge_sql\&quot;:false,\&quot;max_favorite_badges\&quot;:2,\&quot;enable_whispers\&quot;:false,\&quot;enable_bookmarks_with_reminders\&quot;:true,\&quot;push_notifications_prompt\&quot;:true,\&quot;vapid_public_key_bytes\&quot;:\&quot;4|209|120|108|145|113|5|217|206|134|118|245|32|65|121|61|91|157|135|61|61|101|91|63|152|89|75|22|180|53|112|216|207|135|107|32|10|29|104|158|242|229|220|137|17|184|46|94|11|55|115|200|138|233|79|179|106|54|49|249|115|199|37|61|199\&quot;,\&quot;invite_only\&quot;:true,\&quot;login_required\&quot;:true,\&quot;must_approve_users\&quot;:false,\&quot;enable_local_logins\&quot;:true,\&quot;enable_local_logins_via_email\&quot;:true,\&quot;allow_new_registrations\&quot;:true,\&quot;enable_signup_cta\&quot;:false,\&quot;facebook_app_id\&quot;:\&quot;\&quot;,\&quot;auth_skip_create_confirm\&quot;:false,\&quot;auth_overrides_email\&quot;:false,\&quot;enable_discourse_connect\&quot;:false,\&quot;discourse_connect_overrides_avatar\&quot;:false,\&quot;hide_email_address_taken\&quot;:true,\&quot;min_username_length\&quot;:3,\&quot;max_username_length\&quot;:20,\&quot;unicode_usernames\&quot;:false,\&quot;min_password_length\&quot;:10,\&quot;min_admin_password_length\&quot;:15,\&quot;email_editable\&quot;:false,\&quot;logout_redirect\&quot;:\&quot;\&quot;,\&quot;full_name_required\&quot;:false,\&quot;enable_names\&quot;:true,\&quot;invite_expiry_days\&quot;:90,\&quot;invites_per_page\&quot;:40,\&quot;delete_user_max_post_age\&quot;:1,\&quot;delete_all_posts_max\&quot;:15,\&quot;prioritize_username_in_ux\&quot;:false,\&quot;enable_user_directory\&quot;:false,\&quot;allow_anonymous_posting\&quot;:false,\&quot;anonymous_posting_min_trust_level\&quot;:1,\&quot;allow_users_to_hide_profile\&quot;:true,\&quot;hide_user_profiles_from_public\&quot;:false,\&quot;allow_featured_topic_on_user_profiles\&quot;:true,\&quot;hide_suspension_reasons\&quot;:true,\&quot;ignored_users_count_message_threshold\&quot;:5,\&quot;ignored_users_message_gap_days\&quot;:365,\&quot;user_selected_primary_groups\&quot;:false,\&quot;gravatar_name\&quot;:\&quot;Gravatar\&quot;,\&quot;gravatar_base_url\&quot;:\&quot;www.gravatar.com\&quot;,\&quot;gravatar_login_url\&quot;:\&quot;/emails\&quot;,\&quot;enable_group_directory\&quot;:true,\&quot;enable_category_group_moderation\&quot;:false,\&quot;min_post_length\&quot;:10,\&quot;min_first_post_length\&quot;:20,\&quot;min_personal_message_post_length\&quot;:10,\&quot;max_post_length\&quot;:32000,\&quot;topic_featured_link_enabled\&quot;:true,\&quot;min_topic_views_for_delete_confirm\&quot;:5000,\&quot;min_topic_title_length\&quot;:15,\&quot;max_topic_title_length\&quot;:255,\&quot;enable_filtered_replies_view\&quot;:false,\&quot;min_personal_message_title_length\&quot;:2,\&quot;allow_uncategorized_topics\&quot;:true,\&quot;min_title_similar_length\&quot;:10,\&quot;enable_personal_messages\&quot;:false,\&quot;edit_history_visible_to_public\&quot;:true,\&quot;delete_removed_posts_after\&quot;:24,\&quot;traditional_markdown_linebreaks\&quot;:false,\&quot;enable_markdown_typographer\&quot;:true,\&quot;enable_markdown_linkify\&quot;:true,\&quot;markdown_linkify_tlds\&quot;:\&quot;com|net|org|io|co|tv|cn|us|uk|me|de|fr|fi|gov\&quot;,\&quot;markdown_typographer_quotation_marks\&quot;:\&quot;„|“|‚|‘\&quot;,\&quot;enable_rich_text_paste\&quot;:true,\&quot;suppress_reply_directly_below\&quot;:true,\&quot;suppress_reply_directly_above\&quot;:true,\&quot;max_reply_history\&quot;:1,\&quot;enable_mentions\&quot;:true,\&quot;here_mention\&quot;:\&quot;here\&quot;,\&quot;newuser_max_embedded_media\&quot;:1,\&quot;newuser_max_attachments\&quot;:0,\&quot;show_pinned_excerpt_mobile\&quot;:true,\&quot;show_pinned_excerpt_desktop\&quot;:true,\&quot;display_name_on_posts\&quot;:true,\&quot;show_time_gap_days\&quot;:7,\&quot;short_progress_text_threshold\&quot;:10000,\&quot;default_code_lang\&quot;:\&quot;auto\&quot;,\&quot;autohighlight_all_code\&quot;:false,\&quot;highlighted_languages\&quot;:\&quot;apache|bash|cs|cpp|css|coffeescript|diff|xml|http|ini|json|java|javascript|makefile|markdown|nginx|objectivec|ruby|perl|php|python|sql|handlebars\&quot;,\&quot;show_copy_button_on_codeblocks\&quot;:false,\&quot;enable_emoji\&quot;:true,\&quot;enable_emoji_shortcuts\&quot;:true,\&quot;emoji_set\&quot;:\&quot;twitter\&quot;,\&quot;emoji_autocomplete_min_chars\&quot;:0,\&quot;enable_inline_emoji_translation\&quot;:false,\&quot;code_formatting_style\&quot;:\&quot;code-fences\&quot;,\&quot;allowed_href_schemes\&quot;:\&quot;\&quot;,\&quot;watched_words_regular_expressions\&quot;:false,\&quot;enable_diffhtml_preview\&quot;:false,\&quot;enable_fast_edit\&quot;:true,\&quot;old_post_notice_days\&quot;:14,\&quot;blur_tl0_flagged_posts_media\&quot;:true,\&quot;email_time_window_mins\&quot;:10,\&quot;disable_digest_emails\&quot;:false,\&quot;email_in\&quot;:false,\&quot;enable_imap\&quot;:false,\&quot;enable_smtp\&quot;:false,\&quot;disable_emails\&quot;:\&quot;no\&quot;,\&quot;bounce_score_threshold\&quot;:4,\&quot;enable_secondary_emails\&quot;:true,\&quot;max_image_size_kb\&quot;:4096,\&quot;max_attachment_size_kb\&quot;:4096,\&quot;authorized_extensions\&quot;:\&quot;jpg|jpeg|png|gif|heic|heif|webp\&quot;,\&quot;authorized_extensions_for_staff\&quot;:\&quot;\&quot;,\&quot;max_image_width\&quot;:690,\&quot;max_image_height\&quot;:500,\&quot;prevent_anons_from_downloading_files\&quot;:true,\&quot;secure_media\&quot;:false,\&quot;enable_s3_uploads\&quot;:false,\&quot;allow_profile_backgrounds\&quot;:false,\&quot;allow_uploaded_avatars\&quot;:\&quot;0\&quot;,\&quot;default_avatars\&quot;:\&quot;\&quot;,\&quot;external_system_avatars_enabled\&quot;:true,\&quot;external_system_avatars_url\&quot;:\&quot;/letter_avatar_proxy/v4/letter/{first_letter}/{color}/{size}.png\&quot;,\&quot;external_emoji_url\&quot;:\&quot;\&quot;,\&quot;selectable_avatars_enabled\&quot;:false,\&quot;selectable_avatars\&quot;:\&quot;\&quot;,\&quot;allow_staff_to_upload_any_file_in_pm\&quot;:true,\&quot;simultaneous_uploads\&quot;:5,\&quot;composer_media_optimization_image_enabled\&quot;:true,\&quot;composer_media_optimization_image_bytes_optimization_threshold\&quot;:524288,\&quot;composer_media_optimization_image_resize_dimensions_threshold\&quot;:1920,\&quot;composer_media_optimization_image_resize_width_target\&quot;:1920,\&quot;composer_media_optimization_image_resize_pre_multiply\&quot;:false,\&quot;composer_media_optimization_image_resize_linear_rgb\&quot;:false,\&quot;composer_media_optimization_image_encode_quality\&quot;:75,\&quot;composer_media_optimization_debug_mode\&quot;:false,\&quot;min_trust_level_to_allow_profile_background\&quot;:0,\&quot;min_trust_level_to_allow_user_card_background\&quot;:0,\&quot;min_trust_level_to_allow_ignore\&quot;:2,\&quot;tl1_requires_read_posts\&quot;:1,\&quot;tl3_links_no_follow\&quot;:false,\&quot;enforce_second_factor\&quot;:\&quot;no\&quot;,\&quot;moderators_change_post_ownership\&quot;:false,\&quot;moderators_view_emails\&quot;:true,\&quot;use_admin_ip_allowlist\&quot;:false,\&quot;allowed_iframes\&quot;:\&quot;https://www.google.com/maps/embed?|https://www.openstreetmap.org/export/embed.html?|https://calendar.google.com/calendar/embed?|https://docs.google.com/forms/d/|https://blaudirekt-fragen-antworten.podigee.io/1-qa-mit-oliver-corona/embed?|https://community.blaudirekt.de/discobot/certificate.svg|https://support.microsoft.com/|https://academy.blaudirekt.de/\&quot;,\&quot;can_permanently_delete\&quot;:false,\&quot;max_oneboxes_per_post\&quot;:50,\&quot;reviewable_claiming\&quot;:\&quot;disabled\&quot;,\&quot;reviewable_default_topics\&quot;:false,\&quot;reviewable_default_visibility\&quot;:\&quot;low\&quot;,\&quot;alert_admins_if_errors_per_minute\&quot;:0,\&quot;alert_admins_if_errors_per_hour\&quot;:0,\&quot;max_prints_per_hour_per_user\&quot;:5,\&quot;invite_link_max_redemptions_limit\&quot;:5000,\&quot;invite_link_max_redemptions_limit_users\&quot;:10,\&quot;enable_long_polling\&quot;:true,\&quot;enable_chunked_encoding\&quot;:true,\&quot;long_polling_base_url\&quot;:\&quot;/\&quot;,\&quot;background_polling_interval\&quot;:60000,\&quot;polling_interval\&quot;:3000,\&quot;anon_polling_interval\&quot;:30000,\&quot;flush_timings_secs\&quot;:60,\&quot;verbose_localization\&quot;:false,\&quot;max_new_topics\&quot;:500,\&quot;enable_safe_mode\&quot;:false,\&quot;tos_url\&quot;:\&quot;\&quot;,\&quot;privacy_policy_url\&quot;:\&quot;https://www.blaudirekt.de/datenschutzerklaerung\&quot;,\&quot;faq_url\&quot;:\&quot;\&quot;,\&quot;enable_backups\&quot;:true,\&quot;backup_location\&quot;:\&quot;local\&quot;,\&quot;maximum_backups\&quot;:14,\&quot;use_pg_headlines_for_excerpt\&quot;:false,\&quot;min_search_term_length\&quot;:3,\&quot;log_search_queries\&quot;:true,\&quot;version_checks\&quot;:true,\&quot;suppress_uncategorized_badge\&quot;:true,\&quot;header_dropdown_category_count\&quot;:8,\&quot;slug_generation_method\&quot;:\&quot;ascii\&quot;,\&quot;summary_timeline_button\&quot;:false,\&quot;topic_views_heat_low\&quot;:1000,\&quot;topic_views_heat_medium\&quot;:2000,\&quot;topic_views_heat_high\&quot;:3500,\&quot;topic_post_like_heat_low\&quot;:0.77,\&quot;topic_post_like_heat_medium\&quot;:1.23,\&quot;topic_post_like_heat_high\&quot;:2.0,\&quot;history_hours_low\&quot;:12,\&quot;history_hours_medium\&quot;:24,\&quot;history_hours_high\&quot;:48,\&quot;cold_age_days_low\&quot;:14,\&quot;cold_age_days_medium\&quot;:90,\&quot;cold_age_days_high\&quot;:180,\&quot;global_notice\&quot;:\&quot;\&quot;,\&quot;show_create_topics_notice\&quot;:false,\&quot;bootstrap_mode_min_users\&quot;:0,\&quot;bootstrap_mode_enabled\&quot;:false,\&quot;automatically_unpin_topics\&quot;:false,\&quot;read_time_word_count\&quot;:500,\&quot;topic_page_title_includes_category\&quot;:true,\&quot;svg_icon_subset\&quot;:\&quot;\&quot;,\&quot;allow_bulk_invite\&quot;:false,\&quot;disable_mailing_list_mode\&quot;:true,\&quot;default_topics_automatic_unpin\&quot;:true,\&quot;mute_all_categories_by_default\&quot;:false,\&quot;tagging_enabled\&quot;:true,\&quot;tag_style\&quot;:\&quot;bullet\&quot;,\&quot;max_tags_per_topic\&quot;:5,\&quot;max_tag_length\&quot;:30,\&quot;min_trust_level_to_tag_topics\&quot;:\&quot;0\&quot;,\&quot;max_tag_search_results\&quot;:5,\&quot;max_tags_in_filter_list\&quot;:30,\&quot;tags_sort_alphabetically\&quot;:false,\&quot;tags_listed_by_group\&quot;:true,\&quot;suppress_overlapping_tags_in_list\&quot;:false,\&quot;remove_muted_tags_from_latest\&quot;:\&quot;always\&quot;,\&quot;force_lowercase_tags\&quot;:true,\&quot;dashboard_hidden_reports\&quot;:\&quot;\&quot;,\&quot;dashboard_visible_tabs\&quot;:\&quot;moderation|security|reports\&quot;,\&quot;dashboard_general_tab_activity_metrics\&quot;:\&quot;page_view_total_reqs|visits|time_to_first_response|likes|flags|user_to_user_private_messages_with_replies\&quot;,\&quot;details_enabled\&quot;:true,\&quot;discourse_local_dates_email_format\&quot;:\&quot;YYYY-MM-DDTHH:mm:ss[Z]\&quot;,\&quot;discourse_local_dates_enabled\&quot;:true,\&quot;discourse_local_dates_default_formats\&quot;:\&quot;LLL|LTS|LL|LLLL\&quot;,\&quot;discourse_local_dates_default_timezones\&quot;:\&quot;Europe/Paris\&quot;,\&quot;discourse_narrative_bot_enabled\&quot;:true,\&quot;presence_enabled\&quot;:true,\&quot;presence_max_users_shown\&quot;:5,\&quot;poll_enabled\&quot;:true,\&quot;poll_maximum_options\&quot;:20,\&quot;poll_minimum_trust_level_to_create\&quot;:4,\&quot;poll_groupable_user_fields\&quot;:\&quot;\&quot;,\&quot;poll_export_data_explorer_query_id\&quot;:-16,\&quot;oauth2_enabled\&quot;:true,\&quot;oauth2_button_title\&quot;:\&quot;mit Ameise\&quot;,\&quot;microsoft_auth_enabled\&quot;:true,\&quot;solved_enabled\&quot;:true,\&quot;allow_solved_on_all_topics\&quot;:false,\&quot;accept_all_solutions_trust_level\&quot;:4,\&quot;empty_box_on_unsolved\&quot;:false,\&quot;show_filter_by_solved_status\&quot;:false,\&quot;voting_enabled\&quot;:true,\&quot;voting_show_who_voted\&quot;:true,\&quot;voting_show_votes_on_profile\&quot;:true,\&quot;available_locales\&quot;:\&quot;[{\\\&quot;name\\\&quot;:\\\&quot;اللغة العربية\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;ar\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;беларуская мова\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;be\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;български език\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;bg\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;bosanski jezik\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;bs_BA\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;català\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;ca\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;čeština\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;cs\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;dansk\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;da\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Deutsch\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;de\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;ελληνικά\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;el\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;English (US)\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;en\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;English (UK)\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;en_GB\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Español\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;es\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;eesti\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;et\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;فارسی\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;fa_IR\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;suomi\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;fi\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Français\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;fr\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;galego\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;gl\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;עברית\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;he\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;magyar\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;hu\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Հայերեն\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;hy\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Indonesian\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;id\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Italiano\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;it\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;日本語\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;ja\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;한국어\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;ko\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;lietuvių kalba\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;lt\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;latviešu valoda\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;lv\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Norsk bokmål\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;nb_NO\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Nederlands\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;nl\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;polski\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;pl_PL\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Português\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;pt\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Português (BR)\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;pt_BR\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;limba română\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;ro\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Русский\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;ru\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;slovenčina\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;sk\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;slovenščina\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;sl\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Shqip\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;sq\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;српски језик\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;sr\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;svenska\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;sv\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Kiswahili\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;sw\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;తెలుగు\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;te\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;ไทย\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;th\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Türkçe\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;tr_TR\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;українська мова\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;uk\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;اردو\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;ur\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;Việt Nam\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;vi\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;简体中文\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;zh_CN\\\&quot;},{\\\&quot;name\\\&quot;:\\\&quot;繁體中文\\\&quot;,\\\&quot;value\\\&quot;:\\\&quot;zh_TW\\\&quot;}]\&quot;,\&quot;require_invite_code\&quot;:false,\&quot;site_logo_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/5/55ffcabf0e5952ca2ed24e57d19928d2cfac8a48.svg\&quot;,\&quot;site_logo_small_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733.svg\&quot;,\&quot;site_mobile_logo_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/c/cd8d2a857f341aad16519920cdcea8f49167cfb8.png\&quot;,\&quot;site_favicon_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/optimized/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733_2_32x32.svg\&quot;,\&quot;site_logo_dark_url\&quot;:\&quot;\&quot;,\&quot;site_logo_small_dark_url\&quot;:\&quot;\&quot;,\&quot;site_mobile_logo_dark_url\&quot;:\&quot;\&quot;}&quot;,&quot;customHTML&quot;:&quot;{\&quot;top\&quot;:\&quot;\&quot;,\&quot;footer\&quot;:\&quot;\&quot;}&quot;,&quot;banner&quot;:&quot;{}&quot;,&quot;customEmoji&quot;:&quot;[]&quot;,&quot;isReadOnly&quot;:&quot;false&quot;,&quot;activatedThemes&quot;:&quot;{\&quot;5\&quot;:\&quot;Weltensprung\&quot;,\&quot;6\&quot;:\&quot;Default\&quot;}&quot;,&quot;currentUser&quot;:&quot;{\&quot;id\&quot;:1441,\&quot;username\&quot;:\&quot;nan\&quot;,\&quot;name\&quot;:\&quot;Nico Antkowiak\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/nan/{size}/1899_2.png\&quot;,\&quot;unread_notifications\&quot;:0,\&quot;unread_private_messages\&quot;:0,\&quot;unread_high_priority_notifications\&quot;:0,\&quot;read_first_notification\&quot;:true,\&quot;admin\&quot;:false,\&quot;notification_channel_position\&quot;:27,\&quot;moderator\&quot;:false,\&quot;staff\&quot;:false,\&quot;title\&quot;:\&quot;Dionera\&quot;,\&quot;any_posts\&quot;:true,\&quot;enable_quoting\&quot;:true,\&quot;enable_defer\&quot;:false,\&quot;external_links_in_new_tab\&quot;:false,\&quot;dynamic_favicon\&quot;:true,\&quot;trust_level\&quot;:3,\&quot;can_send_private_email_messages\&quot;:false,\&quot;can_send_private_messages\&quot;:false,\&quot;can_edit\&quot;:true,\&quot;can_delete_account\&quot;:true,\&quot;should_be_redirected_to_top\&quot;:false,\&quot;custom_fields\&quot;:{},\&quot;muted_category_ids\&quot;:[],\&quot;regular_category_ids\&quot;:[],\&quot;tracked_category_ids\&quot;:[],\&quot;watched_first_post_category_ids\&quot;:[6,15,11,16,17,12,24],\&quot;watched_category_ids\&quot;:[],\&quot;muted_tag_ids\&quot;:[],\&quot;watched_tags\&quot;:[],\&quot;watching_first_post_tags\&quot;:[],\&quot;tracked_tags\&quot;:[],\&quot;muted_tags\&quot;:[],\&quot;regular_tags\&quot;:[],\&quot;dismissed_banner_key\&quot;:null,\&quot;is_anonymous\&quot;:false,\&quot;reviewable_count\&quot;:0,\&quot;read_faq\&quot;:false,\&quot;automatically_unpin_topics\&quot;:true,\&quot;mailing_list_mode\&quot;:false,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;,\&quot;previous_visit_at\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;,\&quot;seen_notification_id\&quot;:2560557,\&quot;primary_group_id\&quot;:44,\&quot;flair_group_id\&quot;:44,\&quot;can_create_topic\&quot;:true,\&quot;link_posting_access\&quot;:\&quot;full\&quot;,\&quot;top_category_ids\&quot;:[6,15,11,16,17,12,24],\&quot;hide_profile_and_presence\&quot;:false,\&quot;groups\&quot;:[{\&quot;id\&quot;:44,\&quot;name\&quot;:\&quot;dionera\&quot;,\&quot;has_messages\&quot;:false},{\&quot;id\&quot;:10,\&quot;name\&quot;:\&quot;vertrauensstufe_0\&quot;,\&quot;has_messages\&quot;:false},{\&quot;id\&quot;:11,\&quot;name\&quot;:\&quot;vertrauensstufe_1\&quot;,\&quot;has_messages\&quot;:false},{\&quot;id\&quot;:12,\&quot;name\&quot;:\&quot;vertrauensstufe_2\&quot;,\&quot;has_messages\&quot;:false},{\&quot;id\&quot;:13,\&quot;name\&quot;:\&quot;vertrauensstufe_3\&quot;,\&quot;has_messages\&quot;:false}],\&quot;second_factor_enabled\&quot;:false,\&quot;ignored_users\&quot;:[],\&quot;title_count_mode\&quot;:\&quot;notifications\&quot;,\&quot;timezone\&quot;:\&quot;Europe/Berlin\&quot;,\&quot;featured_topic\&quot;:null,\&quot;skip_new_user_tips\&quot;:false,\&quot;do_not_disturb_until\&quot;:null,\&quot;can_review\&quot;:false,\&quot;draft_count\&quot;:0,\&quot;default_calendar\&quot;:\&quot;none_selected\&quot;,\&quot;pending_posts_count\&quot;:0,\&quot;votes_exceeded\&quot;:false,\&quot;vote_count\&quot;:0,\&quot;votes_left\&quot;:3}&quot;,&quot;topicTrackingStates&quot;:&quot;[{\&quot;topic_id\&quot;:14380,\&quot;highest_post_number\&quot;:1,\&quot;last_read_post_number\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-12-12T12:58:38.550Z\&quot;,\&quot;category_id\&quot;:9,\&quot;notification_level\&quot;:null,\&quot;created_in_new_period\&quot;:true,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:4049,\&quot;highest_post_number\&quot;:304,\&quot;last_read_post_number\&quot;:240,\&quot;created_at\&quot;:\&quot;2020-07-08T16:09:59.553Z\&quot;,\&quot;category_id\&quot;:6,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:4299,\&quot;highest_post_number\&quot;:19,\&quot;last_read_post_number\&quot;:16,\&quot;created_at\&quot;:\&quot;2020-08-24T17:17:35.909Z\&quot;,\&quot;category_id\&quot;:8,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:5054,\&quot;highest_post_number\&quot;:6,\&quot;last_read_post_number\&quot;:4,\&quot;created_at\&quot;:\&quot;2020-11-15T20:33:06.066Z\&quot;,\&quot;category_id\&quot;:3,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:5272,\&quot;highest_post_number\&quot;:19,\&quot;last_read_post_number\&quot;:6,\&quot;created_at\&quot;:\&quot;2020-12-21T17:14:26.482Z\&quot;,\&quot;category_id\&quot;:1,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:5466,\&quot;highest_post_number\&quot;:14,\&quot;last_read_post_number\&quot;:7,\&quot;created_at\&quot;:\&quot;2021-01-26T23:53:52.490Z\&quot;,\&quot;category_id\&quot;:8,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:7142,\&quot;highest_post_number\&quot;:12,\&quot;last_read_post_number\&quot;:1,\&quot;created_at\&quot;:\&quot;2021-11-03T14:32:12.104Z\&quot;,\&quot;category_id\&quot;:1,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:8844,\&quot;highest_post_number\&quot;:13,\&quot;last_read_post_number\&quot;:11,\&quot;created_at\&quot;:\&quot;2022-08-11T11:53:40.222Z\&quot;,\&quot;category_id\&quot;:3,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:9242,\&quot;highest_post_number\&quot;:10,\&quot;last_read_post_number\&quot;:8,\&quot;created_at\&quot;:\&quot;2022-10-24T16:24:32.616Z\&quot;,\&quot;category_id\&quot;:8,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:9897,\&quot;highest_post_number\&quot;:32,\&quot;last_read_post_number\&quot;:29,\&quot;created_at\&quot;:\&quot;2023-01-23T13:51:26.349Z\&quot;,\&quot;category_id\&quot;:8,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:9902,\&quot;highest_post_number\&quot;:23,\&quot;last_read_post_number\&quot;:16,\&quot;created_at\&quot;:\&quot;2023-01-23T14:23:06.248Z\&quot;,\&quot;category_id\&quot;:5,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:9910,\&quot;highest_post_number\&quot;:11,\&quot;last_read_post_number\&quot;:9,\&quot;created_at\&quot;:\&quot;2023-01-24T09:27:11.408Z\&quot;,\&quot;category_id\&quot;:9,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:10078,\&quot;highest_post_number\&quot;:19,\&quot;last_read_post_number\&quot;:3,\&quot;created_at\&quot;:\&quot;2023-02-09T14:14:24.775Z\&quot;,\&quot;category_id\&quot;:6,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:10545,\&quot;highest_post_number\&quot;:9,\&quot;last_read_post_number\&quot;:7,\&quot;created_at\&quot;:\&quot;2023-04-12T10:21:32.450Z\&quot;,\&quot;category_id\&quot;:6,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:10734,\&quot;highest_post_number\&quot;:52,\&quot;last_read_post_number\&quot;:50,\&quot;created_at\&quot;:\&quot;2023-05-08T11:17:16.441Z\&quot;,\&quot;category_id\&quot;:9,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:11247,\&quot;highest_post_number\&quot;:17,\&quot;last_read_post_number\&quot;:7,\&quot;created_at\&quot;:\&quot;2023-07-25T11:54:01.931Z\&quot;,\&quot;category_id\&quot;:9,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:13541,\&quot;highest_post_number\&quot;:28,\&quot;last_read_post_number\&quot;:17,\&quot;created_at\&quot;:\&quot;2024-08-08T13:29:24.286Z\&quot;,\&quot;category_id\&quot;:6,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;},{\&quot;topic_id\&quot;:14289,\&quot;highest_post_number\&quot;:10,\&quot;last_read_post_number\&quot;:2,\&quot;created_at\&quot;:\&quot;2024-12-02T09:39:10.221Z\&quot;,\&quot;category_id\&quot;:9,\&quot;notification_level\&quot;:2,\&quot;created_in_new_period\&quot;:false,\&quot;unread_not_too_old\&quot;:true,\&quot;treat_as_new_topic_start_date\&quot;:\&quot;2024-12-12T12:09:34.271Z\&quot;}]&quot;,&quot;categories_list&quot;:&quot;{\&quot;category_list\&quot;:{\&quot;can_create_category\&quot;:false,\&quot;can_create_topic\&quot;:true,\&quot;categories\&quot;:[{\&quot;id\&quot;:6,\&quot;name\&quot;:\&quot;Neuigkeiten\&quot;,\&quot;color\&quot;:\&quot;25AAE2\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;neuigkeiten\&quot;,\&quot;topic_count\&quot;:842,\&quot;post_count\&quot;:6214,\&quot;position\&quot;:0,\&quot;description\&quot;:\&quot;An dieser Stelle informieren wir euch über anstehende Veranstaltungen, derzeitige Aktionen und aktuelle News.\&quot;,\&quot;description_text\&quot;:\&quot;An dieser Stelle informieren wir euch über anstehende Veranstaltungen, derzeitige Aktionen und aktuelle News.\&quot;,\&quot;description_excerpt\&quot;:\&quot;An dieser Stelle informieren wir euch über anstehende Veranstaltungen, derzeitige Aktionen und aktuelle News.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-neuigkeiten/15\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:null,\&quot;notification_level\&quot;:4,\&quot;topic_template\&quot;:\&quot;![changelog|690x299](upload://203649QDdSK3wMnm8ViXs7ZOfZ2.jpeg)\\n\\n## Änderungen\\n* [Thema 1](#thema_1)\\n* [Thema 2](#thema_2)\\n\\n\\u003ca name=\\\&quot;thema_1\\\&quot;\\u003e\\u003c/a\\u003e\\n### Thema 1\\nBeschreibung Thema 1\\n\\n\\u003ca name=\\\&quot;thema_2\\\&quot;\\u003e\\u003c/a\\u003e\\n### Thema 2\\nBeschreibung Thema 2\&quot;,\&quot;has_children\&quot;:true,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:true,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;boxes\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;topics_day\&quot;:2,\&quot;topics_week\&quot;:9,\&quot;topics_month\&quot;:29,\&quot;topics_year\&quot;:244,\&quot;topics_all_time\&quot;:1237,\&quot;subcategory_ids\&quot;:[24,21,23],\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:672,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/d008d3f940e770d9ab88945b24e1c4241510463c.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null},{\&quot;id\&quot;:1,\&quot;name\&quot;:\&quot;Allgemein\&quot;,\&quot;color\&quot;:\&quot;9EB83B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;allgemein\&quot;,\&quot;topic_count\&quot;:187,\&quot;post_count\&quot;:1170,\&quot;position\&quot;:4,\&quot;description\&quot;:\&quot;Hier findest Du allgemeine Diskussionen\&quot;,\&quot;description_text\&quot;:\&quot;Hier findest Du allgemeine Diskussionen\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier findest Du allgemeine Diskussionen\&quot;,\&quot;topic_url\&quot;:null,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;topics_day\&quot;:0,\&quot;topics_week\&quot;:0,\&quot;topics_month\&quot;:0,\&quot;topics_year\&quot;:18,\&quot;topics_all_time\&quot;:187,\&quot;is_uncategorized\&quot;:true,\&quot;subcategory_ids\&quot;:[],\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:670,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/40f71252f4bb8dc1cbfc41fc8fea1177a762b1db.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null},{\&quot;id\&quot;:3,\&quot;name\&quot;:\&quot;Fragen und Antworten\&quot;,\&quot;color\&quot;:\&quot;ED207B\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;fragen-und-antworten\&quot;,\&quot;topic_count\&quot;:886,\&quot;post_count\&quot;:5465,\&quot;position\&quot;:5,\&quot;description\&quot;:\&quot;Hier kannst Du Fragen stellen und erhältst in Kürze eine Antwort eines Kollegen oder von blau direkt.\&quot;,\&quot;description_text\&quot;:\&quot;Hier kannst Du Fragen stellen und erhältst in Kürze eine Antwort eines Kollegen oder von blau direkt.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Hier kannst Du Fragen stellen und erhältst in Kürze eine Antwort eines Kollegen oder von blau direkt.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-fragen-und-antworten/2\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:true,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:true,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;boxes\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;topics_day\&quot;:3,\&quot;topics_week\&quot;:17,\&quot;topics_month\&quot;:82,\&quot;topics_year\&quot;:666,\&quot;topics_all_time\&quot;:4581,\&quot;subcategory_ids\&quot;:[7,8,14,22],\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:673,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/dc51e0bf01228f7054f3507cd6f624127c8935cf.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null},{\&quot;id\&quot;:5,\&quot;name\&quot;:\&quot;Feature Requests\&quot;,\&quot;color\&quot;:\&quot;0E76BD\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;feature-requests\&quot;,\&quot;topic_count\&quot;:614,\&quot;post_count\&quot;:3688,\&quot;position\&quot;:10,\&quot;description\&quot;:\&quot;Falls Du eine Idee oder Verbesserungsvorschläge hast, dann poste diese und diskutiere mit Anderen über Deine Anregung. Vielleicht landet Deine Idee auf unserer Roadmap.\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;/t/wie-du-fuer-ideen-votest/14\\\&quot;\\u003eFür eine Idee voten\\u003c/a\\u003e\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;/new-topic?category_id=5\\\&quot;\\u003eSchlage eine Idee vor\\u003c/a\\u003e\&quot;,\&quot;description_text\&quot;:\&quot;Falls Du eine Idee oder Verbesserungsvorschläge hast, dann poste diese und diskutiere mit Anderen über Deine Anregung. Vielleicht landet Deine Idee auf unserer Roadmap.\\nFür eine Idee voten\\nSchlage eine Idee vor\&quot;,\&quot;description_excerpt\&quot;:\&quot;Falls Du eine Idee oder Verbesserungsvorschläge hast, dann poste diese und diskutiere mit Anderen über Deine Anregung. Vielleicht landet Deine Idee auf unserer Roadmap. \\n\\u003ca href=\\\&quot;/t/wie-du-fuer-ideen-votest/14\\\&quot;\\u003eFür eine Idee voten\\u003c/a\\u003e \\n\\u003ca href=\\\&quot;/new-topic?category_id=5\\\&quot;\\u003eSchlage eine Idee vor\\u003c/a\\u003e\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-feature-requests/12\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;topics_day\&quot;:0,\&quot;topics_week\&quot;:0,\&quot;topics_month\&quot;:6,\&quot;topics_year\&quot;:91,\&quot;topics_all_time\&quot;:614,\&quot;subcategory_ids\&quot;:[],\&quot;can_vote\&quot;:true,\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:664,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/e441a291637f75fa35e425c50b20416db19e820e.gif\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null},{\&quot;id\&quot;:9,\&quot;name\&quot;:\&quot;Bugs\&quot;,\&quot;color\&quot;:\&quot;BF1E2E\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;bugs\&quot;,\&quot;topic_count\&quot;:615,\&quot;post_count\&quot;:4190,\&quot;position\&quot;:11,\&quot;description\&quot;:\&quot;Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/24/1\\\&quot;\\u003eEinen Fehler richtig melden\\u003c/a\\u003e\\u003cbr\\u003e\\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/1230/1\\\&quot;\\u003eWas ist eigentlich ein Fehler?\\u003c/a\\u003e\&quot;,\&quot;description_text\&quot;:\&quot;Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer!\\nEinen Fehler richtig melden\\nWas ist eigentlich ein Fehler?\&quot;,\&quot;description_excerpt\&quot;:\&quot;Dir sind Fehler oder Bugs im System aufgefallen? Schau nicht weg und veröffentliche die Patzer! \\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/24/1\\\&quot;\\u003eEinen Fehler richtig melden\\u003c/a\\u003e \\n\\u003ca href=\\\&quot;https://community.blaudirekt.de/t/korrekte-fehlermeldung/1230/1\\\&quot;\\u003eWas ist eigentlich ein Fehler?\\u003c/a\\u003e\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-bugs/23\&quot;,\&quot;read_restricted\&quot;:true,\&quot;permission\&quot;:1,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;### Infos:\\n**Wichtig:**\\n\\n* PC oder Mobil:\\n* Betriebssystem: \\n* Browser + version: \\n\\n\\n### Erwartetes Verhalten:\\n\\n* \\n\\n\\n### Wirkliches Verhalten:\\n\\n* \\n\\n\\n### Schritte zum Reproduzieren des Fehlers:\\n\\n* \\n\&quot;,\&quot;has_children\&quot;:false,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:false,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows_with_featured_topics\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;topics_day\&quot;:1,\&quot;topics_week\&quot;:5,\&quot;topics_month\&quot;:21,\&quot;topics_year\&quot;:133,\&quot;topics_all_time\&quot;:615,\&quot;subcategory_ids\&quot;:[],\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:671,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/3d1643f50b6aa3af51991b7e9b5cc27c293e27f9.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null},{\&quot;id\&quot;:10,\&quot;name\&quot;:\&quot;Labor\&quot;,\&quot;color\&quot;:\&quot;652D90\&quot;,\&quot;text_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;slug\&quot;:\&quot;labor\&quot;,\&quot;topic_count\&quot;:1,\&quot;post_count\&quot;:1,\&quot;position\&quot;:12,\&quot;description\&quot;:\&quot;Dies ist ein geschlossener Bereich für Beta-Tester für verschiedene Beta-Test Programme, Workshops und vieles mehr.\&quot;,\&quot;description_text\&quot;:\&quot;Dies ist ein geschlossener Bereich für Beta-Tester für verschiedene Beta-Test Programme, Workshops und vieles mehr.\&quot;,\&quot;description_excerpt\&quot;:\&quot;Dies ist ein geschlossener Bereich für Beta-Tester für verschiedene Beta-Test Programme, Workshops und vieles mehr.\&quot;,\&quot;topic_url\&quot;:\&quot;/t/ueber-die-kategorie-labor/50\&quot;,\&quot;read_restricted\&quot;:false,\&quot;permission\&quot;:null,\&quot;notification_level\&quot;:1,\&quot;topic_template\&quot;:\&quot;\&quot;,\&quot;has_children\&quot;:true,\&quot;sort_order\&quot;:\&quot;\&quot;,\&quot;sort_ascending\&quot;:null,\&quot;show_subcategory_list\&quot;:true,\&quot;num_featured_topics\&quot;:3,\&quot;default_view\&quot;:\&quot;\&quot;,\&quot;subcategory_list_style\&quot;:\&quot;rows\&quot;,\&quot;default_top_period\&quot;:\&quot;all\&quot;,\&quot;default_list_filter\&quot;:\&quot;all\&quot;,\&quot;minimum_required_tags\&quot;:0,\&quot;navigate_to_first_post_after_read\&quot;:false,\&quot;topics_day\&quot;:0,\&quot;topics_week\&quot;:2,\&quot;topics_month\&quot;:10,\&quot;topics_year\&quot;:130,\&quot;topics_all_time\&quot;:431,\&quot;subcategory_ids\&quot;:[26,29,37,36,42,43],\&quot;uploaded_logo\&quot;:{\&quot;id\&quot;:701,\&quot;url\&quot;:\&quot;/uploads/default/original/1X/0fd971d693a1c799bce8e63fb954d33b8b925385.png\&quot;,\&quot;width\&quot;:150,\&quot;height\&quot;:150},\&quot;uploaded_background\&quot;:null}]}}&quot;,&quot;topic_list_latest&quot;:&quot;{\&quot;users\&quot;:[{\&quot;id\&quot;:4,\&quot;username\&quot;:\&quot;kowalski\&quot;,\&quot;name\&quot;:\&quot;Marvin Kowalski\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/kowalski/{size}/7457_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;Support\&quot;,\&quot;flair_name\&quot;:\&quot;Support\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;admin\&quot;:true,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:306,\&quot;username\&quot;:\&quot;TimDanmark73\&quot;,\&quot;name\&quot;:\&quot;Tim Kilz\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/t/9fc348/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:3845,\&quot;username\&quot;:\&quot;SchmidtchenChris\&quot;,\&quot;name\&quot;:\&quot;Christopher Schmidtchen\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/s/919ad9/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:471,\&quot;username\&quot;:\&quot;Daniel-Jahnke\&quot;,\&quot;name\&quot;:\&quot;i.A. Daniel Jahnke - Vertriebsassistent\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/daniel-jahnke/{size}/5527_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:-1,\&quot;username\&quot;:\&quot;system\&quot;,\&quot;name\&quot;:\&quot;system\&quot;,\&quot;avatar_template\&quot;:\&quot;/uploads/default/original/2X/c/c06a45038e0703833ab0dcfef47e84fbb8e7d733.svg\&quot;,\&quot;flair_name\&quot;:null,\&quot;admin\&quot;:true,\&quot;moderator\&quot;:true,\&quot;trust_level\&quot;:4},{\&quot;id\&quot;:1932,\&quot;username\&quot;:\&quot;sett\&quot;,\&quot;name\&quot;:\&quot;sett\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/sett/{size}/7969_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;admin\&quot;:true,\&quot;moderator\&quot;:true,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:114,\&quot;username\&quot;:\&quot;achimb\&quot;,\&quot;name\&quot;:\&quot;Achim Bodden\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/achimb/{size}/522_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:241,\&quot;username\&quot;:\&quot;Johann\&quot;,\&quot;name\&quot;:\&quot;Johann Rappl\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/johann/{size}/1892_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:1417,\&quot;username\&quot;:\&quot;holthey\&quot;,\&quot;name\&quot;:\&quot;Eva Holthey\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/holthey/{size}/4418_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:3189,\&quot;username\&quot;:\&quot;AaronRoider\&quot;,\&quot;name\&quot;:\&quot;Aaron Roider\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/aaronroider/{size}/7987_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:90,\&quot;username\&quot;:\&quot;jordan\&quot;,\&quot;name\&quot;:\&quot;Marvin Jordan\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/jordan/{size}/7955_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;moderator\&quot;:true,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:2955,\&quot;username\&quot;:\&quot;makess\&quot;,\&quot;name\&quot;:\&quot;Christoph Keß\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/makess/{size}/8097_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:105,\&quot;username\&quot;:\&quot;thomaseickhof\&quot;,\&quot;name\&quot;:\&quot;Thomas Eickhof\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/thomaseickhof/{size}/8294_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;bisure\&quot;,\&quot;flair_name\&quot;:\&quot;bisure\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/1/16fe77c6e429b8bae9af8b4f8e5f402568e7e62a.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:362,\&quot;username\&quot;:\&quot;JanMoudry\&quot;,\&quot;name\&quot;:\&quot;Jan Moudry\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/j/b5e925/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:2049,\&quot;username\&quot;:\&quot;marco.lehmann\&quot;,\&quot;name\&quot;:\&quot;Marco\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/m/df705f/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:1877,\&quot;username\&quot;:\&quot;derheidemakler\&quot;,\&quot;name\&quot;:\&quot;derheidemakler\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/d/db5fbb/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:2795,\&quot;username\&quot;:\&quot;franz\&quot;,\&quot;name\&quot;:\&quot;Kim Caroline\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/franz/{size}/7889_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;admin\&quot;:true,\&quot;moderator\&quot;:true,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:97,\&quot;username\&quot;:\&quot;Bechstein\&quot;,\&quot;name\&quot;:\&quot;Jürgen\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/bechstein/{size}/7890_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:323,\&quot;username\&quot;:\&quot;Kurt\&quot;,\&quot;name\&quot;:\&quot;Kurt Höhn\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/kurt/{size}/206_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:3470,\&quot;username\&quot;:\&quot;Rosco\&quot;,\&quot;name\&quot;:\&quot;Roland Schoen\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/rosco/{size}/7252_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:3067,\&quot;username\&quot;:\&quot;Bleiching\&quot;,\&quot;name\&quot;:\&quot;Marco Bleiching\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/bleiching/{size}/7474_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:1591,\&quot;username\&quot;:\&quot;SaschaKwiatkowski\&quot;,\&quot;name\&quot;:\&quot;Sascha Kwiatkowski\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/saschakwiatkowski/{size}/2692_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:2938,\&quot;username\&quot;:\&quot;HarryFuchs\&quot;,\&quot;name\&quot;:\&quot;Harry Fuchs\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/h/8e8cbc/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:2314,\&quot;username\&quot;:\&quot;juergen_goebel\&quot;,\&quot;name\&quot;:\&quot;Jürgen Goebel\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/juergen_goebel/{size}/6997_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:103,\&quot;username\&quot;:\&quot;giese\&quot;,\&quot;name\&quot;:\&quot;Carsten Giese\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/giese/{size}/141_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;moderator\&quot;:true,\&quot;trust_level\&quot;:3},{\&quot;id\&quot;:42,\&quot;username\&quot;:\&quot;Marc\&quot;,\&quot;name\&quot;:\&quot;Marc Emmerich\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/m/8dc957/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:463,\&quot;username\&quot;:\&quot;Sellnow\&quot;,\&quot;name\&quot;:\&quot;Inge Sellnow\&quot;,\&quot;avatar_template\&quot;:\&quot;/letter_avatar_proxy/v4/letter/s/53a042/{size}.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:1},{\&quot;id\&quot;:294,\&quot;username\&quot;:\&quot;Reimer_Ralf\&quot;,\&quot;name\&quot;:\&quot;Reimer Ralf\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/reimer_ralf/{size}/211_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:145,\&quot;username\&quot;:\&quot;Mario\&quot;,\&quot;name\&quot;:\&quot;Mario Strehl\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/mario/{size}/2006_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:420,\&quot;username\&quot;:\&quot;Heiko_Rohmann\&quot;,\&quot;name\&quot;:\&quot;Heiko Rohmann\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/heiko_rohmann/{size}/7084_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:2272,\&quot;username\&quot;:\&quot;Markus_Baltes\&quot;,\&quot;name\&quot;:\&quot;Markus Baltes\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/markus_baltes/{size}/3930_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:32,\&quot;username\&quot;:\&quot;Knocke2000\&quot;,\&quot;name\&quot;:\&quot;Jochen Ried\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/knocke2000/{size}/270_2.png\&quot;,\&quot;flair_name\&quot;:null,\&quot;trust_level\&quot;:2},{\&quot;id\&quot;:335,\&quot;username\&quot;:\&quot;SinaWestphal\&quot;,\&quot;name\&quot;:\&quot;Sina Westphal\&quot;,\&quot;avatar_template\&quot;:\&quot;/user_avatar/community.blaudirekt.de/sinawestphal/{size}/3232_2.png\&quot;,\&quot;primary_group_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;trust_level\&quot;:3}],\&quot;primary_groups\&quot;:[{\&quot;id\&quot;:41,\&quot;name\&quot;:\&quot;Support\&quot;},{\&quot;id\&quot;:45,\&quot;name\&quot;:\&quot;blaudirekt\&quot;},{\&quot;id\&quot;:42,\&quot;name\&quot;:\&quot;bisure\&quot;}],\&quot;flair_groups\&quot;:[{\&quot;id\&quot;:41,\&quot;name\&quot;:\&quot;Support\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:45,\&quot;name\&quot;:\&quot;blaudirekt\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/1X/a3fc1ac6f345a762ca79524ff8efb3e2cfb0aeb6.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;FFFFFF\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;},{\&quot;id\&quot;:42,\&quot;name\&quot;:\&quot;bisure\&quot;,\&quot;flair_url\&quot;:\&quot;/uploads/default/original/2X/1/16fe77c6e429b8bae9af8b4f8e5f402568e7e62a.png\&quot;,\&quot;flair_bg_color\&quot;:\&quot;fff\&quot;,\&quot;flair_color\&quot;:\&quot;\&quot;}],\&quot;topic_list\&quot;:{\&quot;can_create_topic\&quot;:true,\&quot;more_topics_url\&quot;:\&quot;/latest\&quot;,\&quot;per_page\&quot;:20,\&quot;top_tags\&quot;:[\&quot;changelog\&quot;,\&quot;kraftfahrtversicherung\&quot;,\&quot;simplr\&quot;,\&quot;panda\&quot;,\&quot;wohngebäudeversicherung\&quot;,\&quot;lebensversicherung\&quot;,\&quot;vergleichsrechner\&quot;,\&quot;haftpflichtversicherung\&quot;,\&quot;komposit-gewerbe\&quot;,\&quot;ameise\&quot;,\&quot;krankenversicherung\&quot;,\&quot;gmail-addon\&quot;,\&quot;robosave\&quot;,\&quot;unfallversicherung\&quot;,\&quot;edocbox\&quot;,\&quot;rechtsschutzversicherung\&quot;,\&quot;dokuh\&quot;,\&quot;bi:sure\&quot;,\&quot;hausratversicherung\&quot;,\&quot;outlook-addin\&quot;,\&quot;covomo\&quot;,\&quot;tierversicherung\&quot;,\&quot;inhaltsversicherung\&quot;,\&quot;levelnine\&quot;,\&quot;neodigital\&quot;,\&quot;bausparen\&quot;,\&quot;deeplico\&quot;,\&quot;leasing\&quot;,\&quot;carddav\&quot;,\&quot;dipay\&quot;,\&quot;reklama\&quot;],\&quot;topics\&quot;:[{\&quot;id\&quot;:8,\&quot;title\&quot;:\&quot;Willkommen in der blau direkt Community\&quot;,\&quot;fancy_title\&quot;:\&quot;Willkommen in der blau direkt Community\&quot;,\&quot;slug\&quot;:\&quot;willkommen-in-der-blau-direkt-community\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/1X/b309aa0f98f1b7fbfa08e4ed2a79e186eb9b9736.jpg\&quot;,\&quot;created_at\&quot;:\&quot;2018-07-27T10:26:14.671Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2018-07-27T10:26:14.746Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2018-11-02T12:31:43.457Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:true,\&quot;unpinned\&quot;:null,\&quot;excerpt\&quot;:\&quot;Herzlich willkommen in der blau direkt Community! \\nDies ist ein Ort, an dem Du Dich mit anderen Maklern wie auch blau direkt-Mitarbeitern austauschen kannst. \\n\\nWas erwartet Dich hier?\\n\\nRegelmäßige Änderungsmitteilungen (\\u0026hellip;\&quot;,\&quot;visible\&quot;:true,\&quot;closed\&quot;:true,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:2136,\&quot;like_count\&quot;:6,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;kowalski\&quot;,\&quot;category_id\&quot;:1,\&quot;pinned_globally\&quot;:true,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:4,\&quot;primary_group_id\&quot;:41,\&quot;flair_group_id\&quot;:41}]},{\&quot;id\&quot;:14377,\&quot;title\&quot;:\&quot;Kundin in Husum (Simonsberg)\&quot;,\&quot;fancy_title\&quot;:\&quot;Kundin in Husum (Simonsberg)\&quot;,\&quot;slug\&quot;:\&quot;kundin-in-husum-simonsberg\&quot;,\&quot;posts_count\&quot;:4,\&quot;reply_count\&quot;:1,\&quot;highest_post_number\&quot;:4,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-12-12T11:01:44.022Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-12T14:01:45.164Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-12T14:01:45.164Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:43,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;TimDanmark73\&quot;,\&quot;category_id\&quot;:1,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:306,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:4,\&quot;primary_group_id\&quot;:41,\&quot;flair_group_id\&quot;:41},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:3845,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14380,\&quot;title\&quot;:\&quot;Tags anlegen funktioniert nicht\&quot;,\&quot;fancy_title\&quot;:\&quot;Tags anlegen funktioniert nicht\&quot;,\&quot;slug\&quot;:\&quot;tags-anlegen-funktioniert-nicht\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/optimized/2X/3/3affd7f2566f067db1ebac9d1e96da24370c0d1b_2_1024x489.png\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-12T12:58:38.550Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-12T12:58:38.612Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-12T12:58:38.612Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:true,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:26,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;Daniel-Jahnke\&quot;,\&quot;category_id\&quot;:9,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:471,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14379,\&quot;title\&quot;:\&quot;Starker Partner  für Gesundheit und Vertrieb\&quot;,\&quot;fancy_title\&quot;:\&quot;Starker Partner  für Gesundheit und Vertrieb\&quot;,\&quot;slug\&quot;:\&quot;starker-partner-fuer-gesundheit-und-vertrieb\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/9/9d6593f72ca3560ed112e7a6d97822cabde68d97.jpeg\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-12T12:26:43.287Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-12T12:26:43.342Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-12T12:26:43.342Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:true,\&quot;last_read_post_number\&quot;:null,\&quot;unread\&quot;:0,\&quot;new_posts\&quot;:0,\&quot;unread_posts\&quot;:0,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;notification_level\&quot;:1,\&quot;bookmarked\&quot;:false,\&quot;liked\&quot;:false,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:34,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;system\&quot;,\&quot;category_id\&quot;:24,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:\&quot;https://www.blaudirekt.de/blog/2024/12/starker-partner-fuer-gesundheit-und-vertrieb/\&quot;,\&quot;featured_link_root_domain\&quot;:\&quot;blaudirekt.de\&quot;,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:-1,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14378,\&quot;title\&quot;:\&quot;Antragsbearbeitung der Versicherer zum Jahresende // Der Geldwäschebeauftragte informiert\&quot;,\&quot;fancy_title\&quot;:\&quot;Antragsbearbeitung der Versicherer zum Jahresende // Der Geldwäschebeauftragte informiert\&quot;,\&quot;slug\&quot;:\&quot;antragsbearbeitung-der-versicherer-zum-jahresende-der-geldwaeschebeauftragte-informiert\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/0/0e05cb39dbd9d85f94fc166cbab4b9fb0877a4e4.jpeg\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-12T11:15:07.653Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-12T11:15:07.732Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-12T11:15:07.732Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;last_read_post_number\&quot;:null,\&quot;unread\&quot;:0,\&quot;new_posts\&quot;:0,\&quot;unread_posts\&quot;:0,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;notification_level\&quot;:1,\&quot;bookmarked\&quot;:false,\&quot;liked\&quot;:false,\&quot;tags\&quot;:[\&quot;changelog\&quot;],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:45,\&quot;like_count\&quot;:1,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;sett\&quot;,\&quot;category_id\&quot;:6,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:1932,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14374,\&quot;title\&quot;:\&quot;KFZ Gewerberechner hängt seit gestern , jemand eine Idee\&quot;,\&quot;fancy_title\&quot;:\&quot;KFZ Gewerberechner hängt seit gestern , jemand eine Idee\&quot;,\&quot;slug\&quot;:\&quot;kfz-gewerberechner-haengt-seit-gestern-jemand-eine-idee\&quot;,\&quot;posts_count\&quot;:4,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:4,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-12-11T16:03:45.794Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-12T08:28:16.585Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-12T08:28:16.585Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:57,\&quot;like_count\&quot;:1,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;achimb\&quot;,\&quot;category_id\&quot;:14,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:114,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:241,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:1417,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14367,\&quot;title\&quot;:\&quot;PDF Dokumente im Vergleichsrechner funktionieren nicht\&quot;,\&quot;fancy_title\&quot;:\&quot;PDF Dokumente im Vergleichsrechner funktionieren nicht\&quot;,\&quot;slug\&quot;:\&quot;pdf-dokumente-im-vergleichsrechner-funktionieren-nicht\&quot;,\&quot;posts_count\&quot;:3,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:3,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/optimized/2X/0/05e051fcc03b05f3b41b054ca94cd662b30cc888_2_1024x632.png\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-11T09:42:15.125Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-12T06:49:28.918Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-12T06:49:28.918Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;last_read_post_number\&quot;:1,\&quot;unread\&quot;:0,\&quot;new_posts\&quot;:0,\&quot;unread_posts\&quot;:0,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;notification_level\&quot;:1,\&quot;bookmarked\&quot;:false,\&quot;liked\&quot;:false,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:72,\&quot;like_count\&quot;:1,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;jordan\&quot;,\&quot;category_id\&quot;:9,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags\&quot;,\&quot;user_id\&quot;:3189,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:90,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14344,\&quot;title\&quot;:\&quot;Franke Bornberg – versdiagnose - Protokoll manuell erstellen\&quot;,\&quot;fancy_title\&quot;:\&quot;Franke Bornberg – versdiagnose - Protokoll manuell erstellen\&quot;,\&quot;slug\&quot;:\&quot;franke-bornberg-versdiagnose-protokoll-manuell-erstellen\&quot;,\&quot;posts_count\&quot;:4,\&quot;reply_count\&quot;:1,\&quot;highest_post_number\&quot;:4,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/f/f073a89c4ea4cc12c210d1f8d8567903c353499e.png\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-07T16:46:34.644Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T17:37:08.007Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T17:37:08.007Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:122,\&quot;like_count\&quot;:2,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;makess\&quot;,\&quot;category_id\&quot;:22,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:true,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:2955,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge, Akzeptierte Antwort\&quot;,\&quot;user_id\&quot;:105,\&quot;primary_group_id\&quot;:42,\&quot;flair_group_id\&quot;:42}]},{\&quot;id\&quot;:14040,\&quot;title\&quot;:\&quot;Beitragsabweichung Alte Leipziger\&quot;,\&quot;fancy_title\&quot;:\&quot;Beitragsabweichung Alte Leipziger\&quot;,\&quot;slug\&quot;:\&quot;beitragsabweichung-alte-leipziger\&quot;,\&quot;posts_count\&quot;:18,\&quot;reply_count\&quot;:12,\&quot;highest_post_number\&quot;:18,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-10-26T09:19:53.902Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T15:01:50.890Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T15:01:50.890Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:true,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:215,\&quot;like_count\&quot;:10,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;jordan\&quot;,\&quot;category_id\&quot;:42,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:true,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags\&quot;,\&quot;user_id\&quot;:362,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des jüngsten Beitrags, Akzeptierte Antwort\&quot;,\&quot;user_id\&quot;:90,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:2049,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:-1,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14060,\&quot;title\&quot;:\&quot;CPIT Einzelleistungen nicht immer aufgeführt\&quot;,\&quot;fancy_title\&quot;:\&quot;CPIT Einzelleistungen nicht immer aufgeführt\&quot;,\&quot;slug\&quot;:\&quot;cpit-einzelleistungen-nicht-immer-aufgefuehrt\&quot;,\&quot;posts_count\&quot;:3,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:3,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-10-30T08:51:07.769Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T15:01:06.707Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T15:01:06.707Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:99,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;jordan\&quot;,\&quot;category_id\&quot;:42,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:true,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags\&quot;,\&quot;user_id\&quot;:2049,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des jüngsten Beitrags, Akzeptierte Antwort\&quot;,\&quot;user_id\&quot;:90,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14371,\&quot;title\&quot;:\&quot;Investment Department informiert KW 50\&quot;,\&quot;fancy_title\&quot;:\&quot;Investment Department informiert KW 50\&quot;,\&quot;slug\&quot;:\&quot;investment-department-informiert-kw-50\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/0/0e05cb39dbd9d85f94fc166cbab4b9fb0877a4e4.jpeg\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-11T14:31:33.476Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T14:31:33.562Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T14:31:33.562Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;last_read_post_number\&quot;:null,\&quot;unread\&quot;:0,\&quot;new_posts\&quot;:0,\&quot;unread_posts\&quot;:0,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;notification_level\&quot;:1,\&quot;bookmarked\&quot;:false,\&quot;liked\&quot;:false,\&quot;tags\&quot;:[\&quot;changelog\&quot;],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:33,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;sett\&quot;,\&quot;category_id\&quot;:6,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:1932,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14370,\&quot;title\&quot;:\&quot;Haftpflichtvers. im Gleisbau\&quot;,\&quot;fancy_title\&quot;:\&quot;Haftpflichtvers. im Gleisbau\&quot;,\&quot;slug\&quot;:\&quot;haftpflichtvers-im-gleisbau\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-12-11T14:11:34.878Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T14:11:34.942Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T14:12:16.795Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:37,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;derheidemakler\&quot;,\&quot;category_id\&quot;:7,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:1877,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14369,\&quot;title\&quot;:\&quot;Qonekto : Dein neues Level an Konnektivität\&quot;,\&quot;fancy_title\&quot;:\&quot;Qonekto : Dein neues Level an Konnektivität\&quot;,\&quot;slug\&quot;:\&quot;qonekto-dein-neues-level-an-konnektivitaet\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/3/394328af436415e3ae24a1e89b67b6dd7a3d59b4.png\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-11T13:23:16.955Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T13:23:17.023Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T13:23:17.023Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;last_read_post_number\&quot;:null,\&quot;unread\&quot;:0,\&quot;new_posts\&quot;:0,\&quot;unread_posts\&quot;:0,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;notification_level\&quot;:1,\&quot;bookmarked\&quot;:false,\&quot;liked\&quot;:false,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:73,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;franz\&quot;,\&quot;category_id\&quot;:24,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:\&quot;https://www.blaudirekt.de/blog/2024/12/qonekto-dein-neues-level-an-konnektivitaet/\&quot;,\&quot;featured_link_root_domain\&quot;:\&quot;blaudirekt.de\&quot;,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:2795,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14368,\&quot;title\&quot;:\&quot;SSR im Verkehrsrecht? Sekundenschlaf am Steuer!\&quot;,\&quot;fancy_title\&quot;:\&quot;SSR im Verkehrsrecht? Sekundenschlaf am Steuer!\&quot;,\&quot;slug\&quot;:\&quot;ssr-im-verkehrsrecht-sekundenschlaf-am-steuer\&quot;,\&quot;posts_count\&quot;:1,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:1,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/optimized/2X/c/cc201cbe8a2af5fc456eeeb3072f00ef93a0796b_2_1024x459.png\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-11T11:54:38.729Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T11:54:38.790Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T11:59:44.095Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:46,\&quot;like_count\&quot;:2,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;Bechstein\&quot;,\&quot;category_id\&quot;:3,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest single\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:97,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14364,\&quot;title\&quot;:\&quot;Schriftgröße E-Mails\&quot;,\&quot;fancy_title\&quot;:\&quot;Schriftgröße E-Mails\&quot;,\&quot;slug\&quot;:\&quot;schriftgroesse-e-mails\&quot;,\&quot;posts_count\&quot;:3,\&quot;reply_count\&quot;:1,\&quot;highest_post_number\&quot;:3,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-12-10T13:02:54.550Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T11:49:37.381Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T11:49:37.381Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:80,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;Kurt\&quot;,\&quot;category_id\&quot;:3,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:323,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:3470,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:13210,\&quot;title\&quot;:\&quot;Adressänderung zu einem bestimmten Datum\&quot;,\&quot;fancy_title\&quot;:\&quot;Adressänderung zu einem bestimmten Datum\&quot;,\&quot;slug\&quot;:\&quot;adressaenderung-zu-einem-bestimmten-datum\&quot;,\&quot;posts_count\&quot;:4,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:4,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-06-14T10:02:14.807Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T10:48:26.987Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T10:48:26.987Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:99,\&quot;like_count\&quot;:4,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;Bechstein\&quot;,\&quot;category_id\&quot;:3,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags\&quot;,\&quot;user_id\&quot;:3067,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:1591,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:362,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:97,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14309,\&quot;title\&quot;:\&quot;Angezeigte Vorgänge/Dokumente in KoHi in der Ansicht der Kundenmaske\&quot;,\&quot;fancy_title\&quot;:\&quot;Angezeigte Vorgänge/Dokumente in KoHi in der Ansicht der Kundenmaske\&quot;,\&quot;slug\&quot;:\&quot;angezeigte-vorgaenge-dokumente-in-kohi-in-der-ansicht-der-kundenmaske\&quot;,\&quot;posts_count\&quot;:4,\&quot;reply_count\&quot;:2,\&quot;highest_post_number\&quot;:4,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-12-04T10:41:52.013Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T10:20:02.229Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T10:20:02.229Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:144,\&quot;like_count\&quot;:0,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;HarryFuchs\&quot;,\&quot;category_id\&quot;:5,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;vote_count\&quot;:0,\&quot;can_vote\&quot;:true,\&quot;user_voted\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags, Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:2938,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:2314,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:103,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14273,\&quot;title\&quot;:\&quot;MaklerRuhestands-Forum: Ein voller Erfolg\&quot;,\&quot;fancy_title\&quot;:\&quot;MaklerRuhestands-Forum: Ein voller Erfolg\&quot;,\&quot;slug\&quot;:\&quot;maklerruhestands-forum-ein-voller-erfolg\&quot;,\&quot;posts_count\&quot;:9,\&quot;reply_count\&quot;:5,\&quot;highest_post_number\&quot;:9,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/optimized/2X/b/b3515b0488493a652e16b89e71928abeeb879616_2_1024x576.jpeg\&quot;,\&quot;created_at\&quot;:\&quot;2024-11-27T11:58:55.881Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T07:22:23.786Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T07:22:23.786Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;last_read_post_number\&quot;:null,\&quot;unread\&quot;:0,\&quot;new_posts\&quot;:0,\&quot;unread_posts\&quot;:0,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;notification_level\&quot;:1,\&quot;bookmarked\&quot;:false,\&quot;liked\&quot;:false,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:194,\&quot;like_count\&quot;:10,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;Mario\&quot;,\&quot;category_id\&quot;:24,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:\&quot;https://www.blaudirekt.de/blog/2024/11/maklerruhestands-forum-ein-voller-erfolg/\&quot;,\&quot;featured_link_root_domain\&quot;:\&quot;blaudirekt.de\&quot;,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags\&quot;,\&quot;user_id\&quot;:2795,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:42,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:463,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:294,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:145,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null}]},{\&quot;id\&quot;:14354,\&quot;title\&quot;:\&quot;KFZ Antrag über Comparit - ohne Ablage der Antragsangaben\&quot;,\&quot;fancy_title\&quot;:\&quot;KFZ Antrag über Comparit - ohne Ablage der Antragsangaben\&quot;,\&quot;slug\&quot;:\&quot;kfz-antrag-ueber-comparit-ohne-ablage-der-antragsangaben\&quot;,\&quot;posts_count\&quot;:4,\&quot;reply_count\&quot;:0,\&quot;highest_post_number\&quot;:4,\&quot;image_url\&quot;:null,\&quot;created_at\&quot;:\&quot;2024-12-10T09:26:59.024Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-11T07:17:53.066Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-11T07:17:53.066Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;bookmarked\&quot;:null,\&quot;liked\&quot;:null,\&quot;tags\&quot;:[],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:88,\&quot;like_count\&quot;:3,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;jordan\&quot;,\&quot;category_id\&quot;:42,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags\&quot;,\&quot;user_id\&quot;:420,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:2049,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:90,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]},{\&quot;id\&quot;:14345,\&quot;title\&quot;:\&quot;Umdeckung rhion.digital Wohngebäude\&quot;,\&quot;fancy_title\&quot;:\&quot;Umdeckung rhion.digital Wohngebäude\&quot;,\&quot;slug\&quot;:\&quot;umdeckung-rhion-digital-wohngebaeude\&quot;,\&quot;posts_count\&quot;:4,\&quot;reply_count\&quot;:1,\&quot;highest_post_number\&quot;:5,\&quot;image_url\&quot;:\&quot;https://community.blaudirekt.de/uploads/default/original/2X/0/0e05cb39dbd9d85f94fc166cbab4b9fb0877a4e4.jpeg\&quot;,\&quot;created_at\&quot;:\&quot;2024-12-09T10:33:23.603Z\&quot;,\&quot;last_posted_at\&quot;:\&quot;2024-12-10T15:24:53.384Z\&quot;,\&quot;bumped\&quot;:true,\&quot;bumped_at\&quot;:\&quot;2024-12-10T15:24:53.384Z\&quot;,\&quot;archetype\&quot;:\&quot;regular\&quot;,\&quot;unseen\&quot;:false,\&quot;last_read_post_number\&quot;:null,\&quot;unread\&quot;:0,\&quot;new_posts\&quot;:0,\&quot;unread_posts\&quot;:0,\&quot;pinned\&quot;:false,\&quot;unpinned\&quot;:null,\&quot;visible\&quot;:true,\&quot;closed\&quot;:false,\&quot;archived\&quot;:false,\&quot;notification_level\&quot;:1,\&quot;bookmarked\&quot;:false,\&quot;liked\&quot;:false,\&quot;tags\&quot;:[\&quot;changelog\&quot;],\&quot;tags_descriptions\&quot;:{},\&quot;views\&quot;:131,\&quot;like_count\&quot;:7,\&quot;has_summary\&quot;:false,\&quot;last_poster_username\&quot;:\&quot;SinaWestphal\&quot;,\&quot;category_id\&quot;:6,\&quot;pinned_globally\&quot;:false,\&quot;featured_link\&quot;:null,\&quot;has_accepted_answer\&quot;:false,\&quot;can_vote\&quot;:false,\&quot;posters\&quot;:[{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor des ersten Beitrags\&quot;,\&quot;user_id\&quot;:1932,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:2272,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:null,\&quot;description\&quot;:\&quot;Autor vieler Beiträge\&quot;,\&quot;user_id\&quot;:32,\&quot;primary_group_id\&quot;:null,\&quot;flair_group_id\&quot;:null},{\&quot;extras\&quot;:\&quot;latest\&quot;,\&quot;description\&quot;:\&quot;Autor des jüngsten Beitrags\&quot;,\&quot;user_id\&quot;:335,\&quot;primary_group_id\&quot;:45,\&quot;flair_group_id\&quot;:45}]}]}}&quot;}"></div>

<script src="./post_files/start-discourse-330ecabb99d562b3be656b4bfb638312addb2e0ee5f5780aa47d519efd0b53f4.js"></script>


<script src="./post_files/browser-update-eec13eb6f8386f18f10b5dd6ebb7a3598d28421bb796e539b91a7e4a4c5d4c08.js"></script>


<div id="svg-sprites">
    <div class="fontawesome"><!--
Discourse SVG subset of Font Awesome Free by @fontawesome - https://fontawesome.com
License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
-->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="discourse-compress" viewBox="0 0 1792 1792">
                <path d="M896 960v448q0 26-19 45t-45 19-45-19l-144-144-332 332q-10 10-23 10t-23-10l-114-114q-10-10-10-23t10-23l332-332-144-144q-19-19-19-45t19-45 45-19h448q26 0 45 19t19 45zm755-672q0 13-10 23l-332 332 144 144q19 19 19 45t-19 45-45 19h-448q-26 0-45-19t-19-45v-448q0-26 19-45t45-19 45 19l144 144 332-332q10-10 23-10t23 10l114 114q10 10 10 23z"></path>
            </symbol>
            <symbol id="discourse-expand" viewBox="0 0 1792 1792">
                <path d="M883 1056q0 13-10 23l-332 332 144 144q19 19 19 45t-19 45-45 19h-448q-26 0-45-19t-19-45v-448q0-26 19-45t45-19 45 19l144 144 332-332q10-10 23-10t23 10l114 114q10 10 10 23zm781-864v448q0 26-19 45t-45 19-45-19l-144-144-332 332q-10 10-23 10t-23-10l-114-114q-10-10-10-23t10-23l332-332-144-144q-19-19-19-45t19-45 45-19h448q26 0 45 19t19 45z"></path>
            </symbol>
            <symbol id="discourse-bookmark-clock" viewBox="0 0 536 512">
                <path d="M215.86 143.33A168.09 168.09 0 01296 0H48A48 48 0 000 48v464l192-112 192 112V315.53c-94-.04-168.14-79.33-168.14-172.2z M392.45 0a144 144 0 10144 144 143.91 143.91 0 00-144-144zm64 150.3a9.77 9.77 0 01-9.7 9.7h-60.6a9.77 9.77 0 01-9.7-9.7V73.7a9.77 9.77 0 019.7-9.7h12.6a9.77 9.77 0 019.7 9.7V128h38.3a9.77 9.77 0 019.7 9.7z"></path>
            </symbol>
            <symbol id="discourse-bell-exclamation" viewBox="0 0 448 512">
                <path d="M439.4 362.3c-19.3-20.8-55.5-52-55.5-154.3 0-77.7-54.5-139.9-127.9-155.2V32c0-17.7-14.3-32-32-32s-32 14.3-32 32v20.8C118.6 68.1 64.1 130.3 64.1 208c0 102.3-36.2 133.5-55.5 154.3-6 6.4-8.6 14.1-8.6 21.7.1 16.4 13 32 32.1 32h383.8c19.1 0 32-15.6 32.1-32 .1-7.6-2.6-15.3-8.6-21.7zM201.7 116.6h44.6c6.5 0 11.7 5.5 11.4 12l-6.5 123.8c-.3 6.1-5.3 10.9-11.4 10.9h-31.6c-6.1 0-11.1-4.8-11.4-10.9l-6.5-123.8c-.3-6.6 4.9-12 11.4-12zM224 361.3c-18.6 0-33.7-15.1-33.7-33.7s15.1-33.7 33.7-33.7 33.7 15.1 33.7 33.7-15.1 33.7-33.7 33.7zM224 512c35.3 0 64-28.7 64-64H160c0 35.3 28.7 64 64 64z"></path>
            </symbol>
            <symbol id="discourse-bell-one" viewBox="0 0 448 512">
                <path d="M224 512c35.3 0 64-28.7 64-64H160c0 35.3 28.7 64 64 64zM439.4 362.3c-19.3-20.8-55.5-52-55.5-154.3 0-77.7-54.5-139.9-127.9-155.2V32c0-17.7-14.3-32-32-32s-32 14.3-32 32v20.8C118.6 68.1 64.1 130.3 64.1 208c0 102.3-36.2 133.5-55.5 154.3-6 6.4-8.6 14.1-8.6 21.7.1 16.4 13 32 32.1 32h383.8c19.1 0 32-15.6 32.1-32 .1-7.6-2.6-15.3-8.6-21.7zm-145.2-28c0 8.6-7 15.5-15.5 15.5h-97c-8.6 0-15.5-7-15.5-15.5v-15.8c0-8.6 7-15.5 15.5-15.5h27.1V192.5l-5.1 3.1c-6 6.1-15.9 6.2-22 .1l-11.2-11.1c-6.1-6-6.2-15.9-.1-22l31.6-31.9c3.2-3.2 7.4-4.7 11.5-4.6h26.6c8.6 0 11.5 7 11.5 15.5v161.3h27.1c8.6 0 15.5 7 15.5 15.5v15.9z"></path>
            </symbol>
            <symbol id="discourse-bell-slash" viewBox="0 0 448 512">
                <path d="M442.7 396.2L36.5 70.7c-6.9-5.5-17-4.4-22.5 2.5L4 85.6c-5.5 6.9-4.4 17 2.5 22.5l406.2 325.5c6.9 5.5 17 4.4 22.5-2.5l10-12.5c5.5-6.9 3.7-17.7-3.2-23.2l.7.8zM67.5 368c16.7-22 34.5-55.8 41.4-110.6l-45.5-35.6C60.2 312.6 27 342.5 8.6 362.3 2.6 368.7 0 376.4 0 384c.1 16.4 13 32 32.1 32h279.7l-61.4-48H67.5zM224 96c61.9 0 112 50.1 112 112 0 .2-.1.4-.1.6 0 16.8 1.2 31.8 2.8 45.7l59.5 46.5c-8.3-22.1-14.3-51.5-14.3-92.9 0-77.7-54.5-139.9-127.9-155.2V32c0-17.7-14.3-32-32-32s-32 14.3-32 32v20.8c-26 5.4-49.4 16.9-69.1 32.7l38.2 29.8C179 103.2 200.6 96 224 96zm0 416c35.3 0 64-28.6 64-64H160c0 35.4 28.7 64 64 64z"></path>
            </symbol>
            <symbol id="discourse-amazon" viewBox="0 0 291 291">
                <path style="fill:#ff8a24;"
                      d="M252.089,239.901c-120.033,57.126-194.528,9.331-242.214-19.7c-2.95-1.83-7.966,0.428-3.614,5.426 c15.886,19.263,67.95,65.692,135.909,65.692c68.005,0,108.462-37.107,113.523-43.58 C260.719,241.321,257.169,237.78,252.089,239.901z M285.8,221.284c-3.223-4.197-19.6-4.98-29.906-3.714 c-10.324,1.229-25.818,7.538-24.471,11.325c0.692,1.42,2.103,0.783,9.195,0.146c7.11-0.71,27.029-3.223,31.18,2.203 c4.17,5.462-6.354,31.49-8.275,35.687c-1.857,4.197,0.71,5.28,4.197,2.485c3.441-2.795,9.668-10.032,13.847-20.274 C285.718,238.845,288.249,224.479,285.8,221.284z"></path>
                <path d="M221.71,149.219V53.557C221.71,37.125,205.815,0,148.689,0C91.572,0,61.184,35.696,61.184,67.85 l47.74,4.27c0,0,10.633-32.136,35.313-32.136s22.987,19.992,22.987,24.316v20.784C135.607,86.149,57.096,95.18,57.096,161.382 c0,71.191,89.863,74.177,119.332,28.167c1.138,1.866,2.431,3.696,4.051,5.408c10.843,11.398,25.308,24.981,25.308,24.981 l36.852-36.415C242.658,183.513,221.71,167.071,221.71,149.219z M112.511,152.578c0-30.579,32.764-36.779,54.722-37.507v26.319 C167.224,193.527,112.511,185.634,112.511,152.578z"></path>
            </symbol>
            <symbol id="discourse-emojis" viewBox="0 0 216.3 152.3">
                <path d="M121.1 70.7c1.9 2 5.1 2.1 7.2.2l.2-.2 31.2-32.2c9.1-9.4 8.6-24.9-1.6-33.5-8.8-7.5-22-6.2-30.1 2.2l-3.2 3.3-3.2-3.3c-8.1-8.4-21.3-9.7-30.1-2.2-10.1 8.6-10.7 24.2-1.6 33.5l31.2 32.2zM53.5 45.3C23.9 45.3 0 69.2 0 98.8s23.9 53.5 53.5 53.5 53.5-24 53.5-53.5-23.9-53.5-53.5-53.5zm18.8 24.6c5.5 0 9.9 4.4 9.9 9.9s-4.4 9.9-9.9 9.9-9.9-4.4-9.9-9.9c-.1-5.5 4.4-9.9 9.9-9.9zm-38.2 0c5.5 0 9.9 4.4 9.9 9.9s-4.4 9.9-9.9 9.9-9.9-4.4-9.9-9.9 4.4-9.9 9.9-9.9zm52.4 45.4c-8.2 9.8-20.2 15.5-33.1 15.5s-24.9-5.6-33.1-15.5c-3.9-4.7 3.2-10.6 7.1-5.9 6.5 7.7 15.9 12.2 26 12.2s19.5-4.4 26-12.2c3.8-4.7 10.9 1.2 7.1 5.9zm129.8-22.5c0-6.4-6.3-9.5-13.3-9.5h-24c1.5-6 10.3-13.8 10.3-22.8 0-15.5-10.1-17.2-15.2-17.2-4.3 0-6.2 8.3-7.2 12.2-1.1 4.6-2.2 9.3-5.4 12.4-6.7 6.8-10.3 15.3-18.4 23.5-.7-1.8-2.6-3.1-4.7-3.1h-10.7c-2.8 0-5.1 2.2-5.1 4.9V142c0 2.7 2.3 4.9 5.1 4.9h10.7c2.8 0 5.1-2.2 5.1-4.9v-.9c.3.1.6.2.9.2 3.3.1 7.8 1.9 11.1 3.4 6.7 3 15.1 6.7 25.3 6.7h.6c9 0 19.7-.1 24-6.3 1.8-2.5 2.7-4.4.5-9.9 5-3 7-10 1-15 8-5 8-13 1-17 6.1-1.9 8.5-6.6 8.4-10.4z"></path>
            </symbol>
            <symbol id="fab-android" viewBox="0 0 576 512">
                <path d="M420.55,301.93a24,24,0,1,1,24-24,24,24,0,0,1-24,24m-265.1,0a24,24,0,1,1,24-24,24,24,0,0,1-24,24m273.7-144.48,47.94-83a10,10,0,1,0-17.27-10h0l-48.54,84.07a301.25,301.25,0,0,0-246.56,0L116.18,64.45a10,10,0,1,0-17.27,10h0l47.94,83C64.53,202.22,8.24,285.55,0,384H576c-8.24-98.45-64.54-181.78-146.85-226.55"></path>
            </symbol>
            <symbol id="fab-apple" viewBox="0 0 384 512">
                <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
            </symbol>
            <symbol id="fab-chrome" viewBox="0 0 496 512">
                <path d="M131.5 217.5L55.1 100.1c47.6-59.2 119-91.8 192-92.1 42.3-.3 85.5 10.5 124.8 33.2 43.4 25.2 76.4 61.4 97.4 103L264 133.4c-58.1-3.4-113.4 29.3-132.5 84.1zm32.9 38.5c0 46.2 37.4 83.6 83.6 83.6s83.6-37.4 83.6-83.6-37.4-83.6-83.6-83.6-83.6 37.3-83.6 83.6zm314.9-89.2L339.6 174c37.9 44.3 38.5 108.2 6.6 157.2L234.1 503.6c46.5 2.5 94.4-7.7 137.8-32.9 107.4-62 150.9-192 107.4-303.9zM133.7 303.6L40.4 120.1C14.9 159.1 0 205.9 0 256c0 124 90.8 226.7 209.5 244.9l63.7-124.8c-57.6 10.8-113.2-20.8-139.5-72.5z"></path>
            </symbol>
            <symbol id="fab-discord" viewBox="0 0 640 512">
                <path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
            </symbol>
            <symbol id="fab-discourse" viewBox="0 0 448 512">
                <path d="M225.9 32C103.3 32 0 130.5 0 252.1 0 256 .1 480 .1 480l225.8-.2c122.7 0 222.1-102.3 222.1-223.9C448 134.3 348.6 32 225.9 32zM224 384c-19.4 0-37.9-4.3-54.4-12.1L88.5 392l22.9-75c-9.8-18.1-15.4-38.9-15.4-61 0-70.7 57.3-128 128-128s128 57.3 128 128-57.3 128-128 128z"></path>
            </symbol>
            <symbol id="fab-facebook" viewBox="0 0 512 512">
                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
            </symbol>
            <symbol id="fab-facebook-square" viewBox="0 0 448 512">
                <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path>
            </symbol>
            <symbol id="fab-github" viewBox="0 0 496 512">
                <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
            </symbol>
            <symbol id="fab-instagram" viewBox="0 0 448 512">
                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
            </symbol>
            <symbol id="fab-linux" viewBox="0 0 448 512">
                <path d="M220.8 123.3c1 .5 1.8 1.7 3 1.7 1.1 0 2.8-.4 2.9-1.5.2-1.4-1.9-2.3-3.2-2.9-1.7-.7-3.9-1-5.5-.1-.4.2-.8.7-.6 1.1.3 1.3 2.3 1.1 3.4 1.7zm-21.9 1.7c1.2 0 2-1.2 3-1.7 1.1-.6 3.1-.4 3.5-1.6.2-.4-.2-.9-.6-1.1-1.6-.9-3.8-.6-5.5.1-1.3.6-3.4 1.5-3.2 2.9.1 1 1.8 1.5 2.8 1.4zM420 403.8c-3.6-4-5.3-11.6-7.2-19.7-1.8-8.1-3.9-16.8-10.5-22.4-1.3-1.1-2.6-2.1-4-2.9-1.3-.8-2.7-1.5-4.1-2 9.2-27.3 5.6-54.5-3.7-79.1-11.4-30.1-31.3-56.4-46.5-74.4-17.1-21.5-33.7-41.9-33.4-72C311.1 85.4 315.7.1 234.8 0 132.4-.2 158 103.4 156.9 135.2c-1.7 23.4-6.4 41.8-22.5 64.7-18.9 22.5-45.5 58.8-58.1 96.7-6 17.9-8.8 36.1-6.2 53.3-6.5 5.8-11.4 14.7-16.6 20.2-4.2 4.3-10.3 5.9-17 8.3s-14 6-18.5 14.5c-2.1 3.9-2.8 8.1-2.8 12.4 0 3.9.6 7.9 1.2 11.8 1.2 8.1 2.5 15.7.8 20.8-5.2 14.4-5.9 24.4-2.2 31.7 3.8 7.3 11.4 10.5 20.1 12.3 17.3 3.6 40.8 2.7 59.3 12.5 19.8 10.4 39.9 14.1 55.9 10.4 11.6-2.6 21.1-9.6 25.9-20.2 12.5-.1 26.3-5.4 48.3-6.6 14.9-1.2 33.6 5.3 55.1 4.1.6 2.3 1.4 4.6 2.5 6.7v.1c8.3 16.7 23.8 24.3 40.3 23 16.6-1.3 34.1-11 48.3-27.9 13.6-16.4 36-23.2 50.9-32.2 7.4-4.5 13.4-10.1 13.9-18.3.4-8.2-4.4-17.3-15.5-29.7zM223.7 87.3c9.8-22.2 34.2-21.8 44-.4 6.5 14.2 3.6 30.9-4.3 40.4-1.6-.8-5.9-2.6-12.6-4.9 1.1-1.2 3.1-2.7 3.9-4.6 4.8-11.8-.2-27-9.1-27.3-7.3-.5-13.9 10.8-11.8 23-4.1-2-9.4-3.5-13-4.4-1-6.9-.3-14.6 2.9-21.8zM183 75.8c10.1 0 20.8 14.2 19.1 33.5-3.5 1-7.1 2.5-10.2 4.6 1.2-8.9-3.3-20.1-9.6-19.6-8.4.7-9.8 21.2-1.8 28.1 1 .8 1.9-.2-5.9 5.5-15.6-14.6-10.5-52.1 8.4-52.1zm-13.6 60.7c6.2-4.6 13.6-10 14.1-10.5 4.7-4.4 13.5-14.2 27.9-14.2 7.1 0 15.6 2.3 25.9 8.9 6.3 4.1 11.3 4.4 22.6 9.3 8.4 3.5 13.7 9.7 10.5 18.2-2.6 7.1-11 14.4-22.7 18.1-11.1 3.6-19.8 16-38.2 14.9-3.9-.2-7-1-9.6-2.1-8-3.5-12.2-10.4-20-15-8.6-4.8-13.2-10.4-14.7-15.3-1.4-4.9 0-9 4.2-12.3zm3.3 334c-2.7 35.1-43.9 34.4-75.3 18-29.9-15.8-68.6-6.5-76.5-21.9-2.4-4.7-2.4-12.7 2.6-26.4v-.2c2.4-7.6.6-16-.6-23.9-1.2-7.8-1.8-15 .9-20 3.5-6.7 8.5-9.1 14.8-11.3 10.3-3.7 11.8-3.4 19.6-9.9 5.5-5.7 9.5-12.9 14.3-18 5.1-5.5 10-8.1 17.7-6.9 8.1 1.2 15.1 6.8 21.9 16l19.6 35.6c9.5 19.9 43.1 48.4 41 68.9zm-1.4-25.9c-4.1-6.6-9.6-13.6-14.4-19.6 7.1 0 14.2-2.2 16.7-8.9 2.3-6.2 0-14.9-7.4-24.9-13.5-18.2-38.3-32.5-38.3-32.5-13.5-8.4-21.1-18.7-24.6-29.9s-3-23.3-.3-35.2c5.2-22.9 18.6-45.2 27.2-59.2 2.3-1.7.8 3.2-8.7 20.8-8.5 16.1-24.4 53.3-2.6 82.4.6-20.7 5.5-41.8 13.8-61.5 12-27.4 37.3-74.9 39.3-112.7 1.1.8 4.6 3.2 6.2 4.1 4.6 2.7 8.1 6.7 12.6 10.3 12.4 10 28.5 9.2 42.4 1.2 6.2-3.5 11.2-7.5 15.9-9 9.9-3.1 17.8-8.6 22.3-15 7.7 30.4 25.7 74.3 37.2 95.7 6.1 11.4 18.3 35.5 23.6 64.6 3.3-.1 7 .4 10.9 1.4 13.8-35.7-11.7-74.2-23.3-84.9-4.7-4.6-4.9-6.6-2.6-6.5 12.6 11.2 29.2 33.7 35.2 59 2.8 11.6 3.3 23.7.4 35.7 16.4 6.8 35.9 17.9 30.7 34.8-2.2-.1-3.2 0-4.2 0 3.2-10.1-3.9-17.6-22.8-26.1-19.6-8.6-36-8.6-38.3 12.5-12.1 4.2-18.3 14.7-21.4 27.3-2.8 11.2-3.6 24.7-4.4 39.9-.5 7.7-3.6 18-6.8 29-32.1 22.9-76.7 32.9-114.3 7.2zm257.4-11.5c-.9 16.8-41.2 19.9-63.2 46.5-13.2 15.7-29.4 24.4-43.6 25.5s-26.5-4.8-33.7-19.3c-4.7-11.1-2.4-23.1 1.1-36.3 3.7-14.2 9.2-28.8 9.9-40.6.8-15.2 1.7-28.5 4.2-38.7 2.6-10.3 6.6-17.2 13.7-21.1.3-.2.7-.3 1-.5.8 13.2 7.3 26.6 18.8 29.5 12.6 3.3 30.7-7.5 38.4-16.3 9-.3 15.7-.9 22.6 5.1 9.9 8.5 7.1 30.3 17.1 41.6 10.6 11.6 14 19.5 13.7 24.6zM173.3 148.7c2 1.9 4.7 4.5 8 7.1 6.6 5.2 15.8 10.6 27.3 10.6 11.6 0 22.5-5.9 31.8-10.8 4.9-2.6 10.9-7 14.8-10.4s5.9-6.3 3.1-6.6-2.6 2.6-6 5.1c-4.4 3.2-9.7 7.4-13.9 9.8-7.4 4.2-19.5 10.2-29.9 10.2s-18.7-4.8-24.9-9.7c-3.1-2.5-5.7-5-7.7-6.9-1.5-1.4-1.9-4.6-4.3-4.9-1.4-.1-1.8 3.7 1.7 6.5z"></path>
            </symbol>
            <symbol id="fab-microsoft" viewBox="0 0 448 512">
                <path d="M0 32h214.6v214.6H0V32zm233.4 0H448v214.6H233.4V32zM0 265.4h214.6V480H0V265.4zm233.4 0H448V480H233.4V265.4z"></path>
            </symbol>
            <symbol id="fab-twitter" viewBox="0 0 512 512">
                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
            </symbol>
            <symbol id="fab-twitter-square" viewBox="0 0 448 512">
                <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path>
            </symbol>
            <symbol id="fab-wikipedia-w" viewBox="0 0 640 512">
                <path d="M640 51.2l-.3 12.2c-28.1.8-45 15.8-55.8 40.3-25 57.8-103.3 240-155.3 358.6H415l-81.9-193.1c-32.5 63.6-68.3 130-99.2 193.1-.3.3-15 0-15-.3C172 352.3 122.8 243.4 75.8 133.4 64.4 106.7 26.4 63.4.2 63.7c0-3.1-.3-10-.3-14.2h161.9v13.9c-19.2 1.1-52.8 13.3-43.3 34.2 21.9 49.7 103.6 240.3 125.6 288.6 15-29.7 57.8-109.2 75.3-142.8-13.9-28.3-58.6-133.9-72.8-160-9.7-17.8-36.1-19.4-55.8-19.7V49.8l142.5.3v13.1c-19.4.6-38.1 7.8-29.4 26.1 18.9 40 30.6 68.1 48.1 104.7 5.6-10.8 34.7-69.4 48.1-100.8 8.9-20.6-3.9-28.6-38.6-29.4.3-3.6 0-10.3.3-13.6 44.4-.3 111.1-.3 123.1-.6v13.6c-22.5.8-45.8 12.8-58.1 31.7l-59.2 122.8c6.4 16.1 63.3 142.8 69.2 156.7L559.2 91.8c-8.6-23.1-36.4-28.1-47.2-28.3V49.6l127.8 1.1.2.5z"></path>
            </symbol>
            <symbol id="fab-windows" viewBox="0 0 448 512">
                <path d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z"></path>
            </symbol>
            <symbol id="far-bell" viewBox="0 0 448 512">
                <path d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"></path>
            </symbol>
            <symbol id="far-bell-slash" viewBox="0 0 640 512">
                <path d="M633.99 471.02L36 3.51C29.1-2.01 19.03-.9 13.51 6l-10 12.49C-2.02 25.39-.9 35.46 6 40.98l598 467.51c6.9 5.52 16.96 4.4 22.49-2.49l10-12.49c5.52-6.9 4.41-16.97-2.5-22.49zM163.53 368c16.71-22.03 34.48-55.8 41.4-110.58l-45.47-35.55c-3.27 90.73-36.47 120.68-54.84 140.42-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h279.66l-61.4-48H163.53zM320 96c61.86 0 112 50.14 112 112 0 .2-.06.38-.06.58.02 16.84 1.16 31.77 2.79 45.73l59.53 46.54c-8.31-22.13-14.34-51.49-14.34-92.85 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84c-26.02 5.41-49.45 16.94-69.13 32.72l38.17 29.84C275 103.18 296.65 96 320 96zm0 416c35.32 0 63.97-28.65 63.97-64H256.03c0 35.35 28.65 64 63.97 64z"></path>
            </symbol>
            <symbol id="far-calendar-plus" viewBox="0 0 448 512">
                <path d="M336 292v24c0 6.6-5.4 12-12 12h-76v76c0 6.6-5.4 12-12 12h-24c-6.6 0-12-5.4-12-12v-76h-76c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h76v-76c0-6.6 5.4-12 12-12h24c6.6 0 12 5.4 12 12v76h76c6.6 0 12 5.4 12 12zm112-180v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
            </symbol>
            <symbol id="far-chart-bar" viewBox="0 0 512 512">
                <path d="M396.8 352h22.4c6.4 0 12.8-6.4 12.8-12.8V108.8c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v230.4c0 6.4 6.4 12.8 12.8 12.8zm-192 0h22.4c6.4 0 12.8-6.4 12.8-12.8V140.8c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v198.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h22.4c6.4 0 12.8-6.4 12.8-12.8V204.8c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v134.4c0 6.4 6.4 12.8 12.8 12.8zM496 400H48V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16zm-387.2-48h22.4c6.4 0 12.8-6.4 12.8-12.8v-70.4c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v70.4c0 6.4 6.4 12.8 12.8 12.8z"></path>
            </symbol>
            <symbol id="far-check-square" viewBox="0 0 448 512">
                <path d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"></path>
            </symbol>
            <symbol id="far-circle" viewBox="0 0 512 512">
                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200z"></path>
            </symbol>
            <symbol id="far-clipboard" viewBox="0 0 384 512">
                <path d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm144 418c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V118c0-3.3 2.7-6 6-6h42v36c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-36h42c3.3 0 6 2.7 6 6z"></path>
            </symbol>
            <symbol id="far-clock" viewBox="0 0 512 512">
                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
            </symbol>
            <symbol id="far-comment" viewBox="0 0 512 512">
                <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path>
            </symbol>
            <symbol id="far-comments" viewBox="0 0 576 512">
                <path d="M532 386.2c27.5-27.1 44-61.1 44-98.2 0-80-76.5-146.1-176.2-157.9C368.3 72.5 294.3 32 208 32 93.1 32 0 103.6 0 192c0 37 16.5 71 44 98.2-15.3 30.7-37.3 54.5-37.7 54.9-6.3 6.7-8.1 16.5-4.4 25 3.6 8.5 12 14 21.2 14 53.5 0 96.7-20.2 125.2-38.8 9.2 2.1 18.7 3.7 28.4 4.9C208.1 407.6 281.8 448 368 448c20.8 0 40.8-2.4 59.8-6.8C456.3 459.7 499.4 480 553 480c9.2 0 17.5-5.5 21.2-14 3.6-8.5 1.9-18.3-4.4-25-.4-.3-22.5-24.1-37.8-54.8zm-392.8-92.3L122.1 305c-14.1 9.1-28.5 16.3-43.1 21.4 2.7-4.7 5.4-9.7 8-14.8l15.5-31.1L77.7 256C64.2 242.6 48 220.7 48 192c0-60.7 73.3-112 160-112s160 51.3 160 112-73.3 112-160 112c-16.5 0-33-1.9-49-5.6l-19.8-4.5zM498.3 352l-24.7 24.4 15.5 31.1c2.6 5.1 5.3 10.1 8 14.8-14.6-5.1-29-12.3-43.1-21.4l-17.1-11.1-19.9 4.6c-16 3.7-32.5 5.6-49 5.6-54 0-102.2-20.1-131.3-49.7C338 339.5 416 272.9 416 192c0-3.4-.4-6.7-.7-10C479.7 196.5 528 238.8 528 288c0 28.7-16.2 50.6-29.7 64z"></path>
            </symbol>
            <symbol id="far-copyright" viewBox="0 0 512 512">
                <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 448c-110.532 0-200-89.451-200-200 0-110.531 89.451-200 200-200 110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200zm107.351-101.064c-9.614 9.712-45.53 41.396-104.065 41.396-82.43 0-140.484-61.425-140.484-141.567 0-79.152 60.275-139.401 139.762-139.401 55.531 0 88.738 26.62 97.593 34.779a11.965 11.965 0 0 1 1.936 15.322l-18.155 28.113c-3.841 5.95-11.966 7.282-17.499 2.921-8.595-6.776-31.814-22.538-61.708-22.538-48.303 0-77.916 35.33-77.916 80.082 0 41.589 26.888 83.692 78.277 83.692 32.657 0 56.843-19.039 65.726-27.225 5.27-4.857 13.596-4.039 17.82 1.738l19.865 27.17a11.947 11.947 0 0 1-1.152 15.518z"></path>
            </symbol>
            <symbol id="far-dot-circle" viewBox="0 0 512 512">
                <path d="M256 56c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m0-48C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 168c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80z"></path>
            </symbol>
            <symbol id="far-edit" viewBox="0 0 576 512">
                <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
            </symbol>
            <symbol id="far-envelope" viewBox="0 0 512 512">
                <path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path>
            </symbol>
            <symbol id="far-eye" viewBox="0 0 576 512">
                <path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
            </symbol>
            <symbol id="far-eye-slash" viewBox="0 0 640 512">
                <path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path>
            </symbol>
            <symbol id="far-file-alt" viewBox="0 0 384 512">
                <path d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"></path>
            </symbol>
            <symbol id="far-frown" viewBox="0 0 496 512">
                <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-80 128c-40.2 0-78 17.7-103.8 48.6-8.5 10.2-7.1 25.3 3.1 33.8 10.2 8.4 25.3 7.1 33.8-3.1 16.6-19.9 41-31.4 66.9-31.4s50.3 11.4 66.9 31.4c8.1 9.7 23.1 11.9 33.8 3.1 10.2-8.5 11.5-23.6 3.1-33.8C326 321.7 288.2 304 248 304z"></path>
            </symbol>
            <symbol id="far-heart" viewBox="0 0 512 512">
                <path d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
            </symbol>
            <symbol id="far-image" viewBox="0 0 512 512">
                <path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm-6 336H54a6 6 0 0 1-6-6V118a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v276a6 6 0 0 1-6 6zM128 152c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zM96 352h320v-80l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L192 304l-39.515-39.515c-4.686-4.686-12.284-4.686-16.971 0L96 304v48z"></path>
            </symbol>
            <symbol id="far-list-alt" viewBox="0 0 512 512">
                <path d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm-6 400H54a6 6 0 0 1-6-6V86a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v340a6 6 0 0 1-6 6zm-42-92v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm0-96v24c0 6.627-5.373 12-12 12H204c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h200c6.627 0 12 5.373 12 12zm-252 12c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36zm0 96c0 19.882-16.118 36-36 36s-36-16.118-36-36 16.118-36 36-36 36 16.118 36 36z"></path>
            </symbol>
            <symbol id="far-meh" viewBox="0 0 496 512">
                <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm8 144H160c-13.2 0-24 10.8-24 24s10.8 24 24 24h176c13.2 0 24-10.8 24-24s-10.8-24-24-24z"></path>
            </symbol>
            <symbol id="far-moon" viewBox="0 0 512 512">
                <path d="M279.135 512c78.756 0 150.982-35.804 198.844-94.775 28.27-34.831-2.558-85.722-46.249-77.401-82.348 15.683-158.272-47.268-158.272-130.792 0-48.424 26.06-92.292 67.434-115.836 38.745-22.05 28.999-80.788-15.022-88.919A257.936 257.936 0 0 0 279.135 0c-141.36 0-256 114.575-256 256 0 141.36 114.576 256 256 256zm0-464c12.985 0 25.689 1.201 38.016 3.478-54.76 31.163-91.693 90.042-91.693 157.554 0 113.848 103.641 199.2 215.252 177.944C402.574 433.964 344.366 464 279.135 464c-114.875 0-208-93.125-208-208s93.125-208 208-208z"></path>
            </symbol>
            <symbol id="far-smile" viewBox="0 0 496 512">
                <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"></path>
            </symbol>
            <symbol id="far-square" viewBox="0 0 448 512">
                <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h340c3.3 0 6 2.7 6 6v340c0 3.3-2.7 6-6 6z"></path>
            </symbol>
            <symbol id="far-star" viewBox="0 0 576 512">
                <path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
            </symbol>
            <symbol id="far-sun" viewBox="0 0 512 512">
                <path d="M494.2 221.9l-59.8-40.5 13.7-71c2.6-13.2-1.6-26.8-11.1-36.4-9.6-9.5-23.2-13.7-36.2-11.1l-70.9 13.7-40.4-59.9c-15.1-22.3-51.9-22.3-67 0l-40.4 59.9-70.8-13.7C98 60.4 84.5 64.5 75 74.1c-9.5 9.6-13.7 23.1-11.1 36.3l13.7 71-59.8 40.5C6.6 229.5 0 242 0 255.5s6.7 26 17.8 33.5l59.8 40.5-13.7 71c-2.6 13.2 1.6 26.8 11.1 36.3 9.5 9.5 22.9 13.7 36.3 11.1l70.8-13.7 40.4 59.9C230 505.3 242.6 512 256 512s26-6.7 33.5-17.8l40.4-59.9 70.9 13.7c13.4 2.7 26.8-1.6 36.3-11.1 9.5-9.5 13.6-23.1 11.1-36.3l-13.7-71 59.8-40.5c11.1-7.5 17.8-20.1 17.8-33.5-.1-13.6-6.7-26.1-17.9-33.7zm-112.9 85.6l17.6 91.2-91-17.6L256 458l-51.9-77-90.9 17.6 17.6-91.2-76.8-52 76.8-52-17.6-91.2 91 17.6L256 53l51.9 76.9 91-17.6-17.6 91.1 76.8 52-76.8 52.1zM256 152c-57.3 0-104 46.7-104 104s46.7 104 104 104 104-46.7 104-104-46.7-104-104-104zm0 160c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z"></path>
            </symbol>
            <symbol id="far-thumbs-down" viewBox="0 0 512 512">
                <path d="M466.27 225.31c4.674-22.647.864-44.538-8.99-62.99 2.958-23.868-4.021-48.565-17.34-66.99C438.986 39.423 404.117 0 327 0c-7 0-15 .01-22.22.01C201.195.01 168.997 40 128 40h-10.845c-5.64-4.975-13.042-8-21.155-8H32C14.327 32 0 46.327 0 64v240c0 17.673 14.327 32 32 32h64c11.842 0 22.175-6.438 27.708-16h7.052c19.146 16.953 46.013 60.653 68.76 83.4 13.667 13.667 10.153 108.6 71.76 108.6 57.58 0 95.27-31.936 95.27-104.73 0-18.41-3.93-33.73-8.85-46.54h36.48c48.602 0 85.82-41.565 85.82-85.58 0-19.15-4.96-34.99-13.73-49.84zM64 296c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm330.18 16.73H290.19c0 37.82 28.36 55.37 28.36 94.54 0 23.75 0 56.73-47.27 56.73-18.91-18.91-9.46-66.18-37.82-94.54C206.9 342.89 167.28 272 138.92 272H128V85.83c53.611 0 100.001-37.82 171.64-37.82h37.82c35.512 0 60.82 17.12 53.12 65.9 15.2 8.16 26.5 36.44 13.94 57.57 21.581 20.384 18.699 51.065 5.21 65.62 9.45 0 22.36 18.91 22.27 37.81-.09 18.91-16.71 37.82-37.82 37.82z"></path>
            </symbol>
            <symbol id="far-thumbs-up" viewBox="0 0 512 512">
                <path d="M466.27 286.69C475.04 271.84 480 256 480 236.85c0-44.015-37.218-85.58-85.82-85.58H357.7c4.92-12.81 8.85-28.13 8.85-46.54C366.55 31.936 328.86 0 271.28 0c-61.607 0-58.093 94.933-71.76 108.6-22.747 22.747-49.615 66.447-68.76 83.4H32c-17.673 0-32 14.327-32 32v240c0 17.673 14.327 32 32 32h64c14.893 0 27.408-10.174 30.978-23.95 44.509 1.001 75.06 39.94 177.802 39.94 7.22 0 15.22.01 22.22.01 77.117 0 111.986-39.423 112.94-95.33 13.319-18.425 20.299-43.122 17.34-66.99 9.854-18.452 13.664-40.343 8.99-62.99zm-61.75 53.83c12.56 21.13 1.26 49.41-13.94 57.57 7.7 48.78-17.608 65.9-53.12 65.9h-37.82c-71.639 0-118.029-37.82-171.64-37.82V240h10.92c28.36 0 67.98-70.89 94.54-97.46 28.36-28.36 18.91-75.63 37.82-94.54 47.27 0 47.27 32.98 47.27 56.73 0 39.17-28.36 56.72-28.36 94.54h103.99c21.11 0 37.73 18.91 37.82 37.82.09 18.9-12.82 37.81-22.27 37.81 13.489 14.555 16.371 45.236-5.21 65.62zM88 432c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z"></path>
            </symbol>
            <symbol id="far-trash-alt" viewBox="0 0 448 512">
                <path d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path>
            </symbol>
            <symbol id="address-book" viewBox="0 0 448 512">
                <path d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z"></path>
            </symbol>
            <symbol id="adjust" viewBox="0 0 512 512">
                <path d="M8 256c0 136.966 111.033 248 248 248s248-111.034 248-248S392.966 8 256 8 8 119.033 8 256zm248 184V72c101.705 0 184 82.311 184 184 0 101.705-82.311 184-184 184z"></path>
            </symbol>
            <symbol id="ambulance" viewBox="0 0 640 512">
                <path d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm144-248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48zm176 248c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
            </symbol>
            <symbol id="anchor" viewBox="0 0 576 512">
                <path d="M12.971 352h32.394C67.172 454.735 181.944 512 288 512c106.229 0 220.853-57.38 242.635-160h32.394c10.691 0 16.045-12.926 8.485-20.485l-67.029-67.029c-4.686-4.686-12.284-4.686-16.971 0l-67.029 67.029c-7.56 7.56-2.206 20.485 8.485 20.485h35.146c-20.29 54.317-84.963 86.588-144.117 94.015V256h52c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-52v-5.47c37.281-13.178 63.995-48.725 64-90.518C384.005 43.772 341.605.738 289.37.01 235.723-.739 192 42.525 192 96c0 41.798 26.716 77.35 64 90.53V192h-52c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h52v190.015c-58.936-7.399-123.82-39.679-144.117-94.015h35.146c10.691 0 16.045-12.926 8.485-20.485l-67.029-67.029c-4.686-4.686-12.284-4.686-16.971 0L4.485 331.515C-3.074 339.074 2.28 352 12.971 352zM288 64c17.645 0 32 14.355 32 32s-14.355 32-32 32-32-14.355-32-32 14.355-32 32-32z"></path>
            </symbol>
            <symbol id="angle-double-down" viewBox="0 0 320 512">
                <path d="M143 256.3L7 120.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0L313 86.3c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.4 9.5-24.6 9.5-34 .1zm34 192l136-136c9.4-9.4 9.4-24.6 0-33.9l-22.6-22.6c-9.4-9.4-24.6-9.4-33.9 0L160 352.1l-96.4-96.4c-9.4-9.4-24.6-9.4-33.9 0L7 278.3c-9.4 9.4-9.4 24.6 0 33.9l136 136c9.4 9.5 24.6 9.5 34 .1z"></path>
            </symbol>
            <symbol id="angle-double-left" viewBox="0 0 448 512">
                <path d="M223.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L319.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L393.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34zm-192 34l136 136c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9L127.9 256l96.4-96.4c9.4-9.4 9.4-24.6 0-33.9L201.7 103c-9.4-9.4-24.6-9.4-33.9 0l-136 136c-9.5 9.4-9.5 24.6-.1 34z"></path>
            </symbol>
            <symbol id="angle-double-right" viewBox="0 0 448 512">
                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"></path>
            </symbol>
            <symbol id="angle-double-up" viewBox="0 0 320 512">
                <path d="M177 255.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 351.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 425.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1zm-34-192L7 199.7c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l96.4-96.4 96.4 96.4c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9l-136-136c-9.2-9.4-24.4-9.4-33.8 0z"></path>
            </symbol>
            <symbol id="angle-down" viewBox="0 0 320 512">
                <path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
            </symbol>
            <symbol id="angle-right" viewBox="0 0 256 512">
                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
            </symbol>
            <symbol id="angle-up" viewBox="0 0 320 512">
                <path d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"></path>
            </symbol>
            <symbol id="archive" viewBox="0 0 512 512">
                <path d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z"></path>
            </symbol>
            <symbol id="arrow-down" viewBox="0 0 448 512">
                <path d="M413.1 222.5l22.2 22.2c9.4 9.4 9.4 24.6 0 33.9L241 473c-9.4 9.4-24.6 9.4-33.9 0L12.7 278.6c-9.4-9.4-9.4-24.6 0-33.9l22.2-22.2c9.5-9.5 25-9.3 34.3.4L184 343.4V56c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24v287.4l114.8-120.5c9.3-9.8 24.8-10 34.3-.4z"></path>
            </symbol>
            <symbol id="arrow-left" viewBox="0 0 448 512">
                <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
            </symbol>
            <symbol id="arrow-up" viewBox="0 0 448 512">
                <path d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
            </symbol>
            <symbol id="arrows-alt-h" viewBox="0 0 512 512">
                <path d="M377.941 169.941V216H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.568 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296h243.882v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.568 0-33.941l-86.059-86.059c-15.119-15.12-40.971-4.412-40.971 16.97z"></path>
            </symbol>
            <symbol id="arrows-alt-v" viewBox="0 0 256 512">
                <path d="M214.059 377.941H168V134.059h46.059c21.382 0 32.09-25.851 16.971-40.971L144.971 7.029c-9.373-9.373-24.568-9.373-33.941 0L24.971 93.088c-15.119 15.119-4.411 40.971 16.971 40.971H88v243.882H41.941c-21.382 0-32.09 25.851-16.971 40.971l86.059 86.059c9.373 9.373 24.568 9.373 33.941 0l86.059-86.059c15.12-15.119 4.412-40.971-16.97-40.971z"></path>
            </symbol>
            <symbol id="asterisk" viewBox="0 0 512 512">
                <path d="M478.21 334.093L336 256l142.21-78.093c11.795-6.477 15.961-21.384 9.232-33.037l-19.48-33.741c-6.728-11.653-21.72-15.499-33.227-8.523L296 186.718l3.475-162.204C299.763 11.061 288.937 0 275.48 0h-38.96c-13.456 0-24.283 11.061-23.994 24.514L216 186.718 77.265 102.607c-11.506-6.976-26.499-3.13-33.227 8.523l-19.48 33.741c-6.728 11.653-2.562 26.56 9.233 33.037L176 256 33.79 334.093c-11.795 6.477-15.961 21.384-9.232 33.037l19.48 33.741c6.728 11.653 21.721 15.499 33.227 8.523L216 325.282l-3.475 162.204C212.237 500.939 223.064 512 236.52 512h38.961c13.456 0 24.283-11.061 23.995-24.514L296 325.282l138.735 84.111c11.506 6.976 26.499 3.13 33.227-8.523l19.48-33.741c6.728-11.653 2.563-26.559-9.232-33.036z"></path>
            </symbol>
            <symbol id="at" viewBox="0 0 512 512">
                <path d="M256 8C118.941 8 8 118.919 8 256c0 137.059 110.919 248 248 248 48.154 0 95.342-14.14 135.408-40.223 12.005-7.815 14.625-24.288 5.552-35.372l-10.177-12.433c-7.671-9.371-21.179-11.667-31.373-5.129C325.92 429.757 291.314 440 256 440c-101.458 0-184-82.542-184-184S154.542 72 256 72c100.139 0 184 57.619 184 160 0 38.786-21.093 79.742-58.17 83.693-17.349-.454-16.91-12.857-13.476-30.024l23.433-121.11C394.653 149.75 383.308 136 368.225 136h-44.981a13.518 13.518 0 0 0-13.432 11.993l-.01.092c-14.697-17.901-40.448-21.775-59.971-21.775-74.58 0-137.831 62.234-137.831 151.46 0 65.303 36.785 105.87 96 105.87 26.984 0 57.369-15.637 74.991-38.333 9.522 34.104 40.613 34.103 70.71 34.103C462.609 379.41 504 307.798 504 232 504 95.653 394.023 8 256 8zm-21.68 304.43c-22.249 0-36.07-15.623-36.07-40.771 0-44.993 30.779-72.729 58.63-72.729 22.292 0 35.601 15.241 35.601 40.77 0 45.061-33.875 72.73-58.161 72.73z"></path>
            </symbol>
            <symbol id="backward" viewBox="0 0 512 512">
                <path d="M11.5 280.6l192 160c20.6 17.2 52.5 2.8 52.5-24.6V96c0-27.4-31.9-41.8-52.5-24.6l-192 160c-15.3 12.8-15.3 36.4 0 49.2zm256 0l192 160c20.6 17.2 52.5 2.8 52.5-24.6V96c0-27.4-31.9-41.8-52.5-24.6l-192 160c-15.3 12.8-15.3 36.4 0 49.2z"></path>
            </symbol>
            <symbol id="ban" viewBox="0 0 512 512">
                <path d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z"></path>
            </symbol>
            <symbol id="bars" viewBox="0 0 448 512">
                <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
            </symbol>
            <symbol id="bed" viewBox="0 0 640 512">
                <path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z"></path>
            </symbol>
            <symbol id="bell" viewBox="0 0 448 512">
                <path d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
            </symbol>
            <symbol id="bell-slash" viewBox="0 0 640 512">
                <path d="M633.82 458.1l-90.62-70.05c.19-1.38.8-2.66.8-4.06.05-7.55-2.61-15.27-8.61-21.71-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84c-40.33 8.38-74.66 31.07-97.59 62.57L45.47 3.37C38.49-2.05 28.43-.8 23.01 6.18L3.37 31.45C-2.05 38.42-.8 48.47 6.18 53.9l588.35 454.73c6.98 5.43 17.03 4.17 22.46-2.81l19.64-25.27c5.42-6.97 4.17-17.02-2.81-22.45zM157.23 251.54c-8.61 67.96-36.41 93.33-52.62 110.75-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h241.92L157.23 251.54zM320 512c35.32 0 63.97-28.65 63.97-64H256.03c0 35.35 28.65 64 63.97 64z"></path>
            </symbol>
            <symbol id="bold" viewBox="0 0 384 512">
                <path d="M333.49 238a122 122 0 0 0 27-65.21C367.87 96.49 308 32 233.42 32H34a16 16 0 0 0-16 16v48a16 16 0 0 0 16 16h31.87v288H34a16 16 0 0 0-16 16v48a16 16 0 0 0 16 16h209.32c70.8 0 134.14-51.75 141-122.4 4.74-48.45-16.39-92.06-50.83-119.6zM145.66 112h87.76a48 48 0 0 1 0 96h-87.76zm87.76 288h-87.76V288h87.76a56 56 0 0 1 0 112z"></path>
            </symbol>
            <symbol id="book" viewBox="0 0 448 512">
                <path d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path>
            </symbol>
            <symbol id="book-reader" viewBox="0 0 512 512">
                <path d="M352 96c0-53.02-42.98-96-96-96s-96 42.98-96 96 42.98 96 96 96 96-42.98 96-96zM233.59 241.1c-59.33-36.32-155.43-46.3-203.79-49.05C13.55 191.13 0 203.51 0 219.14v222.8c0 14.33 11.59 26.28 26.49 27.05 43.66 2.29 131.99 10.68 193.04 41.43 9.37 4.72 20.48-1.71 20.48-11.87V252.56c-.01-4.67-2.32-8.95-6.42-11.46zm248.61-49.05c-48.35 2.74-144.46 12.73-203.78 49.05-4.1 2.51-6.41 6.96-6.41 11.63v245.79c0 10.19 11.14 16.63 20.54 11.9 61.04-30.72 149.32-39.11 192.97-41.4 14.9-.78 26.49-12.73 26.49-27.06V219.14c-.01-15.63-13.56-28.01-29.81-27.09z"></path>
            </symbol>
            <symbol id="bookmark" viewBox="0 0 384 512">
                <path d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z"></path>
            </symbol>
            <symbol id="briefcase" viewBox="0 0 512 512">
                <path d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path>
            </symbol>
            <symbol id="calendar-alt" viewBox="0 0 448 512">
                <path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
            </symbol>
            <symbol id="caret-down" viewBox="0 0 320 512">
                <path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
            </symbol>
            <symbol id="caret-left" viewBox="0 0 192 512">
                <path d="M192 127.338v257.324c0 17.818-21.543 26.741-34.142 14.142L29.196 270.142c-7.81-7.81-7.81-20.474 0-28.284l128.662-128.662c12.599-12.6 34.142-3.676 34.142 14.142z"></path>
            </symbol>
            <symbol id="caret-right" viewBox="0 0 192 512">
                <path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path>
            </symbol>
            <symbol id="caret-up" viewBox="0 0 320 512">
                <path d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path>
            </symbol>
            <symbol id="certificate" viewBox="0 0 512 512">
                <path d="M458.622 255.92l45.985-45.005c13.708-12.977 7.316-36.039-10.664-40.339l-62.65-15.99 17.661-62.015c4.991-17.838-11.829-34.663-29.661-29.671l-61.994 17.667-15.984-62.671C337.085.197 313.765-6.276 300.99 7.228L256 53.57 211.011 7.229c-12.63-13.351-36.047-7.234-40.325 10.668l-15.984 62.671-61.995-17.667C74.87 57.907 58.056 74.738 63.046 92.572l17.661 62.015-62.65 15.99C.069 174.878-6.31 197.944 7.392 210.915l45.985 45.005-45.985 45.004c-13.708 12.977-7.316 36.039 10.664 40.339l62.65 15.99-17.661 62.015c-4.991 17.838 11.829 34.663 29.661 29.671l61.994-17.667 15.984 62.671c4.439 18.575 27.696 24.018 40.325 10.668L256 458.61l44.989 46.001c12.5 13.488 35.987 7.486 40.325-10.668l15.984-62.671 61.994 17.667c17.836 4.994 34.651-11.837 29.661-29.671l-17.661-62.015 62.65-15.99c17.987-4.302 24.366-27.367 10.664-40.339l-45.984-45.004z"></path>
            </symbol>
            <symbol id="chart-bar" viewBox="0 0 512 512">
                <path d="M332.8 320h38.4c6.4 0 12.8-6.4 12.8-12.8V172.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v134.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h38.4c6.4 0 12.8-6.4 12.8-12.8V76.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v230.4c0 6.4 6.4 12.8 12.8 12.8zm-288 0h38.4c6.4 0 12.8-6.4 12.8-12.8v-70.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v70.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h38.4c6.4 0 12.8-6.4 12.8-12.8V108.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v198.4c0 6.4 6.4 12.8 12.8 12.8zM496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z"></path>
            </symbol>
            <symbol id="chart-pie" viewBox="0 0 544 512">
                <path d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z"></path>
            </symbol>
            <symbol id="check" viewBox="0 0 512 512">
                <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
            </symbol>
            <symbol id="check-circle" viewBox="0 0 512 512">
                <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
            </symbol>
            <symbol id="check-square" viewBox="0 0 448 512">
                <path d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path>
            </symbol>
            <symbol id="chevron-down" viewBox="0 0 448 512">
                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
            </symbol>
            <symbol id="chevron-left" viewBox="0 0 320 512">
                <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
            </symbol>
            <symbol id="chevron-right" viewBox="0 0 320 512">
                <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
            </symbol>
            <symbol id="chevron-up" viewBox="0 0 448 512">
                <path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
            </symbol>
            <symbol id="circle" viewBox="0 0 512 512">
                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
            </symbol>
            <symbol id="code" viewBox="0 0 640 512">
                <path d="M278.9 511.5l-61-17.7c-6.4-1.8-10-8.5-8.2-14.9L346.2 8.7c1.8-6.4 8.5-10 14.9-8.2l61 17.7c6.4 1.8 10 8.5 8.2 14.9L293.8 503.3c-1.9 6.4-8.5 10.1-14.9 8.2zm-114-112.2l43.5-46.4c4.6-4.9 4.3-12.7-.8-17.2L117 256l90.6-79.7c5.1-4.5 5.5-12.3.8-17.2l-43.5-46.4c-4.5-4.8-12.1-5.1-17-.5L3.8 247.2c-5.1 4.7-5.1 12.8 0 17.5l144.1 135.1c4.9 4.6 12.5 4.4 17-.5zm327.2.6l144.1-135.1c5.1-4.7 5.1-12.8 0-17.5L492.1 112.1c-4.8-4.5-12.4-4.3-17 .5L431.6 159c-4.6 4.9-4.3 12.7.8 17.2L523 256l-90.6 79.7c-5.1 4.5-5.5 12.3-.8 17.2l43.5 46.4c4.5 4.9 12.1 5.1 17 .6z"></path>
            </symbol>
            <symbol id="cog" viewBox="0 0 512 512">
                <path d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path>
            </symbol>
            <symbol id="columns" viewBox="0 0 512 512">
                <path d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64V160h160v256zm224 0H288V160h160v256z"></path>
            </symbol>
            <symbol id="comment" viewBox="0 0 512 512">
                <path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z"></path>
            </symbol>
            <symbol id="compress" viewBox="0 0 448 512">
                <path d="M436 192H312c-13.3 0-24-10.7-24-24V44c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v84h84c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm-276-24V44c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v84H12c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h124c13.3 0 24-10.7 24-24zm0 300V344c0-13.3-10.7-24-24-24H12c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h84v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-84h84c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12H312c-13.3 0-24 10.7-24 24v124c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12z"></path>
            </symbol>
            <symbol id="copy" viewBox="0 0 448 512">
                <path d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z"></path>
            </symbol>
            <symbol id="crosshairs" viewBox="0 0 512 512">
                <path d="M500 224h-30.364C455.724 130.325 381.675 56.276 288 42.364V12c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v30.364C130.325 56.276 56.276 130.325 42.364 224H12c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h30.364C56.276 381.675 130.325 455.724 224 469.636V500c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-30.364C381.675 455.724 455.724 381.675 469.636 288H500c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zM288 404.634V364c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40.634C165.826 392.232 119.783 346.243 107.366 288H148c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-40.634C119.768 165.826 165.757 119.783 224 107.366V148c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40.634C346.174 119.768 392.217 165.757 404.634 224H364c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40.634C392.232 346.174 346.243 392.217 288 404.634zM288 256c0 17.673-14.327 32-32 32s-32-14.327-32-32c0-17.673 14.327-32 32-32s32 14.327 32 32z"></path>
            </symbol>
            <symbol id="cube" viewBox="0 0 512 512">
                <path d="M239.1 6.3l-208 78c-18.7 7-31.1 25-31.1 45v225.1c0 18.2 10.3 34.8 26.5 42.9l208 104c13.5 6.8 29.4 6.8 42.9 0l208-104c16.3-8.1 26.5-24.8 26.5-42.9V129.3c0-20-12.4-37.9-31.1-44.9l-208-78C262 2.2 250 2.2 239.1 6.3zM256 68.4l192 72v1.1l-192 78-192-78v-1.1l192-72zm32 356V275.5l160-65v133.9l-160 80z"></path>
            </symbol>
            <symbol id="desktop" viewBox="0 0 576 512">
                <path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z"></path>
            </symbol>
            <symbol id="download" viewBox="0 0 512 512">
                <path d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
            </symbol>
            <symbol id="ellipsis-h" viewBox="0 0 512 512">
                <path d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path>
            </symbol>
            <symbol id="ellipsis-v" viewBox="0 0 192 512">
                <path d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72 72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72 72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0 352c0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72-72 32.2-72 72z"></path>
            </symbol>
            <symbol id="envelope" viewBox="0 0 512 512">
                <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
            </symbol>
            <symbol id="envelope-square" viewBox="0 0 448 512">
                <path d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM178.117 262.104C87.429 196.287 88.353 196.121 64 177.167V152c0-13.255 10.745-24 24-24h272c13.255 0 24 10.745 24 24v25.167c-24.371 18.969-23.434 19.124-114.117 84.938-10.5 7.655-31.392 26.12-45.883 25.894-14.503.218-35.367-18.227-45.883-25.895zM384 217.775V360c0 13.255-10.745 24-24 24H88c-13.255 0-24-10.745-24-24V217.775c13.958 10.794 33.329 25.236 95.303 70.214 14.162 10.341 37.975 32.145 64.694 32.01 26.887.134 51.037-22.041 64.72-32.025 61.958-44.965 81.325-59.406 95.283-70.199z"></path>
            </symbol>
            <symbol id="exchange-alt" viewBox="0 0 512 512">
                <path d="M0 168v-16c0-13.255 10.745-24 24-24h360V80c0-21.367 25.899-32.042 40.971-16.971l80 80c9.372 9.373 9.372 24.569 0 33.941l-80 80C409.956 271.982 384 261.456 384 240v-48H24c-13.255 0-24-10.745-24-24zm488 152H128v-48c0-21.314-25.862-32.08-40.971-16.971l-80 80c-9.372 9.373-9.372 24.569 0 33.941l80 80C102.057 463.997 128 453.437 128 432v-48h360c13.255 0 24-10.745 24-24v-16c0-13.255-10.745-24-24-24z"></path>
            </symbol>
            <symbol id="exclamation-circle" viewBox="0 0 512 512">
                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path>
            </symbol>
            <symbol id="exclamation-triangle" viewBox="0 0 576 512">
                <path d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path>
            </symbol>
            <symbol id="external-link-alt" viewBox="0 0 512 512">
                <path d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z"></path>
            </symbol>
            <symbol id="fast-backward" viewBox="0 0 512 512">
                <path d="M0 436V76c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v151.9L235.5 71.4C256.1 54.3 288 68.6 288 96v131.9L459.5 71.4C480.1 54.3 512 68.6 512 96v320c0 27.4-31.9 41.7-52.5 24.6L288 285.3V416c0 27.4-31.9 41.7-52.5 24.6L64 285.3V436c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12z"></path>
            </symbol>
            <symbol id="fast-forward" viewBox="0 0 512 512">
                <path d="M512 76v360c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12V284.1L276.5 440.6c-20.6 17.2-52.5 2.8-52.5-24.6V284.1L52.5 440.6C31.9 457.8 0 443.4 0 416V96c0-27.4 31.9-41.7 52.5-24.6L224 226.8V96c0-27.4 31.9-41.7 52.5-24.6L448 226.8V76c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12z"></path>
            </symbol>
            <symbol id="file" viewBox="0 0 384 512">
                <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm160-14.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
            </symbol>
            <symbol id="file-alt" viewBox="0 0 384 512">
                <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
            </symbol>
            <symbol id="filter" viewBox="0 0 512 512">
                <path d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z"></path>
            </symbol>
            <symbol id="flag" viewBox="0 0 512 512">
                <path d="M349.565 98.783C295.978 98.783 251.721 64 184.348 64c-24.955 0-47.309 4.384-68.045 12.013a55.947 55.947 0 0 0 3.586-23.562C118.117 24.015 94.806 1.206 66.338.048 34.345-1.254 8 24.296 8 56c0 19.026 9.497 35.825 24 45.945V488c0 13.255 10.745 24 24 24h16c13.255 0 24-10.745 24-24v-94.4c28.311-12.064 63.582-22.122 114.435-22.122 53.588 0 97.844 34.783 165.217 34.783 48.169 0 86.667-16.294 122.505-40.858C506.84 359.452 512 349.571 512 339.045v-243.1c0-23.393-24.269-38.87-45.485-29.016-34.338 15.948-76.454 31.854-116.95 31.854z"></path>
            </symbol>
            <symbol id="folder" viewBox="0 0 512 512">
                <path d="M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48z"></path>
            </symbol>
            <symbol id="folder-open" viewBox="0 0 576 512">
                <path d="M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z"></path>
            </symbol>
            <symbol id="forward" viewBox="0 0 512 512">
                <path d="M500.5 231.4l-192-160C287.9 54.3 256 68.6 256 96v320c0 27.4 31.9 41.8 52.5 24.6l192-160c15.3-12.8 15.3-36.4 0-49.2zm-256 0l-192-160C31.9 54.3 0 68.6 0 96v320c0 27.4 31.9 41.8 52.5 24.6l192-160c15.3-12.8 15.3-36.4 0-49.2z"></path>
            </symbol>
            <symbol id="gavel" viewBox="0 0 512 512">
                <path d="M504.971 199.362l-22.627-22.627c-9.373-9.373-24.569-9.373-33.941 0l-5.657 5.657L329.608 69.255l5.657-5.657c9.373-9.373 9.373-24.569 0-33.941L312.638 7.029c-9.373-9.373-24.569-9.373-33.941 0L154.246 131.48c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l5.657-5.657 39.598 39.598-81.04 81.04-5.657-5.657c-12.497-12.497-32.758-12.497-45.255 0L9.373 412.118c-12.497 12.497-12.497 32.758 0 45.255l45.255 45.255c12.497 12.497 32.758 12.497 45.255 0l114.745-114.745c12.497-12.497 12.497-32.758 0-45.255l-5.657-5.657 81.04-81.04 39.598 39.598-5.657 5.657c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l124.451-124.451c9.372-9.372 9.372-24.568 0-33.941z"></path>
            </symbol>
            <symbol id="globe" viewBox="0 0 496 512">
                <path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path>
            </symbol>
            <symbol id="globe-americas" viewBox="0 0 496 512">
                <path d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"></path>
            </symbol>
            <symbol id="hand-point-right" viewBox="0 0 512 512">
                <path d="M512 199.652c0 23.625-20.65 43.826-44.8 43.826h-99.851c16.34 17.048 18.346 49.766-6.299 70.944 14.288 22.829 2.147 53.017-16.45 62.315C353.574 425.878 322.654 448 272 448c-2.746 0-13.276-.203-16-.195-61.971.168-76.894-31.065-123.731-38.315C120.596 407.683 112 397.599 112 385.786V214.261l.002-.001c.011-18.366 10.607-35.889 28.464-43.845 28.886-12.994 95.413-49.038 107.534-77.323 7.797-18.194 21.384-29.084 40-29.092 34.222-.014 57.752 35.098 44.119 66.908-3.583 8.359-8.312 16.67-14.153 24.918H467.2c23.45 0 44.8 20.543 44.8 43.826zM96 200v192c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V200c0-13.255 10.745-24 24-24h48c13.255 0 24 10.745 24 24zM68 368c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20z"></path>
            </symbol>
            <symbol id="hands-helping" viewBox="0 0 640 512">
                <path d="M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72V126.4l-64.9 39C107.8 176.9 96 197.8 96 220.2v47.3l-80 46.2C.7 322.5-4.6 342.1 4.3 357.4l80 138.6c8.8 15.3 28.4 20.5 43.7 11.7L231.4 448H368c35.3 0 64-28.7 64-64h16c17.7 0 32-14.3 32-32v-64h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm147.7-37.4L555.7 16C546.9.7 527.3-4.5 512 4.3L408.6 64H306.4c-12 0-23.7 3.4-33.9 9.7L239 94.6c-9.4 5.8-15 16.1-15 27.1V248c0 22.1 17.9 40 40 40s40-17.9 40-40v-88h184c30.9 0 56 25.1 56 56v28.5l80-46.2c15.3-8.9 20.5-28.4 11.7-43.7z"></path>
            </symbol>
            <symbol id="heart" viewBox="0 0 512 512">
                <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
            </symbol>
            <symbol id="history" viewBox="0 0 512 512">
                <path d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"></path>
            </symbol>
            <symbol id="home" viewBox="0 0 576 512">
                <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
            </symbol>
            <symbol id="hourglass-start" viewBox="0 0 384 512">
                <path d="M360 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24 0 90.965 51.016 167.734 120.842 192C75.016 280.266 24 357.035 24 448c-13.255 0-24 10.745-24 24v16c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24v-16c0-13.255-10.745-24-24-24 0-90.965-51.016-167.734-120.842-192C308.984 231.734 360 154.965 360 64c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24zm-64 448H88c0-77.458 46.204-144 104-144 57.786 0 104 66.517 104 144z"></path>
            </symbol>
            <symbol id="id-card" viewBox="0 0 576 512">
                <path d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"></path>
            </symbol>
            <symbol id="info-circle" viewBox="0 0 512 512">
                <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
            </symbol>
            <symbol id="italic" viewBox="0 0 320 512">
                <path d="M320 48v32a16 16 0 0 1-16 16h-62.76l-80 320H208a16 16 0 0 1 16 16v32a16 16 0 0 1-16 16H16a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h62.76l80-320H112a16 16 0 0 1-16-16V48a16 16 0 0 1 16-16h192a16 16 0 0 1 16 16z"></path>
            </symbol>
            <symbol id="key" viewBox="0 0 512 512">
                <path d="M512 176.001C512 273.203 433.202 352 336 352c-11.22 0-22.19-1.062-32.827-3.069l-24.012 27.014A23.999 23.999 0 0 1 261.223 384H224v40c0 13.255-10.745 24-24 24h-40v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24v-78.059c0-6.365 2.529-12.47 7.029-16.971l161.802-161.802C163.108 213.814 160 195.271 160 176 160 78.798 238.797.001 335.999 0 433.488-.001 512 78.511 512 176.001zM336 128c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"></path>
            </symbol>
            <symbol id="layer-group" viewBox="0 0 512 512">
                <path d="M12.41 148.02l232.94 105.67c6.8 3.09 14.49 3.09 21.29 0l232.94-105.67c16.55-7.51 16.55-32.52 0-40.03L266.65 2.31a25.607 25.607 0 0 0-21.29 0L12.41 107.98c-16.55 7.51-16.55 32.53 0 40.04zm487.18 88.28l-58.09-26.33-161.64 73.27c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.51 209.97l-58.1 26.33c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 276.3c16.55-7.5 16.55-32.5 0-40zm0 127.8l-57.87-26.23-161.86 73.37c-7.56 3.43-15.59 5.17-23.86 5.17s-16.29-1.74-23.86-5.17L70.29 337.87 12.41 364.1c-16.55 7.5-16.55 32.5 0 40l232.94 105.59c6.8 3.08 14.49 3.08 21.29 0L499.59 404.1c16.55-7.5 16.55-32.5 0-40z"></path>
            </symbol>
            <symbol id="link" viewBox="0 0 512 512">
                <path d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z"></path>
            </symbol>
            <symbol id="list" viewBox="0 0 512 512">
                <path d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
            </symbol>
            <symbol id="list-ol" viewBox="0 0 512 512">
                <path d="M61.77 401l17.5-20.15a19.92 19.92 0 0 0 5.07-14.19v-3.31C84.34 356 80.5 352 73 352H16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h22.83a157.41 157.41 0 0 0-11 12.31l-5.61 7c-4 5.07-5.25 10.13-2.8 14.88l1.05 1.93c3 5.76 6.29 7.88 12.25 7.88h4.73c10.33 0 15.94 2.44 15.94 9.09 0 4.72-4.2 8.22-14.36 8.22a41.54 41.54 0 0 1-15.47-3.12c-6.49-3.88-11.74-3.5-15.6 3.12l-5.59 9.31c-3.72 6.13-3.19 11.72 2.63 15.94 7.71 4.69 20.38 9.44 37 9.44 34.16 0 48.5-22.75 48.5-44.12-.03-14.38-9.12-29.76-28.73-34.88zM496 224H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zM16 160h64a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8H64V40a8 8 0 0 0-8-8H32a8 8 0 0 0-7.14 4.42l-8 16A8 8 0 0 0 24 64h8v64H16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm-3.91 160H80a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8H41.32c3.29-10.29 48.34-18.68 48.34-56.44 0-29.06-25-39.56-44.47-39.56-21.36 0-33.8 10-40.46 18.75-4.37 5.59-3 10.84 2.8 15.37l8.58 6.88c5.61 4.56 11 2.47 16.12-2.44a13.44 13.44 0 0 1 9.46-3.84c3.33 0 9.28 1.56 9.28 8.75C51 248.19 0 257.31 0 304.59v4C0 316 5.08 320 12.09 320z"></path>
            </symbol>
            <symbol id="list-ul" viewBox="0 0 512 512">
                <path d="M48 48a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm448 16H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
            </symbol>
            <symbol id="lock" viewBox="0 0 448 512">
                <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
            </symbol>
            <symbol id="magic" viewBox="0 0 512 512">
                <path d="M224 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zM80 160l26.66-53.33L160 80l-53.34-26.67L80 0 53.34 53.33 0 80l53.34 26.67L80 160zm352 128l-26.66 53.33L352 368l53.34 26.67L432 448l26.66-53.33L512 368l-53.34-26.67L432 288zm70.62-193.77L417.77 9.38C411.53 3.12 403.34 0 395.15 0c-8.19 0-16.38 3.12-22.63 9.38L9.38 372.52c-12.5 12.5-12.5 32.76 0 45.25l84.85 84.85c6.25 6.25 14.44 9.37 22.62 9.37 8.19 0 16.38-3.12 22.63-9.37l363.14-363.15c12.5-12.48 12.5-32.75 0-45.24zM359.45 203.46l-50.91-50.91 86.6-86.6 50.91 50.91-86.6 86.6z"></path>
            </symbol>
            <symbol id="map-marker-alt" viewBox="0 0 384 512">
                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
            </symbol>
            <symbol id="microphone-slash" viewBox="0 0 640 512">
                <path d="M633.82 458.1l-157.8-121.96C488.61 312.13 496 285.01 496 256v-48c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v48c0 17.92-3.96 34.8-10.72 50.2l-26.55-20.52c3.1-9.4 5.28-19.22 5.28-29.67V96c0-53.02-42.98-96-96-96s-96 42.98-96 96v45.36L45.47 3.37C38.49-2.05 28.43-.8 23.01 6.18L3.37 31.45C-2.05 38.42-.8 48.47 6.18 53.9l588.36 454.73c6.98 5.43 17.03 4.17 22.46-2.81l19.64-25.27c5.41-6.97 4.16-17.02-2.82-22.45zM400 464h-56v-33.77c11.66-1.6 22.85-4.54 33.67-8.31l-50.11-38.73c-6.71.4-13.41.87-20.35.2-55.85-5.45-98.74-48.63-111.18-101.85L144 241.31v6.85c0 89.64 63.97 169.55 152 181.69V464h-56c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16z"></path>
            </symbol>
            <symbol id="minus" viewBox="0 0 448 512">
                <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
            </symbol>
            <symbol id="minus-circle" viewBox="0 0 512 512">
                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path>
            </symbol>
            <symbol id="mobile-alt" viewBox="0 0 320 512">
                <path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"></path>
            </symbol>
            <symbol id="moon" viewBox="0 0 512 512">
                <path d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z"></path>
            </symbol>
            <symbol id="paint-brush" viewBox="0 0 512 512">
                <path d="M167.02 309.34c-40.12 2.58-76.53 17.86-97.19 72.3-2.35 6.21-8 9.98-14.59 9.98-11.11 0-45.46-27.67-55.25-34.35C0 439.62 37.93 512 128 512c75.86 0 128-43.77 128-120.19 0-3.11-.65-6.08-.97-9.13l-88.01-73.34zM457.89 0c-15.16 0-29.37 6.71-40.21 16.45C213.27 199.05 192 203.34 192 257.09c0 13.7 3.25 26.76 8.73 38.7l63.82 53.18c7.21 1.8 14.64 3.03 22.39 3.03 62.11 0 98.11-45.47 211.16-256.46 7.38-14.35 13.9-29.85 13.9-45.99C512 20.64 486 0 457.89 0z"></path>
            </symbol>
            <symbol id="paper-plane" viewBox="0 0 512 512">
                <path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path>
            </symbol>
            <symbol id="pause" viewBox="0 0 448 512">
                <path d="M144 479H48c-26.5 0-48-21.5-48-48V79c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zm304-48V79c0-26.5-21.5-48-48-48h-96c-26.5 0-48 21.5-48 48v352c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48z"></path>
            </symbol>
            <symbol id="pencil-alt" viewBox="0 0 512 512">
                <path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path>
            </symbol>
            <symbol id="play" viewBox="0 0 448 512">
                <path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path>
            </symbol>
            <symbol id="plug" viewBox="0 0 384 512">
                <path d="M320,32a32,32,0,0,0-64,0v96h64Zm48,128H16A16,16,0,0,0,0,176v32a16,16,0,0,0,16,16H32v32A160.07,160.07,0,0,0,160,412.8V512h64V412.8A160.07,160.07,0,0,0,352,256V224h16a16,16,0,0,0,16-16V176A16,16,0,0,0,368,160ZM128,32a32,32,0,0,0-64,0v96h64Z"></path>
            </symbol>
            <symbol id="plus" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
            </symbol>
            <symbol id="plus-circle" viewBox="0 0 512 512">
                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path>
            </symbol>
            <symbol id="plus-square" viewBox="0 0 448 512">
                <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32 252c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92H92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path>
            </symbol>
            <symbol id="power-off" viewBox="0 0 512 512">
                <path d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z"></path>
            </symbol>
            <symbol id="puzzle-piece" viewBox="0 0 576 512">
                <path d="M519.442 288.651c-41.519 0-59.5 31.593-82.058 31.593C377.409 320.244 432 144 432 144s-196.288 80-196.288-3.297c0-35.827 36.288-46.25 36.288-85.985C272 19.216 243.885 0 210.539 0c-34.654 0-66.366 18.891-66.366 56.346 0 41.364 31.711 59.277 31.711 81.75C175.885 207.719 0 166.758 0 166.758v333.237s178.635 41.047 178.635-28.662c0-22.473-40-40.107-40-81.471 0-37.456 29.25-56.346 63.577-56.346 33.673 0 61.788 19.216 61.788 54.717 0 39.735-36.288 50.158-36.288 85.985 0 60.803 129.675 25.73 181.23 25.73 0 0-34.725-120.101 25.827-120.101 35.962 0 46.423 36.152 86.308 36.152C556.712 416 576 387.99 576 354.443c0-34.199-18.962-65.792-56.558-65.792z"></path>
            </symbol>
            <symbol id="question" viewBox="0 0 384 512">
                <path d="M202.021 0C122.202 0 70.503 32.703 29.914 91.026c-7.363 10.58-5.093 25.086 5.178 32.874l43.138 32.709c10.373 7.865 25.132 6.026 33.253-4.148 25.049-31.381 43.63-49.449 82.757-49.449 30.764 0 68.816 19.799 68.816 49.631 0 22.552-18.617 34.134-48.993 51.164-35.423 19.86-82.299 44.576-82.299 106.405V320c0 13.255 10.745 24 24 24h72.471c13.255 0 24-10.745 24-24v-5.773c0-42.86 125.268-44.645 125.268-160.627C377.504 66.256 286.902 0 202.021 0zM192 373.459c-38.196 0-69.271 31.075-69.271 69.271 0 38.195 31.075 69.27 69.271 69.27s69.271-31.075 69.271-69.271-31.075-69.27-69.271-69.27z"></path>
            </symbol>
            <symbol id="question-circle" viewBox="0 0 512 512">
                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
            </symbol>
            <symbol id="quote-left" viewBox="0 0 512 512">
                <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
            </symbol>
            <symbol id="quote-right" viewBox="0 0 512 512">
                <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z"></path>
            </symbol>
            <symbol id="random" viewBox="0 0 512 512">
                <path d="M504.971 359.029c9.373 9.373 9.373 24.569 0 33.941l-80 79.984c-15.01 15.01-40.971 4.49-40.971-16.971V416h-58.785a12.004 12.004 0 0 1-8.773-3.812l-70.556-75.596 53.333-57.143L352 336h32v-39.981c0-21.438 25.943-31.998 40.971-16.971l80 79.981zM12 176h84l52.781 56.551 53.333-57.143-70.556-75.596A11.999 11.999 0 0 0 122.785 96H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12zm372 0v39.984c0 21.46 25.961 31.98 40.971 16.971l80-79.984c9.373-9.373 9.373-24.569 0-33.941l-80-79.981C409.943 24.021 384 34.582 384 56.019V96h-58.785a12.004 12.004 0 0 0-8.773 3.812L96 336H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h110.785c3.326 0 6.503-1.381 8.773-3.812L352 176h32z"></path>
            </symbol>
            <symbol id="redo" viewBox="0 0 512 512">
                <path d="M500.33 0h-47.41a12 12 0 0 0-12 12.57l4 82.76A247.42 247.42 0 0 0 256 8C119.34 8 7.9 119.53 8 256.19 8.1 393.07 119.1 504 256 504a247.1 247.1 0 0 0 166.18-63.91 12 12 0 0 0 .48-17.43l-34-34a12 12 0 0 0-16.38-.55A176 176 0 1 1 402.1 157.8l-101.53-4.87a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12h200.33a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12z"></path>
            </symbol>
            <symbol id="reply" viewBox="0 0 512 512">
                <path d="M8.309 189.836L184.313 37.851C199.719 24.546 224 35.347 224 56.015v80.053c160.629 1.839 288 34.032 288 186.258 0 61.441-39.581 122.309-83.333 154.132-13.653 9.931-33.111-2.533-28.077-18.631 45.344-145.012-21.507-183.51-176.59-185.742V360c0 20.7-24.3 31.453-39.687 18.164l-176.004-152c-11.071-9.562-11.086-26.753 0-36.328z"></path>
            </symbol>
            <symbol id="rocket" viewBox="0 0 512 512">
                <path d="M505.12019,19.09375c-1.18945-5.53125-6.65819-11-12.207-12.1875C460.716,0,435.507,0,410.40747,0,307.17523,0,245.26909,55.20312,199.05238,128H94.83772c-16.34763.01562-35.55658,11.875-42.88664,26.48438L2.51562,253.29688A28.4,28.4,0,0,0,0,264a24.00867,24.00867,0,0,0,24.00582,24H127.81618l-22.47457,22.46875c-11.36521,11.36133-12.99607,32.25781,0,45.25L156.24582,406.625c11.15623,11.1875,32.15619,13.15625,45.27726,0l22.47457-22.46875V488a24.00867,24.00867,0,0,0,24.00581,24,28.55934,28.55934,0,0,0,10.707-2.51562l98.72834-49.39063c14.62888-7.29687,26.50776-26.5,26.50776-42.85937V312.79688c72.59753-46.3125,128.03493-108.40626,128.03493-211.09376C512.07526,76.5,512.07526,51.29688,505.12019,19.09375ZM384.04033,168A40,40,0,1,1,424.05,128,40.02322,40.02322,0,0,1,384.04033,168Z"></path>
            </symbol>
            <symbol id="search" viewBox="0 0 512 512">
                <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </symbol>
            <symbol id="share" viewBox="0 0 512 512">
                <path d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z"></path>
            </symbol>
            <symbol id="shield-alt" viewBox="0 0 512 512">
                <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
            </symbol>
            <symbol id="sign-in-alt" viewBox="0 0 512 512">
                <path d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path>
            </symbol>
            <symbol id="sign-out-alt" viewBox="0 0 512 512">
                <path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path>
            </symbol>
            <symbol id="signal" viewBox="0 0 640 512">
                <path d="M216 288h-48c-8.84 0-16 7.16-16 16v192c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V304c0-8.84-7.16-16-16-16zM88 384H40c-8.84 0-16 7.16-16 16v96c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16v-96c0-8.84-7.16-16-16-16zm256-192h-48c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zm128-96h-48c-8.84 0-16 7.16-16 16v384c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V112c0-8.84-7.16-16-16-16zM600 0h-48c-8.84 0-16 7.16-16 16v480c0 8.84 7.16 16 16 16h48c8.84 0 16-7.16 16-16V16c0-8.84-7.16-16-16-16z"></path>
            </symbol>
            <symbol id="sliders-h" viewBox="0 0 512 512">
                <path d="M496 384H160v-16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v16H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h80v16c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-16h336c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm0-160h-80v-16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v16H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h336v16c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-16h80c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm0-160H288V48c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v16H16C7.2 64 0 71.2 0 80v32c0 8.8 7.2 16 16 16h208v16c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-16h208c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16z"></path>
            </symbol>
            <symbol id="spinner" viewBox="0 0 512 512">
                <path d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path>
            </symbol>
            <symbol id="star" viewBox="0 0 576 512">
                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </symbol>
            <symbol id="step-backward" viewBox="0 0 448 512">
                <path d="M64 468V44c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v176.4l195.5-181C352.1 22.3 384 36.6 384 64v384c0 27.4-31.9 41.7-52.5 24.6L136 292.7V468c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12z"></path>
            </symbol>
            <symbol id="step-forward" viewBox="0 0 448 512">
                <path d="M384 44v424c0 6.6-5.4 12-12 12h-48c-6.6 0-12-5.4-12-12V291.6l-195.5 181C95.9 489.7 64 475.4 64 448V64c0-27.4 31.9-41.7 52.5-24.6L312 219.3V44c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12z"></path>
            </symbol>
            <symbol id="stream" viewBox="0 0 512 512">
                <path d="M16 128h416c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H16C7.16 32 0 39.16 0 48v64c0 8.84 7.16 16 16 16zm480 80H80c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16zm-64 176H16c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16z"></path>
            </symbol>
            <symbol id="sync" viewBox="0 0 512 512">
                <path d="M440.65 12.57l4 82.77A247.16 247.16 0 0 0 255.83 8C134.73 8 33.91 94.92 12.29 209.82A12 12 0 0 0 24.09 224h49.05a12 12 0 0 0 11.67-9.26 175.91 175.91 0 0 1 317-56.94l-101.46-4.86a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12H500a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12h-47.37a12 12 0 0 0-11.98 12.57zM255.83 432a175.61 175.61 0 0 1-146-77.8l101.8 4.87a12 12 0 0 0 12.57-12v-47.4a12 12 0 0 0-12-12H12a12 12 0 0 0-12 12V500a12 12 0 0 0 12 12h47.35a12 12 0 0 0 12-12.6l-4.15-82.57A247.17 247.17 0 0 0 255.83 504c121.11 0 221.93-86.92 243.55-201.82a12 12 0 0 0-11.8-14.18h-49.05a12 12 0 0 0-11.67 9.26A175.86 175.86 0 0 1 255.83 432z"></path>
            </symbol>
            <symbol id="sync-alt" viewBox="0 0 512 512">
                <path d="M370.72 133.28C339.458 104.008 298.888 87.962 255.848 88c-77.458.068-144.328 53.178-162.791 126.85-1.344 5.363-6.122 9.15-11.651 9.15H24.103c-7.498 0-13.194-6.807-11.807-14.176C33.933 94.924 134.813 8 256 8c66.448 0 126.791 26.136 171.315 68.685L463.03 40.97C478.149 25.851 504 36.559 504 57.941V192c0 13.255-10.745 24-24 24H345.941c-21.382 0-32.09-25.851-16.971-40.971l41.75-41.749zM32 296h134.059c21.382 0 32.09 25.851 16.971 40.971l-41.75 41.75c31.262 29.273 71.835 45.319 114.876 45.28 77.418-.07 144.315-53.144 162.787-126.849 1.344-5.363 6.122-9.15 11.651-9.15h57.304c7.498 0 13.194 6.807 11.807 14.176C478.067 417.076 377.187 504 256 504c-66.448 0-126.791-26.136-171.315-68.685L48.97 471.03C33.851 486.149 8 475.441 8 454.059V320c0-13.255 10.745-24 24-24z"></path>
            </symbol>
            <symbol id="table" viewBox="0 0 512 512">
                <path d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path>
            </symbol>
            <symbol id="tag" viewBox="0 0 512 512">
                <path d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path>
            </symbol>
            <symbol id="tags" viewBox="0 0 640 512">
                <path d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path>
            </symbol>
            <symbol id="tasks" viewBox="0 0 512 512">
                <path d="M139.61 35.5a12 12 0 0 0-17 0L58.93 98.81l-22.7-22.12a12 12 0 0 0-17 0L3.53 92.41a12 12 0 0 0 0 17l47.59 47.4a12.78 12.78 0 0 0 17.61 0l15.59-15.62L156.52 69a12.09 12.09 0 0 0 .09-17zm0 159.19a12 12 0 0 0-17 0l-63.68 63.72-22.7-22.1a12 12 0 0 0-17 0L3.53 252a12 12 0 0 0 0 17L51 316.5a12.77 12.77 0 0 0 17.6 0l15.7-15.69 72.2-72.22a12 12 0 0 0 .09-16.9zM64 368c-26.49 0-48.59 21.5-48.59 48S37.53 464 64 464a48 48 0 0 0 0-96zm432 16H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
            </symbol>
            <symbol id="thermometer-three-quarters" viewBox="0 0 256 512">
                <path d="M192 384c0 35.346-28.654 64-64 64-35.346 0-64-28.654-64-64 0-23.685 12.876-44.349 32-55.417V160c0-17.673 14.327-32 32-32s32 14.327 32 32v168.583c19.124 11.068 32 31.732 32 55.417zm32-84.653c19.912 22.563 32 52.194 32 84.653 0 70.696-57.303 128-128 128-.299 0-.609-.001-.909-.003C56.789 511.509-.357 453.636.002 383.333.166 351.135 12.225 321.755 32 299.347V96c0-53.019 42.981-96 96-96s96 42.981 96 96v203.347zM208 384c0-34.339-19.37-52.19-32-66.502V96c0-26.467-21.533-48-48-48S80 69.533 80 96v221.498c-12.732 14.428-31.825 32.1-31.999 66.08-.224 43.876 35.563 80.116 79.423 80.42L128 464c44.112 0 80-35.888 80-80z"></path>
            </symbol>
            <symbol id="thumbs-down" viewBox="0 0 512 512">
                <path d="M0 56v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H24C10.745 32 0 42.745 0 56zm40 200c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24-24-10.745-24-24zm272 256c-20.183 0-29.485-39.293-33.931-57.795-5.206-21.666-10.589-44.07-25.393-58.902-32.469-32.524-49.503-73.967-89.117-113.111a11.98 11.98 0 0 1-3.558-8.521V59.901c0-6.541 5.243-11.878 11.783-11.998 15.831-.29 36.694-9.079 52.651-16.178C256.189 17.598 295.709.017 343.995 0h2.844c42.777 0 93.363.413 113.774 29.737 8.392 12.057 10.446 27.034 6.148 44.632 16.312 17.053 25.063 48.863 16.382 74.757 17.544 23.432 19.143 56.132 9.308 79.469l.11.11c11.893 11.949 19.523 31.259 19.439 49.197-.156 30.352-26.157 58.098-59.553 58.098H350.723C358.03 364.34 384 388.132 384 430.548 384 504 336 512 312 512z"></path>
            </symbol>
            <symbol id="thumbs-up" viewBox="0 0 512 512">
                <path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path>
            </symbol>
            <symbol id="thumbtack" viewBox="0 0 384 512">
                <path d="M298.028 214.267L285.793 96H328c13.255 0 24-10.745 24-24V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v48c0 13.255 10.745 24 24 24h42.207L85.972 214.267C37.465 236.82 0 277.261 0 328c0 13.255 10.745 24 24 24h136v104.007c0 1.242.289 2.467.845 3.578l24 48c2.941 5.882 11.364 5.893 14.311 0l24-48a8.008 8.008 0 0 0 .845-3.578V352h136c13.255 0 24-10.745 24-24-.001-51.183-37.983-91.42-85.973-113.733z"></path>
            </symbol>
            <symbol id="times" viewBox="0 0 352 512">
                <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
            </symbol>
            <symbol id="times-circle" viewBox="0 0 512 512">
                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
            </symbol>
            <symbol id="toggle-off" viewBox="0 0 576 512">
                <path d="M384 64H192C85.961 64 0 149.961 0 256s85.961 192 192 192h192c106.039 0 192-85.961 192-192S490.039 64 384 64zM64 256c0-70.741 57.249-128 128-128 70.741 0 128 57.249 128 128 0 70.741-57.249 128-128 128-70.741 0-128-57.249-128-128zm320 128h-48.905c65.217-72.858 65.236-183.12 0-256H384c70.741 0 128 57.249 128 128 0 70.74-57.249 128-128 128z"></path>
            </symbol>
            <symbol id="toggle-on" viewBox="0 0 576 512">
                <path d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path>
            </symbol>
            <symbol id="trash-alt" viewBox="0 0 448 512">
                <path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
            </symbol>
            <symbol id="undo" viewBox="0 0 512 512">
                <path d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z"></path>
            </symbol>
            <symbol id="unlink" viewBox="0 0 512 512">
                <path d="M304.083 405.907c4.686 4.686 4.686 12.284 0 16.971l-44.674 44.674c-59.263 59.262-155.693 59.266-214.961 0-59.264-59.265-59.264-155.696 0-214.96l44.675-44.675c4.686-4.686 12.284-4.686 16.971 0l39.598 39.598c4.686 4.686 4.686 12.284 0 16.971l-44.675 44.674c-28.072 28.073-28.072 73.75 0 101.823 28.072 28.072 73.75 28.073 101.824 0l44.674-44.674c4.686-4.686 12.284-4.686 16.971 0l39.597 39.598zm-56.568-260.216c4.686 4.686 12.284 4.686 16.971 0l44.674-44.674c28.072-28.075 73.75-28.073 101.824 0 28.072 28.073 28.072 73.75 0 101.823l-44.675 44.674c-4.686 4.686-4.686 12.284 0 16.971l39.598 39.598c4.686 4.686 12.284 4.686 16.971 0l44.675-44.675c59.265-59.265 59.265-155.695 0-214.96-59.266-59.264-155.695-59.264-214.961 0l-44.674 44.674c-4.686 4.686-4.686 12.284 0 16.971l39.597 39.598zm234.828 359.28l22.627-22.627c9.373-9.373 9.373-24.569 0-33.941L63.598 7.029c-9.373-9.373-24.569-9.373-33.941 0L7.029 29.657c-9.373 9.373-9.373 24.569 0 33.941l441.373 441.373c9.373 9.372 24.569 9.372 33.941 0z"></path>
            </symbol>
            <symbol id="unlock" viewBox="0 0 448 512">
                <path d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
            </symbol>
            <symbol id="unlock-alt" viewBox="0 0 448 512">
                <path d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zM264 408c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48z"></path>
            </symbol>
            <symbol id="upload" viewBox="0 0 512 512">
                <path d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
            </symbol>
            <symbol id="user" viewBox="0 0 448 512">
                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
            </symbol>
            <symbol id="user-edit" viewBox="0 0 640 512">
                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path>
            </symbol>
            <symbol id="user-friends" viewBox="0 0 640 512">
                <path d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z"></path>
            </symbol>
            <symbol id="user-plus" viewBox="0 0 640 512">
                <path d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
            </symbol>
            <symbol id="user-secret" viewBox="0 0 448 512">
                <path d="M383.9 308.3l23.9-62.6c4-10.5-3.7-21.7-15-21.7h-58.5c11-18.9 17.8-40.6 17.8-64v-.3c39.2-7.8 64-19.1 64-31.7 0-13.3-27.3-25.1-70.1-33-9.2-32.8-27-65.8-40.6-82.8-9.5-11.9-25.9-15.6-39.5-8.8l-27.6 13.8c-9 4.5-19.6 4.5-28.6 0L182.1 3.4c-13.6-6.8-30-3.1-39.5 8.8-13.5 17-31.4 50-40.6 82.8-42.7 7.9-70 19.7-70 33 0 12.6 24.8 23.9 64 31.7v.3c0 23.4 6.8 45.1 17.8 64H56.3c-11.5 0-19.2 11.7-14.7 22.3l25.8 60.2C27.3 329.8 0 372.7 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-48.4-25.8-90.4-64.1-114.1zM176 480l-41.6-192 49.6 32 24 40-32 120zm96 0l-32-120 24-40 49.6-32L272 480zm41.7-298.5c-3.9 11.9-7 24.6-16.5 33.4-10.1 9.3-48 22.4-64-25-2.8-8.4-15.4-8.4-18.3 0-17 50.2-56 32.4-64 25-9.5-8.8-12.7-21.5-16.5-33.4-.8-2.5-6.3-5.7-6.3-5.8v-10.8c28.3 3.6 61 5.8 96 5.8s67.7-2.1 96-5.8v10.8c-.1.1-5.6 3.2-6.4 5.8z"></path>
            </symbol>
            <symbol id="user-shield" viewBox="0 0 640 512">
                <path d="M622.3 271.1l-115.2-45c-4.1-1.6-12.6-3.7-22.2 0l-115.2 45c-10.7 4.2-17.7 14-17.7 24.9 0 111.6 68.7 188.8 132.9 213.9 9.6 3.7 18 1.6 22.2 0C558.4 489.9 640 420.5 640 296c0-10.9-7-20.7-17.7-24.9zM496 462.4V273.3l95.5 37.3c-5.6 87.1-60.9 135.4-95.5 151.8zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm96 40c0-2.5.8-4.8 1.1-7.2-2.5-.1-4.9-.8-7.5-.8h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c6.8 0 13.3-1.5 19.2-4-54-42.9-99.2-116.7-99.2-212z"></path>
            </symbol>
            <symbol id="user-times" viewBox="0 0 640 512">
                <path d="M589.6 240l45.6-45.6c6.3-6.3 6.3-16.5 0-22.8l-22.8-22.8c-6.3-6.3-16.5-6.3-22.8 0L544 194.4l-45.6-45.6c-6.3-6.3-16.5-6.3-22.8 0l-22.8 22.8c-6.3 6.3-6.3 16.5 0 22.8l45.6 45.6-45.6 45.6c-6.3 6.3-6.3 16.5 0 22.8l22.8 22.8c6.3 6.3 16.5 6.3 22.8 0l45.6-45.6 45.6 45.6c6.3 6.3 16.5 6.3 22.8 0l22.8-22.8c6.3-6.3 6.3-16.5 0-22.8L589.6 240zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
            </symbol>
            <symbol id="users" viewBox="0 0 640 512">
                <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
            </symbol>
            <symbol id="wrench" viewBox="0 0 512 512">
                <path d="M507.73 109.1c-2.24-9.03-13.54-12.09-20.12-5.51l-74.36 74.36-67.88-11.31-11.31-67.88 74.36-74.36c6.62-6.62 3.43-17.9-5.66-20.16-47.38-11.74-99.55.91-136.58 37.93-39.64 39.64-50.55 97.1-34.05 147.2L18.74 402.76c-24.99 24.99-24.99 65.51 0 90.5 24.99 24.99 65.51 24.99 90.5 0l213.21-213.21c50.12 16.71 107.47 5.68 147.37-34.22 37.07-37.07 49.7-89.32 37.91-136.73zM64 472c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path>
            </symbol>
        </svg>
    </div>
</div>
</body>
</html>
