@props(['page'])
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Highway Limo</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="/css/en_style.css" />
    <link rel="stylesheet" href="/css/font_awesome.css" />
  </head>
  <body>
    <div class="container" x-data="{toggle:false, show:false}">
      <header>
        <div class="companyName">
          <h1>Highway</h1>
          <span>limo</span>
        </div>
        <div class="terms">
          <ul>
            <li><a href="/" class="ar">عربى</a></li>
            <li><a href="/en/conditions" class="{{$page == 'conditions'? 'active':''}}">Terms & conditions</a></li>
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
          <li><a href="/en" class="{{$page == 'index'? 'active':''}}">Home</a></li>
          <li><a href="/en/lemozine" class="{{$page == 'lemozine'? 'active':''}}">Limousine</a></li>
          <li><a href="/en/services" class="{{$page == 'services'? 'active':''}}">Services</a></li>
          <li><a href="/" class="ar">عربي</a></li>
        </ul>
      </div>
      <nav class="navbar">
        <ul>
            <li><a href="/en" class="{{$page == 'index'? 'active':''}}">Home</a></li>
            <li><a href="/en/lemozine" class="{{$page == 'lemozine'? 'active':''}}">Limousine</a></li>
          <li><a href="/en/services" class="{{$page == 'services'? 'active':''}}">Services</a></li>
        </ul>
      </nav>
      {{$hero}}
    </div>
    {{$main}}
    <footer>
      <div>
        <h2>About Highway<span>limo</span></h2>
        <p class="ourCv">
          The company was established in 2008 and is a public benefit company that owns a fleet of cars
           Modern, ready to provide the best car and limousine rental services within
           The Egyptian Arabic Republic
        </p>
      </div>
      <div>
        <h2>Have questions, <span>contact us</span></h2>
        <p class="phones">
          <span><i class="fas fa-phone-square-alt"></i></span>
          <a href="tel:+201025060602">+20 10 250 60 60 2</a>
          <br />
          <span><i class="fas fa-phone-square-alt"></i></span>
          <a href="tel:+201003743864">+20 15 556 76 71 0</a>
          <br />
          <span><i class="fas fa-at"></i></span>
          <a href="mailto:info@highwaylimo.co">info@highwaylimo.co</a>
        </p>
      </div>
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
    </footer>
    <script src="/js/alpine.min.js"></script>
    <script src="/js/scrollreveal.js"></script>
    <script src="/js/site.js"></script>
  </body>
</html>
