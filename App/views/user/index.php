<?php
    require "../App/config/koneksi.php";

    $queryproduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahproduk = mysqli_num_rows($queryproduk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <title>Home</title>
</head>
<body style="background-color:#1c1e38" onload="imgitm()">
<div class="container">
    <div class="row mt-4">
        <div class="form">
            <form action="<?= BASEURL; ?>/user/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari item.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-danger type="submit" id="tombolCari">Cari</button>
                    <div class="col-lg-6 text-end">
                        <div class="logout">
                            <a href="<?= BASEURL; ?>/login/logout" onclick="return confirm('Anda Yakin?')" class="text-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <marquee behavior="scroll" direction="left">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
        <img src="<?=BASEURL;?>/img/Logo.png" alt="" style="width: 100px; height: auto;" hspace="40">
    </marquee>  <div class="container">
        <div class="row"  style="justify-content: space-between;">
        <?php foreach ($data['itm'] as $itm): ?>
            <div class="col-md-4">
                <div class="card my-5"  style="justify-content: space-between;">
                    <a>
                        <img src="<?= BASEURL .'/img/KomponenKeyboard/'.$itm['img'];  ?>" class="card-img-top" alt="" >
                    </a>
                    <div class="card-body mb-5">
                        <?php
                        if ($jumlahproduk == 0) {
                        ?>
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                        <?php
                        } else {
                            $id = mysqli_fetch_array($queryproduk);
                        ?>
                            <tr>
                                <b><?php echo $itm['Nama_Barang'] ?></b><br>
                                <b id="kdbrg"><?php echo $itm['Kategori'] ?></b><br>
                                <b><?php echo $itm['Harga'] ?></b><br>
                                <b>Stok:<?php echo $itm['Stok'] ?></b>
                                <!-- <td><?php echo $itm['desk'] ?></td> -->
                            </tr>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="mx-auto">
                        <a href="<?=BASEURL; ?>/user/produck/<?= $itm['Kode_Barang'] ?>"><button type="button" class="btn btn-danger btn-lg" >Detail</button></a>
                    </div>
                    <br>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
        </div>
    </div>
</div>
</div>

</body>
<br>
<br><footer class="footer" style="background-color:#7c1414">
<br>
<br>
<br><div class="logo text-center">
        <img src="img/Logo.png" alt="" width="200px" class="mr-3">
    <br>
    <br>
    <p>CREATE BY</p>
    <p>Lanang, Hitozz, Gala</p>
<br>
    <p> &copy; 2023 ID CORE. Hak Cipta Dilindungi NukWan.</p>
</div>
<br>
</footer>
</html>
