<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Token</title>
    <link rel="stylesheet" href="/splide/splide.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var splideTest = new Splide('.splideTest', {
            perPage: 3,
            rewindByDrag: true,
            pagination: false,
            drag: 'free',
            arrows: false,
            gap: "1em",
            breakpoints: {
                0: {
                    perPage: 1,
                },
                768: {
                    perPage: 3,
                },

            }
        });
        splideTest.mount();
        document.querySelector("#smarttigerSliderNext").addEventListener("click", (ev) => splideTest.go(
            '+${i}'))
        document.querySelector("#smarttigerSliderPrev").addEventListener("click", (ev) => splideTest.go(
            '-${i}'))

        var splideRoad = new Splide('.splideRoad', {
            perPage: 3,
            rewindByDrag: true,
            pagination: false,
            drag: 'free',
            arrows: false,
            breakpoints: {
                0: {
                    perPage: 1,
                },
                768: {
                    perPage: 1,
                },
                991: {
                    perPage: 1.7,
                },
                1192: {
                    perPage: 3,
                }
            }
        });
        splideRoad.mount();
        document.querySelector("#roadMapSliderNext").addEventListener("click", (ev) => splideRoad.go(
            '+${i}'))
        document.querySelector("#roadMapSliderPrev").addEventListener("click", (ev) => splideRoad.go(
            '-${i}'))
        var plMobSwiper = new Splide('.spliderPlMob', {
            perPage: 1,
            rewindByDrag: true,
            pagination: false,
            drag: 'free',
            arrows: false,
            gap: "2em",
        });
        plMobSwiper.mount();
    });
    </script>
</head>

<body>
    <nav class="navigationMobile toleft" style="display: none;">
        <div class="closeMNWrap">
            <img src="/img/close.svg" alt="f" class="closeMN">
        </div>
        <a href="#SMARTTOKENYak" class="headerItem headerItemM">
            <div>
                <p> SMARTTOKEN</p>
            </div>
        </a>
        <a href="#SmartTigersYak" class="headerItem headerItemM">
            <div>
                <p> NFT</p>
            </div>
        </a>
        <a href="#RoadMapYak" class="headerItem headerItemM">
            <div>
                <p> ROAD MAP</p>
            </div>
        </a>
        <a href="#TeamYak" class="headerItem headerItemM">
            <div>
                <p> TEAM</p>
            </div>
        </a>
        <a href="#WhitePaperYak" class="headerItem headerItemM">
            <div>
                <p> WHITE PAPER</p>
            </div>
        </a>
        <a href="#LinksYak" class="headerItem headerItemM">
            <div>
                <p> LINKS</p>
            </div>
        </a>
    </nav>
    <header class="header">
        <div class="headerItem headerItemF">
            <img src="/img/logo.svg" alt="">
        </div>
        <a href="#SMARTTOKENYak" class="headerItem">
            <div>
                <p> SMARTTOKEN</p>
            </div>
        </a>
        <a href="#SmartTigersYak" class="headerItem">
            <div>
                <p> NFT</p>
            </div>
        </a>
        <a href="#RoadMapYak" class="headerItem">
            <div>
                <p> ROAD MAP</p>
            </div>
        </a>
        <a href="#TeamYak" class="headerItem">
            <div>
                <p> TEAM</p>
            </div>
        </a>
        <a href="#WhitePaperYak" class="headerItem">
            <div>
                <p> WHITE PAPER</p>
            </div>
        </a>
        <a href="#LinksYak" class="headerItem">
            <div>
                <p> LINKS</p>
            </div>
        </a>
        <div class="headerItem headerItemL">
            <div id="langToggle">
                <img src="/img/globe.svg" alt="" id="langToggle">
            </div>
            <div id="themeToggle">
                <img src="/img/sunny.svg" alt="" id="">
            </div>
        </div>
        <div class="mobileBurgerWrapper">
            <img src="/img/mobileburger.svg" alt="">
        </div>
    </header>
    <div class="langtogwrap displayNone">
        <div class="languageToggleItem" id="ru">
            <img src="/img/rus.webp" alt="" class="languageToggleItemImg" id="ru">
            <p class="languageToggleItemTxt" id="ru">Русский</p>
        </div>
        <div class="languageToggleItem languageToggleItemLast" id="en">
            <img src="/img/en.png" alt="" class="languageToggleItemImg" id="en">
            <p class="languageToggleItemTxt" id="en">English</p>
        </div>
    </div>
    <!-- <div class="languageToggle displayNone">
        <div class="languageToggleItem">
            <img src="" alt="" class="languageToggleItemImg">
            <p class="languageToggleItemTxt">🇷🇺 Русский</p>
        </div>
        <div class="languageToggleItem languageToggleItemLast">
            <img src="" alt="" class="languageToggleItemImg">
            <p class="languageToggleItemTxt">🇷🇺 Русский</p>
        </div>
    </div> -->
    <div class="upperBackground">
        <img src="/img/backplanets.svg" alt="">
    </div>
    <main class="main">
        <div class="plBl">
            <div class="plBlKrug">
                <div id="planetCenterItem" class="planetsItems displayNone oprev">
                    <h4 class="planetsItemsHeader">CENTERTONA</h4>
                    <p class="planetsItemsTxt planetsItemsTxt1 langtrans">Сервис в Telegram выступающий ресурсом
                        для начального взаимодействия между заказчиками
                        и исполнителями, между инвесторами и стартапами.
                        <br><br>
                        Скоро.
                    </p>
                    <div class="planetCenterItemTgBl">
                        <img src="/img/tgelegram.svg" alt="">
                        <p>Lorem, ipsum dolor.</p>
                    </div>
                </div>
                <img src="/img/planets/center.svg" alt="" class="plBlCenter">
                <div class="plBlBlue">
                    <div id="plBlBlueItem" class="planetsItems displayNone ">
                        <h4 class="planetsItemsHeader">CENTERTONA</h4>
                        <p class="planetsItemsTxt planetsItemsTxt2 langtrans">Сервис в Telegram выступающий ресурсом
                            для начального взаимодействия между заказчиками
                            и исполнителями, между инвесторами и стартапами.
                            <br><br>
                            Скоро.
                        </p>
                    </div>
                    <img src="/img/planets/blue.svg" alt="">
                </div>
                <div class="plBlMoon">
                    <div id="plBlMoonItem" class="planetsItems displayNone ">
                        <h4 class="planetsItemsHeader">SMARTTOKEN</h4>
                        <p class="planetsItemsTxt planetsItemsTxt3 langtrans">Универсальный токен для использования
                            во всех сервисах команды Smart Team
                            на блокчейне The Open Network (TON)</p>
                        <a class="planetCenterItemTgBl" target="TRUE" href="https://t.me/thesmarttoken">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>thesmarttoken</p>
                        </a>
                    </div>
                    <img src="/img/planets/moon.svg" alt="">
                </div>
                <div class="plBlPurple">
                    <div id="plBlPurpleItem" class="planetsItems displayNone" style="min-width: 103%;max-width: unset;">
                        <h4 class="planetsItemsHeader">RESALEMARKET </h4>
                        <p class="planetsItemsTxt planetsItemsTxt4 langtrans">Cервис для крипто-энтузиастов
                            и IT предпринимателей,
                            которые занимаются продвижением
                            своих проектов, а также
                            перепродажей своих активов.</p>
                        <a class="planetCenterItemTgBl" target="TRUE" href="https://t.me/ResaleMarketBot">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>ResaleMarketBot</p>
                        </a>
                    </div>
                    <img src="/img/planets/purple.svg" alt="">
                </div>
                <div class="plBlOrange">
                    <div id="plBlOrangeItem" class="planetsItems displayNone">
                        <h4 class="planetsItemsHeader">SMARTTIGERS</h4>
                        <p class="planetsItemsTxt planetsItemsTxt5 langtrans">NFT-коллекция из 4999+ уникальных тигров,
                            которые олицетворяют своё комьюнити,
                            помогающее всё больше и больше
                            прогрессировать проекту с каждым днём.</p>
                        <a class="planetCenterItemTgBl" target="TRUE" href="https://t.me/SmartTigers">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>SmartTigers</p>
                        </a>
                    </div>
                    <img src="/img/planets/orange.svg" alt="">
                </div>
                <div class="plBlYelpurp">
                    <div id="plBlYelpurpItem" class="planetsItems displayNone ">
                        <h4 class="planetsItemsHeader">RESALENFT</h4>
                        <p class="planetsItemsTxt planetsItemsTxt6 langtrans">Проект помогает пользователям
                            безопасно совершать P2P сделки
                            по покупке/продаже НФТ на блокчейне TON.</p>
                        <a class="planetCenterItemTgBl" target="TRUE" href="https://t.me/resalenftbot">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>resalenftbot</p>
                        </a>
                    </div>
                    <img src="/img/planets/yelpurp.svg" alt="">
                </div>
                <div class="plBlRed">
                    <div id="plBlRedItem" class="planetsItems displayNone ">
                        <h4 class="planetsItemsHeader">SMARTTON</h4>
                        <p class="planetsItemsTxt planetsItemsTxt7 langtrans">Закрытый чат<br>
                            Комьюнити Smart TON.</p>
                        <a class="planetCenterItemTgBl" target="TRUE" href="https://t.me/SmartTigersHoldBot">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>SmartTigersHoldBot</p>
                        </a>
                    </div>
                    <img src="/img/planets/red.svg" alt="">
                </div>

                <div class="plBlYellow">
                    <div id="plBlYellowItem" class="planetsItems displayNone ">
                        <h4 class="planetsItemsHeader">CENTERTONA</h4>
                        <p class="planetsItemsTxt planetsItemsTxt8 langtrans">Инфоканал. Ежедневный Крипто Дайджест,
                            главные новости о TON, NFT, CRYPTO, AIRDROPS.</p>
                        <a class="planetCenterItemTgBl" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>CenterTONa</p>
                        </a>
                    </div>
                    <img src="/img/planets/yellow.svg" alt="">
                </div>
                <div class="plBlPink">
                    <div id="plBlPinkItem" class="planetsItems displayNone ">
                        <h4 class="planetsItemsHeader">THETONCHAT</h4>
                        <p class="planetsItemsTxt planetsItemsTxt9 langtrans">Общий чат Комьюнити TON.</p>
                        <a class="planetCenterItemTgBl" href="https://t.me/TheTonChat" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>TheTonChat</p>
                        </a>
                    </div>
                    <img src="/img/planets/pink.svg" alt="">
                </div>
            </div>
        </div>
        <section class="splide spliderPlMob plMobSwiper swiperPlMob">
            <div class=" splide__track">
                <ul class="splide__list">
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobBluePl" style="background-repeat: no-repeat !important;
    background-position: left !important;">
                            <h4 class="planetsItemsHeader">CENTERTONA</h4>
                            <p class="planetsItemsTxt planetsItemsTxt1 langtrans">Сервис в Telegram выступающий ресурсом
                                для начального взаимодействия между заказчиками
                                и исполнителями, между инвесторами и стартапами.
                                <br><br>
                                Скоро.
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobMoonPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                            <h4 class="planetsItemsHeader">SMARTTOKEN</h4>
                            <p class="planetsItemsTxt planetsItemsTxt2 langtrans">Универсальный токен для использования
                                во всех сервисах команды Smart Team
                                на блокчейне The Open Network (TON)</p>
                            <a class="planetCenterItemTgBl" href="https://t.me/thesmarttoken" target="TRUE">
                                <img src="/img/tgelegram.svg" alt="">
                                <p>thesmarttoken</p>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobPurpPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                            <h4 class="planetsItemsHeader">RESALEMARKET </h4>
                            <p class="planetsItemsTxt planetsItemsTxt3 langtrans">Cервис для крипто-энтузиастов
                                и IT предпринимателей,
                                которые занимаются продвижением
                                своих проектов, а также
                                перепродажей своих активов.</p>
                            <a class="planetCenterItemTgBl" href="https://t.me/ResaleMarketBot" target="TRUE">
                                <img src="/img/tgelegram.svg" alt="">
                                <p>ResaleMarketBot</p>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobOrangPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                            <h4 class="planetsItemsHeader">SMARTTIGERS</h4>
                            <p class="planetsItemsTxt planetsItemsTxt4 langtrans">NFT-коллекция из 4999+ уникальных
                                тигров,
                                которые олицетворяют своё комьюнити,
                                помогающее всё больше и больше
                                прогрессировать проекту с каждым днём.</p>
                            <a class="planetCenterItemTgBl" href="https://t.me/SmartTigers" target="TRUE">
                                <img src="/img/tgelegram.svg" alt="">
                                <p>SmartTigers</p>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobPurpYellPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                            <h4 class="planetsItemsHeader">RESALENFT</h4>
                            <p class="planetsItemsTxt planetsItemsTxt5 langtrans">Проект помогает пользователям
                                безопасно совершать P2P сделки
                                по покупке/продаже НФТ на блокчейне TON.</p>
                            <a class="planetCenterItemTgBl" href="https://t.me/resalenftbot" target="TRUE">
                                <img src="/img/tgelegram.svg" alt="">
                                <p>resalenftbot</p>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobRedPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                            <h4 class="planetsItemsHeader">SMARTTON</h4>
                            <p class="planetsItemsTxt planetsItemsTxt6 langtrans">Закрытый чат<br>
                                Комьюнити Smart TON.</p>
                            <a class="planetCenterItemTgBl" href="https://t.me/SmartTigersHoldBot" target="TRUE">
                                <img src="/img/tgelegram.svg" alt="">
                                <p>SmartTigersHoldBot</p>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobYelPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                            <h4 class="planetsItemsHeader">CENTERTONA</h4>
                            <p class="planetsItemsTxt planetsItemsTxt7 langtrans">Инфоканал. Ежедневный Крипто Дайджест,
                                главные новости о TON, NFT, CRYPTO, AIRDROPS.</p>
                            <a class="planetCenterItemTgBl" target="TRUE">
                                <img src="/img/tgelegram.svg" alt="">
                                <p>CenterTONa</p>
                            </a>
                        </div>
                    </li>
                    <li class="splide__slide swiperSlideSmartTiger UpSlMobW">
                        <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobPinkPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                            <h4 class="planetsItemsHeader">THETONCHAT</h4>
                            <p class="planetsItemsTxt planetsItemsTxt8 langtrans">Общий чат Комьюнити TON.</p>
                            <a class="planetCenterItemTgBl" href="https://t.me/TheTonChat" target="TRUE">
                                <img src="/img/tgelegram.svg" alt="">
                                <p>TheTonChat</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- <div class="swiper swiperPlMob "> -->
        <!-- Additional required wrapper -->
        <!-- <div class="swiper-wrapper">
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobBluePl" style="background-repeat: no-repeat !important;
    background-position: left !important;">
                        <h4 class="planetsItemsHeader">CENTERTONA</h4>
                        <p class="planetsItemsTxt planetsItemsTxt1 langtrans">Сервис в Telegram выступающий ресурсом
                            для начального взаимодействия между заказчиками
                            и исполнителями, между инвесторами и стартапами.
                            <br><br>
                            Скоро.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobMoonPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                        <h4 class="planetsItemsHeader">SMARTTOKEN</h4>
                        <p class="planetsItemsTxt planetsItemsTxt2 langtrans">Универсальный токен для использования
                            во всех сервисах команды Smart Team
                            на блокчейне The Open Network (TON)</p>
                        <a class="planetCenterItemTgBl" href="https://t.me/thesmarttoken" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>thesmarttoken</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobPurpPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                        <h4 class="planetsItemsHeader">RESALEMARKET </h4>
                        <p class="planetsItemsTxt planetsItemsTxt3 langtrans">Cервис для крипто-энтузиастов
                            и IT предпринимателей,
                            которые занимаются продвижением
                            своих проектов, а также
                            перепродажей своих активов.</p>
                        <a class="planetCenterItemTgBl" href="https://t.me/ResaleMarketBot" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>ResaleMarketBot</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobOrangPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                        <h4 class="planetsItemsHeader">SMARTTIGERS</h4>
                        <p class="planetsItemsTxt planetsItemsTxt4 langtrans">NFT-коллекция из 4999+ уникальных тигров,
                            которые олицетворяют своё комьюнити,
                            помогающее всё больше и больше
                            прогрессировать проекту с каждым днём.</p>
                        <a class="planetCenterItemTgBl" href="https://t.me/SmartTigers" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>SmartTigers</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobPurpYellPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                        <h4 class="planetsItemsHeader">RESALENFT</h4>
                        <p class="planetsItemsTxt planetsItemsTxt5 langtrans">Проект помогает пользователям
                            безопасно совершать P2P сделки
                            по покупке/продаже НФТ на блокчейне TON.</p>
                        <a class="planetCenterItemTgBl" href="https://t.me/resalenftbot" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>resalenftbot</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobRedPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                        <h4 class="planetsItemsHeader">SMARTTON</h4>
                        <p class="planetsItemsTxt planetsItemsTxt6 langtrans">Закрытый чат<br>
                            Комьюнити Smart TON.</p>
                        <a class="planetCenterItemTgBl" href="https://t.me/SmartTigersHoldBot" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>SmartTigersHoldBot</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobYelPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                        <h4 class="planetsItemsHeader">CENTERTONA</h4>
                        <p class="planetsItemsTxt planetsItemsTxt7 langtrans">Инфоканал. Ежедневный Крипто Дайджест,
                            главные новости о TON, NFT, CRYPTO, AIRDROPS.</p>
                        <a class="planetCenterItemTgBl" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>CenterTONa</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide swiperSlideSmartTiger UpSlMobW">
                    <div class="swiperSlideSmartTigerWrapper UpSlMob" id="mobPinkPl" style="background-repeat: no-repeat !important;
    background-position: right !important;">
                        <h4 class="planetsItemsHeader">THETONCHAT</h4>
                        <p class="planetsItemsTxt planetsItemsTxt8 langtrans">Общий чат Комьюнити TON.</p>
                        <a class="planetCenterItemTgBl" href="https://t.me/TheTonChat" target="TRUE">
                            <img src="/img/tgelegram.svg" alt="">
                            <p>TheTonChat</p>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="smartTokenBlBackPlanet">
            <img src="/img/backplanetsmarttoken.svg" alt="">
        </div>
        <div class="SmartTokenBL" id="SMARTTOKENYak">
            <div class="headersSTBl">
                <h1 class="headerSTBl">SMARTTOKEN</h1>
                <h3 class="headerSTBlMini">TOKENOMICS <br>
                    20 000 000 $SMART</h3>
            </div>
            <div class="mainSmartTokenBL">
                <div class="mainSmartTokenBLWrapper">
                    <p class="mainSmartTokenBLTxt langtrans">Универсальный токен для использования во всех сервисах
                        команды Smart
                        Team
                        на блокчейне TON.
                        <br><br>
                        Это внутренняя валюта во всех существующих проектах входящих в экосистему Smart Team.
                        Например,
                        токеном можно будет приобрести NFT Smart Tigers, оплатить комиссию в Resale Market, но
                        основной
                        задачей данного токена будет является оплата продвижения и дополнительных услуг в Smart
                        Working.
                        <br><br>
                        Со временем токен будет внедряться во все наши
                        и партнерские проекты как способ оплаты.
                    </p>
                    <div class="smttBack">
                        <div class="smttBackTitleWrapper">
                            <h6 class="smttBackH">SMART on TON Chain</h6>
                            <div id="SMARTonTONChain"><img style="cursor: pointer;" src="/img/copy.svg"
                                    alt=""></img><input type="text" class="dsn"
                                    value="EQB8OK7t8MPVHIJfxBgQhpRS8tSbC2Up-HVCSs70GEULQ6zM">
                            </div>

                        </div>
                        <p class="smttBackt">EQB8OK7t8M...70GEULQ6zM</p>
                    </div>
                </div>
                <img src="/img/st.svg" alt="" id="st">
            </div>
            <div class="SmartTokenBLAdds">
                <div class="SmartTokenBLAddsRow">
                    <div class="SmartTokenBLAddsRowItem">
                        <h6 class="SmartTokenBLAddsRowItemHeader SmartTokenBLAddsRowItemHeader1 langtrans">Общее
                            предложение</h6>
                        <p class="SmartTokenBLAddsRowItemText">20 000 000 SMART</p>
                    </div>
                    <div class="SmartTokenBLAddsRowItem">
                        <h6 class="SmartTokenBLAddsRowItemHeader SmartTokenBLAddsRowItemHeader2 langtrans">Сжигание</h6>
                        <p class="SmartTokenBLAddsRowItemText SmartTokenBLAddsRowItemText2 langtrans">Возможно</p>
                    </div>
                </div>
                <div class="SmartTokenBLAddsRow">
                    <div class="SmartTokenBLAddsRowItem">
                        <h6 class="SmartTokenBLAddsRowItemHeader SmartTokenBLAddsRowItemHeader3 langtrans">Тикерный
                            символ</h6>
                        <p class="SmartTokenBLAddsRowItemText">SMART</p>
                    </div>
                    <div class="SmartTokenBLAddsRowItem">
                        <h6 class="SmartTokenBLAddsRowItemHeader SmartTokenBLAddsRowItemHeader4 langtrans">Модель</h6>
                        <p class="SmartTokenBLAddsRowItemText SmartTokenBLAddsRowItemText4 langtrans">Дефляционная</p>
                    </div>
                </div>
                <div class="SmartTokenBLAddsRow">
                    <div class="SmartTokenBLAddsRowItem SmartTokenBLAddsRowItemOnesed">
                        <h6 class="SmartTokenBLAddsRowItemHeader SmartTokenBLAddsRowItemHeader5 langtrans">Как купить
                            SMART</h6>
                        <p class="SmartTokenBLAddsRowItemText SmartTokenBLAddsRowItemText5 langtrans">1.ICO токена при
                            первичной
                            покупки NFT только с
                            помощью -
                            <a target="TRUE" href="https://t.me/SmartTigersBot">https://t.me/SmartTigersBot</a> с
                            расчетом 1 NFT=1000
                            SMART.*Количество
                            ограниченно и
                            это
                            временное предложение действующее с 01.02.2023.<br>
                            2.Скоро
                        </p>
                    </div>
                </div>
                <div class="SmartTokenBLAddsRow">
                    <div class="SmartTokenBLAddsRowItem">
                        <h6 class="SmartTokenBLAddsRowItemHeader SmartTokenBLAddsRowItemHeader6 langtrans">Листинг</h6>
                        <p class="SmartTokenBLAddsRowItemText SmartTokenBLAddsRowItemText6 langtrans">Информация бует
                            обновляться
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hrS-R" id="SmartTigersYak">
        <div class="smartTigerBigPlanetBack">
            <img src="/img/backsmarttiger.svg" alt="">
        </div>
        <div class="smartTigerMoonBack">
            <img src="/img/backsmarttigermoon.svg" alt="">
        </div>
        <div class="smarttigers">
            <div class="smarttigersWrapper">
                <div class="smarttigersTexts">
                    <h1 class="smarttigersHeader">SMARTTIGERS</h1>
                    <div class="smarttigersText">
                        <p class="smarttigersTextSt langtrans">NFT-коллекция из 4999+ уникальных тигров, которые
                            олицетворяют
                            своё комьюнити, помогающее всё больше и больше прогрессировать
                            проекту с каждым днём. Коллекцию можно прокачивать из 2D до 3D,
                            а также добавлять свои надписи и лого. Этот проект нацелен
                            на развитие и разработку новых технологий и утилит на блокчейне TON.
                        </p>
                        <div>
                            <p class="smarttigersOrangeTxt langtrans">Цель SmartTigers</p>
                            <p class="smarttigersTextSt1  smarttigersTextSt1 langtrans">сделать свой продукт
                                инструментом, который сможет
                                помочь людям
                                в сфере их деятельности, а также привлечь аудиторию более
                                1 миллиона пользователей в проекты Smart Team.</p>
                        </div>
                    </div>
                    <a class="smarttigersBtn langtrans" href="https://t.me/SmartTigersBot" target="TRUE">Купить NFT</a>
                </div>
                <div class="smarttigersVideo">
                    <img src="/img/2d.svg" alt="" id="d2">
                    <video id="smtvid" src="/video/smarttiger.mp4" preload="auto" no-controls autoplay loop
                        muted></video>
                    <img src="/img/3d.svg" alt="" id="d3">
                </div>
                <div class="smarttigersOsnUtils">
                    <div class="smarttigersOsnUtilsHead">
                        <h3 class="smarttigersOsnUtilsHeader langtrans">Основные утилиты</h3>
                        <div class="smarttigersOsnUtilsHeaderSwipe">
                            <img src="/img/arrowleft.svg" alt="" id="smarttigerSliderPrev" class="smarttigerSliderPrev">
                            <p>swiper</p>
                            <img src="/img/arrowright.svg" alt="" id="smarttigerSliderNext"
                                class="smarttigerSliderNext">
                        </div>
                    </div>
                    <section class="splide splideTest">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide swiperSlideSmartTiger">
                                    <div class="swiperSlideSmartTigerWrapper">
                                        <h6 class="swiperSlideSmartTigerHeader">Smart Working</h6>
                                        <p class="swiperSlideSmartTigerTxt swiperSlideSmartTigerTxt1 langtrans">
                                            Платформа,
                                            которая даст возможность
                                            продвигать
                                            свои услуги, находить коллег, инвесторов и многое другое.
                                            SmartWorking поможет найти первые заказы
                                            для развивающихся фрилансеров, а для специалистов
                                            увеличить свою клиентуру, и для стартаперов найти
                                            своих подрядчиков. Доступ на платформу будет через
                                            верификацию по NFT.</p>
                                    </div>
                                </li>
                                <li class="splide__slide swiperSlideSmartTiger">
                                    <div class="swiperSlideSmartTigerWrapper">
                                        <h6 class="swiperSlideSmartTigerHeader ">Web
                                            App</h6>
                                        <p class="swiperSlideSmartTigerTxt swiperSlideSmartTigerTxt2 langtrans">Web App
                                            в
                                            Telegram с помощью которого
                                            Холдеры
                                            получат роялти в Toncoin со стекинга NFT из: <br><br>

                                            ✅ процента монетизации от канала CENTER TONA <br>
                                            ✅ процента от продаж NFT на вторичном рынке<br>
                                            ✅ подарки от команды
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide swiperSlideSmartTiger">
                                    <div class="swiperSlideSmartTigerWrapper">

                                        <h6 class="swiperSlideSmartTigerHeader">Smart
                                            TON</h6>
                                        <p class="swiperSlideSmartTigerTxt swiperSlideSmartTigerTxt3 langtrans">Закрытый
                                            чат
                                            Комьюнити SMARTTON.
                                            Первоисточник
                                            новостей наших проектов, прямое общение с командой. Обсуждаем The Open
                                            Network,
                                            делимся полезной информацией. Попасть в чат могут только холдеры NFT
                                            Smart
                                            Tigers.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide swiperSlideSmartTiger">
                                    <div class="swiperSlideSmartTigerWrapper">

                                        <h6 class="swiperSlideSmartTigerHeader swiperSlideSmartTigerHeader4 langtrans">
                                            Разработка
                                            проектов</h6>
                                        <p class="swiperSlideSmartTigerTxt swiperSlideSmartTigerTxt4 langtrans">Мы
                                            всегда в
                                            процессе
                                            поиска новых ниш
                                            для
                                            продвижения нашей экосистемы и поэтому разрабатываем проекты которые
                                            могут
                                            заинтересовать большое количество людей, во всех таких проектах у
                                            Холдеров будут
                                            привилегии, например как в Resale Market где с помощью NFT публикация
                                            объявлений без
                                            оплаты комиссии. Количество утилит со временем будет увеличиватьсяс
                                            помощью новых
                                            проектов.

                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- <div class="swiper swiperSmartTiger"> -->
                    <!-- Additional required wrapper -->
                    <!-- <div class="swiper-wrapper"> -->
                    <!-- Slides -->
                    <!-- <div class="swiper-slide swiperSlideSmartTiger"> -->

                    <!-- </div> -->
                    <!-- <div class="swiper-slide swiperSlideSmartTiger"> -->

                    <!-- </div> -->
                    <!-- <div class="swiper-slide swiperSlideSmartTiger"> -->

                    <!-- </div> -->
                    <!-- <div class="swiper-slide swiperSlideSmartTiger"> -->

                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->

                    <!-- If we need scrollbar -->
                    <!-- </div> -->
                    <!-- <div class="swiperTest">
                        <div class="swiperMyItem">
                            <h6 class="swiperMyItemHeader">Smart Working</h6>
                            <p class="swiperMyItemTxt">Платформа, которая даст возможность продвигать
                                свои услуги, находить коллег, инвесторов и многое другое.
                                SmartWorking поможет найти первые заказы
                                для развивающихся фрилансеров, а для специалистов
                                увеличить свою клиентуру, и для стартаперов найти
                                своих подрядчиков. Доступ на платформу будет через
                                верификацию по NFT.</p>
                        </div>
                    </div> -->
                    <div class="smarttigersOsnUtilsTgsWrapper">
                        <div class="smarttigersOsnUtilsTgs">
                            <a class="smarttigersOsnUtilsTgsItem" href="https://t.me/SmartTigersBot" target="TRUE">
                                <img src="/img/tg.svg" alt="">
                                <p class="smarttigersOsnUtilsTgsItemTxt smarttigersOsnUtilsTgsItemTxt1 langtrans">
                                    Первичный минт с ограниченным
                                    саплаем
                                    в 1500 NFT по 10 Toncoin</p>
                            </a>
                            <a class="smarttigersOsnUtilsTgsItem" href="https://t.me/SmartTigersAppBot" target="TRUE">
                                <img src="/img/tg.svg" alt="">
                                <p class="smarttigersOsnUtilsTgsItemTxt">Web App</p>
                            </a>
                        </div>
                        <div class="smarttigersOsnUtilsTgs">
                            <a class="smarttigersOsnUtilsTgsItem" href="https://t.me/SmartTigersHoldBot" target="TRUE">
                                <img src="/img/tg.svg" alt="">
                                <p class="smarttigersOsnUtilsTgsItemTxt smarttigersOsnUtilsTgsItemTxt3 langtrans">
                                    Верификация в
                                    чат Холдеров</p>
                            </a>
                            <a class="smarttigersOsnUtilsTgsItem" href="https://t.me/SmartTigers" target="TRUE">
                                <img src="/img/tg.svg" alt="">
                                <p class="smarttigersOsnUtilsTgsItemTxt smarttigersOsnUtilsTgsItemTxt4 langtrans">
                                    Основной канал</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hrS-R" id="RoadMapYak">
        <div class="roadMap">
            <div class="roadMapWrapper">
                <div class="smarttigersOsnUtilsHead">
                    <h3 class="smarttigersOsnUtilsHeader roadMapWrapperHeader langtrans">ДОРОЖНАЯ КАРТА ПРОЕКТА</h3>
                    <div class="smarttigersOsnUtilsHeaderSwipe">
                        <img src="/img/arrowleft.svg" alt="" id="roadMapSliderPrev">
                        <p>swiper</p>
                        <img src="/img/arrowright.svg" alt="" id="roadMapSliderNext">
                    </div>
                </div>
                <div class="roadMapMain">
                    <section class="splide splideRoad swiperRoadMap" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide swiperRoadMapSlide">
                                    <h3 class="swiperRoadMapSlideHeader q1 langtrans">Цель 1: 2022 Q3</h3>
                                    <img src="/img/RoadMapSlider/Complited.svg" alt="" class="swiperRoadMapSlideImg"
                                        id="swiperRoadMapSlideImg1">
                                </li>
                                <li class="splide__slide swiperRoadMapSlide">
                                    <h3 class="swiperRoadMapSlideHeader q2 langtrans">Цель 2: 2022-2023</h3>
                                    <img src="/img/RoadMapSlider/SecondSlideRoad.svg" alt=""
                                        class="swiperRoadMapSlideImg" id="swiperRoadMapSlideImg2">
                                </li>
                                <li class="splide__slide swiperRoadMapSlide">
                                    <h3 class="swiperRoadMapSlideHeader q3 langtrans">Цель 3: 2023</h3>
                                    <img src="/img/RoadMapSlider/ThreeSlide.svg" alt="" class="swiperRoadMapSlideImg"
                                        id="swiperRoadMapSlideImg3">
                                </li>
                                <li class="splide__slide swiperRoadMapSlide">
                                    <h3 class="swiperRoadMapSlideHeader q4 langtrans">Цель 4</h3>
                                    <img src="/img/RoadMapSlider/FourSlide.svg" alt="" class="swiperRoadMapSlideImg"
                                        id="swiperRoadMapSlideImg4">
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- <div class="swiper swiperRoadMap"> -->
                    <!-- Additional required wrapper -->
                    <!-- <div class="swiper-wrapper"> -->
                    <!-- Slides -->
                    <!-- <div class="swiper-slide swiperRoadMapSlide"> -->

                    <!-- </div> -->
                    <!-- <div class="swiper-slide swiperRoadMapSlide"> -->

                    <!-- </div> -->
                    <!-- <div class="swiper-slide swiperRoadMapSlide"> -->

                    <!-- </div> -->
                    <!-- <div class="swiper-slide swiperRoadMapSlide"> -->

                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                    <!-- </div> -->
                </div>
                <div class="roadMapFooter">
                    <p class="roadMapFooterTxt langtrans">В процессе реализации Road Map планируем продолжать
                        разрабатывать новые
                        проекты и активности,
                        не входящие в карту, но иметь отношение к команде, которые помогут нам достигать
                        поставленных
                        целей.</p>
                </div>
            </div>
        </div>
        <hr class="hrS-R" id="TeamYak">
        <div class="teamBlBack">
            <img src="/img/backteam.svg" alt="">
        </div>
        <div class="teamBl">
            <div class="teamWrapper">
                <h1 class="teamWrapperHeader langtrans">КОМАНДА</h1>
                <div class="teamWrapperMain">
                    <div class="teamWrapperMainItem teamWrapperMainItemAb">
                        <p class="teamWrapperMainItemAbout teamWrapperMainItemAboutText langtrans">Команда
                            разработчиков,
                            которые могут не только
                            хорошо создавать Telegram
                            ботов, сайты и привлекать
                            трафик, но и строить
                            качественный крипто-
                            проект на TON,
                            чем мы и занимаемся.</p>
                    </div>
                    <div class="teamWrapperMainItem ">
                        <h5 class="teamWrapperMainItemHeader">Ceoaleksandr</h5>
                        <p class="teamWrapperMainItemAbout">Founder / Artist / Dev</p>
                        <img class="teamWrapperMainItemImg" src="/img/ceoa.png" alt="">
                    </div>
                    <div class="teamWrapperMainItem">
                        <h5 class="teamWrapperMainItemHeader">Grigory V.</h5>
                        <p class="teamWrapperMainItemAbout">Dev</p>
                        <img class="teamWrapperMainItemImg" src="/img/grig.png" alt="">
                    </div>
                    <div class="teamWrapperMainItem">
                        <h5 class="teamWrapperMainItemHeader">Matthew P.</h5>
                        <p class="teamWrapperMainItemAbout">Dev</p>
                        <img class="teamWrapperMainItemImg" src="/img/mat.png" alt="">
                    </div>
                    <div class="teamWrapperMainItem">
                        <h5 class="teamWrapperMainItemHeader">Timofey C.</h5>
                        <p class="teamWrapperMainItemAbout">Community manager</p>
                        <img class="teamWrapperMainItemImg" src="/img/tim.png" alt="">
                    </div>
                    <div class="teamWrapperMainItem">
                        <h5 class="teamWrapperMainItemHeader">Konstantin D.</h5>
                        <p class="teamWrapperMainItemAbout">Designer</p>
                        <img class="teamWrapperMainItemImg" src="/img/cos.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr class="hrS-R" id="WhitePaperYak">
        <div class="whiteBookBack">
            <img src="/img/whitebook.svg" alt="">
        </div>
        <div class="whiteBook">
            <div class="whiteBookWrapper">
                <div class="whiteBookTxt">
                    <h1 class="whiteBookHeader langtrans">
                        БЕЛАЯ КНИГА
                    </h1>
                    <p class="whiteBookTxtTxt langtrans">
                        Документ, в котором содержится вся информация
                        о проекте и его стратегии. Здесь раскрывается идея
                        и назначение продукта, указываются этапы его
                        технической реализации и вывода на рынок,
                        раскрывается экономика проекта, описываются
                        преимущества инвестирования в него.
                    </p>
                    <a class="whiteBookBtn langtrans" href="smartteam.gitbook.io" target="TRUE">Открыть Белую Книгу</a>
                </div>
                <div class="whiteBookImg">
                    <img src="/img/whitebookimg.svg" alt="">
                </div>
            </div>
        </div>

    </main>
    <footer class="footer" id="LinksYak">
        <div class="footerHeader">
            <div class="FooterLogoWrapper">
                <img src="/img/logo.svg" alt="">
                <h2 class="footerHeaderHeader langtrans">Продукты Smart Team</h2>
            </div>
            <div class="FooterLogoWrapperTags">
                <div class="FooterLogoWrapperTagsItemsWrapper">
                    <a href="https://t.me/SmartTigers" class="FooterLogoWrapperTagsItems" target="TRUE">SmartTigers
                        <input type="text" class="dsn" value="SmartTigers"></a>
                    <a href="https://t.me/thesmarttoken" class="FooterLogoWrapperTagsItems" target="TRUE">TheSmartToken
                        <input type="text" class="dsn" value="TheSmartToken"></a>
                    <a href="https://t.me/SmartTigersHoldBot" class="FooterLogoWrapperTagsItems"
                        target="TRUE">SmartTigersHoldBot
                        <input type="text" class="dsn" value="SmartTigersHoldBot"></a>
                </div>
                <div class="FooterLogoWrapperTagsItemsWrapper">
                    <a href="https://t.me/ResaleMarketBot" class="FooterLogoWrapperTagsItems"
                        target="TRUE">ResaleMarketBot <input type="text" class="dsn" value="ResaleMarketBot"></a>
                    <a href="https://t.me/resalenftbot" class="FooterLogoWrapperTagsItems" target="TRUE">ResaleNFTBot
                        <input type="text" class="dsn" value="ResaleNFTBot"></a>
                    <a href="https://t.me/CenterTONa" class="FooterLogoWrapperTagsItems" target="TRUE">CenterTONa <input
                            type="text" class="dsn" value="CenterTONa"></a>
                    <a href="https://t.me/TheTonChat" class="FooterLogoWrapperTagsItems" target="TRUE">TheTONChat <input
                            type="text" class="dsn" value="TheTONChat"></a>
                </div>
            </div>
        </div>
        <div class="footerSocity">
            <a href="https://t.me/SmartTigers" target="TRUE"><img src="/img/tgelegram.svg" alt=""></a>
            <a href="https://t.me/thesmarttoken" target="TRUE"><img src="/img/tgelegram.svg" alt=""></a>
            <a href="https://vk.com/smarttigers" target="TRUE"><img src="/img/vk.svg" alt=""></a>
            <a href="https://twitter.com/tonnftteam" target="TRUE"><img src="/img/twitter.svg" alt=""></a>
        </div>
        <div class="footerAdedWrapper">
            <div class="footerAded">
                <p class="footerAdedTxt">Listing/Contact: <a target="TRUE"
                        href="info@smartteam.pro">info@smartteam.pro</a><br>
                    Telegram: @ceoprod</p>
                <p class="footerAdedTxt langtrans">© SMARTTEAM 2023. Все права защищены.</p>
                <p class="footerAdedTxt footerAdedTxtR">Based on TON.</p>
            </div>
        </div>
    </footer>
    <div class="textCopied  " style="display: none; top: 106%;">
        <p>Text copied</p>
    </div>
    <script src="/splide/splide.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> -->
    <script src="/js/langs.js"></script>
    <!-- <script src="/dist/bundle.js"></script> -->
    <script src="/js/script.js"></script>
</body>

</html>