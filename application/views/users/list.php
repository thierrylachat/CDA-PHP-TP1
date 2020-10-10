<div class="container" id="list">
	<h1>Ma liste d'apprenants</h1>
	<table class="table">
		<thead class="info-color white-text">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nom</th>
				<th scope="col">Prénom</th>
				<th scope="col">Email</th>
				<th scope="col">Pays</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i=0;
				foreach($users as $user){
				$i++;?>
			<tr>
				<th scope="row"><?= $i?></th>
				<td><?= $user->lastname?></td>
				<td><?= $user->firstname?></td>
				<td><?= $user->email?></td>
				<td><?= $user->langFR?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
