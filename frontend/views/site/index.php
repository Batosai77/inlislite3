<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Portal Aplikasi Inlis Lite';
?>


<div class="container">

    <!-- Header Section with Logo -->
    <header class="text-center mb-5">
        <?= Html::img(Url::to('@web/uploaded_files/aplikasi/inlislite.png'), ['alt' => 'Portal Aplikasi Inlis Lite', 'class' => 'portal-logo mx-auto']) ?>
        <p class="mt-4 fs-5 text-secondary">Your one-stop access to library services.</p>
    </header>

    <!-- Main Content: Menu grid -->
    <main>
        <div class="row g-4">

            <!-- Menu Group 1: Administration -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4 text-primary">Administrasi</h3>
                        <div class="d-grid gap-3">
                            <a class="btn btn-primary btn-lg" target="_blank" href="<?= Url::to(['/backend']) ?>">Back
                                Office</a>
                            <a class="btn btn-primary btn-lg" target="_blank"
                                href="<?= Url::to(['/bacaditempat']) ?>"><?= Yii::t('app', 'Baca di Tempat') ?></a>
                            <a class="btn btn-primary btn-lg" target="_blank"
                                href="<?= Url::to(['/pengembalianmandiri']) ?>"><?= Yii::t('app', 'Pengembalian Mandiri') ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Group 2: Public Access -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4 text-success">Akses Publik</h3>
                        <div class="d-grid gap-3">
                            <a class="btn btn-success btn-lg" target="_blank"
                                href="<?= Url::to(['/pendaftaran']) ?>"><?= Yii::t('app', 'Pendaftaran Anggota') ?></a>
                            <a class="btn btn-success btn-lg" target="_blank"
                                href="<?= Url::to(['/article']) ?>"><?= Yii::t('app', 'Artikel') ?></a>
                            <a class="btn btn-success btn-lg" target="_blank"
                                href="<?= Url::to(['/opac']) ?>"><?= Yii::t('app', 'OPAC') ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Group 3: Online Services -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4" style="color: #6f42c1;">Layanan Online</h3>
                        <div class="d-grid gap-3">
                            <a class="btn btn-lg text-white" style="background-color: #6f42c1;" target="_blank"
                                href="<?= Url::to(['/keanggotaan']) ?>"><?= Yii::t('app', 'Keanggotaan Online') ?></a>
                            <a class="btn btn-lg text-white" style="background-color: #6f42c1;" target="_blank"
                                href="<?= Url::to(['/digitalcollection']) ?>"><?= Yii::t('app', 'Koleksi Digital') ?></a>
                            <a class="btn btn-lg text-white" style="background-color: #6f42c1;" target="_blank"
                                href="<?= Url::to(['/statistik-perkembangan-perpustakaan']) ?>"><?= Yii::t('app', 'Statistik') ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Group 4: Interaction -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4 text-warning">Interaksi</h3>
                        <div class="d-grid gap-3">
                            <a class="btn btn-warning btn-lg" target="_blank"
                                href="<?= Url::to(['/guestbook']) ?>"><?= Yii::t('app', 'Buku Tamu') ?></a>
                            <a class="btn btn-warning btn-lg" target="_blank"
                                href="<?= Url::to(['/peminjamanmandiri']) ?>"><?= Yii::t('app', 'Peminjaman Mandiri') ?></a>
                            <a class="btn btn-warning btn-lg" target="_blank"
                                href="<?= Url::to(['/survey']) ?>"><?= Yii::t('app', 'Survey') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<div class="site-index">
    <center>
        <div class="mediumtron">
            <p>

            </p>

        </div>
    </center>
    <div class="body-content">
    </div>
</div>