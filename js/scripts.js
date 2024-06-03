// quando o scroll smooth no css não funciona (Tirar depois)
const menuLinks = document.querySelectorAll('header nav a[href ^= "/#"]')

function getDistanceFromTheTop(element) {
    const id = element.getAttribute('href')
    const idStrin = id.split('/')
    return document.querySelector(idStrin[1]).offsetTop
}

function scrollToSection(event) {
    event.preventDefault()
    const distanceFromTheTop = getDistanceFromTheTop(event.target) - 60
    smoothScrollTo(0, distanceFromTheTop)
}

menuLinks.forEach(link => {
    link.addEventListener('click', scrollToSection)
});

function smoothScrollTo(endX, endY, duration) {
    const startX = window.scrollX || window.pageXOffset;
    const startY = window.scrollY || window.pageYOffset;
    const distanceX = endX - startX;
    const distanceY = endY - startY;
    const startTime = new Date().getTime();
  
    duration = typeof duration !== "undefined" ? duration : 400;
  
    const easeInOutQuart = (time, from, distance, duration) => {
      if ((time /= duration / 2) < 1)
        return (distance / 2) * time * time * time * time + from;
      return (-distance / 2) * ((time -= 2) * time * time * time - 2) + from;
    };
  
    const timer = setInterval(() => {
      const time = new Date().getTime() - startTime;
      const newX = easeInOutQuart(time, startX, distanceX, duration);
      const newY = easeInOutQuart(time, startY, distanceY, duration);
      if (time >= duration) {
        clearInterval(timer);
      }
      window.scroll(newX, newY);
    }, 1000 / 60);
  }
// ------------------------------------------

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