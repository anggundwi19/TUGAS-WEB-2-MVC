<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>informasi user</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-3">
    <h1>Data User</h1>
    <a href="index.php?action=create" class="btn btn-success mb-3">Tambah Data User</a>
    <table class="table">
      <thead>
        <tr> 
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
          <th scope="row"><?php echo $user['id']; ?></th>
          <td><?php echo $user['nama']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td>
            <a href="index.php?action=detail&id=<?php echo $user['id']; ?>" class="btn btn-primary">Detail</a>
            <a href="index.php?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning">Edit</a>
            <a href="index.php?action=delete&id=<?php echo $user['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus user ini?');" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>