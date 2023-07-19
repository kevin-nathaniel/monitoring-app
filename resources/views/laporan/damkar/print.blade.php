
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">
    <script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../plugins/font awesome/font-awesome.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Laporan</title>
</head>

<style type="text/css" media="print">

    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 5px;
    line-height: 0.9;

}
</style>
<style type="text/css" media="screen">
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 5px;
    line-height: 0.9;


}
</style>

<body {{--onload="window.print();"--}}>
    <table>
        <tr>
            <td width="30%"><img src="{{ asset('img/angkasa-pura.png') }}" alt="" style="width:300px;height:70px;"></div></td>
            <td width="70%">
                <h4><b>INSPEKSI ASET MOBIL DAN A2B</b></h4>
                <h5><b>DI BANDARA INTERNASIONAL SAMS SEPINGGAN BALIKPAPAN</b></h5>
            </td>
        </tr>
    </table>

    @foreach ($damkar as $konten)
  <div style="width:100%;float: left;">
 <div style="border-bottom: 2px solid #555;padding:10px 0;margin-bottom: 20px;"></div>
    <div style="width:68%;">

      <div style="width: 50%;float: left;">
        <p>Hari : {{ $konten->tgl }}</p>
        <p>Tanggal :</p>
      </div>

      <div style="width: 50%;float: left;">
        <p>Kendaraan :</p>
      </div>
    </div>
    <div style="width: 32%;float: right;">
      <br>
        Waktu Inspeksi :
        <table class="table table-bordered">
        <tbody>
          <tr>
            <td>PAGI s/d SIANG</td>
            <td></td>
          </tr>
          <tr>
            <td>SIANG s/d MALAM</td>
            <td></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

  <div style="width: 100%;float: left">
  <table class="table table-bordered">
    <tr>
      <td colspan="5"><b><center>INSPEKSI ENGINE OFF</center></b></td>
    </tr>
    <tr>
      <td rowspan="2">No</td>
      <td rowspan="2">Body Kendaraan</td>
      <td rowspan="2">Voltase Baterai</td>
      <td rowspan="2">Cek Air ACCU</td>
      <td rowspan="2">Oli Mesin</td>
      <td rowspan="2">Oli Gardan</td>
      <td rowspan="2">Filter Oli</td>
      <td rowspan="2">Filter Bahan Bakar</td>
      <td rowspan="2">Exhaust Pipe</td>
      <td rowspan="2">Minyak Rem</td>
      <td rowspan="2">Foto Kendaraan</td>
    </tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><img src="SOURCE FOTO DISINI" alt="" class="img-thumbnail" style="width: 80px;height:80px"></td>

    </tr>
  </table>
  </div>

  <div style="width:100%;float:right;">
<table class="table table-bordered">
  <tr>
    <td colspan="3"><b><center>PETUGAS INSPEKSI</center></b></td>
  </tr>
  <tr>
    <td >No</td>
    <td >Nama Petugas</td>
    <td >Tanda Tangan</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
</table>
  </div>
<div class="ttd">
  Diketahui :
  <br>
  AIRPORT EQUIPMENT MANAGER
  <br>
  <td width="30%"><img src="foto tanda tangan manager" alt="" style="width:150px;height:70px;"></div></td>
  <td width="70%">
  <br>
  (Joko Prasetyo)
</div>
@endforeach
</body>
</html>
