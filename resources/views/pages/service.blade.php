@extends('layouts.app')

@section('title', 'Our Blog')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
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


    <!-- Services Start -->

    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">خدامتنا</h5>
                <h1>الخدمات المصممة خصيصًا لأعمالك</h1>
            </div>
            <div class="row g-5 services-inner">
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fa fa-user fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">تصميم المواقع الشخصية</h4>
                    <p class="mb-4">صمّم موقعك الشخصي بطريقة احترافية تعكس هويتك وتبرز أعمالك وسيرتك الذاتية بأحدث التقنيات.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fa fa-building fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">مواقع الشركات</h4>
                    <p class="mb-4">نصمم لك موقع لشركتك يدعم عدة لغات ومتوافق مع محركات البحث ويعكس احترافية نشاطك التجاري.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fa fa-shopping-cart fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">تصميم المتاجر الإلكترونية</h4>
                    <p class="mb-4">أنشئ متجرك الإلكتروني المتكامل مع جميع وسائل الدفع، ونظام لإدارة الطلبات والمخزون بسهولة واحترافية.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fas fa-chart-line fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">برامج إدارة الأعمال</h4>
                    <p class="mb-4">نصمم أنظمة كاملة لإدارة شركتك أو نشاطك التجاري تشمل العملاء، الفواتير، التقارير، المتابعة وخدمة العملاء.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fa fa-graduation-cap fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">المنصات التعليمية</h4>
                    <p class="mb-4">منصات تعليمية متكاملة للدورات، الاشتراكات، اختبارات الطلاب، التحكم بالمحتوى، تقارير الحضور والتفاعل.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fas fa-dumbbell fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">النوادي والصالات الرياضية</h4>
                    <p class="mb-4">نظام متكامل لإدارة الجيم يشمل العضويات، الاشتراكات، المتابعة الصحية، التقارير اليومية والحجوزات.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fas fa-utensils fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">نظام المطاعم والكافيهات</h4>
                    <p class="mb-4">نقدم أنظمة ذكية للمطاعم والكافيهات تشمل إدارة الطلبات، الطاولات، المخزون، الفواتير وتقارير الأداء.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fas fa-warehouse fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">أنظمة إدارة المخازن</h4>
                    <p class="mb-4">تحكم في مخزونك بدقة من خلال نظام ذكي لتسجيل المنتجات، متابعة الكميات، تنبيهات النقص والتقارير التفصيلية.</p>
                    <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>

        </div>
    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="services-item bg-light">
            <div class="p-4 text-center services-content">
                <div class="services-content-icon">
                    <i class="fas fa-calendar-alt fa-7x mb-4 text-primary"></i>
                    <h4 class="mb-3">نظام الحجوزات</h4>
                    <p class="mb-4">نظام لحجز القاعات أو الصالات أو العيادات مع تقويم تفاعلي وتنبيهات تلقائية وإدارة كاملة.</p>
                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- Services End -->
@endsection
