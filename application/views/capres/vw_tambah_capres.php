<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Calon Presiden
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('capres/upload'); ?>" method="POST">
                            <div class="form-group mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap"
                                    placeholder="Nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal_sekolah">Umur</label>
                                <input type="text" name="umur" class="form-control" id="umur"
                                    placeholder="Umur">
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal">Asal</label>
                                <select name="asal" id="asal" class="form-control">
                                    <option value="" selected>Asal</option>
                                    <option value="Aceh">Aceh</option>
                                    <option value="Sumut">Sumatera Utara</option>
                                    <option value="sumbar">Sumatera Barat</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Sumsel">Sumatera Selatan</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="BaBel">Kep. Bangka Belitung</option>
                                    <option value="kepRiau">Kepulauan Riau</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jabar">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jateng">Jawa Tengah</option>
                                    <option value="Yogyakarta">Yogyakarta</option>
                                    <option value="Jatim">Jawa Timur</option>
                                    <option value="Kalbar">Kalimantan Barat</option>
                                    <option value="Kalteng">Kalimantan Tengah</option>
                                    <option value="Kalsel">Kalimantan Selatan</option>
                                    <option value="Kaltim">Kalimantan Timur</option>
                                    <option value="Kaltra">Kalimantan Utara</option>
                                    <option value="Bali">Bali</option>
                                    <option value="NTT">Nusa Tenggara Timur</option>
                                    <option value="NTB">Nusa Tenggara Barat</option>
                                    <option value="Sulut">Sulawesi Utara</option>
                                    <option value="Sulteng">Sulawesi Tengah</option>
                                    <option value="Sulsel">Sulawesi Selatan</option>
                                    <option value="Sultengg">Sulawesi Tenggara</option>
                                    <option value="Sulbar">Sulawesi Barat</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Maluku Utara">Maluku Utara</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Papua Barat">Papua Barat</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Partai</label>
                                <input type="text" name="partai" class="form-control" id="partai" placeholder="Partai">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prodi">Riwayat Penyakit</label>
                                <input type="text" name="riwayat_penyakit" class="form-control" id="riwayat_penyakit" placeholder="Riwayat Penyakit">
                            </div>
                            <a href="<?= base_url('capres') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                Mahasiswa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>