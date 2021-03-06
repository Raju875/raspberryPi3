@extends('front.master')

@section('title')
    Portfolio
@endsection

@section('body')
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:#3680C1">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image"><img class="img-circle img-responsive" src="{{ asset('/front') }}/img/a-new-beginning.png" alt=""></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="color:#3680C1">2010-2012</h4>
                                    <h4 class="subheading" style="color:#3680C1">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="img-circle img-responsive" src="{{ asset('/front') }}/img/airplane-take-off-at-sunset-hd-wallpaper.png" alt=""></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="color:#3680C1">APRIL 2013</h4>
                                    <h4 class="subheading" style="color:#3680C1">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image"><img class="img-circle img-responsive" src="{{ asset('/front') }}/img/xperia-z4-tablet-black-1240x840-a07acf270af4d6789d0e83aea747b064.png" alt=""></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="color:#3680C1">JANUARY 2014</h4>
                                    <h4 class="subheading" style="color:#3680C1">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="img-circle img-responsive" src="{{ asset('/front') }}/img/IMG_0195.png" alt=""></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 style="color:#3680C1">FEBRUARY 2015</h4>
                                    <h4 class="subheading" style="color:#3680C1">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged!
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part<br>
                                    Of Our<br>
                                    WORK!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection