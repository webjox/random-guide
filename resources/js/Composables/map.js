import { onMounted } from "vue";
import mmrgl from "mmr-gl";
import 'mmr-gl/dist/mmr-gl.css';

export function useMap() {
    onMounted(() => {
        mmrgl.baseApiUrl = 'https://demo.maps.vk.com';
        mmrgl.accessToken = 'accessToken';
        const map = new mmrgl.Map({
            container: 'map',
            zoom: 8,
            center: [47.2313, 39.7233],
            style: 'mmr://api/styles/main_style.json',
            hash: true,
        });

        return () => {
            if (map) map.remove();
        }
    });

    return '<div id="map"></div>'
}
