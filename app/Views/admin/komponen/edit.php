<div class="container mt-4">
    <h2>Edit Komponen Gaji</h2>
    <form action="<?= base_url('/admin/komponen/update/'.$komponen['id_komponen_gaji']) ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label>Nama Komponen</label>
            <input type="text" name="nama_komponen" class="form-control" value="<?= $komponen['nama_komponen'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <option value="Tunjangan" <?= $komponen['kategori']=='Tunjangan'?'selected':'' ?>>Tunjangan</option>
                <option value="Potongan" <?= $komponen['kategori']=='Potongan'?'selected':'' ?>>Potongan</option>
                <option value="Gaji Pokok" <?= $komponen['kategori']=='Gaji Pokok'?'selected':'' ?>>Gaji Pokok</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="<?= $komponen['jabatan'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control" value="<?= $komponen['nominal'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control" value="<?= $komponen['satuan'] ?>">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
