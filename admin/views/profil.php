<?php
if (isset($_POST['simpan'])) {
  $Nama = $_POST['nama'];
  $Perusahaan = $_POST['perusahaan'];
  $Jabatan = $_POST['jabatan'];
  $Gambar = $_POST['Gambar'];

  if(empty($Gambar)) {
    $simpan = mysqli_query($koneksi, 
    "update user set Nama='$Nama', Perusahaan='$Perusahaan', jabatan='$jabatan'
     where id=1"
    );
  } else {
    $simpan = mysqli_query($koneksi, 
    "update user set Nama='$Nama', Perusahaan='$Perusahaan', Jabatan='$Jabatan',
    Gambar='$Gambar' where id=1"
    );
  }

 

  if($simpan) {
    $pesan = "<div class='alert alert-success'>Berhasil diperbaharui</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi kesalahan</div>";
  }
}

// ACTION UNTUK NGAMBIL DATA SAAT INI
$query = mysqli_query($koneksi, "SELECT * FROM `user`");
$data = mysqli_fetch_assoc($query);
?>

<div class="row mb-5">
  <div class="col-md-12">
    <h1>Update Profile</h1>
    <div class="row">
      <div class="col-md-6">
      <?=@$pesan?>
        <form action="" method="post">
          <div class="form-group">
            <label for="">NAMA LENGKAP</label>
            <input name="nama" type="text" value="<?=$data['Nama']?>" class="form-control" placeholder="Rizna Lusiana">
          </div>
          <div class="form-group">
            <label for="">JABATAN</label>
            <input name="jabatan" type="text" value="<?=$data['Jabatan']?>" class="form-control" placeholder="Pelajar">
          </div>
          <div class="form-group">
            <label for="">PERUSAHAAN</label>
            <input name="perusahaan" type="text" value="<?=$data['Perusahaan']?>" class="form-control" placeholder="SMKN 4 Tasikmalaya">
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <img src="<?=$data['Gambar']?>" width="100" style="border-radius:50%">
            <input name="Gambar" type="text" placeholder="paste URL Gambar" class="form-control">
          </div>
          <button type="submit" class="btn btn-danger" name="simpan">SIMPAN</button>
        </form>
      </div>
    </div>
  </div>
</div>