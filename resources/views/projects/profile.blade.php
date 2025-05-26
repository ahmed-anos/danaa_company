@extends('layouts.app')

@section('title', 'تفاصيل مشروع تصميم موقع إلكتروني شخصي')

@section('content')

<style>
  .project-header {
    background: linear-gradient(90deg, #11998e, #38ef7d);
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
    <h1>تصميم موقع إلكتروني شخصي</h1>
    <p>مشروع تصميم موقع شخصي احترافي يعكس هويتك الرقمية ويبرز مهاراتك وإنجازاتك بأفضل شكل</p>
  </div>

  <div class="row mb-5">
    <div class="col-lg-6">
      <!-- Carousel الصور -->
      <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/personal-site-1.jpg') }}" alt="صورة المشروع 1">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/personal-site-2.jpg') }}" alt="صورة المشروع 2">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/personal-site-3.jpg') }}" alt="صورة المشروع 3">
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
        هذا الموقع الإلكتروني الشخصي تم تصميمه ليكون واجهة رقمية احترافية تعكس شخصيتك ومهاراتك بأفضل صورة. 
        يجمع بين التصميم الأنيق وسهولة الاستخدام ليجذب الزوار ويعزز من فرص التواصل مع العملاء أو أصحاب العمل المحتملين.
        <br><br>
        اعتمدنا في التصميم على أفضل المعايير التقنية لضمان سرعة تحميل الموقع وسلاسة التصفح على جميع الأجهزة، مع دمج أقسام متعددة لعرض سيرتك الذاتية، المشاريع السابقة، التدوينات، وقسم خاص للتواصل.
      </p>

      <h4>لماذا هذا المشروع مميز؟</h4>
      <ul>
        <li><strong>تصميم مخصص لك:</strong> يعكس شخصيتك وهويتك الرقمية بطريقة فريدة وجذابة.</li>
        <li><strong>توافق مع جميع الأجهزة:</strong> تصميم متجاوب يعمل بشكل ممتاز على الهواتف والأجهزة اللوحية والحواسيب.</li>
        <li><strong>سهولة التحديث:</strong> لوحة تحكم بسيطة لتعديل المحتوى وإضافة مشاريع أو مقالات بسهولة.</li>
        <li><strong>تقنيات حديثة:</strong> ضمان أداء عالي وأمان محكم لموقعك الشخصي.</li>
        <li><strong>التقنيات المستخدمة:</strong></li>
        <li>
          <span class="tech-badge">Laravel</span>
          <span class="tech-badge">Bootstrap 5</span>
          <span class="tech-badge">Alpine.js</span>
          <span class="tech-badge">MySQL</span>
          <span class="tech-badge">Mailgun API</span>
        </li>
      </ul>

      <div class="project-link">
        <a href="https://example-personal-site.com" target="_blank" rel="noopener noreferrer">زيارة الموقع الشخصي</a>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <h3>ديمو عرض المشروع</h3>
    <video controls class="demo-video">
      <source src="{{ asset('videos/personal-site-demo.mp4') }}" type="video/mp4">
      المتصفح الخاص بك لا يدعم تشغيل الفيديو.
    </video>
  </div>

  <div class="text-center mt-5">
    <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2">العودة إلى الرئيسية</a>
  </div>

</div>

@endsection
