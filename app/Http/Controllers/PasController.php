<?php

namespace App\Http\Controllers;

use App\Http\Resources\PasJson;
use App\Models\Pas;
use Illuminate\Http\Request;

class PasController extends Controller
{
    public function getAll()
    {
        $psi = Pas::all();

        return PasJson::collection($psi);
    }

    public function add(Request $request)
    {
        $requestPas = $request->only('ime', 'godina', 'boja', 'tezina');
        $pas = Pas::create($requestPas);

        return new PasJson($pas);
    }

    public function getById($id)
    {
        $pas = Pas::findOrFail($id);

        return new PasJson($pas);

    }

    public function delete($id)
    {
        $pas = Pas::destroy($id);

        dd($pas);

    }
}
