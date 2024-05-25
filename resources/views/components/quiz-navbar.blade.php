<section x-data="{ openMenu : false }" :class="openMenu ? 'overflow-hidden' : 'overflow-visible' " class="container mx-auto">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <header class="flex justify-between items-center drop-shadow-sm py-4">
        <!-- Logo -->
        <a class="inline-flex space-x-2 items-center no-underline text-primary font-bold text-lg hover:no-underline hover:text-accent" href="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 fill-secondary-palette-100 stroke-secondary">
                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
            </svg>
            <span>BRAINSTART</span>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="flex md:hidden flex-col items-center align-middle text-[#4F4A45]" @click="openMenu = !openMenu">
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
            </ul>
        </nav>
    </header>

    <!-- Pop Out Navigation -->
    <nav class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10" :class="openMenu ? 'visible' : 'invisible' " x-cloak>

        <!-- UL Links -->
        <ul class="absolute top-0 right-0 bottom-0 w-8/12 py-4 bg-white z-10 shadow-2xl shadow-secondary-palette-200 transition-all text-primary" :class="openMenu ? 'translate-x-0' : 'translate-x-full'">
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
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 right-2 fill-primary stroke-primary" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>
</section>