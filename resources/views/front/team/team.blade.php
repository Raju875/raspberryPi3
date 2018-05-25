@extends('front.master')

@section('title')
    Portfolio
@endsection

@section('body')
    <section id="team" class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:#3680C1">Our Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member"><img src="{{ asset('/front') }}/img/mahabub.jpg" class="img-responsive img-circle" alt="">
                        <h4 style="color:#3680C1">Mahabub Rahman</h4>
                        <p class="text-muted">Team Leader</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/decodermabs"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img src="{{ asset('/front') }}/img/mehadi.jpg" class="img-responsive img-circle" alt="">
                        <h4 style="color:#3680C1">Ahm Mahedi Hasan Suvro</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/ahmmahedi.hasansuvro?fref=ufi"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div><div class="col-sm-4">
                    <div class="team-member"><img src="{{ asset('/front') }}/img/raju.jpg" class="img-responsive img-circle" alt="">
                        <h4 style="color:#3680C1">Al Amin Raju</h4>
                        <p class="text-muted">Programmer & Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/oalaminraju"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img src="{{ asset('/front') }}/img/masum.jpg" class="img-responsive img-circle" alt="">
                        <h4 style="color:#3680C1">Adnatull Al Masum</h4>
                        <p class="text-muted">Programmer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/aam95"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img src="" class="img-responsive img-circle" alt="">
                        <h4 style="color:#3680C1"></h4>
                        <p class="text-muted"></p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img src="{{ asset('/front') }}/img/tania.jpg" class="img-responsive img-circle" alt="">
                        <h4 style="color:#3680C1">Tania Easmin Eva</h4>
                        <p class="text-muted">Content Writter
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/ishana.isha.14"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection