<?php

namespace App\Exports;

use App\Fam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fam::all();
    }

    public function map($fam): array
    {
        return [
            $fam->name,
            $fam->nik,
        ];
    }

    public function headings(): array
    {
        return [
            'NO KK',
            'NAMA KEPALA KELUARGA',
            'ANGGOTA',
        ];
    }

}
