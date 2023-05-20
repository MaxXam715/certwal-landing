// ---------- var global ----------
var version = $('head').find('#versionContent').attr('content'),
    mailCrt = 'info@certwal.com';

const resizeOps = () => {
    document.documentElement.style.setProperty("--vh", window.innerHeight * 0.01 + "px");
};

resizeOps();
window.addEventListener("resize", resizeOps);

// ---------- import ----------
$.ajax({ // header
    async: false,
    url: "/plugins/modal.js?v="+version,
    dataType: "script"
});

$.ajax({ // submitForm
    async: false,
    url: "/components/submitForm.js?v="+version,
    dataType: "script"
});

$.ajax({ // telegram
    async: false,
    url: "/plugins/sendTelegram.js?v="+version,
    dataType: "script"
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