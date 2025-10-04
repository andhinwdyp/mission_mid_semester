<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Tambah Data Anggota</h3>

<form action="<?= base_url('admin/anggota/store') ?>" method="post" class="card p-4 shadow-sm">
  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Gelar Depan</label>
      <input type="text" name="gelar_depan" class="form-control">
    </div>
    <div class="col-md-6">
      <label class="form-label">Gelar Belakang</label>
      <input type="text" name="gelar_belakang" class="form-control">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Nama Depan</label>
      <input type="text" name="nama_depan" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Nama Belakang</label>
      <input type="text" name="nama_belakang" class="form-control">
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Jabatan</label>
    <input type="text" name="jabatan" class="form-control" required>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Status Pernikahan</label>
      <select name="status_pernikahan" class="form-select">
        <option value="Menikah">Menikah</option>
        <option value="Belum Menikah">Belum Menikah</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="<?= base_url('admin/anggota') ?>" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection() ?>
