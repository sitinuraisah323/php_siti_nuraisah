<?php
$servername = "localhost";
$username = "root";
$password = "aisyah";
$dbname = "testdb";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
if (isset($_POST['nama']) && isset($_POST['nama']) ) {
  $data = "SELECT * FROM person join hobi on person.id = hobi.person_id where nama like ".$_POST['nama']." and alamat like ".$_POST['alamat']."  ORDER BY person.id DESC";
  $query = mysqli_query($connection, $data);
} else if(isset($_POST['nama'])){
  $data = "SELECT * FROM person join hobi on person.id = hobi.person_id where nama like ".$_POST['nama']." ORDER BY person.id DESC";
  $query = mysqli_query($connection, $data);
}else if(isset($_POST['alamat'])){
  $data = "SELECT * FROM person join hobi on person.id = hobi.person_id where  alamat like ".$_POST['alamat']."  ORDER BY person.id DESC";
  $query = mysqli_query($connection, $data);
}else{
  $query = mysqli_query($connection,"SELECT * FROM person join hobi on person.id = hobi.person_id ORDER BY person.id DESC");

}
?>
<form action="soal3a.php" method="post">
    <table border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["alamat"];?></td>
            <td><?php echo $data["hobi"];?></td>
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
    <br><br><br>
    
</form>

<?php
    if (isset($_POST['nama'])|| isset($_POST['nama']) ) {
      $data = "SELECT * FROM person join hobi on person.id = hobi.person_id where nama like".$_POST['nama']." ORDER BY person.id DESC";
      $query = mysqli_query($connection, $data);

        // header("location:soal3b.php", $query);
    }
    ?>

<form action="soal3a.php" method="get">
	<label>Nama :</label>
	<input type="text" name="cari"><br><br>
  <label>Alamat :</label>
	<input type="text" name="cari"><br><br>
	<input type="submit" value="SEARCH">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($connection,"select * from person join hobi on person.id = hobi.person_id where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($connection,"select * from person person join hobi on person.id = hobi.person_id");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
    <td><?php echo $d['hobi']; ?></td>
	</tr>
	<?php } ?>
</table>