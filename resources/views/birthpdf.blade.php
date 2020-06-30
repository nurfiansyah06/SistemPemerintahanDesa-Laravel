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
    <h1>DATA AKTA KELAHIRAN <br> DESA KETANONAGENG</h1>
    </center>
    <table class="table" class="">
        <thead>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>TANGGAL LAHIR</th>
                <th>TEMPAT LAHIR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($births as $birth)
            <tr>
                <td>{{  $birth->user->nik }}</td>
                <td>{{ $birth->user->name }}</td>
                <td>{{ $birth->tgl_lahir }}</td>
                <td>{{ $birth->tmpt_lahir }}</td>
            </tr>
            @endforeach    
        </tbody>
    </table>
</body>
</html>