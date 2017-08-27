<div class="panel panel-default">
  <form action="<?= site_url('transaction/save_expense') ?>" method="post">
    <div class="panel-body">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label>Date</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" name="date" class="form-control pull-right" id="datepicker">
            </div>
          </div>
          <div class="col-md-6"><label>Time</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
              </div>
              <input type="text" name="time" class="form-control pull-right" id="timepicker">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Accounts</label>
        <select class="form-control" name="account">
          <option value="Cash">Cash</option>
          <option value="Accounts">Accounts</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <select name="category" class="form-control">
          <option value="Food">Food</option>
          <option value="Social Life">Social Life</option>
          <option value="Self-Development">Self-Development</option>
          <option value="Transportasi">Transportasi</option>
          <option value="Culture">Culture</option>
          <option value="Househola">Househola</option>
          <option value="Apparel">Apparel</option>
          <option value="Beauty">Beauty</option>
          <option value="Health">Health</option>
          <option value="Education">Education</option>
          <option value="Gift">Gift</option>
          <option value="Credit">Credit</option>
          <option value="Invest">Invest</option>
          <option value="Other">Other</option>
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