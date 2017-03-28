
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php if ($singlePersona->photo > '') : ?>
				<div class="photo_acters">
					<img width="100%" src="/<?= $singlePersona->photo ?>">
				</div>
			<?php else : ?>
				<div class="nophoto"></div>
			<?php endif ?>
		</div>
		<div class="descriptoin_actors col-md-9">
			<h2><?= $singlePersona->name ?> <?= $singlePersona->surname ?></h2>
			<p><b>Дата рождения: </b><?= $singlePersona->date_dr ?></p>
			<p><b>Описание: </b><?= $singlePersona->note ?></p>
			<p><b>Книги, изданные актером: </b><?= $singlePersona->books ?></p>
			<p><b>Количество фильмов с актером: </b><?= $singlePersona->count_film ?></p>
			<p><b>ТВ шоу с участием актера: </b><?= $singlePersona->tvShow ?></p>
			<p><b>Страна: </b><?= $singlePersona->country->name ?></p>
		</div>
	</div>	
</div>




