<?php namespace App\Ariful\Game\Classes;

/**
 * Created by PhpStorm.
 * @author Ariful Haque <arifulhb@gmail.com>
 * Date: 3/31/16
 * Time: 3:15 PM
 */

use App\Ariful\Game\Classes\Player;
use App\Ariful\Game\Contracts\IPlayer;

class Game {

    private $players = [];
    private $round   = 0;

    public function __construct(IPlayer $player1, IPlayer $player2, IPlayer $player3, IPlayer $player4){


        /*echo "Creating Players...".PHP_EOL;
        $player1 = new Player('Player A');
        $player2 = new Player('Player B');
        $player3 = new Player('Player C');
        $player4 = new Player('Player D');*/

        array_push($this->players, $player1);
        array_push($this->players, $player2);
        array_push($this->players, $player3);
        array_push($this->players, $player4);

    }

    public function throwDice(){

        $transferDice   = [];

        $str = "<div class='game-round'>";

        foreach($this->players as $p=>$player){

//            echo $player->getName() . " rolling ". $player->diceCount()." dice...  ";
            $str .= "<p><span class='player'>".$player->getName() . ": </span> rolling ". $player->diceCount()." dice...  ";


            $tops = $player->rollDices();


            foreach($tops as $key=>$top){


                if($top->getTopSide() == 6){
                    //REMOVE DICE

                    $player->removeDice($key);
//                    echo "[-]".$top->getTopSide()." | ";
                    $str .=  "<span class='text-muted'><small>[-]</small></span>".$top->getTopSide()." | ";

                } else if($top->getTopSide() == 1){
                    //MOVE DICE

                    if($p == 3){
                        // MOVE DICE TO FIRST PLAYER
                        array_push($transferDice, [ 'playerKey'    => 0,
                                                    'diceKey'   => $key ]);

//                        echo $top->getTopSide()." [+".$this->players[0]->getName(). "] | ";
                        $str .= $top->getTopSide()." <span class='text-muted'><small>[+".$this->players[0]->getName(). "]</small></span> | ";
                    } else{
                        // MOVE DICE TO NEXT PLAYER
                        array_push($transferDice, [ 'playerKey'    => $p+1,
                                                        'diceKey'   => $key ]);
//                        echo $top->getTopSide()." [+".$this->players[$p+1]->getName(). "] | ";
                        $str .= $top->getTopSide()." <span class='text-muted'><small>[+".$this->players[$p+1]->getName(). "]</small></span> | ";

                    }

                    //REMOVE FROM CURRENT PLAYER AFTER MOVE
//                    $player->removeDice($key);

                } else{
//                    echo $top->getTopSide().' | ';
                    $str .=  $top->getTopSide().' | ';
                }


            }//end foreach


            $str .= "</p>";

        }//END FOREACH


        /**
         * transfer dice
         */

        foreach($transferDice as $transfer){

            $this->players[$transfer['playerKey']]->takeDice();

        }//end for


        $this->round++;

        $str .= "</div>";
        return $str;
    }

    public function getRound(){
        return $this->round;
    }

    public function getPlayers(){

        return $this->players;

    }

    public function findWinners(){

        $winner = [];

        foreach($this->players as $player){

//            echo $player->getName()." : Dice count: ".$player->diceCount(). PHP_EOL;
            if($player->diceCount() == 0){
                array_push($winner, $player);
            }

        }//end foreach


        if(count($winner) > 0){
            return $winner;
        }else{
            return false;
        }

    }//end
}