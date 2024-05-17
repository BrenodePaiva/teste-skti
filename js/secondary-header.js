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
