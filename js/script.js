let blackTheme = true;

document.addEventListener("DOMContentLoaded", (e) => {
    Planetsdiv = document.createElement("div")
    if (window.innerWidth > 992) {
        const swiperRoadMap = new Swiper('.swiperRoadMap', {
            speed: 400,
            spaceBetween: 100,
            slidesPerView: "auto",
            slidesPerView: 2.9,
        });
    }
    else {
        const swiperRoadMap = new Swiper('.swiperRoadMap', {
            speed: 400,
            spaceBetween: 100,
            slidesPerView: "auto",
            slidesPerView: 1.7,
        });
    }
    document.querySelector("#roadMapSliderNext").addEventListener("click", (ev) => swiperRoadMap.slideNext())
    document.querySelector("#roadMapSliderPrev").addEventListener("click", (ev) => swiperRoadMap.slidePrev())
    const swiperSmartTiger = new Swiper('.swiperSmartTiger', {
        speed: 400,
        spaceBetween: 30,
        slidesPerView: "auto",
        slidesPerView: 3,
    });
    document.querySelector("#smarttigerSliderNext").addEventListener("click", (ev) => swiperSmartTiger.slideNext())
    document.querySelector("#smarttigerSliderPrev").addEventListener("click", (ev) => swiperSmartTiger.slidePrev())
    let corsLang = getOffsetSum(document.querySelector("#langToggle"))
    corsLang.top -= 120
    document.querySelector(".languageToggle").style.cssText = `top:${corsLang.top}px;left:${corsLang.left}px`
    document.querySelector("#langToggle").addEventListener("click", (ev) => {
        document.querySelector(".languageToggle").classList.toggle(".displayNone")
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
    document.querySelector('#themeToggle').addEventListener("click", themeToggle)
    document.querySelector(".plBlCenter").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlCenter'))
        console.log(document.querySelector('#planetCenterItem').style.cssText)
        coors.top -= 140
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#planetCenterItem').classList.toggle("oprev")
        document.querySelector('#planetCenterItem').style.cssText = css
        if (document.querySelector('#planetCenterItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#planetCenterItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#planetCenterItem').classList.toggle("displayNone")
        }
        document.querySelector('#planetCenterItem').classList.toggle("op")

    })
    document.querySelector(".plBlBlue").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlBlue'))
        console.log(document.querySelector('#plBlBlueItem').style.cssText)
        coors.top += 160
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlBlueItem').classList.toggle("oprev")
        document.querySelector('#plBlBlueItem').style.cssText = css
        if (document.querySelector('#plBlBlueItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlBlueItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlBlueItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlBlueItem').classList.toggle("op")

    })
    document.querySelector(".plBlMoon").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlMoon'))
        console.log(document.querySelector('#plBlMoonItem').style.cssText)
        coors.top += 160
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlMoonItem').classList.toggle("oprev")
        document.querySelector('#plBlMoonItem').style.cssText = css
        if (document.querySelector('#plBlMoonItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlMoonItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlMoonItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlMoonItem').classList.toggle("op")
    })
    document.querySelector(".plBlPurple").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlPurple'))
        console.log(document.querySelector('#plBlPurpleItem').style.cssText)
        coors.top -= 150
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlPurpleItem').classList.toggle("oprev")
        document.querySelector('#plBlPurpleItem').style.cssText = css
        if (document.querySelector('#plBlPurpleItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlPurpleItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlPurpleItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlPurpleItem').classList.toggle("op")
    })
    document.querySelector(".plBlOrange").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlOrange'))
        console.log(document.querySelector('#plBlOrangeItem').style.cssText)
        coors.top -= 165
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlOrangeItem').classList.toggle("oprev")
        document.querySelector('#plBlOrangeItem').style.cssText = css
        if (document.querySelector('#plBlOrangeItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlOrangeItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlOrangeItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlOrangeItem').classList.toggle("op")
    })
    document.querySelector(".plBlYelpurp").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlYelpurp'))
        console.log(document.querySelector('#plBlYelpurpItem').style.cssText)
        coors.top -= 165
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlYelpurpItem').classList.toggle("oprev")
        document.querySelector('#plBlYelpurpItem').style.cssText = css
        if (document.querySelector('#plBlYelpurpItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlYelpurpItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlYelpurpItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlYelpurpItem').classList.toggle("op")
    })
    document.querySelector(".plBlRed").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlRed'))
        console.log(document.querySelector('#plBlRedItem').style.cssText)
        coors.top -= 165
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlRedItem').classList.toggle("oprev")
        document.querySelector('#plBlRedItem').style.cssText = css
        if (document.querySelector('#plBlRedItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlRedItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlRedItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlRedItem').classList.toggle("op")
    })
    document.querySelector(".plBlYellow").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlYellow'))
        console.log(document.querySelector('#plBlYellowItem').style.cssText)
        coors.top -= 165
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlYellowItem').classList.toggle("oprev")
        document.querySelector('#plBlYellowItem').style.cssText = css
        if (document.querySelector('#plBlYellowItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlYellowItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlYellowItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlYellowItem').classList.toggle("op")
    })
    document.querySelector(".plBlPink").addEventListener("click", (ev) => {
        console.log("CL")
        coors = getOffsetSum(document.querySelector('.plBlPink'))
        console.log(document.querySelector('#plBlPinkItem').style.cssText)
        coors.top -= 165
        css = 'top: ' + coors.top + 'px; left: ' + coors.left + 'px;'
        document.querySelector('#plBlPinkItem').classList.toggle("oprev")
        document.querySelector('#plBlPinkItem').style.cssText = css
        if (document.querySelector('#plBlPinkItem').classList.contains('op')) {
            setTimeout((t) => {
                document.querySelector('#plBlPinkItem').classList.toggle("displayNone")
            }, 100)
        }
        else {
            document.querySelector('#plBlPinkItem').classList.toggle("displayNone")
        }
        document.querySelector('#plBlPinkItem').classList.toggle("op")
    })


    //ADAPT
})

function themeToggle() {
    console.log("theme")
    document.querySelector("body").style.cssText = "background-color: #E0E1DD;"
    document.querySelector(".header").style.cssText = "background-color: #E0E1DD;"
    document.querySelector(".headerItemF").querySelector('img').style.cssText = "filter: invert(1);"
    document.querySelectorAll("p").forEach((el) => { el.style.cssText += "color: black;" })
    document.querySelectorAll("h1").forEach((el) => { el.style.cssText += "color: black;" })
    document.querySelectorAll("h2").forEach((el) => { el.style.cssText += "color: black;" })
    document.querySelectorAll("h3").forEach((el) => { el.style.cssText += "color: black;" })
    document.querySelectorAll("h4").forEach((el) => { el.style.cssText += "color: black;" })
    document.querySelectorAll("h5").forEach((el) => { el.style.cssText += "color: black;" })
    document.querySelectorAll("h6").forEach((el) => { el.style.cssText += "color: black;" })
    document.querySelectorAll("div").forEach((el) => { el.style.cssText += "color: black;" })
    blackTheme = !blackTheme
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
