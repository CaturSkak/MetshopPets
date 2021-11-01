<?php include 'header.php'?>
<!doctype html>
<html lang="en">

<body class="theme-orange">


<div id="wrapper">


    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Daftar Produk / Hewan</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Produk</li>
                        <li class="breadcrumb-item active">Daftar Produk/Hewan</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-lg-16 col-md-16 col-sm-15">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Produk / Hewan</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                            <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>

                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Tindakan</a></li>
                                        <li><a href="javascript:void(0);">Tindakan Lain</a></li>
                                        <li><a href="javascript:void(0);">Lain-nya</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <li><a href="forms-basic.php" class="btn btn-sm btn-primary" title="">Tambah Produk / Hewan</a></li>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Jenis Hewan/Produk</th>
                                            <th>Rincian</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Anggora Asli</td>
                                            <td>Rp.5.740.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <a href="#/" class="btn btn-info action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" button type="button" class="btn btn-info"  title="Quickview"><i class="icon icon-info"></i></button></a>
                                            </td>
                                            <td>                                            

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Anggora Mix Persia</td>
                                            <td>Rp.4.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <a href="#/" class="btn btn-info action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" button type="button" class="btn btn-info"  title="Quickview"><i class="icon icon-info"></i></button></a>
                                            </td>
                                            <td>                                            

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                            <td>                                            
                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Persia Asli</td>
                                            <td>Rp.5.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <a href="#/" class="btn btn-info action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" button type="button" class="btn btn-info"  title="Quickview"><i class="icon icon-info"></i></button></a>
                                            </td>
                                            <td>                                            

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                            <td>                                            
                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Kucing</td>
                                            <td>
                                                Kucing Mainecoon</td>
                                            <td>Rp.18.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <a href="#/" class="btn btn-info action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" button type="button" class="btn btn-info"  title="Quickview"><i class="icon icon-info"></i></button></a>
                                            </td>
                                            <td>                                            

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                            <td>                                            
                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Chihuahua</td>
                                            <td>Rp.16.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <a href="#/" class="btn btn-info action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" button type="button" class="btn btn-info"  title="Quickview"><i class="icon icon-info"></i></button></a>
                                            </td>
                                            <td>                                            

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                            <td> 

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Shiba Inu</td>
                                            <td>Rp.6.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <a href="#/" class="btn btn-info action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" button type="button" class="btn btn-info"  title="Quickview"><i class="icon icon-info"></i></button></a>
                                            </td>
                                            <td>                                            

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                            <td>                                            
                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hewan Peliharaan</td>
                                            <td>
                                                Anjing</td>
                                            <td>
                                                Anjing Alaskan Malamute</td>
                                            <td>Rp.15.000.000</td>
                                            <td>1</td>
                                            <td><img class="fit-image" src="../assets/images/products/small-product/kucing.png" alt="Product" /></td>
                                            <td>
                                            <a href="#/" class="btn btn-info action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" button type="button" class="btn btn-info"  title="Quickview"><i class="icon icon-info"></i></button></a>
                                            </td>
                                            <td>                                            

                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>

                                                <button type="button"  class="btn btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                            <td>                                            
                                                <a href="forms-wizard.php" button type="button" class="btn btn-info"  title="Edit"><i class="fa fa-edit"></i></button></a>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         <div class="shop-top-bar-right">
                            <nav>
                            <center>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="shop-left-sidebar2.pph" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

           <!-- Modal Start  -->
   <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        
                        <div class="body">
                           

                            <h6>Deskripsi</h6>
                            <blockquote >
                                 <!-- SKU Start -->
                            <div class="sku mb-3">
                            <span>Kategori</span>
                                <span>Hewan Peliharaan</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                        <div class="product-inventroy mb-3">
                            <span class="inventroy-title"> <strong>Info :</strong></span>
                            <span class="inventory-varient">Tersedia</span>
                     
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p ><p>Kucing Persia Peaknose</p>
                        <p>Jantan</p>
                        <p>Umur 3-4 Bulan</p>
                        <p>No Kutu No Jamur</p>
                        <p>No Cacat</p>
                        <p>Obat Cacing Rutin</p>
                        <p>Linca Dan Pinter</p>
                        <p>Di Jamin Sehat, Sudah Vaksin</p>
                        <p>

Di Butuhkan Betina Jenis Kucing Persia Peaknose/Kucing Anggora/Kucing Persia Asli</p>


                        <p>Melayani Pengiriman Luar Kota Dan Dalam Kota</p>
                        <!-- Description End -->

                    </div>
                               
                    </blockquote>
                            
                            
                           
                       
                </div>
               

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->
<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->

<script src="../assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><!-- Bootstrap Colorpicker Js --> 
<script src="../assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script><!-- Input Mask Plugin Js --> 
<script src="../assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script><!-- Multi Select Plugin Js -->
<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script><!-- Bootstrap Tags Input Plugin Js --> 
<script src="../assets/vendor/nouislider/nouislider.js"></script><!-- noUISlider Plugin Js --> 
    
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/advanced-form-elements.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>
</html>

