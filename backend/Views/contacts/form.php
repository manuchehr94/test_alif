<?php
    include_once __DIR__ . "/../header.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Contacts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Contacts</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="card card-info">
            <form class="form-horizontal" action="/?model=contacts&action=save" method="post">
               <div class="card-body">
                   <input value="<?=$oneContact['id'] ?? "" ?>" type = "hidden" name ="id">
                   <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                           <input value="<?=$oneContact['name'] ?? "" ?>" type ="text" name = "name" class="form-control">
                       </div>
                   </div>
                   <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input value="<?=$oneContact['phone'] ?? "" ?>" type="number" name ="phone" class="form-control"><div class="col-sm-10"></div>
                        </div>
                   </div>
                   <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                           <input value="<?=$oneContact['email'] ?? "" ?>" type="number" name ="email" class="form-control"><div class="col-sm-10"></div>
                       </div>
                   </div>
                   <div class="form-group row">
                       <input type ="submit" name = "submit" class="btn btn-success" value="Save">
                   </div>
               </div>
            </form>
        </div>
    </section>
</div>
<?php
    include_once __DIR__ . "/../footer.php";
?>