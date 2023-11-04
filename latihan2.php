<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: rgb(0, 128, 0, 0.3);
        }
    </style>
  </head>
  <body>
    <h1>Perhitungan</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="container">
    <form action ="latihan3.php" method="get">
        <div class="form-group">
            <label for="angka">Masukkan Angka:</label>
            <input type="text" class="form-control" name="angka" id="angka">
        </div>
        <div class="form-group">
            <label for="pilihan">Pilih sesuatu:</label>
            <select class="form-control" name="pilihan" id="pilihan">
                <option value="opsi1">2</option>
                <option value="opsi2">3</option>
                <option value="opsi3">4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>
</form>

  </body>
</html>