<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Description" content="">
    <meta name="Author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>Surat Tugas Dosen</title>

    <!-- Bootstrap core CSS -->


    <!-- FontAwsome icons -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <header class="site-header" role="banner">
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="<?= base_url('main/cariDosen') ?>"><img src="assets/img/logo.png" alt="Cetak Surat"></a>
                        <a class="navbar-brand" href="<?= base_url('main/inputDosen') ?>"><img src="assets/img/logo.png" alt="Input Dosen"></a>
                        <a class="navbar-brand" href="<?= base_url('main/inputMK') ?>"><img src="assets/img/logo.png" alt="Input Mata Kuliah"></a>

                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url('main/mainMenu') ?>">Home</a></li>
                            <li><a href="<?= base_url('DataDosen') ?>">Data Dosen</a></li>
                            <li><a href="/">Data Mata Kuliah</a></li>
                            <li><a href="<?= base_url('login/logout') ?>">Log out</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <form name="data_dosen" method="post" action="<?= base_url('DataMK/update') ?>">
        <?php
        foreach ($DATA_MK as $m) {
            ?>
            <div class="container bg-light">
                <div class="col-md-4 mx-auto">
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="form-group">
                        <input type="hidden" name="id_mk" class="form-control" value="<?php echo $m->ID_MK ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Dosen Pengampu</h3>
                    </div>
                    <div class="dropdown">
                        <select class="form-control" name="nama_dosen">
                            <?php foreach ($DATA_DOSEN as $u) { ?>
                                <option value="<?php echo $u->ID_DOSEN ?>"><?php echo $u->NAMA_DOSEN ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Nama Matakuliah</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama_mk" class="form-control" value="<?php echo $m->NAMA_MK ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Jurusan</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="jurusan" class="form-control" value="<?php echo $m->JURUSAN ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>SKS</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="sks" class="form-control" value="<?php echo $m->SKS ?>">
                    </div>
                    <div class=" text-secondary text-center">
                        <h3>Semester</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="semester" class="form-control" value="<?php echo $m->SEMESTER ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Kurikulum</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="kurikulum" class="form-control" value="<?php echo $m->KURIKULUM ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Kelas</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="kelas" class="form-control" value="<?php echo $m->KELAS ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Hari</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="hari" class="form-control" value="<?php echo $m->HARI ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Jam Mulai</h3>
                    </div>
                    <div class="form-group">
                        <input type="time" name="jam_mulai" class="form-control" value="<?php echo $m->JAM_MULAI ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Jam Selesai</h3>
                    </div>
                    <div class="form-group">
                        <input type="time" name="jam_selesai" class="form-control" value="<?php echo $m->JAM_SELESAI ?>">
                    </div>
                    <div class="text-secondary text-center">
                        <h3>Ruang</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ruang" class="form-control" value="<?php echo $m->RUANG ?>">
                    </div>
                <?php } ?>
                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit">Submit</button>
                </div>
            </div>
            <div class="col-md-4 mx-auto">
            </div>
        </div>
    </form>
</body>

</html>