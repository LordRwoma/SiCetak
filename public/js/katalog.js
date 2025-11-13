document.addEventListener('DOMContentLoaded', function () {
    const kategoriButtons = document.querySelectorAll('.kategori-btn');
    kategoriButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            kategoriButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    const cartButtons = document.querySelectorAll('.btn-cart');
    cartButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.textContent = '✅ Dibeli';
            btn.style.background = '#10b981';
            setTimeout(() => {
                btn.textContent = 'Beli';
                btn.style.background = '#4A7BA7';
            }, 1500);
        });
    });
});
