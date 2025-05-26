@extends('layouts.app')

@section('title', 'تصميم المتاجر الإلكترونية')

@section('content')

<section class="service-header text-center mt-4">
    <h1 class="display-5 fw-bold">خدمة تصميم المتاجر الإلكترونية</h1>
</section>

<!-- المحتوى -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم متجر إلكتروني">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3">لماذا تختار شركة الدانا لتصميم متجرك الإلكتروني؟</h2>
            <p>
                في <strong>شركة الدانا</strong> نقدم لك متجراً إلكترونياً احترافياً يدعم جميع خصائص التجارة الإلكترونية ويمنحك تجربة بيع سلسة وسهلة للمستخدم.
            </p>
            <ul>
                <li>تصميم جذاب متجاوب مع كافة الأجهزة</li>
                <li>أنظمة دفع إلكتروني آمنة وسريعة</li>
                <li>التعامل المرن مع محركات البحث (SEO)</li>
                <li>تتبع العميل داخل المتجر لمعرفه اهداف العميل</li>
                <li>تتبع الصفحات التي تم تحويل عملائك من خلالها</li>
                <li>لوحة تحكم لإدارة المنتجات والطلبات والمخزون</li>
                <li>متجر متعدد اللغات والعملات</li>
                <li>دعم تقني مستمر وتحديثات مجانية</li>
            </ul>
        </div>
    </div>

    <hr class="my-5">

    <!-- مميزات الخدمة -->
    <div class="row text-center">
        <h3 class="mb-4">مميزات المتجر الإلكتروني من الدانا</h3>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-shopping-cart feature-icon mb-3"></i>
                <h5>سلة تسوق ذكية</h5>
                <p>تجربة شراء مرنة للمستخدم مع خيارات متعددة.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-credit-card feature-icon mb-3"></i>
                <h5>دفع إلكتروني آمن</h5>
                <p>تكامل مع أشهر بوابات الدفع العالمية والمحلية.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-chart-line feature-icon mb-3"></i>
                <h5>تقارير ومتابعة المبيعات</h5>
                <p>لوحة تحكم متكاملة لإدارة وتحليل أداء متجرك.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
    </div>
</div>

@endsection
