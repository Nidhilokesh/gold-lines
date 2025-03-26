document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    // Sweet Alert 2 for nicer popups
    function showAlert(type, message) {
        Swal.fire({
            icon: type === 'success' ? 'success' : 'error',
            title: type === 'success' ? 'Success!' : 'Oops...',
            text: message,
            background: 'var(--bg-secondary)',
            color: 'var(--text-primary)',
            confirmButtonColor: 'var(--accent-color)'
        });
    }

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Disable submit button during submission
        const submitBtn = contactForm.querySelector('.submit-btn');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        const formData = new FormData(contactForm);

        fetch('process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Changed to check 'status' instead of 'success'
            if (data.status === 'success') {
                showAlert('success', data.message);
                contactForm.reset(); // Clear form fields
            } else {
                showAlert('error', data.message);
            }
        })
        .catch(error => {
            showAlert('error', 'An unexpected error occurred.');
            console.error('Error:', error);
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send Message';
        });
    });
});