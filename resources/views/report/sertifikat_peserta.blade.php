<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat Online</title>
</head>
<style>
    body{
        height: 100%;
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        padding: 80px 100px 10px 100px;
        width:100%;
    }
    .logo{
        text-align: center;
        margin-bottom: 20px;
    }
</style>
<body class="bg">
        <style>
       @page { 
         size: 29.6 cm 21 cm ; 
         margin: 0.5 cm 0.5 cm 0.5 cm 0.5 cm !important;
         padding: 0px !important;
         } 
    </style>
    <div class="margin" style="padding-left:1cm; padding-right:1cm; padding-top:0cm;">
        <div class="header">
                <div class="logo">
                <img src="pemprov.png" alt="" width="100px">
                </div>
                <h1 style="margin:0px; text-align:center; font-size:20px !important; text-transform:uppercase;">PEMERINTAH PROVINSI KALIMANTAN SELATAN</h1>    
                <h3 style="margin:0px; text-align:center; font-size:20px !important; text-transform:uppercase;">BADAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH (BPSDMD) </h3>
                <br>
                <br>
                <h2 style="margin:0px; text-align:center; font-size:50px !important; ">SERTIFIKAT</h2>    
                <br>
                <h4 style="margin:0px; text-align:center;">diberikan kepada :</h4>
                <h2 style="margin:0px; text-align:center; font-size:25px !important; text-transform:uppercase;">{{$data->nama}}</h2>
                <h2 style="margin:0px; text-align:center; font-size:25px !important; text-transform:uppercase;">NIP. {{$data->nip}}</h2>
                <br>
                <p style="margin:0px; text-align:center; font-size:15px !important;">Atas partisipasi sebagai peserta pelatihan {{$data->pelatihan->nama_pelatihan}}, pada tanggal {{carbon\carbon::parse($data->tanggal_mulai)->translatedFormat('d F Y')}} sampai {{carbon\carbon::parse($data->tanggal_selesai)->translatedFormat('d F Y')}} dilaksanakan di Badan Pengembangan Sumber Daya Manusia Daerah (BPSDMD) Provinsi Kalimantan Selatan</p>
                <br>
                <br>
                <table width="100%">
                    <tr>
                         <td style="text-align: center; width:100%;">
                            Banjarmasin, {{Carbon\carbon::now()->translatedFormat('d F Y')}}
                            <br>
                            Kepala BPSDMD Provinsi Kalimantan Selatan
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <h5 style="text-decoration:underline; margin:0px">(...........................)</h5>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</body>
</html>