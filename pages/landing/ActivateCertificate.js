export default function ActivateCertificate() {

    const dataActivatedSert = ajaxRequest({url: '/ajax/ActivateCertificate.json?v=1.3254', method: 'GET'});
    // console.log('dataActivatedSert', dataActivatedSert);

    var html = `
    <section class="cw-section section-activate-certificate" data-anchor="activate-certificate">
        <div class="G-container">
            <h3 class="title-section index-header_h3"><span class="separator-text">как активировать</span><br>цифровой сертификат</h3>
            <div class="steps-activate-certificate">`;

                for (var i in dataActivatedSert) {
                    var step = dataActivatedSert[i];
                    html += `
                    <div class="item-steps">
                        <div class="number-step">
                            <span class="number-text">${step.count}</span>
                        </div>
                        <div class="name-step">
                            <span class="name-text">${step.title}</span>
                        </div>
                        <div class="desc-step">
                            <p class="desc-text text-md">${step.desc}</p>
                        </div>
                    </div>`;
                }

            html += `
            </div>
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);
}