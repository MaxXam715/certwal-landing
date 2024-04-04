export default function CoinInfo() {
    var html = `
    <section class="cw-section section-coin-info" data-anchor="coin-info">
        <div class="G-container">
            <div class="wrapper-container">
                <div class="row-image-coin">
                    <img src="/assets/img/coin.png?v=1.3271" alt="coin">
                </div>
                <div class="row-info-coin">
                    <h5 class="name-coin">ЦФА</h5>
                    <p class="desc text-md">ЦФА - это не просто служебный токен CERTWAL, это воплощение силы и элегантности. Каждый токен символизирует непоколебимую уверенность в своих возможностях и неуклонное движение к успеху</p>
                </div>
            </div>
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);
}