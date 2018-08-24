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
          <label class="col-md-4 control-label" for="textinput">ชื่อบทความ</label>  
          <div class="col-md-5">
          <input id="textinput" name="textName" type="text" placeholder="กรอกรายละเอียด..." class="form-control input-md" width="100px">
          <!--<span class="help-block">help</span>-->  
          </div>
        </div>

        <!-- A_Post -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">รายละเอียดบทความ</label>  
          <div class="col-md-5">
          <input id="textinput" name="textPost" type="text" placeholder="กรอกรายละเอียด..." class="form-control input-md" style="height:70px;">
          <!--<span class="help-block">help</span>-->  
          </div>
        </div>

        <!-- A_Update-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">วันที่อัพโหลด</label>  
          <div class="col-md-5">
          <input name="Update" type="date"/>
          <!--<span class="help-block">help</span>-->  
          </div>
        </div>

        <!-- A_Order -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">ลำดับ</label>  
          <div class="col-md-4">
          <input id="textinput" name="textOrder" type="text" placeholder="number" class="form-control input-md">
          <!--<span class="help-block">help</span>-->   
          </div>
        </div>

        <!-- A_Content -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textarea">เนื้อหา</label>
          <div class="col-md-5">                     
            <textarea class="form-control" id="textContent" name="textarea" style="height:300px;"> </textarea>
          </div>
        </div>

        <!-- A_Description -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textarea">คำอธิบาย</label>
          <div class="col-md-5">                     
            <textarea class="form-control" id="textDes" name="textarea" style="height:170px;"> </textarea>
          </div>
        </div>

        <!-- A_Image --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">เลือกไฟล์</label>
          <div class="col-md-5">
            <input id="filebutton" name="fileImage" class="input-file" type="file">
          </div>
        </div>

        <!-- A_Status -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="selectbasic">สถานะ</label>
          <div class="col-md-5">
            <select id="selectbasic" name="Status" class="form-control">
              <option value="1">Public</option>
              <option value="2">Non-public</option>
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
