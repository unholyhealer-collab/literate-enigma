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
    <section x-data="{ openMenu: false }" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'"
        class="container mx-auto">

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <header class="flex justify-between items-center drop-shadow-sm py-4">
            <!-- Logo -->
            <a class="inline-flex space-x-2 items-center no-underline text-primary font-bold text-lg hover:no-underline hover:text-accent"
                href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 fill-secondary-palette-100 stroke-secondary">
                    <path
                        d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                </svg>
                <span>BRAINSTART</span>
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="flex md:hidden flex-col items-center align-middle text-[#4F4A45]"
                @click="openMenu = !openMenu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-primary stroke-primary" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- <span class="text-xs">Меню</span> -->
            </button>

            <!-- Main Navigations -->
            <nav class="hidden md:flex">
                <ul class="flex flex-row items-center gap-6 text-primary font-semibold">
                    <li>
                        <a href="" class="inline-flex no-underline hover:text-accent">Олимпиады</a>
                    </li>
                    <li>
                        <a href="" class="inline-flex no-underline hover:text-accent">Результаты</a>
                    </li>
                    <li>
                        <a href="" class="inline-flex no-underline hover:text-accent">О проекте</a>
                    </li>
                    <li class="ml-4">
                        <a href="/sign-in"
                            class="self-center w-fit bg-accent text-white rounded-lg py-2 hover:bg-accent-palette-700 px-6 hover:cursor-pointer">Войти</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Pop Out Navigation -->
        <nav class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10"
            :class="openMenu ? 'visible' : 'invisible'" x-cloak>

            <!-- UL Links -->
            <ul class="absolute top-0 right-0 bottom-0 w-8/12 py-4 bg-white z-10 shadow-2xl shadow-secondary-palette-200 transition-all text-primary"
                :class="openMenu ? 'translate-x-0' : 'translate-x-full'">
                <li class="border-b border-secondary-palette-200">
                    <a href="" class="block p-4">Олимпиады</a>
                </li>
                <li class="border-b border-secondary-palette-200">
                    <a href="" class="block p-4">Результаты</a>
                </li>
                <li class="border-b border-secondary-palette-200">
                    <a href="" class="block p-4">О проекте</a>
                </li>
            </ul>

            <!-- Close Button -->
            <button class="absolute z-20 top-0 right-0 bottom-0 left-0 w-4/12" @click="openMenu = !openMenu">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 absolute top-2 right-2 fill-primary stroke-primary" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>
    </section>
    <section class="mt-24 container mx-auto">
        <div class="flex justify-around items-center">
            <div>
                <div class="flex flex-col gap-y-4 text-5xl font-bold">
                    <span>Предметные</span>
                    <span>онлайн чемпионаты</span>
                </div>
                <div class="mt-8 flex flex-col gap-y-1 text-2xl font-bold">
                    <span>Веб-площадка с олимпиадами</span>
                    <span>для учащихся образовательных учреждений</span>
                </div>
            </div>
            <object type="image/svg+xml" data="SvgImg.svg" width="600">
                <img src="{{ url('/images/learning.svg') }}" width="600" alt="image format png" />
            </object>
        </div>
        <div class="mt-24 w-full bg-secondary-palette-100 rounded-xl pt-8 px-12 pb-12">
            <p class="text-3xl font-bold">Онлайн олимпиады - доступны для каждого!</p>
            <p class="mt-2 ml-4 text-xl">Яркий, привлекательный дизайн,простое прохождение тестирования с таймером</p>

            <div class="mt-6">
                <p class="text-2xl font-bold">О проекте</p>
                <p class="mt-2 ml-4 text-xl">
                    BRAINSTART - это платформа предназначенная для проведения предметных онлайн чемпионатов,
                    предоставляющая
                    уникальную возможность школьникам демонстрировать свои знания в интересной и захватывающей форме.
                    Наша
                    платформа предлагает удобный интерфейс для участников и обеспечивает эффективное проведение
                    соревнований
                    и достижение новых образовательных вершин.
                </p>
            </div>
        </div>
    </section>
    <div class="mt-20 divide-y divide-accent">
        <div></div>
        <div></div>
    </div>
    <div class="container mx-auto">
        <p class="text-3xl font-bold mt-20 ml-12">
            Каталог олимпиад
        </p>
    </div>
    {{-- <div class="w-full h-96 bg-secondary-palette-100">
        sdgsh
    </div> --}}
</body>

</html>
