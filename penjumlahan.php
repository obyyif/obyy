<!DOCTYPE html>
<html> <! moch kamal abdul karim !>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>Hello, World!</title>
  <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f7f7f7;
}

.kalkulator {
  width: 500px;
  margin: 50px auto;
  padding: 30px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  border-radius: 10px;
}

.kalkulator h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #666;
}

form {
  margin-top: 20px;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 10px;
}

select {
  width: 100%;
  height: 40px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  width: 100%;
  height: 40px;
  background-color: #4CAF50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.result {
  margin-top: 20px;
  font-size: 18px;
  font-weight: bold;
  color: #666;
}

.result::before {
  content: "";
  display: block;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  margin-bottom: 10px;
}
</style>
</head>
<body>
  <div class="kalkulator" >
    <h2>Pengubahan kata</h2>
    <form method="POST">

    <textarea name="text" placeholder="Silahkan Masukan Teks " required></textarea><br><br>

    <label for="case">Pilih format teks:</label><br>
    <select name="case" id="case">
        <option value="lowrise">Lowercase</option>
        <option value="uprise">Uppercase</option>
    </select><br><br>

    <input type="submit" value="Hitung">

</form>

<div class="result">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $case = $_POST['case'];
    $wordCount = str_word_count($text);
    if ($case == "lowrise") {
        $formattedText = strtolower($text);
    } else {
        $formattedText = strtoupper($text);
    }
    echo "Jumlah kata: " . $wordCount . "<br>";
    echo "Teks yang diformat: " . $formattedText;
}
?>
</div>
</div>
</body>
</html>