$(() => {
    let $menuToggle = $('.menu__toggle');
    let $menu = $('.menu__container');
    $menuToggle.on('click', e => {
        $menu.slideToggle();
    })
});