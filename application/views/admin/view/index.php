<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">
        <br/>
        <form id="formAddProduct" data-parsley-validate class="form-horizontal form-label-left" method="post"
        enctype="multipart/form-data">
        <div class="form-group">

          <label class="control-label col-md-1 col-sm-1 col-xs-12 text-left text-nowrap" for="first-name">Bắt đầu
            <span class="required">*</span>
          </label>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <input type="text" id="txtTo3" name="txtFrom" required
            class="form-control col-md-7 col-xs-12"
            value="<?php if (isset($_POST['txtFrom'])) echo $_POST['txtFrom'] ?>">
          </div>

          <label class="control-label col-md-1 col-sm-1 col-xs-2 text-left text-nowrap" for="first-name">kết thúc
            <span class="required">*</span>
          </label>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <input type="text" id="txtTo4" name="txtTo" required
            class="form-control col-md-7 col-xs-12"
            value="<?php if (isset($_POST['txtTo'])) echo $_POST['txtTo'] ?>">

          </div>

          <label class="control-label col-md-1 col-sm-1 col-xs-12 text-left text-nowrap" for="first-name">Bài viết
            <span class="required">*</span>
          </label>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <select class="select2_group form-control" name="id_product">
              <option <?php echo isset($_POST['id_product']) && $_POST['id_product'] == '0' ? 'selected' : '' ?> value="0">All</option>
              <?php foreach ($products as $product): ?>
                <option <?php echo isset($_POST['id_product']) && $_POST['id_product'] == $product->id ? 'selected' : '' ?> value="<?php echo $product->id ?>"><?php echo $product->title ?></option>
              <?php endforeach ?>

            </select>
          </div>

          <label class="control-label col-md-1 col-sm-1 col-xs-12 text-left text-nowrap" for="first-name">Thiết bị
            <span class="required">*</span>
          </label>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <select class="select2_group form-control" name="type">

              <option <?php echo isset($_POST['type']) && $_POST['type'] == 'all' ? 'selected' : '' ?> value="all">
                All
              </option>
              <option <?php echo isset($_POST['type']) && $_POST['type'] == '0' ? 'selected' : '' ?> value="0">
                ANDROID
              </option>
              <option <?php echo isset($_POST['type']) && $_POST['type'] == '1' ? 'selected' : '' ?> value="1">
                IOS
              </option>
              <option <?php echo isset($_POST['type']) && $_POST['type'] == '2' ? 'selected' : '' ?> value="1">
                PC
              </option>
            </select>
          </div>
          
          
        </div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 ">
            <input type="submit"  id="btnAddEvent" name="btnAddSearch" style="width: 100px" class="btn btn-success"
            value="Search">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <?php 
      $total_view = 0;
      foreach ($data_view as $val) {
        $total_view += $val->total;
      }
    ?>
    <?php if(isset($_POST['txtFrom'])){ ?>
    <h2>Tổng view từ ngày <?php echo $_POST['txtFrom'] . ' đến ngày ' . $_POST['txtTo'] ?> (<?php echo $total_view ?>)</h2>
    <?php } ?>
    <div class="x_panel">
      <div class="x_title">
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <canvas id="lineChart2"></canvas>
      </div>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="<?php echo backend(); ?>vendors/jquery/dist/jquery.min.js"></script>
<script>
  jQuery(document).ready(function($) {

    <?php if($go == 0){ ?>
      line();
    <?php }else{ ?>
      bar();
    <?php } ?>

  });
  function line(){
    var ctx = document.getElementById("lineChart2");
    var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['',
        <?php foreach ($data_view as $data) { 
          echo  "'" . $data->time .":00',";
        } ?>
        ],
        datasets: [{
          label: "Total View",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          lineStyle: {
            color: '#eee',
            width: 100,
            type: 'solid'
          },
          data: [0,
          <?php foreach ($data_view as $data) { 
            echo $data->total .",";
          } ?>
          ]
        }]
      },
    });
  }
  function bar(){
    var ctx = document.getElementById("lineChart2");
    var mybarChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
        <?php foreach ($data_view as $data) { 
          echo  "'$data->time',";
        } ?>
        ],
        datasets: [{
          label: "Total View",
          backgroundColor: "#26B99A",
          data: [
          <?php foreach ($data_view as $data) { 
            echo $data->total .",";
          } ?>
          ]
        }]
      },

      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  }
</script>