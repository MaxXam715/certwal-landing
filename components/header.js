export default function G_header() {
    var html = `
    <header class="G_header">
        <div class="G-container">
            <div class="grid-container">
            
                <div class="logo-wrapper">
                    <img src="/assets/img/logo-certwal-white.svg" alt="logo" class="logo">
                </div>
            
                <div class="nav-wrapper">
                    <nav class="nav-page mob-hidden">
                        <button type="button" class="btn btn-anchor" data-anchor="about-project">О проекте</button>
                        <button type="button" class="btn btn-anchor" data-anchor="certificates">Сертификаты</button>
                        <button type="button" class="btn btn-anchor" data-anchor="advantages">Преимущества</button>
                        <button type="button" class="btn btn-anchor" data-anchor="coin">Shera-coin</button>
                        <button type="button" class="btn btn-anchor" data-anchor="road-map">Дорожная карта</button>
                    </nav>
                </div>
            
                <div class="target-wrapper">
                    <button type="button" class="btn btn-primary btn-getStarted mob-hidden">Get started</button>
                    <button type="button" class="btn btn-primary btn-toggle-menu pc-hidden">
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                </div>
                
            </div>
        </div>
    </header>`;
    html = $(html);
    $('#app').before(html);

    html.find('.target-wrapper .btn-toggle-menu').click(function () {

        const navPc = $('.G_header').find('.nav-page').html();
        var navmob = `
        <div class="G-mobile-menu">
            <div class="menu-wrapper">
                <div class="menu-content">
                    <nav class="nav-page">
                        ${navPc}
                    </nav> 
                </div>
            </div>
        </div>`;
        navmob = $(navmob);

        if ( $('.G-mobile-menu').length == 0 ) {
            $('.G_header').append(navmob);
            MobileNav_open(navmob);
        } else {
            MobileNav_close(navmob);
        }

        navmob.find('.nav-page .btn-anchor').click(function () {
            Anchor_menu();
        });

    });

    html.find('.nav-page .btn-anchor').click(function () {
        Anchor_menu();
    });
}

function MobileNav_open(navmob) {
    setTimeout(function () {
        navmob.addClass('open')
    }, 10);

    navmob.closest('.G_header').find('.target-wrapper .btn-toggle-menu').addClass('open-nav')
}

function MobileNav_close(navmob) {
    $('.G-mobile-menu').closest('.G_header').find('.target-wrapper .btn-toggle-menu').removeClass('open-nav')
    $('.G-mobile-menu').removeClass('open').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
        console.log('delete')
        $('.G-mobile-menu').remove();
    });
}

function Anchor_menu() {
    console.log('click')
}