@extends('layout.layout')

@section('cont')
<div class="container">
    <div class="cont_singolo_fumetto">
        <img src="{{$singolo_fumetto['thumb']}}" alt="">
    </div>
</div>
<div class="cont_descrizione">
    <div class="col_1">
        <h2 class="titolo uppercase">{{$singolo_fumetto['title']}}</h2>
        <div class="cont_price">
            <div class="disponibile">
                <div class="prezzo">
                    <div>
                        <span class="color_white2">U.S.Price</span>
                        <span class="color_white">{{$singolo_fumetto['price']}}</span>
                    </div>
                    <p class="color_white2 uppercase">available</p>

                </div>

                <p class="controllo_disponibile color_white">Check Availability <span class="freccia">&#9660</span></p>
            </div>


        </div>
        <p class="descrizione">{{$singolo_fumetto['description']}}</p>
    </div>
    <div class="col_2">
        <h2 class="uppercase color_gray">advertisement</h2>
        <img src="{{asset('images/pippo.jpg')}}" alt="">
    </div>
</div>
<div class="container_2">
    <div class="cont_principale_artisti">
        <div class="cont_artisti">
            <h2>
                Talent
            </h2>
            <div class="artisti">
                <div class="col_3">
                    <h4 class="fs-1">
                        Art by:
                    </h4>
                </div>
                <div class="col_4">
                    @foreach ($singolo_fumetto['artists'] as $artisti)
                    <a href="">
                        {{$artisti}}
                    </a>,
                    @endforeach

                </div>
            </div>

            <div class="scrittori">
                <div class="col_3">
                    <h4 class="fs-1">
                        Written by:
                    </h4>
                </div>

                <div class="col_4">
                    @foreach ($singolo_fumetto['writers'] as $scrittori)
                    <a href="">
                        {{$scrittori}}
                    </a>,
                    @endforeach

                </div>
            </div>

        </div>
        <div class="cont_specifiche">
            <div>
                <h2>Specs</h2>
            </div>
            <div class="d-flex b-top">
                <div class="w-40 p-10"><h4 class="fs-1">Series:</h4></div>
                <div class="w-60 p-10"><span class="uppercase bold color_blu">{{$singolo_fumetto['series']}}</span></div>
            </div>
            <div class="d-flex b-top b-bottom">
                <div class="w-40 p-10"><h4 class="fs-1">U.S. Price</h4></div>
                <div class="w-60 p-10">{{$singolo_fumetto['price']}}</div>
            </div>
            <div class="d-flex b-bottom">
                <div class="w-40 p-10"><h4 class="fs-1">On Sale Date</h4></div>
                <div class="w-60 p-10">{{
                $singolo_fumetto['sale_date']}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
