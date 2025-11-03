document.addEventListener('DOMContentLoaded', function() {
    // Handle quantity buttons
    document.querySelectorAll('.qty-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const parent = btn.parentElement;
            const valueSpan = parent.querySelector('.qty-value');
            let value = parseInt(valueSpan.textContent);

            if (btn.classList.contains('plus')) value++;
            if (btn.classList.contains('minus') && value > 1) value--;

            valueSpan.textContent = value;
        });
    });

    // Handle payment method toggle
    const paymentButtons = document.querySelectorAll('.payment-btn');
    const qrisSection = document.getElementById('qris-section');

    paymentButtons.forEach(button => {
        button.addEventListener('click', () => {
            paymentButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const method = button.dataset.method;
            if (method === 'qris') {
                qrisSection.style.display = 'block';
            } else {
                qrisSection.style.display = 'none';
            }
        });
    });

    // Upload file feedback
    const uploadInput = document.getElementById('bukti-upload');
    const uploadLabel = document.querySelector('.upload-label p');

    uploadInput?.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            uploadLabel.textContent = "Bukti pembayaran sudah dipilih ✅";
        } else {
            uploadLabel.textContent = "Klik untuk Upload bukti pembayaran";
        }
    });
});
