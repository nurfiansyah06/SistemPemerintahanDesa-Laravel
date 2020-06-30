<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
          }
    </style>
</head>
<body>
    <center>
    <h1>DATA PENDUDUK MIGRASI <br> DESA KETANONAGENG</h1>
    </center>
    <table class="table" class="">
        <thead>
            <tr>
                <th>NO MIGRASI</th>
                <th>NAMA LENGKAP</th>
                <th>NIK</th>
                <th>TANGGAL PINDAH</th>
                <th>ALAMAT ASLI</th>
                <th>ALAMAT PINDAH</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($move as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->nik }}</td>
                    <td>{{ $u->tgl_pindah }}</td>
                    <td>{{ $u->alamat_asli }}</td>
                    <td>{{ $u->alamat_pindah }}</td>
                    <td>{{ $u->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>