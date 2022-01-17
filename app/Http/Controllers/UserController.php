<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $this->param['title'] = 'Home';
        return view('user.home', $this->param);
    }

    public function rangkaian_tanam()
    {
        $this->param['title'] = 'Rangkaian Tanam';
        return view('user.r_tanam', $this->param);
    }

    public function penjadwalan()
    {
        $this->param['title'] = 'Penjadwalan Tanam';
        $this->param['jadwal'] = DB::table('penjadwalans')
                                ->join('rangkaians', 'penjadwalans.id_rangkaian', '=', 'rangkaians.id')
                                ->select('penjadwalans.*', 'rangkaians.rangkaian')
                                ->where('status', 'belum')
                                ->get();
        return view('user.penjadwalan', $this->param);
    }

    public function hasil_tanam()
    {
        $this->param['title'] = 'Hasil Panen';
        $this->param['hasil'] = DB::table('hasiltanams')
                                    ->join('rangkaians', 'hasiltanams.id_rangkaian', '=', 'rangkaians.id')
                                    ->join('pegawais', 'hasiltanams.id_pegawai', '=', 'pegawais.id')
                                    ->select('hasiltanams.*', 'rangkaians.rangkaian', 'pegawais.nama')
                                    ->get();
        return view('user.hasil', $this->param);
    }
}
