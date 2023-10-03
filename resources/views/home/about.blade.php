@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')

<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Misi Kami</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget luctus purus. Vestibulum malesuada turpis nec tellus dapibus, ac vulputate ex feugiat. Curabitur cursus ex vel felis aliquet malesuada.</p>
            </div>
            <div class="col-lg-6">
                <h2>Visi Kami</h2>
                <p>Integer nec urna vel ex vehicula posuere. Duis lacinia quam a augue tincidunt, vel volutpat dui gravida. Etiam et nisi ut ipsum finibus tempus.</p>
            </div>
        </div>
    </div>
</section>

<section class="team">
    <CENTER>
    <div class="container">
        <h2>Tim Kami</h2>
        <div class="row">
            <div class="col-md-2">
                <div class="team-member">
                    <img src="{{ asset('/img/logo.png')  }}" alt="" class="img-fluid rounded">
                    <h3>John Doe</h3>
                    <p>CEO</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="team-member">
            <img src="{{ asset('/img/game.png')  }}" alt="" class="img-fluid rounded">
                    <h3>Jane Smith</h3>
                    <p>CFO</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="team-member">
                    <img src="{{ asset('/img/safe.png')  }}" alt="" class="img-fluid rounded">
                    <h3>David Johnson</h3>
                    <p>CTO</p>
                </div>
            </div>
        </div>
    </div>
    </CENTER>
</section>
@endsection
