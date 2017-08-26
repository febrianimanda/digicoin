<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<?php if($this->session->flashdata('message') != null):?>
			    <div class="alert alert-<?= $this->session->flashdata('status') ?>" role="alert">
			      <?= $this->session->flashdata('message') ?>
			    </div>
			  <?php endif; ?>
				<form action="<?= site_url('profiling/insert') ?>" method="post">
					<?php $i=0; ?>
					<?php foreach ($questions as $question): ?>
						<?php $i++ ?>
						<div class="form-group">
							<label><?= $question['question'] ?></label>
							<div class="radio">
							  <label>
							    <input type="radio" name="val_<?=$i?>" value="3" /> <?= $question['answer_1'] ?>
							  </label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="val_<?=$i?>" value="2" /> <?= $question['answer_2'] ?>
							  </label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="val_<?=$i?>" value="1" /> <?= $question['answer_3'] ?>
							  </label>
							</div>
						</div>
					<?php endforeach; ?>
					<div class="form-group">
						<input type="submit" value="Simpan" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>