<div class="companySwitcher">
	<div class="row">
		<div class="col-md-6">
			<select class="selectpicker" name="companySwitcher">
				<?php if(isset($companies) AND !empty($companies)) : ?>
					<option value="">Select A Company</option>
					<?php foreach($companies as $company) : ?>
						<option value="<?= $company->id; ?>"><?= $company->name; ?></option>
					<?php endforeach; ?>
				<?php else : ?>
					<option value="">No Companies Found</option>
				<?php endif; ?>
			</select>
		</div>
		<div class="col-md-6 selectedCompany"><span>Selected: </span><span class="selected" id="activeCompany">No Company Selected</span></div>
	</div>
</div>