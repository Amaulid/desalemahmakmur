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
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12 mb-2">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Data Penduduk</h3>
            </div>

         	 	<?php foreach($penduduk as $pd): ?>

            	<div class="row">
            		<div class="col-md-8"> 
                        <form method="post" action="<?php echo base_url().'Admin/DataPenduduk/update' ?>">
            			<table class="table">

                            <tr>
                                <td></td>
                                <td></td>
                                <td><img src="<?= base_url('assets/img/1.jpg') ?>" style="width:30%; height: 200px;"></td>
                            </tr>

                    <tr>
                      <td>NIK</td>
                      <td>:</td>
                      <td><input type="text" name="nik" class="form-control" value="<?php echo $pd->nik ?>"></td>
                    </tr>

            				<tr>
            					<td>Nama</td>
                      <td>:</td>
            					<td><input type="text" name="name" class="form-control" value="<?php echo $pd->name ?>"></td>
            				</tr>

            				<tr>
            					<td>Tempat Lahir</td>
                      <td>:</td>
            					<td><input type="text" name="tempat_lahir" class="form-control" value="<?php echo $pd->tempat_lahir ?>"></td>
            				</tr>

                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>:</td>
                      <td><input type="text" name="tgl_lahir" class="form-control" value="<?php echo $pd->tgl_lahir ?>"></td>
                    </tr>

                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td><input type="text" name="jenkel" class="form-control" value="<?php echo $pd->jenkel ?>"></td>
                    </tr>

                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><input type="text" name="alamat" class="form-control" value="<?php echo $pd->alamat ?>"></td>
                    </tr>

                    <tr>
                      <td>Agama</td>
                      <td>:</td>
                      <td><input type="text" name="agama" class="form-control" value="<?php echo $pd->agama ?>"></td>
                    </tr>

                    <tr>
                      <td>Status Perkawinan</td>
                      <td>:</td>
                      <td><input type="text" name="status" class="form-control" value="<?php echo $pd->status ?>"></td>
                    </tr>

                    <tr>
                      <td>Pekerjaan</td>
                      <td>:</td>
                      <td><input type="text" name="pekerjaan" class="form-control" value="<?php echo $pd->pekerjaan ?>"></td>
                    </tr>

                    <tr>
                      <td>Kewarganegaraan</td>
                      <td>:</td>
                      <td><input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $pd->kewarganegaraan ?>"></td>
                      <input type="hidden" name="id" class="form-control" value="<?php echo $pd->id ?>"></td>
                    </tr>

                            
                            <tr>
                                <td><button type="submit" class="btn btn-primary btn-sm mt-3 mr-3 ">Simpan</button></td>
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