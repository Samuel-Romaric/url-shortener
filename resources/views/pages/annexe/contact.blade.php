@extends('/layouts/app2', ['title' => 'Contact'])

@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="container contact contact2">
      <div class="container">

        <div class="section-title">
          <h2>@lang('text.contact_page.title')</h2>
          <p>@lang('text.contact_page.text1')</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127125.31923658468!2d-4.12014856572554!3d5.314658385721664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1c09e49aed455%3A0x4740f8bb1f87bd97!2sYopougon%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1609596685685!5m2!1sfr!2sci" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="ri-map-pin-line"></i>
                <h4>@lang('text.contact_page.location') :</h4>
                <p>Yopougon, Abidjan, Côte d'Ivoire</p>
              </div>

              <div class="email">
                <i class="ri-mail-line"></i>
                <h4>@lang('text.contact_page.mail') :</h4>
                <p>samuelromaric2015@gmail.com</p>
              </div>

              <div class="phone">
                <i class="ri-phone-line"></i>
                <h4>@lang('text.contact_page.phone') :</h4>
                <p>+225 0777 9 3456 1</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('contact') }}" method="post" role="form" class="php-email" validate>
              @csrf()
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Sami Romi" value="{{ old('name') }}" required />
                  <div class="validate">
                    {!! $errors->first('name', '<p class="text-danger">:message</p>') !!}
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="sami@domain.com" value="{{ old('email') }}" required />
                  <div class="validate">
                    {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet / Subject" value="{{ old('subject') }}" required />
                <div class="validate">
                  {!! $errors->first('subject', '<p class="text-danger">:message</p>') !!}
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="msg" rows="5" placeholder="Message" required>{{ old('msg') }}</textarea>
                <div class="validate">
                  {!! $errors->first('msg', '<p class="text-danger">:message</p>') !!}
                </div>
              </div>
              <div class="text-center"><button type="submit">@lang('text.contact_page.btn_submit')</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@stop
