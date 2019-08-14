      <div class="row">
        <div class="col-md-12">
          <section class="mt-2">
            <div class="card">
              <div class="card-header bg-success text-white">
                Data Hasil Rekomendasi
              </div>
              <div class="card-body">
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td>Nama Lengkap</td>
                        <td>: <?= ucwords($siswa->nama_siswa) ?></td>
                      </tr>
                      <tr>
                        <td>
                            <label for="">Alamat</label>
                        </td>
                        <td>: <?= ucwords($siswa->alamat_siswa) ?></td>
                      </tr>
                      <tr>
                        <td>
                            <label for="">NISN</label>
                        </td>
                        <td>: <?= $siswa->nisn ?></td>

                      </tr>
                      <tr>
                        <td>Rekomendasi Jurusan</td>
                        <td>:<ol> <?php
						foreach($jurusan as $nama_jurusan){
							?>
							
								<li> <?php echo ucwords($nama_jurusan) ?> </li>
							
							<?php
						}
						?>
					</ol></td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="btn btn-primary btn-sm" href="<?= base_url('home') ?>">beranda</a>
              </div>
            </div>
          </section>
        </div>
      </div>