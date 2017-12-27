@extends('layout')

@section('content')

  <!-- ==========================================
        ==Start breadcrumb==
  ========================================== -->
  <style>
    .breadcrumb-container {
      background: rgba(0, 0, 0, 0.5) url(/img/services/{{ $page->image }}) no-repeat scroll 0 55% / cover;
      height: 260px;
      position: relative;
    }
  </style>
  <section class="breadcrumb-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadrumb-area">
            <div class="bread-crumb-inner-area">
              <div class="bread-crumb-content">
                <h2>{{ $page->title }}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ==========================================
    ==Start single service container==
  ========================================== -->
  <section class="content_container ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="sidebar">
            <div class="single_service_content">
              <h4>Услуги</h4>
              <aside class="sidebar_widget">
                <div class="sidebar_widget_body category">
                  <ul>
                    @foreach ($pages as $service)
                      <li>
                        <a href="/{{ $service->slug }}"> {{ $service->title }} <span> <i class="icofont icofont-thin-right"></i> </span> </a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="single_service_content">
            <h4>{{ $page->title }}</h4>
            {!! $page->content !!}
          </div>

          <div class="request-field">
            <div class="single_service_content">
              <h4>Заказать услугу</h4>
            </div>
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
  </section><br><br>

@endsection