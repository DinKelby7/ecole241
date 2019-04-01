<?php 
include('data.php')
?>
<!doctype html>

<html>
	<head>
		<title>Act5</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			h1{
				text-decoration: underline;
				font-family: sans-serif;
				font-weight: bolder;
				text-align: center;
			}
		</style>
	</head>

	<body>
	<h1>Tableau des apprenants</h1>
		<table class="table table-dark">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nom</th>
					<th scope="col">Prenom</th>
					<th scope="col">Age</th>
					<th scope="col">Profil</th>

				</tr>
			</thead>
			<tbody>
				<?php for($i = 1;$i <= count($okacode); $i++): ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $okacode[$i]['prenom']?></td>
					<td><?= $okacode[$i]['nom'] ?></td>
					<td><?= $okacode[$i]['age'] ?> ans</td>
					<td><a href="<?= $okacode[$i]['profil'] ?>" target="_blank" class="btn btn-primary">Consulter</a></td>
				</tr>
				<?php endfor; ?>
			</tbody>
		</table> 
	</body>
</html>