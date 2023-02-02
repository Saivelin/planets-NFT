// import {
//     Swiper,
//     Navigation,
//     Pagination,
//     Scrollbar,
//     EffectCoverflow
// } from 'swiper/dist/js/swiper.esm.js';
// import 'swiper/css/bundle';
// Swiper.use([Navigation, Pagination, Scrollbar, EffectCoverflow]);
let blackTheme = true;
let swiperRoadMap;
let swiperSmartTiger;
let lang = 0
document.addEventListener("DOMContentLoaded", (e) => {
    Planetsdiv = document.createElement("div")
    swiperRoadMap = new Swiper('.swiperRoadMap', {
        speed: 400,
        spaceBetween: 100,
        slidesPerView: "auto",
        slidesPerView: 2.9,
        breakpoints: {// настройки для разных разрешений
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            991: {
                slidesPerView: 1.7,
            },
            1192: {
                slidesPerView: 3,
            }
        },
        grabCursor: true,
    });
    document.querySelector("#roadMapSliderPrev").addEventListener("click", (ev) => swiperRoadMap.slidePrev())
    document.querySelector("#roadMapSliderNext").addEventListener("click", (ev) => swiperRoadMap.slideNext())

    swiperSmartTiger = new Swiper('.swiperSmartTiger', {
        speed: 400,
        spaceBetween: 30,
        slidesPerView: "auto",
        slidesPerView: 3,
        breakpoints: {// настройки для разных разрешений
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
        },
        grabCursor: true,
        allowTouchMove: true,
    });
    swiperSmartTiger.allowTouchMove = true;
    document.querySelector("#smarttigerSliderNext").addEventListener("click", (ev) => swiperSmartTiger.slideNext())
    document.querySelector("#smarttigerSliderPrev").addEventListener("click", (ev) => swiperSmartTiger.slidePrev())
    console.log(window.innerWidth)

    plMobSwiper = new Swiper(".swiperPlMob", {
        speed: 400,
        spaceBetween: 0,
        slidesPerView: "auto",
        slidesPerView: 1,
    })


    let corsLang = getOffsetSum(document.querySelector("#langToggle"))
    corsLang.top -= 120
    // document.querySelector(".languageToggle").style.cssText = `top:${corsLang.top}px;left:${corsLang.left}px`
    document.querySelector("#langToggle").addEventListener("click", (ev) => {
        document.querySelector(".langtogwrap").classList.toggle("displayNone")
    })
    document.querySelectorAll(".FooterLogoWrapperTagsItems").forEach((el) => {
        el.addEventListener("click", (ev) => {
            el.querySelector("input").select()
            document.execCommand("copy");
            document.querySelector('.textCopied').classList.remove("down")
            document.querySelector('.textCopied').classList.add('up')
            document.querySelector('.textCopied').style.cssText = "display: block; top: 93%;"
            setTimeout((ev) => {
                document.querySelector('.textCopied').classList.remove("up")
                document.querySelector('.textCopied').classList.add("down")
                setTimeout((ev) => {
                    document.querySelector('.textCopied').style.cssText = "display: none; top: 106%;"
                }, 1000)
            }, 3000)
        })
    })
    document.querySelector("#SMARTonTONChain").addEventListener('click', (ev) => {
        console.log(ev.target.parentElement)
        ev.target.parentElement.querySelector("input").select()
        document.execCommand("copy");
        document.querySelector('.textCopied').classList.remove("down")
        document.querySelector('.textCopied').classList.add('up')
        document.querySelector('.textCopied').style.cssText = "display: block; top: 93%;"
        setTimeout((ev) => {
            document.querySelector('.textCopied').classList.remove("up")
            document.querySelector('.textCopied').classList.add("down")
            setTimeout((ev) => {
                document.querySelector('.textCopied').style.cssText = "display: none; top: 106%;"
            }, 1000)
        }, 3000)
    })
    document.querySelector('#themeToggle').addEventListener("click", (ev) => {
        themeToggle();
    })
    // document.querySelector(".plBlCenter").addEventListener("click", (ev) => {
    //     console.log("CL")
    //     coors = getOffsetSum(document.querySelector('.plBlCenter'))
    //     console.log(document.querySelector('#planetCenterItem').style.cssText)
    //     coors.top -= 140
    //     css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    //     document.querySelector('#planetCenterItem').classList.toggle("oprev")
    //     document.querySelector('#planetCenterItem').style.cssText = css
    //     if (document.querySelector('#planetCenterItem').classList.contains('op')) {
    //         setTimeout((t) => {
    //             document.querySelector('#planetCenterItem').classList.toggle("displayNone")
    //         }, 100)
    //     }
    //     else {
    //         document.querySelector('#planetCenterItem').classList.toggle("displayNone")
    //     }
    //     document.querySelector('#planetCenterItem').classList.toggle("op")

    // })
    //LANG
    document.querySelectorAll(".languageToggleItem").forEach((el) => {
        el.addEventListener("click", (ev) => {
            // el.style.cssText = "background-color: rgb(39, 58, 82);"
            document.querySelectorAll(".languageToggleItem").forEach((ell) => {
                console.log(ell)
                console.log(el)
                console.log(document.querySelectorAll(".languageToggleItem"))
                if (el.id == ell.id) {
                    el.style.cssText = "background-color: rgb(39, 58, 82); "
                    el.querySelector("p").style.cssText = "color: white !important;"
                }
                else {
                    el.querySelector("p").style.cssText = ""
                    el.style.cssText = ""
                }
            })
        })
    })
    document.querySelectorAll(".languageToggleItem").forEach((el) => {
        el.addEventListener("click", (ev) => {

            lang = ev.target.id;
            if (lang == "en") { lang = 1 }
            else if (lang == 'ru') { lang = 0 }
            document.querySelectorAll(".langtrans").forEach((elementToggling) => {
                Object.keys(langArr).forEach((langArrItem) => {
                    // for (let langArrItem in langArr) {
                    // langArr.map((langArrItem) => {
                    if (elementToggling.classList.contains(langArrItem)) {
                        elementToggling.innerHTML = langArr[langArrItem][lang];
                    }
                })
                // }
                // })
            })
            if (blackTheme == false) {
                if (lang == 0) {
                    document.querySelector("#st").setAttribute("src", "/img/whiteTheme/st.svg")
                    document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/whiteTheme/RoadMapSlider/Complited.svg")
                    document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/whiteTheme/RoadMapSlider/SecondSlideRoad.svg")
                    document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/whiteTheme/RoadMapSlider/ThreeSlide.svg")
                    document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/whiteTheme/RoadMapSlider/FourSlide.svg")
                }
                else {
                    document.querySelector("#st").setAttribute("src", "/img/whiteTheme/sten.svg")
                    document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/Complited.svg")
                    document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/SecondSlideRoad.svg")
                    document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/ThreeSlide.svg")
                    document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/FourSlide.svg")
                }
            }
            else {
                if (lang == 0) {
                    document.querySelector("#st").setAttribute("src", "/img/st.svg")
                    document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/RoadMapSlider/Complited.svg")
                    document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/RoadMapSlider/SecondSlideRoad.svg")
                    document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/RoadMapSlider/ThreeSlide.svg")
                    document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/RoadMapSlider/FourSlide.svg")
                }
                else {
                    document.querySelector("#st").setAttribute("src", "/img/sten.svg")
                    document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/RoadMapSlider/en/Complited.svg")
                    document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/RoadMapSlider/en/SecondSlideRoad.svg")
                    document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/RoadMapSlider/en/ThreeSlide.svg")
                    document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/RoadMapSlider/en/FourSlide.svg")
                }
            }
            console.log(lang)
            console.log(blackTheme)

            stRep()
        }
        )
    })


    console.log("CL")
    coors = getOffsetSum(document.querySelector('.plBlBlue'))
    console.log(document.querySelector('#plBlBlueItem').style.cssText)
    coors.top += 80
    coors.left += 80
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlBlueItem').style.cssText = css

    coors = getOffsetSum(document.querySelector('.plBlMoon'))
    console.log(document.querySelector('#plBlMoonItem').style.cssText)
    coors.left += 80
    coors.top += 80
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlMoonItem').style.cssText = css
    coors = getOffsetSum(document.querySelector('.plBlPurple'))
    console.log(document.querySelector('#plBlPurpleItem').style.cssText)
    coors.left = 80
    coors.top = 75
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlPurpleItem').style.cssText += css
    coors = getOffsetSum(document.querySelector('.plBlOrange'))
    console.log(document.querySelector('#plBlOrangeItem').style.cssText)
    coors.left += 80
    coors.top -= 122.5
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlOrangeItem').style.cssText = css
    coors = getOffsetSum(document.querySelector('.plBlYelpurp'))
    coors.left += 80
    coors.top -= 102.5
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlYelpurpItem').style.cssText = css
    coors = getOffsetSum(document.querySelector('.plBlRed'))
    coors.left += 80
    coors.top -= 85
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlRedItem').style.cssText = css
    coors = getOffsetSum(document.querySelector('.plBlYellow'))
    coors.left += 80
    coors.top -= 85
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlYellowItem').style.cssText = css
    coors = getOffsetSum(document.querySelector('.plBlPink'))
    coors.left += 80
    coors.top -= 85
    css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
    document.querySelector('#plBlPinkItem').style.cssText = css


    //ADAPT
    document.querySelector('.mobileBurgerWrapper').querySelector("img").addEventListener("click", (e) => {
        console.log('cl')
        document.body.style.overflow = "hidden"
        document.querySelector('.navigationMobile').classList.toggle("toleft")
        document.querySelector('.navigationMobile').classList.toggle('toright')
        document.querySelector('.navigationMobile').style.cssText = ''
    })
    let coorsVid = getOffsetSum(document.querySelector(".smarttigersVideo"))
    document.querySelector("#d3").style.cssText = `top: ${coorsVid.top + (document.querySelector("#smtvid").offsetHeight / 100) * 160}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 90)}px;`
    document.querySelector("#d2").style.cssText = `top: ${coorsVid.top - (((document.querySelector("#smtvid").offsetHeight) / 100) * 10)}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 10)}px;`
    if (window.innerWidth <= 480) {
        document.querySelector("#d3").style.cssText = `top: ${coorsVid.top + (document.querySelector("#smtvid").offsetHeight / 100) * 90}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 90)}px;`
        document.querySelector("#d2").style.cssText = `top: ${coorsVid.top - (((document.querySelector("#smtvid").offsetHeight) / 100) * 10)}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 10)}px;`
        document.querySelector(".swiperPlMob").classList.remove("displayNone")
        console.log('res')
        document.querySelector(".headerItemF").innerHTML = "<img src='/img/mobileLogoHeader.svg' alt='f'/>"
        document.addEventListener("scroll", (ev) => {
            console.log(window)
            if (window.scrollY <= 100) {
                setTimeout((t) => {
                    document.querySelector(".headerItemF").classList.remove("displayNone")
                    document.querySelector(".mobileBurgerWrapper").style.cssText = ""
                }, 400)
            }
            else {
                if (!document.querySelector(".headerItemF").classList.contains("displayNone")) {
                    document.querySelector(".headerItemF").classList.add("displayNone")
                }
                document.querySelector(".mobileBurgerWrapper").style.cssText = "grid-column-start: 2;grid-column-end: 3;"
            }
        })
    }
    else {
        document.querySelector(".headerItemF").innerHTML = "<img src='/img/logo.svg' alt='f'/>"
    }

    window.addEventListener("resize", (ev) => {
        console.log("FDF")
        coorsVid = getOffsetSum(document.querySelector(".smarttigersVideo"))
        document.querySelector("#d3").style.cssText = `top: ${coorsVid.top + (document.querySelector("#smtvid").offsetHeight / 100) * 90}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 90)}px;`
        document.querySelector("#d2").style.cssText = `top: ${coorsVid.top - (((document.querySelector("#smtvid").offsetHeight) / 100) * 10)}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 10)}px;`
        if (window.innerWidth <= 480) {

            console.log('res')
            document.querySelector(".headerItemF").innerHTML = "<img src='/img/mobileLogoHeader.svg' alt='f'/>"
        }
        else {
            document.querySelector(".headerItemF").innerHTML = "<img src='/img/logo.svg' alt='f'/>"
        }
    })
    window.addEventListener("orientationchange", function () {
        console.log("FDF")
        coorsVid = getOffsetSum(document.querySelector(".smarttigersVideo"))
        document.querySelector("#d3").style.cssText = `top: ${coorsVid.top + (document.querySelector("#smtvid").offsetHeight / 100) * 90}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 90)}px;`
        document.querySelector("#d2").style.cssText = `top: ${coorsVid.top - (((document.querySelector("#smtvid").offsetHeight) / 100) * 10)}px; left: ${coorsVid.left + ((document.querySelector("#smtvid").offsetWidth / 100) * 10)}px;`
        if (window.innerWidth <= 480) {

            console.log('res')
            document.querySelector(".headerItemF").innerHTML = "<img src='/img/logo.svg' alt='f'/>"
        }
        else {
            document.querySelector(".headerItemF").innerHTML = "<img src='/img/mobileLogoHeader.svg' alt='f'/>"
        }
    }, false);
    document.querySelectorAll(".headerItemM").forEach((el) => {
        el.addEventListener("click", (ev) => {
            document.body.style.overflow = ""
            document.querySelector('.navigationMobile').classList.toggle("toleft")
            document.querySelector('.navigationMobile').classList.toggle('toright')
        })
    })
    document.querySelector(".closeMN").addEventListener("click", (ev) => {
        document.body.style.overflow = ""
        document.querySelector('.navigationMobile').classList.toggle("toleft")
        document.querySelector('.navigationMobile').classList.toggle('toright')
    })
})
let l = document.createElement("link")
function themeToggle() {
    blackTheme = !blackTheme
    console.log(lang)
    console.log(blackTheme)
    console.log(document.querySelector("#langToggle").querySelector("img"))
    if (blackTheme != true) {
        console.log("theme")
        l.setAttribute("rel", "stylesheet")
        l.setAttribute("href", "/css/whitetheme.css")
        document.querySelector("head").append(l)
        document.querySelector("#themeToggle").querySelector("img").setAttribute("src", "/img/whiteTheme/moon.svg")
        document.querySelector(".headerItemF").querySelector("img").setAttribute("src", "/img/whiteTheme/logo.svg")
        document.querySelector("#langToggle").querySelector("img").setAttribute("src", "/img/whiteTheme/globe.svg")
        document.querySelector(".FooterLogoWrapper").querySelector("img").setAttribute("src", "/img/whiteTheme/logo.svg")

        document.querySelectorAll(".swiperRoadMapSlideImg").forEach((el, i) => {
            if (i == 0) {
                el.setAttribute("src", "/img/whiteTheme/RoadMapSlider/Complited.svg")
            }
            else if (i == 1) {
                el.setAttribute("src", "/img/whiteTheme/RoadMapSlider/SecondSlideRoad.svg")
            }
            else if (i == 2) {
                el.setAttribute("src", "/img/whiteTheme/RoadMapSlider/ThreeSlide.svg")
            }
            else if (i == 3) {
                el.setAttribute("src", "/img/whiteTheme/RoadMapSlider/FourSlide.svg")
            }
        })
        if (lang == 0) {
            document.querySelector("#st").setAttribute("src", "/img/whiteTheme/st.svg")
            document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/whiteTheme/RoadMapSlider/Complited.svg")
            document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/whiteTheme/RoadMapSlider/SecondSlideRoad.svg")
            document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/whiteTheme/RoadMapSlider/ThreeSlide.svg")
            document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/whiteTheme/RoadMapSlider/FourSlide.svg")
        }
        else {
            document.querySelector("#st").setAttribute("src", "/img/whiteTheme/sten.svg")
            document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/Complited.svg")
            document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/SecondSlideRoad.svg")
            document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/ThreeSlide.svg")
            document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/whiteTheme/RoadMapSlider/en/FourSlide.svg")
        }
    }
    else {
        document.querySelector("#langToggle").querySelector("img").setAttribute("src", "/img/globe.svg")
        document.querySelector(".headerItemF").querySelector("img").setAttribute("src", "/img/logo.svg")
        document.querySelector(".FooterLogoWrapper").querySelector("img").setAttribute("src", "/img/logo.svg")
        if (lang == 0) {
            document.querySelector("#st").setAttribute("src", "/img/st.svg")
            document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/RoadMapSlider/Complited.svg")
            document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/RoadMapSlider/SecondSlideRoad.svg")
            document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/RoadMapSlider/ThreeSlide.svg")
            document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/RoadMapSlider/FourSlide.svg")
        }
        else {
            document.querySelector("#st").setAttribute("src", "/img/sten.svg")
            document.querySelector("#swiperRoadMapSlideImg1").setAttribute("src", "/img/RoadMapSlider/en/Complited.svg")
            document.querySelector("#swiperRoadMapSlideImg2").setAttribute("src", "/img/RoadMapSlider/en/SecondSlideRoad.svg")
            document.querySelector("#swiperRoadMapSlideImg3").setAttribute("src", "/img/RoadMapSlider/en/ThreeSlide.svg")
            document.querySelector("#swiperRoadMapSlideImg4").setAttribute("src", "/img/RoadMapSlider/en/FourSlide.svg")
        }
        document.querySelector("#themeToggle").querySelector("img").setAttribute("src", "/img/sunny.svg")

        l.remove()
    }
    // document.querySelector("body").style.cssText = "background-color: #E0E1DD;"
    // document.querySelector(".header").style.cssText = "background-color: #E0E1DD;"
    // document.querySelector(".headerItemF").querySelector('img').style.cssText = "filter: invert(1);"
    // document.querySelectorAll("p").forEach((el) => { el.style.cssText += "color: black;" })
    // document.querySelectorAll("h1").forEach((el) => { el.style.cssText += "color: black;" })
    // document.querySelectorAll("h2").forEach((el) => { el.style.cssText += "color: black;" })
    // document.querySelectorAll("h3").forEach((el) => { el.style.cssText += "color: black;" })
    // document.querySelectorAll("h4").forEach((el) => { el.style.cssText += "color: black;" })
    // document.querySelectorAll("h5").forEach((el) => { el.style.cssText += "color: black;" })
    // document.querySelectorAll("h6").forEach((el) => { el.style.cssText += "color: black;" })
    // document.querySelectorAll("div").forEach((el) => { el.style.cssText += "color: black;" })
    console.log(blackTheme)
}
console.log(getOffsetSum(document.querySelector(".planetsItems")))
function getOffsetSum(elem) {
    var top = 0, left = 0
    while (elem) {
        top = top + parseFloat(elem.offsetTop)
        left = left + parseFloat(elem.offsetLeft)
        elem = elem.offsetParent
    }
    return { top: Math.round(top), left: Math.round(left) }
}

function stRep() {
    if (blackTheme != true) {
        if (lang == 0) {
            document.querySelector("#st").setAttribute("src", "/img/whiteTheme/st.svg")
        }
        else {
            document.querySelector("#st").setAttribute("src", "/img/whiteTheme/sten.svg")
        }
    }
    else {
        if (lang == 0) {
            document.querySelector("#st").setAttribute("src", "/img/st.svg")
        }
        else {
            document.querySelector("#st").setAttribute("src", "/img/sten.svg")
        }
    }
}