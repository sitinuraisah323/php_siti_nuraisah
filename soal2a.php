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
  <form action="" method="post">
    <form>
      <table border = '1'>
        <div>
          <label>Nama Anda </label> 
          <input name="nama" type="text">
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
    if (isset($_POST['nama'])) {
        $_SESSION['nama'] = $_POST['nama'] . "<br> ";
        header("location:soal2b.php");
    }
    ?>
    <!-- End menampilkan Input -->
</body>
</html>
