<form action="" method="post">
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
    <table border = '1'>
        <div>
          <label>Nama </label> 
          <input name="nama" type="text">
        </div><br>
        <div>
          <label>Alamat </label> 
          <input name="alamat" type="text">
        </div><br>
        <div>
          <input type="submit" value="SEARCH">
        </div>
    </table>
    
</form>

<?php
    if (isset($_POST['nama'])|| isset($_POST['nama']) ) {
      $data = "SELECT * FROM person join hobi on person.id = hobi.person_id where nama like".$_POST['nama']." ORDER BY person.id DESC";
      $query = mysqli_query($connection, $data);

        header("location:soal3a.php", $query);
    }
    ?>