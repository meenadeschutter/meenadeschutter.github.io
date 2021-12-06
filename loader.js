const preloader = document.querySelector('.preloader');

const fadeEffect = setInterval(() => {
    // if we don't set opacity 1 in CSS, then   //it will be equaled to "", that's why we   // check it
    if (!preloader.style.opacity) {
        preloader.style.opacity = 1;
    }
    setTimeout(function() {
        if (preloader.style.opacity > 0) {
            preloader.style.opacity -= 0.3;
        } else {
            clearInterval(fadeEffect);
        }
    }, 2000);
}, 100);

window.addEventListener('load', fadeEffect);