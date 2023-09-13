@extends('layouts.page.pageLayout')

@section('content')

@section('title', 'Wellness Center | Summer Healing Society')

@section('meta_keyword', 'Wellness Center')

@section('meta_description', 'Wellness Center')



<!-- HEADER END -->

<section class="set-top-spacing" data-sal="slide-up" style="--sal-duration: 1s">

    <div class="container-fluid">

        <div class="row text-center text-xl-start">

            <div class="col-xl-11 mx-auto">

                <h2 class="display-4 text-center text-uppercase font-weight-700 mb-lg-4">Wellness Center</h2>

                <div class="text-center"></div>

            </div>

        </div>

    </div>

</section>





<div class="all-wrap">

    <div class="container">

        <div class="grid-tm-2  section-padding side-spacing">

            <div class="row">

              @foreach ($wellnesscenters as $wellnesscenter)

                

                <div class="col-md-6 mb-4">

                  <div class="sm-card">

                    <img style="width:100px;" src="{{ url("/backend/images/wellness_images") }}/{{ $wellnesscenter->featured_image }}" alt="{{ $wellnesscenter->featured_image }}" class="card-img">

                          <div class="txt-block">

                            <h3>{{ $wellnesscenter->title }}</h3>

                            {!! $wellnesscenter->description !!}

                            <a href="{{ route('page.wellness.wellnessbook', $wellnesscenter->id) }}?service={{$wellnesscenter->id}}" class="site-button">book now</a>    

                          </div>

                    </div>

                  </div>

              @endforeach

            </div>

      </div>

    </div>

</div>

@endsection



@section('script')



@endsection





@section('style')





<style>

.container{max-width:90%;}

.section-padding {

  padding-top: 60px;

  padding-bottom: 60px;

}

@media (max-width: 400px) {

  .section-padding {

    padding-top: 30px;

    padding-bottom: 30px;

  }

}

@media (max-width: 768px) {

  .side-spacing {

    padding-left: 10px;

    padding-right: 10px;

  }

}

.center-aline {

  display: flex;

  flex-direction: column;

  justify-content: center;

  align-items: center;

}



html {

  font-size: 16px;

}



body {

  font-family: "Proza Libre", sans-serif;

  color: #6B6B6B;

  font-weight: 400;

  font-size: 62.5%;

  line-height: 1.75;

  background-color: #fff;

}



a {

  font-weight: 600;

  font-size: 0.95rem;

  color: #6B6B6B;

  text-decoration: none;

}

a:focus, a:hover {

  color: #6B6B6B;

  text-decoration: underline;

}



.paragraph,

address,

input,

label,

p,

select,

table,

textarea {

  font-size: 0.938rem;

  font-weight: 400;

  line-height: 1.6;

  color: #6B6B6B;

  font-family: "Proza Libre", sans-serif;

}



.paragraph,

p {

  margin-bottom: 33px;

  line-height: 1.98;

}

.paragraph.lead,

p.lead {

  font-size: 18px;

}

.paragraph a,

p a {

  font-size: inherit;

  color: inherit;

  text-decoration: underline;

  font-weight: inherit;

}

.paragraph b,

.paragraph strong,

p b,

p strong {

  font-weight: 700;

}



.lead p {

  font-size: 18px;

  line-height: 1.5;

  font-weight: 400;

  color: #6B6B6B;

}



h3,

h5,

h6 {

  color: #6B6B6B;

  font-family: "Proza Libre", sans-serif;

  margin-bottom: 15px;

  text-transform: none;

  line-height: 1.1;

}

h4 {

  font-family: "Cormorant", serif;

  margin-bottom: 15px;

  text-transform: uppercase;

  color: #000000;

}

.heading-1,

h1 {

  font-size: 3rem;

  font-weight: 700;

  font-family: "Cormorant", serif;

  line-height: 1.1;

  margin-bottom: 33px;

}

@media (max-width: 992px) {

  .heading-1,

h1 {

    font-size: 2.1rem;

  }

}



.heading-3,

h3 {

  font-size: 1.563rem;

  font-weight: 700;

}



.heading-4,

h4 {

  font-size: 3.3rem;

  font-weight: 700;

}



.heading-5,

h5 {

  font-size: 1.25rem;

  font-weight: 600;

}



.heading-6,

h6 {

  font-size: 1rem;

  font-weight: 600;

}



.widget-title {

  text-transform: capitalize;

  font-weight: 700;

}



b,

th {

  font-weight: 700;

  color: #6B6B6B;

}



.text_small,

small {

  font-size: 0.833rem;

}



.white-txt p, .white-txt ul li, .white-txt ol li, .white-txt h6 {

  color: #fff;

}



.site-button {

  background: #FEC743;

  color: #080C37;

  font-weight: 700;

  padding: 10px 40px 10px 40px;

  border-radius: 17px;

  text-transform: uppercase;

  font-size: 0.875rem;

  text-decoration: none;

  position: absolute;

  bottom: 0;

}

@media (max-width: 768px) {

  .site-button {

    font-size: 0.8rem;

  }

}

@media (max-width: 480px) {

  .site-button {

    padding: 5px 20px 5px 20px;

  }

}

.site-button:hover {

  background: #009D10;

  color: #ffffff;

  text-decoration: none;

}

.site-button:focus {

  text-decoration: none;

}



.p-head {

  text-transform: uppercase;

  font-size: 1rem;

  font-weight: 500;

  color: #4F2A73;

  margin-bottom: 10px;

}

@media (max-width: 992px) {

  .p-head {

    font-size: 0.8rem;

    margin-bottom: 0px;

  }

}

@media (max-width: 576px) {

  .p-head {

    font-size: 0.7rem;

  }

}



p {

  font-size: 0.9rem;

  line-height: 1.3rem;

  color: #C6C6C6;

  margin-bottom: 0px !important;

  padding-bottom: 50px;

}

@media (max-width: 992px) {

  p {

    font-size: 1rem;

  }

}

@media (max-width: 480px) {

  p {

    font-size: 0.8rem;

    margin-bottom: 40px;

  }

}



h2 {

  font-size: 4rem !important;

  font-weight: 700;

  color: #FEC743;

  font-family: "Cormorant", serif;

  position: relative;

  margin-bottom: 40px;

  text-align: center;

  text-transform: uppercase;

}

@media (max-width: 992px) {

  h2 {

        font-size: 3rem !important;

  }

}

@media (max-width: 576px) {

  h2 {

    font-size: 2rem !important;

  }

}



h3 {

  font-size: 2rem;

  font-weight: 700;

  color: #FEC743;

  font-family: "Cormorant", serif;

  position: relative;

  margin-bottom: 20px;

  text-transform: uppercase;

}

@media (max-width: 1200px) {

  h3 {

    font-size: 1.8rem;

  }

}

@media (max-width: 992px) {

  h3 {

    font-size: 1.8rem;

  }

}

@media (max-width: 576px) {

  h3 {

    font-size: 1.3rem;

  }

}



.black-shade {

  background: rgba(0, 0, 0, 0.55);

  width: 100%;

  height: 874px;

  position: absolute;

  top: 0;

  left: 0;

}



.all-wrap {

  background-images: url(../images/sh-bg.png);

  background-position: center;

  background-repeat: no-repeat;

  background-size: cover;

}



.sm-card {

  max-width: 746px;

  width: 100%;

  height: 100%;

  display: flex;

  background: #0F143C;

  border: 1px solid #2B2F53;

  border-radius: 31px;

  padding: 30px 20px;

  justify-content: space-between;

}

.txt-block {

  position: relative;

  max-width: 55%;

}



@media (max-width: 576px) {

  .sm-card {

    display: block;

  }

}



.card-img {

  max-width: 223px;

  width: 100%;

  height: auto;

  border-radius: 15px !important;

  margin-right: 20px;

  flex-basis: 45%;

  max-width: 45%;

}

@media (max-width: 1200px) {

  .card-img {

    max-width: 190px;

  }

}

@media (max-width: 576px) {

  .card-img {

    margin-bottom: 15px;

    max-width: 100%;

    margin-right: 0px;

  }

}



.row {

  justify-content: center;

  margin: 20px 0px;

}

@media (max-width: 991px) {

  .row {

   margin: 0px;

  }

}

@media (max-width: 576px) {

  .row {

    display: block !important;

  }

}

@media (max-width: 991px) {

  .row .col-md-6 {

    width: 100% !important;

    margin: 20px 0px;

  }

}



.txt-block {

  position: relative;

}

@media (min-width: 1200px){

    .h3, h3 {

        font-size: 1.75rem;

        margin-top: 0;

        margin-bottom: 0.5rem;

        font-weight: 500;

    }

}

</style>

@endsection