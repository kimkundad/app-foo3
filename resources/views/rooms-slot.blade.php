@extends('layouts.template')


@section('title')
สูตรบาคาร่า5ดาว
@stop

@section('stylesheet')

@stop('stylesheet')

<style>
    .col-4-new {
    padding-right: 2px !important;
    padding-left: 2px !important;
    min-height: 90px;
}
.bg-game-slot{
  background-image: url('{{ url('home/assets/img/Rectangle_4.png') }}');
    /* background-position: center center; home/assets/img/page6/Rectangle.png */ 
    background-size: contain;
    background-repeat: no-repeat;
}
.gameName-p6{
      margin-top: -5px;
    height: 16px;
    color: #d9b03f;
    font-weight: 500;
    font-size: 12px;
    overflow: hidden;
    margin-bottom: 0rem;
}
.winrate{
    color: #fff;
    font-weight: 700;
    font-size: 10px;
    margin-bottom: 0rem;
    margin-top: -2px;
}
.percen_winrate{
    color: #ff0000;
    font-weight: 700;
    font-size: 16px;
    margin-bottom: 0rem;
    -webkit-text-stroke: 0.5px #fff;
    margin-top: -5px;
}

.text-white-pre-p5{
    font-weight: 500;
    font-size: 10px;
    color: #fff;
    font-weight: 700;
    margin-top: -12px;
    height: 12px;
}
.circle {
    border-radius: 500px;
}
.progress {
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.65625rem;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}
.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #ffffff;
    text-align: center;
    white-space: nowrap;
    background-color: #448bff;
    transition: width 0.6s ease;
}

.progress-bar {
    height: 100%;
    text-align: center;
    font-size: 0.8em;
    border-radius: 0.25rem;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}

.progress {
    border-radius: 0.25rem;
    overflow: visible;
    background-color: rgba(135, 150, 165, 0.1);
}
.gd-warning {
  color: #fff;
  border: none;
  background: #DF2669 linear-gradient(45deg, #DF2669, #F5BA3B);
}
</style>

@section('content')

<div class="x-wrapper-right-container ">
            
<div class="x-contact-us-v2">
    <a href="{{ get_line_url() }}" target="_blank" rel="noopener nofollow" class="-link-item" aria-label="allcasino allbet gaming ติดต่อสอบถาม">
    

    <picture>
        <source type="image/webp" srcset="{{ url('/home/build/web/sa-allbet/img/contact-us.webp') }}">
        <source type="image/png" srcset="{{ url('/home/build/web/sa-allbet/img/contact-us.png') }}">
        <img alt="allcasino allbet gaming ติดต่อสอบถาม" class="img-fluid -img" width="120" height="185" src="{{ url('/home/build/web/sa-allbet/img/contact-us.png') }}">
    </picture>
    </a>
</div>
</div>

<section class="x-index-top-container">
    <div class="-top-inner-wrapper" style="background-image:url('{{ url('/home/build/web/sa-allbet/img/promotion-landing-bg.png') }}');">
        <div class="-bg-animation-container">
            <img src='{{ url('/home/build/web/sa-allbet/img/promotion-landing-bg-element-01.png') }}' alt="Allbet landing icon png" class="-bg-1 img-fluid">
            <img src='{{ url('/home/build/web/sa-allbet/img/promotion-landing-bg-element-02.png') }}' alt="Allbet landing icon png" class="-bg-2 img-fluid">
            <img src='{{ url('/home/build/web/sa-allbet/img/promotion-landing-bg-card-01.png') }}' alt="Allbet landing icon png" class="-bg-card-1 img-fluid">
            <img src='{{ url('/home/build/web/sa-allbet/img/promotion-landing-bg-card-02.png') }}' alt="Allbet landing icon png" class="-bg-card-2 img-fluid">
            <img src='{{ url('/home/build/web/sa-allbet/img/promotion-landing-bg-card-03.png') }}' alt="Allbet landing icon png" class="-bg-card-3 img-fluid">
            <img src='{{ url('/home/build/web/sa-allbet/img/promotion-landing-bg-card-04.png') }}' alt="Allbet landing icon png" class="-bg-card-4 img-fluid">
        </div>

        <div class="container">
            <div class="d-flex justify-content-between">
                <a href="{{ url('/welcome') }}" class="btn btn-outline-warning bit-xx">
                    <i class="fa-solid fa-backward"></i> เลือกค่ายเกมส์
                </a>
                <a href="{{ url('/welcome') }}">
                    <img class="-logo img-fluid" src="{{ url('img/logo_6417454.png') }}" alt="SA Casino" width="120" height="71">
                </a>
                <a href="{{ url('/logout') }}" class="btn btn-outline-warning bit-xx">
                    <i class="fa-solid fa-right-from-bracket"></i> ออกจากระบบ
                </a>
            </div>
        </div>

        <div class="text-center" style=" margin-top:30px;">
            <a href="#">
                <img class="img-fluid" src="{{ url('home/assets/img/page5/time_head1.png') }}" style="height: 36px; width:240px ">
                @php

                                            $now = time(); // or your date as well
                                            $your_date = strtotime(Auth::user()->birthday);
                                            $datediff = $your_date - $now;
                                            $sumday = round($datediff / (60 * 60 * 24));
                     @endphp
                <p class="text-white-p5">เหลือระยะเวลาอีก : {{ $sumday }} วัน</p>
                <p class="text-online-p5"><img class="img-fluid" src="{{ url('/home/assets/img/page5/user.png') }}" style=" height: 15px; "> ออนไลน์ : {{ get_user_online() }} คน</p>
            </a>
        </div>

        <div class="x-footer-lobby-logo" style="height: 90vh; margin-top:30px;  position: relative;">
            <div class="container">
                <div class="-casino-wrapper">
                       
                    <div class="d-flex justify-content-around flex-wrap">
                    
                        @if(isset($objs))
                        @foreach($objs as $u)
                        <div class=" col-4-new">
                            <div class="text-center">
                                <a href="#">
                                    <div class="bg-game-slot" style="width: 117px; padding: 6px 6px; }}');">
                                        <div class="d-flex justify-content-around">
                                            <img src="{{ url('images/game/room/'.$u->room_image) }}" style="width: 38px; height: 38px; border-radius: 5px;">
                                            <div class="text-center">
                                                <p class="gameName-p6"> {{ $u->room }} </p>
                                                <p class="winrate"> อัตราการชนะ </p>
                                                <p class="percen_winrate"> {{ $u->percent }}% </p>
                                            </div>
                                        </div>
                                        <div style="">
                                            <div class="circle" style=" border: 1px solid #fff; height: 14px;">
                                                <div class="progress circle" style="height:12px; ">
                                                    <div class="progress-bar circle gd-warning" data-toggle="tooltip" title="{{ $u->percent }}%" style="width: {{ $u->percent }}%"></div>
                                                </div>
                                                <p class="text-white-pre-p5">{{ $u->percent }}%</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        </div>

            
                </div>
                
               
                
            </div>
            
        </div>

        
    </div>
</section>





@endsection

@section('scripts')

@stop('scripts')