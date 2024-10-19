<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite([
            'resources/css/app.css',
            'resources/css/brands.min.css',
            'resources/css/fontawesome.min.css',
            'resources/css/regular.min.css',
            'resources/js/app.js'
        ])
    </head>
    <body class="font-sans antialiased bg-neutral-900 text-white/50">
        <main class="max-w-7xl mx-auto pt-12">
            <section class="[&>*]:text-center">
                <h1 class="md:text-7xl text-white font-extrabold">Eyd.sh</h1>
                <div class="text-2xl flex space-x-4 justify-center mt-2">
                    <a href="https://github.com/acgtubio" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/adrian-christopher-tubio/" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://x.com/eyyyyyyd" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="mailto:acgtubio@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                </div>
                <p class="mt-9">Hi! I'm Adrian, a full-stack software developer with specialty in Java, Rust, and Go.</p>
            </section>
            <section class="my-14 px-20">
                <h1 class="md:text-5xl font-extrabold text-center text-white">
                    SKILLS
                </h1>
                <div class="grid md:grid-cols-4 grid-cols-2 [&_h1]:text-center md:my-8">
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/nextjs_icon.png') }}" class="h-[75px] w-[75px]">
                        <h1 class="text-md font-bold md:mt-4">NextJS</h1>
                    </div>
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/tailwindcss_logo.svg') }}" class="h-[75px] w-[75px]">
                        <h1 class="text-md font-bold md:mt-4">TailwindCSS</h1>
                    </div>
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/angular_logo.png') }}" class="h-[75px] w-[75px]">
                        <h1 class="text-md font-bold md:mt-4">AngularJS</h1>
                    </div>
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/spring_logo.svg') }}" class="h-[75px] w-[75px]">
                        <h1 class="text-md font-bold md:mt-4">Spring Boot</h1>
                    </div>
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/postgre_logo.svg') }}" class="h-[75px] w-[75px]">
                        <h1 class="text-md font-bold md:mt-4">PostgreSQL</h1>
                    </div>
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/android_logo.svg') }}" class="h-[75px] w-[75px] object-contain">
                        <h1 class="text-md font-bold md:mt-4">Android - Kotlin</h1>
                    </div>
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/golang_logo.svg') }}" class="h-[75px] w-[75px]">
                        <h1 class="text-md font-bold md:mt-4">Go</h1>
                    </div>
                    <div class="col-span-1 flex items-center flex-col skills-item m-3 justify-between">
                        <img src="{{ asset('images/rust_logo.svg') }}" class="h-[75px] w-[75px]">
                        <h1 class="text-md font-bold md:mt-4">Rust</h1>
                    </div>
                </div>
                <p class="px-4 text-center">as well as experience in Elasticsearch, Solr, Redis, Apache Kafka, MongoDB, Tauri, Jenkins, GitHub Actions, Wordpress and so much more...</p>
            </section>
            <section class="my-14 px-20">
                <h1 class="md:text-5xl font-extrabold text-center text-white">
                    PROJECTS
                </h1>
                <div class="grid md:grid-cols-4 grid-cols-2 [&_h1]:text-center md:my-8">
                    <div class="col-span-1 m-3 px-3 py-7 border rounded-lg border-neutral-700">
                        <h1>Config Swapper</h1>
                    </div>
                    <div class="col-span-1 m-3 px-3 py-7 border rounded-lg border-neutral-700">
                        <h1>Leaflet Wrapper for SolidJS</h1>
                    </div>
                    <div class="col-span-1 m-3 px-3 py-7 border rounded-lg border-neutral-700">
                        <h1>Online Chat Service</h1>
                    </div>
                    <div class="col-span-1 m-3 px-3 py-7 border rounded-lg border-neutral-700">
                        <h1>Ayakabot: A Discord Music Bot</h1>
                    </div>
                    <div class="col-span-1 m-3 px-3 py-7 border rounded-lg border-neutral-700">
                        <h1>Dental Records Management System</h1>
                    </div>
                    <div class="col-span-1 m-3 px-3 py-7 border rounded-lg border-neutral-700">
                        <h1>Drowsiness Detection using LSTM</h1>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
