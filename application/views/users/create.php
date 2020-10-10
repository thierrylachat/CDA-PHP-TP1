<div class="container" id="add">
		<div class="row">
			<div class="col">
				
				<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>')?>
					

				<?php echo form_open(''); ?>

				<h1 class="text-center m-4">TP1 - Enregistrement d'un futur Talent</h1>
				<div class="form-group">
					<label for="lastname">Nom</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-address-card"></i>
							</div>
						</div>
						<input id="lastname" name="lastname" type="text" class="form-control"
							value="<?php echo set_value('lastname'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="firstname">Prénom</label>
					<input id="firstname" name="firstname" type="text" class="form-control"
						value="<?php echo set_value('firstname'); ?>">
				</div>
				<div class="form-group">
					<label for="birthdate">Date de naissance</label>
					<input id="birthdate" name="birthdate" type="date" class="form-control"
						value="<?php echo set_value('birthdate'); ?>">
				</div>
				<div class="form-group">
					<label for="birthCountry">Pays de naissance</label>
					<div>
						<select id="birthCountry" name="birthCountry" class="custom-select">
							<?php foreach ($countries as $country) {?>
								<option value="<?= $country->code?>" <?php echo set_select('birthCountry', $country->code) ?>><?= $country->langFR?></option>
							<?php }?>
						</select>
							
					</div>
				</div>
				<div class="form-group">
					<label for="nationality">Nationalité</label>
					<input id="nationality" name="nationality" type="text" class="form-control"
						value="<?php echo set_value('nationality'); ?>">
				</div>
				<div class="form-group">
					<label for="address">Adresse</label>
					<input id="address" name="address" type="text" class="form-control"
						value="<?php echo set_value('address'); ?>">
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input id="email" name="email" type="text" class="form-control"
						value="<?php echo set_value('email'); ?>">
				</div>
				<div class="form-group">
					<label for="phone">Numéro de téléphone</label>
					<input id="phone" name="phone" type="text" class="form-control"
						value="<?php echo set_value('phone'); ?>">
				</div>
				<div class="form-group">
					<label>Diplôme</label>
					<div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input name="diploma" id="diploma_0" type="checkbox" class="custom-control-input" value="0" <?php echo set_checkbox('diploma', '0'); ?>>
							<label for="diploma_0" class="custom-control-label">sans</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input name="diploma" id="diploma_1" type="checkbox" class="custom-control-input" value="1" <?php echo set_checkbox('diploma', '1'); ?>>
							<label for="diploma_1" class="custom-control-label">Bac</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input name="diploma" id="diploma_2" type="checkbox" class="custom-control-input" value="2" <?php echo set_checkbox('diploma', '2'); ?>>
							<label for="diploma_2" class="custom-control-label">Bac+2</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline">
							<input name="diploma" id="diploma_3" type="checkbox" class="custom-control-input" value="3" <?php echo set_checkbox('diploma', '3'); ?>>
							<label for="diploma_3" class="custom-control-label">Bac+3 ou supérieur</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="jobNumber">Numéro pôle emploi</label>
					<input id="jobNumber" name="jobNumber" type="text" class="form-control"
						value="<?php echo set_value('jobNumber'); ?>">
				</div>
				<div class="form-group">
					<label for="badgeNumber">Nombre de badges</label>
					<input id="badgeNumber" name="badgeNumber" type="text" class="form-control"
						value="<?php echo set_value('badgeNumber'); ?>">
				</div>
				<div class="form-group">
					<label for="codecademyLinks">Liens codecademy</label>
					<input id="codecademyLinks" name="codecademyLinks" type="text" class="form-control"
						value="<?php echo set_value('codecademyLinks'); ?>">
				</div>
				<div class="form-group">
					<label for="superHero">Super héro?</label>
					<textarea id="superHero" name="superHero" cols="40" rows="5" aria-describedby="superHeroHelpBlock"
						class="form-control"><?php echo set_value('superHero'); ?></textarea>
					<span id="superHeroHelpBlock" class="form-text text-muted">Si vous étiez un super héros/une super
						héroïne,
						qui seriez-vous et pourquoi?</span>
				</div>
				<div class="form-group">
					<label for="hack">Hacker?</label>
					<textarea id="hack" name="hack" cols="40" rows="5" aria-describedby="hackHelpBlock"
						class="form-control" ><?php echo set_value('hack'); ?></textarea>
					<span id="hackHelpBlock" class="form-text text-muted">Racontez-nous un de vos "hacks" (pas forcément
						technique ou informatique)</span>
				</div>
				<div class="form-group">
					<label>Première expérience?</label>
					<div>
						<div class="custom-control custom-radio custom-control-inline">
							<input name="developer" id="developer_0" type="radio" aria-describedby="developerHelpBlock"
								class="custom-control-input" value="1" <?php echo  set_radio('developer', '1'); ?>>
							<label for="developer_0" class="custom-control-label">Oui</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input name="developer" id="developer_1" type="radio" aria-describedby="developerHelpBlock"
								class="custom-control-input" value="0" <?php echo  set_radio('developer', '0'); ?>>
							<label for="developer_1" class="custom-control-label">Non</label>
						</div>
						<span id="developerHelpBlock" class="form-text text-muted">Avez vous déjà eu une expérience avec
							la
							programmation et/ou l'informatique avant de remplir ce formulaire ?</span>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Enregistrer</button>
				</div>


			</div>
		</div>

	</div>