   
   <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <label class="mt-2">Setting Surat Domisili</label>
            <div class="row">
              <div class="col col-12">
                <?php echo $this->session->flashdata('msg');?>
              </div>
            </div>
          </div>
        </section>

                   
            <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabeluser" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Header</th>
                    <th>Nama Kades</th>
                    <th>Konten</th>
                    <th>End Konten</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <?php 
                  foreach($setting as $srt): ?>

                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><?php echo $srt->jenis_surat ?></td>
                      <td><?php echo $srt->header ?></td>
                      <td><?php echo $srt->nama_kades ?></td>
                      <td><?php echo $srt->konten ?></td>
                      <td><?php echo $srt->end_konten ?></td>
                      <td><img style="width: 75px;" src="<?= base_url().'/upload/'.$srt->logo ?>"></td>
                      <td>
                      <?= anchor('Admin/SettingSuratDomisili/Edit/'.$srt->id, '<div class="btn btn-success"><i class="fa fa-pencil-alt"></i></div>')?>
                      <a href="<?= base_url('Admin/SettingSuratDomisili/print/'.$srt->id) ?>" target="_blank"><div class="btn btn-primary"><i class="fa fa-eye"></i></div></a></td>
                  </tbody>

            <?php endforeach; ?>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div>


   