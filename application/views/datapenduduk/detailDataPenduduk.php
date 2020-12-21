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
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/DashboardAdmin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Detail Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
      <div class="row">
        <div class="col-12 mb-2">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Data Penduduk</h3>
            </div>

         	 	<?php foreach($penduduk as $pd): ?>

            	<div class="row">
            		<div class="col-md-8"> 
            			<table class="table">

                    <tr>
                      <td></td>
                      <td></td>
                      <td><img src="<?= base_url('assets/img/1.jpg') ?>" style="width:30%; height: 200px;"></td>
                    </tr>

                    <tr>
                      <td>NIK</td>
                      <td>:</td>
                      <td><?php echo $pd->nik ?></td>
                    </tr>

            				<tr>
            					<td>Nama</td>
                      <td>:</td>
            					<td><?php echo $pd->name ?></td>
            				</tr>

                    <tr>
                      <td>Tempat/Tanggal Lahir</td>
                      <td>:</td>
                      <td><?php echo $pd->tempat_lahir,", ",format_indo($pd->tgl_lahir) ?></td>
                    </tr>

                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td><?php echo $pd->jenkel ?></td>
                    </tr>

                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?php echo $pd->alamat ?></td>
                    </tr>

                    <tr>
                      <td>Agama</td>
                      <td>:</td>
                      <td><?php echo $pd->agama ?></td>
                    </tr>

            				<tr>
            					<td>Status Perkawinan</td>
                      <td>:</td>
            					<td><?php echo $pd->status ?></td>
            				</tr>

                    <tr>
                      <td>Pekerjaan</td>
                      <td>:</td>
                      <td><?php echo $pd->pekerjaan ?></td>
                    </tr>

                    <tr>
                      <td>Kewarganegaraan</td>
                      <td>:</td>
                      <td><?php echo $pd->kewarganegaraan ?></td>
                    </tr>

            			</table>
                        <div class="btn mb-4">
                            <a href="<?= base_url('Admin/DataPenduduk') ?>" class="btn btn-success">Print</a>
                             <a href="<?= base_url('Admin/DataPenduduk') ?>" class="btn btn-danger">Kembali</a>
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