    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

<?php
session_start();
error_reporting(0);
include('../connect.php');

$email = $_SESSION['uemail'];

?>
      <div id="content">
        <div class="content_item" class="container">
          <div class="col-md-12">
            <div class="well well-md">
              <p>
                <?php 

$sql = "SELECT * FROM admission WHERE email = '$email' AND status = '1'";
  $result = mysqli_query($conn, $sql);
($row = mysqli_fetch_assoc($result));
if ( $row['status'] == '1') {
				 ?>
              </p>
              <p><img src="../images/apple-touch-icon.jpg" width="88" height="86" /></p>
              <h3>Letter of Admission to <?php echo $row['fullname']?></h3>
                      <p>Dear <?php echo $row['fullname']."," ?></p>
                      <p>Congratulations! We are pleased to offer you admission to the Arthur Jarvis University, Calabar                      </p>
                      <p>
                        PROCEDURE FOR PAYMENT OF ACCEPTANCE FEE, ACADEMIC CLEARANCE & PAYMENT OF TUITION FEE

YOU ARE EXPECTED TO PAY THE ACCEPTANCE FEE ON OR BEFORE 7TH AUGUST, 2021. PLEASE NOTE THAT THE ACCEPTANCE FEE IS NON-REFUNDABLE AND DOES NOT GUARANTEE YOUR ADMISSION. NOTE THAT UNDER NO CIRCUMSTANCE WOULD THE DATE FOR THE PAYMENT OF ACCEPTANCE FEE BE EXTENDED.
<ol>
<li>PAY YOUR ACCEPTANCE FEE WITH AN ATM CARD.</li>
<li>PRINT YOUR ACCEPTANCE FEE RECEIPT AND CLEARANCE SCHEDULE.</li>
<li>KEEP YOUR RECEIPT AND CLEARANCE SCHEDULE FOR REGISTRATION.</li>
<li>DEADLINE FOR PAYMENT OF TUITION FEE IS 24TH NOVEMBER, 2017.</li>
</ol>
<h3>THE FOLLOWING DOCUMENTS ARE REQUIRED FOR REGISTRATION:</h3>
<ol>
<li>O'LEVEL RESULT AND JAMB RESULT. (ORIGINAL AND 4 PHOTOCOPIES)</li>
<li>APPLICATION SLIP.</li>
<li>ADMISSION SLIP.</li>
<li>ACCEPTANCE FEE RECEIPT.</li>
<li>RECEIPT FOR PAYMENT MADE FOR CHANGE OF COURSE/INSTITUTION. (IF APPLICABLE)</li>
</ol>


<b>TUITION FEE MUST BE PAID BY 24TH JULY, 2021 FAILING WHICH YOU FORFEIT THIS PROVISIONAL OFFER OF ADMISSION.</b><br><br><br>

SIGNED<br>
---------------------<br>
REGISTRAR
                      </p>

                  <?php }else{ ?>
                    <h4 style="color:red">Sorry, no Admission yet. Check back later.</h4>
                    <?php } ?>
             
            </div>  
      </div>
      </div><!--close content-->  
    </div><!--close site_content-->  
 



