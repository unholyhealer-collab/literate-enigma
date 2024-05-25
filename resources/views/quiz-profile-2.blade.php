<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full h-[calc(100vh-64px)] bg-white font-inter text-primary">
    <x-quiz-navbar />
    <section class="w-full h-[calc(100vh-64px)]">
        <div
            class="w-24 h-full bg-white absolute top-0 left-0 z-30 flex flex-col pl-5 pt-44 transition-all duration-100 ease-out border-r drop-shadow-xl group/main hover:w-80">
            <div class="flex items-center gap-4 w-fit">
                <svg class="w-14 h-14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z"
                            fill="#ffdea5"></path>
                        <path
                            d="M12.0001 6C10.3433 6 9.00012 7.34315 9.00012 9C9.00012 10.6569 10.3433 12 12.0001 12C13.657 12 15.0001 10.6569 15.0001 9C15.0001 7.34315 13.657 6 12.0001 6Z"
                            fill="#f96900"></path>
                        <path
                            d="M17.8948 16.5528C18.0356 16.8343 18.0356 17.1657 17.8948 17.4473C17.9033 17.4297 17.8941 17.4487 17.8941 17.4487L17.8933 17.4502L17.8918 17.4532L17.8883 17.46L17.8801 17.4756C17.874 17.4871 17.8667 17.5004 17.8582 17.5155C17.841 17.5458 17.8187 17.5832 17.7907 17.6267C17.7348 17.7138 17.6559 17.8254 17.5498 17.9527C17.337 18.208 17.0164 18.5245 16.555 18.8321C15.623 19.4534 14.1752 20 12.0002 20C8.31507 20 6.76562 18.4304 6.26665 17.7115C5.96476 17.2765 5.99819 16.7683 6.18079 16.4031C6.91718 14.9303 8.42247 14 10.0691 14H13.7643C15.5135 14 17.1125 14.9883 17.8948 16.5528Z"
                            fill="#f96900"></path>
                    </g>
                </svg>
                <div class="truncate hidden group-hover/main:inline">
                    <div class="font-bold">Петров П.П.</div>
                    <div class="text-sm text-gray-500">11 класс</div>
                </div>
            </div>
            <div class="mt-6 flex flex-col gap-y-6 w-fit pl-4 font-semibold text-sm">
                <div class="flex gap-8 items-center group/profile hover:cursor-pointer">
                    <svg class="fill-accent w-6 h-6 group-hover/profile:fill-accent group-hover/profile:scale-110"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path
                            d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                        <path
                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                    </svg>
                    <span
                        class="uppercase truncate hidden group-hover/main:inline group-hover/profile:text-accent">Личный
                        кабинет</span>
                </div>
                <div class="flex gap-8 items-center group/achievs hover:cursor-pointer">
                    <svg class="fill-secondary w-6 h-6 group-hover/achievs:fill-accent group-hover/achievs:scale-110"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span
                        class="uppercase truncate hidden group-hover/main:inline group-hover/achievs:text-accent">Достижения</span>
                </div>
                <div class="flex gap-8 items-center group/olymps hover:cursor-pointer">
                    <svg class="fill-secondary w-6 h-6 group-hover/olymps:fill-accent group-hover/olymps:scale-110"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path
                            d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path
                            d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path
                            d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
                    <a href="/catalog"
                        class="uppercase truncate hidden group-hover/main:inline group-hover/olymps:text-accent">Олимпиады</a>
                </div>
                <hr class="h-px bg-secondary border-0">
                <div class="flex gap-8 items-center group/exit hover:cursor-pointer">
                    <svg class="fill-secondary w-6 h-6 group-hover/exit:fill-red-600 group-hover/exit:scale-110"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span
                        class="uppercase truncate hidden group-hover/main:inline group-hover/exit:text-red-600">Выйти</span>
                </div>
            </div>
        </div>

        <section class="container mx-auto w-full h-full text-primary">
            <div class="flex justify-between">
                <p class="text-3xl font-bold mt-8 ml-6">
                    Личный кабинет
                </p>
                <div class="self-end flex gap-x-1 text-accent font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <span>
                        Архив
                    </span>
                </div>
            </div>
            <div class="mt-20 ml-16">

                <div class="relative h-72 border shadow-lg rounded-3xl grid grid-cols-4 gap-4">
                    <div>
                        <div
                            class="w-72 h-72 bg-gradient-to-r from-rose-400 to-rose-600 rounded-3xl absolute -top-8 left-8">
                        </div>
                    </div>
                    <div class="w-full h-full col-span-3 py-8 pr-8 flex flex-col justify-between">
                        <div class="flex gap-x-16">
                            <div class="flex flex-col basis-1/2">
                                <span class="font-bold text-2xl leading-7">
                                    Информатика
                                </span>
                                <span class="text-xl mt-4">
                                    Школьный этап по ИКТ для учеников 9-11 классов
                                </span>
                                <div class="mt-6 flex flex-col gap-y-4">
                                    <div class="flex gap-x-2 items-center">
                                        <svg class="fill-accent w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-6">
                                            <path
                                                d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                            <path fill-rule="evenodd"
                                                d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-lg">
                                            Олимпиада пройдет с 13 мая по 3 июня
                                        </span>
                                    </div>
                                    <div class="flex gap-x-2 items-center">
                                        <svg class="fill-accent w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="size-6">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-lg">
                                            Ограничение по времени: 5 минут
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-y-4 w-full text-nowrap gap-x-8 basis-1/2 justify-center">
                                <span class="">Всего заданий: <span
                                        class="text-lg text-accent font-bold">1</span></span>
                                <div class="flex w-full flex-col gap-y-2">
                                    <span class="">Прогресс выполнения</span>
                                    <!-- Progress -->
                                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden"
                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-secondary font-bold text-xs text-white text-center whitespace-nowrap transition duration-500"
                                            style="width: 100%">0%</div>
                                    </div>
                                    <!-- End Progress -->
                                </div>
                            </div>
                        </div>
                        <a href="/quiz"
                            class="self-end w-fit bg-accent text-white font-bold rounded-lg py-2 hover:bg-accent-palette-700 px-6 hover:cursor-pointer">Начать
                            прохождение</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>

</html>
