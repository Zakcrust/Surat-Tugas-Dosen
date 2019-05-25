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

	<style>
		@media print {

			html,
			body {
				height: 100%;
				margin: 0 !important;
				padding: 0 !important;
				overflow: hidden;
			}

		}
	</style>
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
	<?php
	$this->load->model('m_data');
	foreach ($DATA_SURAT as $s) {

		$tglsurat = explode('/', $s->TANGGAL_SURAT);
		$awalsem  = explode('/', $s->AWAL_SEM);
		$akhirsem = explode('/', $s->AKHIR_SEM);
		$akhirsap = explode('/', $s->AKHIR_SAP);
		?>

		<!-- Nomor surat -->
		<p><span style="font-weight: 400;">Nomor</span><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">: B.<?= "000 " . $s->ID_SURAT ?>/Un.05/III.7/PP.00.9/1/2019</span></p>
		<p><span style="font-weight: 400;">Lampiran</span><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">: -</span></p>
		<p><span style="font-weight: 400;">Perihal </span><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">: Tugas Memberi Kuliah Semester Genap</span></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp;
				<!-- Periode -->
			</span><span style="font-weight: 400;"> Tahun Akademik <?= $s->PERIODE ?></span></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">Kepada Yth.</span></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">Bapak/Ibu</span></p>
		<?php
		$this->db->select('dosen.ID_DOSEN, dosen.NAMA_DOSEN');
		$this->db->from('DATA_DOSEN as dosen, DATA_SURAT as srt ');
		$this->db->where('dosen.ID_DOSEN', $s->ID_DOSEN);
		$query = $this->db->get();
		$row = $query->row();
		?>
		<!-- Nama Dosen -->
		<p><b>&nbsp;&nbsp;&nbsp; </b><b><?= $row->NAMA_DOSEN?></b><b>&nbsp;&nbsp;&nbsp; </b><b>&nbsp;&nbsp;&nbsp;
			</b><b><?= $row->KODE_DOSEN?></b></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">Dosen Fakultas Sains dan
				Teknologi</span></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">UIN Sunan Gunung Djati
				Bandung</span></p>
		<p></p>
		<p><span style="font-weight: 400;">Assalamu&rsquo;alaikum Wr.Wb.</span></p>
		<!-- Periode semester -->
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">Dengan ini kami sampaikan
				tugas/jadwal memberi kuliah pada semester genap tahun akademik pada semester genap tahun akademik 2018/2019 yang
				berlaku mulai tanggal 4 februari sampai dengan 25 Mei 2019, adapun ketentuan pelaksanaanya sebagai
				berikut:</span>

			<div class="container-fluid">

				<table class="table-bordered ">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Matakuliah</th>
							<th scope="col">SKS</th>
							<th scope="col">Jur/Sem/Kls</th>
							<th scope="col">Hari</th>
							<th scope="col">Pukul</th>
							<th scope="col">Ruang</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						foreach ($DATA_MK as $d) {
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $d->NAMA_MK ?></td>
								<td><?= $d->SKS ?></td>
								<td><?= substr($d->JURUSAN, strlen($d->JURUSAN-3)) . '/' . $this->m_data->numberToRoman($d->SEMESTER). '/' . $d->KELAS ?></td>
								<td><?= $d->HARI ?></td>
								<td><?= substr($d->JAM_MULAI, -3) . ':' . substr($d->JAM_SELESAI, -3) ?></td>
								<td><?= $d->RUANG ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

			<span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">Untuk
				ketertiban perkuliahan, Bapak/Ibu dimohon memperhatikan hal-hal sebagai berikut :</span>
		</p>
		<p></p>
		<ol>
			<li style="font-weight: 400;"><span style="font-weight: 400;">Dosen/Asisten berkewajiban menyelenggarakan tatap muka
					terjadwal sekurang-kurang 14 kali.</span></li>
			<!-- Batas Akhir SAP -->
			<li style="font-weight: 400;"><span style="font-weight: 400;">Menyiapkan dan menyampaikan SAP kepada Jurusan
					selambat-lambatnya tanggal 11 Februari 2019.</span></li>
			<li style="font-weight: 400;"><span style="font-weight: 400;">Sebelum memulai perkuliahan agar mengecek daftar
					Mahasiswa yang berhak mengikuti kuliah.</span></li>
			<li style="font-weight: 400;"><span style="font-weight: 400;">Pada akhir perkuliahan agar mengecek daftar Mahasiswa
					yang berhak untuk mengikuti ujian dan menyerahkan dokumennya kepada Ketua Jurusan.</span></li>
			<li style="font-weight: 400;"><span style="font-weight: 400;">Bagi Dosen 1/Dosen 2 yang belum berhak melaksanakan
					kuliah mandiri, agar koordinasi dengan Dosen Pembina Mata Kuliah/Ketua Jurusan.</span></li>
		</ol>
		<p></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">Demikian tugas ini kami
				sampaikan, untuk dilaksanakan sebagaimana mestinya.</span></p>
		<p><span style="font-weight: 400;">Wassalamu&rsquo;alaikum Wr.Wb.,</span></p>
		<!-- Tanggal Surat -->
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Bandung, 21 Januari 2019</span></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; </span><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp;
			</span><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span><span style="font-weight: 400;">a.n. Dekan,</span></p>
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Wakil Dekan Bidang Akademik</span></p>
		<p><br /><br /></p>
		<!-- Wakil Dekan -->
		<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?= $s->WADEK_3 ?></b></p>
		<!-- NIP Wakil Dekan -->
		<p><span style="font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				NIP. <?= $s->NIP_WADEK_3 ?></span></p>
		<p></p>
	<?php } ?>
	<p><span style="font-weight: 400;">Tembusan disampaikan Kepada Yth:</span></p>
	<ol>
		<li><span style="font-weight: 400;"> Dekan Fakultas Sains dan Teknologi</span></li>
		<li><span style="font-weight: 400;"> Ketua Jurusan di Lingkungan Fakultas Sains dan Teknologi</span></li>
	</ol>

</body>

</html>