<div class="container mt-4">
  <h3>Data Penggajian</h3>
  <a href="<?= base_url('admin/penggajian/create') ?>" class="btn btn-primary mb-3">Tambah Data Penggajian</a>

  <?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Anggota</th>
        <th>Komponen Gaji</th>
        <th>Nominal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($penggajian as $p): ?>
      <tr>
        <td><?= $p['id_penggajian'] ?></td>
        <td><?= $p['nama_depan'] . ' ' . $p['nama_belakang'] ?></td>
        <td><?= $p['nama_komponen'] ?></td>
        <td>Rp <?= number_format($p['nominal'], 2, ',', '.') ?></td>
        <td>
          <a href="<?= base_url('admin/penggajian/edit/'.$p['id_penggajian']) ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="<?= base_url('admin/penggajian/delete/'.$p['id_penggajian']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
