document.addEventListener('DOMContentLoaded', function () {

    const form = document.querySelector('.contact-form');
    const closeBtn = document.getElementById('close-toast');
    const toast = document.getElementById('success-toast');

    // +91 add before submit
    if (form) {
        form.addEventListener('submit', function () {
            const input = this.querySelector('input[name="mobilenumber"]');
            if (input && !input.value.startsWith('+91')) {
                input.value = '+91' + input.value;
            }
        });
    }

    // ❌ Close toast → clean contact page
    if (closeBtn && toast) {
        closeBtn.addEventListener('click', function () {

            // 1️⃣ hide toast immediately
            toast.classList.remove('show');

            // 2️⃣ short delay ke baad clean redirect
            setTimeout(() => {
                window.location.href = '/contact';
            }, 200);
        });
    }

});
