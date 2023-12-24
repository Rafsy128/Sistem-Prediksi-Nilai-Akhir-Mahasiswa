<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Mahasiswa</title>
</head>
<style>
	table {
		border-collapse: collapse;
		width: 100%;
	}

	th, td {
		padding: 3px;
		text-align: center;
	}

	.text-left {
		text-align: left !important;
	}
</style>
<body>

	<center>
		<h4>Data Mahasiswa</h4>
	</center>

	<table border=1>
		<thead>
      <tr class="odd gradeX">
        <td>NIM</td>
        <td class="text-left">Nama Mahasiswa</td>
        <td>Semester</td>
        <td>IPS</td>
        <td>IPK</td>
        <td>mata kuliah mengulang</td>
        <td>mata kuliah terlambat</td>
        <td>Penghasilan Orang Tua</td>
        <td>Jenis Kelamin</td>
        <td>Beasiswa</td>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($data as $item) : ?>
        <tr>
          <td>
            <?= $item["nim"] ?>
          </td>
          <td class="text-left">
            <?= $item["nama"] ?>
          </td>
          <td>
            <?= $item["semester"] ?>
          </td>
          <td>
            <?= $item["ips"] ?>
          </td>
          <td>
            <?= $item["ipk"] ?>
          </td>
          <td>
            <?= $item["mk_mengulang"] ?>
          </td>
          <td>
            <?= $item["mk_terlambat"] ?>
          </td>
          <td>
            <?= $item["penghasilan"] ?>
          </td>
          <td>
            <?= $item["jk"] == "L" ? "Laki - Laki" : "Perempuan"; ?>
          </td>
          <td>
            <?= $item["beasiswa"] == 1 ? "Dapat" : "Tidak Dapat"; ?> Beasiswa
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
	</table>
		
</body>
</html>