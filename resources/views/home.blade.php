@extends('layout.main')
@include('partials.navbar')
@section('container')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1200x500?" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1200x500?" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1200x500?" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <section class="banner">
        <div class="container">
            <div class="row brands">
                <div class=" col-lg-12 col-12 text-center">
                    <img src="{{ '/assets/images/brands.png' }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        OUR SUPER BENEFITS
                    </p>
                    <h2 class="primary-header">
                        Learn Faster & Better
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ '/assets/images/ic_globe.png' }}" class="icon" alt="">
                        <h3 class="title">
                            Diversity
                        </h3>
                        <p class="support">
                            Learn from anyone around the <br> world and get a new skills
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ '/assets/images/ic_globe-1.png' }}" class="icon" alt="">
                        <h3 class="title">
                            A.I Guideline
                        </h3>
                        <p class="support">
                            Lara will help you to choose <br> which path that suitable for you
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ '/assets/images/ic_globe-2.png' }}" class="icon" alt="">
                        <h3 class="title">
                            1-1 Mentoring
                        </h3>
                        <p class="support">
                            We will ensure that you will get <br> what you really do need
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ '/assets/images/ic_globe-3.png' }}" class="icon" alt="">
                        <h3 class="title">
                            Future Job
                        </h3>
                        <p class="support">
                            Get your dream job in your dream <br> company together with us
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        GOOD INVESTMENT
                    </p>
                    <h2 class="primary-header text-white">
                        Start Your Journey
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            View Syllabus
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    GILA BELAJAR
                                </p>
                                <h1 class="price text-center">
                                    $280K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Pro Techstack Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        iMac Pro 2021 & Display
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Premium Design Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Website Builder
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="#" class="btn btn-master btn-primary w-100 mt-3">
                                        Take This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    BARU MULAI
                                </p>
                                <h1 class="price text-center">
                                    $140K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ '/assets/images/ic_check.svg' }}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="#" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-70">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{ '/assets/images/brands.png' }}" height="30" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        SUCCESS STUDENTS
                    </p>
                    <h2 class="primary-header">
                        We Really Love Laracamp
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ '/assets/images/stars.svg' }}" alt="">
                                <p class="message">
                                    I was not really into code but after they teach me how to train my logic then I was really fall in love with code
                                </p>
                                <div class="user">
                                    <img src="{{ '/assets/images/fanny_photo.png' }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Fanny
                                        </h4>
                                        <p class="role">
                                            Developer at Google
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ '/assets/images/stars.svg' }}" alt="">
                                <p class="message">
                                    Code is really important if we want to build a company and strike to the win
                                </p>
                                <div class="user">
                                    <img src="{{ '/assets/images/angga.png' }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Angga
                                        </h4>
                                        <p class="role">
                                            CEO at BWA Corp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ '/assets/images/stars.svg' }}" alt="">
                                <p class="message">
                                    My background is design and art but I do really love how to make my design working in the development phase
                                </p>
                                <div class="user">
                                    <img src="/assets/images/beatrice.png" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Beatrice
                                        </h4>
                                        <p class="role">
                                            QA at Facebook
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright Laracamp BWA Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
