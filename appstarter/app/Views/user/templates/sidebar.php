
<nav id="sidebar">
                    <div class="profile item">
                    <img
                        src="<?= base_url() ?>/assets/img/<?= user()->user_image; ?>"
                        alt="profile"
                        style="width: 100px"
                    />
                    <h4><?= user()->username; ?></h4>
                    </div>
                    <?php if(in_groups('admin')):?>
                        <div class="nav-link item">
                        <a href="<?= base_url('admin/pelajar'); ?>" class="<?= $pelajar; ?>">
                            <span class="material-icons">
                                groups
                            </span>
                            <p>Pelajar</p>
                        </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('admin/laporan'); ?>" class="<?= $laporan; ?>">
                                <span class="material-icons">assessment</span>
                                <p>Laporan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('admin/sekolah'); ?>" class="<?= $sekolah; ?>">
                                <span class="material-icons">school</span>
                                <p>Sekolah</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('admin/guru'); ?>" class="<?= $guru; ?>">
                                <span class="material-icons">supervisor_account</span>
                                <p>Guru</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('admin/pengaturan'); ?>" class="<?= $pengaturan; ?>">
                                <span class="material-icons">manage_accounts</span>
                                <p>Pengaturan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <div>
                                <a href="<?= base_url('logout') ?>">
                                    <span class="material-icons">logout</span>
                                    <p>Sign Out</p>
                                </a>
                            </div>
                        </div>
                        <?php elseif(in_groups('pelajar')): ?>
                        <div class="nav-link item">
                            <a href="<?= base_url('pelajar/insert'); ?>" class="<?= $insert; ?>">
                                <span class="material-icons">add_chart</span>
                                <p>Tambah Laporan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('pelajar/laporan'); ?>" class="<?= $laporan; ?>">
                                <span class="material-icons">assessment</span>
                                <p>Laporan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('pelajar/pengaturan'); ?>" class="<?= $pengaturan; ?>">
                                <span class="material-icons">manage_accounts</span>
                                <p>Pengaturan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <div class="bottom">
                                <a href="<?= base_url('logout') ?>">
                                    <span class="material-icons">logout</span>
                                    <p>Sign Out</p>
                                </a>
                            </div>
                        </div>
                        <?php elseif(in_groups('guru')) : ?>
                        <div class="nav-link item">
                            <a href="<?= base_url('guru/pelajar'); ?>" class="<?= $pelajar; ?>">
                                <span class="material-icons">groups</span>
                                <p>Pelajar</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('guru/laporan'); ?>" class="<?= $laporan; ?>">
                                <span class="material-icons">assessment</span>
                                <p>Laporan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('guru/pengaturan'); ?>" class="<?= $pengaturan; ?>">
                                <span class="material-icons">manage_accounts</span>
                                <p>Pengaturan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <div class="bottom">
                                <a href="<?= base_url('logout') ?>">
                                    <span class="material-icons">logout</span>
                                    <p>Sign Out</p>
                                </a>
                            </div>
                        </div>
                        <?php elseif(in_groups('pembimbing')) : ?>
                        <div class="nav-link item">
                            <a href="<?= base_url('pembimbing/pelajar'); ?>" class="<?= $pelajar; ?>">
                                <span class="material-icons">groups</span>
                                <p>Pelajar</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('pembimbing/laporan'); ?>" class="<?= $laporan; ?>">
                                <span class="material-icons">assessment</span>
                                <p>Laporan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <a href="<?= base_url('pembimbing/pengaturan'); ?>" class="<?= $pengaturan; ?>">
                                <span class="material-icons">manage_accounts</span>
                                <p>Pengaturan</p>
                            </a>
                        </div>
                        <div class="nav-link item">
                            <div class="bottom">
                                <a href="<?= base_url('logout') ?>">
                                    <span class="material-icons">logout</span>
                                    <p>Sign Out</p>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
</nav>