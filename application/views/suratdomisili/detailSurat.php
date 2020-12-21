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
	


  <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

         	 	<?php foreach($surat as $srt): ?>

            			<table class="table">
                            <tr>
                                <td>No Surat</td>
                                <td>:</td>
                                <td><?php echo $srt->no_surat ?></td>
                            </tr>

            				<tr>
            					<td>NIK</td>
                                <td>:</td>
            					<td><?php echo $srt->nik ?></td>
            				</tr>

                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo $srt->nama ?></td>
                            </tr>

            				<tr>
            					<td>Tanggal Lahir</td>
                                <td>:</td>
            					<td><?php echo format_indo($srt->tgl_lahir) ?></td>
            				</tr>

                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php echo $srt->jenkel ?></td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><?php echo $srt->status_perkawinan ?></td>
                            </tr>

                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?php echo $srt->pekerjaan ?></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $srt->alamat ?></td>
                            </tr>

                            <tr>
                                <td>Dibuat Oleh</td>
                                <td>:</td>
                                <td><?php echo $srt->dibuat_oleh ?></td>
                            </tr>

                            <tr>
                                <td>Tanggal Dibuat</td>
                                <td>:</td>
                                <td><?php echo format_indo($srt->tanggal_dibuat) ?></td>
                            </tr>                   


            			</table>
                        <div class="btn mb-4">
                            <a href="<?= base_url('Admin/SuratDomisili/print/'.$srt->id_surat)?>" target="_blank"><div class="btn btn-warning" >Print</div></a>
                             <?= anchor('Admin/SuratDomisili/Edit/'.$srt->id_surat, '<div class="btn btn-success">Edit</div>')?>
                             <a href="<?= base_url('Admin/SuratDomisili') ?>" class="btn btn-danger">Kembali</a>

                         </div>
                        
            		</div>

            	</div>
            <?php endforeach; ?>

            </div>
        </div>
        </div>	
    </div>
    </section>
    </div>