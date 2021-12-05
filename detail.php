<?php
$id = $_GET['id'];
$get = mysqli_query($conn, "SELECT * FROM personel WHERE id_personel='$id'");
$data = mysqli_fetch_array($get);
                   
$Nama = $data['nama'];
$Pangkat = $data['pangkat'];
$NRP = $data['nrp'];
$Jabatan = $data['jabatan'];
$TempatLahir = $data['tm_lahir'];
$TanggalLahir = $data['tl_lahir'];
$JenisKelamin = $data['jk'];
$Agama = $data['agama'];
$NoTelp = $data['notelp'];
$Photo = $data['photo'];
?>
    <div class="d-flex justify-content-start">
        <div class="image-container">
            <img src="photo/<?=$Photo;?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
        </div>
        <div class="userData ml-3">
            <h3 class="d-block" style="font-size: 1.5rem; font-weight: bold">
              <?php

                echo ' '.$Nama.' ';
               ?>

            </h3>
            <h6 class="d-block">NRP   : <?php echo $NRP ?></h6>
            <br>
             <a class="btn btn-success editbtn btn-sm" href="index.php?p=edit&id=<?=$id?>">
             <i class="fa fa-edit"></i> Edit</a>
            <a class="btn btn-danger btn-sm" href="fungsi.php?p=hapus_personel&id=<?=$id?>">
            <i class="fa fa-trash"></i> Hapus</a>
        </div>
    </div>
    
<div class="table-responsive">
<br>
<table  class="table table-bordered table-striped">
            <tr>
                <td>Nama Lengkap</td>
                <td><?=$Nama;?></td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td><?=$Pangkat;?></td>
            </tr>
            <tr>
                <td>NRP</td>
                <td><?=$NRP;?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><?=$Jabatan;?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?=$TempatLahir;?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?=$TanggalLahir;?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?=$JenisKelamin;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?=$Agama;?></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><?=$NoTelp;?></td>
            </tr>
        </table>
        <a href="index.php?p=personel" type="button" class="btn btn-primary btn btn-sm">Kembali</a>
      </div><!-- /.container-fluid -->