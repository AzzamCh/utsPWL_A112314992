<?= view('layout/header') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 p-0">
      <?= view('layout/sidebar') ?>
    </div>
    <div class="col-md-10 mt-4">
      <div class="card">
        <div class="card-header">
          <h4>Pesan Galon</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="jumlah" class="form-label">Jumlah Galon</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('layout/footer') ?>
