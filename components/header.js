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
                        <button type="button" class="btn btn-anchor" data-anchor="launch-start">Сертификаты</button>
                        <button type="button" class="btn btn-anchor" data-anchor="activate-certificate">Активация</button>
                        <button type="button" class="btn btn-anchor" data-anchor="coin-info">ЦФА</button>
                        <button type="button" class="btn btn-anchor" data-anchor="road-map">Дорожная карта</button>
                    </nav>
                </div>
            
                <div class="target-wrapper">
                    <a href="mailto: ${mailCrt}" class="mailto mob-hidden">${mailCrt}</a>
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
                    <div class="contact-us">
                        <a href="mailto: ${mailCrt}" class="mailto">${mailCrt}</a>
                    </div>
                    <div class="events-container">
                        <button type="button" class="btn btn-primary btn-green js-btn-modal-getBonus">Получить бонус</button>
                    </div>
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
            var anchor = $(this).attr('data-anchor');
            Anchor_menu(anchor);
        });

        navmob.find('.js-btn-modal-getBonus').click(function () {
            import("/components/ModalGetBonus.js?v="+version).then(function(obj) {
                obj.default();
            }).catch(function(err) {
                console.log('catch', err);
            });
        });

        navmob.click(function(e) {
            if ($(e.target).closest('.menu-content').length == 0) {
                MobileNav_close(navmob);
            }
        });

    });

    html.find('.nav-page .btn-anchor').click(function () {
        var anchor = $(this).attr('data-anchor');
        Anchor_menu(anchor);
    });

    html.find('.btn-modal-getBonus').click(function () {
        import("/components/ModalGetBonus.js?v="+version).then(function(obj) {
            obj.default();
        }).catch(function(err) {
            console.log('catch', err);
        });
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
        $('.G-mobile-menu').remove();
    });
}

function Anchor_menu(anchor) {
    let headerHeight = $('.G_header').height();
    $('html, body').animate({
        scrollTop: $('section[data-anchor='+anchor+']').offset().top - (headerHeight + 50)
    }, 600);
    MobileNav_close();
}