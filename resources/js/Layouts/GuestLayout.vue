<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-stretch pt-6 sm:pt-0 bg-gray-100">
        <h1 class="text-sm font-bold text-gray-600 text-center mt-6">HyperCleverFace</h1>
        <div class="w-full sm:max-w-md px-6 overflow-hidden">
            <slot />
        </div>
    </div>
</template>
