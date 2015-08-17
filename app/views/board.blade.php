@extends('layouts.master')
@section('content')
    <h1>Connect Four - Player {{$player}}</h1>
    @if($winner==0)
        <h2>@if($turn==$player) Your Turn! @else Player {{$turn}} Turn. @endif</h2>
    @else
        <h2>Player {{$winner}} Wins! <a href="/">Start A New Game.</a></h2>
    @endif
    <input type="hidden" id="player" value="{{$player}}"/>
    <span class="arrow-down" data-row="1"></span>
    <span class="arrow-down" data-row="2"></span>
    <span class="arrow-down" data-row="3"></span>
    <span class="arrow-down" data-row="4"></span>
    <span class="arrow-down" data-row="5"></span>
    <span class="arrow-down" data-row="6"></span>
    <span class="arrow-down" data-row="7"></span>
    @foreach($board as $lk=>$lv)
        <div class="board-line">
            @foreach($lv as $rk=>$rv)
                <span class="board-row row-val{{$rv}}" data-line="{{substr($lk, 1)}}" data-row="{{substr($rk, 1)}}"></span>
            @endforeach
        </div>    
    @endforeach
    <a href="/">New Game</a>
    <script>
        $(document).ready(function(){
            $('.arrow-down').click(function() {
                row = parseInt($(this).data("row"));
                player = $("#player").val();
                $.get("/add_disc/"+player+"/"+row, function(data, status){
                    if(data!="ok") alert("Data: " + data + "\nStatus: " + status);
                    location.reload();
                });
            });
            @if($winner==0)
                setInterval(function(){ location.reload(); }, 5000); // I should go to jail for this line
            @endif
        });
    </script>
    <style>
        .arrow-down {
            width: 0; 
            height: 0; 
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 20px solid #0088cc;
            margin: 5px;
            cursor: pointer;
            display: inline-block;
        }
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
@stop
