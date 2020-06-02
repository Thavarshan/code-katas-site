@extends('layouts.app')

@section('content')
    <section class="py-20 bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-md-6 flex flex-col justify-center">
                    <div>
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none">
                            Code Katas with <span class="text-indigo-600">PHPUnit</span>
                        </h2>

                        <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg sm:max-w-xl md:mt-5 md:text-xl">
                            Hi! I'm <span class="font-semibold">Thavarshan</span>. A software engineer at an esteemed company. I LOVE to code, so to practice my profession I started following the <a href="https://laracasts.com/series/code-katas-with-phpunit">Code Katas with PHPUnit</a> course by <a href="https://twitter.com/jeffrey_way">Jeffrey Way</a> at <a href="https://laracasts.com">Laracasts</a>. This site provides visual interfaces and documentation of all the coding challenges I've done so far.
                        </p>

                        <div class="mt-10">
                            <div class="inline-flex rounded-lg shadow">
                                <a href="#katas" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                    See challenges
                                </a>
                            </div>

                            <div class="ml-3 inline-flex rounded-lg shadow">
                                <a href="https://thavarshan.com" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                    Who am I?
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/programmer_group.png') }}" class="w-2/3 mx-auto" alt="{{ config('app.name') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-7">
                    <div class="mb-10">
                        <div class="text-center">
                            <h3 class="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                                What are Coding Katas
                            </h3>

                            <p class="mt-6 max-w-3xl text-xl leading-7 text-gray-600 lg:mx-auto">
                                Kata is a martial arts term from Japan that refers to a choreographed sequence of movements. The goal is to perfect and internalize these movements through repetition and memorization. Once mastered, these sequences serve as a reference guide that you can instantly reach for and adapt without thought.
                            </p>

                            <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-600 lg:mx-auto">
                                Outside of martial arts, this word, kata, is used more generally to refer to any set of steps or patterns that is repeated until mastery. Think of it as a way to harness your form and routine.
                            </p>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <div>
                                <div class="leading-tight mt-1">
                                    <div class="font-bold">
                                        <a href="https://twitter.com/jeffrey_way">Jeffrey Way</a>
                                    </div>

                                    <div class="text-sm text-gray-600">
                                        Creator of <a href="https://laracasts.com">Laracasts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="katas" class="py-20 bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                            Coding Katas
                        </h3>

                        <p class="mt-6 max-w-md text-xl leading-7 text-gray-600 lg:mx-auto">
                            Each kata is a description of a coding challenge with a working example included.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-10">
                @foreach ($katas as $kata)
                    @if (! $kata->disabled)
                        <div class="col-lg-3 flex flex-col">
                            <div class="mt-6 overflow-hidden rounded-lg shadow flex flex-col flex-1">
                                <div class="px-4 py-5 sm:px-6 bg-white flex flex-col flex-1 justify-between">
                                    <div>
                                        <h4 class="text-gray-800 text-lg font-bold">{{ $kata->title }}</h4>

                                        <p class="mt-3 text-sm text-gray-600">
                                            {!! getExcerpt($kata->contents, 100) !!}
                                        </p>
                                    </div>

                                    <div class="mt-3">
                                        <a class="text-sm font-semibold" href="{{ route('challenges.show', ['kata' => $kata->slug]) }}">
                                            View challenge <span class="ml-1">&rarr;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mx-auto lg:flex lg:items-center lg:justify-between">
                        <div>
                            <span class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:leading-8">
                                Want to know more <br class="md:hidden"> about me?
                            </span>

                            <div class="mt-3 text-gray-600 text-xl font-normal max-w-md leading-tight">
                                Send me an email or come visit my personal site to get to know me more.
                            </div>
                        </div>

                        <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                            <div class="inline-flex rounded-lg shadow">
                                <a href="mailto:tjthavarshan@gmail.com?subject=Hi There!" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                    Get in touch
                                </a>
                            </div>

                            <div class="ml-3 inline-flex rounded-lg shadow">
                                <a href="https://thavarshan.com" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-20 border-t border-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="flex items-center justify-center text-gray-500">
                        <div>
                            <div class="text-sm">
                                Made with <span class="text-red-500">&hearts;</span> by
                            </div>

                            <div class="text-sm">
                                <a href="https://thavarshan.com" class="font-semibold">Thavarshan</a> <span>😘</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
