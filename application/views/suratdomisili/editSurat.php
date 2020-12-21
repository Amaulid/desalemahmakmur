   <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->


  <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

         	 	<?php foreach($surat as $srt): ?>

            <form method="post" action="<?php echo base_url().'Admin/SuratDomisili/update' ?>">
              <div class="card-body">
            			<table class="table">

                            <tr>
                                <td>No Surat</td>
                                <td>:</td>
                                <td><input type="text" name="no_surat" class="form-control" value="<?php echo $srt->no_surat ?>"></td>
                            </tr>

                            <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><input type="text" name="nik" class="form-control" value="<?php echo $srt->nik ?>">
                            </tr>

            				<tr>
            					<td>Nama</td>
                                <td>:</td>
            					<td><input type="text" name="nama" class="form-control" value="<?php echo $srt->nama ?>"></td>
            				</tr>

                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><input type="text" name="tgl_lahir" class="form-control" value="<?php echo $srt->tgl_lahir ?>">
                            </tr>

                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><input type="text" name="jenkel" class="form-control" value="<?php echo $srt->jenkel ?>">
                            </tr>

                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><input type="text" name="agama" class="form-control" value="<?php echo $srt->agama ?>">
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><input type="text" name="status_perkawinan" class="form-control" value="<?php echo $srt->status_perkawinan ?>">
                            </tr>

                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><input type="text" name="pekerjaan" class="form-control" value="<?php echo $srt->pekerjaan ?>">
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><input type="text" name="alamat" class="form-control" value="<?php echo $srt->alamat ?>">
                                <input type="hidden" name="id_surat" class="form-control" value="<?php echo $srt->id_surat ?>"></td>
                            </tr>
                            
                            <tr>
                                <td><button type="submit" class="btn btn-primary btn-sm mt-3 mr-3 ">Simpan</button>
                                <button class="btn btn-danger btn-sm mt-3 mr-3"><a href="<?= base_url('SuratPengantar') ?>"></a>Kembali</button></td>
                            </tr>

            			</table>
                    </form>
                        
            		</div>

            	</div>
            <?php endforeach; ?>

            </div>
        </div>
        </div>	
    </div>
    </section>