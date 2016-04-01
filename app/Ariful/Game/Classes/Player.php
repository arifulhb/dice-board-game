<?php
/**
 * Created by PhpStorm.
 * @author Ariful Haque <arifulhb@gmail.com>
 * Date: 3/31/16
 * Time: 3:09 PM
 */

namespace App\Ariful\Game\Classes;

use App\Ariful\Game\Contracts\IDice;
use App\Ariful\Game\Contracts\IPlayer;

class Player implements IPlayer{

    private $dices  = [];

    private $name   = '';

    public function __construct($name)
    {

        $this->name = $name;

        for($i=0; $i<6; $i++){

            array_push($this->dices, new Dice());

        }//end for

    }//end function

    /**
     * @param $value
     *
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     *
     * @since  v0.0.1
     * @author Ariful Haque <arifulhb@gmail.com>
     * @return array|null
     */
    public function rollDices()
    {

        /**
         * return current dices by adding top number there
         */
        $arr = [];

        foreach($this->dices as $dice){

            array_push($arr, $dice->roll());
        }

        return $this->dices;
    }

    /**
     * @param $number
     *
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function removeDice($number)
    {

        unset($this->dices[$number]);

        return $this->dices;

    }

    /**
     *
     * @return mixed
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function takeDice()
    {
        array_push($this->dices, new Dice());

    }

    /**
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function diceCount()
    {
        return count($this->dices);
    }

    /**
     * @return array
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function getDices(){

        return $this->dices;
    }

    public function passDice(IPlayer &$player, IDice $dice){

        $player->takeDice($dice);

    }
}