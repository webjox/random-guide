<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {Button} from "flowbite-vue";
// import bridge from '@vkontakte/vk-bridge';
//
// bridge.send("VKWebAppInit");

</script>

<template>
    <Head title="Random Guid" />

    <div class="text-center">
        <div class="mt-10 fixed top-0 right-0 left-0">
            <p class="text-4xl">Random Guid</p>
        </div>

        <div class="container mx-auto mt-32 w-96 max-sm:mt-28 max-[470px]:w-[250px]">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias consequuntur doloremque eligendi error hic incidunt ipsa laboriosam magni, minima modi non reiciendis rem sed sit tempora temporibus, tenetur vitae voluptas.</p>
        </div>

        <div class="mt-16 container mx-auto rounded-full h-64 w-64 flex items-center justify-center bg-cube fixed right-0 left-0 border drop-shadow-md transition duration-700 ease-in-out">
            <i class="fa-solid fa-dice-six text-8xl text-white animate-cube"></i>
        </div>

        <div class="container mx-auto fixed bottom-32 right-0 left-0 p-5">
            <p class="space-x-11 max-sm:space-x-5 text-xl">
                Мой рейтинг: 4,6

                <i class="fa-regular fa-star text-yellow-200"></i>

                <Link href="/information">
                    <i class="fa-solid fa-circle-info text-xl"></i>
                </Link>
            </p>
        </div>

        <div class="container mx-auto space-x-10 max-sm:space-x-1 max-[391px]:space-y-5 fixed bottom-10 right-0 left-0 max-[391px]:p-1">

            <Button color="dark" outline class="w-48">
                <Link href="/favorites">
                    Избранное
                </Link>
            </Button>

            <Button color="dark" outline class="w-48">
                <Link href="/history">
                    Моя история
                </Link>
            </Button>
        </div>
    </div>
</template>

