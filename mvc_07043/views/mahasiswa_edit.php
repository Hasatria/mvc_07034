<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Update Data Mahasiswa</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

  html {
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    background: #ffffff;
    color: #4b5563; /* neutral gray */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  *, *:before, *:after {
    box-sizing: inherit;
  }
  body {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: start;
    min-height: 100vh;
    padding: 4rem 1rem;
  }

  .container {
    max-width: 420px;
    width: 100%;
    background-color: #f9fafb;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    padding: 2.5rem 3rem;
  }

  h1 {
    margin: 0 0 2rem;
    font-weight: 700;
    font-size: 2.5rem;
    color: #111827;
    text-align: center;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  label {
    font-size: 0.9rem;
    font-weight: 600;
    color: #6b7280;
    user-select: none;
    margin-bottom: 0.3rem;
  }

  input[type="text"],
  input[type="tel"],
  input[name="nim"],
  input[name="nama"],
  input[name="alamat"],
  input[name="no_hp"] {
    font-size: 1rem;
    padding: 0.75rem 1rem;
    border-radius: 0.75rem;
    border: 1.5px solid #d1d5db;
    background-color: #fff;
    color: #111827;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    outline-offset: 2px;
  }

  input[type="text"]:focus,
  input[type="tel"]:focus,
  input[name="nim"]:focus,
  input[name="nama"]:focus,
  input[name="alamat"]:focus,
  input[name="no_hp"]:focus {
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
    outline: none;
  }

  button[type="submit"] {
    background-color: #2563eb;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    padding: 0.9rem;
    border: none;
    border-radius: 0.75rem;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
    user-select: none;
  }

  button[type="submit"]:hover,
  button[type="submit"]:focus {
    background-color: #1d4ed8;
    box-shadow: 0 0 10px rgba(29, 78, 216, 0.5);
    transform: scale(1.03);
    outline: none;
  }

  button[type="submit"]:focus-visible {
    outline: 3px solid #bfdbfe;
    outline-offset: 2px;
  }
</style>
</head>
<body>
  <main class="container" role="main">
    <h1>Update Data Mahasiswa</h1>
    <form method="POST" action="index.php?page=update&id=<?= $mhs['id']; ?>">
      <label for="nim">NIM</label>
      <input id="nim" name="nim" type="text" value="<?= htmlspecialchars($mhs['nim']); ?>" required autocomplete="off" />

      <label for="nama">Nama</label>
      <input id="nama" name="nama" type="text" value="<?= htmlspecialchars($mhs['nama']); ?>" required autocomplete="off" />

      <label for="alamat">Alamat</label>
      <input id="alamat" name="alamat" type="text" value="<?= htmlspecialchars($mhs['alamat']); ?>" required autocomplete="off" />

      <label for="no_hp">No HP</label>
      <input id="no_hp" name="no_hp" type="tel" value="<?= htmlspecialchars($mhs['no_hp']); ?>" required autocomplete="off" pattern="[0-9+()-\s]+" title="Masukkan nomor telepon yang valid" />

      <button type="submit">Update</button>
    </form>
  </main>
</body>
</html>
