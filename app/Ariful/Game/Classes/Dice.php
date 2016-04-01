<?php
/**
 * Created by PhpStorm.
 * @author Ariful Haque <arifulhb@gmail.com>
 * Date: 3/31/16
 * Time: 3:06 PM
 */

namespace App\Ariful\Game\Classes;

use App\Ariful\Game\Contracts\IDice;

class Dice implements IDice{

    private $topSide = '1';
    /**
     * Roll the dice
     *
     * @return mixed
     *
     * @since  v0.0.1
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function roll()
    {
        $this->topSide = rand(1, 6);
        return $this->topSide;

    }

    /**
     * Get Top side value
     *
     * @return mixed
     *
     * @since  v0.0.1
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function getTopSide()
    {
        return $this->topSide;
    }
}