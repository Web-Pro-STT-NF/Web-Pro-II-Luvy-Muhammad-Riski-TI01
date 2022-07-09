   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Daftar Mata Kuliah</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Praktikum 9</li>
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
                       <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i>
                       </button>
                   </div>
               </div>
               <div class="card-body">
                   <div class="col-md-12">
                       <h3>
                          Daftar Mata Kuliah
                       </h3>
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Matakuliah</th>
                                   <th>SKS</th>
                                   <th>Kode</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php
                                $nomor = 1;
                                foreach ($list_matkul as $matkul) {
                                ?>
                                   <tr>
                                       <td><?= $nomor ?></td>
                                       <td><?= $matkul->nama ?></td>
                                       <td><?= $matkul->sks ?></td>
                                       <td><?= $matkul->kode ?></td>
                                      

                                   </tr>
                               <?php
                                    $nomor++;
                                }
                                ?>
                           </tbody>
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