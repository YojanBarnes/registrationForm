<?php
   
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

    <h1>Registration Form</h1>

    <form class="regForm" action="display.php" method="post">

        <div>
            <label>First Name</label>
            <input type="text" id="firstName" name="firstName" >
            <div id="firstNameError" style="color: red; font-size: 12px;"></div>
        </div>

        <div>
            <label>Middle Name</label>
            <input type="text" id="middleName" name="middleName" >
            <div id="middleNameError" style="color: red; font-size: 12px;"></div>
        </div>

        <div>
            <label>Last Name</label>
            <input type="text" id="lastName" name="lastName" >
            <div id="lastNameError" style="color: red; font-size: 12px;"></div>
        </div>

        <div>
            <label>Suffix</label>
            <select id="suffix" name="suffix" >
              <option value="none">None</option>
              <option value="sen">Sr.</option>
              <option value="jun">Jr.</option>
              <option value="fir">I</option>
              <option value="sec">II</option>
            </select>
        </div>

        <div>
              <label>Mobile Number</label>
              <input type="text" id="mobileNumber" name="mobileNumber">
              <div id="mobileNumberError" style="color: red; font-size: 12px;"></div>
        </div>

        <div>
              <label>Section</label>
              <select id="section" name="section">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
              </select>
        </div>

        <div>
              <label>Technology</label>
              <select id="technology" name="technology">
                <option value="computer">Computer Engineering Technology</option>
                <option value="electrical">Electrical Engineering Technology</option>
                <option value="mechanical">Mechanincal Engineering Technology</option>
                <option value="electronics">Electronics Engineering Technology</option>
              </select>
        </div>

        <div>
              <label>Batch</label>
              <select id="batch" name="batch">
                <option value="32">Batch 32</option>
                <option value="33">Batch 33</option>
                <option value="34">Batch 34</option>
              </select>
        </div>

       <div>
              <label>School ID (Format: YYYY-BB-NNN)</label>
              <input type="text" id="schoolId" name="schoolId">
              <div id="schoolIdError" style="color: red; font-size: 12px;"></div>
      </div>
        <div>
              <button class="submit">Submit</button>
        </div>
        
    </form>
  </div> 

  <!-- Confirmation Modal -->
<div id="confirmModal" class="modal">
  <div class="modalContent">
    <h2>Confirm Submit</h2>
    <p>Are you sure you want to submit the form?</p>
    <div class="modalActions">
      <button id="confirmBtn">Confirm</button>
      <button id="cancelBtn">Cancel</button>
    </div>
  </div>
</div>



<script src="assets/js/main.js"></script>

</body>
</html>


