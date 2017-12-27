<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Medina Logistics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title_description', 'Medina')</title>
  <meta name="description" content="@yield('meta_description', 'Medina')">

  <link rel="icon" href="/img/favicon.png" sizes="16x16" type="image/png">
  <link rel="shortcut icon" href="/img/favicon.png" sizes="16x16" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- Animate css
  ============================================= -->
  <link rel="stylesheet" href="/css/animate.min.css">
  <!-- Animate css
  ============================================= -->
  <link rel="stylesheet" href="/css/cssslick.css">
  <link rel="stylesheet" href="/css/camera.css">
  <link rel="stylesheet" href="/js/venobox/venobox.css">
  <!-- Owl Theme
  ============================================= -->
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/icofont.css">

  <link rel="stylesheet" href="/css/slimmenu.min.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- style css
  ============================================= -->
  <link href="bower_components/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  @yield('head')

</head>
<body class="home2">
  <!-- ======================================
        ==Start main menu==
  ====================================== -->
  <section class="main-menu-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="brand-logo">
            <a href="/"> <img src="img/medina/logo.png" alt=""> </a>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <nav class="main_menu ">
            <ul class="myMenu">
              <li><a class="scrollto" href="/">Главная</a></li>
              <li><a class="scrollto" href="/#services">Услуги</a></li>
              <li><a class="scrollto" href="/#about-us">О Компании</a></li>
              <li><a class="scrollto" href="/#gallery">Галерея</a></li>
              <li><a href="contacts">Контакты</a></li>
              <li>
                <span class="search_icon">
                  <a href="#" data-toggle="modal" data-target="#myModal"> <i class="icofont icofont-search-alt-1"></i> </a>
                </span>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>


  @include('layouts.alerts')

  <!-- Content -->
  @yield('content')


  <!-- ======================================
      ==Start call to action==
  ====================================== -->
  <section class="call-to-action" id="contacts">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8">
          <div class="call-to-action-left">
            <h2>Контакты</h2>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="call-to-action-right">
            <a href="tracking.html" class="btn-type1">
              Подробнее <span><i class="icofont icofont-long-arrow-right"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================================
      ==Footer==
  ====================================== -->
  <footer>
    <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="footer_widget_area">
            <ul>
              <li>
                <div class="single-footer-widget">
                  <div class="footer-logo">
                    <div class="footer-brand-logo">
                      <a href="index.html"> <img src="img/medina/logo.png" alt="" class="img-responsive"> </a>
                    </div>
                  </div>
                  <div class="footer-widget-body">
                    <div class="footer-info-text">
                      <p>Medina Company предоставляет услуги пассажирских перевозок. Наш автопарк – комфортабельные современные минивены, микроавтобусы и автобусы класса от «эконом» до «люкс», способные вместить от 5 до 50 пассажиров.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="single-footer-widget">
                  <div class="widget-title">
                    <h5>Страницы</h5>
                  </div>
                  <div class="widget-body">
                    <div class="helpful-link-body">
                      <ul>
                        <li><a class="scrollto" href="#index">Главная</a></li>
                        <li><a class="scrollto" href="#services">Услуги</a></li>
                        <li><a class="scrollto" href="#about-us">О Компании</a></li>
                        <li><a class="scrollto" href="#gallery">Галерея</a></li>
                        <li><a href="contacts">Контакты</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="single-footer-widget">
                  <div class="footer-info-body">
                    <div class="widget-title">
                      <h5>Наши контакты</h5>
                    </div>
                    <ul>
                      <li>
                        <div class="footer-info-icon"> <i class="icofont icofont-home"></i> </div>
                        <div class="footer-info-text">Казахстан, город Алматы</div>
                      </li>
                      <li>
                        <div class="footer-info-icon"> <i class="icofont icofont-envelope"></i> </div>
                        <div class="footer-info-text"> info@medina.kz </div>
                      </li>
                      <li>
                        <div class="footer-info-icon"> <i class="icofont icofont-ui-call"></i> </div>
                        <div class="footer-info-text">
                          <h6>+7 700 444 1057</h6>
                          <h6>+7 701 295 5889</h6>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-social-icon">
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                        </li>
                        <li>
                          <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                        </li>
                        <li>
                          <a href="#"> <i class="icofont icofont-brand-linkedin"></i> </a>
                        </li>
                        <li>
                          <a href="#"> <i class="icofont icofont-social-rss"></i> </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container">
        <div class="col-md-6 col-sm-6">
          <div class="copyright">
            <p> Copyright © 2017 Medina </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer_menu">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--============================
      search Modal
  ============================-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="search_form">
            <form action="#">
              <input type="text" placeholder="Search Here">
              <button> <i class="icofont icofont-search"></i> </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="/js/vendor/jquery-1.12.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/camera.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/slick.min.js"></script>

  <script src="/js/jquery.mixitup.min.js"></script>
  <script src="/js/jquery.slimmenu.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/venobox/venobox.min.js"></script>

  <script src="bower_components/lightgallery/dist/js/lightgallery.min.js"></script>
  <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  <script type="text/javascript">
    // Light Gallery
    $(document).ready(function() {
      $("#lightgallery").lightGallery();
    });

    // Scroll to
    $(document).ready(function () {
      $("a.scrollto").click(function () {
        var el = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(el).offset().top }, 1000);
        return false;
      });
    });
  </script>

  <script src="/js/mail.ajax.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="/js/main.js"></script>

  <!-- Message Status -->
  @if (session('alert'))
    <div class="modal fade" id="message-status" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Статус заявки</h4>
          </div>
          <div class="modal-body">
            <p class="alert {{ session('alert') }}">{{ session('message') }}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
    <script> $('#message-status').modal('show'); </script>
  @endif

</body>
</html>