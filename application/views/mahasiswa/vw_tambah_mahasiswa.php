<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= set_value('nama')?>" class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">NIM</label>
                                <input type="text" name="nim" value="<?= set_value('nim')?>" class="form-control" id="nim" placeholder="NIM">
                                <?= form_error('nim', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?= set_value('jenis_kelamin') ?>" >
                                    <option value="">Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" class="form-control" value="<?= set_value('prodi') ?>"> 
                                    <option value="">Pilih Prodi</option>
                                    <?php foreach ($prodi as $p): ?>
                                        <option value="<?= $p['id']; ?>">
                                            <?= $p['nama']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('prodi', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah"
                                    placeholder="Asal Sekolah" value="<?= set_value('asal_sekolah') ?>">
                                    <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_hp">No HP</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No HP" value="<?= set_value('no_hp') ?>">
                                <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>">
                                <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Mahasiswa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>