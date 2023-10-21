<script setup>

import {Link} from "@inertiajs/vue3";
</script>

<template>
    <div class="container mx-auto mt-10 text-center">
        <div class="flex">
            <div class="flex-initial w-full">
                <p class="text-3xl max-sm:text-4xl max-sm:text-left max-sm:ml-5">
                    <slot></slot>
                </p>
            </div>

            <div>
                <Link href="/" class="absolute right-10">
                    <i class="fa-solid fa-house text-3xl"></i>
                </Link>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
