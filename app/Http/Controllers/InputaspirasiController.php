<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputAspirasi;
use App\Models\Penduduk;
use App\Models\Aspirasi;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class InputaspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = Aspirasi::latest()->paginate(4);
        return view('welcome', compact('history'));
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
        $validasi = Penduduk::select('nik')->where('nik', $request->get('nik'))->value('nik');

        if ($validasi) {
            InputAspirasi::create([
                'nik' => $request->get('nik'),
                'id_kategori' => $request->get('kategori'),
                'lokasi' => $request->get('lokasi'),
                'ket' => $request->get('ket')
            ]);

            Aspirasi::create([
                'id_pelaporan' => InputAspirasi::latest('id_pelaporan')->limit(1)->value('id_pelaporan'),
                'nik' => $request->get('nik')
            ]);

            $nik = $request->get('nik');

            Alert::success('Berhasil', 'NIK: ' . $nik);
            return redirect('inputaspirasi');
        } else {
            Alert::error('Invalid', 'NIK Penduduk tidak ditemukan!');
            return redirect('inputaspirasi');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inputaspirasi = InputAspirasi::find($id);
        $inputaspirasi->delete();

        Alert::info('Delete', 'Aspirasi telah Dihapus!');
        return redirect('welcome');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $search = Aspirasi::where('nik', 'like', "%" . $keyword . "%")->paginate(5);
        $history = $search;
        return view('welcome', compact('search', 'history'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
