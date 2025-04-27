<h2>Selamat Datang di Galon Delivery</h2>
<p>Kami menyediakan layanan antar galon ke rumah Anda dengan cepat dan terpercaya.</p>

<form method="post" action="<?= base_url('simpan-nama') ?>">
    <label>Nama Anda:</label><br>
    <input type="text" name="nama" required>
    <button type="submit">Simpan</button>
</form>

<?php if(session()->get('nama')): ?>
    <p>Halo, <?= session()->get('nama') ?>! Terima kasih sudah mengunjungi kami.</p>
<?php endif; ?>
