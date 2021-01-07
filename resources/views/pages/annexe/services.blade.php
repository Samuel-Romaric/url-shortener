@extends('layouts.app2', ['title' => 'Nos Services'])

@section('content')

		<!-- ======= Services Section ======= -->
    <section id="services" class="container services services2">
      <div class="container">

        <div class="section-title">
          <h2>@lang('text.services_page.title')</h2>
          <p>@lang('text.services_page.text1')</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont icofont-file-php"></i></div>
              <h4><a href="">@lang('text.services_page.services.first.title')</a></h4>
              <p>@lang('text.services_page.services.first.description')</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont icofont-file-python"></i></div>
              <h4><a href="">@lang('text.services_page.services.second.title')</a></h4>
              <p>@lang('text.services_page.services.second.description')</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont icofont-license"></i></div>
              <h4><a href="">@lang('text.services_page.services.third.title')</a></h4>
              <p>@lang('text.services_page.services.third.description')</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="icofont icofont-heart-beat-alt"></i></div>
              <h4><a href="">@lang('text.services_page.services.fourth.title')</a></h4>
              <p>@lang('text.services_page.services.fourth.description') <i class="icofont icofont-hand-right"></i> <a href="https://masante-plus.web.app/" target="blank">Santé+</a> <i class="icofont icofont-hand-left"></i></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="icofont icofont-clouds"></i></div>
              <h4><a href="">@lang('text.services_page.services.fifth.title')</a></h4>
              <p>@lang('text.services_page.services.fifth.description')</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="icofont icofont-ui-home"></i></div>
              <h4><a href="">@lang('text.services_page.services.sixth.title')</a></h4>
              <p>@lang('text.services_page.services.sixth.description')</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    
@stop
