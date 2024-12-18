document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }

    // Simple phone number validation
    const phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return;
    }

    // Log values (for demonstration purposes)
    console.log({
        name: name,
        email: email,
        phone: phone,
        password: password
    });

    alert("Registration successful!");
    // You can redirect or process the form data further
});
