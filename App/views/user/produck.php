
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>Produk</title>
</head>
<body style="background-color:#1c1e38" onload="item(this.value)">
    <div class="container">
        <a href="<?=BASEURL;?>/user">
            <img src="<?=BASEURL;?>/img/Logo.png" alt="ft-itm" width="200px">
        </a>
    </div>
<div class="container text-center mt-2"> 
<figure class="figure">
    <div class="figure-content">
        <img src="<?= BASEURL .'/img/KomponenKeyboard/'.$data['itm']['img'];  ?>" class="figure-img img-fluid rounded foto-item" alt="ft-itm" width="600px">
    </div>
    <figcaption class="figure-caption">
        <h1><b class="text-white" id="nama-item"><?= $data['itm']['Nama_Barang'] ?></b><br></h1>
        <p class="text-white"><?= $data['itm']['Kategori']; ?></p>
        <p class="text-white"><?= $data['itm']['Harga']; ?></p>
        <p class="text-white"><?= $data['itm']['desk']; ?></p>
    </figcaption>
</figure>
</div>
</div>
</div>
</div>
<script src="<?= BASEURL; ?>/js/script.js"></script>
</body>
<br>
<br><footer class="footer" style="background-color:#7c1414">
<br><div class="logo text-center">
    <img src="<?=BASEURL;?>/img/Logo.png" alt="" width="200px" class="mr-3">
    <br>
    <br>
    <p class="text-white">CREATE BY</p>
    <p class="text-white">Lanang, Hitozz, Gala</p>
<br>
    <p class="text-white"> &copy; 2023 ID CORE. Hak Cipta Dilindungi NukWan.</p>
</div>
<br>
</footer>
</html>