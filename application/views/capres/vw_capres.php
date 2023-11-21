<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="h3 mb-4 text-gray-800">
                <?= $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>capres/tambah" class="btn btn-info mb-2">Tambah
                        Mahasiswa</a></div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Lengkap</td>
                                <td>NIK</td>
                                <td>Umur</td>
                                <td>Asal</td>
                                <td>Partai</td>
                                <td>Riwayat Penyakit</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($capres as $c): ?>
                                <tr>
                                    <td> <?= $i; ?></td>
                                    <td> <?= $c['nama_lengkap']; ?></td>
                                    <td> <?= $c['nik']; ?></td>
                                    <td> <?= $c['umur']; ?></td>
                                    <td> <?= $c['asal']; ?></td>
                                    <td> <?= $c['partai']; ?></td>
                                    <td> <?= $c['riwayat_penyakit']; ?></td>
                                    <td>
                                        <a href="<?= base_url('capres/hapus/') . $c['id'] ?>" class="badge bg-danger">Hapus</a>
                                        <a href="<?= base_url('capres/edit/') . $c['id'] ?>" class="badge bg-warning">Edit</a>
                                        <a href="<?= base_url('capres/detail/') . $c['id'] ?>"
                                            class="badge bg-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>