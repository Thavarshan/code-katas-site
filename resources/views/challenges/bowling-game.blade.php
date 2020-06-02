@extends('layouts.challenge')

@section('document')
    <div>
        <a href="/#katas"><span>&larr;</span> Back</a>
    </div>

    <h3 class="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
        {{ $kata->title }}
    </h3>

    <div class="markdown mt-10 leading-relaxed text-lg">
        {{ $kata->contents }}
    </div>

    <div class="mt-10">
        <div class="overflow-hidden rounded-lg">
            <div class="px-4 py-5 sm:px-6 bg-gray-200">
                <h6 class="font-semibold text-sm">Need help?</h6>

                <div class="mt-3">
                    <p class="text-sm">Watch the full lesson at <a target="_blank" href="{{ $kata->lesson }}">Laracasts</a></p>

                    <p class="text-sm">Get the source code <a target="_blank" href="{{ $kata->source }}">here</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('demo')
    <div>
        <h5 class="text-xl font-semibold">Demonstration of end result</h5>

        <p class="mt-3 text-lg text-gray-600 leading-tight max-w-sm">
            Enter some random number to generate it's respective prime factors.
        </p>
    </div>

    <hr class="my-10">

    <prime-factors></prime-factors>
@endsection
