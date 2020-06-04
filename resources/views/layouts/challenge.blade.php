@extends('layouts.app')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 min-h-screen">
                    <div class="row justify-center h-full pt-10 pb-16 lg:pb-40 -mx-5">
                        <div class="col-lg-10 px-8">
                            @yield('document')
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 bg-gray-200 min-h-screen">
                    <div class="row justify-center h-full py-16 lg:py-32">
                        <div class="col-md-8">
                            @yield('demo')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
