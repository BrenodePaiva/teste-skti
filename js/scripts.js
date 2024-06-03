window.onscroll = () => {
const changeBackgroud = document.querySelector('header')
const sections = document.querySelectorAll('section')
const navLinks = document.querySelectorAll('header nav a')
const linskBack = document.querySelector('.link-back')

    if (window.pageYOffset > 150) {
        changeBackgroud.classList.add('blur')
        linskBack.style.opacity = 1
    }
    if (window.pageYOffset <= 150) {
        changeBackgroud.classList.remove('blur')
        linskBack.style.opacity = 0
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



const date = new Date()
const currentYear = date.getFullYear()
document.getElementById('current-year').innerHTML = '&nbsp;' + currentYear + '&nbsp;'