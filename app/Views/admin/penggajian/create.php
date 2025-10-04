<div class="container mt-4">
  <h3>Tambah Data Penggajian</h3>
  <form action="<?= base_url('admin/penggajian/store') ?>" method="post">
    <?= csrf_field() ?>
    <div class="mb-3">
      <label>Nama Anggota</label>
      <select name="id_anggota" class="form-control">
        <?php foreach ($anggota as $a): ?>
            <option value="<?= $a['id_anggota'] ?>"><?= $a['nama_depan'].' '.$a['nama_belakang'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label>Komponen Gaji</label>
      <select name="id_komponen_gaji" class="form-control">
        <?php foreach ($komponen as $k): ?>
            <option value="<?= $k['id_komponen_gaji'] ?>"><?= $k['nama_komponen'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
