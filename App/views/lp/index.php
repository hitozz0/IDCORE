<form class="form-inline ">
  			<input class="form-control form-control-sm ml-3 w-50 align-middle mx-auto" type="text" placeholder="Search" aria-label="Search">
</form>
<br><br>


<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
			 <br><br>	
             <h2 class="text-white">LIST PENGGUNA</h2>
                <ul class="list-group">                
                    <?php foreach ($data['usr'] as $usr): ?>
                    <li class="list-group-item ">
						<?= $usr['ID_user']; ?>
						   |
                        <?= $usr['username']; ?>
						
                        <a href="<?= BASEURL; ?>/lp/hapus/<?= $usr['ID_user']; ?>" class="badge bg-danger float-end ms-2" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/lp/detail/<?= $usr['ID_user']; ?>" class="badge bg-primary float-end ms-2">detail</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div> 