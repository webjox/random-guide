<script setup>
import { useMap } from '@/Composables/map.js';
import { ref, onMounted, defineProps } from 'vue';

const props = defineProps({
    coordinates: {
        type: Array,
        default: [39.7120899, 47.2372031]
    }
})

const mapContainer = ref(null)
const centralPoint = {
    "type": "FeatureCollection",
    "features": [{
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": props.coordinates
        }
    }]
}

onMounted(() => useMap(mapContainer.value, centralPoint))

</script>

<template>
    <div id="map" ref="mapContainer" class="h-64 my-12"></div>
</template>
