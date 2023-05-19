export default function RoadMap() {

    const dataRoadMax = ajaxRequest({url: '/ajax/RoadMap.json?v=1.3261', method: 'GET'});
    // console.log('dataRoadMax', dataRoadMax);

    var html = `
    <section class="cw-section section-road-map" data-anchor="road-map">
        <div class="G-container">
            <div class="wrapper-container">
            <h3 class="title-section index-header_h3">Дорожная карта</h3>
                <div class="grid-container-rm">
                    <ul class="switcher-btn uk-subnav" uk-switcher="animation: uk-animation-fade">`;
                        for (var btn in dataRoadMax) {
                            html += `<li class="item-btn"><a href="#">${dataRoadMax[btn].title}</a></li>`;
                        }
                        html += `
                    </ul>
                    
                    <ul class="switcher-content uk-switcher">`;
                        for (var content in dataRoadMax) {
                            var item = dataRoadMax[content];
                            html += `
                            <li>
                                <div class="item-content-switcher">
                                    <h5 class="title">${item.title}</h5>
                                    <p class="desc text-md">${item.desc}</p>
                                    <div class="date-start">
                                        <p class="label">дата запуска:</p>
                                        <p class="date-text">${item.dateStart}</p>
                                    </div>
                                </div>
                            </li>`;
                        }
                        html += `
                    </ul>
                </div>
            </div>
        </div>
    </section>`;
    html = $(html);
    $('#app').append(html);
}