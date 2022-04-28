<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <form method="POST" action="mahasiswa.php">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card"></i>
              </div>
            </div> 
            <input id="text" name="NIM" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama Mahasiswa</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book"></i>
              </div>
            </div> 
            <input id="text1" name="Nama" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">jenis kelamin</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="laki laki"> 
            <label for="gender_0" class="custom-control-label">laki laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="wanita"> 
            <label for="gender_1" class="custom-control-label">wanita</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tgl" class="col-4 col-form-label">Tanggal lahir</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-calendar"></i>
              </div>
            </div> 
            <input id="tgl" name="tgl" type="datetime-local" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tmplahir" class="col-4 col-form-label">Tempat lahir</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-building"></i>
              </div>
            </div> 
            <input id="tmplahir" name="tmplahir" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="prgmstudi" class="col-4 col-form-label">Program studi</label> 
        <div class="col-8">
          <select id="prgmstudi" name="prgmstudi" class="custom-select">
            <option value="TI">TI</option>
            <option value="SI">SI</option>
            <option value="Bisnis DIgital">Bisnis DIgital</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="IPK" class="col-4 col-form-label">IPK</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-bar-chart"></i>
              </div>
            </div> 
            <input id="IPK" name="IPK" type="text" class="form-control">
          </div>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <input name="submit" type="submit" class="btn btn-primary"></input>
        </div>
      </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>