<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class place extends Model
{
    use Notifiable;

    protected $table = 'place';

    protected $fillable = [
        'numPlace',
    ];
    //
}
