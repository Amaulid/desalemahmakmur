<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Domisili</title>
   <style>
        body {
            padding: 20px 40px 20px 20px;
        }
        .judul {
            text-align: center;
        }
        h3 {
          text-align: center;
          text-transform: uppercase;
        }

        .p1 {
          text-indent: 50px;
          text-align: justify;
        }
        .header-left{
            width: 70px;
            height: 100px;
            float: left;
            margin-left: 5px;
        }
        .table-content{
            width: 600px;
        }

        footer {
            text-align: center;
            margin-left: 400px;
        }


</style>
</head>
<body>

<?php foreach($surat as $srt): ?>

    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="<?= base_url('upload/logo.png') ?>">
        </div>
        <span class="fa fa-bars menu-icon"></span>
        <div class="header-right">
          <h3><?= $srt->header; ?></h3>
        </div>
      </div>
    </header>


    <hr>
    <div class="judul">
        <h4>SURAT KETRANGAN DOMISILI</h4>
        <P>NOMOR : </P>
    </div>
    <div class="container">
        <p>
            Yang bertanda tangan dibawah ini :
            </p>
            <table class="table-content">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $srt->nama_kades; ?></td>
            </tr>
             <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>Kepala Desa</td>
            </tr>
             <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Desa Lemah Makmur</td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td colspan="3"><p>Dengan ini menerangkan bahwa :</p></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td></td>
            </tr>

            <tr>
                <td>Tempal/Tanggal Lahir</td>
                <td>:</td>
                <td></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td></td>
            </tr>

            <tr>
                <td>Agama</td>
                <td>:</td>
                <td></td>
            </tr>

            <tr>
                <td>Status</td>
                <td>:</td>
                <td></td>
            </tr>

            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td></td>
            </tr>
            </table>
            <p class="p1"><?= $srt->konten; ?></p>
            <p class="p1"><?= $srt->end_konten; ?></p>
    </div>    
    <br><br><br>
    <footer>    
        <div class="footer">
            <p>Karawang,<?php 
                        function tgl_indo($tanggal){
                            $bulan = array (
                                1 =>   'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            );
                            $pecahkan = explode('-', $tanggal);
                            
                            // variabel pecahkan 0 = tanggal
                            // variabel pecahkan 1 = bulan
                            // variabel pecahkan 2 = tahun
                         
                            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                        }
                         
                        echo tgl_indo(date('Y-m-d'));
             ?> </p>
            <p>Kepala Desa Lemah Makmur</p><br><br><br>
            <h4><?= $srt->nama_kades; ?></h4>
        </div>
    </footer>
                  
                        
                </div>

              </div>
            <?php endforeach; ?>
</body>
</html>