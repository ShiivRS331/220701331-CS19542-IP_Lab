document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const regNo = document.getElementById('regNo').value;
    const subjectCode = document.getElementById('subjectCode').value;

    const regNoPattern = /^\d{9}$/;
    const subjectCodePattern = /^[A-Za-z]{2}\d{5}$/;

    if (!regNoPattern.test(regNo)) {
        window.alert('Registration number must be a 9-digit number.');
        event.preventDefault();
        return;
    }

    if (!subjectCodePattern.test(subjectCode)) {
        window.alert('Subject Code must be 7 characters long, with the first 2 characters as letters followed by 5 numbers.');
        event.preventDefault();
        return;
    }

    // If both checks pass
    alert('Form submitted successfully!');
});