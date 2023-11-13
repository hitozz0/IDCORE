<form class="form-inline " action="<?= BASEURL; ?>/home/cari" method="post">
  			<input class="form-control form-control-sm ml-3 w-50 align-middle mx-auto" type="text" placeholder="Search" aria-label="Search" name="keyword" id="keyword" autocomplete="off">
</form>
<br><br>


<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary tampilModalTambah" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Item Baru
            </button>
			 <br><br>
			 <h2 class="text-white">LIST STOCK BARANG</h2>	
                <ul class="list-group">                
                    <?php foreach ($data['itm'] as $itm): ?>
                    <li class="list-group-item ">
						<?= $itm['Kode_Barang']; ?>
						   |
                        <?= $itm['Nama_Barang']; ?>
						
                        <a href="<?= BASEURL; ?>/home/hapus/<?= $itm['Kode_Barang']; ?>" class="badge bg-danger float-end ms-2" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/home/edit/<?= $itm['Kode_Barang']; ?>" class="badge bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $itm['Kode_Barang']; ?>">edit</a>
                        <a href="<?= BASEURL; ?>/home/detail/<?= $itm['Kode_Barang']; ?>" class="badge bg-primary float-end ms-5">detail</a>
						<a href="" class="badge bg-secondary float-end me-5"><?= $itm['Stok']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div> 




<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judulModal">Tambah Item Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?= BASEURL; ?>/home/tambah" method="post" enctype="multipart/form-data">
                        <!-- <input type="hidden" name="Kode_Barang" id="Kode_Barang"> -->
                <div class="mb-3">
                    <label for="Nama_Barang" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" required>
                </div>
                <div class="mb-3">
                    <label for="Stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="Stok" name="Stok" required>
                </div>
                <div class="mb-3">
                    <label for="Kode_Barang" class="form-label">Kode Barang</label>
                    <input type="number" class="form-control" id="Kode_Barang" name="Kode_Barang" required>
                </div>
				<div class="mb-3">
                    <label for="Harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="Harga" name="Harga" required>
                </div>
                <div class="form-group">
                    <label for="Kategori">Kategori</label>
                    <select class="form-control" id="Kategori" name="Kategori">
                        <option value="100%">100%</option>
                        <option value="75%">75%</option>
                        <option value="TKL">TKL</option>
						<option value="65%">65%</option>
						<option value="60%">60%</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="desk" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="desk" name="desk" required>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">gambar</label>
                    <input type="file" class="form-control" id="img" name="img" >
                </div>
                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>
        </div>
    </div>
</div> 