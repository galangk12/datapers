            <?php
              $id_personel = $_GET['id'];
              $dt = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM personel WHERE id_personel = '$id_personel'"));
            ?>
            <div class="card-body" style="background:white;">
                <form class="" action="fungsi.php?p=edit_personel" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
                 <div class="container-fluid" style="background:white;">
                  <div class="row" style="background:white;">
                  <input type="hidden" name="id_personel" class="form-control" value="<?= $dt['id_personel']; ?>" required>
                    <table class="table" border="0">
                    <tr>
                      <td>Nama Lengkap</td>
                      <td>:</td>
                      <td>
                        <div class="input-group mb-3">
                          <input type="text" name="nama" class="form-control" value="<?= $dt['nama']; ?>" required>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>NRP</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="text" name="nrp" class="form-control" value="<?= $dt['nrp']; ?>" required>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Pangkat</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <select name="pangkat" class="form-control" required>
                            <option selected value="<?= $dt['pangkat']; ?>"><?= $dt['pangkat']; ?></option>
                            <option value="BRIPDA">BRIPDA</option>
                            <option value="BRIPTU">BRIPTU</option>
                            <option value="BRIGPOL">BRIGPOL</option>
                            <option value="BRIPKA">BRIPKA</option>
                            <option value="IPDA">IPDA</option>
                            <option value="IPTU">IPTU</option>
                            <option value="AKP">AKP</option>
                            <option value="KOMPOL">KOMPOL</option>
                            <option value="AKBP">AKBP</option>
                            <option value="KOMBESPOL">KOMBESPOL</option>     
                          </select>

                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Jabatan</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="text" name="jabatan" class="form-control" value="<?= $dt['jabatan']; ?>" required>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Tempat Lahir</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="text" name="tm_lahir" class="form-control" value="<?= $dt['tm_lahir']; ?>" required>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Tanggal Lahir</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="date" name="tl_lahir" class="form-control" value="<?= $dt['tl_lahir']; ?>" required>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                      <select name="jk" class="form-control" required>
                            <option selected value="<?= $dt['jk']; ?>" ><?= $dt['jk']; ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Agama</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                      <select name="agama" class="form-control" required>
                            <option selected value="<?= $dt['agama']; ?>"><?= $dt['agama']; ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Lainnya">Lainnya</option>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>No Telp/HP </td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                        <input type="text" name="notelp" class="form-control" value="<?= $dt['notelp']; ?>" required>
                      </div>
                    </td>
                   </tr>
                   <tr>
                      <td>Photo</td>
                      <td>:</td>
                      <td>
                      <div class="input-group mb-3">
                      <input placeholder="Photo" type="file" class="form-control" name="fotonya" >
                      </div>
                    </td>
                   </tr>
                    </table>
                  <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                </div>
            </div>
              </form>
 