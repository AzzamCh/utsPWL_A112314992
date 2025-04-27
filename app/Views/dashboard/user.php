<?= view('layout/header') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 p-0">
      <?= view('layout/sidebar') ?>
    </div>
    <div class="col-md-10 mt-4">
      <div class="card">
        <div class="card-header">
          <h4><?= $title ?></h4>
        </div>
        <div class="card-body">
          <p>Halo <strong><?= $username ?></strong>, selamat datang di aplikasi galon.</p>
          <p>Role: <?= $role ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('layout/footer') ?>
