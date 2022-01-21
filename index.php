<?php
require_once 'function.php';

$ambildata = query("SELECT * FROM data_mhs");

if(isset($_POST['submit'])){
  if(tambah($_POST) > 0) {
    echo "
      <script>
        alert ('Data berhasil ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert ('Data gagal ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
      <h1 align="center">PHP Dasar</h1>
    <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name='nama' placeholder="Masukkan Nama" required> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">HP</label>
    <input type="number" class="form-control" name='hp' placeholder="Nomor HP">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tgl Lahir</label>
    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">HP</th>
      <th scope="col">Tgl Lahir</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>    
    <tr>       
    <?php 
      $i = 1;
      foreach ($ambildata as $data){
    ?>
      <td><?php echo $i++; ?></td>
      <td><?= $data['nama']; ?></td>    
      <td><?= $data['hp'] ?></td>
      <td><?= $data['tgl_lahir']; ?></td>
      <td>
          <a href="hapus.php?id=<?php echo $data['id_tes']; ?>" type="button" onclick="return confirm('Yakin ingin menghapus data?');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>   
          <a href="edit.php?id=<?php echo $data['id_tes']; ?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Edit</a> 
      </td>       
    </tr>       
    <?php } ?>
  </tbody>
</table>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>