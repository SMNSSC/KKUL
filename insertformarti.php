<?php
 session_start();
include ("config.php");
$count=0;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Article insert form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="jumbotron text-center">
  <h1>Article</h1>
  <p>insert form</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">

      <form class="form-horizontal" action="savearticle.php" name="frmAddA" method="post">
        <fieldset>

        <!-- Form Name -->
        <legend>Article Insert Form</legend>

        <!-- A_Name -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="A_Name">ชื่อบทความ</label>  
          <div class="col-md-5">
          <input id="textinput" name="A_Name" type="text" placeholder="กรอกรายละเอียด..." class="form-control input-md" width="100px">
          <!--<span class="help-block">help</span>-->  
          </div>
        </div>

        <!-- A_Post -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="A_Post">รายละเอียดบทความ</label>  
          <div class="col-md-5">
          <input id="textinput" name="A_Post" type="text" placeholder="กรอกรายละเอียด..." class="form-control input-md" style="height:70px;">
          <!--<span class="help-block">help</span>-->  
          </div>
        </div>

        <!-- A_Update-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="A_Update">วันที่อัพโหลด</label>  
          <div class="col-md-5">
          <input name="A_Update" type="date"/>
          <!--<span class="help-block">help</span>-->  
          </div>
        </div>

        <!-- A_Order -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="A_Order">ลำดับ</label>  
          <div class="col-md-4">
          <input id="textinput" name="A_Order" type="text" placeholder="number" class="form-control input-md">
          <!--<span class="help-block">help</span>-->   
          </div>
        </div>

        <!-- A_Content -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="A_Content">เนื้อหา</label>
          <div class="col-md-5">                     
            <textarea class="form-control" id="A_Content" name="A_Content" style="height:300px;"> </textarea>
          </div>
        </div>

        <!-- A_Description -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="A_Description">คำอธิบาย</label>
          <div class="col-md-5">                     
            <textarea class="form-control" id="A_Description" name="A_Description" style="height:170px;"> </textarea>
          </div>
        </div>

        <!-- A_Image --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="A_Image">เลือกไฟล์</label>
          <div class="col-md-5">
            <input id="A_Image" name="A_Image" class="input-file" type="file">
          </div>
        </div>

        <!-- A_Status -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="selectbasic">สถานะ</label>
          <div class="col-md-5">
            <select id="selectbasic" name="A_Status" class="form-control">
              <option value="Public">Public</option>
              <option value="Non-public">Non-public</option>
            </select>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"> </label>
          <div class="col-md-5">
            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">บันทึก</button>
          </div>
        </div>
        </fieldset>
        </form>

    </div>
  </div>
</div>

</body>
</html>
