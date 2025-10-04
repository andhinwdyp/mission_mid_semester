<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Edit Data Penggajian</h3>
  
<form action="<?= base_url('admin/penggajian/update/'.$penggajian['id_penggajian']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
      <label>Nama Anggota</label>
      <select name="id_anggota" class="form-select">
        <?php foreach($anggota as $a): ?>
          <option value="<?= $a['id_anggota'] ?>" <?= $a['id_anggota']==$penggajian['id_anggota']?'selected':'' ?>>
            <?= $a['nama_depan'].' '.$a['nama_belakang'] ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label>Komponen Gaji</label>
      <select name="id_komponen_gaji" class="form-select">
        <?php foreach($komponen as $k): ?>
          <option value="<?= $k['id_komponen_gaji'] ?>" <?= $k['id_komponen_gaji']==$penggajian['id_komponen_gaji']?'selected':'' ?>>
            <?= $k['nama_komponen'] ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="<?= base_url('admin/penggajian'); ?>" class="btn btn-secondary">Batal</a>
</form>

<?= $this->endSection() ?>
