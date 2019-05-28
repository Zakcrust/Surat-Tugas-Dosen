<?php
$this->load->model('m_data');
foreach ($DATA_SURAT as $s) {

  $tglsurat = explode('-', $s->TANGGAL_SURAT);
  $buatsurat = explode('-', $s->BUAT_SURAT);
  $awalsem  = explode('-', $s->AWAL_SEM);
  $akhirsem = explode('-', $s->AKHIR_SEM);
  $akhirsap = explode('-', $s->AKHIR_SAP);
  if (intval($awalsem[1]) > 8) $semSurat = "Ganjil";
  else $semSurat = "Genap";

  $this->db->select('dosen.ID_DOSEN, dosen.NAMA_DOSEN, dosen.KODE_DOSEN');
  $this->db->from('DATA_DOSEN as dosen, DATA_SURAT as srt ');
  $this->db->where('dosen.ID_DOSEN', $s->ID_DOSEN);
  $query = $this->db->get();
  $row = $query->row();
  ?>

  <table width="700" border="0" align="center">
    <tr>
      <td rowspan="5" align="center"><img src="uin.png" width="100" height="105"></td>
      <td align="center">
        <font face="Times New Roman, Times, serif" size="2">KEMENTRIAN AGAMA REPUBLIK INDONESIA
      </td>
    </tr>
    <tr>
      <td align="center">
        <font face="Times New Roman, Times, serif" size="2">UNIVERSITAS ISLAM NEGERI (UIN)
      </td>

    </tr>
    <tr>
      <td align="center">
        <font face="Times New Roman, Times, serif" size="3">SUNAN GUNUNG DJATI BANDUNG
      </td>

    </tr>
    <tr>
      <td align="center">
        <font face="Times New Roman, Times, serif" size="3">FAKULTAS SAINS DAN TEKNOLOGI
      </td>

    </tr>
    <tr>
      <td align="center">
        <font face="Times New Roman, Times, serif" size="-5">Jalan A.H. Nasution No.105 Cibiru - Bandung 40614 Telp. 022-7800525 Fax. 022-7803936 website: http://fst.uinsgd.ac.id
      </td>
    </tr>
    <th colspan="5" align="center" scope="col">
      <hr />
  </table>
  <p>


    <table width="700" border="0" align="center">
      <tr>
        <td width="79">Nomor</td>
        <td width="12">:</td>
        <td width="595">B.<?= "000" . $s->ID_SURAT ?>/Un.05/III.7/PP.00.9/<?= $buatsurat[1] . '/' . $buatsurat[0] ?></td>
      </tr>
      <tr>
        <td width="79">Lampiran</td>
        <td width="12">:</td>
        <td width="595"></td>
      </tr>
      <tr>
        <td width="79">Perihal</td>
        <td width="12">:</td>
        <td width="595">Tugas Memberi kuliah Semester</td>
      </tr>
    </table>

    <table width="700" border="0" align="center">
      <tr>
        <td width="80"></td>
        <td></td>
        <td width="592">Kepada Yth.<br>Bapak/Ibu</td>
      </tr>
      <tr>
        <td width="80"></td>
        <td width="14"><?= $row->NAMA_DOSEN; ?></td>
        <td width="592"><?= $row->KODE_DOSEN; ?><b></td>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td width="14"></td>
        <td width="592">Dosen Fakultas Sains dan Teknologi<br>UIN Sunan Gunung Djati Bandung</td>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td width="14"></td>
        <td width="592">
          <font face="Times New Roman, Times, serif" size="3"><br>Assalamualaikum Wr. Wb
        </td>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td width="14"></td>
        <td width="592">
          <p align="justify">Dengan ini kami sampaikan tugas/jadwal memberi kuliah pada Semester <?= $semSurat ?>, tahun akademik <?= $s->PERIODE ?> yang berlaku mulai tanggal <?= $awalsem[2] . " " . $this->m_data->stringMonth($awalsem[1]) . " sampai dengan " . $akhirsem[2] . " " . $this->m_data->stringMonth($akhirsem[1]) . "  " . $akhirsem[0] ?>, Adapun ketentuan pelaksanaannya sebagai berikut : </p>
        </td>
      </tr>
    </table>

    <table width="605" border="1" align="right" cellspacing="0" cellpadding="0">
      <tr>

        <td>No</td>
        <td width="235">
          <center>Mata Kuliah
        </td>
        <td width="31">
          <center>SKS
        </td>
        <td width="59">
          <center>Jur/Sem/Kls
        </td>
        <td width="53">
          <center>Hari
        </td>
        <td width="102">
          <center>Pukul
        </td>
        <td width="54">
          <center>Ruang
        </td>
      </tr>


      <tr>
        <?php
        $no = 1;
        foreach ($DATA_MK as $d) {
          ?>
          <td width="33" align="center" bgcolor="#FFFFFF" scope="col">
            <center><?= $no++ ?>
          </td>
          <td width="235" align="left" bgcolor="#FFFFFF" scope="col">
            <center><?= $d->NAMA_MK ?>
          </td>
          <td align="center" bgcolor="#FFFFFF" scope="col"><?= $d->SKS ?></td>
          <td width="59" align="center" bgcolor="#FFFFFF" scope="col">
            <center><?= $this->m_data->getJurusan($d->JURUSAN) . '/' . $this->m_data->numberToRoman($d->SEMESTER) . '/' . $d->KELAS ?>
          </td>
          <td align="left" bgcolor="#FFFFFF" scope="col">
            <center><?= $d->HARI ?>
          </td>
          <td width="102" align="left" bgcolor="#FFFFFF" scope="col">
            <center><?= substr($d->JAM_MULAI, 0, 5) . ':' . substr($d->JAM_SELESAI, 0, 5) ?>
          </td>
          <td colspan="3" align="left" bgcolor="#FFFFFF" scope="col">
            <center><?= $d->RUANG ?>
          </td>
        </tr>
      <?php } ?>
    </table>

    <table width="700" border="0" align="center">
      <tr>
        <td width="80"></td>
        <td></td>
        <td width="592">Untuk ketertiban perkuliahan, Bapak/ibu dimohon memperhatikan hal-hal berikut:</td>
      </tr>
      <tr>
        <td width="80"></td>
        <td width="14">1. </td>
        <td width="592">
          <p align="justify">Dosen / Asisten berkewajiban menyelenggarakan tatap muka terjadwal sekurang-kurangnya 14 kali.</p>
        </td>
      </tr>
      <tr>
        <td width="80"></td>
        <td width="14">2. </td>
        <td width="592">
          <p align="justify">Sebelum memulai perkuliahan agar mengecek daftar mahasiswa yang berhak mengikuti kuliah</p>
        </td>
      </tr>
      <tr>
        <td width="80"></td>
        <td width="14">3. </td>
        <td width="592">
          <p align="justify">Pada Akhir perkuliahan agar mengecek daftar Mahasiswa yang berhak untuk mengikuti ujian dan menyerahkan dokumennya kepda ketua jurusan, untuk mencetak kartu ujian.</p>
        </td>
      </tr>
      <tr>
        <td width="80"></td>
        <td width="14">4. </td>
        <td width="592">
          <p align="justify">Bagi Dosen 1/Dosen 2 yeng belum berhak melaksanakan kuliah mandiri, agar koordinasi dengan Dosen Pembina Mata Kuliah/Ketua Jurusan</p>
        </td>
      </tr>
      <tr>
        <td width="80"></td>
        <td></td>
        <td width="592">Demikian tugas ini kami sampaikan, untuk dilaksanakan sebagaimana mestinya<br>Wassalamualaikum Wr. Wb.</td>
      </tr>
      <tr>
        <td width="80"></td>
        <td></td>
        <td width="592" align="right">Bandung,<?= $tglsurat[2] . ' ' . $this->m_data->stringMonth($tglsurat[1]) . ' ' . $tglsurat[0] . '.' ?><br /> Wakil Dekan Bidang Akademik</td>
      </tr>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td>&nbsp;</td>
        <td width="592" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td></td>
        <td width="592" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td></td>
        <td width="592" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td></td>
        <td width="592" align="right"><b><?= $s->WADEK_3 ?></td><br>
      </tr>
      <tr>
        <td width="80">&nbsp;</td>
        <td></td>
        <td width="592" align="right">NIP. <?= $s->NIP_WADEK_3 ?></td>
      </tr>
    </table>
  <?php } ?>

  <script>
    window.print()
  </script>