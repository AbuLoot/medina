@extends('layout')

@section('content')

  <!-- ====================================================
        ==Start Main Banner==
  ==================================================== -->
  <header class="banner banner2">
    <div class="container-fluid">
      <div class="row">
        <div class="camera_wrap  main-slider2">
          <div data-thumb="img/medina/slide1.jpg" data-src="img/medina/slide1.jpg">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-8">
                  <div class="banner-main-text">
                    <div class="banner-text-inner-area">
                      <h1>Medina Company предоставляет услуги пассажирских перевозок</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-thumb="img/medina/slide2.jpg" data-src="img/medina/slide2.jpg">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-8">
                  <div class="banner-main-text">
                    <div class="banner-text-inner-area">
                      <h1>Мы обеспечиваем транспортом самые разные мероприятия любого масштаба.</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ======================================
      ==Top Toolbar==
  ====================================== -->
  <section class="top-toolbar-type2">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="toolbar-type2-single-container">
            <ul>
              <li>
                <div class="toolbar-container-icon"> <i class="icofont icofont-clock-time"></i> </div>
                <div class="toolbar-container-text">
                  <p>Режим работы</p>
                  <h6>Понедельник - Пятница: 08:00 - 17:00</h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="toolbar-type2-single-container">
            <ul>
              <li>
                <div class="toolbar-container-icon"> <i class="icofont icofont-ui-call"></i> </div>
                <div class="toolbar-container-text">
                  <p>Свяжитесь снами</p>
                  <h6>+7 700 444 1057</h6>
                  <h6>+7 701 295 5889</h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="toolbar-type2-single-container">
            <ul>
              <li>
                <div class="toolbar-container-icon"> <i class="icofont icofont-envelope"></i> </div>
                <div class="toolbar-container-text">
                  <p>Email</p>
                  <h6>info@medina.kz</h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================================
      ==Start Services==
  ====================================== -->
  <section class="keyfeatures" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Наши Услуги</h2><br>
            <span></span>
        </div>
      </div>

      @foreach ($pages->chunk(3) as $chunk)
        <div class="row">
          @foreach ($chunk as $key => $page)
            <div class="col-md-4 col-sm-4">
              <div class="single-key-service">
                <div class="key-features-image">
                  <img src="img/services/mini-{{ $page->image }}" alt="{{ $page->title }}">
                </div>
                <div class="features-info">
                  <div class="features-title">
                    <h5>{{ $page->title }}</h5>
                  </div>
                  <div class="features-text">
                    <p>{{ $page->meta_description }}</p>
                  </div>
                  <a href="/{{ $page->slug }}">Читать далее</a>
                </div>
              </div>
            </div>

            @if (($key + 1) == count($pages))
              <div class="col-md-4 col-sm-4">
                <div class="single-key-service request-field">
                  <div class="order-service">
                    <h3>Закажите услугу</h3>
                  </div>
                  <form action="/send-app" method="post" style="padding: 0 15px;">
                    {{ csrf_field() }}
                    <div class="single-request-field">
                      <div class="form-group">
                        <input type="text" name="name" placeholder="Введите имя" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
                        @if ($errors->has('name'))
                          <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="single-request-field">
                      <div class="form-group">
                        <input type="tel" pattern="(\+?\d[- .]*){7,13}" name="phone" placeholder="Введите номер телефона" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
                        @if ($errors->has('phone'))
                          <span class="help-block">{{ $errors->first('phone') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="single-request-field">
                      <div class="form-group">
                        <textarea name="message" placeholder="Текст">{{ (old('text')) ? old('text') : '' }}</textarea>
                      </div>
                    </div>
                    <div class="single-request-field">
                      <button type="submit" class="quote-btn">Отправить</button>
                    </div>
                  </form>
                </div>
              </div>
            @endif
          @endforeach
        </div><br>
      @endforeach
    </div>
  </section>


  <!-- ======================================
      ==Start about us==
  ====================================== -->
  <section class="we-offer" id="about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>О Компании</h2><br>
            <span></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8 about-inner-container">
          <p>Medina Company предоставляет услуги пассажирских перевозок. Наш автопарк – комфортабельные современные минивены, микроавтобусы и автобусы класса от «эконом» до «люкс», способные вместить от 5 до 50 пассажиров. Такие технические возможности и ваше желание позволят нам с вами организовать любую поездку, независимо от расстояния, направления, времени суток, сложности маршрута, количества пассажиров. Мы обеспечиваем транспортом самые разные мероприятия любого масштаба.</p><br>
          <p>Мы несем полную ответственность за безопасность наших клиентов. И не только на словах. Идеальное техническое состояние автопарка в совокупности с аккуратностью, пунктуальностью, профессионализмом наших водителей, в совершенстве владеющих казахским, русским, английским языками, – яркое тому подтверждение.</p><br>
          <p>Мы полностью доверяем своим сотрудникам, но перед тем, как сесть за руль, каждый работающий в Medina Company водитель проходит жесткий медицинский контроль.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================
      ==Start why choose us==
  ===================================== -->
  <section class="why-choose-us ash-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Почему выбирают нас</h2><br>
            <span></span><br>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 col-sm-6">
          <div class="why-choose-left">
            <img src="img/medina/what-van-should-i-buy-best-commercial-vehicles-rated.jpg" class="img-responsive" alt="">
          </div>
        </div>
        <div class="col-md-5 col-sm-6">
          <div class="why-choose-right">
            <div class="single-choose-constainer">
              <div class="choose-icon">
                <h5>01.</h5> <i class="icofont icofont-wheel"></i>
              </div>
              <div class="choose-text">
                <h5>Современный сервис</h5>
                <p>Мы имеем бесценный опыт и отслеживаем свежие тренды в сфере пассажирских перевозок, поэтому наши клиенты всегда получают то, что от нас ждут.</p>
              </div>
            </div>
            <div class="single-choose-constainer">
              <div class="choose-icon">
                <h5>02.</h5> <i class="icofont icofont-support"></i>
              </div>
              <div class="choose-text">
                <h5>Круглосуточное обслуживание</h5>
                <p>Наши диспетчеры 24 часа в сутки находятся на связи, готовые в любую минуту откликнуться на ваш звонок.</p>
              </div>
            </div>
            <div class="single-choose-constainer">
              <div class="choose-icon">
                <h5>03.</h5> <i class="icofont icofont-bus-alt-1"></i>
              </div>
              <div class="choose-text">
                <h5>Идеальное состояние транспорта</h5>
                <p>Наш автопарк – исключительно современный транспорт, проходящий систематическое техническое обслуживание.</p>
              </div>
            </div>

            <!-- <div class="single-choose-constainer">
              <div class="choose-icon">
                <h5>01.</h5> <i class="icofont icofont-coins"></i>
              </div>
              <div class="choose-text">
                <h5>Любые формы расчета</h5>
                <p>Мы принимаем любые формы расчета: наличный и безналичный, исходя из возможностей наших клиентов.</p>
              </div>
            </div>
            <div class="single-choose-constainer">
              <div class="choose-icon">
                <h5>02.</h5> <i class="icofont icofont-deal"></i>
              </div>
              <div class="choose-text">
                <h5>Клиентоориентированная финансовая политика</h5>
                <p>Мы ни от кого не зависим, работаем без посредников, а потому всегда формируем цены в пользу наших клиентов.</p>
              </div>
            </div>
            <div class="single-choose-constainer">
              <div class="choose-icon">
                <h5>03.</h5> <i class="icofont icofont-businessman"></i>
              </div>
              <div class="choose-text">
                <h5>Обязательность, пунктуальность, ответственность</h5>
                <p>Мы чтим пунктуальность и предоставляем самый комфортабельный транспорт, управляемый опытными ответственными водителями.</p>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ======================================
      ==Start we offer==
  ====================================== -->
  <section class="we-offer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Наши Преимущества</h2><br>
            <span></span>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="single-offer-container">
            <div class="offer-inner-container">
              <div class="offer-icon"> <i class="icofont icofont-wheel"></i> </div>
              <a href="#">
                <h6>Современный сервис</h6>
              </a>
              <p>Мы имеем бесценный опыт и отслеживаем свежие тренды в сфере пассажирских перевозок, поэтому наши клиенты всегда получают то, что от нас ждут.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="single-offer-container">
            <div class="offer-inner-container">
              <div class="offer-icon"> <i class="icofont icofont-support"></i> </div>
              <a href="#">
                <h6>Круглосуточное обслуживание</h6>
              </a>
              <p>Наши диспетчеры 24 часа в сутки находятся на связи, готовые в любую минуту откликнуться на ваш звонок.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="single-offer-container">
            <div class="offer-inner-container">
              <div class="offer-icon"> <i class="icofont icofont-bus-alt-1"></i> </div>
              <a href="#">
                <h6>Идеальное состояние транспорта</h6>
              </a>
              <p>Наш автопарк – исключительно современный транспорт, проходящий систематическое техническое обслуживание.</p>
            </div>
          </div>
        </div>
      </div> -->

      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="single-offer-container">
            <div class="offer-inner-container">
              <div class="offer-icon"> <i class="icofont icofont-coins"></i> </div>
              <a href="#">
                <h6>Любые формы расчета</h6>
              </a>
              <p>Мы принимаем любые формы расчета: наличный и безналичный, исходя из возможностей наших клиентов.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="single-offer-container">
            <div class="offer-inner-container">
              <div class="offer-icon"> <i class="icofont icofont-businessman"></i> </div>
              <a href="#">
                <h6>Обязательность, пунктуальность, ответственность</h6>
              </a>
              <p>Мы свято чтим пунктуальность и предоставляем самый комфортабельный транспорт, управляемый опытными ответственными водителями.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="single-offer-container">
            <div class="offer-inner-container">
              <div class="offer-icon"> <i class="icofont icofont-deal"></i> </div>
              <a href="#">
                <h6>Клиентоориентированная финансовая политика</h6>
              </a>
              <p>Мы ни от кого не зависим, работаем без посредников, а потому всегда формируем цены в пользу наших клиентов.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="gallery" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Галерея</h2><br>
            <span></span>
          </div>
        </div>

        <div class="row" id="lightgallery">
          @foreach($gallery as $image)
            <a class="col-md-2" href="/img/gallery/{{ $image->image }}">
              <img src="/img/gallery/mini-{{ $image->image }}" class="img-responsive"><br>
            </a>
          @endforeach
        </div>
      </div>
    </div> 
  </section>

  <!-- ======================================
      ==Start conent container==
  ====================================== -->
  <section class="ash-bg about-faq padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>Вопросы и Ответы</h2><br>
            <span></span>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="logistics-content-area">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingOne">
                  <div class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Часто задаваемый вопрос 1
                      <span class="open-faq"> <i class="icofont icofont-simple-down"></i> </span>
                      <span class="close-faq"> <i class="icofont icofont-rounded-up"></i> </span>
                    </a>
                  </div>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing illum noyeodos beatae quis ad. Itaque, iure. Hic dolore eaque, tenetur saepe tempora quidem sit aspernatur ad sint! </div>
                </div>
              </div>
              <div class="panel ">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <div class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Часто задаваемый вопрос 2
                      <span class="open-faq"> <i class="icofont icofont-simple-down"></i> </span>
                      <span class="close-faq"> <i class="icofont icofont-rounded-up"></i> </span>
                    </a>
                  </div>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing illum noyeodos beatae quis ad. Itaque, iure. Hic dolore eaque, tenetur saepe tempora quidem sit aspernatur ad sint! </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingThree">
                  <div class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Часто задаваемый вопрос 3
                      <span class="open-faq"> <i class="icofont icofont-simple-down"></i> </span>
                      <span class="close-faq"> <i class="icofont icofont-rounded-up"></i> </span>
                    </a>
                  </div>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing illum noyeodos beatae quis ad. Itaque, iure. Hic dolore eaque, tenetur saepe tempora quidem sit aspernatur ad sint! </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="request-field">
            <form action="/send-app" method="post">
              {{ csrf_field() }}
              <div class="single-request-field">
                <div class="form-group">
                  <input type="text" name="name" placeholder="Введите имя" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
                  @if ($errors->has('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
              <div class="single-request-field">
                <div class="form-group">
                  <input type="tel" pattern="(\+?\d[- .]*){7,13}" name="phone" placeholder="Введите номер телефона" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
                  @if ($errors->has('phone'))
                    <span class="help-block">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
              </div>
              <div class="single-request-field">
                <div class="form-group">
                  <textarea name="message" placeholder="Текст">{{ (old('text')) ? old('text') : '' }}</textarea>
                </div>
              </div>
              <div class="single-request-field">
                <button type="submit" class="quote-btn">Отправить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
