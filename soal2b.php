<html>
  <head>
    <style>
      .box{
        width: 300px;
        height: 300px;
      }
    </style>
  </head>
<body>
  <form action="soal2c.php" method="post">
    <form>
      <table border = '1'>
        <div>
          <label>Umur Anda </label> 
          <input name="nama" type="hidden" value="<?php echo $POST['nama'] ?>">
          <input name="umur" type="text">
        </div>
        <div>
          <input type="submit" value="SUBMIT">
        </div>
    </table>
    </form>
  </form>
    <!-- script ini dibuat untuk menampilkan input form ketika di submit -->
    <!-- Start menampilka input -->
    <?php
    if (isset($_POST['umur'])) {
       echo "Nama : " . $GLOBALS['nama'] . "<br> ";
        $GLOBALS['umur'] = $_GET['umur'] . "<br> ";
    }
    ?>
    <!-- End menampilkan Input -->
</body>
</html>
