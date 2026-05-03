document.addEventListener("DOMContentLoaded", function () {
    const topBar = document.getElementById("top-bar");
    const header = document.getElementById("header");

    function adjustHeader() {
        const st = window.scrollY || document.documentElement.scrollTop;

        if (st === 0) {
            topBar.style.top = "0";
            header.classList.remove("pt-1");
            header.classList.add("pt-4");
        } else {
            topBar.style.top = "-50px";
            header.classList.remove("pt-4");
            header.classList.add("pt-1");
            if (window.innerWidth <= 576) {
                header.classList.add("logo-scroll");
            } else {
                header.classList.remove("logo-scroll");
            }
        }
    }

    adjustHeader();
    window.addEventListener("scroll", adjustHeader);
});