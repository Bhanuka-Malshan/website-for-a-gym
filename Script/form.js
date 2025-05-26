function validateForm() {
    // Get the values entered by the user
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var address = document.getElementById("address").value;
    var contactNo = document.getElementById("contactNo").value;
    var occupation = document.getElementById("occupation").value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var ageRange = document.getElementById("ageRange").value;
    var dob = document.getElementById("dob").value;
    var nic = document.getElementById("nic").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password2").value;

    // Regular expressions for validation
    var nameRegex = /^[A-Za-z\s]+$/;
    var contactNoRegex = /^\d{10}$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

    // Perform validation
    if (firstName.trim() === "" || !nameRegex.test(firstName)) {
        alert("Please enter a valid first name.");
        return false;
    }
    if (lastName.trim() === "" || !nameRegex.test(lastName)) {
        alert("Please enter a valid last name.");
        return false;
    }
    if (address === "") {
        alert("Please enter your address.");
        return false;
      }
    if (contactNo.trim() === "" || !contactNoRegex.test(contactNo)) {
        alert("Please enter a valid contact number.");
        return false;
    }
    if (occupation.trim() === "") {
        alert("Please enter your occupation.");
        return false;
    }
    if (!gender) {
        alert("Please select your gender.");
        return false;
    }
    if (ageRange === "Age Range") {
        alert("Please select your age range.");
        return false;
    }
    if (dob.trim() === "") {
        alert("Please enter your date of birth.");
        return false;
    }
    if (nic === "") {
        alert("Please enter your NIC.");
        return false;
    }
    if (email.trim() === "" || !emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }
    if (password.trim() === "" || !passwordRegex.test(password)) {
        alert("Please enter a valid password. It must contain at least 8 characters including at least one uppercase letter, one lowercase letter, and one digit.");
        return false;
    }
    if (confirmPassword.trim() === "" || password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}
