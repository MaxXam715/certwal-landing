export default function RunningLine() {
    var html = `
    <section class="cw-section section-running-line" data-anchor="running-line">
        <div class="slider-container">
            <div class="splide slider-running-line">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><p class="item-word">Недвижимость</p></li>
                        <li class="splide__slide"><p class="item-word">Авто</p></li>
                        <li class="splide__slide"><p class="item-word">Товары</p></li>
                        <li class="splide__slide"><p class="item-word">Услуги</p></li>
                        <li class="splide__slide"><p class="item-word">Бонусы</p></li>
                        <li class="splide__slide"><p class="item-word">конференция</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clone-box"></div>
    </section>`;
    html = $(html);
    $('#app').append(html);

    $(function () {
        new Splide('.slider-running-line', {
            type: 'loop',
            autoWidth: true,
            focus: 'center',
            arrows: false,
            pagination: false,
            gap: '60px',
            autoScroll: {
                speed: 0,
            }
        }).mount(window.splide.Extensions);
    });
}