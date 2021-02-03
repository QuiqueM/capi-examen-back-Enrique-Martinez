<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\user_domicilio;
use Carbon\Carbon;
class UserController extends Controller
{
    public function getUsuarios(){

        $data = [];
        $usuarios = User::join('user_domicilio','users.id','user_domicilio.user_id')->get();
        foreach($usuarios as $us){
            $edad = Carbon::parse($us->fecha_nacimiento)->age;
            $data[] = array(
                'nombre' => $us->name,
                'domicilio' => $us->domicilio,
                'cuidad' => $us->ciudad,
                'cp' => $us->cp,
                'fecha_nacimiento' => $us->fecha_nacimiento,
                'colonia' => $us->colonia,
                'edad' => $edad
            );
        }

        return $data;
    }
}
