<div class="container mt-4">
    <h2>Tambah Komponen Gaji</h2>
    <form action="<?= base_url('/admin/komponen/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label>Nama Komponen</label>
            <input type="text" name="nama_komponen" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <option value="Tunjangan">Tunjangan</option>
                <option value="Potongan">Potongan</option>
                <option value="Gaji Pokok">Gaji Pokok</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="per bulan, per jam, ...">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
