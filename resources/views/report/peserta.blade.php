<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h4,
        h2 {
            font-family: serif;
        }

        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            /* border: 1px solid black; */
        }

        th {
            text-align: center;
        }

        .border {
            border: 1px solid black;
        }

        td {
            /* text-align: center; */
        }

        br {
            margin-bottom: 5px !important;
        }

        .judul {
            text-align: center;
        }

        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 110px;
            padding: 0px;
        }

        .pemko {
            width: 70px;
        }

        .logo {
            float: left;
            margin-right: 0px;
            width: 18%;
            padding: 0px;
            text-align: right;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 72%;
            padding-left: 0px;
            padding-right: 10%;
        }

        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
            width: 100%;
        }

        .ttd {
            margin-left: 65%;
            text-align: center;
            text-transform: uppercase;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .isi {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="pemko" src="pemprov.png">
        </div>
        <div class="headtext">
            <h3 style="margin:0px;">PEMERINTAH PROVINSI KALIMANTAN SELATAN </h3>
            <h3 style="margin:0px;">BADAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH</h3>
            <p style="margin:0px;">Jln. Panglima Batur Timur Nomor 1A, Banjarbaru Utara Kota Banjarbaru : (0511) 4772551
                : 70711</p>
        </div>
        <br>
    </div>
    <div class="container">
        <hr style="margin-top:1px;">
        <div class="isi">
            <br>
            <h4 style="text-align:center; text-transform:uppercase;">PESERTA PELATIHAN / DIKLAT {{$pelatihan->nama_pelatihan}}</h4>
            <table class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th class="border text-center">No</th>
                        <th class="border text-center">Nama </th>
                        <th class="border text-center">NIP</th>
                        <th class="border text-center">Tempat, Tanggal lahir</th>
                        <th class="border text-center">No Hp</th>
                        <th class="border text-center">SKPD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)

                    <tr>
                        <td class="border text-center">{{$loop->iteration}}</td>
                        <td class="border text-center">{{$d->nama}}</td>
                        <td class="border text-center">{{$d->nip}}</td>
                        <td class="border text-center">{{$d->tempat_lahir}},
                            {{carbon\carbon::parse($d->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                        <td class="border text-center">{{$d->no_hp}}</td>
                        <td class="border text-center">{{$d->skpd->nama_skpd}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <br><br>
            <div class="ttd">
                <p style="margin:0px"> Banjarbaru,</p>
                <h6 style="margin:0px">Mengetahui</h6>
                <h5 style="margin:0px">Kepala Badan </h5>
                <br>
                <br>
                <br>
                <h5 style="text-decoration:underline; margin:0px">(...........................)</h5>
                <!-- <h5 style="margin:0px">NIP. 19620606 199203 2 007</h5> -->
            </div>
        </div>
    </div>
</body>

</html>