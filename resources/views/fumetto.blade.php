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
    <div>
        
    </div>
@endsection
