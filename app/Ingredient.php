<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
	/**
	 * The table name.
	 */
    protected $table = "tb_ingredients";

    /**
     * 
     */

    /**
     * Indicates if the table need to use timestamps.
     */
    public $timestamps = true;
}
