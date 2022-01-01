<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasiltanam;
use App\Models\Rangkaian;
use App\Models\Pegawai;
use App\Models\Penjadwalan;
use Illuminate\Support\Facades\DB;


class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->param['title'] = 'Hasil Panen';
        $this->param['rangkaian'] = Rangkaian::all();
        $this->param['pegawai'] = Pegawai::all();
        $this->param['view'] = DB::table('hasiltanams')
                                    ->join('rangkaians', 'hasiltanams.id_rangkaian', '=', 'rangkaians.id')
                                    ->join('pegawais', 'hasiltanams.id_pegawai', '=', 'pegawais.id')
                                    ->select('hasiltanams.*', 'rangkaians.rangkaian', 'pegawais.nama')
                                    ->get();
        return view('admin.hasilpanen', $this->param);
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
        $request->validate([
            'id_rangkaian' => 'required',
            'jumlah_panen' => 'required',
            'id_pegawai' => 'required',
            'tgl_panen' => 'required'
        ]);

        $input = $request->all();
        Hasiltanam::create($input);
        return redirect('/hasilpanen')->with('success', 'Hasil panen berhasil ditambahkan!');
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
        $this->param['title'] = 'Details Rangkaian';
        // $this->param['rangkaian'] = Rangkaian::all();
        $this->param['view'] = DB::table('penjadwalans')
                                    ->select('*')
                                    ->where('id_rangkaian', $id)
                                    ->get();
        return view('admin/detailrangkaian', $this->param);
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
        $request->validate([
            'id_rangkaian' => 'required',
            'jumlah_panen' => 'required',
            'id_pegawai' => 'required',
            'tgl_panen' => 'required'
        ]);
        Hasiltanam::find($id)->update($request->all());
        return redirect('/hasilpanen')->with('success', 'Data hasil panen berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Hasiltanam::find($id);
        $delete->delete();
        return redirect('/hasilpanen')->with('success', 'Data hasil panen berhasil dihapus!');
    }

    public function r_hasil()
    {
        $this->param['title'] = 'Riwayat Hasil Panen';
        // $this->param['rangkaian'] = Rangkaian::all();
        // $this->param['pegawai'] = Pegawai::all();
        $this->param['view'] = DB::table('hasiltanams')
                                    ->join('rangkaians', 'hasiltanams.id_rangkaian', '=', 'rangkaians.id')
                                    ->join('pegawais', 'hasiltanams.id_pegawai', '=', 'pegawais.id')
                                    ->select('hasiltanams.*', 'rangkaians.rangkaian', 'pegawais.nama')
                                    ->get();
        return view('admin.r_hasil', $this->param);
    }

    public function detail($id)
    {
    }
}
