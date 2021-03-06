   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1> Daftar Mahasiswa</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('index.php/mahasiswa')?>">Home</a></li>
                           <li class="breadcrumb-item active">Blank Page</li>
                       </ol>
                   </div>
               </div>
           </div><!-- /.container-fluid -->
       </section>

       <!-- Main content -->
       <section class="content">

           <!-- Default box -->
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Title</h3>

                   <div class="card-tools">
                       <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i>
                       </button> -->
                   </div>
               </div>
               <div class="card-body">
                   <div class="col-md-12">
                       <h3>
                           Daftar Mahasiswa
                       </h3>
                       <div class="table-responsive">
                           <table class="table table-striped table-hover table-sm">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>NIM</th>
                                       <th>Nama</th>
                                       <th>Gender</th>
                                       <th>Tempat Lahir</th>
                                       <th>Tanggal Lahir</th>
                                       <th>IPK</th>
                                       <th>Prodi</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php
                                    $nomor = 1;
                                    foreach ($list_mhs as $obj) {
                                    ?>
                                       <tr>
                                           <td><?= $nomor ?></td>
                                           <td><?= $obj->nim ?></td>
                                           <td><?= $obj->nama ?></td>
                                           <td class="text-center"><?= $obj->gender ?></td>
                                           <td><?= $obj->tmp_lahir ?></td>
                                           <td><?= $obj->tgl_lahir ?></td>
                                           <td><?= $obj->ipk ?></td>
                                           <td><?= $obj->prodi_kode ?></td>
                                           <td>
                                               <a class="btn btn-outline-info" href="mahasiswa/view?id=<?= $obj->nim ?>">View</a>
                                               <a class="btn btn-outline-info" href="mahasiswa/edit?id=<?= $obj->nim ?>">Update</a>
                                               <a class="btn btn-outline-info" href="mahasiswa/delete?id=<?= $obj->nim ?>"
                                               onclick="if(!confirm('Anda Yakinnn hapus data Mahasiswa NIM <?=$obj->nim?>?')){return false}"
                                               >Delete</a>
                                           </td>


                                        <!-- <td><?= $nomor ?></td>
                                        <td><?= $mhs->nim ?></td>
                                       <td><?= $mhs->nama ?></td>
                                       <td><?= $mhs->gender ?></td>
                                       <td><?= $mhs->ipk ?></td> -->

                                       </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                               </tbody>
                           </table>
                       </div>
                       <a class="btn btn-primary" href="<?php echo base_url('index.php/mahasiswa/create') ?>" role="button">Create Mahasiswa</a>
                       <table class="table">
                       </table>
                   </div>
               </div>
               <!-- /.card-body -->
               <div class="card-footer">
                   Footer
               </div>
               <!-- /.card-footer-->
           </div>
           <!-- /.card -->

       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->