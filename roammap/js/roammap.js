'use-strict'

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('#map')) {
        const map = L.map('map').setView([52.5025841, 13.3931225], 16);

        L.marker([52.5025841, 13.3931225]).addTo(map);
        L.tileLayer('https://tile.openstreetmap.de/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    }
}, false);