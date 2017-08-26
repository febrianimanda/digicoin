<div class="panel panel-default">
  <form action="<?= site_url('transaction/save_transfer') ?>" method="post">
    <div class="panel-body">
    	<div class="form-group">
        <div class="row">
      		<div class="col-md-6">
  	        <label>Tanggal</label>
            <div class="input-group date">
              <input id="datepicker" name="date" type="text" class="form-control"></input>
              <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
  		    </div>
  		    <div class="col-md-6">
            <label>Jam</label>
  		      <div class="input-group date">
              <input type="text" name="time" id="timepicker" class="form-control">
              <span class="input-group-addon">
                <i class="fa fa-clock-o"></i>
              </span>
            </div>
          </div>
        </div>
		  </div>
      <div class="form-group">
        <label for="exampleInputPassword1">From</label>
        <input type="text" name="from" class="form-control" />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">To</label>
        <input type="text" name="to" class="form-control" />
      </div>
    	
      <div class="form-group">
        <label for="exampleInputPassword1">Amount</label>
        <input type="text" name="amount" class="form-control" placeholder="100.000">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi</label>
        <input type="text" name="contents" class="form-control" />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Memo/Keterangan</label>
        <input type="text" name="memo" class="form-control" />
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <input type="submit" class="btn btn-primary" value="Simpan" />
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