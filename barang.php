<?php
require 'db.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="tampilan/images/favicon_1.ico">

        <title>UTS-SUKMA FADLY NURLANA</title>

        <!-- Base Css Files -->
        <link href="tampilan/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="tampilan/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="tampilan/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="tampilan/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="tampilan/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="tampilan/css/waves-effect.css" rel="stylesheet">

        <!-- Plugins css -->
        <link href="tampilan/assets/modal-effect/css/component.css" rel="stylesheet">

        <!-- DataTables -->
        <link href="tampilan/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

        <!-- Custom Files -->
        <link href="tampilan/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="tampilan/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="tampilan/js/modernizr.min.js"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="md md-terrain"></i> <span>UTS </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="tampilan/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#"  data-toggle="dropdown" aria-expanded="false">Sukma Fadly</a>
                                
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect"><i class="md md-home"></i><span> Beranda </span></a>
                            </li>
                            <li>
                                <a href="barang.php" class="waves-effect active"><i class="md md-redeem"></i><span> Data Barang </span></a>
                            </li>
                            <li>
                                <a href="grub.php" class="waves-effect"><i class="md md-view-list"></i><span> Grub Barang </span></a>
                            </li>
                            <li>
                                <a href="satuan.php" class="waves-effect"><i class="md md-poll"></i><span> Satuan </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">UTS</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Barang</a></li>
                                    <li class="active">Data Barang</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Item</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
<?php
if(isset($_POST["addbarang"])){
    $id = addslashes($_POST["id"]);
    $nama = $_POST["nama"];
    $barcode = $_POST["barcode"];
    $grub = addslashes($_POST["grub"]);
    $satuan = $_POST["satuan"];
    $hpp = $_POST["hpp"];
    $tgl = date("Y-m-d H:i:s");
    $masuk = mysqli_query($konek,"INSERT INTO item VALUES('$id','$grub','$barcode','$nama','$satuan','$hpp','1','0','$tgl','0','$tgl')");
    if($masuk){
        echo "
            <script>
                alert('Item Berhasil Di Tambah');document.location.href='barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Item Gagal Di Tambah');document.location.href='barang.php';
            </script>
        ";
    }
}
if(isset($_POST["editbarang"])){
    $id = addslashes($_POST["id"]);
    $nama = $_POST["nama"];
    $barcode = $_POST["barcode"];
    $grub = addslashes($_POST["grub"]);
    $satuan = $_POST["satuan"];
    $hpp = $_POST["hpp"];
    $tgl = date("Y-m-d H:i:s");
    $ubah = mysqli_query($konek,"UPDATE item SET item_grp_id='$grub',barcode='$barcode',nama='$nama',satuan_id='$satuan',hpp='$hpp',upd_date='$tgl' WHERE id='$id'");
    if($ubah){
        echo "
            <script>
                alert('Item Berhasil Di Ubah');document.location.href='barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Item Gagal Di Ubah');document.location.href='barang.php';
            </script>
        ";
    }
}
if(isset($_GET["hapus"])){
    $hapus = addslashes($_GET["hapus"]);
    $del = mysqli_query($konek,"DELETE FROM item WHERE id='$hapus'");
    if($del){
        echo "
            <script>
                alert('Item Berhasil Di Hapus');document.location.href='barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Item Gagal Di Hapus');document.location.href='barang.php';
            </script>
        ";
    }
}

?>
                                            <!-- modal header -->
                                            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="md md-add"></span></button>
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myLargeModalLabel">Input Item</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form-horizontal" role="form" method="POST" action="">
                                                            <div class="form-group">
                                                                <label for="id" class="col-sm-3 control-label">ID</label>
                                                                <div class="col-sm-9">
                                                                <?php
                                                                    $nourut = mysqli_query($konek,"SELECT * FROM item ORDER BY id DESC LIMIT 1");
                                                                    $dnomor = mysqli_fetch_assoc($nourut);
                                                                    $potong = substr($dnomor["id"],4);
                                                                    if($potong<100){
                                                                        $idurut = $potong + 1;
                                                                        $idbaru = "01010".$idurut;
                                                                    } else {
                                                                        $idurut = $potong + 1;
                                                                        $idbaru = "0101".$idurut;
                                                                    }
                                                                ?>
                                                                <input type="text" class="form-control" value="<?= $idbaru; ?>" disabled>
                                                                <input type="hidden" name="id" value="<?= $idbaru; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputbarcode3" class="col-sm-3 control-label">Barcode</label>
                                                                <div class="col-sm-9">
                                                                <input type="number" name="barcode" class="form-control" id="inputbarcode3" placeholder="Barcode" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama" class="col-sm-3 control-label">Nama</label>
                                                                <div class="col-sm-9">
                                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama" class="col-sm-3 control-label">Grub Item</label>
                                                                <div class="col-sm-9">
                                                                    <select name="grub" class="form-control" id="">
                                                                        <?php
                                                                            $data_grub = mysqli_query($konek,"SELECT * FROM item_grp ORDER BY nama ASC");
                                                                            while($grub = mysqli_fetch_assoc($data_grub)){
                                                                                echo "<option value='$grub[id]'> $grub[id] | $grub[nama]</option>";
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama" class="col-sm-3 control-label">SATUAN</label>
                                                                <div class="col-sm-9">
                                                                    <select name="satuan" class="form-control" id="">
                                                                        <?php
                                                                            $data_satuan = mysqli_query($konek,"SELECT * FROM satuan ORDER BY nama ASC");
                                                                            while($satuan= mysqli_fetch_assoc($data_satuan)){
                                                                                echo "<option value='$satuan[nama]'> $satuan[nama]</option>";
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputhpp3" class="col-sm-3 control-label">hpp</label>
                                                                <div class="col-sm-9">
                                                                <input type="number" name="hpp" class="form-control" id="inputhpp3" placeholder="hpp" required>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group m-b-0">
                                                                <div class="col-sm-offset-3 col-sm-9">
                                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="addbarang">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                            <br><br>
                                            <!-- tutup modal awal -->
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Barcode</th>
                                                            <th>Nama</th>
                                                            <th>Satuan</th>
                                                            <th>HPP </th>
                                                            <th>crt_date</th>
                                                            <th>upd_date</th>
                                                            <th>OPSI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $data_barang = mysqli_query($konek,"SELECT * FROM item ORDER BY nama ASC");
                                                    while($barang = mysqli_fetch_assoc($data_barang)){
                                                    ?>
                                                        <tr>
                                                            <td><?= $barang["id"]; ?></td>
                                                            <td><?= $barang["barcode"]; ?></td>
                                                            <td><?= $barang["nama"]; ?></td>
                                                            <td><?= $barang["satuan"]; ?></td>
                                                            <td><?= $barang["hpp"]; ?></td>
                                                            <td><?= $barang["crt_date"]; ?></td>
                                                            <td><?= $barang["upd_date"]; ?></td>
                                                            <td>
                                                                <a href="barang.php?hapus=<?= $barang["id"]; ?>" onClick="return confirm('Anda Yakin akan Menghapus data ini ?');" class="btn-sm btn-danger waves-effect waves-light"><span class="md md-delete"></span></a> &nbsp;&nbsp;
                                                                <button class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target=".edit<?= $barang["id"]; ?>"><span class="md md-edit"></span></button>
                                                                <!--  Modal content for the above example -->
                                                                <div class="modal fade edit<?= $barang["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 class="modal-title" id="myLargeModalLabel">Edit <?= $barang["nama"]; ?></h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                            <?php
                                                                                $edit_barang = mysqli_query($konek,"SELECT * FROM item WHERE id='$barang[id]'");
                                                                                $edit = mysqli_fetch_assoc($edit_barang);
                                                                            ?>
                                                                                <form class="form-horizontal" role="form" method="POST" action="">
                                                                                        <input type="hidden" name="id" value="<?= $edit["id"]; ?>">
                                                                                        
                                                                                    <div class="form-group">
                                                                                        <label for="iddata" class="col-sm-3 control-label">ID</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input type="text" value="<?= $edit["id"]; ?>" class="form-control" id="iddata"  disabled>
                                                                                        </div>
                                                                                    </div><br><br>
                                                                                    <div class="form-group">
                                                                                        <label for="inputbarcode3" class="col-sm-3 control-label">Barcode</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input type="number" value="<?= $edit["barcode"]; ?>" name="barcode" class="form-control" id="inputbarcode3" placeholder="Barcode" required>
                                                                                        </div>
                                                                                    </div><br><br>
                                                                                    <div class="form-group">
                                                                                        <label for="nama" class="col-sm-3 control-label">Nama</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input type="text" value="<?= $edit["nama"]; ?>" name="nama" class="form-control" id="nama" placeholder="Nama Barang" required>
                                                                                        </div>
                                                                                    </div><br><br>
                                                                                    <div class="form-group">
                                                                                        <label for="nama" class="col-sm-3 control-label">Grub Item</label>
                                                                                        <div class="col-sm-9">
                                                                                            <select name="grub" class="form-control" id="">
                                                                                                <option value="<?= $edit["item_grp_id"]; ?>"><?= $edit["item_grp_id"]; ?></option>
                                                                                                <?php
                                                                                                    $data_grub1 = mysqli_query($konek,"SELECT * FROM item_grp ORDER BY nama ASC");
                                                                                                    while($grub1 = mysqli_fetch_assoc($data_grub1)){
                                                                                                        echo "<option value='$grub1[id]'> $grub1[id] | $grub1[nama]</option>";
                                                                                                    }
                                                                                                ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div><br><br>
                                                                                    <div class="form-group">
                                                                                        <label for="nama" class="col-sm-3 control-label">SATUAN</label>
                                                                                        <div class="col-sm-9">
                                                                                            <select name="satuan" class="form-control" id="">
                                                                                                <option value="<?= $edit["satuan_id"]; ?>"><?= $edit["satuan_id"]; ?></option>
                                                                                                <?php
                                                                                                    $data_satuan1 = mysqli_query($konek,"SELECT * FROM satuan ORDER BY nama ASC");
                                                                                                    while($satuan1= mysqli_fetch_assoc($data_satuan1)){
                                                                                                        echo "<option value='$satuan1[nama]'> $satuan1[nama]</option>";
                                                                                                    }
                                                                                                ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div><br><br>
                                                                                    <div class="form-group">
                                                                                        <label for="inputhpp3" class="col-sm-3 control-label">hpp</label>
                                                                                        <div class="col-sm-9">
                                                                                        <input type="number" value="<?= $edit["hpp"]; ?>" name="hpp" class="form-control" id="inputhpp3" placeholder="hpp" required>
                                                                                        </div>
                                                                                    </div><br><br>
                                                                                    
                                                                                    <div class="form-group m-b-0">
                                                                                        <div class="col-sm-offset-3 col-sm-9">
                                                                                        <button type="submit" class="btn btn-info waves-effect waves-light" name="editbarang">Ubah</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div>
                                                                <!-- /.modal -->
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="tampilan/name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="tampilan/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="tampilan/js/jquery.min.js"></script>
        <script src="tampilan/js/bootstrap.min.js"></script>
        <script src="tampilan/js/waves.js"></script>
        <script src="tampilan/js/wow.min.js"></script>
        <script src="tampilan/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="tampilan/js/jquery.scrollTo.min.js"></script>
        <script src="tampilan/assets/jquery-detectmobile/detect.js"></script>
        <script src="tampilan/assets/fastclick/fastclick.js"></script>
        <script src="tampilan/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="tampilan/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- Modal-Effect -->
        <script src="tampilan/assets/modal-effect/js/classie.js"></script>
        <script src="tampilan/assets/modal-effect/js/modalEffects.js"></script>

        <!-- CUSTOM JS -->
        <script src="tampilan/js/jquery.app.js"></script>

        <script src="tampilan/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="tampilan/assets/datatables/dataTables.bootstrap.js"></script>




        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

	</body>
</html>