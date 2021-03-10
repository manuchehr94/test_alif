<?php include_once __DIR__ . "/../header.php"?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Phones</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/php/Alif_Academy_php/test_alif/backend/?model=phone&action=read">Home</a></li>
                            <li class="breadcrumb-item active">Phones</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Phone_id</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="text-align: right;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($allPhones as $phone): ?>
                            <tr>
                                <td><?=$phone['id']?></td>
                                <td><?=$phone['phone_id']?></td>
                                <td><?=$phone['phone']?></td>
                                <td class="project-actions text-right">
                                  <!--<a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>-->
                                    <a class="btn btn-info btn-sm" href="/php/Alif_Academy_php/test_alif/backend/?model=phone&action=update&id=<?=$phone['id']?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="/php/Alif_Academy_php/test_alif/backend/?model=phone&action=delete&id=<?=$phone['id']?>">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include_once __DIR__ . "/../footer.php"?>