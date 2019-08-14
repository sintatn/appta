      <div class="row">
        <div class="col-md-12">
          <section class="mt-2">
            <div class="card">
              <div class="card-header bg-success text-white">
                <strong>Data Input Nilai Siswa</strong>
              </div>
              <div class="card-body">
                <form method="post" action="<?= base_url('home/simpannilai') ?>">
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-group">
                            <label for="">Nama Lengkap</label>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <input type="text" name="nama_siswa" pattern="[A-Za-z]+" placeholder="masukkan nama lengkap" class="form-control form-control-sm" required>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-group">
                            <label for="">Alamat</label>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <textarea name="alamat_siswa" id="" cols="30" rows="2" class="form-control form-control-sm"></textarea>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-group">
                            <label for="">NISN</label>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                            <input type="text" name="nisn" pattern="[0-9]+" placeholder="masukkan nisn" class="form-control" required>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-md-12">
                      <p>Data Nilai</p>
                      <table width="100%">
                        <?php foreach ($datakriteria as $row): ?>
                          <tr class="bg-primary text-white">
                            <th colspan="2" class="p-2"><?= ucwords($row['nama_kriteria']) ?></th>
                          </tr>
                          <?php if (!empty($row['link'])): ?>
                            <tr>
                              <td colspan="" class="small">Klik link untuk mengetahui nilai <?= ucwords($row['nama_kriteria']) ?> <a href="<?= $row['link'] ?>"><?= $row['link'] ?></a></td>
                            </tr>
                          <?php endif ?>
                          <?php
                          $no = 1;
                           foreach ($row['sub_kriteria'] as $r): ?>
                          <input type="hidden" name="id_datakriteria[]" value="<?= $r['id_datakriteria'] ?>">
                          <tr>
                            <td>
                              <div class="form-group pl-3 small mt-1">
                                <label for=""><?= $no++ . '. ' .$r['sub_kriteria'] ?></label>
                              </div>
                            </td>
                            <td>
                              <div class="form-group mt-2">
                                <input type="number" name="nilai[]" step="any" min="10" max="100" class="form-control form-control-sm">
                              </div>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        <?php endforeach ?>
                      </table>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">Kirim Nilai</button>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>