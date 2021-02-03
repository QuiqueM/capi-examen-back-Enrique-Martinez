<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_domicilio extends Model
{
    protected $table = 'user_domicilio';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'domicilio','numero_exterior','colonia','cp','ciudad'
    ];
}
