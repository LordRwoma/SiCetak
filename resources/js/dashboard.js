// Fungsi untuk masuk ke dashboard
function masukDashboard() {
    sessionStorage.setItem('isDashboard', 'true');
    window.location.href = '/dashboard';
}

// Fungsi untuk masuk ke dashboard
function masukDashboard() {
    sessionStorage.setItem('isDashboard', 'true');
    window.location.href = '/dashboard';
}

// Fungsi untuk keluar dari dashboard
function keluarDashboard(event) {
    event.preventDefault();
    
    // Konfirmasi keluar
    if (confirm('Apakah Anda yakin ingin keluar dari dashboard?')) {
        sessionStorage.removeItem('isDashboard');
        localStorage.removeItem('chatDraft'); // Clear chat draft juga
        window.location.href = '/';
    }
}

// Cek apakah sudah masuk dashboard
document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname;
    const isDashboard = sessionStorage.getItem('isDashboard');
    
    // Jika di halaman dashboard tapi belum "masuk", redirect ke home
    if (currentPath.includes('/dashboard') && !isDashboard) {
        window.location.href = '/';
    }
});

// Update cart badge
function updateCartBadge() {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartBadge = document.querySelector('.cart-badge');
    if (cartBadge) {
        cartBadge.textContent = cartItems.length;
    }
}

// Add to cart functionality
document.addEventListener('DOMContentLoaded', () => {
    // Update cart badge on page load
    updateCartBadge();
    
    // Add to cart buttons
    const addCartButtons = document.querySelectorAll('.btn-add-cart');
    addCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const productCard = this.closest('.product-card');
            const productName = productCard.querySelector('.product-name').textContent;
            const productPrice = productCard.querySelector('.product-price').textContent;
            
            // Get cart from localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            // Add product to cart
            const product = {
                id: Date.now(),
                name: productName,
                price: productPrice,
                quantity: 1
            };
            
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));
            
            // Update cart badge
            updateCartBadge();
            
            // Show notification
            showNotification('Produk berhasil ditambahkan ke keranjang!');
            
            // Animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
        });
    });
    
    // Search functionality
    const searchInput = document.querySelector('.search-input');
    const searchBtn = document.querySelector('.search-btn');
    
    if (searchBtn) {
        searchBtn.addEventListener('click', () => {
            const searchTerm = searchInput.value.trim();
            if (searchTerm) {
                console.log('Searching for:', searchTerm);
                // Implement search logic here
            }
        });
    }
    
    if (searchInput) {
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                searchBtn.click();
            }
        });
    }
    
    // Floating chat button
    const floatingChatBtn = document.querySelector('.floating-chat-btn');
    if (floatingChatBtn) {
        floatingChatBtn.addEventListener('click', () => {
            window.location.href = '/dashboard/si-bot';
        });
    }
    
    // Pesan Sekarang button
    const pesanSekarangBtn = document.querySelector('.btn-pesan-sekarang');
    if (pesanSekarangBtn) {
        pesanSekarangBtn.addEventListener('click', () => {
            window.location.href = '/dashboard/katalog';
        });
    }
    
    // Cart button
    const cartBtn = document.querySelector('.cart-btn');
    if (cartBtn) {
        cartBtn.addEventListener('click', () => {
            window.location.href = '/dashboard/keranjang';
        });
    }
});

// Show notification
function showNotification(message) {
    // Remove existing notification
    const existingNotif = document.querySelector('.custom-notification');
    if (existingNotif) {
        existingNotif.remove();
    }
    
    // Create notification
    const notification = document.createElement('div');
    notification.className = 'custom-notification';
    notification.innerHTML = `
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="20 6 9 17 4 12"/>
        </svg>
        <span>${message}</span>
    `;
    
    document.body.appendChild(notification);
    
    // Show notification
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    // Hide notification after 3 seconds
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Product card animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.addEventListener('DOMContentLoaded', () => {
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        observer.observe(card);
    });
});

// Tab functionality untuk katalog
document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.dataset.tab;
            
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked button and corresponding content
            button.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
    
    // Load keranjang items
    loadKeranjangItems();
    
    // SiBot functionality
    initSiBot();
});

// SiBot Chat functionality
function initSiBot() {
    const chatInput = document.getElementById('chatInput');
    const btnSend = document.getElementById('btnSend');
    const chatMessages = document.getElementById('chatMessages');
    const quickBtns = document.querySelectorAll('.quick-btn');
    
    if (!chatInput || !btnSend) return;
    
    // Send message
    const sendMessage = () => {
        const message = chatInput.value.trim();
        if (message) {
            addUserMessage(message);
            chatInput.value = '';
            
            // Simulate bot response
            setTimeout(() => {
                addBotResponse(message);
            }, 1000);
        }
    };
    
    btnSend.addEventListener('click', sendMessage);
    
    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
    
    // Quick questions
    quickBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const question = btn.textContent;
            addUserMessage(question);
            
            setTimeout(() => {
                addBotResponse(question);
            }, 1000);
        });
    });
}

function addUserMessage(message) {
    const chatMessages = document.getElementById('chatMessages');
    const messageDiv = document.createElement('div');
    messageDiv.className = 'message user-message';
    messageDiv.innerHTML = `
        <div class="message-content">${message}</div>
        <span class="message-time">Just now</span>
    `;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function addBotResponse(userMessage) {
    const chatMessages = document.getElementById('chatMessages');
    let response = '';
    
    // Simple response logic
    if (userMessage.toLowerCase().includes('cara memesan') || userMessage.toLowerCase().includes('pesan')) {
        response = 'Untuk memesan, Anda bisa: 1) Pilih produk di katalog, 2) Klik tambah ke keranjang, 3) Lakukan checkout dan pembayaran. Sangat mudah!';
    } else if (userMessage.toLowerCase().includes('harga')) {
        response = 'Harga cetak bervariasi tergantung jenis dan ukuran. Untuk fotocopy mulai dari Rp 200/lembar, banner mulai dari Rp 11.000. Cek katalog untuk detail lengkap!';
    } else if (userMessage.toLowerCase().includes('jam') || userMessage.toLowerCase().includes('operasional')) {
        response = 'Jam operasional kami: Senin-Jumat 08:00-22:00, Sabtu 08:00-23:00, Minggu 09:00-16:00. Kami siap melayani Anda!';
    } else {
        response = 'Terima kasih atas pertanyaan Anda! Tim kami akan segera membantu. Apakah ada yang bisa saya bantu lagi?';
    }
    
    const messageDiv = document.createElement('div');
    messageDiv.className = 'message bot-message';
    messageDiv.innerHTML = `
        <div class="message-content">${response}</div>
        <span class="message-time">Just now</span>
    `;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Keranjang functionality
function loadKeranjangItems() {
    const keranjangItems = document.getElementById('keranjangItems');
    const emptyCart = document.getElementById('emptyCart');
    
    if (!keranjangItems) return;
    
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cart.length === 0) {
        if (emptyCart) emptyCart.style.display = 'flex';
        if (keranjangItems) keranjangItems.style.display = 'none';
        return;
    }
    
    if (emptyCart) emptyCart.style.display = 'none';
    if (keranjangItems) keranjangItems.style.display = 'flex';
    
    keranjangItems.innerHTML = '';
    
    cart.forEach((item, index) => {
        const itemDiv = document.createElement('div');
        itemDiv.className = 'keranjang-item';
        itemDiv.innerHTML = `
            <div class="item-image">
                <div class="item-image-placeholder"></div>
            </div>
            <div class="item-details">
                <h4 class="item-name">${item.name}</h4>
                <p class="item-price">${item.price}</p>
            </div>
            <div class="item-actions">
                <div class="quantity-control">
                    <button class="qty-btn" onclick="updateQuantity(${index}, -1)">-</button>
                    <span class="qty-value">${item.quantity}</span>
                    <button class="qty-btn" onclick="updateQuantity(${index}, 1)">+</button>
                </div>
                <button class="btn-remove" onclick="removeItem(${index})">Hapus</button>
            </div>
        `;
        keranjangItems.appendChild(itemDiv);
    });
    
    updateSummary(cart);
}

function updateQuantity(index, change) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cart[index]) {
        cart[index].quantity += change;
        
        if (cart[index].quantity <= 0) {
            cart.splice(index, 1);
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        loadKeranjangItems();
        updateCartBadge();
    }
}

function removeItem(index) {
    if (confirm('Hapus item dari keranjang?')) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        loadKeranjangItems();
        updateCartBadge();
        showNotification('Item berhasil dihapus dari keranjang');
    }
}

function updateSummary(cart) {
    let subtotal = 0;
    
    cart.forEach(item => {
        const price = parseInt(item.price.replace(/[^0-9]/g, ''));
        subtotal += price * item.quantity;
    });
    
    const ongkir = subtotal > 50000 ? 0 : 5000;
    const total = subtotal + ongkir;
    
    const subtotalEl = document.getElementById('subtotal');
    const ongkirEl = document.getElementById('ongkir');
    const totalEl = document.getElementById('total');
    
    if (subtotalEl) subtotalEl.textContent = `Rp ${subtotal.toLocaleString('id-ID')}`;
    if (ongkirEl) ongkirEl.textContent = ongkir === 0 ? 'Gratis' : `Rp ${ongkir.toLocaleString('id-ID')}`;
    if (totalEl) totalEl.textContent = `Rp ${total.toLocaleString('id-ID')}`;
}

// Checkout
document.addEventListener('DOMContentLoaded', () => {
    const btnCheckout = document.querySelector('.btn-checkout');
    if (btnCheckout) {
        btnCheckout.addEventListener('click', () => {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert('Keranjang Anda kosong!');
                return;
            }
            
            // Simulate checkout process
            if (confirm('Lanjutkan ke pembayaran?')) {
                showNotification('Pesanan berhasil dibuat! Silakan lakukan pembayaran.');
                
                // Generate order
                const orderId = 'ORD-' + Date.now();
                const order = {
                    id: orderId,
                    items: cart,
                    date: new Date().toLocaleString('id-ID'),
                    status: 'Menunggu Pembayaran',
                    total: calculateTotal(cart)
                };
                
                // Save to orders
                let orders = JSON.parse(localStorage.getItem('orders')) || [];
                orders.unshift(order);
                localStorage.setItem('orders', JSON.stringify(orders));
                
                // Clear cart
                localStorage.removeItem('cart');
                updateCartBadge();
                
                // Redirect to lacak pesanan after 2 seconds
                setTimeout(() => {
                    window.location.href = '/dashboard/lacak-pesanan';
                }, 2000);
            }
        });
    }
});

function calculateTotal(cart) {
    let subtotal = 0;
    cart.forEach(item => {
        const price = parseInt(item.price.replace(/[^0-9]/g, ''));
        subtotal += price * item.quantity;
    });
    const ongkir = subtotal > 50000 ? 0 : 5000;
    return subtotal + ongkir;
}

// Lacak Pesanan functionality
function lacakPesanan() {
    const input = document.getElementById('lacakInput');
    const searchTerm = input.value.trim().toLowerCase();
    
    if (!searchTerm) {
        alert('Masukkan nomor pesanan atau invoice!');
        return;
    }
    
    const orders = JSON.parse(localStorage.getItem('orders')) || [];
    const pesananList = document.getElementById('pesananList');
    
    if (pesananList) {
        pesananList.innerHTML = '';
        
        let found = false;
        orders.forEach(order => {
            if (order.id.toLowerCase().includes(searchTerm)) {
                found = true;
                displayOrder(order, pesananList);
            }
        });
        
        if (!found) {
            pesananList.innerHTML = `
                <div style="text-align: center; padding: 3rem; color: var(--dashboard-gray);">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" style="opacity: 0.3; margin-bottom: 1rem;">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                    </svg>
                    <h3>Pesanan tidak ditemukan</h3>
                    <p>Silakan periksa kembali nomor pesanan Anda</p>
                </div>
            `;
        }
    }
}

function displayOrder(order, container) {
    const statusClass = getStatusClass(order.status);
    const orderDiv = document.createElement('div');
    orderDiv.className = 'pesanan-card';
    
    let itemsList = '';
    order.items.forEach(item => {
        itemsList += `${item.name} (${item.quantity}x), `;
    });
    itemsList = itemsList.slice(0, -2); // Remove last comma
    
    orderDiv.innerHTML = `
        <div class="pesanan-header">
            <span class="pesanan-id">${order.id}</span>
            <span class="pesanan-status ${statusClass}">${order.status}</span>
        </div>
        <div class="pesanan-detail">
            <div class="detail-row">
                <span>Tanggal Pesanan</span>
                <strong>${order.date}</strong>
            </div>
            <div class="detail-row">
                <span>Produk</span>
                <strong>${itemsList}</strong>
            </div>
            <div class="detail-row">
                <span>Total</span>
                <strong>Rp ${order.total.toLocaleString('id-ID')}</strong>
            </div>
            <div class="detail-row">
                <span>Status</span>
                <strong>${order.status}</strong>
            </div>
        </div>
    `;
    
    container.appendChild(orderDiv);
}

function getStatusClass(status) {
    if (status.includes('Selesai') || status.includes('Diterima')) {
        return 'status-selesai';
    } else if (status.includes('Batal') || status.includes('Ditolak')) {
        return 'status-batal';
    } else {
        return 'status-proses';
    }
}

// Load orders on lacak pesanan page
document.addEventListener('DOMContentLoaded', () => {
    const pesananList = document.getElementById('pesananList');
    if (pesananList && window.location.pathname.includes('lacak-pesanan')) {
        loadAllOrders();
    }
});

function loadAllOrders() {
    const orders = JSON.parse(localStorage.getItem('orders')) || [];
    const pesananList = document.getElementById('pesananList');
    
    if (orders.length === 0) {
        pesananList.innerHTML = `
            <div style="text-align: center; padding: 3rem; color: var(--dashboard-gray);">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" style="opacity: 0.3; margin-bottom: 1rem;">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                </svg>
                <h3>Belum ada pesanan</h3>
                <p>Mulai belanja sekarang untuk membuat pesanan pertama Anda</p>
                <button class="btn btn-primary" onclick="window.location.href='/dashboard/katalog'" style="margin-top: 1rem;">
                    Lihat Katalog
                </button>
            </div>
        `;
        return;
    }
    
    pesananList.innerHTML = '';
    orders.forEach(order => {
        displayOrder(order, pesananList);
    });
}

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.querySelector('.sidebar');
    
    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
        
        // Close sidebar when clicking outside
        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                sidebar.classList.remove('active');
            }
        });
    }
});

// Scroll to top functionality
let scrollTopBtn = null;

function createScrollTopDashboard() {
    scrollTopBtn = document.createElement('button');
    scrollTopBtn.innerHTML = '↑';
    scrollTopBtn.className = 'scroll-to-top-dashboard';
    scrollTopBtn.style.cssText = `
        position: fixed;
        bottom: 90px;
        right: 2rem;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--dashboard-primary), var(--dashboard-secondary));
        color: white;
        border: none;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 998;
        box-shadow: 0 4px 12px rgba(74, 123, 167, 0.3);
    `;
    
    document.body.appendChild(scrollTopBtn);
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollTopBtn.style.opacity = '1';
            scrollTopBtn.style.visibility = 'visible';
        } else {
            scrollTopBtn.style.opacity = '0';
            scrollTopBtn.style.visibility = 'hidden';
        }
    });
    
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Initialize scroll to top for dashboard
document.addEventListener('DOMContentLoaded', () => {
    if (window.location.pathname.includes('/dashboard')) {
        createScrollTopDashboard();
    }
});

// Product filter (untuk halaman katalog)
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('.search-input');
    if (searchInput && window.location.pathname.includes('/katalog')) {
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const productCards = document.querySelectorAll('.product-card');
            
            productCards.forEach(card => {
                const productName = card.querySelector('.product-name').textContent.toLowerCase();
                if (productName.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }
});

// Print invoice functionality
function printInvoice(orderId) {
    const orders = JSON.parse(localStorage.getItem('orders')) || [];
    const order = orders.find(o => o.id === orderId);
    
    if (!order) {
        alert('Pesanan tidak ditemukan!');
        return;
    }
    
    // Create print window
    const printWindow = window.open('', '_blank');
    
    let itemsHTML = '';
    order.items.forEach(item => {
        const price = parseInt(item.price.replace(/[^0-9]/g, ''));
        const subtotal = price * item.quantity;
        itemsHTML += `
            <tr>
                <td>${item.name}</td>
                <td style="text-align: center;">${item.quantity}</td>
                <td style="text-align: right;">Rp ${price.toLocaleString('id-ID')}</td>
                <td style="text-align: right;">Rp ${subtotal.toLocaleString('id-ID')}</td>
            </tr>
        `;
    });
    
    printWindow.document.write(`
        <!DOCTYPE html>
        <html>
        <head>
            <title>Invoice - ${order.id}</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    padding: 2rem;
                    max-width: 800px;
                    margin: 0 auto;
                }
                .header {
                    text-align: center;
                    margin-bottom: 2rem;
                    border-bottom: 2px solid #4A7BA7;
                    padding-bottom: 1rem;
                }
                .logo {
                    font-size: 2rem;
                    font-weight: bold;
                    color: #4A7BA7;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 1rem;
                }
                th, td {
                    padding: 0.75rem;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }
                th {
                    background-color: #4A7BA7;
                    color: white;
                }
                .total {
                    font-weight: bold;
                    font-size: 1.2rem;
                    text-align: right;
                    margin-top: 1rem;
                }
                .info {
                    margin-bottom: 1rem;
                }
                @media print {
                    button {
                        display: none;
                    }
                }
            </style>
        </head>
        <body>
            <div class="header">
                <div class="logo">FOTOCOPY ROMA</div>
                <p>Jl. Contoh No. 123, Malang, Jawa Timur</p>
                <p>Telp: 0857-5517-3739</p>
            </div>
            
            <div class="info">
                <h2>INVOICE</h2>
                <p><strong>No. Invoice:</strong> ${order.id}</p>
                <p><strong>Tanggal:</strong> ${order.date}</p>
                <p><strong>Status:</strong> ${order.status}</p>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th style="text-align: center;">Qty</th>
                        <th style="text-align: right;">Harga</th>
                        <th style="text-align: right;">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    ${itemsHTML}
                </tbody>
            </table>
            
            <div class="total">
                Total: Rp ${order.total.toLocaleString('id-ID')}
            </div>
            
            <div style="margin-top: 3rem; text-align: center;">
                <p>Terima kasih telah berbelanja di Fotocopy Roma!</p>
                <button onclick="window.print()" style="padding: 0.75rem 2rem; background: #4A7BA7; color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 1rem;">
                    Print Invoice
                </button>
            </div>
        </body>
        </html>
    `);
    
    printWindow.document.close();
}

// Add print button to order cards
document.addEventListener('DOMContentLoaded', () => {
    if (window.location.pathname.includes('lacak-pesanan')) {
        setTimeout(() => {
            const pesananCards = document.querySelectorAll('.pesanan-card');
            pesananCards.forEach(card => {
                const orderId = card.querySelector('.pesanan-id').textContent;
                const actionsDiv = document.createElement('div');
                actionsDiv.style.cssText = 'margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--dashboard-border);';
                actionsDiv.innerHTML = `
                    <button class="btn btn-primary" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;" onclick="printInvoice('${orderId}')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: inline-block; vertical-align: middle; margin-right: 0.5rem;">
                            <polyline points="6 9 6 2 18 2 18 9"/>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                            <rect x="6" y="14" width="12" height="8"/>
                        </svg>
                        Cetak Invoice
                    </button>
                `;
                card.appendChild(actionsDiv);
            });
        }, 100);
    }
});

// Notification sound (optional)
function playNotificationSound() {
    // Simple beep sound using Web Audio API
    try {
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();
        const oscillator = audioContext.createOscillator();
        const gainNode = audioContext.createGain();
        
        oscillator.connect(gainNode);
        gainNode.connect(audioContext.destination);
        
        oscillator.frequency.value = 800;
        oscillator.type = 'sine';
        
        gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.3);
        
        oscillator.start(audioContext.currentTime);
        oscillator.stop(audioContext.currentTime + 0.3);
    } catch (e) {
        console.log('Audio not supported');
    }
}

// Auto-save draft for chat (optional feature)
let chatDraft = '';
let draftTimeout = null;

document.addEventListener('DOMContentLoaded', () => {
    const chatInput = document.getElementById('chatInput');
    
    if (chatInput) {
        // Load draft
        const savedDraft = localStorage.getItem('chatDraft');
        if (savedDraft) {
            chatInput.value = savedDraft;
        }
        
        // Save draft on input
        chatInput.addEventListener('input', (e) => {
            clearTimeout(draftTimeout);
            draftTimeout = setTimeout(() => {
                localStorage.setItem('chatDraft', e.target.value);
            }, 500);
        });
        
        // Clear draft on send
        const btnSend = document.getElementById('btnSend');
        if (btnSend) {
            btnSend.addEventListener('click', () => {
                localStorage.removeItem('chatDraft');
            });
        }
    }
});

// Performance optimization
document.addEventListener('DOMContentLoaded', () => {
    // Lazy load images
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
});

// Analytics (optional - track page views)
function trackPageView(pageName) {
    const pageViews = JSON.parse(localStorage.getItem('pageViews')) || {};
    pageViews[pageName] = (pageViews[pageName] || 0) + 1;
    localStorage.setItem('pageViews', JSON.stringify(pageViews));
}

document.addEventListener('DOMContentLoaded', () => {
    const currentPage = window.location.pathname.split('/').pop() || 'dashboard';
    trackPageView(currentPage);
});

// Console easter egg
console.log('%c👋 Halo Developer!', 'font-size: 20px; color: #4A7BA7; font-weight: bold;');
console.log('%cTerima kasih sudah menggunakan SiRoma Dashboard!', 'font-size: 14px; color: #666;');
console.log('%cIngin berkontribusi? Hubungi kami! 🚀', 'font-size: 12px; color: #4CAF50;');