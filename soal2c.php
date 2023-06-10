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
  <form method="post" action="soal2d.php">
    <form>
      <table border = '1'>
        <div>
          <label>Hobi Anda </label> 
          <input name="nama" type="hidden" value="<?php echo $POST['nama'] ?>">
          <input name="umur" type="hidden" value="<?php echo $POST['umur'] ?>">
          <input name="hobi" type="text">
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
    if (isset($_GET['hobi'])) {
        echo "Nama : " . $GLOBALS['nama'] . "<br> ";
        echo "Umur : " . $_GET['umur'] . "<br> ";
        echo "Hobi : " . $_GET['hobi'];
    }
    ?>
    <!-- End menampilkan Input -->
</body>
</html>
