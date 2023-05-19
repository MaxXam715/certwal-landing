function sendTelegram(dataForm) {
    var token = '6003118587:AAEUbSOrWp6duziKsGyk_tWS-BpUyebBRcE',
        chat_id = '-1001762015728',
        html = ``;

html =
`
<b>${dataForm.subject}</b>
<i>${dataForm.desc}</i>\n\n`;
    for (var i in dataForm.data) {
        var item = dataForm.data[i];
        html += `${i}: ${item}\n`;
    }
html += ``;

    $.ajax({
        type: 'POST',
        url: `https://api.telegram.org/bot${token}/sendMessage`,
        data: {
            chat_id: chat_id,
            text: html.replace(/^\t+/gm, ''),
            parse_mode: 'html',
            reply_markup: {
                inline_keyboard: [
                    [{ text: "Начать", callback_data: "startquiz" }]
                ],
                one_time_keyboard: true
            }
        },
        success: function(res) {
            console.log('✅ В Telegram успешно отправлено');
        },
        error: function(error) {
            console.error(error);
        }
    });
}

