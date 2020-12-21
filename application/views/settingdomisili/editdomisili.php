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

         	 	<?php foreach($setting as $srt): ?>

            <form method="post" action="<?php echo base_url().'Admin/SettingSuratDomisili/update' ?>">
              <div class="card-body">
            			<table class="table">


            				<tr>
            					<td>Jenis Surat</td>
                                <td>:</td>
            					<td><input type="text" name="jenis_surat" class="form-control" value="<?php echo $srt->jenis_surat ?>"></td>
            				</tr>

            				<tr>
            					<td>Nama Kades</td>
                                <td>:</td>
            					<td><input type="text" name="nama_kades" class="form-control" value="<?php echo $srt->nama_kades ?>"></td>
                            </tr>

                            <tr>
                                <td>Header</td>
                                <td>:</td>
                                <td><textarea name="header" class="form-control"?><?php echo $srt->header ?></textarea></td>
                            </tr>


                            <tr>
                                <td>Konten</td>
                                <td>:</td>
                                <td><textarea name="konten" class="form-control"?><?php echo $srt->konten ?></textarea></td>
                            </tr>

                            <tr>
                                <td>End Konten</td>
                                <td>:</td>
                                <td><textarea name="end_konten" class="form-control"?><?php echo $srt->end_konten ?></textarea></td>
                                <td><input type="hidden" name="id" class="form-control" value="<?php echo $srt->id ?>"></td>
                            </tr>

                            <tr>
                                <td><button type="submit" class="btn btn-primary btn-sm mt-3 mr-3 ">Simpan</button></td>
                                    <td><a href="<?= base_url('Admin/SettingSuratDomisili') ?>" class="btn btn-danger btn-sm mt-3 mr-3">Kembali</a></td>
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