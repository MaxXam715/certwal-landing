export default function RunningLine() {
    var html = `
    <section class="cw-section section-running-line">
        <div class="slider-container">
        
            <div class="splide slider-running-line">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">Slide 01</li>
                        <li class="splide__slide">Slide 02</li>
                        <li class="splide__slide">Slide 03</li>
                        <li class="splide__slide">Slide 03</li>
                        <li class="splide__slide">Slide 03</li>
                        <li class="splide__slide">Slide 03</li>
                        <li class="splide__slide">Slide 03</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);

    $(function () {
        new Splide('.slider-running-line', {
            type: 'loop',
            drag: 'free',
            focus: 'center',
            perPage: 2,
            arrows: false,
            pagination: false,
            autoScroll: {
                speed: 1,
                pauseOnHover: false,
                pauseOnFocus: false,
            },
        }).mount();
    });
}