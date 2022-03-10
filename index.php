







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>STRIPE</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dash_2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/theme-checkbox-radio.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
   
    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm bg-gradient-dark col-lg-12 col-md-12 col-sm-12 col-xl-12">

            <a class="navbar-brand" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" fill="none"><rect width="100" height="100" fill="none" rx="0" ry="0" /><path fill="#f70e29" d="M81 32.87689C81 30.18197 78.90223 28 76.3145 28h-52.629C21.09837 28 19 30.18346 19 32.87689V67.1231C19 69.81803 21.09777 72 23.6855 72h52.629C78.90163 72 81 69.81654 81 67.12311V32.8769z" /><path fill="#ffffff" d="M37.5 59c1.38071 0 2.5 1.11929 2.5 2.5S38.88071 64 37.5 64h-8c-1.38071 0-2.5-1.11929-2.5-2.5s1.11929-2.5 2.5-2.5h8zM54 59c1.38071 0 2.5 1.11929 2.5 2.5S55.38071 64 54 64h-8c-1.38071 0-2.5-1.11929-2.5-2.5S44.61929 59 46 59h8zm16.5 0c1.38071 0 2.5 1.11929 2.5 2.5S71.88071 64 70.5 64h-8c-1.38071 0-2.5-1.11929-2.5-2.5s1.11929-2.5 2.5-2.5h8zM33 36c3.3137 0 6 2.6863 6 6s-2.6863 6-6 6-6-2.6863-6-6 2.6863-6 6-6z" /></svg><span class="navbar-brand-name" style="font-weight: bold;">STRIPE</span></a>
            </header>
    </div>
    <!--  END MAINBAR  -->

    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

            

<div class="widget-list row">
                
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-flex col-lg-6">
                    <div class="md-form">
    <div class="col-md-12">
  <textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="10" placeholder="54686586765xxxxx|xx|xxxx|xxx"></textarea>
  <label for="lista"></label>
  <div name="lines_count" type="hidden" id="lines" style="display:none;" >Loading...</div>
</div>
</div>
<center>
<button type="button" class="btn btn-primary" id="submit" onclick="start()">Start</button>
<button type="button" class="btn btn-danger">Stop</button>
</center>
<br></br>
<select class="form-control h-10" id="gate" onchange="check()">



<option value="null">Select Gate</option>
<br></br>
<option  value="STRIPE-CVV.php">Stripe-CVV&CCN</option>
<option  value="B3.php">BRAINTREE</option>
<option  value="payflow-ccn.php">PAYFLOW(CCN)</option>
<option  value="ANZ.php">ANZ</option>
<option  value="payway.php">PAYWAY</option>
<option  value="MASS check.php">MASS check</option>
<option  value="commerce7.php">commerce7</option>
<option  value="nao.php"></option>
</select>
                </div>

                <div class="widget-holder widget-full-content widget-full-height col-lg-6">

                        <div class="widget-four">
                            
                            <div class="widget-content">
                                <div class="vistorsBrowser">
                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            <div class="w-browser-info">
                                                <h6>Cvv</h6>
                                                <span class="badge rounded-pill bg-primary" id="cvv_count"></span>
                                            </div>
                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-primary" id ="cvv_count_bar" role="progressbar" style="width: 0%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>Ccn</h6>
                                                <span class="badge rounded-pill bg-success" id="ccn_count"></span>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" id ="ccn_count_bar" role="progressbar" style="width: 0%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>Dead</h6>
                                                <span class="badge rounded-pill bg-danger" id="dead_count"></span>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" id ="dead_count_bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M7 15h0M2 9.5h20"/></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>Ccs to be tested</h6>
                                                <span class="badge rounded-pill bg-dark" id="total_count"></span>
                                              

                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-dark" id ="total_count_bar" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                
</div>
                

                  <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row widget-statistic">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm- col-12">
                                <div class="widget widget-one_hybrid widget-followers" id="widget_followers_id" onclick="Mudaestado();">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                        <p class="w-value">Cvv</p>
                                        <h5 class=""></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="widget widget-one_hybrid widget-engagement" id="widget_engagement_id" onclick="Mudaestado_1();">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        </div>
                                        <p class="w-value">Ccn</p>
                                        <span class="badge badge-success" id="live2"></span>
                                        <h5 class=""></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="widget widget-one_hybrid widget-referral" id="widget_referral_id" onclick="Mudaestado_2();">
                                    <div class="widget-heading">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                        <p class="w-value">Dead</p>
                                        <span class="badge badge-success" id="live2"></span>
                                        <h5 class=""></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" id="cvv_lives" style="display: none">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="cvv-master">Cvv</h6>
                                <div id="bode"><span id="cvv_approved" class="cvv-approved"></span>
                              </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" id="ccn_lives" style="display: none">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="ccn-master">Ccn</h6>
                                <div id="bode"><span id="ccn_approved" class="ccn-approved"></span>
                              </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" id="dead_cc" style="display: none">
                        <div class="widget widget-one">
                            <div class="widget-heading">
                                <h6 class="dead-master">Dead</h6>
                                <div id="bode"><span id="declined_cc" class="declined-cc"></span>
                              </div>
                            </div>
                            
                        </div>
                    </div>
                                    

                        </div>
                    </div>

                    
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">STRIPE </p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/dash_2.js"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script type="text/javascript">
function Mudaestado() {
        var display = document.getElementById("cvv_lives").style.display;
        if(display == "none"){
            if(document.getElementById("ccn_lives").style.display || document.getElementById("dead_cc").style.display == 'block'){
                document.getElementById("ccn_lives").style.display = 'none';
                document.getElementById("dead_cc").style.display = 'none';
                document.getElementById("cvv_lives").style.display = 'block';
            }
            else {
                document.getElementById("cvv_lives").style.display = 'block';
            }
        }
        else
            document.getElementById("cvv_lives").style.display = 'none';
    }
</script>
<script type="text/javascript">
function Mudaestado_1() {
        var display = document.getElementById("ccn_lives").style.display;
        if(display == "none"){
            if(document.getElementById("cvv_lives").style.display || document.getElementById("dead_cc").style.display == 'block'){
                document.getElementById("cvv_lives").style.display = 'none';
                document.getElementById("dead_cc").style.display = 'none';
                document.getElementById("ccn_lives").style.display = 'block';
            }
            else {
                document.getElementById("ccn_lives").style.display = 'block';
            }
        }
        else
            document.getElementById("ccn_lives").style.display = 'none';
    }
</script>
<script type="text/javascript">
function Mudaestado_2() {
        var display = document.getElementById("dead_cc").style.display;
        if(display == "none"){
            if(document.getElementById("cvv_lives").style.display || document.getElementById("ccn_lives").style.display == 'block'){
                document.getElementById("cvv_lives").style.display = 'none';
                document.getElementById("ccn_lives").style.display = 'none';
                document.getElementById("dead_cc").style.display = 'block';
            }
            else {
                document.getElementById("dead_cc").style.display = 'block';
            }
        }
        else
            document.getElementById("dead_cc").style.display = 'none';
    }
</script>
</script>
    <script type="text/javascript">
      function start() {
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var tested = total;
        document.getElementById("total_count").innerHTML = total;
        $('#total_count_bar').css('width', ((tested/total)*100)+'%').attr('aria-valuenow', ((tested/total)*100));  
        console.log(total);
        var ap = 0;
        var rp = 0;
        var up = 0;
        document.getElementById('cvv_count').setAttribute('value','')
        document.getElementById('ccn_count').setAttribute('value','')
        document.getElementById('dead_count').setAttribute('value','')
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
        var req = new XMLHttpRequest();
        console.log("Grabbing Value");
        req.onreadystatechange = function () {
          if (req.readyState == 4 && req.status == 200) {
            if (req.responseText.match("Approved")) {
            remove();
            ap++;
            tested --;
            approved(req.responseText + "");
            }
            else if (req.responseText.match("Aprovada")) { 
            remove();
            rp++;
            tested --;
            removed(req.responseText + "");
            }
            else { 
            remove();
            up++;
            tested --;
            unknownccs(req.responseText + "");
            }   
            $('#cvv_count').html(ap);
            $('#cvv_count_bar').css('width', ((ap/total)*100)+'%').attr('aria-valuenow', ((ap/total)*100));
            $('#ccn_count').html(rp);
            $('#ccn_count_bar').css('width', ((rp/total)*100)+'%').attr('aria-valuenow', ((rp/total)*100));
            $('#dead_count').html(up);
            $('#dead_count_bar').css('width', ((up/total)*100)+'%').attr('aria-valuenow', ((up/total)*100));
            document.getElementById("total_count").innerHTML = tested;
            $('#total_count_bar').css('width', ((tested/total)*100)+'%').attr('aria-valuenow', ((tested/total)*100));
          }
        }
		var whichgate = document.getElementById('gate').value;
        var gate = whichgate + "?lista="
        req.open("GET", gate + value, true);
        req.send(null);
        }, 500 * index);
        });
      }
    function approved(str) {
        $("#cvv_approved").append(str + "<br>");
    }
    function removed(str) {
        $("#ccn_approved").append(str + "<br>");
    }
    function unknownccs(str) {
        $("#declined_cc").append(str + "<br>");
    }
    function remove() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }

    </script>
</body>
</html>