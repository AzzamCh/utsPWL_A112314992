<?= view('layout/header') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 p-0">
      <?= view('layout/sidebar') ?>
    </div>
    <div class="col-md-10 mt-4">
      <div class="card">
        <div class="card-header">
          <h4>Kelola User</h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user): ?>
                <tr>
                  <td><?= $user['id'] ?></td>
                  <td><?= $user['username'] ?></td>
                  <td><?= $user['role'] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('layout/footer') ?>
