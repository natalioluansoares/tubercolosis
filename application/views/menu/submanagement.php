     

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="card m-b-30">
                            <div class="card-body">
                                <h4 class="mt-2"><?=$title; ?></h4>
                                <p class="text-muted m-b-30 font-14">Data Ini Hanya Digunakan Untuk Menginput Data Registrasi</p>
                            <div class="table-rep-plugin">
                                    <div class="table-responsive b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-bordered table-striped">
                                            <thead class="table-primary">
                                            <tr>
                                                <th>Company</th>
                                                <th data-priority="1">Menu</th>
                                                <th data-priority="1">Title</th>
                                                <th data-priority="1">Url</th>
                                                <th data-priority="1">Active</th>
                                                <th data-priority="6" class="tabledit-delete-button btn btn-sm btn-info text-center"><i class="fa fa-cog "></i></th>
                                                <th data-priority="6" class="tabledit-delete-button btn btn-sm btn-info text-center"><i class="fa fa-search "></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $no=1; foreach($submenu as $res): ?>
                                            <tr>
                                                <th> <span class="co-name"><?=$no++; ?></span></th>
                                                <td><?=$res['menu']; ?></td>
                                                <td><?=$res['title']; ?></td>
                                                <td><?=$res['url']; ?></td>
                                                <td><?=$res['active']; ?></td>
                                                <td class="text-center">
                                                    <a href=""class="tabledit-delete-button btn btn-sm btn-success" title="Update Data Menu" 
                                                    data-toggle="modal" data-animation="bounce" data-target=".updatemenu">
                                                    <i class="ti-pencil"></i></a>
                                                    <a href="" class="tabledit-delete-button btn btn-sm btn-danger" title="Delete Data Menu"><i class="ti-trash"></i></a>
                                                    <a href="" class="tabledit-delete-button btn btn-sm btn-primary" 
                                                    data-toggle="modal" data-animation="bounce" data-target=".addmenu"
                                                    title="Input Data Menu"><i class="ti-save"></i></a>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12 text-center">
                                                        <form action="<?= base_url('dokter');?>" method="post"
                                                            class=" d-sm-inline-block form-inline mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control  border-1 border-left-primary shadow" placeholder="Search for..." name="keyword" autofocus>
                                                                <div class="input-group-append">
                                                                    <input class="btn btn-warning mb-2" type="submit" name="submit" value="Cari">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade addmenu" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA MENU</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('menu'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="menu" placeholder="Menu Name" name="menu">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></button>
                            <button type="submit" class="btn btn-success" title="Click Untuk Input Data Menu"><i class="fa fa-send (alias)"></i></button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div class="modal fade updatemenu" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPDATE DATA MENU</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('menu'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="menu" placeholder="Menu Name" name="menu">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></button>
                            <button type="submit" class="btn btn-success" title="Click Untuk Update Data Menu"><i class="ion-ios7-personadd "></i></button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!-- end wrapper -->

