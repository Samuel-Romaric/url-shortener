@extends('layouts.app2', ['title' => 'Apropos'])

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="container about apropos">
      <div class="container">

        <div class="section-title">
          <h2>@lang('text.about_page.title')</h2>
          <p>@lang('text.about_page.text1')</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              @lang('text.about_page.text2')
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> @lang('text.about_page.text3.ligne1')</li>
              <li><i class="ri-check-double-line"></i> @lang('text.about_page.text3.ligne2')</li>
              <li><i class="ri-check-double-line"></i> @lang('text.about_page.text3.ligne3')</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              @lang('text.about_page.text4')
            </p>
            <center><a href="#" class="btn-learn-more">@lang('text.about_page.btn_info')</a></center>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

@stop
