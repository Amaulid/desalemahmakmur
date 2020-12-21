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

         	 	<?php foreach($kepalaKeluarga as $kk): ?>

                        <form method="post" action="<?php echo base_url().'Admin/DataKepalaKeluarga/update' ?>">
              <div class="card-body">
            			<table class="table">

                            <tr>
                                <td></td>
                                <td></td>
                                <td><img src="<?= base_url('assets/img/1.jpg') ?>" style="width:30%; height: 200px;"></td>
                            </tr>

                            <tr>
                                <td>NIKK</td>
                                <td>:</td>
                                <td><input type="text" name="nikk" class="form-control" value="<?php echo $kk->nikk ?>"></td>
                            </tr>

            				<tr>
            					<td>Nama Kepala Keluarga</td>
                                <td>:</td>
            					<td><input type="text" name="nama_kepala_keluarga" class="form-control" value="<?php echo $kk->nama_kepala_keluarga ?>"></td>
            				</tr>

            				<tr>
            					<td>Nama Istri</td>
                                <td>:</td>
            					<td><input type="text" name="nama_istri" class="form-control" value="<?php echo $kk->nama_istri ?>"></td>
            				</tr>

                            <tr>
                                <td>Nama Anak 1</td>
                                <td>:</td>
                                <td><input type="text" name="nama_anak1" class="form-control" value="<?php echo $kk->nama_anak1 ?>">
                            </tr>

                            <tr>
                                <td>Nama Anak 2</td>
                                <td>:</td>
                                <td><input type="text" name="nama_anak2" class="form-control" value="<?php echo $kk->nama_anak2 ?>">
                            </tr>

                            <tr>
                                <td>Nama Anak 3</td>
                                <td>:</td>
                                <td><input type="text" name="nama_anak3" class="form-control" value="<?php echo $kk->nama_anak3 ?>">
                                <input type="hidden" name="id_kk" class="form-control" value="<?php echo $kk->id_kk ?>"></td>
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