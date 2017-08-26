<div class="panel panel-default">
    <!-- <div class="box-header with-border">
      <h3 class="box-title">Form Top Up</h3>
    </div> -->
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form">
      <div class="panel-body">
      	<div class="form-group">
      		<div class="col-md-6">
	        <label>Date</label>
		        <div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<input type="text" class="form-control pull-right" id="datepicker">
			    </div>
		    </div>
		    <div class="col-md-6"><label>Time</label>
		        <div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-clock-o"></i>
					</div>
					<input type="text" class="form-control pull-right" id="timepicker">
			    </div>
			</div>
		</div>
      	<div class="form-group">
          <label for="exampleInputPassword1">Accounts</label>
          <select class="form-control">
          	<option name="Cash">Cash</option>
          	<option name="Accounts">Accounts</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Category</label>
          <select class="form-control">
          	<option name="Tunjangan">Tunjangan</option>
          	<option name="Gaji">Gaji</option>
          	<option name="Uang Kas">Uang Kas</option>
          	<option name="Bonus">Bonus</option>
          	<option name="lainnya">lainnya</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Amount</label>
          <input type="text" class="form-control" id="amount" placeholder="100.000">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Memo/Keterangan</label>
          <input type="text" class="form-control" id="memo" >
        </div>
        
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>