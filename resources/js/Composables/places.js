import axios from "axios";

const baseApiUrl = import.meta.env.VITE_VK_MAPS_BASE_URL ?? 'token';
const token = import.meta.env.VITE_VK_MAPS_ACCESS_TOKEN ?? 'token';

const types = [
    'education/library',
    'leisure/park',
    'historic/memorial'
];

export async function useRandomPlace(ref) {
    delete axios.defaults.headers.common['X-Requested-With'];
    await axios.get(`${baseApiUrl}/places`, {
        params: {
            api_key: token,
            // q: 'Памятник',
            location: '47.2372031,39.7120899',
            radius: 5000,
            fields: 'name,address,pin,bbox,type',
            limit: 1000,
        }
    }).then(response => {
        let results = response.data.results.filter(result => {
            return types.includes(result.type);
        });
        let randomIndex = Math.floor(Math.random() * results.length);

        ref.value = results[randomIndex]
    });
}
