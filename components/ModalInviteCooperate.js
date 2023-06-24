export default function ModalInviteCooperate() {

    if ($('#ModalInviteCooperate').length == 0) {
        $('head').append(`<link rel="stylesheet" href="/assets/css/components/ModalInviteCooperate.css?v=${version}" id="ModalInviteCooperate">`)
    }

    var html = `
    <div class="container-btns">
        <button type="button" class="btn btn-primary btn-see-qr" data-qr="Bitcoin">Bitcoin(BTC)</button>
        <button type="button" class="btn btn-primary btn-see-qr" data-qr="Ethereum">Ethereum(ETH)</button>
        <button type="button" class="btn btn-primary btn-see-qr" data-qr="Cardano">Cardano(ADA)</button>
        <button type="button" class="btn btn-primary btn-see-qr" data-qr="XRP">XRP</button>
        <button type="button" class="btn btn-primary btn-see-qr" data-qr="Dogecoin">Dogecoin(DOGE)</button>
        <button type="button" class="btn btn-primary btn-see-qr" data-qr="Solano">Solano(SOL)</button>
        <button type="button" class="btn btn-primary btn-see-qr" data-qr="BNB">BNB (Smart Chain)</button>
    </div>`;

    var modal = new Modal({
        classModal: 'modal-invite-cooperate', // класс для модального окна
        mode: 'center', // center | top | right
        title: 'Связаться с нами',
        content: html, // HTML-контент
        width: '500px', // задаем ширину окна "560" / " " (авто)
        esc: true, // закрыть по клавише ESC
        closeBackground: true, // закрыть по фону
        eventCloseModal:'',
        footerEvents:{
            cancel: {
                active: true,
                title: 'Закрыть',
            },
            submit: {
                active: false,
            }
        }
    });

    modal.modal.find('.btn-see-qr').click(function () {
        var id_qr = $(this).attr('data-qr'),
            name_qr;

        switch (id_qr) {
            case "Bitcoin":
                name_qr = `Bitcoin.jpg`;
                break;
            case "Ethereum":
                name_qr = `Ethereum.jpg`;
                break;
            case "Cardano":
                name_qr = `Cardano.jpg`;
                break;
            case "XRP":
                name_qr = `XRP.jpg`;
                break;
            case "Dogecoin":
                name_qr = `Dogecoin.jpg`;
                break;
            case "Solano":
                name_qr = `Solano.jpg`;
                break;
            case "BNB":
                name_qr = `BNB.jpg`;
                break;
        }
        
        var htmlqr = `
        <div class="wrapper-qr">
            <img src="/assets/img/qr/${name_qr}" alt="qr" class="img-qr">
        </div>`;

        var modalQR = new Modal({
            classModal: 'modal-qr', // класс для модального окна
            mode: 'center', // center | top | right
            title: id_qr,
            content: htmlqr, // HTML-контент
            width: '500px', // задаем ширину окна "560" / " " (авто)
            esc: true, // закрыть по клавише ESC
            closeBackground: true, // закрыть по фону
            eventCloseModal:'',
            footerEvents:{
                cancel: {
                    active: true,
                    title: 'Закрыть',
                },
                submit: {
                    active: false,
                }
            }
        });
    });
}