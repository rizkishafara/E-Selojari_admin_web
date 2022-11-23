<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
                <div class="sb-sidenav-menu-heading">Table</div>
                <a class="nav-link" href="<?php echo base_url('index.php/admin/Admin') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Admin
                </a>
                <a class="nav-link" href="<?php echo base_url('index.php/admin/Konsumen') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Konsumen
                </a>
                <a class="nav-link" href="<?php echo base_url('index.php/admin/Produk') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Produk
                </a>
                <a class="nav-link" href="<?php echo base_url('index.php/admin/Penjualan') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Penjualan Global
                </a>
                <a class="nav-link" href="<?php echo base_url('index.php/admin/Periodik') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Penjualan Periodik
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo ucfirst($this->session->userdata('username')); ?>
        </div>
    </nav>
</div>