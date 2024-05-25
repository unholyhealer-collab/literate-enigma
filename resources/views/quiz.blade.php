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
    <section class="container mx-auto mt-12">
        <div class="grid grid-rows-2 grid-cols-2 grid-flow-col gap-4 text-primary lg:grid-rows-1 lg:grid-cols-6">
            <span
                class="inline-flex items-center h-full text-lg font-bold whitespace-normal break-words row-span-1 col-span-2 border shadow-lg rounded-2xl py-2 px-4 lg:col-span-4 lg:text-xl">
                Информатика - Школьный этап по ИКТ для учеников 9-11 классов
            </span>
            <div
                class="h-fit md:h-full flex flex-col justify-center text-xs whitespace-normal break-words row-span-1 col-span-1 border shadow-lg rounded-2xl py-2 px-4">
                <span>Задание</span>
                <span class="text-sm font-bold lg:text-base"><span class="text-lg text-accent lg:text-xl">1</span> /
                    1</span>
            </div>
            <div
                class="h-fit md:h-full flex flex-col justify-center text-xs whitespace-normal break-words row-span-1 col-span-1 border shadow-lg rounded-2xl py-2 px-4">
                <span class="truncate">Времени осталось</span>
                {{-- <div class="text-lg font-bold lg:text-xl" x-data="timer(new Date('July 1, 2024, 12:00:00'))" x-init="init();">
                    <span>
                        <span x-text="time().hours"></span>:<span x-text="time().minutes"></span>:<span x-text="time().seconds"></span>
                    </span>
                </div> --}}
                <span class="text-lg font-bold lg:text-xl" id="timer"></span>
            </div>
        </div>
        <div class="border shadow-lg rounded-2xl py-4 px-4 md:mt-6 lg:mt-12">
            <form method="POST">
                <div class="flex flex-col gap-y-2">
                    <span class="text-lg font-bold">
                        Вопрос
                    </span>
                    <span class="ml-4 lg:text-lg">
                        Назовём хорошей пару (𝑎, 𝑏) натуральных чисел, лежащих на отрезке [100; 240], если число √𝑎 +
                        √𝑏 является целым.
                    </span>
                </div>
                <div class="my-4 flex flex-col gap-y-2">
                    <span class="font-bold">
                        Задача
                    </span>
                    <span class="ml-4 lg:text-lg">
                        Сколько существует хороших пар?
                    </span>
                </div>

                <div class="max-w-2xl mt-4">
                    <label for="q_1" class="block text-xs mb-1">Введите ответ</label>
                    <input type="text" id="q_1"
                        class="py-3 px-4 block w-full border outline-none border-primary rounded-lg focus:border-accent focus:ring-accent disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="...">
                </div>

                <div class="mt-12 flex flex-row w-full justify-between font-bold">
                    <a href=""
                        class="bg-primary text-white rounded-lg py-2 hover:bg-secondary-palette-700 hover:text-white px-3">
                        <div class="flex flex-row align-middle">
                            <svg class="w-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p class="ml-2">Назад</p>
                        </div>
                    </a>
                    <button type="button"
                        class="bg-accent text-white rounded-lg py-2 hover:bg-accent-palette-700 hover:text-white px-3">
                        <div class="flex flex-row align-middle">
                            <a href="/quiz-finished" class="mr-2">Ответить</a>
                            <svg class="w-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>
<script>
    document.getElementById('timer').innerHTML =
        05 + ":" + 01;
    startTimer();


    function startTimer() {
        var presentTime = document.getElementById('timer').innerHTML;
        var timeArray = presentTime.split(/[:]+/);
        var m = timeArray[0];
        var s = checkSecond((timeArray[1] - 1));
        if (s == 59) {
            m = m - 1
        }
        if (m < 0) {
            return
        }

        document.getElementById('timer').innerHTML =
            m + ":" + s;
        console.log(m)
        setTimeout(startTimer, 1000);

    }

    function checkSecond(sec) {
        if (sec < 10 && sec >= 0) {
            sec = "0" + sec
        }; // add zero in front of numbers < 10
        if (sec < 0) {
            sec = "59"
        };
        return sec;
    }
</script>

</html>
