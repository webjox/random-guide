import axios from "axios";
import { ref, toValue } from "vue";
import { useCurrentLocation } from '@/Composables/location.js';

const baseApiUrl = import.meta.env.VITE_VK_MAPS_BASE_URL ?? 'https://demo.maps.vk.com';
const token = import.meta.env.VITE_VK_MAPS_ACCESS_TOKEN ?? 'token';

const types = [
    'education/library',
    'leisure/park',
    'historic/memorial'
];

export function useRandomPlace() {
    const place = ref(null);
    // const location = await useCurrentLocation();

    function randomize(places) {
        let results = places.filter(result => {
            return types.includes(result.type);
        });
        let randomIndex = Math.floor(Math.random() * results.length);

        return results[randomIndex]
    };

    delete axios.defaults.headers.common['X-Requested-With'];
    axios.get(`${baseApiUrl}/places`, {
        params: {
            api_key: token,
            // q: 'Памятник',
            location: '47.2372031,39.7120899',
            // location: location.pin.reverse().join(),
            radius: 5000,
            fields: 'name,address,address_details,pin,bbox,type',
            limit: 1000,
        }
    })
    .then((response) => randomize(response.data.results))
    .then((randomPlace) => (place.value = randomPlace));

    return place;
}
