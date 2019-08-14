    <section class="content-header">
      <h1>
        <i class="fa fa-calculator"></i> Perhitungan
        <small>Perhitungan Nilai Preferensi Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Perhitungan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">	  
		<div class="col-md-12">
          <div class="box box-solid">
			<div class="box-header with-border">
			  <i class="fa fa-calendar"></i>
              <h3 class="box-title"> Perhitungan Jurusan</h3>
            </div>            
            <!-- /.box-header -->
            <div class="box-body">
			 <form action="<?= base_url('admin/perhitungan') ?>" method="post" class="form-inline">
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
            </div>
            <!-- /.box-body -->
          
		  </div>
          <!-- /.box -->
		</div>
      </div>
      <!-- /.row (main row) -->
	  
	 	<?php if (isset($kriteria)): ?>

    <div class="row">	  
		<div class="col-md-12">
          <div class="box box-solid">
			<div class="box-header with-border">
			  <i class="fa fa-file-text"></i>
              <h3 class="box-title">Hasil Perhitungan</h3>
				<div class="pull-right ">
				  <!-- <a class="btn btn-default" href="cetak.php?m=hitung&kode_periode=<?=$_GET['kode_periode']?>" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a> -->
				</div>
            </div>            
            <!-- /.box-header -->
            <div class="box-body">
			
			
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#ahp" data-toggle="tab" aria-expanded="true">Perhitungan AHP</a></li>
					  <li class=""><a href="#topsis" data-toggle="tab" aria-expanded="true">Perhitungan WP</a></li>
					</ul>
					
					<div class="tab-content">
						
<!-- ======================================================= TAB AHP ======================================================= -->
						<div class="tab-pane active" id="ahp">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Perhitungan Bobot Prioritas dan Konsistensi Kriteria Metode AHP</h3>
								</div>
								<div class="panel-body">
									<div style="padding:10px;">
									<!-- ================== TAB di dalam TAB PERHITUNGAN AHP ================== -->
									<div class="nav-tabs-custom">
										<ul class="nav nav-tabs">
										  <li class="active"><a href="#perbandingan" data-toggle="tab" aria-expanded="true">Perbandingan Kriteria</a></li>
										  <li class=""><a href="#bobot" data-toggle="tab" aria-expanded="true">Bobot Prioritas Kriteria</a></li>
										  <li class=""><a href="#konsistensi" data-toggle="tab" aria-expanded="false">Konsistensi Kriteria</a></li>
										</ul>
										<div class="tab-content">
											<!-- ================== TAB PERBANDINGAN KRITERIA ================== -->
											<div class="tab-pane active" id="perbandingan">		
												<div class="table-responsive" style="padding:20px;">
														<table class="table table-bordered table-hover table-striped">
															<thead><tr>
																<th>Kode</th>
																<th>Nama</th>
																<?php foreach($data_kriteria as $row):?>
																<th><?=$row->kode_kriteria?></th>
																<?php endforeach?>
															</tr></thead>
															<tbody>
																<?php if (isset($kriteria)): ?>
															<?php
															foreach($kriteria as $row):?>
															<tr>
																<td><?=$row['kode_kriteria']?></td>
																<td><?=$row['nama_kriteria']?></td>
																	<?php foreach ($row['nilai_bobot'] as $kode_pembanding => $bobot): ?>
																		<td><?= $bobot ?></td>
																	<?php endforeach ?>
															</tr>
															<?php endforeach;
															?>
																<?php endif ?>
															</tbody>
															<tfoot>
																<tr>
																	<th colspan="2">Total</th>
																	<?php foreach ($data_kriteria as $row): ?>
																		<th><?= jumlahbobot($kriteria,$row->kode_kriteria) ?></th>
																	<?php endforeach ?>
																</tr>
															</tfoot>
														</table>
												</div>
											</div>
										  <!-- /.tab-pane -->
										  <!-- / END TAB PERBANDINGAN KRITERIA -->
										  
										  <!-- ================== TAB BOBOT KRITERIA ================== -->
											<div class="tab-pane" id="bobot">
												<div class="table-responsive" style="padding:20px;">
													<table class="table table-bordered table-hover table-striped">
															<thead><tr>
																<th>Kode</th>
																<?php foreach($data_kriteria as $row):?>
																<th><?=$row->kode_kriteria?></th>
																<?php endforeach?>
																<th>Prioritas</th>
															</tr>
														</thead>
															<tbody>
																<?php if (isset($kriteria)): ?>
															<?php
															foreach($kriteria as $row):?>
															<tr>
																<td><?=$row['kode_kriteria']?></td>
																	<?php
																	foreach ($row['nilai_bobot'] as $kode_pembanding => $bobot): ?>
																		<td><?= round(bobotprioritas($bobot,$kriteria,$kode_pembanding),3) ?></td>
																	<?php endforeach ?>
															<td><?= round(prioritas($kriteria, $row['kode_kriteria']),3) ?></td>
															</tr>
															<?php endforeach;
															?>
																<?php endif ?>
															</tbody>
														
														</table>
												</div> 
											</div>
											
										  <!-- /.tab-pane -->
										  <!-- / END TAB BOBOT KRITERIA  -->
										  
										  <!-- ================== TAB BOBOT KONSISTENSI ================== -->
											<div class="tab-pane" id="konsistensi">
												<div class="table-responsive" style="padding:20px;">
														<table class="table table-bordered table-hover table-striped">
															<thead>
																<tr>
																<th>Kode</th>
																<?php foreach($data_kriteria as $row):?>
																<th><?=$row->kode_kriteria?></th>
																<?php endforeach?>
																<th>Prioritas</th>
																<th>Consistency Measure</th>
															</tr>
														</thead>
															<tbody>
																<?php if (isset($kriteria)): ?>
															<?php
															foreach($kriteria as $row):?>
															<tr>
																<td><?=$row['kode_kriteria']?></td>
																	<?php
																	foreach ($row['nilai_bobot'] as $kode_pembanding => $bobot): ?>
																		<td><?= round(bobotprioritas($bobot,$kriteria,$kode_pembanding),3) ?></td>
																	<?php endforeach ?>
																<td><?= round(prioritas($kriteria,$row['kode_kriteria']),3); ?></td>
																<td><?= round(consistency_measure($kriteria,$row['kode_kriteria']),3) ?></td>
															</tr>
															<?php endforeach;
															?>
																<?php endif ?>
															</tbody>
														
														</table>
												</div> 
													
													<p>Berikut tabel ratio index berdasarkan ordo matriks : </p>            
													<div class="table-responsive" style="padding:20px;">
														<table class="table table-bordered table-hover table-striped">
															<thead>
																<tr>
																	
																<th>Ordo Matriks</th>
																<?php 
																	for ($i=1; $i < 16; $i++) { 
																		?>
																		<td><?= $i ?></td>
																		<?php
																	}
																 ?>
																</tr>
																<tr>
																	
																<th>Ratio Index</th>
																<?php 
																$n3 = [0,0,0.58,0.9,1.12,1.24,1.32,1.41,1,46,1.49,1.51,1,48,1.56,1.57,1.59];
																	for ($i=0; $i < 15; $i++) { 
																		$warna = '';
																		if ($i == 4) {
																			$warna = 'text-primary';
																		}
																		
																		?>
																		<td class="<?= $warna ?>"><?= $n3[$i]?></td>
																		<?php
																	}
																 ?>
																</tr>
															</thead>
														</table>
													</div>
												<div class="panel-footer">
												<p>Consistency Index: <?= round(consistency_index($kriteria),3) ?></p>
												<p>Ratio Index: 1.12</p>
												<p>Consistency Ratio: <?= round(consistency_ratio($kriteria),3) ?> 
													<?php
														if(round(consistency_ratio($kriteria),3)>0.10){
														echo " <span style='font-weight:bold;' class='text-danger'>(Tidak konsisten)<br />";	
													} else {
														echo " <span style='font-weight:bold;' class='text-primary'>(Konsisten)</span><br />";
													}
													?>
														
													</p>
												</div>
											</div>
										  <!-- /.tab-pane -->
										  <!-- / END TAB BOBOT KONSISTENSI  -->
										</div>
										<!-- /.tab-content -->
									</div>
									<!-- AKHIR TAB di dalam TAB PERHITUNGAN AHP-->
									</div>
								</div>
							</div>
						</div>
					  <!-- /.tab-pane -->
					  <!-- /.END TAB AHP -->
					  
					  
<!-- ======================================================= TAB TOPSIS ======================================================= -->
						<div class="tab-pane" id="topsis">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">Perhitungan Nilai Preferensi Metode WP</h3>
								</div>
								<div class="panel-body">
									<div style="padding:10px;">
									<!-- ================== TAB di dalam TAB PERHITUNGAN TOPSIS ================== -->
									<div class="nav-tabs-custom">
									
										<ul class="nav nav-tabs">
										  <li class="active"><a href="#analisa" data-toggle="tab" aria-expanded="true">Data Nilai</a></li>
										  <li class=""><a href="#nilai" data-toggle="tab" aria-expanded="true">Vektor S</a></li>
										  <li class=""><a href="#normalisasi" data-toggle="tab" aria-expanded="false">Vektor V</a></li>
										</ul>
										
										<!-- TAB CONTENT  -->
										<div class="tab-content">
											
											<!-- ================== TAB HASIL ANALISA ================== -->
											<div class="tab-pane active" id="analisa">	
												<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr class="text-center">
															<th rowspan="2">No</th>
															<th rowspan="2">Nama Siswa</th>
															<?php foreach ($label as $row): ?>
															<th colspan="<?= count($row['sub_kriteria']) ?>"><?= ucwords($row['nama_kriteria']) ?></th>
															<?php endforeach ?>
														</tr>
														<tr>
															<?php foreach ($label as $row): ?>
																<?php foreach ($row['sub_kriteria'] as $r => $nama_sub): ?>
																<td><?= $nama_sub ?></td>
																<?php endforeach ?>
															<?php endforeach ?>
														</tr>
													</thead>	
													<tbody>
														<?php
														$no = 1;
														 foreach ($siswa as $row): ?>
															<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['nama_siswa'] ?></td>
															<?php foreach ($row['nilai'] as $kode_kriteria => $nilai): ?>
																<?php foreach ($nilai as $key => $value): ?>
																	<td><?= $value ?></td>
																<?php endforeach ?>
															<?php endforeach ?>
														<?php endforeach ?>
															</tr>
													</tbody>
												</table>
												</div>
											</div>
										  <!-- / END TAB HASIL ANALISA -->
										  
										  <!-- ================== TAB NILAI ALTERNATIVE ================== -->
											<div class="tab-pane" id="nilai">
												<div class="table-responsive" style="padding:20px;">
													<?php foreach ($listbobot as $row): ?>
														<?php 
														$nilai_bobot = $row['nilai_bobot'];
														 ?>
														<h3><?= ucwords($row['nama_jurusan']) ?></h3>
														<?php 
														foreach ($row['nilai_bobot'] as $r) {
															$kode_kriteria = $r['kode_kriteria'];
															$nprioritas[$kode_kriteria] = prioritas($row['nilai_bobot'],$kode_kriteria);
														}
														 ?>
													<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr class="text-center">
															<th>No</th>
															<th>Nama Siswa</th>
															<th>Vektor S</th>
														</tr>
													</thead>	
													<tbody>
														<?php
														$no = 1;
														$totalvektors = 0;
														 foreach ($siswa as $row): ?>

															<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['nama_siswa'] ?></td>
															
															<?php 
															$jumbobot = 1;
															foreach ($row['nilai'] as $kode_kriteria => $nilai): ?>
																	<?php 
																	$rnilai = array_sum($nilai)/count($nilai);

																	$rbobot = pow($rnilai, $nprioritas[$kode_kriteria]);
																	$jumbobot = $jumbobot * $rbobot;
																	 ?>
															<?php endforeach ?>
															<?php
															$totalvektors = $totalvektors + $jumbobot;
															 ?>

															<td><?= vektor_s($nilai_bobot, $row['nilai']) ?></td>
															</tr>
														<?php endforeach ?>
														<?php 
														$datavektors[]	= $totalvektors;

														 ?>
													</tbody>
												</table>
												</div>
													<?php endforeach ?>

											</div>
										</div>
										  <!-- / END TAB NILAI ALTERNATIVE -->
										  
										  <!-- ================== TAB NORMALISASI ================== -->
											<div class="tab-pane" id="normalisasi">
																						<div class="table-responsive" style="padding:20px;">
													<?php 
													$k = 0;
													foreach ($listbobot as $row): ?>
														<h3><?= ucwords($row['nama_jurusan']) ?></h3>
														<?php 
														foreach ($row['nilai_bobot'] as $r) {
															$kode_kriteria = $r['kode_kriteria'];
															$nprioritas[$kode_kriteria] = prioritas($row['nilai_bobot'],$kode_kriteria);
														}
?>
													<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr class="text-center">
															<th>No</th>
															<th>Nama Siswa</th>
															<th>Vektor V</th>
														</tr>
													</thead>	
													<tbody>
														<?php
														$no = 1;
														 foreach ($siswa as $row): ?>

															<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['nama_siswa'] ?></td>
															
															<?php 
															$jumbobot = 1;
															$nilaisiswa = $row['nilai'];
															foreach ($row['nilai'] as $kode_kriteria => $nilai): ?>
																	<?php 
																	$rnilai = array_sum($nilai)/count($nilai);

																	$rbobot = pow($rnilai, $nprioritas[$kode_kriteria]);
																	$jumbobot = $jumbobot * $rbobot;
																	 ?>
															<?php endforeach ?>

															<td><?= round(vektor_v($jumbobot,$listbobot,$siswa,$row['nama_siswa']),3)?></td>
															</tr>
														<?php endforeach ?>
													</tbody>
												</table>
												</div>
												<?php $k++ ?>
													<?php endforeach ?>
											</div>
											</div>
										  <!-- / END TAB NORMALISASI -->

										</div>
										<!-- /.tab-content -->
									</div>
								<!-- AKHIR TAB di dalam TAB PERHITUNGAN TOPSIS-->
									</div>
								</div>
							</div>
						</div>
					  <!-- /.tab-pane -->
					  <!-- /.END TAB TOPSIS -->
					  
<!-- ======================================================= TAB RANKING ======================================================= -->
					  <!-- / END TAB RANKING -->
					  
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom --> 
            
			</div>
            <!-- /.box-body -->
          
		  </div>
          <!-- /.box -->
		  </div>
    </div>
      <!-- /.row (main row) -->


							<?php endif ?>

    </section>
    <!-- /.content -->

