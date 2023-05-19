export default function LaunchStart() {

    const dataSert = ajaxRequest({url: '/ajax/LaunchStartCert.json?v=1.3267', method: 'GET'});
    // console.log('dataSert', dataSert);

    var html = `
    <section class="cw-section section-launch-start" data-anchor="launch-start">
        <div class="G-container">
            <div class="wrapper-container">
                <h3 class="index-header_h3">Запуск<br><span class="separator-text">цифровых сертификатов</span><br>на старте</h3>
                <div class="grid-container-sert">`;
                    for (var i in dataSert) {
                        var sert = dataSert[i];
                        html += `
                        <div class="item-sert">
                            <div class="info-col">
                                <h4 class="name-sert">${sert.title}</h4>
                                <p class="desc text-md">${sert.desc}</p>
                                <p class="date-start">${sert.dateStart}</p>
                            </div>
                            <div class="coin-col">
                                <img src="${sert.coin}" alt="coin" class="coin">
                            </div>
                        </div>`;
                    }
                html += `
                </div>
            </div>
        </div>   
    </section>`;
    html = $(html);
    $('#app').append(html);
}