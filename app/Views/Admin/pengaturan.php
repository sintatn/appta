
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-male"></i>|<i class="fa fa-female"></i> Profile
        <small>Profile Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
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
              <h3 class="box-title">Ubah Profile</h3>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
				<form method="post" action="<?= base_url('admin/updateadmin/'.$admin->kode_admin) ?>">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Lengkap <span class="text-danger">*</span></label>
							<input class="form-control" type="text" name="nama_admin" value="<?= $admin->nama_admin ?>"/>
						</div>
						<div class="form-group">
							<label>Username <span class="text-danger">*</span></label>
							<input class="form-control" type="text" name="username"  value="<?= $admin->username?>"/>                
						</div>
						<div class="form-group">
							<button type="submit" title="Klik disini untuk menyimpan data user" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
						</div>
					</div>
				</form>
            </div>
            <!-- /.box-body -->
          
		  </div>
          <!-- /.box -->
		</div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->