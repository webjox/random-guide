<script setup>
import { useMap } from '@/Composables/map.js';
import { ref, onMounted, defineProps, watch } from 'vue';

const props = defineProps({
    coordinates: Array
})

const mapContainer = ref(null)
const centralPoint = ref({
    "type": "FeatureCollection",
    "features": [{
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": props.coordinates
        }
    }]
})

onMounted(() => {
    useMap(mapContainer, centralPoint);
})

watch(centralPoint, () => useMap(mapContainer, centralPoint))

</script>

<template>
    <div id="map" ref="mapContainer" class="w-96 h-96 rounded-md shadow-md"></div>
</template>
