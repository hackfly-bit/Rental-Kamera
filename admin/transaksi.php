<?php include 'include/header.php'; ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
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
          <h3 class="card-title">Data Transaksi</h3>

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
        <table id="display-kamera" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th width="30px" style="text-align: center; vertical-align: middle;">No</th>
                    <th width="150px" style="text-align: center; vertical-align: middle;">Kode Kamera</th>
                    <th style="text-align: center; vertical-align: middle;">Nama Kamera</th>
                    <th width="200px" style="text-align: center; vertical-align: middle;">Tahun Produksi</th>
                    <th width="200px" style="text-align: center; vertical-align: middle;">Stock</th>
                    <th width="200px" style="text-align: center; vertical-align: middle;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td style="text-align: center; vertical-align: middle;">1</td>
                    <td style="text-align: center; vertical-align: middle;">C0D6</td>
                    <td>Canon EOS 6D Body Built-In Wifi And GPS</td>
                    <td style="text-align: center; vertical-align: middle;">2021</td>
                    <td style="text-align: center; vertical-align: middle;">6</td>
                    <td><button type="button" class="btn btn-block btn-danger">Detail</button></td>
                  </tr>
                  </tbody>
                  
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <?php include 'include/footer.php'; ?>