<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Data Anggota DPR</h3>
  <a href="<?= base_url('admin/anggota/create') ?>" class="btn btn-primary">+ Tambah Anggota</a>
</div>

<?php if(session()->getFlashdata('success')): ?>
<div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-striped table-bordered">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Nama Lengkap</th>
      <th>Jabatan</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($anggota as $a): ?>
    <tr>
      <td><?= $a['id_anggota'] ?></td>
      <td><?= $a['gelar_depan'].' '.$a['nama_depan'].' '.$a['nama_belakang'].' '.$a['gelar_belakang'] ?></td>
      <td><?= $a['jabatan'] ?></td>
      <td><?= $a['status_pernikahan'] ?></td>
      <td>
        <a href="<?= base_url('admin/anggota/edit/'.$a['id_anggota']) ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?= base_url('admin/anggota/delete/'.$a['id_anggota']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection() ?>
