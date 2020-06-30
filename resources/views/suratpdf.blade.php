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
    <h1>DATA PERMOHONAN SURAT <br> DESA KETANONAGENG</h1>
    </center>
    <table class="table" class="">
        <thead>
            <tr>
                <th>NO SURAT</th>
                <th>NAMA LENGKAP</th>
                <th>JENIS SURAT</th>
                <th>ALAMAT</th>
                <th>KEPERLUAN</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surat as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->jns_surat }}</td>
                    <td>{{ $u->alamatrumah }}</td>
                    <td>{{ $u->keperluan }}</td>
                    <td>{{ $u->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>