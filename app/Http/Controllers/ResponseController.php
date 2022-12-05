<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use RealRashid\SweetAlert\Facades\Alert;

class ResponseController extends Controller
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
        $response = Aspirasi::latest()->paginate(5);
        return view('response.index', compact('response'));
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
        //
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
        $response = Aspirasi::find($id);
        // status menunggu -> proses
        if($response->status == 'menunggu') {
            $response->status = "proses";
            $response->feedback = "Sedang dalam proses";
            $response->save();

            Alert::success('Pembaharuan', 'Laporan sedang Diproses!');
            return redirect('response');
        // status proses -> selesai
        } else {
            $response->status = "selesai";
            $response->feedback = "Laporan teratasi";
            $response->save();

            Alert::success('Pembaharuan', 'Laporan sudah diselesaikan!');
            return redirect('response');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Aspirasi::find($id);
        $response->delete();

        Alert::info('Delete', 'Data Response telah Dihapus!');
        return redirect('response');
    }
}
