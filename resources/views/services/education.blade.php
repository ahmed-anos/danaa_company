@extends('layouts.app')

@section('title', 'تصميم المنصات التعليمية')

@section('content')

<section class="service-header text-center mt-4">
    <h1 class="display-5 fw-bold">خدمة تصميم المنصات التعليمية</h1>
</section>

<!-- المحتوى -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم منصة تعليمية">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3">لماذا تختار شركة الدانا لتصميم منصتك التعليمية؟</h2>
            <p>
                في <strong>شركة الدانا</strong> نساعدك في بناء منصة تعليمية احترافية تخدم المعلمين والطلاب وتدعم التعلم الإلكتروني الحديث بأسلوب تفاعلي وآمن.
            </p>
            <ul>
                <li>تصميم مخصص سهل الاستخدام ومتجاوب مع كل الأجهزة</li>
                <li>نظام إدارة محتوى تعليمي مرن وديناميكي</li>
                <li>نظام عضويات للطلاب والمدربين</li>
                <li>إمكانية رفع فيديوهات ودروس مباشرة أو مسجلة</li>
                <li>دعم أنظمة الدفع والاشتراكات وإصدار الشهادات</li>
            </ul>
        </div>
    </div>

    <hr class="my-5">

    <!-- مميزات الخدمة -->
    <div class="row text-center">
        <h3 class="mb-4">مميزات المنصة التعليمية من الدانا</h3>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-video feature-icon mb-3"></i>
                <h5>نظام دروس مرئية متكامل</h5>
                <p>رفع فيديوهات، بث مباشر، ومتابعة تقدم الطلاب.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-user-graduate feature-icon mb-3"></i>
                <h5>إدارة الطلاب والمدربين</h5>
                <p>نظام تسجيل دخول وصلاحيات خاصة لكل مستخدم.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-certificate feature-icon mb-3"></i>
                <h5>شهادات وإختبارات</h5>
                <p>نظام اختبارات أوتوماتيكي وشهادات نهاية الدورات.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
    </div>
</div>

@endsection
