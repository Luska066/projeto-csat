<template>
    <div id="map" style="height: 180px;"></div>
</template>

<script>

    export default {
        name: 'Map',
        data(){
            return{
                latitude:51.5,
                longitude:-0.09,
            }
        },
        mounted() {
        var map = L.map('map',).setView([51.505, -0.09], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var zoomInButton = L.Control.extend({
            options: {
                position: 'topleft' // Posição no canto superior esquerdo
            },
            onAdd: function () {
                var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');
                container.innerHTML = '<button onclick="ZoomInOut(\'in\')" class="leaflet-bar-part leaflet-bar-part-single" title="Zoom In"><span class="fas fa-search-plus"></span></button>';
                return container;
            }
        });
            map.addControl(new zoomInButton());

        L.marker([this.latitude, this.longitude]).addTo(map)
            .bindPopup('A pretty CSS popup.<br> Easily customizable.')
            .openPopup();

            map.on('contextmenu', function (event) {
                var dataHoraAtual = new Date();
                var dataHoraFormatada = dataHoraAtual.toLocaleString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' });
                console.log(dataHoraFormatada)
                console.log(event)

            });
        }


    }
</script>
