<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-thumb">
                    <h1>Background</h1>
                    <p>Quisque tempor bibendum dolor at volutpat. Suspendisse venenatis quam sed libero euismod feugiat. In cursus nisi vitae lectus facilisis mollis. Nullam scelerisque, quam nec iaculis vulputate.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
                <img src="images/about-img.jpg" class="img-responsive img-circle" alt="About">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title text-center">
                    <h1>Snapshot Team</h1>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                </div>
            </div>

            <!-- team carousel -->
            <div id="team-carousel" class="owl-carousel">
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img1.jpg') }}" class="img-responsive img-circle" alt="Mary">
                        </div>
                        <h2 class="heading">Mary, CEO</h2>
                        <p class="description">Aliquam ac justo est. Praesent feugiat cursus est.</p>
                    </div>
                </div>
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img2.jpg') }}" class="img-responsive img-circle" alt="Jack">
                        </div>
                        <h2 class="heading">Jack, Founder</h2>
                        <p class="description">Maecenas sed diam eget risus varius blandit sit non.</p>
                    </div>
                </div>
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img3.jpg') }}" class="img-responsive img-circle" alt="Linda">
                        </div>
                        <h2 class="heading">Linda, Manager</h2>
                        <p class="description">Phasellus nec ante in nunc molestie tincidunt ut eu diam.</p>
                    </div>
                </div>
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img4.jpg') }}" class="img-responsive img-circle" alt="Sandy">
                        </div>
                        <h2 class="heading">Sandy, Director</h2>
                        <p class="description">Curabitur vulputate euismod neque et tincidunt.</p>
                    </div>
                </div>
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img5.jpg') }}" class="img-responsive img-circle" alt="Lukia">
                        </div>
                        <h2 class="heading">Lukia, Fashion</h2>
                        <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
                    </div>
                </div>
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img6.jpg') }}" class="img-responsive img-circle" alt="George">
                        </div>
                        <h2 class="heading">George, Admin</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                </div>
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img7.jpg') }}" class="img-responsive img-circle" alt="Day">
                        </div>
                        <h2 class="heading">Day, Accountant</h2>
                        <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
                    </div>
                </div>
                <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-thumb">
                        <div class="image-holder">
                            <img src="{{ URL::asset('images/team-img8.jpg') }}" class="img-responsive img-circle" alt="Lynn">
                        </div>
                        <h2 class="heading">Lynn, Marketing</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                </div>
            </div>
            <!-- end team carousel -->
        </div>
    </div>
</section>

@push('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
@endpush