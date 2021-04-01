<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บันทึกค่าเล่าเรียนและค่าครองชีพ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
    function Edit() {
        $('input').attr('readonly', false);
        $(':radio:not(:checked)').attr('disabled', false);
    }
    $(document).ready(function() {
        $("#btn_save").click(function() {
            var FeeMoney = $("#feemoney").val().trim();
            var Cost_Of_Living = $("#cost_of_living").val();

            $.ajax({
                url: 'บันทึกค่าเล่าเรียนค่าครองชีพ.php',
                type: 'post',
                data: {
                    FeeMoney: FeeMoney,
                    Cost_Of_Living: Cost_Of_Living
                },
                success: function(response) {
                    $('input').attr('readonly', true);
                  
                    alert(response);
                }
            });
        });


    });
    </script>

    <style>
    body {
        background-color: #acbdcf;
    }

    .button {
        background-color: #283943;
        /* Green */
        border: none;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: auto;
        cursor: pointer;
        border-radius: 12px;
    }

    form {
        padding-left: 20px;
        padding-right: 10px;
    }

    .b {
        margin-bottom: 200px;
    }

    .a {
        padding-top: 50px;
        padding-left: 420px;
    }

    .c {
        text-align: center;
        padding-left: 420px;
    }

    .d {
        padding-left: 400px;
    }.k{
            color: rgb(44, 49, 58);
        }.nav-link{
            color: rgba(44, 49, 58);
            
        }.text-uppercase {
       
            color: rgba(44, 49, 58);
        }
    </style>
</head>

<body>
<?php 
    if($_SESSION ){
    ?>
  <!-- bar -->
  <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light "style="background : transparent;"id='nav'>
        
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="images/1.png "  alt="" width="50" height="50">
              </a>
          <a class="navbar-brand" href="student.php">หน้าหลัก</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="ตารางกำหนดการ.html">ตารางกำหนดการ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="สร้างคำร้อง.php">สร้างคำร้อง</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ประกาศรายชื่อผู้กู้.html">ประกาศรายชื่อผู้กู้</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="ติดตามสถานะกรอรายเก่า.html">ติดตามสถานะ</a>
              </li>
            </ul>
          </div>
          <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link " href="logout.php">ออกจากระบบ</a>
            </li>
            
          </ul>
        </div>
      </nav>   
      
    </div>

<!-- add some javascript code -->

<script type="text/javascript">
   
    var  nav = document.getElementById('nav');
  
  window.onscroll = function(){

      if (window.pageYOffset >100) {

          nav.style.background = "#ffffffff";
        
      }
      else{
          nav.style.background = "transparent";
          nav.style.boxShadow = "none";
      }
  }

</script>




    <!-- slide pic -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">


            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          

        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="images/picศกร1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-uppercase">สร้างคำร้อง</h2>
                    <p class="k">ระบบติดตามสถานะการกู้ยืมเงิน กรอ. และกยศ. มหาวิทยาลัยธรรมศาสตร์</p>
                </div>
            </div>
            

        </div>
        
    </div>
      


      
        <!--กรอกข้อมูล-->

        <div class="c">
            <div class="row form-group">
                <label class="col-md-3 control-label" for="feemoney">ค่าเล่าเรียน/เทอม(บาท)</label>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input id="feemoney" name="feemoney" placeholder="" class="form-control input-md" type="text">
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3 control-label" for="cost_of_living">ค่าครองชีพ/เดือน(บาท)</label>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input id="cost_of_living" name="cost_of_living" placeholder="" class="form-control input-md"
                            type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error"></div>
        </div>

        <div class="d">
            <div class="form-group row">
                <div class="col-md-7 text-center">
                    <button class="btn btn-large btn-danger" type="button" onclick="Edit()"> แก้ไขข้อมูล </button>
                    <button id="btn_save" name="btn_save" class="btn btn-large btn-success"> บันทึกข้อมูล</button>

                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <?php 
    }else echo "<h1>กรุณาเข้าสู่ระะบบ</h1>";
    ?>
</body>

</html>