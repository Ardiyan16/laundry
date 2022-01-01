<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjadwalan;
use App\Models\Rangkaian;
use Illuminate\Support\Facades\DB;

class PenjadwalanController extends Controller
{
    //

    public function index()
    {
        $this->param['title'] = 'View Penjadwalan';
        $this->param['view'] = DB::table('penjadwalans')
                                    ->join('rangkaians', 'penjadwalans.id_rangkaian', '=', 'rangkaians.id')
                                    ->select('penjadwalans.*', 'rangkaians.rangkaian')
                                    ->where('status', 'belum')
                                    ->get();
        return view('admin/v_penjadwalan', $this->param);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'keterangan' => 'required',
            'id_rangkaian' => 'required',
            'status' => 'required'
        ]);
        $input = $request->all();
        Penjadwalan::create($input);
        return redirect('/penjadwalan')->with('success', 'Penjadwalan berhasil ditambahkan!');
    }

    public function t_penjadwalan()
    {
        $this->param['title'] = 'Tambah Penjadwalan';
        $this->param['rangkaian'] = Rangkaian::all();
        return view('admin/t_penjadwalan', $this->param);
    }

    public function destroy($id)
    {
        $delete = Penjadwalan::find($id);
        $delete->delete();
        return redirect('/penjadwalan')->with('success', 'Penjadwalan berhasil dihapus!');
    }

    public function edit($id)
    {
        $this->param['title'] = 'Edit Penjadwalan';
        $this->param['rangkaian'] = Rangkaian::all();
        $this->param['edit'] = Penjadwalan::findOrFail($id);
        return view('admin/e_penjadwalan', $this->param);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'keterangan' => 'required',
            'id_rangkaian' => 'required',
            'status' => 'required'
        ]);

        Penjadwalan::find($id)->update($request->all());
        return redirect('/penjadwalan')->with('success', 'Penjadwalan berhasil diupdate!');
    }

    public function status(Request $request)
    {
        DB::table('penjadwalans')
                ->where('id', $request->id)
                ->update(['status' => 'selesai']);

        return redirect('/penjadwalan')->with('success', 'Penjadwalan telah selesai dan masuk ke riwayat jadwal!');
    }

    public function r_penjadwalan()
    {
        $this->param['title'] = 'Riwayat Penjadwalan';
        $this->param['view'] = DB::table('penjadwalans')
                                    ->join('rangkaians', 'penjadwalans.id_rangkaian', '=', 'rangkaians.id')
                                    ->select('penjadwalans.*', 'rangkaians.rangkaian')
                                    ->where('status', 'selesai')
                                    ->get();
        return view('admin/r_penjadwalan', $this->param);
    }
}
