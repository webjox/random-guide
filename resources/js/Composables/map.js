import { watchEffect, toValue } from "vue";
import mmrgl from "mmr-gl";
import 'mmr-gl/dist/mmr-gl.css';

const token = import.meta.env.VITE_VK_MAPS_ACCESS_TOKEN ?? 'token';
const defaultCenterPoint = [39.7233, 47.2313];

export function useMap(el, centralPoint = null) {
    watchEffect( () => {
        // Provide only for demo API, main API is default
        // mmrgl.baseApiUrl = 'https://demo.maps.vk.com';

        mmrgl.accessToken = token;

        const map = new mmrgl.Map({
            container: toValue(el),
            zoom: 14,
            center: centralPoint ? toValue(centralPoint).features[0].geometry.coordinates : defaultCenterPoint,
            style: 'mmr://api/styles/simple_style.json',
            hash: false,
        });

        if (null !== toValue(centralPoint)) {
            map.on('load', function () {
                map.loadImage('https://maps.vk.com/api/styles/pins/blue_target.png', function (error, image) {
                    if (error) throw error;
                    map.addImage('custom_pin', image);
                    map.addLayer({
                        "id": "points",
                        "type": "symbol",
                        "source": {
                            "type": "geojson",
                            "data": toValue(centralPoint)
                        },
                        "layout": {
                            "icon-image": "custom_pin",
                            "icon-size": 1
                        }
                    })
                })
            });
        }

        return () => {
            if (map) map.remove();
        }
    });
}
