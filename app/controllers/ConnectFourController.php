<?php
class ConnectFourController extends BaseController {
    protected $layout = 'layouts.master';

    public function new_game() {
        Session::flush();
        $board = [
            'l1'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r7'=>0,'r8'=>0],
            'l2'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r7'=>0,'r8'=>0],
            'l3'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r7'=>0,'r8'=>0],
            'l4'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r7'=>0,'r8'=>0],
            'l5'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r7'=>0,'r8'=>0],
            'l6'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r7'=>0,'r8'=>0],
        ];
        Session::put('board', $board);
        $this->layout->content = View::make('home', ['board'=>Session::get('board')]);
    }

    public function board($player) {
        $this->layout->content = View::make('board', [
            'board'=>Session::get('board'), 
            'player'=>$player, 
            'turn'=>'Your Turn!'
        ]);
    }     

    public function add_disc($player, $row) {
        try{
            $board = Session::get('board');
            for($l=6; $l>0; $l--){
                if($board["l{$l}"]["r{$row}"]==0){
                    $board["l{$l}"]["r{$row}"] = $player;
                    Session::put('board', $board);
                    break;
                }
            }
        }catch(Exception $ex){
            return $ex->getMessage();
        }
        return "ok";
    }    
}

