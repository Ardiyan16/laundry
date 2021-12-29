<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjadwalan;
use App\Models\Post;

class PenjadwalanController extends Controller
{
    //

    public function index()
    {
        $this->param['title'] = 'View Penjadwalan';
        $this->param['view'] = Penjadwalan::all();
        return view('admin/v_penjadwalan', $this->param);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'keterangan' => 'required'
        ]);
        $input = $request->all();
        Penjadwalan::create($input);
        return redirect('/penjadwalan')->with('success', 'Penjadwalan berhasil ditambahkan!');
    }

    public function t_penjadwalan()
    {
        $this->param['title'] = 'Tambah Penjadwalan';
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
        $this->param['edit'] = Penjadwalan::findOrFail($id);
        return view('admin/e_penjadwalan', $this->param);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'keterangan' => 'required'
        ]);

        Penjadwalan::find($id)->update($request->all());
        return redirect('/penjadwalan')->with('success', 'Penjadwalan berhasil diupdate!');
    }
}
