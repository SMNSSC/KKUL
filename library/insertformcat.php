<?php
 session_start();
include ("config.php");
$count=0;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Catagory insert form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="jumbotron text-center">
  <h1>Catagory</h1>
  <p>insert form</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">

      <form class="form-horizontal" action="savecat.php" name="frmAddC" method="post">
        <fieldset>

        <!-- Form Name -->
        <legend>Catagory Insert Form</legend>

        <!-- C_Name -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="C_Name">ประเภทบทความ</label>  
          <div class="col-md-5">
          <input id="textinput" name="C_Name" type="text" placeholder="กรอกรายละเอียด..." class="form-control input-md" width="100px" required autofocus>
          <!--<span class="help-block">help</span>-->  
          </div>
        </div>

        <!-- C_Order -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="C_Order">ลำดับ</label>  
          <div class="col-md-2">
          <input id="textinput" name="C_Order" type="text" placeholder="number" class="form-control input-md" required autofocus>
          <!--<span class="help-block">help</span>-->   
          </div>
        </div>

        <!-- C_Status -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="C_Status">สถานะ</label>
          <div class="col-md-2">
            <select id="selectbasic" name="C_Status" class="form-control">
              <option value="Public">Public</option>
              <option value="Non-public">Non-public</option>
            </select>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <div class="col-md-8" align="center">
            <input type="submit" name="submit" class="btn btn-primary" value="บันทึก"/>
          </div>
        </div>
        </fieldset>
        </form>

    </div>
  </div>
</div>

</body>
</html>
