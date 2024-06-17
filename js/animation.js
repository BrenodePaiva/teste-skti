const elementsUp = document.querySelectorAll('.hidden-up')
const elementsLeft = document.querySelectorAll('.hidden-left')
const elementsSlider = document.querySelectorAll('.hidden-slider')
const elementsHidden = document.querySelectorAll('.hidden') 

// console.log(elements)

const myObserver = new IntersectionObserver((entries) => {
    console.log(entries)
    entries.forEach((entry)=> {
        if (entry.isIntersecting && entry.target.classList.contains('hidden-up')) {
            entry.target.classList.add('show-up')
        
        }else if(entry.isIntersecting && entry.target.classList.contains('hidden-left')){
            entry.target.classList.add('show-left')

        }else if(entry.isIntersecting && entry.target.classList.contains('hidden-slider')){
            entry.target.classList.add('show-slider')

        }else if(entry.isIntersecting && entry.target.classList.contains('hidden')){
            entry.target.classList.add('show')
        }
        //else{
        //     entry.target.classList.remove('show-up')
        //     entry.target.classList.remove('show-left')
        //     entry.target.classList.remove('show-slider')
        //     entry.target.classList.remove('show')
        // }
    })
})

elementsUp?.forEach((element) => myObserver.observe(element))
elementsLeft?.forEach((element) => myObserver.observe(element))
elementsSlider?.forEach((element) => myObserver.observe(element))
elementsHidden?.forEach((element) => myObserver.observe(element))
// elements.forEach((element) => console.log(element))
