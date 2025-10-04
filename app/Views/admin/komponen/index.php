<div class="container mt-4">
    <h2>Daftar Komponen Gaji</h2>
    <a href="<?= base_url('/admin/komponen/create') ?>" class="btn btn-primary mb-3">+ Tambah Komponen</a>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Komponen</th>
                <th>Kategori</th>
                <th>Jabatan</th>
                <th>Nominal</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($komponen as $k): ?>
            <tr>
                <td><?= $k['id_komponen_gaji'] ?></td>
                <td><?= $k['nama_komponen'] ?></td>
                <td><?= $k['kategori'] ?></td>
                <td><?= $k['jabatan'] ?></td>
                <td><?= number_format($k['nominal'], 0, ',', '.') ?></td>
                <td><?= $k['satuan'] ?></td>
                <td>
                    <a href="<?= base_url('/admin/komponen/edit/'.$k['id_komponen_gaji']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('/admin/komponen/delete/'.$k['id_komponen_gaji']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
