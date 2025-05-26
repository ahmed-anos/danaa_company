@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

@if (session('success'))
    <div class="alert bg-success text-white p-3 rounded">
        {{ session('success') }}
    </div>
@endif
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Fact Start -->
    {{-- <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Fact End -->


    <!-- Contact Start -->
       <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">تواصل معنا</h5>
                <h1 class="mb-3">لو عندك استفسار</h1>
                {{-- <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">العنوان</h4>
                                <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">مصر</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">اتصل بنا</h4>
                                <a class="h5" href="https://wa.me/201000469426" target="_blank">+01000469426</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">الايميل</h4>
                                <a class="h5" href="mailto:ahmdkhaldnws105@gmail.com" target="_blank">ahmdkhaldnws105@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27368.24902113328!2d31.18617032651336!3d30.969613516098892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7bb4d2aa1877b%3A0x6b9caf7bbe867370!2z2KfZhNmF2K3ZhNipINin2YTZg9io2LHZidiMINin2YTZhdit2YTYqSDYp9mE2YPYqNix2YkgKNmC2LPZhSAyKdiMINmF2LHZg9iyINin2YTZhdit2YTZhyDYp9mE2YPYqNix2YnYjCDZhdit2KfZgdi42Kkg2KfZhNi62LHYqNmK2Kk!5e0!3m2!1sar!2seg!4v1748248314905!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                                                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" class="p-5 rounded contact-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" name="name" placeholder="الاسم">
                                @error('name')
                                    <span class="text-danger">خطا في الاسم</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" name="email" placeholder="الايميل">
                                 @error('email')
                                    <span class="text-danger">خطا في الايميل</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" name="activity" placeholder="المشروع">
                                 @error('activity')
                                    <span class="text-danger">خطا في النشاط</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" name="message" rows="6" cols="10" placeholder="الرساله"></textarea>
                                 @error('message')
                                    <span class="text-danger">خطا في الرساله</span>
                                @enderror
                            </div>
                            <div class="text-end">
                                <button class="btn bg-primary text-white py-3 px-5" type="submit">ارسل رساله</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
