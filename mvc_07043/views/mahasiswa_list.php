<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Mahasiswa</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

  /* General Styles */
  body {
    font-family: 'Inter', sans-serif;
    background-color: #f9fafb;
    color: #374151;
    line-height: 1.6;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* Container */
  .container {
    width: 100%;
    max-width: 1000px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    padding: 20px;
    margin-bottom: 20px;
  }

  /* Add Data Link */
  .add-data-link {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 20px;
    background-color: #2563eb;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: background-color 0.3s ease;
  }

  .add-data-link:hover {
    background-color: #1d4ed8;
  }

  /* Table Styles */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.03);
    border-radius: 8px;
    overflow: hidden;
  }

  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
  }

  th {
    background-color: #f3f4f6;
    color: #4b5563;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 0.9rem;
  }

  tbody tr:hover {
    background-color: #f9fafb;
  }

  /* Action Links */
  .action-links a {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 5px;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .action-links a:first-child {
    background-color: #2563eb; /* Blue for Edit */
  }

  .action-links a:first-child:hover {
    background-color: #1d4ed8;
  }

  .action-links a:last-child {
    background-color: #dc2626; /* Red for Delete */
  }

  .action-links a:last-child:hover {
    background-color: #b91c1c;
  }

  /* Confirm Message */
  .confirm-message {
    color: #dc2626;
    margin-top: 10px;
  }
</style>
</head>
<body>

<div class="container">
  <a href="index.php?page=create" class="add-data-link">Tambah Data</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data as $mhs): ?>
      <tr>
        <td><?= $mhs['id']; ?></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['alamat']; ?></td>
        <td><?= $mhs['no_hp']; ?></td>
        <td class="action-links">
          <a href="index.php?page=edit&id=<?= $mhs['id']; ?>">Edit</a>
          <a href="index.php?page=delete&id=<?= $mhs['id']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
