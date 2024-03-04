document.addEventListener("scroll", function () {
    const revealElements = document.querySelectorAll(".revealUp");

    revealElements.forEach((element) => {
        if (isElementInViewport(element)) {
            element.classList.add("fadeIn");
        }
    });
});

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    const windowHeight =
        window.innerHeight || document.documentElement.clientHeight;
    const bottomThreshold =
        window.innerWidth < 768 ? windowHeight * 0.8 : windowHeight;

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= bottomThreshold &&
        rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    );
}
