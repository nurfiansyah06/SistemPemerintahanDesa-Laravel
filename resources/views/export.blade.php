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
    <h1>DATA PENDUDUK <br> DESA KETANONAGENG</h1>
    </center>
    <table class="table" class="">
        <thead>
            <tr>
                <th>NAMA LENGKAP</th>
                <th>NIK</th>
                <th>NO KK</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->nik }}</td>
                    <td>{{ $u->no_kk_id }}</td>
                    <td>{{ $u->jns_kelamin }}</td>
                    <td>{{ $u->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>