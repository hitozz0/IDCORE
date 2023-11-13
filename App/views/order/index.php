<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Page</title>
</head>
<body style="background-color: #1C1E38">
<div class="container-fluid ">
    <div class="row flex-nowrap">
        <div class="col col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">
						<div class="display-1">
							<h1 >IDCORE</h1>
							<h5 >admin site</h5>
						</div>
					</span>
                </a>
				<br><br><br>
				<br><br>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item text-white">
                        <a href="<?= BASEURL; ?>/0 " class="nav-link align-middle px-0 text-dark">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">STOCK BARANG</span>
                        </a>
						<a href="<?= BASEURL; ?>/lp" class="nav-link align-middle px-0 text-dark">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">LIST PENGGUNA</span>
                        </a>
						<a href="<?= BASEURL; ?>/order" class="nav-link align-middle px-0 text-dark">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">PEMESANAN</span>
                        </a>
                    </li>
				</ul>	
            </div>
        </div>
<!-- konten -->
		<div class="col py-3">
            <br><br><br>
            <h2 class="text-white">Pemesanan atau Pembelian Barang</h2>
            <div class="col-lg-6">
            <?php Flasher::flash(); ?>
            </div>
            <form action="<?= BASEURL; ?>/order/beli" method="post">
                    <div class="mb-3">
                        <label for="Nama_Barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="Kode_Barang" class="form-label">Kode Barang</label>
                        <input type="number" class="form-control" id="Kode_Barang" name="Kode_Barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="Stok" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="Stok" name="Stok" required>
                    </div>
                    <br><br><br>
                    <button type="submit" class="btn btn-primary">Input</button>
            </form>
        </div>
        
<!-- END OF KONTEN -->
        <div class="col-2 bg-white">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">
						<div class="display-1">
							<h5 class="mt-5">list item terjual</h5>
						</div>
					</span>
                </a>

            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
<style>
	body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  background-color: #1C1E38;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
</style>
</html>
