<div class="panel panel-default">
  <form method="post" action="<?= site_url('checkup/insert') ?>">
    <div class="panel-body">
      <h4>Income Statement</h4>
      <div class="form-group">
        <label class="col-md-2 control-label" >Penghasilan Per Bulan</label>
        <div class="col-sm-10">
          <input type="text" value="0" class="form-control" id="penghasilan" name="penghasilan" placeholder="100.000">
        </div>
      </div>
      <h4>Pengeluaran Per Bulan</h4>
      <div class="form-group">
        <label class="col-sm-2 control-label">Pendidikan</label>
        <div class="col-sm-10">
          <input type="text" id="pengeluaran-pendidikan" class="form-control" name="pengeluaran_pendidikan" placeholder="100.000" value="0" onblur="hitungTotal()">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kebutuhan Harian</label>
        <div class="col-sm-10">
          <input type="text" id="pengeluaran-harian" class="form-control" name="pengeluaran_pribadi" placeholder="100.000" value="0" onblur="hitungTotal()">
        </div>
        
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kebutuhan Rumah</label>
        <div class="col-sm-10">
          <input type="text" id="pengeluaran-rumah" class="form-control" name="pengeluaran_rumah" placeholder="100.000" value="0" onblur="hitungTotal()">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Lifestyle</label>
        <div class="col-sm-10">
          <input type="text" id="pengeluaran-lifestyle" class="form-control" name="pengeluaran_lifestyle" placeholder="100.000" value="0" onblur="hitungTotal()">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Total</label>
        <div class="col-sm-10">
          <input type="text" id="pengeluaran-total" name="pengeluaran-total" class="form-control" disabled>
        </div>
        <br>
      </div>
      <h4>Pengeluaran Cicilan</h4>
      <div class="form-group">
        <label class="col-sm-2 control-label"> Rumah</label>
        <label class="col-sm-4 control-label"> Sisa Term <input type="text" name="cicilan_rumah_term" value="0">  bulan</label>
        <label class="col-sm-6 control-label"> Besar Cicilan <input type="text" name="cicilan_rumah_amount" value="0" id="cicilan-rumah" onblur="hitungTotal()"></label>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"> Kendaraan</label>
        <label class="col-sm-4 control-label"> Sisa Term <input type="text" name="cicilan_kendaraan_term" value="0">  bulan</label>
        <label class="col-sm-6 control-label"> Besar Cicilan <input type="text" name="cicilan_kendaraan_amount" value="0" id="cicilan-kendaraan" onblur="hitungTotal()"></label>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"> Gadget</label>
        <label class="col-sm-4 control-label"> Sisa Term <input type="text" name="cicilan_gadget_term" value="0">  bulan</label>
        <label class="col-sm-6 control-label"> Besar Cicilan <input type="text" name="cicilan_kendaraan_amount" value="0" id="cicilan-gadget" onblur="hitungTotal()"></label>
        <input type="hidden" name="cicilan-total" id="cicilan-total" value="0" />
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" >Tabungan Per Bulan</label>
        <div class="col-sm-10">
          <input type="text" value="0" class="form-control" name="tabunganperbulan" placeholder="100.000" id="tabungan-bulan" onblur="hitungTotal()">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" >Penghasilan Bersih</label>
        <div class="col-sm-10">
          <input type="text" disabled value="0" disabled class="form-control" name="penghasilanbersih" placeholder="100.000" id="penghasilan-bersih">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" >Saldo Tabungan Saat Ini</label>
        <div class="col-sm-10">
          <input type="text" value="0" class="form-control" name="saldo" placeholder="100.000">
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <input type="submit" class="btn btn-primary" value="Simpan" />
    </div>
  </form>
</div>
<script>
  function hitungTotal() {
    let penghasilan = parseInt($('#penghasilan').val());
    let pendidikan = parseInt($('#pengeluaran-pendidikan').val());
    let harian = parseInt($('#pengeluaran-harian').val());
    let rumah = parseInt($('#pengeluaran-rumah').val());
    let lifestyle = parseInt($('#pengeluaran-lifestyle').val());
    let pengeluaran_total = pendidikan + harian + rumah + lifestyle;
    $('#pengeluaran-total').val(pengeluaran_total);

    let cicilan_rumah = parseInt($('#cicilan-rumah').val());
    let cicilan_kendaraan = parseInt($('#cicilan-kendaraan').val());
    let cicilan_gadget = parseInt($('#cicilan-gadget').val());
    let cicilan_total = cicilan_rumah + cicilan_kendaraan + cicilan_gadget;
    $('#cicilan-total').val(cicilan_total);

    let tabungan = parseInt($('#tabungan-bulan').val());
    let total = penghasilan - pengeluaran_total - cicilan_total - tabungan;
    $('#penghasilan-bersih').val(total);
  }
</script>