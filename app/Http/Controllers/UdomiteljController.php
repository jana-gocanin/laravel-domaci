<?php

namespace App\Http\Controllers;

use App\Http\Resources\UdomiteljJson;
use App\Models\Udomitelj;
use Illuminate\Http\Request;

class UdomiteljController extends Controller
{

    public function getAll()
    {
        $udomitelji = Udomitelj::all();

        return UdomiteljJson::collection($udomitelji);
    }

    public function add(Request $request)
    {
        $requestUdomitelj = $request->only('ime', 'prezime', 'datum_rodjenja', 'email');
        $udomitelj = Udomitelj::create($requestUdomitelj);

        return new UdomiteljJson($udomitelj);
    }

    public function getById($id)
    {
        $udomitelj = Udomitelj::findOrFail($id);

        return new UdomiteljJson($udomitelj);

    }

    public function delete($id)
    {
        $udomitelj = Udomitelj::destroy($id);

        dd($udomitelj);

    }
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Udomitelj  $udomitelj
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Udomitelj $udomitelj)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Udomitelj  $udomitelj
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Udomitelj $udomitelj)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Udomitelj  $udomitelj
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Udomitelj $udomitelj)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Udomitelj  $udomitelj
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Udomitelj $udomitelj)
    // {
    //     //
    // }
}
