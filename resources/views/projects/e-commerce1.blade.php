@extends('layouts.app')

@section('title', 'تفاصيل مشروع متجر إلكتروني')

@section('content')

<style>
  .project-header {
    background: linear-gradient(90deg, #4b6cb7, #182848);
    color: white;
    padding: 40px 20px;
    border-radius: 12px;
    margin-bottom: 30px;
  }
  .tech-badge {
    display: inline-block;
    background-color: #f0f0f0;
    color: #333;
    padding: 8px 15px;
    border-radius: 20px;
    margin: 5px 5px 5px 0;
    font-weight: 600;
    font-size: 0.9rem;
  }
  .demo-video {
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0 8px 15px rgba(0,0,0,0.2);
  }
  .carousel-inner img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
  }
  @media (max-width: 767px) {
    .carousel-inner img {
      height: 200px;
    }
  }
  .project-link a {
    display: inline-block;
    margin-top: 15px;
    font-weight: 700;
    color: #1a73e8;
    text-decoration: none;
  }
  .project-link a:hover {
    text-decoration: underline;
  }
</style>

<div class="container mt-5 mb-5">

  <div class="project-header text-center">
    <h1>متجر إلكتروني متكامل</h1>
    <p>مشروع تصميم متجر إلكتروني احترافي مع جميع الخصائص التي يحتاجها أي متجر ناجح</p>
  </div>

  <div class="row mb-5">
    <div class="col-lg-6">
      <!-- Carousel الصور -->
      <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/project-1.jpg') }}" alt="صورة المشروع 1">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/project-1.jpg') }}" alt="صورة المشروع 2">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/project-1.jpg') }}" alt="صورة المشروع 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">السابق</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">التالي</span>
        </button>
      </div>
    </div>

    <div class="col-lg-6">
      <h3>تفاصيل المشروع</h3>
     <p>
هذا المتجر الإلكتروني تم تصميمه بعناية فائقة ليجمع بين الجمال والعملية، ويوفر تجربة تسوق فريدة ومميزة لعملائك. 
باستخدام أحدث التقنيات وأفضل الممارسات في تصميم واجهات المستخدم، يضمن المتجر سرعة الأداء وسهولة التصفح على جميع الأجهزة، سواء كانت هواتف ذكية أو أجهزة لوحية أو كمبيوتر مكتبي.
 
تم دمج أنظمة دفع إلكتروني آمنة وموثوقة تدعم جميع البوابات العالمية والمحلية، مما يتيح لعملائك إتمام عمليات الشراء بكل ثقة وسلاسة. 
كما يوفر المتجر لوحة تحكم إدارية متكاملة تُمكّنك من متابعة المنتجات والمخزون والطلبات بكل سهولة ومرونة، مع تقارير تحليلية تساعدك على اتخاذ القرارات التسويقية الصحيحة التي تزيد من أرباحك.
 
نحن لا نقدم مجرد متجر إلكتروني، بل نقدم لك منصة عمل متطورة تعزز حضورك الرقمي وتفتح أمامك آفاق جديدة للنمو والتوسع في سوق التجارة الإلكترونية.
</p>


    <h4>لماذا هذا المشروع مميز؟</h4>
<ul>
  <li><strong>تجربة مستخدم سلسة:</strong> تصميم واجهات سهلة الاستخدام تضمن بقاء الزائر لفترة أطول وتحويله إلى عميل.</li>
  <li><strong>أداء عالي:</strong> سرعة تحميل ممتازة وتقنيات متطورة لضمان استقرار المتجر حتى مع عدد زيارات كبير.</li>
  <li><strong>دعم شامل:</strong> نظام دفع متكامل وآمن مع خيارات متنوعة تلائم كل أنواع العملاء.</li>
  <li><strong>قابلية التطوير:</strong> بنية مرنة تسمح بإضافة ميزات جديدة بسهولة مع نمو عملك.</li>
  <li><strong>التقنيات المستخدمة:</strong></li>
  <li>
    <span class="tech-badge">Laravel</span>
    <span class="tech-badge">Bootstrap 5</span>
    <span class="tech-badge">Vue.js</span>
    <span class="tech-badge">MySQL</span>
    <span class="tech-badge">PayPal API</span>
  </li>
</ul>


      <div class="project-link">
        <a href="https://example.com" target="_blank" rel="noopener noreferrer">زيارة المشروع</a>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <h3>ديمو عرض المشروع</h3>
    <video controls class="demo-video">
      <source src="{{ asset('videos/ecommerce-demo.mp4') }}" type="video/mp4">
      المتصفح الخاص بك لا يدعم تشغيل الفيديو.
    </video>
  </div>

  <div class="text-center mt-5">
    <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2">العودة إلى الرئيسيه</a>
  </div>

</div>

@endsection
