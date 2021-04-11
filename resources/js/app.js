require('./bootstrap');

require('alpinejs');

window.Echo.private('aleatorios.1')
    .listen('QueroUmNumeroAleatorio', (e) => {
        console.log(e);
        alert(e.contador);
    });
