<?php
/**
 * Created by PhpStorm.
 * @author Ariful Haque <arifulhb@gmail.com>
 * Date: 3/31/16
 * Time: 3:00 PM
 */

namespace App\Ariful\Game\Contracts;


interface IDice {

    /**
     * Rollq the dice
     *
     * @return mixed
     *
     * @since  v0.0.1
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function roll();


    /**
     * Get Top side value
     *
     * @return mixed
     *
     * @since  v0.0.1
     * @author Ariful Haque <arifulhb@gmail.com>
     */
    public function getTopSide();

}