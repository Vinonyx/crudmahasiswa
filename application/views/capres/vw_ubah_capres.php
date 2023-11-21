<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Edit Data Calon Presiden
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('capres/update'); ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $capres['id']; ?>">
                            <div class="form-group mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap"
                                    value="<?= $capres['nama_lengkap'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK"
                                    value="<?= $capres['nik'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal_sekolah">Umur</label>
                                <input type="text" name="umur" class="form-control" id="umur"
                                    value="<?= $capres['umur'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal">Asal</label>
                                <input type="text" name="asal" class="form-control" id="asal"
                                    value="<?= $capres['asal'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Partai</label>
                                <input type="text" name="partai" class="form-control" id="partai"
                                    value="<?= $capres['partai'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prodi">Riwayat Penyakit</label>
                                <input type="text" name="riwayat_penyakit" class="form-control" id="riwayat_penyakit"
                                    value="<?= $capres['riwayat_penyakit'] ?>">
                            </div>
                            <a href="<?= base_url('capres') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                                Mahasiswa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>