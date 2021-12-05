<?php
include 'config.php';
$p=isset($_GET['p']) ? ($_GET['p']) : "";
if($p=='add_personel'){
	$nama = $_POST['nama'];
	$nrp = $_POST['nrp'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$tm_lahir = $_POST['tm_lahir'];
	$tl_lahir = $_POST['tl_lahir'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$notelp = $_POST['notelp'];
	$photo = $_FILES['fotonya']['name'];
	$phototmp = $_FILES['fotonya']['tmp_name'];
	$tempat = "photo/";
	$temp = explode(".", $photo);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
	$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak

	$query ="INSERT INTO personel(nama, nrp, pangkat, jabatan, tm_lahir, tl_lahir, jk, agama, notelp, photo) 
	values ('$nama','$nrp','$pangkat','$jabatan','$tm_lahir','$tl_lahir','$jk','$agama',' $notelp','$nama_baru')";

if (mysqli_query($conn,$query)) {
	move_uploaded_file($phototmp,$tempat.$nama_baru);
	echo "<script> alert('Data Berhasil Di Unggah')
				window.location.href='index.php?p=datapers'
			</script>
		";

		}
		else
		{
		  echo "<script> alert('Data Gagal Di Unggah')
			window.location.href='index.php?p=datapers'
			</script>
		";
		}

}elseif($p=='edit_personel'){
	$id = $_POST['id_personel'];
	$nama = $_POST['nama'];
	$nrp = $_POST['nrp'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$tm_lahir = $_POST['tm_lahir'];
	$tl_lahir = $_POST['tl_lahir'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$notelp = $_POST['notelp'];
	$photo = $_FILES['fotonya']['name'];
	$phototmp = $_FILES['fotonya']['tmp_name'];
	$tempat = "photo/";
	$temp = explode(".", $photo);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
	$nama_baru = round(microtime(true)) . '.' . end($temp);//fungsi untuk membuat nama acak


if (empty($phototmp)) {
	$query1 = (mysqli_query($conn,"UPDATE personel SET nama='$nama',nrp='$nrp',pangkat='$pangkat',
	jabatan='$jabatan',tm_lahir='$tm_lahir',tl_lahir='$tl_lahir',jk='$jk',agama='$agama',notelp='$notelp' WHERE id_personel='$id'"));
	

}else {
	$dt = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM personel WHERE id_personel = '$id'"));
	$tempatlawas="photo/$dt[photo]";
	unlink($tempatlawas);
	move_uploaded_file($phototmp,$tempat.$nama_baru);
	$query1 = (mysqli_query($conn,"UPDATE personel SET nama='$nama',nrp='$nrp',pangkat='$pangkat',
	jabatan='$jabatan',tm_lahir='$tm_lahir',tl_lahir='$tl_lahir',jk='$jk',agama='$agama',notelp='$notelp',photo='$nama_baru' WHERE id_personel='$id'"));

}
if($query1 or $query2) {
	echo "<script> alert('Data Berhasil Di Ubah')
				window.location.href='index.php?p=datapers'
			</script>
		";

		}
		else
		{
		  echo "<script> alert('Data Gagal Di Ubah')
			window.location.href='index.php?p=datapers'
			</script>
		";
		}

}

elseif($p=='hapus_personel') {
$id = $_GET['id'];
$query1 = (mysqli_query($conn,"SELECT * FROM personel WHERE id_personel=$id"));
$qft = mysqli_fetch_array($query1);
$tempat="photo/$qft[photo]"; //Melakukan Query Hapus Data
$query2 = "DELETE FROM personel WHERE id_personel=$id";
if (mysqli_query($conn,$query2)) {
  unlink($tempat);
  echo "<script> alert('Data Berhasil Di Dihapus')
          window.location.href='index.php?p=personel'
          </script>
      ";

      }
      else
      {
        echo "<script> alert('Data Gagal Di Hapus')
          window.location.href='index.php?p=personel'
          </script>
      ";
      }
}elseif($p=='edit_users') {
	$id = $_POST['id'];
	$pass = $_POST['password'];
	$query = "UPDATE users SET password='$pass' where id_users='$id' "; //Melakukan Query Hapus Data
	if (mysqli_query($conn,$query)) {
	  echo "<script> alert('Data Berhasil Di Ubah')
			  window.location.href='index.php?p=pengaturan'
			  </script>
		  ";
	
		  }
		  else
		  {
			echo "<script> alert('Data Gagal Di Ubah')
			  window.location.href='index.php?p=pengaturan'
			  </script>
		  ";
		  }
		}

?>