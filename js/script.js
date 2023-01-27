document.addEventListener("DOMContentLoaded", (e) => {
    document.querySelectorAll(".FooterLogoWrapperTagsItems").forEach((el) => {
        el.addEventListener("click", (ev) => {
            el.querySelector("input").select()
            document.execCommand("copy");
        })
    })
    document.querySelector("#SMARTonTONChain").addEventListener('click', (ev) => {
        console.log(ev.target.parentElement)
        ev.target.parentElement.querySelector("input").select()
        document.execCommand("copy");
    })
})