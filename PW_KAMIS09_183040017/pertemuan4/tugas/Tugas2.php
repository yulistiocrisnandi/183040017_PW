<?php 
$a  =[
[
	"no" => "1",
	"picture" => "toy1.jpg",
	"judul" => "Toy Story 1",
	"actor" => "Tom Hanks, Tim Allen",
	"sutradara" => "John Lasseter",
	"tanggal rilis" => " 22 November 1995",
	"genre" => "Comedy, Animasi, Adventure"
],
[
	"no" => "2",
	"picture" => "toy2.jpg",
	"judul" => "Toy Story 2",
	"actor" => " Tom Hanks, Tim Allen",
	"sutradara" => "John Lasseter",
	"tanggal rilis" => "13 November 1999",
	"genre" => "Comedy, Animasi, Adventure"
],
[
	"no" => "3",
	"picture" => "toy3.jpg",
	"judul" => "Toy Story 3",
	"actor" => " Tom Hanks, Tim Allen",
	"sutradara" => "John Lasseter",
	"tanggal rilis" => "18 Juni 2010",
	"genre" => "Comedy, Animasi, Adventure"
],
[
	"no" => "4",
	"picture" => "jw1.jpg",
	"judul" => "Jurassic Park",
	"actor" => "Sam Neill, Jeff Goldblum",
	"sutradara" => "Steven Spielberg",
	"tanggal rilis" => "9 Juni 1993",
	"genre" => "Action, Adventure, Fiksi"
],
[
	"no" => "5",
	"picture" => "jw2.jpg",
	"judul" => "Jurassic World",
	"actor" => "Chris Pratt",
	"sutradara" => "Colin Trevorrow",
	"tanggal rilis" => "10 Juni 2015",
	"genre" => "Action, Fiksi, Adventure"
],
[
	"no" => "6",
	"picture" => "cars1.jpg",
	"judul" => "Cars 1",
	"actor" => "	Ken Schretzmann",
	"sutradara" => "Jeremy Lasky Jean Claude Kalachet",
	"tanggal rilis" => "28 Juli 2006",
	"genre" => "Action, Fantasy, Adventure"
],	
[
	"no" => "7",
	"picture" => "cars2.jpg",
	"judul" => "Cars 2",
	"actor" => "Ken Schretzmann",
	"sutradara" => "Jeremy Lasky Jean Claude Kalache",
	"tanggal rilis" => "12 Oktober 2011",
	"genre" => "Action, Fantasy, Adventure"
],
[
	"no" => "8",
	"picture" => "kingkong.jpg",
	"judul" => "Kingkong",
	"actor" => "Mark Wahlberg",
	"sutradara" => "Peter Jackson",
	"tanggal rilis" => "14 Desember 2005",
	"genre" => "Action, Fiksi, Adventure"
],
[
	"no" => "9",
	"picture" => "nemo.jpg",
	"judul" => "Finding Nemo",
	"actor" => "Albert Brooks",
	"sutradara" => "Tim Miller",
	"tanggal rilis" => "30 Mei 2003",
	"genre" => "Action, Fiksi, Adventure"
],
[
	"no" => "10",
	"picture" => "incri2.jpg",
	"judul" => "The Incredibles 2",
	"actor" => "Craig T Nelson",
	"sutradara" => " Brad Bird",
	"tanggal rilis" => "14 Juni 2018",
	"genre" => "Action, Fantasy, Adventure"
],


];
?>
<!DOCTYPE html>
<html>
<head>
	<title>laihan 4d</title>
</head>
<body>
	<center>
		<h1>Daftar Film Terbaik</h1>

	<table border="2" cellpadding="4" cellspacing="0">
		<tr align="center" height="50">
			<td>No</td>
			<td>Picture</td>
			<td>Judul</td>
			<td width="200">Actor</td>
			<td width="300">Sutradara</td>
			<td>Tanggal Rilis</td>
			<td>Genre</td>
		</tr>
		<?php foreach ($a as $f):  ?>
		<tr align="center">
			<td align="center"><?= $f["no"]?></td>
			<td><img src="../../img/<?= $f['picture']; ?>"></td>
			<td><?= $f["judul"]; ?></td>
			<td><?= $f["actor"]; ?></td>
			<td><?= $f["sutradara"]; ?></td>
			<td><?= $f["tanggal rilis"]; ?></td>
			<td><?= $f["genre"]; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	</center>
		<h4><a href="../../index.php">back</a></h4>
</body>
</html>