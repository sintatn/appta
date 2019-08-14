    <section class="content-header">
      <h1>
        <i class="fa fa-tags"></i> Kriteria
        <small>Data Kriteria</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Kriteria</li>
        <li class="active">Kriteria</li>
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
				
				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode</th>
								<th>Nama Kriteria</th>
								<th>Atribut</th>
								<!-- <th>Aksi</th> -->
							</tr>
						</thead>
						<?php
						if (!empty($kriteria)) {
			
						$no = 0;
						foreach($kriteria as $row):?>
						<tr>
							<td><?=++$no ?></td>
							<td><?=$row->kode_kriteria?></td>
							<td><?=ucwords($row->nama_kriteria)?></td>
							<td><?=$row->atribut?></td>        
							<td>
							<!-- 	<a class="btn btn-xs btn-warning" href="<?= base_url('admin/editkriteria/'.$row->kode_kriteria) ?>"><span class="glyphicon glyphicon-edit"></span></a>								
								<a class="btn btn-xs btn-danger" data-id="<?=$row->kode_kriteria?>" data-toggle="modal" data-target="#myModal_<?=$row->kode_kriteria ?>"><span class="glyphicon glyphicon-trash"></span></a> -->
								</td>
							</tr>
							
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
    <!-- /.content