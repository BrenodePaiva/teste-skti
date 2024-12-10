document.addEventListener('DOMContentLoaded', function() {
    const imgLazy = document.querySelectorAll('img.lazy')

    function lazyLoad() {
        let scrollTop = window.pageYOffset

        imgLazy.forEach(img => {
            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src
                img.classList.remove('lazy')
            }
        });
    }

    document.addEventListener('scroll', lazyLoad)
})