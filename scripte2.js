// Frontend validation for "Contact Us" and "Rent Now" forms
document.getElementById('contactForm').addEventListener('submit', function (event) {
    const message = document.getElementById('message').value;
    if (message.trim() === '') {
        event.preventDefault();
        alert('Please enter a message!');
    }
});

document.getElementById('rentForm').addEventListener('submit', function (event) {
    const rentalStart = document.getElementById('rental_start').value;
    const rentalEnd = document.getElementById('rental_end').value;

    if (paymentMethod === '') {
        event.preventDefault();
        alert('Please select a payment method.');
    }
    if (rentalStart > rentalEnd) {
        event.preventDefault();
        alert('End date must be after the start date!');
    }
});
