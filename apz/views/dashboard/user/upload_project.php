<!DOCTYPE html>
<html>
<head>
  <title>Upload Proyek</title>
  <meta charset="utf-8">
</head>
<body>

<h1>Upload Proyek</h1>


<form action="<?= site_url('dashboard/upload-project') ?>" method="post" enctype="multipart/form-data">
  <?= $message; ?>

  <label>Nama Proyek</label>
  <input type="text" name="nama" required><br>

  <label>Tempat</label>
  <input type="text" name="tempat" required><br>

  <label>Deskripsi</label>
  <textarea name="desk"></textarea><br>

  <label>Foto</label>
  <input type="file" name="foto"><br>

  <input type="submit" name="upload">

</form>

</body>
</html>