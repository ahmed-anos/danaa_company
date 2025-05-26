@extends('layouts.app')

@section('title', 'تصميم أنظمة إدارة المخازن')

@section('content')

<section class="service-header text-center mt-4">
    <h1 class="display-5 fw-bold">خدمة تصميم أنظمة إدارة المخازن</h1>
</section>

<!-- المحتوى -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم نظام إدارة مخازن">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3">لماذا تختار شركة الدانا لتصميم نظام إدارة المخازن الخاص بك؟</h2>
            <p>
                في <strong>شركة الدانا</strong> نوفر لك نظامًا متكاملًا لإدارة المخزون يساعدك في تتبع المنتجات، تنظيم الكميات، إصدار الفواتير والتقارير، وتحسين الكفاءة التشغيلية لنشاطك التجاري.
            </p>
            <ul>
                <li>واجهة استخدام سهلة ومتجاوبة مع مختلف الأجهزة</li>
                <li>إدارة كاملة للأصناف، المخازن، والكميات</li>
                <li>تنبيهات لنقص المخزون وانتهاء الصلاحية</li>
                <li>إصدار فواتير شراء وبيع وتسجيل الحركات المخزنية</li>
                <li>تقارير لحظية بالمخزون، المبيعات، والمشتريات</li>
            </ul>
        </div>
    </div>

    <hr class="my-5">

    <!-- مميزات الخدمة -->
    <div class="row text-center">
        <h3 class="mb-4">مميزات نظام إدارة المخازن من الدانا</h3>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-boxes feature-icon mb-3"></i>
                <h5>إدارة الأصناف والمخزون</h5>
                <p>إضافة وتعديل الأصناف بسهولة وتتبع الكميات المتاحة في كل مخزن.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-receipt feature-icon mb-3"></i>
                <h5>فواتير ومشتريات ومبيعات</h5>
                <p>نظام متكامل لإنشاء الفواتير وربطها بالمخزون تلقائيًا.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-chart-line feature-icon mb-3"></i>
                <h5>تقارير وتحليلات</h5>
                <p>تقارير تفصيلية تساعدك في اتخاذ قرارات دقيقة وإدارة أفضل.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
    </div>
</div>

@endsection
