
<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $firstName = htmlspecialchars($_POST["firstName"] ?? "");
        $middleName = htmlspecialchars($_POST["middleName"] ?? "");
        $lastName = htmlspecialchars($_POST["lastName"] ?? "");
        $suffix = htmlspecialchars($_POST["suffix"] ?? "");
        $mobileNumber = htmlspecialchars($_POST["mobileNumber"] ?? "");
        $section = htmlspecialchars($_POST["section"] ?? "");
        $technology = htmlspecialchars($_POST["technology"] ?? "");
        $batch = htmlspecialchars($_POST["batch"] ?? "");
        $schoolId = htmlspecialchars($_POST["schoolId"] ?? "");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  
  <div class="formContainer">

    <h1>Submitted Form</h1>

    <form class="regForm" action="display.php" method="post">

        <div>
            <label>First Name</label>
            <input type="text" id="firstName" name="firstName" disabled placeholder="<?php echo $firstName?>">
        </div>

        <div>
            <label>Middle Name</label>
            <input type="text" id="middleName" name="middleName" disabled placeholder="<?php echo $middleName?>" >
        </div>

        <div>
            <label>Last Name</label>
            <input type="text" id="lastName" name="lastName" disabled placeholder="<?php echo $lastName?>" >
        </div>

        <div>
            <label>Suffix</label>
            <input type="text" disabled placeholder="<?php echo $suffix?>">
        </div>

        <div>
              <label>Mobile Number</label>
              <input type="text" id="mobileNumber" name="mobileNumber"  disabled placeholder="<?php echo $mobileNumber?>">
        </div>

        <div>
              <label>Section</label>
               <input type="text"  disabled placeholder="<?php echo $section?>">
        </div>

        <div>
              <label>Technology</label>
              <input type="text" disabled placeholder="<?php echo $technology?>">
        </div>

        <div>
              <label>Batch</label>
              <input type="text" disabled placeholder="<?php echo $batch?>">
        </div>

       <div>
              <label>School ID (Format: YYYY-BB-NNN)</label>
              <input type="text" id="schoolId" name="schoolId" disabled placeholder="<?php echo $schoolId?>">
      </div>
        <div>
            <button type="button" style="padding: 8px 14px;border: none;border-radius: 4px;font-weight: bold;cursor: pointer; background-color:red" id="returnBtn">
                Return
            </button>
            
            <button style="padding: 8px 14px;border: none;border-radius: 4px;font-weight: bold;cursor: pointer; background-color:green" id="continueBtn">
                Continue
            </button>
        </div>
        
    </form>
  </div> 






<script>
    document.getElementById("returnBtn").addEventListener("click", function() {
        window.location.href = "index.php"; 
    });
</script>

</body>
</html>

