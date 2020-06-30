<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Fam;

class DashboardController extends Controller
{
    public function index()
    {
        $userl = User::where('jns_kelamin','Pria')->count(); 
        $userp = User::where('jns_kelamin','Perempuan')->count(); 
        $fam = Fam::where('jabatan', 'Kepala Keluarga')->count();
        $usr = User::count(); 
        return view ('pages.admin.home')->with([
            'userl' => $userl,
            'userp' => $userp,
            'fam' => $fam,
            'usr' => $usr
        ]);
    }
}
