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
    <h1>DATA KELUARGA <br> DESA KETANONAGENG</h1>
    </center>
    <table class="table" class="">
        <thead>
            <tr>
                <th>NAMA KEPALA KELUARGA</th>
                <th>NO KK</th>
                <th>ANGGOTA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fams as $u)
                <tr>
                        <td>{{ $u->kepala_keluarga }}</td>  
                        <td>{{ $u->no_kk }}</td>  
                        
                        <td>
                            @foreach ($u->users as $item)
                            {{ $item->name }},
                            @endforeach</td>
                        <td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>