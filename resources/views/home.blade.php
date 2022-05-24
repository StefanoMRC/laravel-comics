@extends('layout.layout')
    
    
    <!-- main -->
    @section('cont')
        <div class="cont-principale-fumetti">
            <div  class="cont-fumetto">
                @foreach ($fumetti as $key=>$fumetto)
                    <div class="fumetto">
                        <a href="">
                            <img src="{{$fumetto['thumb']}}" alt="">
                            <h2>{{$fumetto['title']}}</h2>
                        </a>
                    </div>
                @endforeach
                
            </div>
        </div>
    @endsection
    <!-- main -->

    
