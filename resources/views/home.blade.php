@extends('layout.layout')
    
    
    <!-- main -->
    @section('cont')

        <div class="cont-principale-fumetti">
            <div class='cont-meta'>
                <div class='meta'>
                    <h2>current series</h2>
                </div>
            </div>
            <div  class="cont-fumetto">
                @foreach ($fumetti as $key=>$fumetto)
                    <div class="fumetto">
                        <a href="{{route('fumetto',['id'=>$key])}}">
                            <img src="{{$fumetto['thumb']}}" alt="">
                            <h2>{{$fumetto['title']}}</h2>
                        </a>
                    </div>
                @endforeach
                
            </div>
        </div>
        <div class='cont-footer-top'>
            <div class='cont-img'>
                <div class='col'>
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                    <span>digital comics</span>
                </div>
                <div class='col'>
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                    <span>dc merchandise</span>
                </div>
                <div class='col'>
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                    <span>subscriprtion</span> 
                </div>
                <div class='col'>
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                    <span>comic shop locator</span>
                </div>
                <div class='col'>
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                    <span>dc power visa</span>
                </div>
            </div>
        </div>
    @endsection
    <!-- main -->

    
