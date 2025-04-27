<div class="bg-light border-end" id="sidebar-wrapper">
  <div class="sidebar-heading text-center py-4">
    <strong><?= ucfirst(session('role')) ?> Menu</strong>
  </div>
  <div class="list-group list-group-flush px-2">
    <a href="/<?= session('role') ?>" class="list-group-item list-group-item-action">Dashboard</a>

    <?php if (session('role') === 'admin'): ?>
      <a href="/admin/user" class="list-group-item list-group-item-action">Kelola User</a>
    <?php elseif (session('role') === 'user'): ?>
      <a href="/user/pesan" class="list-group-item list-group-item-action">Pesan Galon</a>
    <?php endif; ?>
  </div>
</div>
