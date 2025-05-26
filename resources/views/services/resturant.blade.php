@extends('layouts.app')

@section('title', 'تصميم مواقع المطاعم والكافيهات')

@section('content')

<section class="service-header text-center mt-4">
    <h1 class="display-5 fw-bold">خدمة تصميم مواقع المطاعم والكافيهات</h1>
</section>

<!-- المحتوى -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم موقع مطعم أو كافيه">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3">لماذا تختار شركة الدانا لتصميم موقع مطعمك أو كافيهك؟</h2>
            <p>
                في <strong>شركة الدانا</strong> نقدم لك موقعًا إلكترونيًا عصريًا يساعدك في عرض قائمة الطعام، استقبال الطلبات، والتواصل مع عملائك بطريقة احترافية وسهلة.
            </p>
            <ul>
                <li>تصميم جذاب متجاوب مع الموبايل والأجهزة اللوحية</li>
                <li>صفحات للقائمة، العروض، الحجوزات، والتقييمات</li>
                <li>نظام طلبات أونلاين مع خيارات الدفع المتعددة</li>
                <li>ربط مع تطبيقات التوصيل أو إعداد نظام توصيل داخلي</li>
                <li>إمكانية عرض صور الطعام والمكان بطريقة احترافية</li>
                <li>لوحه تحكم كامله </li>
                <li>اعداد صلاحيات المستخدمين</li>
            </ul>
        </div>
    </div>

    <hr class="my-5">

    <!-- مميزات الخدمة -->
    <div class="row text-center">
        <h3 class="mb-4">مميزات مواقع المطاعم والكافيهات من الدانا</h3>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-utensils feature-icon mb-3"></i>
                <h5>عرض منيو تفاعلي</h5>
                <p>تصميم خاص لقائمة الطعام مع صور وأسعار وتفاصيل الأطباق.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-shopping-cart feature-icon mb-3"></i>
                <h5>نظام طلبات أونلاين</h5>
                <p>استقبال الطلبات من الموقع مباشرة مع دعم الدفع الإلكتروني.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-star feature-icon mb-3"></i>
                <h5>التقييمات وآراء العملاء</h5>
                <p>نظام تقييم يسمح للعملاء بمشاركة تجاربهم داخل الموقع.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
    </div>
</div>

@endsection
