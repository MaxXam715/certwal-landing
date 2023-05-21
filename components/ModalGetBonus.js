export default function initModal_getBonus() {
    var html = `
    <button type="button" class="btn btn-close-modal"><i class="icon close"></i></button>
    <div class="container-getBonus">
        <h3 class="title-modal">Получить бонус по сертификату</h3>
        <form class="form-wrapper">
            <label class="label-field">
                <input type="text" class="input-field valid-check" autocomplete="on" name="name" placeholder="Имя">
            </label>
            <label class="label-field">
                <span class="title"></span>
                <input type="text" class="input-field valid-email" autocomplete="on" name="email" placeholder="Почта">
            </label>
            <label class="label-field">
                <span class="title"></span>
                <input type="text" class="input-field valid-check" autocomplete="on" name="number-cert" placeholder="Номер">
            </label>
            <label class="label-field">
                <span class="title"></span>
                <input type="text" class="input-field valid-check" autocomplete="on" name="number-wallet" placeholder="Номер кошелька">
            </label>
            <button type="button" class="btn btn-primary btn-send js-btn-send" data-target="get-bonus">Получить бонус</button>
        </form>
    </div>`;

    var modal = new Modal({
        classModal: 'cw-modal-getBonus', // класс для модального окна
        idModal: 'modal-getBonus', // класс для модального окна
        mode: 'center', // center | top | right
        title: 'Получить бонус по сертификату',
        content: html, // HTML-контент
        width: '580px', // задаем ширину окна "560" / " " (авто)
        esc: true, // закрыть по клавише ESC
        closeBackground: true, // закрыть по фону
        eventCloseModal:'',
        footerEvents:{
            cancel: {
                active: false,
            },
            submit: {
                active: false,
            }
        }
    });

    modal.modal.find('.js-btn-send').click(function () {
        var targetClick = $(this);
        setTimeout(function () {
            targetClick.blur();
        }, 10);
        submitForm(targetClick);
    });
}