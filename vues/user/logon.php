<h2 class="text-center">Inscription</h2>

<form action="" method="post">
	<div class="row">
		<div class="col-6">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" id="inlineCheckbox1"
					value="femme" name="sexe"> 
					<label class="form-check-label"
					for="inlineCheckbox1">Femme</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" id="inlineCheckbox2"
					value="homme" name="sexe"> 
					<label class="form-check-label"
					for="inlineCheckbox2">Homme</label>
			</div>
		</div>
		<div class="form-group col-6">
			<label for="">Prénom</label> <input type="text" name="prenom"
				class="form-control" />
		</div>

		<div class="form-group col-6">
			<label for="">Login</label> <input type="text" name="login"
				class="form-control" />
		</div>
		<div class="form-group col-6">
			<label for="">Mot de passe</label> <input type="password" name="mdp"
				class="form-control" />
		</div>
	</div>
	<input type="submit" class="btn btn-success mt-3" />
</form>
