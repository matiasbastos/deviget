@extends('layouts.master')
@section('content')
    <h1>Connect Four - Player {{$player}}</h1>
    <h2>{{$turn}}</h2>
    @foreach($board as $lk=>$lv)
        <div class="board-line">
            @foreach($lv as $rk=>$rv)
                <span class="board-row row-val{{$rv}}" data-line="{{$lk}}" data-row="{{$rk}}"></span>
            @endforeach
        </div>    
    @endforeach
    <a href="/">New Game</a>
    <style>
        .board-row {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-block;
        }    
        .row-val0 {
            background: #aaa;
        }
        .row-val1 {
            background: red;
        }
        .row-val2 {
            background: yellow;
        }
    </style>
    <xmp>{{print_r($board)}}</xmp> 
@stop
