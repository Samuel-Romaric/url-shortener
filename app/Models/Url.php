<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Url extends Model
{
    protected $fillable = ['url', 'shortened'];

    /**
     * Create a new shortener.
     *
     * @return string
     */
    public static function get_unique_short_url()
	{
		$shortened = Str::random(5);

		if (static::whereShortened($shortened)->count() > 0 ) {
			return static::get_unique_short_url();
		}

		return $shortened;
	}
}
