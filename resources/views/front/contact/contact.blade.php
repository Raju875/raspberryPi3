@extends('front.master')

@section('title')
    Contact
@endsection

@section('body')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" style="color:#3680C1">Contact Us</h2>
            </hr>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-muted text-center">Mail Me</h2>
            </div>
            <div class="col-lg-6">
                <h2 class="text-muted text-center">Message Me</h2>
                <form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    @endsection