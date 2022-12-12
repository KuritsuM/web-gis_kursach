const ENDPOINT = 'http://localhost:55080/api/bus-stops';
const map = L.map('map').setView([44.60, 33.53], 12);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const requestPoints = (async () => {
    const response = (await fetch(ENDPOINT, {
        method: 'GET'
    }));

    return (await response.json());
});

const placeBusStopsOnMap = async () => {
    let busStops = await requestPoints();

    busStops.forEach((busStop) => {
        console.log(busStop);
        let coordinates = busStop['coordinates']

        let marker = L.marker([
            coordinates['lat'],
            coordinates['lng']
        ]).addTo(map);

        marker.bindPopup(busStop['name']);
    })
}

let lastPressedPlace = null;
const coordinatesOnPage = document.querySelector('#coordinates')
const nameForm = document.querySelector('#name-form');
const nameInput = document.querySelector('#name-input')
const submitButton = document.querySelector('#name-submit');

const onMapClick = (e) => {
    let coorindates = e.latlng;

    lastPressedPlace = coorindates;
    coordinatesOnPage.innerHTML = `Долгота: ${coorindates['lat']}; Широта: ${coorindates['lng']}`;

    nameInput.disabled = false;
    submitButton.disabled = false;
}

nameForm.addEventListener('submit', (e) => {
    e.preventDefault();
    e.stopPropagation();

    let body = JSON.stringify({
        'name': nameInput.value,
        'lat': lastPressedPlace['lat'],
        'lng': lastPressedPlace['lng'],
    });
console.log(body);
    let req = fetch('/api/bus-stops', {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: body
    })

    alert('Запрос на добавление доставлен администратору и будет рассмотрен в скором времени!');
})

placeBusStopsOnMap();
map.on('click', onMapClick);
