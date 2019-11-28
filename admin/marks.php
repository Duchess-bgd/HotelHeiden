<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body id="page-top">
        
        <?php include('navbar.php'); ?>
      
        <div id="wrapper">
      
          <?php include('sidebar.php'); ?>

      
          <div id="content-wrapper">
            <div class="container-fluid">
      
              <!-- Naslov-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Administracija</a>
                </li>
                <li class="breadcrumb-item active">Ocene</li>
              </ol>        

              <!-- Tabela -->
              <div class="card mb-3 ">
                <div class="card-header text-justify">
                <h4>Sve ocene</h4>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Soba</th>
                            <th>Tip</th>
                            <th>Ocena</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                          <th>Soba</th>
                            <th>Tip</th>
                            <th>Ocena</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>Soba 101</td>
                            <td>Regular</td>
                            <td>4.7</td>
                          </tr>
                          <tr>
                            <td>Soba 101</td>
                            <td>Regular</td>
                            <td>4.7</td>
                          </tr><tr>
                            <td>Soba 101</td>
                            <td>Regular</td>
                            <td>4.7</td>
                          </tr><tr>
                            <td>Soba 101</td>
                            <td>Regular</td>
                            <td>4.7</td>
                          </tr><tr>
                            <td>Soba 101</td>
                            <td>Regular</td>
                            <td>4.7</td>
                          </tr><tr>
                            <td>Soba 101</td>
                            <td>Regular</td>
                            <td>4.7</td>
                          </tr><tr>
                            <td>Soba 101</td>
                            <td>Regular</td>
                            <td>4.7</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                <div class="card-footer text-muted">Poslednje izmene: 22.Novembar 2019.</div>
              </div>
      
            </div>
            <!-- /.container-fluid -->
      
            <!-- Footer -->
            <?php include('footer.php'); ?>
      
          </div>
          <!-- /.content-wrapper -->
      
        </div>
        <!-- /#wrapper -->
      
        
        
        <a id="button" class="scroll-to-top rounded"></a>
        <script src="script.js"></script>
      </body>
</html>