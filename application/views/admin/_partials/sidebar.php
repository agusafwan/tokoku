<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/products/add') ?>">
            <i class="fa fa-fw fa-cart-plus"></i>
            <span>Tambah Product</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/products') ?>">
            <i class="fas fa-fw fa-cubes"></i>
            <span>Daftar Product</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/kasir') ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Kasir</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>LogOut</span></a>
    </li>
</ul>
