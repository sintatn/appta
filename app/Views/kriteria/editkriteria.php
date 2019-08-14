<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-qrcode"></i> Kriteria
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
			  <i class="fa fa-edit"></i>
              <h3 class="box-title">Ubah Data Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			  <div class="col-sm-6">
             
				<form method="POST" action="<?= base_url('admin/updatekriteria/'.$kriteria->id_kriteria) ?>">
					<div class="form-group">
						<label>Kode <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="kode_kriteria" value="<?=$kriteria->kode_kriteria?>" readonly=""/>
					</div>
					<div class="form-group">
						<label>Nama Kriteria <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="nama_kriteria" value="<?=$kriteria->nama_kriteria?>"/>
					</div>
					<div class="form-group">
						<label>Atribut <span class="text-danger">*</span></label>
						<select class="form-control" name="atribut" id="atribut">
							<option value="benefit">Benefit</option>
							<option value="cost">Cost</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" title="Klik disini untuk menyimpan data kriteria" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
						<a title="Klik disini untuk kembali ke daftar kriteria" class="btn btn-danger" href="<?= base_url('admin/datakriteria') ?>"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
					</div>            
				</form>
				
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