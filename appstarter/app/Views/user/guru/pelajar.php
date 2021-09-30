<?= $this->extend('user/templates/index'); ?>


<?= $this->section('page-content'); ?>
    <div class="wrapper">
        <div class="collapser">
            <?= $this->include('user/templates/topbar'); ?>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-2 left">
               <?= $this->include('user/templates/sidebar'); ?>
            </div>
            <div class="col-10" id="right">
            <main>
                <div class="container-fluid px-4">
                <div class="row">
                    <div class="col-8 heading">
                    <h3>Data Siswa</h3>
                    </div>
                    <div class="col-sm-4 search">
                    <form action="" method="post" class="form-group">
                        <div class="input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search..."
                            aria-describedby="button-addon2"
                        />
                        <button
                            class="btn btn-outline-secondary"
                            type="submit"
                            aria-describedby="button-addon2"
                        >
                            <span class="material-icons">search</span>
                        </button>
                        </div>
                    </form>
                    </div>
                </div>
                <?php if ($data_pelajar == null) : ?>
                  <h6 class="text-center">Data siswa belum ada</h6>
                    <?php else: ?>
                <table
                    style="width: 100%"
                    class="table table-borderless table-striped table-hover"
                >
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Perusahaan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Addons</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($data_pelajar as $pjr): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pjr['full_name']; ?></td>
                        <td><?= $pjr['nis']; ?></td>
                        <td><?= $pjr['nama_pt']; ?></td>
                        <td><?= $pjr['jenis_kelamin']; ?></td>
                        <td>
                        <a href="<?= base_url('detail/pelajar'); ?>/<?= $pjr['id_pelajar']; ?>">
                            <span class="badge bg-primary">Detail</span>
                        </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
                </div>
            </main>
            </div>
        </div>
        </div>
    </div>
<?= $this->endSection(); ?>