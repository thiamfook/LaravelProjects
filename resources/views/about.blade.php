@extends('layout')

@section('title', 'About Us')

@section('content')
  <div id="carouselAbout" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      @for ($i = 0; $i < 5; $i ++)
      <li data-target="#carouselAbout" data-slide-to="{{ $i }}"{!! ($i == 0) ? ' class="active"' : '' !!}></li>
      @endfor
    </ol>
    <div class="carousel-inner">
      @for ($i = 1; $i <= 5; $i ++)
      <div class="carousel-item{{ ($i == 1) ? ' active' : ''}}">
        <img src="img/0{{ $i }}.webp" class="d-block w-100" alt="">
      </div>
      @endfor
    </div>
    <a class="carousel-control-prev" href="#carouselAbout" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselAbout" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus minima eos atque, blanditiis nesciunt impedit assumenda aperiam necessitatibus illum vero fugit quos qui distinctio eum itaque ut? Nam, temporibus voluptatibus?
  </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel illo labore, eaque doloribus minus natus commodi deserunt! Ex, dolores dolorem commodi et a aperiam illo consectetur distinctio recusandae incidunt voluptatibus?</p>
  <div class="card">
      <div class="card-header">
        Our Believes
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>If you are not writing using right hand, then you are writing using left hand.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
      </div>
    </div>
@endsection