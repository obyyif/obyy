<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola User</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        height: 100vh;
      }

      .container {
        display: flex;
        width: 100%;
      }

      .sidebar {
        width: 20%;
        background-color: #f0f4ff;
        padding: 20px;
        text-align: center;
        background: #eaeaea;
      }

      .sidebar h2 {
        margin-bottom: 20px;
      }

      .sidebar .icon img {
        width: 80px;
        height: 80px;
        border-radius: 10%;
      }

      .sidebar button {
        display: block;
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        background-color: #97b3ae;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .sidebar button:hover {
        background-color: #97b3ae;
      }

      .main {
        width: 80%;
        padding: 20px;
      }

      .main h2 {
        margin-bottom: 20px;
      }

      .form-group {
        margin-bottom: 15px;
      }

      .form-group label {
        display: block;
        margin-bottom: 5px;
      }

      .form-group input,
      .form-group select {
        width: 93%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
      }

      .form-buttons {
        margin-top: 10px;
      }

      .form-buttons button {
        margin-right: 10px;
        padding: 8px 10px;
        background-color: #97b3ae;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .form-buttons button:hover {
        background-color: #557be5;
      }

      .search input {
        width: 93%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      table th,
      table td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
      }

      table th {
        background-color: #f0eeea;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <h2>Admin</h2>
        <div class="icon">
          <img src="Admin.jpg" alt="Admin Icon" />
        </div>
        <button>Kelola User</button>
        <button>Kelola Laporan</button>
        <button>Logout</button>
      </div>
      <div class="main">
        <h2>Kelola User</h2>
        <form>
          <div class="form-group">
            <label for="tipe-user">Tipe User</label>
            <select id="tipe-user">
              <option value="Gudang">Gudang</option>
              <option value="Kasir">Kasir</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" placeholder="Gudang1" />
          </div>
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" id="telepon" placeholder="0887533" />
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" placeholder="Jakarta" />
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Gudang1" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Gudang1" />
          </div>
          <div class="form-buttons">
            <button type="button">Tambah</button>
            <button type="button">Edit</button>
            <button type="button">Hapus</button>
          </div>
        </form>
        <div class="search">
          <input type="text" placeholder="Cari user" />
        </div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login_apk";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $sql = "SELECT * FROM tabel_user";
        $result = $conn->query($sql);

        ?>
        <table>
          <thead>
            <tr>
              <th>Id User</th>
              <th>Tipe User</th>
              <th>Nama User</th>
              <th>Alamat</th>
              <th>Telepon</th>
            </tr>
          </thead>
          <tbody>
          <?php
          while($row = $result->fetch_assoc()) {           
          ?>
            <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["tipe"]; ?></td>
              <td><?php echo $row["nama"]; ?></td>
              <td><?php echo $row["alamat"]; ?></td>
              <td><?php echo $row["telepon"]; ?></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
