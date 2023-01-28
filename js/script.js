let blackTheme = true;

document.addEventListener("DOMContentLoaded", (e) => {
    const swiperRoadMap = new Swiper('.swiperRoadMap', {
        speed: 400,
        spaceBetween: 100,
        slidesPerView: "auto",
        slidesPerView: 1.9,
    });
    document.querySelector("#roadMapSliderNext").addEventListener("click", (ev) => swiperRoadMap.slideNext())
    document.querySelector("#roadMapSliderPrev").addEventListener("click", (ev) => swiperRoadMap.slidePrev())
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

})

function themeToggle() {
    console.log("theme")
    document.querySelector("body").style.cssText = "background-color: #E0E1DD;"
    blackTheme = !blackTheme
}