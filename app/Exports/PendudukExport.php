<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendudukExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function map($user): array
    {
        return [
            $user->name,
            $user->nik,
            $user->no_kk_id,
            $user->jns_kelamin,
            $user->alamat
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA LENGKAP',
            'NIK',
            'NO KK',
            'JENIS KELAMIN',
            'ALAMAT'
        ];
    }

}
