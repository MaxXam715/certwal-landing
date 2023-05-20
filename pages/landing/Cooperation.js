export default function Cooperation() {
    var html = `
    <section class="cw-section section-cooperation" data-anchor="cooperation">
        <div class="G-container">
            <div class="wrapper-container">
                <h3 class="title-section index-header_h3">Приглашаем<br>к сотрудничеству</h3>
                <div class="contact-info">
                    <a href="mailto: ${mailCrt}" class="contact mail">${mailCrt}</a>
                </div>
            </div>
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);
}