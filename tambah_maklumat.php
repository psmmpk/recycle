<?php
include("db/config.php");
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$syk_id=$_POST["syk_id"];
	$nama=$_POST["nama"];
	$alamat_kutipan=$_POST["alamat_kutipan"];
	$no_tel=$_POST["no_tel"];
	$email=$_POST["email"];
	$j_barang=$_POST["j_barang"];
	

// Connection to DB Server
	$insert1 = "INSERT INTO login (username, password) VALUES ('$username','$password')";
	mysql_query($insert1);
	
	$sql="SELECT * FROM login a WHERE a.username='$username'";
	$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	$logid=$row['id_pengguna'];
    $insert = "INSERT INTO permohonan (pmh_sykid, pmh_logid, pmh_nama, pmh_alamat1, pmh_notel, pmh_email , pmh_jenisbrng, pmh_status) VALUES ('$syk_id', '$logid', '$nama', '$alamat_kutipan','$no_tel', '$email','$j_barang','A')";
    mysql_query($insert);
}
?>
<p><h3>Maklumat telah berjaya didaftar</h3></p>
<?php

	/*$sql_nama_negeri = "select negeri from negeri where neg_negri = '$negeri'";	
	$result = mysql_query($sql_nama_negeri);
    $row = mysql_fetch_array($result); 
	$nama_negeri = $row["negeri"];*/

	echo"Nama: $nama<br/>
		No. Telefon: $no_tel<br/>
		Alamat: $alamat_kutipan<br/>
		email: $email<br/>
		status: $syk_id<br/>		
		";
		
	
		
?>
	