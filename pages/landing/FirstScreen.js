export default function FirstScreen() {
    var html = `
    <section class="cw-section section-first" data-anchor="section-first">
        <div class="G-container">
        
            <div class="circle-blur green circle-blur-1"></div>
        
            <div class="main-info">
                <h1 class="index-header_h1 header-main-index">откройте будущее<br> с <span class="separator-text">КРИПТО-сертификатами</span>,<br>обеспеченными криптовалютой</h1>
                <div class="intro-desc">
                    <div class="circle-box">
                        <div class="circle-empty"></div> 
                        <div class="circle-painted">
                            <i class="icon arrow-top-right"></i>
                        </div> 
                    </div>
                    <p class="text">Платформа с цифровыми сертификатами, которая позволяет организациям безопасно выдавать цифровые монеты и управлять ими</p>
                </div>
                <div class="btn-container">
                    <button type="button" class="btn btn-primary js-btn-modal-getBonus">Получить бонус</button>
                </div>
            </div>
            
            <div class="cub-container">
                <img src="/assets/img/cub-grid.svg" alt="cub-grid" class="cub-grid">
                <img src="/assets/img/coin.png?v=1.3271" alt="coin" class="coin">
            </div>
            
            <div class="scroll-container">
                <div class="circle">
                    <i class="icon arrow-bottom"></i>
                </div>
                <span class="title">Листайте ниже</span>
            </div>
            
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);

    html.find('.js-btn-modal-getBonus').click(function () {
        import("/components/ModalGetBonus.js?v="+version).then(function(obj) {
            obj.default();
        }).catch(function(err) {
            console.log('catch', err);
        });
    });
}