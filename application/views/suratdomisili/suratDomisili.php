   
   <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <label class="mt-2"><h3>Surat Keterangan Domisili</h3></label>
          <div class="col col-4">
            <div class="">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  Buat Surat Baru
                </button>
              </div>
          </div>
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
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <?php foreach($surat as $srt): ?>

                  <tbody>
                    <tr>
                      <td><?php echo $srt->no_surat ?></td>
                      <td><?php echo $srt->nik ?></td>
                      <td><?php echo $srt->nama ?></td>
                      <td><?php echo $srt->alamat ?></td>
                      <td><?php echo format_indo($srt->tanggal_dibuat) ?></td>
                      <td><a href="<?= base_url('Admin/SuratDomisili/Hapis') ?>"></a>
                        <?= anchor('Admin/SuratDomisili/Hapus/'.$srt->id_surat, '<div class="btn btn-danger" ><i class="fa fa-trash"></i></div>')?>
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


   <!-- Modal -->

   <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buat Surat BAru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- form start -->
              <form role="form" action="<?= base_url('Admin/SuratDomisili/tambah_aksi') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                    <input type="text" class="form-control" placeholder="Masukan Nomer Surat" name="no_surat">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" placeholder="Masukan NIK" name="nik">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" placeholder="Enter email" name="tgl_lahir">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select name="jenkel">
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <select name="agama">
                      <option>-Pilih-</option>
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status">
                      <option>-Pilih-</option>
                      <option>Kawin</option>
                      <option>Belum Kawin</option>
                      <option>Janda</option>
                      <option>Duda</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <select name="pekerjaan">
                      <option>-Pilih-</option>
                      <option>Karyawan</option>
                      <option>Wiraswasta</option>
                      <option>Wirausaha</option>
                      <option>PNS/TNI/POLRI</option>
                      <option>Guru/Dosen</option>
                      <option>Lainnya</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="alamat">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Dibuat Oleh</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="dibuat_oleh" value="<?php echo $this->session->userdata('username') ?>" disabled>
                  </div>
                </div>
                <!-- /.card-body -->
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
          </div>
          <!-- /.modal-content -->
              </form>
        </div>
        <!-- /.modal-dialog -->
      </div>