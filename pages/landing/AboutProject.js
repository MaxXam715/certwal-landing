export default function AboutProject() {
    var html = `
    <section class="cw-section section-about-project" data-anchor="about-project">
        <div class="G-container">
            <div class="about-project">
                <h3 class="index-header_h3"><span class="separator-text">Узнайте</span> о проекте подробнее</h3>
                <p class="text text-md">Платформа обеспечит легкий доступ к сертификатам с удобным интерфейсом, доступным с любого устройства. Пользователи смогут загружать свои сертификаты и делиться ими с другими, а также получать уведомления о появлении новых сертификатов. Платформа также обеспечит контрольный журнал каждой транзакции с сертификатом, что позволит пользователям отслеживать историю использования своего сертификата.</p>
            </div>
            <div class="advantages-numbers">
                <div class="grid-container">
                    <div class="item">
                        <p class="value">20+</p>
                        <p class="label">направлений</p>
                    </div>
                    <div class="item">
                        <p class="value">$13k+</p>
                        <p class="label">партнеров</p>
                    </div>
                    <div class="item">
                        <p class="value">500+</p>
                        <p class="label">пользователей</p>
                    </div>
                </div>
            </div>
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);
}