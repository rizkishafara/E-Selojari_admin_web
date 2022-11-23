<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Produk</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        
                        <!--Content-->
                        
                        <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>

                        <div class="card mb-3">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/produk/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo site_url('admin/produk/add') ?>" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label for="kd_brg">Kode*</label>
                                        <input class="form-control <?php echo form_error('kd_brg') ? 'is-invalid':'' ?>"
                                        type="text" name="kd_brg" placeholder="Kode Barang" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kd_brg') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nm_brg">Nama*</label>
                                        <input class="form-control <?php echo form_error('nm_brg') ? 'is-invalid':'' ?>"
                                        type="text" name="nm_brg" min="0" placeholder="Nama Barang" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nm_brg') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="satuan">Satuan*</label>
                                        <input class="form-control <?php echo form_error('satuan') ? 'is-invalid':'' ?>"
                                        type="text" name="satuan" min="0" placeholder="Satuan Barang" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('satuan') ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="harga">Harga*</label>
                                        <input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
                                        type="number" name="harga" min="0" placeholder="Harga Barang" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('harga') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="harga_beli">Harga Beli*</label>
                                        <input class="form-control <?php echo form_error('harga_beli') ? 'is-invalid':'' ?>"
                                        type="number" name="harga_beli" min="0" placeholder="Harga Beli" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('harga_beli') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="stok">Stok*</label>
                                        <input class="form-control <?php echo form_error('stok') ? 'is-invalid':'' ?>"
                                        type="number" name="stok" min="0" placeholder="Stok Barang" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('stok') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="stok_min">Stok Minimal*</label>
                                        <input class="form-control <?php echo form_error('stok_min') ? 'is-invalid':'' ?>"
                                        type="number" name="stok_min" min="0" placeholder="Stok Minimal" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('stok_min') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gambar">Photo</label>
                                        <input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
                                        type="file" name="gambar" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('gambar') ?>
                                        </div>
                                    </div>
                                    <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                </form>

                            </div>

                            <div class="card-footer small text-muted">
                                * required fields
                            </div>


                        </div>
                        
                        <!--Content-->

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                <?php $this->load->view("admin/_partials/footer.php") ?>
                </footer>
            </div>
        </div>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>
