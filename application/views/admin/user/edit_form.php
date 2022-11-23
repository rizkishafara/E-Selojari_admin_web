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
                        <h1 class="mt-4">Data User</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        
                        <!--Content-->
                        
                        <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>

                        <div class="card mb-3">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/admin/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>
                            <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $user->user_id?>" />
                                    <div class="form-group">
                                        <label for="user_id">Id*</label>
                                        <input class="form-control <?php echo form_error('user_id') ? 'is-invalid':'' ?>"
                                        type="text" name="user_id" placeholder="Id User" value="<?php echo $user->user_id ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('user_id') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Nama*</label>
                                        <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                                        type="text" name="name" min="0" placeholder="Nama User" value="<?php echo $user->name ?>"/>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('name') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username*</label>
                                        <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                        type="text" name="username" min="0" placeholder="Username" value="<?php echo $user->username ?>"/>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password*</label>
                                        <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                        type="password" name="password" min="0" placeholder="Password" value="<?php echo $user->password ?>"/>
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
