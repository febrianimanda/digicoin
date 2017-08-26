<div class="panel panel-default">
  <form action="<?= site_url('transaction/save_income') ?>" method="post">
    <div class="panel-body">
    	<div class="form-group row">
    		<div class="col-md-6">
	        <label>Date</label>
	        <div class="input-group date">
  					<div class="input-group-addon">
  						<i class="fa fa-calendar"></i>
  					</div>
  					<input type="text" class="form-control pull-right" name="date" id="datepicker">
			    </div>
		    </div>
		    <div class="col-md-6"><label>Time</label>
	        <div class="input-group date">
  					<div class="input-group-addon">
  						<i class="fa fa-clock-o"></i>
  					</div>
  					<input type="text" class="form-control pull-right" name="time" id="timepicker">
			    </div>
  			</div>
  		</div>
    	<div class="form-group">
        <label for="exampleInputPassword1">Accounts</label>
        <select name="account" class="form-control">
        	<option value="Cash">Cash</option>
        	<option value="Accounts">Accounts</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <select name="category" class="form-control">
        	<option category="Tunjangan">Tunjangan</option>
        	<option category="Gaji">Gaji</option>
        	<option category="Uang Kas">Uang Kas</option>
        	<option category="Bonus">Bonus</option>
        	<option category="lainnya">lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Amount</label>
        <input type="text" class="form-control" name="amount" placeholder="100.000">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi</label>
        <input type="text" class="form-control" name="contents" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Memo/Keterangan</label>
        <input type="text" class="form-control" name="memo" >
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
  </form>
</div>
<script>
  $(document).ready(function(){
    $('#datepicker').datetimepicker({
      format: 'L'
    });
    $('#timepicker').datetimepicker({
      format: 'LT'
    });
  });
</script>