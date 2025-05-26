@extends('layouts.app')

@section('title', 'تصميم برامج إدارة الأعمال')

@section('content')

<section class="service-header text-center mt-4">
    <h1 class="display-5 fw-bold">خدمة تصميم برامج إدارة الأعمال</h1>
</section>

<!-- المحتوى -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم برامج إدارة الأعمال">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3">لماذا تختار شركة الدانا لبرامج إدارة الأعمال؟</h2>
            <p>
                في <strong>شركة الدانا</strong> نقدم لك حلولاً متكاملة لتصميم وتطوير برامج إدارة الأعمال (ERP/CRM/HR) مخصصة لتلبية احتياجات منشأتك وتحسين أداء عملياتك اليومية.
            </p>
            <ul>
                <li>أنظمة مصممة حسب طبيعة عملك</li>
                <li>سهولة في إدارة الموارد والموظفين والعملاء</li>
                <li>تقارير تحليلية لمتابعة الأداء واتخاذ القرارات</li>
                <li>دعم تعدد الفروع والصلاحيات والمستخدمين</li>
                <li>دعم فني مستمر وتحديثات دورية</li>
            </ul>
        </div>
    </div>

    <hr class="my-5">

    <!-- مميزات الخدمة -->
    <div class="row text-center">
        <h3 class="mb-4">مميزات برامج إدارة الأعمال من الدانا</h3>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-cogs feature-icon mb-3"></i>
                <h5>نظام مرن قابل للتخصيص</h5>
                <p>برمجيات قابلة للتطوير حسب حجم العمل.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-users-cog feature-icon mb-3"></i>
                <h5>إدارة شاملة للموارد</h5>
                <p>إدارة الموظفين، العملاء، المخزون، الفواتير، وغيرها.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-database feature-icon mb-3"></i>
                <h5>تقارير دقيقة لحظية</h5>
                <p>لوحة تحكم متكاملة لمتابعة الأداء واتخاذ القرار السليم.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
    </div>
</div>

@endsection
