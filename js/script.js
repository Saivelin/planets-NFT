document.addEventListener("DOMContentLoaded", (e) => {
    document.querySelectorAll(".FooterLogoWrapperTagsItems").forEach((el) => {
        el.addEventListener("click", (ev) => {
            el.querySelector("input").select()
            document.execCommand("copy");
        })
    })

})