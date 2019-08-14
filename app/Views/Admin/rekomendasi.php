  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rekomendasi
        <small>data Rekomendasi</small>
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
              <h3 class="box-title">Data Siswa</h3>
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
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Rekomendasi Jurusan</th>
                		<th>Aksi</th>
                	</tr>
                </thead>
								<tbody>
									<?php if (!empty($siswa)): ?>
									<?php 
									$no = 1;
									foreach ($siswa as $row): ?>
										<tr>
											<td><?= $no++ ?></td>
                      <td><?= $row['nisn'] ?></td>
                      <td><?= ucwords($row['nama_siswa']) ?></td>
                      <td><?= ucwords($row['pilihan_jurusan']) ?></td>
                      <td>
                        <a class="btn btn-danger btn-sm" href="<?= base_url('admin/hapus/siswa/rekomendasi/'.$row['nisn']) ?>">hapus</a>
                      </td>
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




