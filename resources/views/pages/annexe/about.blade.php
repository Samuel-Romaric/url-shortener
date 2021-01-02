@extends('layouts.app2', ['title' => 'Apropos'])

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="container about apropos">
      <div class="container">

        <div class="section-title">
          <h2>Apropos de nous</h2>
          <p>Tout comme ceux à quoi son appelation puisse vous faire penser, <b>{{ config('app.name') }}</b> est une application web, destinée a reduire de longue addresse (url) dans le but de mieux les partager entre ami; surtout que l'on sait l'éffet que cela fait de copier une longue addresse encore moins de la retenir.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Composé d'une équipe aux competences transvers, nous sommes tous de jeunes africains pationés de technologie. Une équipe répartir dans plusieurs domaines de competence dont :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> La Conception et deploiement de solution IT</li>
              <li><i class="ri-check-double-line"></i> Conseil - Consultance en IT - Formation</li>
              <li><i class="ri-check-double-line"></i> IoT - Domotique - Inovation - Data Science</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              La satisfation d'un rendu bien fait après un temps d'effort, reste pour nous nos plus belle gande motivation. Chaque idée, projet, mission a réaliser est pour chacun d'entre nous un challenge qui honnore notre nom et notre interressant métier de professionnel en Techonlogie de l'Information.
            </p>
            <center><a href="#" class="btn-learn-more">Plus d'info</a></center>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

@stop
