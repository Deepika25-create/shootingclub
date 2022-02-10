<?php
 
 include('./php/logincheck.php');
 $name=$_SESSION['name'];
  $id=$_SESSION['id'];
  if(isset($_GET['eid'])){
     $empid=$_GET['eid'];
    include('./php/connection_db.php');

     $sql="SELECT name,email_id,employee_id,mobile,address,designation,gender FROM employee WHERE emp_id=$empid";

     $data=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($data);
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logistics &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      .box{
      width:90%;
      margin-top: 20px;
      
      margin-left: 100px;
    }
    .tbl{
      width:80%;
      height:320px;
      color:white;
      font-size: 20px;
      font-weight: bolder;
      

      }
      .tbl2{
            width:40%;
            margin-left: 140px;
           }
      
      #tf{
        width:100%;
        height:30px;
        font-size: 15px;
        color:white;
        font-weight: bolder;
        border:3px solid white;
        background-color: transparent;
        border-radius: 8px;

        }
        #tf:hover {
                  background: lightgray;
                  
                  }
      #btn{
        font-family: "Poppins", sans-serif;
                text-transform: uppercase;
                  font-weight: 400;
                  font-size: 12px;
                 letter-spacing: 1px;
                display: inline-block;
                 padding: 5px 20px;
                border-radius: 30px;
                  transition: 0.5s;
                 margin: 10px;
               border: 2px solid #fff;
                  color: #fff;
                  text-decoration: none;
              background-color: transparent;
      }
      #btn:hover {
         background: lightgray;
 /* background: #2dc997;*/
 /* border: 2px solid #2dc997;*/
}

    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
   
  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-white font-weight-light text-uppercase font-weight-bold"><?php echo"".$name;?></h2>
           <!--  <p class="breadcrumb-custom"> -->
         <div class="box">
          
    <form method="post" action="./php/emp_update_insert.php">
   <table class="tbl" cellpadding="2px">
      <tr>
       <th colspan="4" align="center"><h3><u>Update Employee Profile</u></h3></th>
   </tr>
   <tr>
     <th colspan="2" align="left">Name :</th>
     <th colspan="2"><input type="text" id="tf" name="emp_name" value="<?=$row['name']?>"></th>
   </tr>
   
   <tr>
       <th colspan="2" align="left">Email ID :</th>
     <th colspan="2"><input type="email" id="tf" name="emp_email" value="<?=$row['email_id']?>"></th>
   </tr>
   <tr>
     <th colspan="2" align="left"> Employee ID :</th>
   <th colspan="2"><input type="text" id="tf" name="emp_id" value="<?=$row['employee_id']?>"></th>
 </tr>
 <!-- <tr>
     <th colspan="2" align="left"> Confirm Password :</th>
     <th colspan="2"><input type="Password" id="tf"></th>
 </tr> -->
 <tr>
     <th colspan="2" align="left">Phone No :</th>
    <th colspan="2"><input type="number" id="tf" name="emp_mobile" value="<?=$row['mobile']?>"></th>
   </tr>
   
   <tr>
       <th colspan="2" align="left"> Address :</th>
       <th colspan="2"><input type="text" id="tf" name="emp_add" value="<?=$row['address']?>"></th>
     </tr>
     <tr>
       <th colspan="2" align="left"> Designation</th>
       <th colspan="2"><input type="text" id="tf" name="emp_design" value="<?=$row['designation']?>"></th>
     </tr>
     <tr>
      <th colspan="2" align="left"> Gender :</th>
       <th colspan="2" align="left">Male<input type="radio" id="radio" name="gender" value="male"  <?php if($row['gender']=="male"){echo"checked";}?>   > &nbsp; &nbsp; &nbsp;
        Female<input type="radio" id="radio" name="gender" value="female" <?php if($row['gender']=="female"){echo"checked";}?>    ></th>
     </tr>
     
 </table>
 <table class="tbl2">
    <tr>
      <input type="hidden" name="eid" value="<?=$empid;?>">
       <th colspan="4" align="center"><input type="submit" id="btn" value="Udate" name="btn_update"></th>
        
          <th colspan="4"  align="center"><input type="reset" id="btn" value="Reset" class="btn2"></th>
        </tr>
   </table>
 
</form>
  </div>


            <!-- </p> -->
          </div>
        </div>
         

      </div>
    </div>  

   <!-- footer remove form here --> 
    
   
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>