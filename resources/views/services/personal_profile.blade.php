@extends('layouts.app')

@section('title', 'المواقع الالكترونيه')

@section('content')

 <section class="service-header text-center mt-4">
        <h1 class="display-5 fw-bold">خدمة تصميم المواقع الإلكترونية</h1>
    </section>

    <!-- المحتوى -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم موقع احترافي">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">لماذا تختار شركة الدانا؟</h2>
                <p>
                    في شركة <strong>الدانا</strong> نقدم لك أفضل حلول تصميم المواقع الإلكترونية باحترافية عالية ومواصفات عصرية تلائم نشاطك التجاري وتمنحك التميز بين منافسيك.
                </p>
                <ul>
                    <li>تصميم عصري متجاوب مع جميع الأجهزة</li>
                    <li>تحسين لمحركات البحث (SEO)</li>
                    <li>لوحة تحكم سهلة الاستخدام</li>
                    <li>دعم فني متواصل وتحديثات دورية</li>
                </ul>
            </div>
        </div>

        <hr class="my-5">

        <!-- مميزات الخدمة -->
        <div class="row text-center">
            <h3 class="mb-4">مميزات الخدمة</h3>

            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-mobile-alt feature-icon mb-3"></i>
                    <h5>تصميم متجاوب</h5>
                    <p>يتوافق مع جميع الأجهزة والشاشات.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-rocket feature-icon mb-3"></i>
                    <h5>أداء سريع</h5>
                    <p>مواقع خفيفة وسريعة التحميل.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-lock feature-icon mb-3"></i>
                    <h5>أمان عالي</h5>
                    <p>تأمين الموقع ضد الاختراقات والثغرات.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
        </div>
    </div>


@endsection