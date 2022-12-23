<?php

namespace App\Http\Controllers;

use App\Http\Resources\PasJson;
use App\Models\Pas;
use Illuminate\Http\Request;

class PasController extends Controller
{
    public function getAll()
    {
        $psi = Pas::all()->get();

        return new PasJson($psi);
    }
}
