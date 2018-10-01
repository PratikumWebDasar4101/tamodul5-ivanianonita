<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$hitung=count(explode(" ",$komentar));
$jeniskelamin=$_POST['jeniskelamin'];
$prodi=$_POST['prodi'];


$fakultas=$_POST['fakultas'];


echo "Nim	: $nim <br>";
echo "Nama : $nama<br>";
echo "Email : $email<br>";
echo "Jenis Kelamin : $jeniskelamin<br>";
echo "Prodi : $prodi<br>";
echo "Fakultas : $fakultas<br>";
$hobii=$_POST['hobi'];
echo "Hobi : ";
$hobii =array($_POST['hobi']);
foreach ($_POST['hobi'] as $hobii){
	echo $hobii.",<br>";
}

echo "Jumlah Kata : $hitung<br>";


if($hitung <5){
	echo"<br>Maaf Jumlah kata Kurang dari 5 kata ";
}
else
{
	die("<br><br>$komentar");
}
$file= $_FILES['dokumen'];
$nama_file= $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir ="upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo"File berhasil diupload."
?>
<img src="upload/<?php echo $nama_file; ?>">
