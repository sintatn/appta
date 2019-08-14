    <section class="content-header">
      <h1>
        <i class="fa fa-check-square-o"></i> Bobot Kriteria
        <small>Nilai Perbandingan Bobot Kriteria</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Kriteria</li>
        <li class="active">Bobot Kriteria</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
	  
		<div class="col-md-12">
          <div class="box box-solid">
			<div class="box-header with-border">
			  <i class="fa fa-edit"></i>
              <h3 class="box-title">Ubah Nilai Perbandingan Kriteria</h3>
            </div>            
            <!-- /.box-header -->
            <div class="box-body">
			 <form action="<?= base_url('admin/databobotkriteria') ?>" method="post" class="form-inline">
					<div class="form-group">
						<select class="form-control" name="kode_jurusan" onchange="this.form.submit()">
						<option value="">Pilih Jurusan</option>
						<?php foreach ($jurusan as $row): ?>
							<option value="<?= $row->kode_jurusan ?>" <?php if ($row->kode_jurusan == $kode_jurusan): ?>
								selected
							<?php endif ?>><?= $row->nama_jurusan ?></option>
						<?php endforeach ?>
						</select>
					</div>
				</form> <br>

				<label>Nilai Perbandingan Kriteria</label>
				<form class="form-inline" method="post" action="<?= base_url('admin/ubahbobot/'.$kode_jurusan) ?>">
					<div class="form-group">
						<select class="form-control" name="ID1">
							<?php foreach ($kriteria as $row): ?>
								<option value="<?= $row->kode_kriteria ?>"><?= ucwords($row->nama_kriteria) ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="nilai">
						<?php foreach (listperbandingan() as $angka => $notif): ?>
								<option value="<?= $angka ?>"><?= $angka .' - '. $notif ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="ID2">
							<?php foreach ($kriteria as $row): ?>
								<option value="<?= $row->kode_kriteria ?>"><?= ucwords($row->nama_kriteria) ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
					</div>
				</form> <br>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead><tr>
							<th>Kode</th>
							<th>Nama</th>
							<?php foreach($data_kriteria as $row):?>
							<th><?=$row->kode_kriteria?></th>
							<?php endforeach?>
						</tr></thead>
						<tbody>
							<?php if (isset($bobotkriteria)): ?>
								
						<?php
						foreach($bobotkriteria as $row):?>
						<tr>
							<td><?=$row['kode_kriteria']?></td>
							<td><?=$row['nama_kriteria']?></td>
							<?php foreach ($row['nilai_bobot'] as $kode_pembanding => $bobot): ?>
								<td class="<?= bgbobot($row['kode_kriteria'],$kode_pembanding)  ?>"><?= $bobot ?></td>
							<?php endforeach ?>
						</tr>
						<?php endforeach;
						?>
							<?php endif ?>
						</tbody>
					</table>
				</div>              
            </div>
            <!-- /.box-body -->
          
		  </div>
          <!-- /.box -->
		</div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->