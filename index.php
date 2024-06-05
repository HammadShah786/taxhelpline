<?php include "head.php";
include "admin/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KodeLab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet"> -->
</head>
<style>
.head{width: 100%;height: 200px; 
    background-color: #ebebebf7;}

.head img{width: 300px;}
.img1st{margin: 0% 37%;
        padding-top: 62px;}

        .img1st h4{ padding: 0px;
            font-size: 1.0rem !important;
            margin: 0px;
            font-family: 'Jockey One';
            color: #0299A9;
            font-weight: 800;}
            .boxx{background-color: #049cae; border:2px solid #049cae ; background-image: url(pngwing.com.png);
                 display: flex;  justify-content: center;  align-items: center; transition: 0.5s;}
            .boxx:hover{    background: #049cae14; border: 2px solid #929a9d;transition: 0.5s; }
            .boxx:hover h1{   color: #929a9d; transition: 0.5s;}
            .boxx1{border:2px solid #929a9d; background-color: #929a9d;background-image: url(pngwing.com.png); background-repeat: no-repeat;
                   background-size: 70%;  display: flex;  justify-content: center;  align-items: center; transition: 0.5s;}
            .boxx1:hover{background: #e2e2e2; border: 2px solid #049cae; transition: 0.5s;}
            .boxx1:hover h1{color: #049cae;transition: 0.5s;}
            .boxx,.boxx1{width: 100%;height: 110px;margin-top: 0%;transition: 0.5s;}
            .boxx h1{text-align: center;font-family: 'Libre Baskerville', serif; color: white; transition: 0.5s;}
            .boxx1 h1{text-align: center;font-family: 'Libre Baskerville', serif; color: white;transition: 0.5s;}
a{ text-decoration: none;}

.flip-box {
  background-color: transparent;
  width: 300px;
  height: 330px;
  /* border: 1px solid #f1f1f1; */
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 80%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
/* .flip-box-front {
  background-color: #bbb;
  color: black;
} */

/* Style the back side */
.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
.row {
    --bs-gutter-x: 0;
    --bs-gutter-y: 0;}


</style>
<script>
            setTimeout(function() {
  document.getElementById('myDiv').classList.add('animate');
}, 100);
        </script>
        <style>
            #myDiv {
  /* width: 100px;
  height: 100px;
  background-color: red; */
  opacity: 0;
  /* position: absolute;
  /* top: 50%; */
  /* left: 0; */ 
  transition: opacity 1s, left 1s;
}

#myDiv.animate {
  opacity: 1;
  left: 50%;
}
hr{    color: #c6c6c6 !important;}

@media (max-width: 1025px)
{
    .books{width: 95% !important; height: 280px !important;}
    .flip-box{width: 90% !important; height: 280px !important;}
    .bgis{width: 100% !important; height: 280px !important; }
    .flip-box-front, .flip-box-back {
    position: absolute;
    width: 100% !important;
    height: 200px !important;}
    .animate{margin-top:3% !important;}
.boxx, .boxx1{height:100px !important;}
}
@media (max-width: 1000px)
{
    
.flip-box {
  
    display: none !important;
}
    
}

.orderflip
{
    position: sticky;
    top: 100%;
    font-weight: bold;
    background: #05626f;
    border: #929a9d;
    width: 100%;
    border-radius: 0px;
    font-family: math;
    font-size: 20px;
    padding: 0px;
}
.orderflip:hover
{
    background:grey;
}

</style>

<?php  
    
    if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
       $fv= $k['approve'];
        
       if ($fv== "v") {
       
    
        $ppp = $k['tdate'];
   
      $cdate= date ("d-M-Y");

if($cdate >= $ppp){
$eee= $_SESSION['Email_Address'];
    $heeloo="UPDATE `signup` SET `approve`='c'  WHERE `Email_Address` ='$eee'";
    mysqli_query($con,$heeloo);
    session_unset();
    
}else{
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
    </strong>Your Account has been activated for three days. On  '.$ppp.'  your account will be suspended. Kindly contact us at <a href="contact"> Taxhelpline</a>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}}}
    ?> 

<body>


        <div class="container-fluid" id="myDiv"  style="margin-top: 2%;">
                <div class="row">
                        
                 
                            <div class="col-xl-3 col-lg-3 asifg" >
                                <center>
                                    <a href="bookdetail?id=<?php echo "1";?>">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                                <div class="flip-box-front">
                                                    <img alt="Sales Tax Law & Prcatice" src="publications/stlpss.png" class="books"  style="width: 100%; height: 330px;">
                                                </div>
                                                <div class="flip-box-back">
                                                        <div class="bgis" style="background-image:url(publications/stlpb.jpg);width: 100%; height: 330px;background-size:100%;background-repeat:round;">
                                                            <button style=""                                                   
                                                                class="btn btn-danger orderflip">Order Now
                                                            </button>
                                                        </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </center>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <!-- First  -->
                                <div class="col-xl-12 col-lg-12 col-md-12" style="margin-bottom:  4%;">   
                                    <center>
                                        <a href="incometax">
                                            <div class=" boxx" >
                                                <h1>Income Tax </h1>
                                            </div>
                                        </a> 
                                    </center>
                                </div>      
                                
                                <!-- Second -->
                                <div class="col-xl-12 col-lg-12 col-md-12" style="margin-bottom:  4%;">  
                                
                                    <center>    
                                        <a href="salestax">
                                            <div class="boxx1">
                                                <h1>Sales Tax </h1>
                                            </div>
                                        </a> 
                                    </center>
                                </div>   

                                <!-- Third -->
                                <div class="col-xl-12 col-lg-12 col-md-12" style="margin-bottom:  4%;">
                                    <center>    
                                        <a href="customs">
                                            <div class="boxx">
                                                <h1>Customs </h1>
                                            </div>
                                        </a> 
                                    </center>
                                </div>  
                            </div>    

                            <div class="col-xl-3 col-lg-3">
                                <center>
                                    <a href="bookdetail?id=<?php echo "1";?>">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                                <div class="flip-box-front">
                                                    <img alt="sales tax law And Prcat" src="publications/pcg.png" class="books"  style="width: 100%; height: 330px;">
                                                </div>
                                                <div class="flip-box-back">
                                                        <div class="bgis" style="background-image:url(publications/pcgb.png);width: 100%; height: 330px;background-size:100%;background-repeat:round;">
                                                            <button style=""                                                   
                                                                class="btn btn-danger orderflip">Order Now
                                                            </button>
                                                        </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </center>    
                            </div>
                       
                       
                            <div class="col-xl-3 col-lg-3">
                                    <center>
                                        <a href="bookdetail?id=<?php echo "1";?>">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img alt="sales tax law And Prcat" src="publications/pclp.png" class="books"  style="width: 100%;height: 330px; margin-top: -60px; ">
                                                    </div>
                                                    <div class="flip-box-back">
                                                            <div  class="bgis" style="background-image:url(publications/clpb.png);width: 100%; height: 330px;background-size:100%;background-repeat:round;margin-top:-60px;">
                                                                <button style=""                                                   
                                                                    class="btn btn-danger orderflip">Order Now
                                                                </button>
                                                            </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </center>     
                            </div>
                            <div class="col-xl-6 col-lg-6"><center> 
                               
                                <!-- Fourth -->
                                <div class="col-xl-12 col-lg-12 col-md-12" style="margin-bottom: 4%;">
                                    <center>    
                                        <a href="federalexcise">
                                            <div class="boxx1">
                                               <h1>Federal Excise </h1>
                                            </div>
                                        </a> 
                                    </center>
                                </div>
                                
                                <!-- Fifth -->
                                <div class="col-xl-12 col-lg-12 col-md-12" style="margin-bottom: 4%;" >
                                    <center>    
                                        <a href="salestaxon">
                                            <div class="boxx">
                                               <h1>Sales Tax on Services </h1>
                                            </div>
                                        </a> 
                                    </center>
                                </div>
                                

                            </div>    
                            <div class="col-xl-3 col-lg-3">
                                    <center>
                                        <a href="bookdetail?id=<?php echo "1";?>">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img alt="sales tax law And Prcat" src="publications/strg.png" class="books"  style="width: 100%;height: 330px;margin-top:-60px;">
                                                    </div>
                                                    <div class="flip-box-back">
                                                            <div  class="bgis" style="background-image:url(publications/strgb.png);width: 100%; height: 330px;background-size:100%;background-repeat:round;margin-top:-60px;">
                                                                <button style=""                                                   
                                                                    class="btn btn-danger orderflip">Order Now
                                                                </button>
                                                            </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </center>     
                            </div>    
                        
                </div>
        </div>
        

<style>
.blue{border: 1px solid #1d939d;
    padding: 11px;
    /*width: 100%;*/
    
    /*height: 200px;*/
    margin-bottom: 20px;
    margin-top: 20px;
    color: #31363a;
    margin-right:10px;
   

}
    a:hover{color: rgb(50 54 58) !important;
    }
    .blue h3{display: inline;font-weight: 800;font-size: 24px;}

    .asan{font-family: math;    font-size: 18px;    color: white;}
    
.blue a{    color: #1e4045 !important;  transition: all .3s ease;}
.blue a:hover{    color: #000000 !important;  transition: all .3s ease;}




.blue:hover
{
    /* transform: translateY(-2px); */
    box-shadow: 0 10px 20px 0 rgba(5,19,79,.09);
    background: var(--bs-white)!important;
    /* filter:drop-shadow(0px 5px 5px rgba(0, 0, 0, 0.3)); */
    transition: all .3s ease;
}
.blue{position: relative; width: auto; height: 600px; line-height: 25px; overflow: scroll;}

</style>

<script>
let scrollDiv = document.querySelector(".blue");
SimpleScrollbar.initEl(scrollDiv);
 </script>

        <hr style="margin-top:-20px;">
<div class="container" >
    <div class="row asan">
        <div class="col-xl-4 col-lg-4"><div class="blue">
    <h3>Case Laws</h3><img src="news-ticker.gif" alt="" style="margin-left: 10px; display: inline; width: 53px;">
<hr>
<ol>
    <?php  $has="SELECT * FROM `cases`ORDER BY `ID` Desc LIMIT 0,10";
    $data01=mysqli_query($con,$has);
   foreach ($data01 as $P ) {
 
       
    ?>
   <a href="viewreport?id=<?php echo $P['ID'] ?>"> <li style="text-align:justify;"><b> <?php echo $P['Judgment'] ?></b> | <?php echo $P['Court'] ?>  | <?php echo $P['Topic'] ?></b>   
   | <?php echo $P['Law'] ?> | <?php echo $P['Sections'] ?></li></a>
<hr>
<?php  }?>
</ol>
        </div></div>
        <div class="col-xl-4 col-lg-4"><div class="blue"><h3>Judgments</h3><img src="news-ticker.gif" alt="" style="margin-left: 10px; display: inline; width: 53px;"><hr>
        
            <ol>
            <?php  $has="SELECT * FROM `judgments`ORDER BY `ID` DESC LIMIT 0,10";
    $data01=mysqli_query($con,$has);
   foreach ($data01 as $P ) {
 
       
    ?>
   <a href="viewjudgment?id=<?php echo $P['ID'] ?>"> <li style="text-align:justify;"><?php echo $P['Court'] ?> | <b> <?php echo $P['PTD'] ?> </b> |
   <?php echo $P['Law'] ?> | <?php echo $P['Sect'] ?> 
   
                 </li></a>
    <hr>
<?php  }?>
            </ol>
        </div></div>
        <div class="col-xl-4 col-lg-4"><div class="blue"><h3>SROs</h3><img src="news-ticker.gif" alt="" style="margin-left: 10px; display: inline; width: 53px;"><hr>
            <ol>  <?php  $has="SELECT * FROM `sro`ORDER BY `ID` ASC LIMIT 0,10";
    $data01=mysqli_query($con,$has);
   foreach ($data01 as $P ) {
 
       
    ?>
              <a href="sros?tax=<?php echo $P['Catag'] ?>"> <li style="text-align:justify;"><?php echo $P['sron'] ?> | <?php echo $P['sub'] ?></a> 
                </li><hr>
                <?php } ?>
            </ol>
        </div></div>
    </div>
</div>

<hr>

<style>
    .section-title {
    text-align: center;
    padding-bottom: 25px;
}

.section-title h2 {
    font-size: 45px;
    font-weight: 900;
   
    margin-top: 2%;
    position: relative;
    color: #2a939c;
    font-family: math;
}
.asif{color: black;
    margin-top: 0%;
  
    padding-bottom: 20px;
    padding-top: 20px;
    display:flex;
    justify-content: center;
    align-items: center;
}
.asd
{
    border-color: hsla(0,0%,40%,.1)!important;

   border-radius:1rem!important;
}



@media (max-width:900px)
{
    
.boss h1, h5{text-align:center;}
.boss h6{padding-left: 5%;}    
}
@media (min-width: 1400px){
.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 90%;
    
}}

.illll{border: 1px solid #ede4e4; transition:0.5s;
    border-radius: 10px;}

.illll:hover{transition:0.5s; box-shadow:2px 10px 10px #bbbbbb;}

</style>

<div class="section-title">
          <h2>Director Message</h2>
        </div>

    

<div class="container illll">

<div class="card asd" >
			<div class="row asif">

				<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6" style="color:black;">
					<center><img src="e.png" class="image-fluid" style="  width:250px; height:300px; "></center>

				</div>
				<div class="col-xl-10 col-lg-8 col-md-12 col-sm-12 boss">
						<h1 style="font-size: 35px;font-family:math; font-weight: bolder;" ><b>S.M. Ramzan Gillani</b></h1>
                        <h5 style="    font-size: 20px;font-family:math; "><b>Advocate High Court (MA , LL.B & LL.M)</b></h5>
						
							<h6 style="font-family:Math;font-size: 19px;line-height: 28px;color:#3e4447;text-align: justify;padding-right: 3%;">
                            We have launched website www.taxhelplines.com.pk and www.taxhelplines.pk. They are highly informative and useful websites for all the concerned people; Tax Managers, Tax Collectors Tax Consultants, Chartered Accountants, Lawyers and Students of Taxation. We have given preference to case laws and important paras or concluding paras of judgments side by side the detailed judgments, illustrations and other relevant information. We may continuously upload data day to day on our websites. The taxhelpline is very helpful for taxpayers and tax consultants. We are continuously working on research for the facilitation of trade and industries and solutions of their day to day tax problems. www.taxhelplines.com.pk and www.taxhelplines.pk is a climax of our achievements for taxpayers. You may learn more taxation at our website. We hope you will benefits of our research and experience. We shall welcome your suggestions for further improvement. You may also share authenticated information and tax materials.
									
				</div>
</div></div></div></div>
<br>



<?php
// include "slide/uslider.php";

include("footer.php");
?>
