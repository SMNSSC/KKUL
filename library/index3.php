<!DOCTYPE html>
<html lang="en">
<head>
  <title>KKUL Research Support</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Dropdowns Process 3 step -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Dropdowns Process 3 step -->


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js"></script>
  
  <!--Show click-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    $(document).ready(function()
  {
    $("#show").click(function(){$("#1").show();});
    $("#show").click(function(){$("#2").show();});
    $("#show").click(function(){$("#3").show();});
  });
  </script>
  <!--Show click-->

  <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
/* End Slideshow container */



</style>

</head>

<header>
<div class="container">
  <div class="row">

      <div class="col-sm-6 col-md-6 col-lg-6">
        <a href="index.php"> <img src="images/header.png" width="250" align="left"></a> 
      </div>

      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="feature-text" align="right" >
            <font color=#CC3300 size=6 wi><B>All About Research</B></font> 
            <font color=#FF9900 size=3 ><B>By KKU Library</B></font> 
        </div>
        <br>
        <div align="right">
            <div id="tfheader">
              <form id="tfnewsearch" method="get" action="http://www.google.com">
                  <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
               </form> 
              <div class="tfclear"></div>
            </div>
        </div>
      </div>  
  </div>
</div>
</header>
 <!--line-->
<div class="container">
<div class="row"> 
    <div class="col-sm-12 col-md-12 col-lg-12">
      <img src="images/line.png" align="center" width="100%">
    </div>
</div>
</div>
<!--line-->
<body style="width:100%"> 

<!--Start Menu-->
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<div id='cssmenu'>
<ul align="center">
   <li class="col-sm-4 col-md-4 col-lg-2" align="center"><a href="index2.php"><img src="images/home.png"></a></li>
   <li class="col-sm-4 col-md-4 col-lg-2" class='active has-sub' ><a href='#'><img src="images/researchsup.png"></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Help</span></a>
            <ul>
               <li><a href='#'><span>Ask a librarian</span></a></li>
               <li><a href='#'><span>Live Chat</span></a></li>
               <li><a href='#'><span>3 step for research</span></a></li>
               <li class='last'><a href='#'><span>Learn by yourself</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Research Service</span></a>
            <ul>
               <li><a href='#'><span>Subject librarian</span></a></li>
               <li><a href="https://library.kku.ac.th/database/"><span>KKU E-resource</span></a></li>
               <li><a href='#'><span>RSS</span></a></li>
               <li class='last'><a href="https://library.kku.ac.th/library2013/index.php?option=com_content&view=article&id=306&Itemid=711"><span>ILL</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Research Guide</span></a>
            <ul>
               <li><a href='#'><span>Research Ethics</span></a>
                    <ul>
                      <li><a href='#'><span>Copyright</span></a></li>
                      <li><a href='#'><span>Intellectual property</span></a></li>
                      <li><a href='#'><span>Plagiarism</span></a></li>
                    </ul>
               </li>
               <li class='last'><a href='#'><span>Publication</span></a>
                    <ul>
                      <li><a href='#'><span>Researcher Author Support</span></a></li>
                      <li><a href='#'><span>Information evaluation</span></a></li>
                      <li><a href='#'><span>Reference management</span></a></li>
                      <li><a href='#'><span>Research metric/Journal Ranking</span></a></li>
                      <li><a href='#'><span>Open Access</span></a></li>
                    </ul>
               </li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Research Training</span></a>
            <ul>
               <li><a href='#'><span>Training</span></a></li>
               <li><a href='#'><span>Digital Learning Lauchpad</span></a></li>
               <li><a href='#'><span>in class (Embedded Librarian)</span></a></li>
               <li><a href='#'><span>E-Learning</span></a></li>
               <li class='last'><a href='#'><span>MOOC</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Research Data Management</span></a>
            <ul>
               <li><a href='#'><span>3 step for research</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class="col-sm-4 col-md-4 col-lg-2"><a href="http://library.kku.ac.th"><img src="images/main.png"></a></li>
   <li class="col-sm-4 col-md-4 col-lg-2"><a href="#"><img src="images/cont.png"></a></li>
   <li class="col-sm-4 col-md-4 col-lg-2" class='last'><a href='#'><img src="images/site.png"></a></li>
</ul>
</div>
</div>
</div>
</div> 
 <!--line-->
<div class="container"> 
    <div class="row"> 
    <div class="col-sm-12 col-md-12 col-lg-12">
      <img src="images/line.png" align="center" width="100%">
    </div>
</div>
  </div>
<!--line-->
<!--End Menu-->

<!--Start slide-->
<div class="slideshow-container" class="col-sm-12 col-md-12 col-lg-12">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img src="images/banner.jpg" style="width: 100%; height: 250px;">
  <div class="text"> </div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img src="images/banner.jpg" style="width: 100%; height: 250px;">
  <div class="text"> </div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="images/banner.jpg" style="width: 100%; height: 250px;">
  <div class="text"> </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<!--End slide-->


<!--Content-->
<br>
<div>
 <div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="container">
      <img src="images/process.png" width="100%" usemap="#image-map">
      <map name="image-map">
      <area target="" alt="Planning" title="Planning" coords="252,117,115" shape="circle" data-toggle="modal" data-target="#myModal"> 

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title">&nbsp;Planning</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
              <div class="modal-body">
                <font size="3" style="color: black;">
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://library.kku.ac.th/database/" style="color: #d14900;"><b>KKU E- Resource</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://library.kku.ac.th/library2013/index.php?option=com_content&view=article&id=306&Itemid=711" style="color: #d14900;"><b>ILL</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.library.kku.ac.th" style="color: #d14900;"><b>RSS</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.library.kku.ac.th" style="color: #d14900;"><b>Information evaluation</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.library.kku.ac.th" style="color: #d14900;"><b>Reference management</a>
                </font>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      <!--</div> -->
      </area>


      <area target="" alt="Working" title="Working" coords="381,334,116" shape="circle" data-toggle="modal" data-target="#myModal" >
         <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title">Working</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
              <div class="modal-body">
                  <font size="3" style="color: black;">
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://library.kku.ac.th/database/" style="color: #d14900;"><b>KKU E- Resource</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://library.kku.ac.th/library2013/index.php?option=com_content&view=article&id=306&Itemid=711" style="color: #d14900;"><b>ILL</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.library.kku.ac.th" style="color: #d14900;"><b>RSS</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.library.kku.ac.th" style="color: #d14900;"><b>Information evaluation</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.library.kku.ac.th" style="color: #d14900;"><b>Reference management</a>
                </font>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </area>

      <area target="" alt="Publishing" title="Publishing" coords="128,340,112" shape="circle" data-toggle="modal" data-target="#myModal">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title">Modal Header</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
              <div class="modal-body">
                  <p>This is a large modal.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </area>
      </map>

    </div>
    </div>
    </div>
    </div>
          <div class="col-sm-6 col-md-6 col-lg-6" align="center">
              <br><br><br> <br>
              <h1><b>DO IT YOURSELF</h1>
              <h4><b>Start Research by 3 Step</h4>
          </div>    
  </div>
  </div>
</div>
<!--End Content-->


<!--footer -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer >
    <div class="container">
      <div class="row" style="background: #c4c4c4; font-size: 3">
          <br>
          <div class="col-sm-6 col-md-6 col-lg-6" align="center">
            <br>
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.9794818685777!2d102.82124101486389!3d16.476576588630387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a8a4b2f1911%3A0xc718e7a7249c74f8!2z4Liq4Liz4LiZ4Lix4LiB4Lir4Lit4Liq4Lih4Li44LiUIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC4guC4reC4meC5geC4geC5iOC4mQ!5e0!3m2!1sth!2sth!4v1533227420863" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          
          <div class="col-sm-12 col-md-12 col-lg-6" align="left"><br>
            <p style="font-size: 10px;"><b>สำนักหอสมุด มหาวิทยาลัยขอนแก่น <br>
                123 ถนนมิตรภาพ ต.ในเมือง อ.เมือง จ.ขอนแก่น 40002 <br>
                โทรศัพท์: 0 4320 2541, โทรสาร: 0 4320 2543 <br>
                อีเมล: library@kku.ac.th <br>
            <a href="https://library.kku.ac.th/telphone/" style="color:black;">
            เบอร์โทรภายในคลิกที่นี่</a> 
            </b></p> 
          </div>
      
      </div>
      <br>      
    </div> 
</footer>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}




</script>

</body>
</html>
