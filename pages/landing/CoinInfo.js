export default function CoinInfo() {
    var html = `
    <section class="cw-section section-coin-info" data-anchor="coin-info">
        <div class="G-container">
            <div class="wrapper-container">
                <div class="row-image-coin">
                    <img src="/assets/img/coin.png" alt="coin">
                </div>
                <div class="row-info-coin">
                    <h5 class="name-coin">Shera Token</h5>
                    <p class="desc text-md">Shera Token - это наш служебный токен. Это основа для развития алгоритма и кошелька Deftly, расширения TVL, сборов и вознаграждений.</p>
                </div>
            </div>
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);
}