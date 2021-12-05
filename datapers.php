
              <div class="table-responsive">
                  <table id="tabel-data1"  class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>NRP</th>
                      <th>Nama</th>
                      <th>Pangkat</th>
                      <th>Detail</th>
                      
                    </tr>
                  </thead>
                  <?php
                  $personel = mysqli_query ($conn,"SELECT * FROM personel");
                  $no=1;
                   while ($data=mysqli_fetch_array($personel)) {
                   $id = $data['id_personel'];
                   $Nama = $data['nama'];
                   $Pangkat = $data['pangkat'];
                   $NRP = $data['nrp'];
        
                   ?>
                  <tbody>
                    <tr>
                      <td><?=$no++; ?></td>
                      <td><?=$NRP;?></td>
                      <td><?=$Nama;?></td>
                      <td><?=$Pangkat;?></td>
                      <td style="width : 50px"><a href="index.php?p=detail&id=<?=$id?>" type="button" class="btn btn-primary btn btn-sm" name="detail">
                      Detail</a></td>
                    </tr>
                    <?php 
                  }
                  ?>
                  </tbody>
                </table>
              </div>