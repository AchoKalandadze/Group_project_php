<?php include 'header.php'; ?>

  </div>
  <div class="heading_container heading_center layout_padding2-top">
        <h2>
        Your reservation has been <span>accepted</span>
        </h2>
      </div>
  <div class="bConfSpliter">
    <div class="bConfLeft">
    <p>Patient Name:</p>
    <p>Doctor's Name:</p>
    <p>Department's Name:</p>
    <p>Phone Number:</p>
    <p>Symptoms:</p>
    <p>Date:</p>
    </div>
    <div class="bContRight">
    <?php

    if(($_POST["PatientName"]!="")&& isset($_POST["DoctorName"])&& isset($_POST["DepartmentName"])&& isset($_POST["Phone_Number"])&& isset($_POST["Symptoms"])&& isset($_POST["date"])){
      $pName=$_POST["PatientName"];
      $dName=$_POST["DoctorName"];
      $department=$_POST["DepartmentName"];
      $pNum=$_POST["Phone_Number"];
      $symptoms=$_POST["Symptoms"];
      $date=$_POST["date"];
      
      echo "<p>$pName</p>";
      echo "<p>$dName</p>";
      echo "<p>$department</p>";
      echo "<p>$pNum</p>";
      echo "<p>$symptoms</p>";
      echo "<p>$date</p>";

    }

    ?>

    </div>

  </div>

<?php include 'footer.php'; ?>