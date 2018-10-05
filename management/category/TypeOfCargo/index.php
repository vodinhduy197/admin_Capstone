<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/templates/admin/inc/left_bar.php';
?>
<div id="right-panel" class="right-panel">
    <!-- Right Panel -->
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/admin/templates/admin/inc/header.php';
    ?><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Quản lý</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Quản lý</a></li>
                        <li class="active">Loại hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Loại hàng</strong>
                        </div>
                        <div class="card-body ">
                            <button type="button" class="border rounded border-success btn btn-success btn-sm" data-toggle="modal" data-target="#insert"><i class="menu-icon fa fa-plus-circle"></i> Thêm loại hàng</button>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tên loại hàng</th>
                                    <th>Mô tả</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/management/category/TypeOfCargo/insert.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/management/category/TypeOfCargo/edit.php';

?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/templates/admin/inc/footer.php';
?>


<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>


</body>
</html>
