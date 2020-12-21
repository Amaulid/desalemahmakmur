<div class="content-wrapper">
	


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
                        
            		</div>

            	</div>
            <?php endforeach; ?>

            </div>
        </div>
        </div>	
    </div>
    </section>
    </div>