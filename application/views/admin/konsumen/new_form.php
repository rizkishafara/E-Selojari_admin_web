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
                        <h1 class="mt-4">Data Konsumen</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        
                        <!--Content-->
                        
                        <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>

                        <div class="card mb-3">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/konsumen/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo site_url('admin/konsumen/add') ?>" method="post" enctype="multipart/form-data" >
                                
                                    <div class="form-group">
                                        <label for="nm_kons">Nama*</label>
                                        <input class="form-control <?php echo form_error('nm_kons') ? 'is-invalid':'' ?>"
                                        type="text" name="nm_kons" min="0" placeholder="Nama Konsumen" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nm_kons') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alm_kons">Alamat*</label>
                                        <input class="form-control <?php echo form_error('alm_kons') ? 'is-invalid':'' ?>"
                                        type="text" name="alm_kons" min="0" placeholder="Alamat" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alm_kons') ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="kota_kons">Kota*</label>
                                        <input class="form-control <?php echo form_error('kota_kons') ? 'is-invalid':'' ?>"
                                        type="text" name="kota_kons" min="0" placeholder="Kota" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kota_kons') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="kd_pos">Kode Pos*</label>
                                        <input class="form-control <?php echo form_error('kd_pos') ? 'is-invalid':'' ?>"
                                        type="number" name="kd_pos" min="0" placeholder="Kode Pos" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kd_pos') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Telephone*</label>
                                        <input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
                                        type="text" name="phone" min="0" placeholder="Telephone" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('phone') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email*</label>
                                        <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                        type="text" name="email" min="0" placeholder="Email" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username*</label>
                                        <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                        type="text" name="username" min="0" placeholder="Username" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password*</label>
                                        <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                        type="password" name="password" min="0" placeholder="Password" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
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
