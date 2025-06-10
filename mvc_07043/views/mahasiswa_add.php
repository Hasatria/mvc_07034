<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Elegant Form</title>
<style>
  /* Base reset and typography */
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
  html {
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    background: #ffffff;
    color: #374151; /* dark gray text */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  *, *:before, *:after {
    box-sizing: inherit;
  }
  body {
    margin: 0;
    line-height: 1.6;
    font-size: 16px;
    background-color: #ffffff;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: start;
    padding: 4rem 1rem;
  }

  .container {
    max-width: 420px;
    width: 100%;
    background: #f9fafb;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.05);
    padding: 2.5rem 3rem;
  }

  h1 {
    font-weight: 700;
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
    color: #111827; /* near black for headings */
    text-align: center;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  label {
    font-weight: 600;
    color: #4b5563; /* medium gray for labels */
    margin-bottom: 0.3rem;
    user-select: none;
    font-size: 0.9rem;
  }

  input[type="text"],
  input[type="tel"],
  input[name="nim"],
  input[name="nama"],
  input[name="alamat"],
  input[name="no_hp"] {
    background: #ffffff;
    border: 1.5px solid #d1d5db; /* light gray border */
    border-radius: 8px;
    padding: 0.75rem 1rem;
    font-size: 1rem;
    color: #111827;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    outline-offset: 2px;
    outline-color: transparent;
  }

  input[type="text"]:focus,
  input[type="tel"]:focus,
  input[name="nim"]:focus,
  input[name="nama"]:focus,
  input[name="alamat"]:focus,
  input[name="no_hp"]:focus {
    border-color: #2563eb; /* blue ring on focus */
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
    outline-color: transparent;
  }

  ::placeholder {
    color: #9ca3af; /* gray placeholder */
  }

  button[type="submit"] {
    background-color: #2563eb; /* blue */
    border: none;
    border-radius: 8px;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    padding: 0.85rem 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    user-select: none;
  }

  button[type="submit"]:hover,
  button[type="submit"]:focus {
    background-color: #1d4ed8; /* darker blue */
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
    <h1>Form Data Mahasiswa</h1>
    <form method="POST" action="index.php?page=store" novalidate>
      <label for="nim">NIM</label>
      <input id="nim" name="nim" type="text" placeholder="Masukkan NIM" required autocomplete="off" />
      
      <label for="nama">Nama</label>
      <input id="nama" name="nama" type="text" placeholder="Masukkan Nama" required autocomplete="off" />
      
      <label for="alamat">Alamat</label>
      <input id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat" required autocomplete="off" />
      
      <label for="no_hp">No HP</label>
      <input id="no_hp" name="no_hp" type="tel" placeholder="Masukkan No HP" required autocomplete="off" pattern="[0-9+()-\s]+" title="Masukkan nomor telepon yang valid" />
      
      <button type="submit">Simpan</button>
    </form>
  </main>
</body>
</html>

