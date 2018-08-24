<!DOCTYPE html>
<html lang="en">


<head>
  <title>KKU Library Resources</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="list_edata.php" name="frmindex" method="post">

<div class="jumbotron text-center">
  <h1>KKU Library Resources</h1>
  <p>Quality of supply Is a user's delight</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">

<fieldset>



<!-- Form Name -->
<legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ฐานข้อมูล</legend>


<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label" for="D_Name">ชื่อ :</label>  
  <div class="col-md-4">
  <input id="DName" name="D_Name" type="text" placeholder="กรุณากรอกชื่อ" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="D_Desc">Desc :</label>  
  <div class="col-md-4">
  <input id="Desc" name="D_Desc" type="text" placeholder="กรุณากรอกDesc" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  
  <div class="col-md-4">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="singlebutton" name="singlebutton" class="btn btn-primary">บันทึก</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>

</body>
</html>


