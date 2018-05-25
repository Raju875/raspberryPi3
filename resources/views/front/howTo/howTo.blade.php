@extends('front.master')

@section('title')
    Portfolio
@endsection

@section('body')
    <section id="port" class="bg-danger">
        <div class="container">

        </div>
    </section>
    <script>
        Modernizr.load({
            test: Modernizr.csstransforms3d && Modernizr.csstransitions,
            yep: ['{{ asset('/front') }}/js/jquery-1.10.1.min.js', '{{ asset('/front') }}/js/jquery.hoverfold.js'],
            nope: '',
            callback: function(url, result, key) {
                if (url === '{{ asset('/front') }}/js/jquery.hoverfold.js') {
                    $('#grid').hoverfold();
                }
            }
        });
    </script>
@endsection