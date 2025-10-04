<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Edit Data Anggota</h3>

<form action="<?= base_url('admin/anggota/update/'.$anggota['id_anggota']) ?>" method="post" class="card p-4 shadow-sm">
  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Gelar Depan</label>
      <input type="text" name="gelar_depan" class="form-control" value="<?= $anggota['gelar_depan'] ?>">
    </div>
    <div class="col-md-6">
      <label class="form-label">Gelar Belakang</label>
      <input type="text" name="gelar_belakang" class="form-control" value="<?= $anggota['gelar_belakang'] ?>">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Nama Depan</label>
      <input type="text" name="nama_depan" class="form-control" value="<?= $anggota['nama_depan'] ?>" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Nama Belakang</label>
      <input type="text" name="nama_belakang" class="form-control" value="<?= $anggota['nama_belakang'] ?>">
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Jabatan</label>
    <input type="text" name="jabatan" class="form-control" value="<?= $anggota['jabatan'] ?>" required>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label class="form-label">Status Pernikahan</label>
      <select name="status_pernikahan" class="form-select">
        <option value="Menikah" <?= $anggota['status_pernikahan'] == 'Menikah' ? 'selected' : '' ?>>Menikah</option>
        <option value="Belum Menikah" <?= $anggota['status_pernikahan'] == 'Belum Menikah' ? 'selected' : '' ?>>Belum Menikah</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  <a href="<?= base_url('admin/anggota') ?>" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection() ?>
