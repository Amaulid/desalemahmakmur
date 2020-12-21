
   <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penduduk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin/DashboardAdmin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Penduduk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <?php echo $this->session->flashdata('msg');?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>             
                <button class="btn btn-default ml-2">Print</button>
              </div>
              <div class="card-body">
                <table class="table is-narrow" id="tabeluser">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  foreach ($penduduk as $u) { ?>
                    <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $u->nik ?></td>
                     <td><?= $u->name ?></td>
                     <td><?= $u->alamat ?></td>
                     <td><?= $u->tempat_lahir,", ", format_indo($u->tgl_lahir) ?></td>
                     <td><?= anchor('Admin/DataPenduduk/Hapus/'.$u->id, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>')?>
                         <?= anchor('Admin/DataPenduduk/Edit/'.$u->id, '<div class="btn btn-success"><i class="fa fa-pencil-alt"></i></div>')?>
                         <?= anchor('Admin/DataPenduduk/Detail/'.$u->id, '<div class="btn btn-info"><i class="fa fa-eye"></i></div>')?> </td>
                    </tr>
                 <?php } ?>
                 </tbody>
              </table>
            </div>
         </div>
        </div>
      </div>
  </section>
</div>

<!-- Modal Start -->

 <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
               <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url().'Admin/DataPenduduk/tambah' ?>" method="post">
                 <div class="card-body">
                    <div class="form-group">
                      <label>NIK</label>
                       <input type="text" class="form-control" placeholder="Masukan NIK" name="nik">
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                       <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="name">
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" placeholder="Masukan tempat lahir"  name="tempat_lahir">
                    </div>

                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir">
                    </div>
                      
                   <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control select2" style="width: 100%;" name="jenkel">
                        <option selected="selected">--Pilih--</option>
                        <option>LAKI-LAKI</option>
                        <option>PEREMPUAN</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                       <input type="text" class="form-control" placeholder="Masukan alamat" name="alamat">
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control select2" style="width: 100%;" name="agama">
                        <option selected="selected">--Pilih--</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Khatolik</option>
                        <option>Lainnya</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label>Status Perkawinan</label>
                      <select class="form-control select2" style="width: 100%;" name="status">
                        <option selected="selected">--Pilih--</option>
                        <option>Belum Kawin</option>
                        <option>Kawin</option>
                        <option>Janda</option>
                        <option>Duda</option>
                        <option>Lainnya</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label>Pekerjaan</label>
                      <select class="form-control select2" style="width: 100%;" name="pekerjaan">
                        <option selected="selected">--Pilih--</option>
                        <option>WIRASWASTA</option>
                        <option>WIRAUSAHA</option>
                        <option>KARYAWAN</option>
                        <option>PEGAWAI NEGRI SIPIL</option>
                        <option>GURU/DOSEN</option>
                        <option>POLISI</option>
                        <option>TNI</option>
                        <option>Lainnya</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Kewarganegaraan</label>
                       <input type="text" class="form-control" placeholder="Masukan Kewarganegaraan" name="kewarganegaraan">
                    </div>
                <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
