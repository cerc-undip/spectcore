<div class="container" style="padding-top:150px">
    <div class="row">
        <div class="col-md-4">
            <center>
                <div class="product-item" style="height:250px; width:200px">
                    <div class="product">
                        <div class="product_image">
                            <br />
                            <img class="rounded" src="<?php echo base_url();?>assets/img/avatar.png">
                        </div>
                        <div class="product_info">
                            <br />
                        </div>
                    </div>
                </div>
                <div style="width:200px">
                    <br />
                    <form class="form-horizontal" action="<?= site_url('dashboard') ?>" method="post">
                        <div class="form-group">
                            <a href="<?= site_url('verify/user') ?>" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" >Daftar User</a>
                            <a href="<?= site_url('verify/project') ?>" class="btn gradient-45deg-indigo-light-blue white-font btn-block btn-flat" >Daftar Proyek</a>
                            <a href="<?= site_url('product/add') ?>" class="btn gradient-45deg-deep-purple-purple white-font btn-block btn-flat" >Tambah produk</a>
                        </div>
                    </form>
                </div>
            </center>
        </div>
        <div class="col-md-8">
            <div class="card card-body">
                <h4 class="card-title">&nbsp;Tambah Produk Baru</h4>
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="number" name="stok" class="form-control" placeholder="Stok" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea class="form-control" id="inputExperience" name="desk" placeholder="Deskripsi" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="file" class="form-control" placeholder="Foto" name="foto" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12">
                            <input type="submit" name="upload" class="btn gradient-45deg-deep-purple-purple rounded white-font" value="Tambah">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(function () {
    <?php if($message){ ?>

    swal("", "<?= $message; ?>", "<?= $type; ?>");

    <?php } ?>
});
</script>