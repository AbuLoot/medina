@extends('layout')

@section('content')

  <!-- ==========================================
    ==Start breadcrumb==
  ========================================== -->
  <section class="breadcrumb-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadrumb-area">
            <div class="bread-crumb-inner-area">
              <div class="bread-crumb-content">
                <h2>Контакты</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================
      ==Start contact form area==  
  =========================================-->
  <section class="contact_area ptb_100">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-5">
          <div class="contact_info_area">
            <h4>Информация</h4>
            <ul>
              <li>
                <i class="icofont icofont-phone"></i> <span> +7 700 444 1057</span>
              </li>
              <li>
                <i class="icofont icofont-phone"></i> <span> +7 701 295 5889</span>
              </li>
              <li>
                <i class="icofont icofont-envelope"></i> <span> info@medina.kz</span>
              </li>
              <li>
                <i class="icofont icofont-social-google-map"></i> <span>Казахстан гр. Алматы</span>
              </li>
            </ul>
          </div>
        </div>
        <form action="/send-app" method="post">
          {{ csrf_field() }}
          <div class="col-md-8 col-sm-7">
            <div class="contact_field_area">
              <h4>Свяжитесь с нами сегодня</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="single_contact_field">
                    <input type="text" name="name" placeholder="Введите имя" minlength="2" maxlength="40" value="{{ (old('name')) ? old('name') : '' }}" required>
                    @if ($errors->has('name'))
                      <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single_contact_field">
                    <input type="tel" pattern="(\+?\d[- .]*){7,13}" name="phone" placeholder="Введите номер телефона" minlength="5" maxlength="20" value="{{ (old('phone')) ? old('phone') : '' }}" required>
                    @if ($errors->has('phone'))
                      <span class="help-block">{{ $errors->first('phone') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="single_contact_field">
                    <textarea name="message" id="message" placeholder="Текст">{{ (old('text')) ? old('text') : '' }}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="contact_btn_area contactSubmit">
                    <input type="submit" name="submit" class="btn_type2" value="Отправить" data-text="Send Message">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="form-messages"></div>
        </form>
      </div>
    </div>
  </section>


  <!--===============================================
    START MAP AREA
  ================================================-->
  <div id="google_map"></div>

@endsection