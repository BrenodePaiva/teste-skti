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

// const form = document.querySelector('form')
const fullname = document.getElementById('name')
// const email = document.getElementById('email')
// const phone = document.getElementById('phone')
const message = document.getElementById('message')

const form = document.getElementById('form');
const button = document.getElementById('button');

function checkInputs() {
   const items = document.querySelectorAll('.item')

   for (const item of items) {
      if (item.value == "") {
         item.classList.add('error')
         item.parentElement.classList.add('error')

      }

      item.addEventListener('keyup', () => {
         if (item.value != "") {
            item.classList.remove('error')
            item.parentElement.classList.remove('error')

         } else {
            item.classList.add('error')
            item.parentElement.classList.add('error')
         }
      })
   }
}

form.addEventListener('submit', function(e) {
    const formData = new FormData(form);
    e.preventDefault();
    checkInputs()

    const object = Object.fromEntries(formData);
    const json = JSON.stringify(object);

    button.innerHTML = '<i class="fa fa-refresh fa-spin"></i>'

    if (fullname.classList.contains('error') &&
    message.classList.contains('error')) {
      Swal.fire({
                  title: 'Error!',
                  text: 'Preencha todos os campos',
                  icon: 'error',
                  confirmButtonText: 'Ok'
      })
      return setTimeout(() => {
         button.innerHTML = 'Enviar'
      }, 1000)
    }

    fetch('https://api.web3forms.com/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: json
        })
        .then(async (response) => {
            if (response.status == 200) {
               Swal.fire({
                  title: 'Success!',
                  text: 'Sua mensagem foi enviada',
                  icon: 'success',
                  confirmButtonText: 'Ok'
                })

            } else {
                Swal.fire({
                  title: 'Error!',
                  text: 'Alguma coisa deu errado, tente novamente mais tarde',
                  icon: 'error',
                  confirmButtonText: 'Ok'
                })
            }
        })
        .catch(error => {
            console.log(error);
            Swal.fire({
               title: 'Error!',
               text: `Alguma coisa deu errado, tente novamente mais tarde. Codigo: ${error}`,
               icon: 'error',
               confirmButtonText: 'Ok'
             })
        })
        .then(function() {
            form.reset();
            button.innerHTML = 'Enviar'
            // setTimeout(() => {
            //     result.style.display = "none";
            // }, 3000);
        });
});

const date = new Date()
const currentYear = date.getFullYear()
document.getElementById('current-year').innerHTML = currentYear + '&nbsp;'


// const slideImage = document.querySelectorAll('#img')
// const next = document.querySelector('.next')
// const prev = document.querySelector('.prev')
// const dots = document.querySelectorAll('.dot')
// let counter = 0

// function indicators() {
//     for (let i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(' dot-active', '')
//     }
//     dots[counter].className += ' dot-active'
// }

// function switchImage(currentImage) {
//     currentImage.classList.add('dot-active')
//     const imageId = currentImage.getAttribute('attr')

//     if (imageId > counter) {
//         slideImage[counter].style.animation = 'next1 0.5s ease-in forwards'
//         counter = imageId
//         slideImage[counter].style.animation = 'next2 0.5s ease-in forwards'
//     }

//     else if (imageId == counter) {
//         return
//     }

//     else{
//         slideImage[counter].style.animation = 'prev1 0.5s ease-in forwards'
//         counter = imageId
//         slideImage[counter].style.animation = 'prev2 0.5s ease-in forwards'
//     }
//     indicators()
// }

// function slideNext() {
//     slideImage[counter].style.animation = 'next1 0.5s ease-in forwards'
//     if (counter >= slideImage.length - 1) {
//         counter = 0        
//     } else {
//         counter ++
//     }
//     indicators()
//     slideImage[counter].style.animation = 'next2 0.5s ease-in forwards'
// }

// function slidePrev() {
//     slideImage[counter].style.animation = 'prev1 0.5s ease-in forwards'
//     if (counter == 0 ) {
//         counter = slideImage.length - 1        
//     } else {
//         counter --
//     }
//     indicators()
//     slideImage[counter].style.animation = 'prev2 0.5s ease-in forwards'
// }

// next.addEventListener('click', slideNext)
// prev.addEventListener('click', slidePrev)

// function autoSliding() {
//     deletInterval = setInterval(timer, 1000)

//     function timer() {
//         slideNext()    
//     }
// }
// autoSliding()

// const container = document.querySelector('.slider-container')

// container.addEventListener('mouseover', function() {
//     clearInterval(deletInterval)  
// })

// container.addEventListener('mouseout', autoSliding)
