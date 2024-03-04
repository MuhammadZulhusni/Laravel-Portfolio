document.addEventListener("DOMContentLoaded", function () {
    var revealElements = document.querySelectorAll(".revealUp");

    revealElements.forEach(function (elem) {
        if (isElementInViewport(elem)) {
            elem.classList.add("fadeIn");
        }
    });

    window.addEventListener("scroll", function () {
        revealElements.forEach(function (elem) {
            if (isElementInViewport(elem)) {
                elem.classList.add("fadeIn");
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <=
                (window.innerWidth || document.documentElement.clientWidth)
        );
    }
});
