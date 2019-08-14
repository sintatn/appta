<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tags"></i> Kriteria
        <small>Data Sub Kriteria</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Sub Kriteria</li>
        <li class="active">Sub Kriteria</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
	  
		<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
			  <i class="fa fa-bars"></i>
              <h3 class="box-title">List Data Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <form action="<?= base_url('admin/datasubkriteria') ?>" method="post" class="form-inline">
					<div class="form-group">
						<select class="form-control" name="id_kriteria" onchange="this.form.submit()">
						<option value="">Pilih kriteria</option>
						<?php foreach ($kriteria as $row): ?>
							<option value="<?= $row->kode_kriteria ?>" <?php if ($row->kode_kriteria == getnamakriteria()): ?>
								selected
							<?php endif ?>><?= $row->nama_kriteria ?></option>
						<?php endforeach ?>
						</select>
					</div>
			<!-- 		<div class="form-group">
						<a class="btn btn-primary" href="?m=sub_tambah&kode_kriteria=<?=$_GET['kode_kriteria']?>"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
					</div> -->
				</form> <br>

				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode</th>
								<th>Nama Sub Kriteria</th>
							</tr>
						</thead>
						<?php
						if (!empty($subkriteria) AND isset($subkriteria)) {
			
						$no = 0;
						foreach($subkriteria as $row):?>
						<tr>
							<td><?=++$no ?></td>
							<td><?=$row['kode_kriteria']?></td>
							<td><?=ucwords($row['nama_sub'])?></td>
							</tr>
						<!-- /.END MODAL -->
						<?php endforeach;?>
						<?php } ?>
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