@extends('layouts.app')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-6 min-h-screen">
                    <div class="row justify-center h-full pt-20 pb-40 -mx-5">
                        <div class="col-lg-10 px-8">
                            @yield('document')
                        </div>
                    </div>
                </div>

                <div class="col-md-6 bg-gray-200 min-h-screen">
                    <div class="row justify-center h-full pt-20 pb-40">
                        <div class="col-md-8">
                            @yield('demo')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
