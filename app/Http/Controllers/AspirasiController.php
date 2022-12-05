<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\InputAspirasi;
use RealRashid\SweetAlert\Facades\Alert;

class AspirasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aspirasi = Aspirasi::find($id);
        return view('aspirasi.edit', compact('aspirasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aspirasi = Aspirasi::find($id);
        $aspirasi->id_pelaporan = $request->GET('inputaspirasi');
        $aspirasi->status = $request->GET('status');
        $aspirasi->feedback = $request->GET('feedback');
        $aspirasi->save();

        Alert::success('Update', 'Data Aspirasi berhasil Diubah!');
        return redirect('aspirasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aspirasi = InputAspirasi::find($id);
        $aspirasi->delete();

        Alert::info('Delete', 'Data Aspirasi telah Dihapus!');
        return redirect('aspirasi');
    }
}
