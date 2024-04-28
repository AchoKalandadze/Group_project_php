<?php include 'header.php'; ?>

  </div>
  <div class="heading_container heading_center layout_padding">
    <h2>
        <span>
            <?php 
            if(($_POST["Full_Name"]!="")&& isset($_POST["Email"])&& isset($_POST["Phone_Number"])&& isset($_POST["Message"])){
                $pName=$_POST["Full_Name"];
                echo $pName . " ";
            }
        ?>
        </span>
        your form is submited.
    </h2>
  </div>
  <?php include 'footer.php'; ?>