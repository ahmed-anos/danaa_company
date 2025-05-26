@extends('layouts.app')

@section('title', 'تصميم مواقع النوادي والصالات الرياضية')

@section('content')

<section class="service-header text-center mt-4">
    <h1 class="display-5 fw-bold">خدمة تصميم مواقع النوادي والصالات الرياضية</h1>
</section>

<!-- المحتوى -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم موقع نادي رياضي">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3">لماذا تختار شركة الدانا لتصميم موقع ناديك أو صالتك الرياضية؟</h2>
            <p>
                في <strong>شركة الدانا</strong> نقدم لك حلاً متكاملاً لتصميم موقع احترافي للنادي أو الجيم الخاص بك يساعدك في جذب المشتركين وتنظيم خدماتك وعرض اشتراكاتك وبرامجك التدريبية بسهولة.
            </p>
            <ul>
                <li>تصميم عصري متجاوب مع الجوال والأجهزة المختلفة</li>
                <li>صفحات للمدربين، الاشتراكات، الحصص التدريبية، والتقييمات</li>
                <li>نظام حجز حصص أو جلسات تدريبية أونلاين</li>
                <li>ربط بأنظمة الدفع والاشتراكات الإلكترونية</li>
                <li>إمكانية عرض صور وفيديوهات من النادي أو الجيم</li>
            </ul>
        </div>
    </div>

    <hr class="my-5">

    <!-- مميزات الخدمة -->
    <div class="row text-center">
        <h3 class="mb-4">مميزات مواقع النوادي والصالات الرياضية من الدانا</h3>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-dumbbell feature-icon mb-3"></i>
                <h5>عرض البرامج والخطط التدريبية</h5>
                <p>صفحات مخصصة لعرض التفاصيل والصور لكل خطة تدريبية.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-calendar-check feature-icon mb-3"></i>
                <h5>نظام حجز الحصص أونلاين</h5>
                <p>إمكانية حجز الجلسات والدفع الإلكتروني من الموقع مباشرة.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-users feature-icon mb-3"></i>
                <h5>إدارة المدربين والعملاء</h5>
                <p>ملفات شخصية للمدربين ومتابعة بيانات المشتركين بسهولة.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
    </div>
</div>

@endsection
