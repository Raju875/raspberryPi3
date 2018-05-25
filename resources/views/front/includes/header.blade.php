<div id="page-top" class="index">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand page-scroll" href="#page-top">Studio</a></div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a  href="{{ url('/') }}">Home</a></li>
                    <li><a  href="{{ url('/project') }}">Project</a></li>
                    <li><a  href="{{ url('/howto') }}">How To</a></li>
                    {{--<li><a  href="{{ url('about') }}">About</a></li>--}}
                    <li><a  href="{{ url('/pdf') }}">PDF</a></li>
                    <li><a  href="{{ url('/team') }}">Team</a></li>
                    <li><a  href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header style="background-image:url({{asset('/front/')}}/img/raspberrypi3.jpg) ;  background-repeat: no-repeat; background-size: 800px 500px";>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Site!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
        </div>
</div>
    </header>