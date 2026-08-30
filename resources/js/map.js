import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import markerIcon2x from 'leaflet/dist/images/marker-icon-2x.png';
import markerIcon from 'leaflet/dist/images/marker-icon.png';
import markerShadow from 'leaflet/dist/images/marker-shadow.png';

delete L.Icon.Default.prototype._getIconUrl;
L.Icon.Default.mergeOptions({
    iconRetinaUrl: markerIcon2x,
    iconUrl: markerIcon,
    shadowUrl: markerShadow,
});

document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('churches-map');
    if (!el) return;

    const churches = JSON.parse(el.dataset.churches || '[]');

    const map = L.map(el).setView([8.6195, 0.8248], 7); // Togo center

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors',
        maxZoom: 18,
    }).addTo(map);

    const markers = [];

    churches.forEach((church) => {
        const marker = L.marker([church.lat, church.lng]).addTo(map);
        marker.bindPopup(
            `<strong>${church.name}</strong><br>${church.zone ?? ''}${church.city ? ' — ' + church.city : ''}${church.pastor ? '<br>Pasteur : ' + church.pastor : ''}`
        );
        markers.push(marker);
    });

    if (markers.length) {
        const group = L.featureGroup(markers);
        map.fitBounds(group.getBounds().pad(0.2));
    }
});
