<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wind extends Model
{
    protected $primaryKey = 'id';
	protected $table = 'width';

    protected $fillable = [
        'width'
    ];
}
