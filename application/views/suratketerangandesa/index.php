   
   <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <label class="mt-2">Surat Pengantar</label>
            <div class="row">
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
                    <th>No Surat</th>
                    <th>Jenis Surat</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>nik</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <?php foreach($surat as $srt): ?>

                  <tbody>
                    <tr>
                      <td><?php echo $srt->no_surat ?></td>
                      <td><?php echo $srt->jenis_surat ?></td>
                      <td><?php echo $srt->nama ?></td>
                      <td><?php echo $srt->alamat ?></td>
                      <td><?php echo $srt->nik ?></td>
                      <td><?php echo $srt->tanggal_dibuat ?></td>
                      <td><?= anchor('Admin/SuratDomisili/Hapus/'.$srt->id_surat, '<div class="btn btn-danger" ><i class="fa fa-trash"></i></div>')?>
                      <?= anchor('Admin/SuratDomisili/Edit/'.$srt->id_surat, '<div class="btn btn-success"><i class="fa fa-pencil-alt"></i></div>')?>
                      <?= anchor('Admin/SuratDomisili/Detail/'.$srt->id_surat, '<div class="btn btn-info"><i class="fa fa-eye"></i></div>')?> 
                      <a href="<?= base_url('Admin/SuratDomisili/print/'.$srt->id_surat) ?>" target="_blank"><div class="btn btn-default"><i class="fa fa-print"></i></div></a></td>
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


   