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

         	 	<?php foreach($kepalaKeluarga as $kk): ?>

            			<table class="table">
                            <tr>
                                <td>NIKK</td>
                                <td>:</td>
                                <td><?php echo $kk->nikk ?></td>
                            </tr>

            				<tr>
            					<td>Nama Kepala Keluarga</td>
                                <td>:</td>
            					<td><?php echo $kk->nama_kepala_keluarga ?></td>
            				</tr>

            				<tr>
            					<td>Nama Istri</td>
                                <td>:</td>
            					<td><?php echo $kk->nama_istri ?></td>
            				</tr>

            				<tr>
            					<td>Nama Anak 1</td>
                                <td>:</td>
            					<td><?php echo $kk->nama_anak1 ?></td>
            				</tr>

            				<tr>
            					<td>Nama Anak 2</td>
                                <td>:</td>
            					<td><?php echo $kk->nama_anak2 ?></td>
            				</tr>

                            <tr>
                                <td>Nama Anak 3</td>
                                <td>:</td>
                                <td><?php echo $kk->nama_anak3 ?></td>
                            </tr>                   

            			</table>
                        <div class="btn mb-4">
                            <a href="<?= base_url('Admin/DataKepalaKeluarga/kkPrint/'.$kk->id_kk)?>" target="_blank"><div class="btn btn-warning" >Print</div></a>
                             <a href="<?= base_url('Admin/DataKepalaKeluarga') ?>" class="btn btn-danger">Kembali</a>
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