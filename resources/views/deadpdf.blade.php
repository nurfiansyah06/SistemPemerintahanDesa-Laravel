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
    <h1>DATA KEMATIAN <br> DESA KETANONAGENG</h1>
    <table class="table" class="">
        <thead>
            <tr>
                <th>NAMA</th>
                <th>NO AKTA KEMATIAN</th>
                <th>NIK</th>
                <th>TANGGAL KEMATIAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dead as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->no_aktakematian }}</td>
                    <td>{{ $u->nik }}</td>
                    <td>{{ $u->tgl_kematian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</center>
</body>
</html>