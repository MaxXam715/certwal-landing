export default function Cooperation() {
    var html = `
    <section class="cw-section section-cooperation" data-anchor="cooperation">
        <div class="G-container">
            <div class="wrapper-container">
                <h3 class="title-section index-header_h3">Приглашаем<br>к сотрудничеству</h3>
                <p class="desc text-md">Команда Certwal создаёт чувство общности и партнерства между компаниями и  поддерживающей аудиторией</p>
                <button type="button" class="btn btn-primary js-btn-modal">Построим будущее вместе</button>
                <div class="contact-info">
                    <a href="mailto: ${mailCrt}" class="contact mail">${mailCrt}</a>
                </div>
            </div>
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);

    html.find('.js-btn-modal').click(function () {
        import("/components/ModalInviteCooperate.js?v="+version).then(function(obj) {
            obj.default();
        }).catch(function(err) {
            console.log('catch', err);
        });
    });
}