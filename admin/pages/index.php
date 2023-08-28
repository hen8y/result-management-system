<?php
require_once('includes/loggedin.php');
require_once('header.html');
?>
      <!-- partial -->
    <div class="main-panel" >
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12 mb-4 mb-xl-0">
                  <h4 class="font-weight-bold text-dark"><?php echo date("F j, Y");
                  
                  ?></h4>
                
                </div>
            </div>
            <div class="row mt-3">
                
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                <div class="row flex-grow">
                    <div class="col-sm-12 grid-margin stretch-card">
                        <a href="add_result_jss.php">
                            <div class="card">
                                <div class="card-body">
                                      <h4 class="card-title">ADD RESULTS</h4>
                                      <br>
                                      <h4 class="text-dark font-weight-bold mb-2">FOR JSS CLASS</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                <div class="row flex-grow">
                    <div class="col-sm-12 grid-margin stretch-card">
                        <a href="add_result_sss.php">
                            <div class="card">
                                <div class="card-body">
                                      <h4 class="card-title">ADD RESULTS</h4>
                                      <br>
                                      <h4 class="text-dark font-weight-bold mb-2">FOR SSS CLASS</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
             <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                <div class="row flex-grow">
                    <div class="col-sm-12 grid-margin stretch-card">
                        <a href="edit-result-jss.php">
                            <div class="card">
                                <div class="card-body">
                                      <h4 class="card-title">EDIT RESULTS</h4>
                                      <br>
                                      <h4 class="text-dark font-weight-bold mb-2">FOR JSS CLASS</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
             <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                <div class="row flex-grow">
                    <div class="col-sm-12 grid-margin stretch-card">
                        <a href="edit-result-sss.php">
                            <div class="card">
                                <div class="card-body">
                                      <h4 class="card-title">EDIT RESULTS</h4>
                                      <br>
                                      <h4 class="text-dark font-weight-bold mb-2">FOR SSS CLASS</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <script src="../js/dashboard.js"></script>
</body>

</html>
