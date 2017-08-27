<div class="panel panel-default">
  <div class="panel-body">
    <form action="<?= site_url('planning/insert') ?>" method="post">
      <div class="form-group">
        <label>Penghasilan </label>
        <p>Rp. 10.000.000</p>
      </div>
      <div class="form-group">
        <label><strong>Tabungan / Investasi</strong> (10-30% dari penghasilan)</label>
        <input type="text" name="tabungan" class="form-control">
      </div>
      <div class="form-group">
        <label><strong>Cicilan / Hutang</strong> (Max. 30% dari penghasilan)</label>
        <p>Semua macam kredit dan juga pinjaman</p>
        <input type="text" name="cicilan" class="form-control">
      </div>
      <div class="form-group">
        <label><strong>Pengeluaran Rutin</strong> (20%-40% dari penghasilan)</label>
        <p>Biaya premi asuransi, pengeluaran rumah tangga, transportasi, kesehatan, pendidikan anak, keluarga, pekerja (PRT), dan social (sodaqoh, zakat)</p>
        <input type="text" name="rutin" class="form-control">
      </div>
      <div class="form-group">
        <label><strong>Gaya Hidup</strong> (Max. 20% dari penghasilan)</label>
        <p>Makan, liburan, belanja, hangout, dan lain-lain.</p>
        <input type="text" name="lifestyle" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Simpan" />
      </div>
    </form>
  </div>
</div>