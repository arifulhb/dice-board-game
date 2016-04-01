<?php
/**
 * Created by PhpStorm.
 * @author Ariful Haque <arifulhb@gmail.com>
 * Date: 3/31/16
 * Time: 3:01 PM
 */

namespace App\Ariful\Game\Contracts;


use App\Ariful\Game\Contracts\IDice;

interface IPlayer {

    /**
     * @param $value
     *
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function setName($value);

    /**
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function getName();

    /**
     * @return mixed
     *
     * @since  v0.0.1
     * @author Ariful Haque <arifulhb@gmail.com>
     * @return array|null
     */
    public function rollDices();


    /**
     * @param $number
     *
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function removeDice($number);


    /**
     *
     * @return mixed
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function takeDice();

    /**
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function diceCount();

    /**
     * @return mixed
     *
     * @since  vx.x.x
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function getDices();
}