<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Edit Data Prodi
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control"
                                    id="nama" placeholder="Nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Ruangan</label>
                                <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control"
                                    id="ruangan" placeholder="Ruangan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Jurusan</label>
                                <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control"
                                    id="jurusan" placeholder="Jurusan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Akreditasi</label>
                                <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>"
                                    class="form-control" id="akreditasi" placeholder="Akreditasi">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prodi">Nama Kaprodi</label>
                                <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>"
                                    class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal_sekolah">Tahun Berdiri</label>
                                <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>"
                                    class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_hp">Output Lulusan</label>
                                <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>"
                                    class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="gambar">Gambar</label>
                                <img src="<?= base_url('assets/assets/img/prodi/') . $prodi['gambar'];?>"
                                    style="width: 100px;" class="img-thumbnail">
                                <div class="custom-file">
                                    <input type="file" class="form-control custom-file-input" name=" gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label"></label>
                                    <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            </div>
                            <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Prodi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>