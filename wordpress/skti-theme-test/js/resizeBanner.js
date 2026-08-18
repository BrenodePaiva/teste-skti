const screen = {
    large : null,
    medium: window.matchMedia('(max-width: 860px)'),
    small: window.matchMedia('(max-width: 450px)')
}

for (const [screenSize, mediaQuery] of Object.entries(screen)) {
    if (mediaQuery) mediaQuery.addEventListener('change', mqHandler)
}

function mqHandler() {
    const banner = document.querySelector('.service-banner')
    
    for (const [screenSize, mediaQuery] of Object.entries(screen)) {
        if (!mediaQuery || mediaQuery.matches) {
            if (screenSize == 'medium') {
                banner.style.backgroundSize = '100% 100%'
                banner.style.height = '300px'
            }
            else if(screenSize == 'small'){
                banner.style.height = '200px'
            }
            else if(screenSize == 'large'){
                banner.style.backgroundSize = 'cover'
                banner.style.height = '400px'
            }
        }
    }
}

mqHandler()