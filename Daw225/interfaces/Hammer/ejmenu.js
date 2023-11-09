let hammer = new Hammer(document.body),
menu= document.getElementById('menu'),
message= document.getElementById('message')

hammer.on('swipeleft swiperight', event => {
    let type =event.type

    if(type==='swipeleft') {
        menu.classList.remove('active')
        message.textContent='Arrastra hacia la derecha para abrir'
    }

    else if(type==='swiperight') {
        menu.classList.add('active')
        message.textContent='Arrastra hacia la izquierda para abrir'
    }
})