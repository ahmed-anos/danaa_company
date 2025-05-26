@extends('layouts.app')

@section('title', 'Our Blog')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Projects</li>
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


    <!-- Project Start -->
  
        <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">المشاريع</h5>
                <h1>مشاريعنا التي تم إنجازها مؤخراً</h1>
            </div>


            <div class="row g-5">
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="project-item">
            <div class="project-img">
                <img src="img/project-1.jpg" class="img-fluid w-100 rounded" alt="تصميم موقع شخصي">
                <div class="project-content">
                    <a href="#" class="text-center">
                        <h4 class="text-secondary">تصميم مواقع شخصية</h4>
                        <p class="m-0 text-white">تطوير مواقع شخصية متجاوبة وعصرية</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
        <div class="project-item">
            <div class="project-img">
                <img src="img/project-2.jpg" class="img-fluid w-100 rounded" alt="أنظمة الحجز وإدارة الأعمال">
                <div class="project-content">
                    <a href="#" class="text-center">
                        <h4 class="text-secondary">برامج الحجز وإدارة الأعمال</h4>
                        <p class="m-0 text-white">أنظمة متطورة للحجوزات وإدارة الصالات والمطاعم</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
        <div class="project-item">
            <div class="project-img">
                <img src="img/project-3.jpg" class="img-fluid w-100 rounded" alt="متاجر إلكترونية متقدمة">
                <div class="project-content">
                    <a href="#" class="text-center">
                        <h4 class="text-secondary">تصميم متاجر إلكترونية</h4>
                        <p class="m-0 text-white">متاجر إلكترونية متكاملة تدعم جميع وسائل الدفع</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="project-item">
            <div class="project-img">
                <img src="img/project-4.jpg" class="img-fluid w-100 rounded" alt="برامج المحاسبة والتقارير">
                <div class="project-content">
                    <a href="#" class="text-center">
                        <h4 class="text-secondary">برامج المحاسبة والتقارير</h4>
                        <p class="m-0 text-white">أنظمة متكاملة للمحاسبة وإعداد التقارير المالية</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
        <div class="project-item">
            <div class="project-img">
                <img src="img/project-5.jpg" class="img-fluid w-100 rounded" alt="منصات تعليمية وتدريبية">
                <div class="project-content">
                    <a href="#" class="text-center">
                        <h4 class="text-secondary">المنصات التعليمية والتدريبية</h4>
                        <p class="m-0 text-white">تصميم وتطوير منصات تعليمية تفاعلية وسهلة الاستخدام</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
        <div class="project-item">
            <div class="project-img">
                <img src="img/project-6.jpg" class="img-fluid w-100 rounded" alt="تحسين محركات البحث SEO">
                <div class="project-content">
                    <a href="#" class="text-center">
                        <h4 class="text-secondary">تحسين محركات البحث (SEO)</h4>
                        <p class="m-0 text-white">خدمات متقدمة لتحسين ظهور موقعك على محركات البحث</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
    <!-- Project End -->
@endsection
