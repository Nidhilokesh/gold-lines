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

        // Collect selected services
        const selectedServices = Array.from(
            contactForm.querySelectorAll('input[name="services[]"]:checked')
        ).map(checkbox => checkbox.value);

        // Disable submit button during submission
        const submitBtn = contactForm.querySelector('.submit-btn');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        const formData = new FormData(contactForm);
        
        // Add selected services to form data
        formData.delete('services[]');
        selectedServices.forEach(service => {
            formData.append('services[]', service);
        });

        fetch('process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
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