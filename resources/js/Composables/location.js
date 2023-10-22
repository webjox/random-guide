import { ref, toValue } from 'vue';
import axios from 'axios';

const baseApiUrl = import.meta.env.VITE_VK_MAPS_BASE_URL ?? 'https://demo.maps.vk.com';
const token = import.meta.env.VITE_VK_MAPS_ACCESS_TOKEN ?? 'token';

export async function useCurrentLocation() {
    delete axios.defaults.headers.common['X-Requested-With'];
    return await axios.get(`${baseApiUrl}/ip2geo`, {
        params: {
            api_key: token,
            lang: 'ru',
        }
    })
    .then((response) => {
        return response.data.results[0];
    })
}
