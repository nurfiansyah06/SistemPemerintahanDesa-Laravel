<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Fam;
use App\Birth;
use App\Surat;
use App\Move;
use App\Dead;
use PDF;
use App\Exports\PendudukExport;
use App\Exports\ExcelExport;
use Excel;
class PdfController extends Controller
{
    public function export()
    {
        $users = User::all();
        $pdf = PDF::loadView('export',['users' => $users]);
        return $pdf->download('penduduk.pdf');
    }

    public function pdffam()
    {
        $fams = Fam::all();
        $pdf = PDF::loadView('pdffam',['fams' => $fams]);
        return $pdf->download('keluarga.pdf');
    }

    public function pdfbirth()
    {
        $births = Birth::all();
        $pdf = PDF::loadView('birthpdf',['births' => $births]);
        return $pdf->download('kelahiran.pdf');
    }

    public function pdfsurat()
    {
        $surat = Surat::all();
        $pdf = PDF::loadView('suratpdf',['surat' => $surat]);
        return $pdf->download('surat.pdf');
    }

    public function pdfmove()
    {
        $move = Move::all();
        $pdf = PDF::loadView('movepdf',['move' => $move]);
        return $pdf->download('migrasi.pdf');
    }

    public function pdfdead()
    {
        $dead = Dead::all();
        $pdf = PDF::loadView('deadpdf',['dead' => $dead]);
        return $pdf->download('kematian.pdf');
    }
}
