<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <title>Admin Page</title>
</head>
<body style="background-color: #1C1E38">
<div class="container-fluid ">
    <div class="row flex-nowrap">
        <div class="col col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
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
                <ul>
                    <li>
                        <a href="<?= BASEURL; ?>/login/logout" onclick="return confirm('Anda Yakin?')">logout</a>
                    </li>
                </ul>	
            </div>
        </div>
		<div class="col py-3">