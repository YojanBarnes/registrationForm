const form = document.querySelector('.regForm');
const schoolIdInput = document.getElementById('schoolId');
const firstNameInput = document.getElementById('firstName');
const middleNameInput = document.getElementById('middleName');
const lastNameInput = document.getElementById('lastName');
const mobileNumberInput = document.getElementById('mobileNumber');

const IdError = document.getElementById('schoolIdError');
const firstNameError = document.getElementById('firstNameError');
const middleNameError = document.getElementById('middleNameError');
const lastNameError = document.getElementById('lastNameError');
const numberError = document.getElementById('mobileNumberError');

const idPattern = /^\d{4}-[A-Z]{2}-\d{3}$/;
const namePattern = /^[A-Za-z]{1,12}$/;
const mobileNumberPattern = /^\d{11}$/;

function validateForm() {
  let valid = true;

  // Clear errors
  IdError.textContent = "";
  firstNameError.textContent = "";
  middleNameError.textContent = "";
  lastNameError.textContent = "";
  numberError.textContent = "";

  // School ID
  if (!idPattern.test(schoolIdInput.value.trim())) {
    IdError.textContent = "School ID format is wrong! Use YYYY-BB-NNN";
    if (valid) schoolIdInput.focus();
    valid = false;
  }

  // First Name
  if (!namePattern.test(firstNameInput.value.trim())) {
    firstNameError.textContent = "First name must be 1–12 letters only.";
    if (valid) firstNameInput.focus();
    valid = false;
  }

  // Middle Name
  if (!namePattern.test(middleNameInput.value.trim())) {
    middleNameError.textContent = "Middle name must be 1–12 letters only.";
    if (valid) middleNameInput.focus();
    valid = false;
  }

  // Last Name
  if (!namePattern.test(lastNameInput.value.trim())) {
    lastNameError.textContent = "Last name must be 1–12 letters only.";
    if (valid) lastNameInput.focus();
    valid = false;
  }

  // Mobile Number
  if (!mobileNumberPattern.test(mobileNumberInput.value.trim())) {
    numberError.textContent = "Mobile number must be exactly 11 digits.";
    if (valid) mobileNumberInput.focus();
    valid = false;
  }

  return valid;
}

form.addEventListener('submit', function(event) {
  if (!validateForm()) {
    event.preventDefault(); // Stop form from submitting
  } else {
    
  }
});


const modal = document.getElementById('confirmModal');
const confirmBtn = document.getElementById('confirmBtn');
const cancelBtn = document.getElementById('cancelBtn');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // prevent immediate submission

  if (!validateForm()) {
    return; // show errors if invalid
  }

  // Show confirmation modal if valid
  modal.style.display = "flex";
});

// Confirm button -> actually submit
confirmBtn.addEventListener('click', function() {
  modal.style.display = "none";
  form.submit(); // now submit form for real
  alert("Form Submitted!");
});

// Cancel button -> close modal
cancelBtn.addEventListener('click', function() {
  modal.style.display = "none";
});


