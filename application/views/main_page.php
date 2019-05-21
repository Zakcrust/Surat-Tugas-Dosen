<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Main Menu</title>
</head>

<body>
    <div class="jumbotron bg-info text-white">
        <h1 class="display-4">Pembuatan Surat Tugas Dosen</h1>
    </div>
    <form name="data_dosen" method="post" action="">
        <div class="container bg-light col-3 col-6">
            <div class="py-1 mx mx-auto text-secondary" styple="width: 600px">
                <h3>Input Nama Dosen</h3>
            </div>
            <div class="py-1 mx mx-auto text-secondary" styple="width: 600px">
                <div class="input-group py-2 mx-auto" style="width: 600px;">
                    <input type="text" name="nama_dosen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="py-3 mx-auto" style="width: 600px">
                    <a class="btn btn-success" href="<?= base_url('main/searchResult') ?>">Submit</a>
                </div>
                <div class="py-9 mx-auto" style="width: 600px">
                    <a class="btn btn-success" href="<?= base_url('login/logout') ?>">Logout</a>
                </div>

            </div>

        </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>