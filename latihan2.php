<!doctype html>
<html>
    <head>
        <b>Latihan2</b>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                    Angka
                    <form action="latihan3.php" method="get">
                    <input type="number" class="form-control" name="Angka" id="exampleFormControlInput1" placeholder="Angka">
                  </div>
              </div>
              <div class="col">
                Pilihan
                <select class="form-select" aria-label="Default select example" name="Pilihan">
                    <option value="1">Kelvin</option>
                    <option value="2">Reamur</option>
                    <option value="3">Fahrenheit</option>
                  </select>
              </div>
              <div class="col"> <br>
                <button type="submit" class="btn btn-primary">Hitung</button>
              </div>
            </div>
          </div>
          </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>