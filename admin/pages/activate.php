<?php
require_once('includes/loggedin.php');
require_once('header.html');
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row justify-content-center">
            <div class="col-md-6 grid-margin stretch-card ">
              <div class="card">
                <div class="card-body">
                  
                  <form method="post" action="includes/create-table.php">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Year</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="year">
                        <option value="select"></option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Class</label>
                      <select class="form-control" id="exampleFormControlSelect2" name="class">
                        <option value="select"></option>
                        <option value="jss1">JSS1</option>
                        <option value="jss2">JSS2</option>
                        <option value="jss3">JSS3</option>
                        <option value="sss1">SSS1</option>
                        <option value="sss2">SSS2</option>
                        <option value="sss3">SSS3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Term</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                        <option value="select"></option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                      </select>
                    </div>
                    <a href="">
                      <button type="submit" class="btn btn-info font-weight-bold"> <i class="icon-plus"></i> Add Class</button>
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <option value="hoo">
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