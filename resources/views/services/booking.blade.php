@extends('layouts.app')

@section('title', 'تصميم أنظمة الحجز')

@section('content')

<section class="service-header text-center mt-4">
    <h1 class="display-5 fw-bold">خدمة تصميم أنظمة الحجز</h1>
</section>

<!-- المحتوى -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('img/project-1.jpg') }}" class="img-fluid rounded shadow" alt="تصميم نظام حجز">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3">لماذا تختار شركة الدانا لتصميم نظام الحجز الخاص بك؟</h2>
            <p>
                في <strong>شركة الدانا</strong> نقدم لك نظام حجز متكامل يسهل لك تنظيم مواعيد العيادات، حجوزات الفنادق، وحجوزات الصالات بكفاءة عالية مع واجهة سهلة الاستخدام.
            </p>
            <ul>
                <li>حجز المواعيد وإدارتها بسهولة لجميع أنواع الخدمات</li>
                <li>تذكير وتنبيهات للعملاء والموظفين قبل المواعيد</li>
                <li>إدارة جداول الموظفين والغرف أو القاعات</li>
                <li>تقارير مفصلة عن الحجوزات والإيرادات</li>
                <li>دعم الدفع الإلكتروني وإصدار الفواتير</li>
            </ul>
        </div>
    </div>

    <hr class="my-5">

    <!-- مميزات الخدمة -->
    <div class="row text-center">
        <h3 class="mb-4">مميزات نظام الحجز من الدانا</h3>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-calendar-check feature-icon mb-3"></i>
                <h5>نظام حجز ذكي</h5>
                <p>إدارة سهلة وفعالة لمواعيد العملاء مع إمكانية التعديل والإلغاء.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-bell feature-icon mb-3"></i>
                <h5>التنبيهات والتذكيرات</h5>
                <p>تنبيهات تلقائية عبر الرسائل أو البريد لتأكيد المواعيد.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fas fa-file-invoice feature-icon mb-3"></i>
                <h5>إدارة الفواتير والدفع</h5>
                <p>دعم أنظمة الدفع المتنوعة مع إصدار فواتير إلكترونية.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2">العودة إلى الرئيسية</a>
    </div>
</div>

@endsection
