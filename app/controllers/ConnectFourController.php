<?php
class ConnectFourController extends BaseController {
    protected $layout = 'layouts.master';

    public function new_game() {
        Session::flush();
        $board = [
            'l1'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r6'=>0,'r7'=>0],
            'l2'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r6'=>0,'r7'=>0],
            'l3'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r6'=>0,'r7'=>0],
            'l4'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r6'=>0,'r7'=>0],
            'l5'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r6'=>0,'r7'=>0],
            'l6'=>['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r6'=>0,'r7'=>0],
        ];
        Session::put('board', $board);
        Session::put('turn', 1);
        Session::put('winner', 0);
        $this->layout->content = View::make('home', ['board'=>Session::get('board')]);
    }

    public function board($player) {
        $this->layout->content = View::make('board', [
            'board'=>Session::get('board'), 
            'player'=>$player, 
            'turn'=>Session::get('turn'),
            'winner'=>Session::get('winner')
        ]);
    }     

    public function add_disc($player, $row) {
        Profiler::disable();
        try{
            // check if the game is over
            if(Session::get('winner')>0) return "There is a winner!";
            // check turn
            if(Session::get('turn')!=$player) return "Not Your Turn!";
            $board = Session::get('board');
            // add teh disc from the bottom to the top
            for($l=6; $l>0; $l--){
                if($board["l{$l}"]["r{$row}"]==0){
                    // add disc
                    $board["l{$l}"]["r{$row}"] = $player;
                    // update session
                    Session::put('board', $board);
                    // winner?
                    if($this->check_winner($player)) {
                        Session::put('winner', $player);
                        return "Player {$player} Wins!";
                    }
                    // change turn
                    if(Session::get('turn')==1){
                        Session::put('turn', 2);
                    }else{
                        Session::put('turn', 1);
                    }
                    break;
                }
            }
        }catch(Exception $ex){
            return $ex->getMessage();
        }
        return "ok";
    }    
    
    private function check_winner($player) {
        // check horizontal four
        $board = Session::get('board');
        return ($this->check_horizontal($player, $board) || $this->check_vertical($player, $board));
    }

    private function check_horizontal($player, $board) {
        // starting from line 6
        for($l=6; $l>0; $l--){
            $in_line = 0;
            // for each row
            foreach($board["l{$l}"] as $rk=>$rv){
                if($rv==$player){
                    // add one
                    $in_line++;
                }else{
                    // reset counter
                    $in_line = 0;
                }
                //winner?
                if($in_line==4) return true;
            }    
        }
    }

    private function check_vertical($player, $board) {
        // starting from row 1
        for($r=1; $r<8; $r++){
            $in_line = 0;
            // for each line
            for($l=6; $l>0; $l--){
                if($board["l{$l}"]["r{$r}"]==$player){
                    // add one
                    $in_line++;
                }else{
                    // reset counter
                    $in_line = 0;
                }
                //winner?
                if($in_line==4) return true;
            }    
        }
    }

    private function check_diagonal($player, $board) {
        // for each row
        for($r=1; $r<8; $r++){
            // for each line
            for($l=6; $l>0; $l--){
                // there is a disc?
                if($board["l{$l}"]["r{$r}"]==$player) {
                    // winner?
                    if($this->check_diagonal_from($player, $board, $r, $l)) {
                        return true;
                    }
                }
            }    
        }
    }

    private function check_diagonal_from($player, $board, $row, $line) {
        // to the right
        $l = $line;
        for($r=$row; $r<8; $r++){
            $in_line = 0;
            if($board["l{$l}"]["r{$r}"]==$player){
                // add one
                $in_line++;
                $l--;
            }else{
                // reset counter
                $in_line = 0;
                $l = $line;
            }
            //winner?
            if($in_line==4) return true;
        }
        // to the left
        $l = $line;
        for($r=7; $r>0; $r--){
            $in_line = 0;
            if($board["l{$l}"]["r{$r}"]==$player){
                // add one
                $in_line++;
                $l--;
            }else{
                // reset counter
                $in_line = 0;
                $l = $line;
            }
            //winner?
            if($in_line==4) return true;
        }
    }
}

