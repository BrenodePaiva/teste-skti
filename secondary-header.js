window.onscroll = () => {
    const changeBackgroud = document.querySelector('header')
    const sections = document.querySelectorAll('section')
    const navLinks = document.querySelectorAll('header nav a')

    if (window.pageYOffset > 1) {
        changeBackgroud.classList.add('blur')
    }
    if (window.pageYOffset <= 1) {
        changeBackgroud.classList.remove('blur')
    }

    sections.forEach(sec => {
        const top = window.scrollY
        const offset = sec.offsetTop - 100
        const height = sec.offsetHeight
        const id = sec.getAttribute('id')

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active')
                document
                .querySelector('header nav a[href*=' + id + ']')
                .classList.add('active')
          })
        }
    })
}

const toggleOpen = document.querySelector('.bi.bi-list.to')
const nav = document.querySelector('nav')
const toggleClose = document.querySelector('.bi.bi-x-square')

function navToggleOpen() {
    toggleOpen.classList.add('toggle')
    toggleClose.classList.add('nav-toggle-close')
    nav.classList.add('nav-open')
    
}


function navToggleClose() {
    toggleOpen.classList.remove('toggle')
    toggleClose.classList.remove('nav-toggle-close')
    nav.classList.remove('nav-open')
}

toggleOpen.addEventListener('click', navToggleOpen)
toggleClose.addEventListener('click', navToggleClose)

// ajustando o tamanho do banner do serviços
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
//------------------------------------------


const date = new Date()
const currentYear = date.getFullYear()
document.getElementById('current-year').innerHTML = currentYear + '&nbsp;'