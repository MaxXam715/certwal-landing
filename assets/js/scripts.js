// ---------- var global ----------
var version = 1111;


// ---------- import ----------
$.ajax({ // header
    async: false,
    url: "/plugins/modal.js?v="+version,
    dataType: "script"
});

function initModal_getBonus() {
    var html = `
    <div class="container-getBonus">
        <h3 class="title-modal">Получить бонус по сертификату</h3>
        <form class="form-wrapper">
            <label class="label-field">
                <input type="text" class="input-field valid-check" name="name" placeholder="Имя">
            </label>
            <label class="label-field">
                <span class="title"></span>
                <input type="text" class="input-field valid-check" name="surname" placeholder="Фамилия">
            </label>
            <div class="two-container">
                <label class="label-field">
                    <span class="title"></span>
                    <input type="text" class="input-field valid-check" name="series-cert" placeholder="Серия">
                </label>
                <label class="label-field">
                    <span class="title"></span>
                    <input type="text" class="input-field valid-check" name="number-cert" placeholder="Номер">
                </label>
            </div>
            <label class="label-field">
                <span class="title"></span>
                <input type="text" class="input-field valid-check" name="number-wallet" placeholder="Номер кошелька">
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

function submitForm(targetClick) {
    targetClick.closest('form').find('.error-notification').remove();
    var thisClick = targetClick.attr('data-target'),
        form = targetClick.closest('form'),
        countLabel = targetClick.closest('form').find('label').length,
        pathLabel = targetClick.closest('form').find('label'),
        validation = false,
        completion = 0;

    $(pathLabel).each(function () {

        var pathInput = $(this).find('input, textarea, select');
        var pattern = /^([a-z0-9_\.-])+[@][a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

        // Проверка полей
        if ( pathInput.hasClass('valid-check') && pathInput.val().length < 1 ) { // проверка на любое слово где > 1 символа
            $(this).find('input, textarea, select').addClass('error-valid')
                // .after(`<p class="error-notification">Поле не должно быть пустым</p>`);
            if ($(this).find('input, textarea, select').attr('name') == 'name') {
                $(this).find('.error-notification').text('Введите свое имя');
            }
            if ($(this).find('input, textarea, select').attr('name') == 'surname') {
                $(this).find('.error-notification').text('Введите свою фамилию');
            }
        } else if ( pathInput.hasClass('valid-phone') && pathInput.val().length < 18 ) { // проверка тел формата +7 (999) 999-99-99
            $(this).find('input, textarea, select').addClass('error-valid')
                .after(`<p class="error-notification">Введите номер телефона</p>`);
        } else if ( pathInput.hasClass('valid-email') && !(pattern.test(pathInput.val())) ) { // проверка email типа name@mail.ru
            $(this).find('input, textarea, select').addClass('error-valid')
                .after(`<p class="error-notification">Некорректный E-Mail</p>`);
        } else {
            validation = true;
            completion++;
            $(this).find('input, textarea, select').removeClass('error-valid')
            $(this).closest('form').find('.error-notification').remove();
        }
        $('form .error-notification').slideDown(200);

    });

    // Валидация пройдена и готова отправка формы
    if ( completion === countLabel && validation === true ) {
        var nameClient = (form.find('input[name=name]').val() != undefined) ? form.find('input[name=name]').val() : 'имя не указано',
            surnameClient = (form.find('input[name=surname]').val() != undefined) ? form.find('input[name=surname]').val() : '',
            phoneClient = (form.find('input[name=phone]').val() != undefined) ? form.find('input[name=phone]').val() : 'номер не указан',
            emailClient = (form.find('input[name=email]').val() != undefined && form.find('input[name=email]').val() != '') ? form.find('input[name=email]').val() : 'e-mail не указан',
            whenCallback = 'Перезвонить: ';

        var dataMail = {};


        if (thisClick == 'get-bonus') {
            dataMail.name = form.find('.input-field[name=name]').val();
            dataMail.surname = form.find('.input-field[name=surname]').val();
            dataMail.series_cert = form.find('.input-field[name=series-cert]').val();
            dataMail.number_cert = form.find('.input-field[name=number-cert]').val();
            dataMail.number_wallet = form.find('.input-field[name=number-wallet]').val();

            console.log('dataMail', dataMail)
        }


        $.ajax({
            type: 'POST',
            url: 'https://www.ru/',
            data: ''
        }).done(function() {

        }).fail(function() {
            alert('Заявка не отправлена!');
            console.error('Заявка не отправлена!');
        });
    }
}

// При клике на элементы формы, убираем выделения об ошибке
$(document).on('focus', 'input, textarea, select', function () {
    $(this).removeClass('error-valid');
    $(this).closest('label').find('.error-notification').slideUp(200);
});


$(function () {
    const vh = window.innerHeight / 100;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});

function mergeJson(json1, json2){
    for(var i in json1){
        if(getType(json1[i]) == 'object'){
            for(var k in json1[i]){
                if(getType(json1[i][k]) == 'object'){
                    for(var p in json1[i][k]){
                        if(json2[i]!=undefined && json2[i][k]!=undefined && json2[i][k][p] != undefined) json1[i][k][p] = json2[i][k][p];
                    }
                }else{
                    if(json2[i] != undefined && json2[i][k] != undefined) json1[i][k] = json2[i][k];
                }
            }
        }else{
            if(json2[i] != undefined) json1[i] = json2[i];
        }
    }
    return json1;
}

function getType(p) {
    if (Array.isArray(p)) return 'array';
    else if (typeof p == 'string') return 'string';
    else if (p != null && typeof p == 'object') return 'object';
    else return 'other';
}

function ajaxRequest(data) {
    var json;
    $.ajax({
        url: data.url,
        method: (data.method == undefined && data.method == '') ? 'GET' : data.method,
        async: false,
        data: (data.data != undefined && data.data != '') ? data.data : '',
    }).done(function(data) {
        if (isJsonString(data)) {
            data = $.parseJSON(data);
        }
        json = data;
    }).fail(function(error) {
        alert('JSON request error. See DEV Tools')
        console.log('%c Ошибка запроса JSON ', 'background: red; color: #fff; border-radius: 50px;');
        console.table({
            Страница: document.title,
            URL: data.url,
            Method: data.method,
            Async: false,
            readyState: error.readyState,
            status: error.status,
            statusText: error.statusText,
            Время: dt_format(new Date(), 'H:i')
        });
    });

    return json;
}

function isJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}