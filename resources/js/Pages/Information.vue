<script setup>
import Title from "@/Components/Title/Title.vue";
import { Accordion, AccordionPanel, AccordionHeader, AccordionContent } from 'flowbite-vue'
</script>


<template>
    <Title>
         Информация
    </Title>

    <div class="container mx-auto mt-10 max-sm:p-5 max-sm:w-[330px]">
            <Accordion class="container mx-auto border-b-2">
                <accordion-panel>
                    <accordion-header>Идея приложения</accordion-header>
                    <accordion-content>
                        <div>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Приложение для необычных путешествий, открытия новых и интересных мест, посещения удивительных локаций и получения новых впечатлений. Идея приложения заключается в предложении пользователю случайных мест для посещения и начислением баллов за каждое посещённое место.</p>

                        </div>
                    </accordion-content>
                </accordion-panel>
                <accordion-panel>
                    <accordion-header>Какие задачи будет решать сервис</accordion-header>
                    <accordion-content>
                        <div>
                            <ul class="mb-2 text-gray-500 dark:text-gray-400 list-disc ml-5">
                                <li>Поиск новых мест и опытов;</li>
                                <li>Преодоление рутины;</li>
                                <li>Интеграция интересов;</li>
                                <li>Поддержание активного образа жизни;</li>
                                <li>Совместное времяпровождение;</li>
                                <li>Путешествия и туризм;</li>
                            </ul>
                        </div>
                    </accordion-content>
                </accordion-panel>
                <accordion-panel>
                    <accordion-header>Какие планы на будущее</accordion-header>
                    <accordion-content>
                        <div>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                Реализовать фильтрацию мест по интересам, расстоянию и предпочтениям (а также антипредпочтениям) конкретных пользователей;
                            </p>
                        </div>
                    </accordion-content>
                </accordion-panel>
                <accordion-panel>
                    <accordion-header>Участники команды</accordion-header>
                    <accordion-content>
                        <div>
                            <ul class="mb-2 text-gray-500 dark:text-gray-400 list-disc ml-5">
                                <li>Роман Корчнев</li>
                                <li>Всеволод Гиренко</li>
                                <li>Матвей Егрищин</li>
                                <li>Денис Корбаков</li>
                            </ul>
                        </div>
                    </accordion-content>
                </accordion-panel>
            </Accordion>
    </div>
</template>

<style scoped>

</style>
