@extends('layouts.app')

@section('title', 'الرئيسيه')

@section('content')
@if (session('success'))
    <div class="alert bg-success text-white p-3 rounded">
        {{ session('success') }}
    </div>
@endif
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpg" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">An Innovative IT Solutions Agency</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                            <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Quality Digital Services You Really Need!</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                            <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    {{-- <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">النجاح في الحصول على عميل سعيد</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1"> الاعمال الناجحه</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">المشاريع الفعليه</h5>
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


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">من نحن</h5>
                    <h1 class="mb-4">شركة الدانا لتصميم المواقع وحلول البرمجيات المتكاملة</h1>
                    <p>
                        شركة <strong>الدانا</strong> متخصصة في تصميم وتطوير المواقع الإلكترونية والمتاجر الرقمية الاحترافية، التي تتميز بدعم كامل لمحركات البحث (SEO) وتعدد اللغات، لضمان وصول مشروعك إلى أكبر شريحة ممكنة من العملاء محليًا وعالميًا.
                    </p>
                    <p>
                        لا نقف عند التصميم فقط، بل نقدم لك أنظمة متكاملة لإدارة أعمالك تشمل: برامج محاسبية دقيقة، أنظمة تقارير احترافية تساعدك على اتخاذ قرارات أفضل، أنظمة حجز وإدارة مواعيد، بالإضافة إلى حلول ذكية لإدارة المؤسسات والشركات.
                    </p>
                    <p>
                        نبرمج لك كل ما تحتاجه حسب طبيعة عملك، سواء كنت تدير <strong>منصة تعليمية</strong>، <strong>جيم رياضي</strong>، <strong>مطعم</strong>، <strong>مخزن</strong>، أو أي مشروع خاص — لدينا الحلول المخصصة التي تناسبك.
                    </p>
                    <div id="moreContent" style="display: none;">
                        <p>
                            كما نمتلك خبرة قوية في تطوير <strong>برامج سطح المكتب</strong> لأنظمة التشغيل المختلفة، ونقدم دعمًا فنيًا مستمرًا لضمان تشغيل مشروعك بدون أي توقف.
                        </p>
                        <p>
                            في <strong>الدانا</strong> نضع خدمة العملاء على رأس أولوياتنا، فنحن نتابع معك خطوة بخطوة حتى بعد تسليم المشروع، لضمان رضاك الكامل، ونقدم لك دعم فني دائم وتحديثات دورية لضمان استمرارية الأداء بأعلى جودة.
                        </p>
                        <p>
                            نحن لا نقدم مجرد خدمات... نحن نكون شريكك في النجاح، ونساعدك على تحقيق رؤيتك وتحويلها إلى منصة تقنية قوية ومستدامة.
                        </p>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-secondary rounded-pill px-5 py-3 text-white" onclick="document.getElementById('moreContent').style.display = 'block'; this.style.display = 'none';">
                        عرض المزيد
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">خدامتنا</h5>
                <h1>الخدمات المصممة خصيصًا لأعمالك</h1>
            </div>
            
            <div class="row g-5 services-inner">
   <div class="col-md-6 col-lg-4 mx-auto wow fadeIn" data-wow-delay=".3s">
    <div class="services-item bg-light">
        <div class="p-4 text-center services-content">
            <div class="services-content-icon">
                <i class="fa fa-desktop fa-7x mb-4 text-primary"></i>
                <h4 class="mb-3">تصميم المواقع الإلكترونية</h4>
                <p class="mb-4">
                    نقدم لك خدمة تصميم مواقع إلكترونية احترافية ومتجاوبة مع جميع الأجهزة،
                    مصممة خصيصًا لتلائم نشاطك التجاري وتعكس هويتك بأحدث التقنيات والمعايير العالمية.
                </p>
                <a href="{{ url('services/profile') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">
                    اعرف أكثر
                </a>
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
                    <a href="{{ url('services/ecommerce') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
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
                    <a href="{{ url('services/business_management') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
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
                    <a href="{{ url('services/education') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
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
                    <a href="{{ url('services/sports') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
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
                    <a href="{{ url('services/resturant') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
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
                    <a href="{{ url('services/inventory') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
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
                    <a href="{{ url('services/booking') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- Services End -->


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
                    <a href="{{ url('projects/profile') }}" class="text-center">
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
                    <a href="{{ url('projects/e-commerce1') }}" class="text-center">
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


    <!-- Blog Start -->
    {{-- <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Blog</h5>
                <h1>Latest Blog & News</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                <a href="" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">24 March 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Development</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                <a href="" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">23 April 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Mobile App</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                <a href="" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">30 jan 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    <!-- Team Start -->
    {{-- <div class="container-fluid py-5 mb-5 team">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Team</h5>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Testimonial</h5>
                <h1>Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Testimonial End -->


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
