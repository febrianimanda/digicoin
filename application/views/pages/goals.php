<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<form action="<?= site_url('goals/insert') ?>" method="post">
					<div class="alert alert-<?= $this->session->flashdata('status') ?>">
						<p><?= $this->session->flashdata('message'); ?></p>
					</div>
					<div class="form-group">
						<label>Apakah Anda memiliki Financial Goals tertentu?</label>
						<div class="radio">
						  <label>
						    <input type="radio" name="financial_goals" value="1" /> Membentuk deposito untuk pensiun
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="financial_goals" value="2" /> Membeli rumah secara kredit
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="financial_goals" value="3" /> Membeli rumah secara cash
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="financial_goals" value="4" /> Membeli harta selain rumah
						  </label>
						</div>
						<?php if($this->session->flashdata('show')): ?>
							<div class="radio">
							  <label>
							    <input type="radio" name="financial_goals" value="5" /> Tidak, saya hanya ingin memperbaiki kondisi keuangan saya.
							  </label>
							</div>
						<?php endif;?>
					</div>
					<div class="form-group">
						<input type="submit" value="Simpan" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>