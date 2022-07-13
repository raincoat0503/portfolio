const hero_line = anime.timeline({
    loop:true,
});

hero_line
.add({
    targets: '.anime-hero_line-01',
    delay: 1000,
    height:{
        value: '50%',
        dulation: 4000,
        direction: 'alternate',
        easing: 'easeInOutQuad',
    },
})
.add({
    delay:2000,
    targets: '.anime-hero_line-01',
    height:{
        value: '0%',
        dulation: 4000,
        direction: 'alternate',
        easing: 'easeInOutQuad',
    },
    top: {
        value: '75%',
        easing: 'easeInOutQuad',
    },
})