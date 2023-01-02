let image = document.querySelector(".image")
let images = ['first.jpg','second.jpg','third.jpg']

setInterval( function() {
    let ranom = Math.floor(Math.random() *3)
    image.src = images[ranom]
}, 1000)