  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jurusan
        <small>data jurusan</small>
        <!-- <span class="pull-right"><a href="<?= base_url('guru/tambahsiswa') ?>" class="btn btn-primary btn-sm">tambah siswa</a></span> -->
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jurusan</h3>
              <section>
               <!--  <div class="row">
                  <form method="post" action="<?= base_url('guru/datasiswa') ?>">
                  <div class="col-md-5">
                      <div class="form-group">
                        <select name="id_kelas" id="" class="form-control">
                          <?php foreach ($kelas as $row): ?>
                            <option value="<?= $row->id_kelas ?>"><?= $row->nama_kelas ?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-1">
                      <div class="form-group">
                       <button style="submit" class="btn btn-success btn-sm">cari</button>
                      </div>
                  </div>
                  </form>
                </div> -->
              </section>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                	<tr>
                		<th>No</th>
                    <th>Kode</th>
                    <th>Nama Jurusan</th>
                		<!-- <th></th> -->
                	</tr>
                </thead>
								<tbody>
									<?php if (!empty($jurusan)): ?>
									<?php 
									$no = 1;
									foreach ($jurusan as $row): ?>
										<tr>
											<td><?= $no++ ?></td>
                      <td><?= $row['kode_jurusan'] ?></td>
                      <td><?= ucwords($row['nama_jurusan']) ?></td>
                   <!--    <td>
                          <a href="<?= base_url('admin/editjurusan/'.$row['kode_jurusan']) ?>" class="btn btn-success btn-sm">Edit</a>
                      </td> -->
										</tr>
									<?php endforeach ?>
									<?php endif ?>
								</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>










<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('guru/simpansiswa') ?>">
          <div class="form-group">
            <label for="">NISN</label>
            <input type="text" name="nisn" placeholder="masukkan nisn" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Nama Siswa</label>
            <input type="text" name="nama_siswa" placeholder="masukkan nama siswa" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Kelas</label>
            <select name="id_kelas" id="" class="form-control">
              <?php foreach ($kelas as $row): ?>
                <option value="<?= $row['id_kelas'] ?>"><?= $row['nama_kelas'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>