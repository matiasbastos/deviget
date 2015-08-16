@extends('layouts.master')
@section('content')
    <h1>Connect Four - New Game</h1>
    <h2>Choose Player:</h2>
    <ul>
        <li><a href="/games/1">Player 1 (Red)</a></li>
        <li><a href="/games/2">Player 2 (Yellow)</a></li>
    </ul>
    <!-- <xmp>{{print_r($board)}}</xmp> -->
@stop
