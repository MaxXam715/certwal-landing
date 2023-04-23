$(function () {
    const vh = window.innerHeight / 100;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});

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