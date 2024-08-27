@props(['page'])
<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Highway Limo</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/css/ar_style.css" />
    <link rel="stylesheet" href="/css/font_awesome.css" />
  </head>
  <body>
    <div class="container" x-data="{toggle:false, show:false}">
      <header>
        <div class="companyName en">
          <h1>Highway</h1>
          <span>limo</span>
        </div>
        <div class="terms">
          <ul>
            <li><a href="/en" class="en">EN</a></li>
            <li><a href="/ar/conditions" class="{{$page == 'conditions'? 'active':''}}">الأحكام والشروط</a></li>
          </ul>
        </div>
        <div class="toggler" @click="toggle=!toggle">
          <div className="line1"></div>
          <div className="line2"></div>
          <div className="line3"></div>
        </div>
      </header>
      <div class="menu" style="display: none" x-show="toggle" @click.away="toggle=false">
        <ul>
          <li><a href="/" class="{{$page == 'index'? 'active':''}}">الرئيسية</a></li>
          <li><a href="/ar/lemozine" class="{{$page == 'lemozine'? 'active':''}}">ليموزين</a></li>
          <li><a href="/ar/services" class="{{$page == 'services'? 'active':''}}">خدماتنا</a></li>
          <li><a href="/en" class="en">ENGLISH</a></li>
        </ul>
      </div>
      <nav class="navbar">
        <ul>
          <li><a href="/ar/services" class="{{$page == 'services'? 'active':''}}">خدماتنا</a></li>
          <li><a href="/ar/lemozine" class="{{$page == 'lemozine'? 'active':''}}">ليموزين</a></li>
          <li><a href="/" class="{{$page == 'index'? 'active':''}}">الرئيسية</a></li>
        </ul>
      </nav>
      {{$hero}}
    </div>
    {{$main}}
    <footer>
      <div class="logoImg">
        <img alt="" src="/images/logo.png" />
        <div class="social">
          <a href="https://api.whatsapp.com/send?phone=201025060602"
            ><i class="fab fa-whatsapp"></i
          ></a>
          <a
            href="https://www.facebook.com/profile.php?id=100069288848187&mibextid=ZbWKwL"
            ><i class="fab fa-facebook"></i
          ></a>
          <a href="instagram://user?username=amro"
            ><i class="fab fa-instagram"></i
          ></a>
        </div>
      </div>
      <div>
        <h2>لديك إستفسار برجاء <span>الإتصال؟</span></h2>
        <p class="phones">
          <a href="tel:+201025060602" class="en">+20 10 250 60 60 2</a>
          <span><i class="fas fa-phone-square-alt"></i></span><br />
          <a href="tel:+201003743864" class="en">+20 15 556 76 71 0</a>
          <span><i class="fas fa-phone-square-alt"></i></span><br />
          <a href="mailto:info@highwaylimo.co" class="en">info@highwaylimo.co</a>
          <span><i class="fas fa-at"></i></span>
        </p>
      </div>
      <div>
        <h2>عن هاى واى <span>ليمو</span></h2>
        <p class="ourCv">
          تأسست الشركـة في عام 2008 وهي شركة ذات نفع عام تمتلك أسطول من السيارات
          الحديثة ، جاهزة لتقديم أفضل خدمات تأجير السيارات و الليموزين داخل
          جمهورية مصر العربية
        </p>
      </div>
    </footer>
    <script src="/js/alpine.min.js"></script>
    <script src="/js/scrollreveal.js"></script>
    <script src="/js/site.js"></script>
  </body>
</html>
