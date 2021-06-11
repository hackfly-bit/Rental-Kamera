

<?php include 'include/header.php'; ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kamera</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" style="padding-top: 30px;">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="font-size: 20px; font-weight: bold;">Daftar Kamera</h3>
              </div>
              <!-- /.card-header -->
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
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php include 'include/footer.php'; ?>