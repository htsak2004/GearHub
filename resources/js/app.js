import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initSearchModal();
    initFAQAccordions();
    initContactForm();
});

// 1. MOBILE MENU DRAWER
function initMobileMenu() {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const drawer = document.getElementById('mobile-menu-drawer');
    const openIcon = document.getElementById('hamburger-open-icon');
    const closeIcon = document.getElementById('hamburger-close-icon');

    if (!toggleBtn || !drawer) return;

    toggleBtn.addEventListener('click', () => {
        const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
        toggleBtn.setAttribute('aria-expanded', !isExpanded);
        
        if (isExpanded) {
            drawer.classList.add('hidden');
            openIcon?.classList.remove('hidden');
            closeIcon?.classList.add('hidden');
        } else {
            drawer.classList.remove('hidden');
            openIcon?.classList.add('hidden');
            closeIcon?.classList.remove('hidden');
        }
    });
}

// 2. SEARCH MODAL WITH SHORTCUT (Ctrl+K)
function initSearchModal() {
    const modal = document.getElementById('search-modal');
    const openBtns = [
        document.getElementById('open-search-modal-btn'),
        document.getElementById('mobile-search-btn')
    ];
    const closeBtn = document.getElementById('close-search-modal-btn');
    const searchInput = document.getElementById('modal-search-input');

    if (!modal) return;

    function openModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        setTimeout(() => searchInput?.focus(), 50);
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    openBtns.forEach(btn => btn?.addEventListener('click', openModal));
    closeBtn?.addEventListener('click', closeModal);

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
        // Ctrl+K or Cmd+K shortcut
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            if (modal.classList.contains('hidden')) {
                openModal();
            } else {
                closeModal();
            }
        }
    });

    // Real-time filter within search modal
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase().trim();
            const items = modal.querySelectorAll('a[href^="/katalog/"]');
            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (!term || text.includes(term)) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    }
}

// 3. FAQ ACCORDION (Keyboard & ARIA Accessible)
function initFAQAccordions() {
    const faqItems = document.querySelectorAll('.faq-item');
    if (faqItems.length === 0) return;

    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');

        if (!btn || !answer) return;

        btn.addEventListener('click', () => {
            const isExpanded = btn.getAttribute('aria-expanded') === 'true';

            // Close other items for smooth accordion UX
            faqItems.forEach(otherItem => {
                const otherBtn = otherItem.querySelector('.faq-question');
                const otherAnswer = otherItem.querySelector('.faq-answer');
                const otherIcon = otherItem.querySelector('.faq-icon');

                if (otherBtn && otherAnswer) {
                    otherBtn.setAttribute('aria-expanded', 'false');
                    otherAnswer.classList.add('hidden');
                    if (otherIcon) otherIcon.textContent = '+';
                }
            });

            if (!isExpanded) {
                btn.setAttribute('aria-expanded', 'true');
                answer.classList.remove('hidden');
                if (icon) icon.textContent = '−';
            }
        });
    });
}

// 4. CONTACT & FORM FEEDBACK
function initContactForm() {
    const form = document.getElementById('contact-page-form');
    const successMsg = document.getElementById('contact-success-msg');

    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Mengirim...</span>';
        }

        setTimeout(() => {
            form.reset();
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = `
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    <span>Kirim Pesan ke Admin</span>
                `;
            }
            if (successMsg) successMsg.classList.remove('hidden');
        }, 600);
    });

    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Login demo berhasil!');
            window.location.href = '/';
        });
    }

    const regForm = document.getElementById('register-form');
    if (regForm) {
        regForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Pendaftaran akun mahasiswa berhasil diajukan!');
            window.location.href = '/masuk';
        });
    }
}
