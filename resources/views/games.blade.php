@extends('layouts.template')


@section('title')
สูตรบาคาร่า5ดาว
@stop

@section('stylesheet')

@stop('stylesheet')

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
                <a href="{{ url('/welcome') }}">
                    <img class="-logo img-fluid" src="{{ url('img/logo_6417454.png') }}" alt="SA Casino" width="120" height="71">
                </a>
                <a href="{{ url('/logout') }}" class="btn btn-outline-warning bit-xx">
                    <i class="fa-solid fa-right-from-bracket"></i> ออกจากระบบ
                </a>
            </div>
        </div>

        <div class="text-center" style=" margin-top:10px;">
            <a href="#">
                <img class="img-fluid" src="{{ url('home/assets/img/page5/time_head1.png') }}" style="height: 36px; width:240px ">
                <p class="text-yello-p3">เลือกค่ายเกมส์ที่ต้องการใช้สูตร</p>
            </a>
        </div>

        <div class="x-footer-lobby-logo" style="height: 90vh; margin-top:30px;  position: relative;">
            <div class="container">
                <div class="-casino-wrapper">
                        <ul class="-nav-container">

                        @if(isset($objs))
                            @foreach($objs as $u)
                                                
                                <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                                    <a href="{{ url('rooms_slot?casino='.$u->game_name_short) }}">
                                        <img 
                                        src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" 
                                        data-src="{{ url('images/game/game/'.$u->game_image) }}" 
                                        alt="" 
                                        class="-logo-circle lazyload">
                                    </a>
                                </li>

                            @endforeach
                        @endif
                                    
                        {{-- <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/sexy-bac-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/wm-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/dream-gaming-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/allbet-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/asia-gaming-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/pretty-gaming-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/eg-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/wt-pt-live-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/wt-bg-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/wt-ea-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/wt-n2live-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li>
                                    
                        <li class="-nav-item -width-mobile" style="width: calc(100% / 8)">
                            <img src="{{ url('/home/build/web/shared/img/loading-lobby-circle.gif') }}" data-src="https://asset.cloudigame.co/build/admin/img/lobby_main/wt-pp-live-logo-circle.png" alt="" class="-logo-circle lazyload">
                        </li> --}}
                                </ul>
            
                </div>
                
                <div style="margin-top: 40px">
                    <div class="-top-heading-wrapper">
                        <h1 class="-title">{{ get_banner_head() }}</h1>
                        <p class="-title-paragraph">{{ get_banner_detail() }}</p>
                    </div>
                    <a href="{{ get_banner_url() }}">
                        <img class="img-fluid" src="{{ url('media/'.get_banner_img()) }}">
                    </a>
                    
                </div>
                
            </div>
            
        </div>

        
    </div>
</section>




{{-- <div id="main" class="layout-column flex">
    <div class="chakra-container-page3">
        <div id="content" class="flex ">
            <div class="box-height-20"></div>
            <div class="d-flex flex-row-reverse pad-l-r">
                
                <a href="{{ url('/logout') }}">
                    <img class="img-fluid" src="{{ url('/home/assets/img/home2/page3/ล็อคเอ้าท์.png') }}" style="height: 30px; width:85px;">
                </a>
            </div>
            <div class="text-center">
            <a href="{{ url('/welcome') }}">
                <img class="img-fluid logo_website_slot" src="{{ url('/home/assets/img/home2/logo_app2.png') }}">
            </a>
                
                <div class="text-center">
                    <a href="#">
                        <img class="img-fluid" src="{{ url('/home/assets/img/home2/page2/เลือกค่ายที่ต้องการใช้สูตร.png') }}" style="height: 36px; width:240px ">
                        <p class="text-yello-p3">เลือกค่ายเกมส์ที่ต้องการใช้สูตร</p>
                    </a>
                </div>
                <div class="box-height-10"></div>
                <div class="card-body">
                <div class="row" >
            
                @if(isset($objs))
                @foreach($objs as $u)

                    <div class="col-6 col-6-new ">
                        <div class="text-center">
                            @if($u->cat_id == 1)

                            <a href="{{ url('rooms_slot?casino='.$u->game_name_short) }}">
                                <img class="img-fluid" src="{{ url('images/game/game/'.$u->game_image) }}">
                                <img class="img-fluid" src="{{ url('/home/assets/img/page3/Click-Now.png') }}" style="height: 20px; margin-top: 0px;">
                            </a>

                            @else

                            <a href="{{ url('rooms?casino='.$u->game_name_short) }}">
                                <img class="img-fluid" src="{{ url('images/game/game/'.$u->game_image) }}">
                                <img class="img-fluid" src="{{ url('/home/assets/img/page3/Click-Now.png') }}" style="height: 20px; margin-top: 0px;">
                            </a>

                            @endif
                            
                        </div>
                    </div>

                @endforeach
                @endif
                    
                </div>
                </div>
        </div>
    </div>
</div> --}}


@endsection

@section('scripts')

@stop('scripts')