<?php

namespace App\Exports;

use App\Birth;
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
        return Birth::all();
    }

    public function map($birth): array
    {
        return [
            $birth->name,
            $birth->nik,
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
