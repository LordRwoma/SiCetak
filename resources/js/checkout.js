document.addEventListener("DOMContentLoaded", () => {
    // Toggle payment method
    const methodInput = document.getElementById("payment_method");
    const qrisSection = document.getElementById("qris-section");
    document.querySelectorAll(".payment-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
            document
                .querySelectorAll(".payment-btn")
                .forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");
            const method = btn.dataset.method;
            methodInput.value = method;
            qrisSection.style.display = method === "qris" ? "block" : "none";
        });
    });

    // Qty buttons (contoh sederhana)
    document.querySelectorAll(".quantity-control").forEach((ctrl) => {
        const valueEl = ctrl.querySelector(".qty-value");
        ctrl.querySelector(".minus")?.addEventListener("click", () => {
            let v = parseInt(valueEl.textContent, 10) || 1;
            valueEl.textContent = Math.max(1, v - 1);
        });
        ctrl.querySelector(".plus")?.addEventListener("click", () => {
            let v = parseInt(valueEl.textContent, 10) || 1;
            valueEl.textContent = v + 1;
        });
    });
});
