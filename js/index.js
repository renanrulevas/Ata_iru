// Main Carousel
var mainGlide = new Glide('.glide_main', {
    perView: 1,
    draggable: true,
    autoplay: 3000,
    hoverpause: true,
});

mainGlide.mount();


// Carousel para destaques
var destaquesGlide = new Glide('.glide_destaques', {
    type: 'carousel',
    dragThreshold: false,
    perView: 4,
    gap: 15,
});

destaquesGlide.mount();


// Carousel para ofertas
var ofertasGlide = new Glide('.glide_ofertas', {
    type: 'carousel', 
    dragThreshold: false,
    perView: 4,
    gap: 15,
});

ofertasGlide.mount();