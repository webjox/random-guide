<script setup>
import { Link } from '@inertiajs/vue3';
import bridge from "@vkontakte/vk-bridge";
import { onMounted } from "vue";

onMounted(() => bridge.send("VKWebAppInit"))
</script>

<template>
    <main class="container h-screen mx-auto my-6 grid grid-cols-1 grid-flow-row justify-stretch">
        <header class="text-center">
            <Link class="text-sm font-bold text-gray-600" as="button">HyperCleverFace</Link>
        </header>
        <div class="flex flex-col gap-6 content-center items-center">
            <slot />
        </div>
    </main>
</template>
