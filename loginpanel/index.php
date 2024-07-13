<?php
    header('location: ./am1.php');
require_once __DIR__."/header.php";
?>
 

    <!--page-wrapper-->
    <div class="page-wrapper">
      <!--page-content-wrapper-->
      <div class="page-content-wrapper">
        <div class="page-content">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="card radius-15">
                <div class="card-body">
                  <div class="d-flex mb-2">
                    <div>
                      <p class="mb-0 font-weight-bold">Sessions</p>
                      <h2 class="mb-0">501</h2>
                    </div>
                    <div class="ml-auto align-self-end">
                      <p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i>  <span>1.01% 31 days ago</span>
                      </p>
                    </div>
                  </div>
                  <div id="chart1"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card radius-15">
                <div class="card-body">
                  <div class="d-flex mb-2">
                    <div>
                      <p class="mb-0 font-weight-bold">Visitors</p>
                      <h2 class="mb-0">409</h2>
                    </div>
                    <div class="ml-auto align-self-end">
                      <p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>  <span>0.49% 31 days ago</span>
                      </p>
                    </div>
                  </div>
                  <div id="chart2"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card radius-15">
                <div class="card-body">
                  <div class="d-flex mb-2">
                    <div>
                      <p class="mb-0 font-weight-bold">Page Views</p>
                      <h2 class="mb-0">2,346</h2>
                    </div>
                    <div class="ml-auto align-self-end">
                      <p class="mb-0 font-14 text-danger"><i class='bx bxs-down-arrow-circle'></i>  <span>130.68% 31 days ago</span>
                      </p>
                    </div>
                  </div>
                  <div id="chart3"></div>
                </div>
              </div>
            </div>
          </div>
          <!--end row-->
          
          <!-- <div class="card-deck flex-column flex-lg-row">
            <div class="card radius-15">
              <div class="card-body">
                <div class="card-title">
                  <h5 class="mb-0">Browsers Statistics </h5>
                </div>
                <hr/>
                <div class="media align-items-center">
                  <div>
                    <img src="assets/images/icons/chrome.png" width="35" height="35" alt="" />
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="mb-0">587</h6>
                    <p class="mb-0">Chrome</p>
                  </div>
                  <p class="mb-0">24.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                  <div>
                    <img src="assets/images/icons/firefox.png" width="35" height="35" alt="" />
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="mb-0">358</h6>
                    <p class="mb-0">Firefox</p>
                  </div>
                  <p class="mb-0">12.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                  <div>
                    <img src="assets/images/icons/edge.png" width="35" height="35" alt="" />
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="mb-0">867</h6>
                    <p class="mb-0">Edge</p>
                  </div>
                  <p class="mb-0">24.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                  <div>
                    <img src="assets/images/icons/opera.png" width="35" height="35" alt="" />
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="mb-0">752</h6>
                    <p class="mb-0">Opera</p>
                  </div>
                  <p class="mb-0">27.3%</p>
                </div>
                <hr/>
                <div class="media align-items-center">
                  <div>
                    <img src="assets/images/icons/safari.png" width="35" height="35" alt="" />
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="mb-0">586</h6>
                    <p class="mb-0">Safari</p>
                  </div>
                  <p class="mb-0">14.5%</p>
                </div>
              </div>
            </div>
            <div class="card radius-15">
              <div class="card-body">
                <div class="card-title">
                  <h5 class="mb-0">Traffic Sources </h5>
                </div>
                <hr/>
                <div class="table-responsive">
                  <table class="table table-striped mb-0">
                    <thead>
                      <tr>
                        <th>Source</th>
                        <th>Visitors</th>
                        <th>Bounce Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>(direct)</td>
                        <td>56</td>
                        <td>10%</td>
                      </tr>
                      <tr>
                        <td>google</td>
                        <td>29</td>
                        <td>12%</td>
                      </tr>
                      <tr>
                        <td>linkedin.com</td>
                        <td>68</td>
                        <td>33%</td>
                      </tr>
                      <tr>
                        <td>bing</td>
                        <td>14</td>
                        <td>24%</td>
                      </tr>
                      <tr>
                        <td>facebook.com</td>
                        <td>87</td>
                        <td>22%</td>
                      </tr>
                      <tr>
                        <td>other</td>
                        <td>98</td>
                        <td>27%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card radius-15">
              <div class="card-body">
                <div class="card-title">
                  <h5 class="mb-0">Visitors By Gender </h5>
                </div>
                <hr/>
                <div id="chart6"></div>
              </div>
            </div>
          </div>
           -->
          <!-- <div class="card radius-15">
            <div class="card-body">
              <div class="card-title">
                <h5 class="mb-0">Top pages by views </h5>
              </div>
              <hr/>
              <div class="table-responsive">
                <table class="table mb-0">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Views</th>
                      <th>Avg. Time</th>
                      <th>Bounce Rate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><a href="https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766" target="_blank">https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766</a>
                      </td>
                      <td>660</td>
                      <td>55s</td>
                      <td>3.6%</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><a href="https://codervent.com/wipe-admin-dark/dashboard/v3" target="_blank">https://codervent.com/wipe-admin-dark/dashboard/v3</a>
                      </td>
                      <td>352</td>
                      <td>16s</td>
                      <td>8.4%</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><a href="https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455" target="_blank">https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455</a>
                      </td>
                      <td>101</td>
                      <td>10s</td>
                      <td>6.7%</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><a href="https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477" target="_blank">https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477</a>
                      </td>
                      <td>95</td>
                      <td>57s</td>
                      <td>5.2%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><a href="https://codervent.com/rocker-angular/dashboard/v1" target="_blank">https://codervent.com/rocker-angular/dashboard/v1</a>
                      </td>
                      <td>102</td>
                      <td>45s</td>
                      <td>7.2%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>-->
        </div>
      </div>
      <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->


<?php
// require_once __DIR__."/content-generator.php";

 require_once __DIR__."/footer.php";

/*productCreteImageCropper*/
// imgCropperInit(array
//  (
//   "croppername"=>"deviceCropper",
//   "size"=>"{width : 480, height: 480}",
//   "vwidth"=>150,
//   "vheight"=>150,
//   "vtype"=>"square",
//   "bwidth"=> 200,
//   "bheight"=>200,
//   "ajxtype"=>"DEVICE",
//   "ajxurl"=>"./_dp_push.php",
//   "resize"=>"",
//   "orientation"=>"true"


// ));


?>

<script type="text/javascript">
  $(()=>{

    datatableResponse('dt-manage-am1','am1_response.php');
    mbsd_sane_enter_key('#addDevice');

    ajaxFormSendSpl('#addDevice #init-am2','click','#addpatsumbit','./am1_device_create.php','post','#ajaxloader',(res)=>{
      document.querySelector('#addDevice #init-am2').reset();

    });



    $('#dt-manage-am1').on('keyup','.prioritychanger',xcdelayer( (e)=>{
     ajaxJsonTransfer({'priority':e.target.value ,'grabid': e.target.getAttribute("grabid") },'./priority_change.php','post','#ajaxloader');

   },500));


  });

</script>


