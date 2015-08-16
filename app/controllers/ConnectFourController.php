<?php
class ConnectFourController extends BaseController {
    protected $layout = 'layouts.master';

    public function new_game() {
        Session::flush();
        $board = [
            'line1'=>[0,0,0,0,0,0,0],
            'line2'=>[0,0,0,0,0,0,0],
            'line3'=>[0,0,0,0,0,0,0],
            'line4'=>[0,0,0,0,0,0,0],
            'line5'=>[0,0,0,0,0,0,0],
            'line6'=>[0,0,0,0,0,0,0],
        ];
        Session::put('board', $board);
        $this->layout->content = View::make('home', ['board'=>Session::get('board')]);
    }
}

