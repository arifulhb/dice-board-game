<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Ariful\Game\Classes\Game;
use App\Ariful\Game\Classes\Player;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class GameController extends Controller
{

    private  $game;
    private  $round = 0;

    public function index(){

        return View::make('game.start');

    }

    public function postStart(Request $request){

        $inputs = $request->all();

        $player1 = new Player($inputs['player1']);
        $player2 = new Player($inputs['player2']);
        $player3 = new Player($inputs['player3']);
        $player4 = new Player($inputs['player4']);


        $this->game = new Game($player1, $player2, $player3, $player4);




      /*  $winnerFond = false;
        do {
            echo PHP_EOL."Round: ".($this->game->getRound()+1).PHP_EOL;
            echo "=====================================".PHP_EOL;

            $this->game->throwDice();
            $winnerFond = $this->game->findWinners();


        } while($winnerFond==false);*/

//        echo PHP_EOL."Winners are: ".PHP_EOL;


        /*foreach($winnerFond as $winner){
            echo ($winner->getName()).PHP_EOL;
        }*/


//        return json_encode($winnerFond);

        return View::make('game.game', ['player1'=>$player1, 'player2'=>$player2, 'player3'=>$player3, 'player4'=>$player4]);

    }

    public function postRoleDiceComplete(Request $request){

        $result = "";

        $inputs = $request->all();
        $player1 = new Player($inputs['player1']);
        $player2 = new Player($inputs['player2']);
        $player3 = new Player($inputs['player3']);
        $player4 = new Player($inputs['player4']);


        $this->game = new Game($player1, $player2, $player3, $player4);

//        $players = $this->game->getPlayers();

        $winnerFond = false;

          do {


              $result .= "<p class='round-title'>Round: ".($this->game->getRound()+1)."</p>";

              $result .= $this->game->throwDice();

              $winnerFond = $this->game->findWinners();

          } while($winnerFond==false);



        $winners=[];

        foreach($winnerFond as $winner){

            array_push($winners, $winner->getName());
        }

        $data['winners'] = $winners;
        $data['result'] = $result;
        $data['rounds'] = $this->game->getRound();


        return Response::json($data);

    }
}
