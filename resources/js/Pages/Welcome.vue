<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import Layout from "@/Layouts/Layout.vue";
import Cube from "@/Components/Cube.vue";
import { Button } from "flowbite-vue";
import { onMounted } from "vue";

const props = defineProps({
    user: Object
})

onMounted(() => {
    router.post('/login', {
        vk_id: 12,
    })
});
</script>

<template>
    <Layout>
        <Head title="Random Guide" />

        <section class="text-center flex flex-col gap-12 mb-12 items-center">
            <h1 class="text-4xl">Random Guide</h1>
            <p class="w-1/2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                consequuntur doloremque eligendi error hic incidunt ipsa
                laboriosam magni, minima modi non reiciendis rem sed sit tempora
                temporibus, tenetur vitae voluptas.
            </p>
        </section>

        <Cube class="mb-12" click-action="/random" />

        <div class="flex gap-12 place-items-baseline">
            <p class="space-x-2 sm:space-x-1 text-xl">
                <span>Мой рейтинг: {{ user?.rating }}</span>
                <i class="fa-regular fa-star text-yellow-200"></i>
            </p>
            <Link href="/information">
                <i class="fa-solid fa-circle-info text-xl"></i>
            </Link>
        </div>

        <div class="flex gap-12">
            <Button color="dark" outline class="w-48">
                <Link href="/favorites" as="button">Избранное</Link>
            </Button>

            <Button color="dark" outline class="w-48">
                <Link href="/history" as="button">Моя история</Link>
            </Button>
        </div>
    </Layout>
</template>
