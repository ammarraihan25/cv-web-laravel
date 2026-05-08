// import "./style.css";

document.addEventListener("DOMContentLoaded", () => {
    /* =========================================
     Loader Animation
     ========================================= */
    const loader = document.getElementById("loader");
    setTimeout(() => {
        loader.style.opacity = "0";
        loader.style.visibility = "hidden";
    }, 2000); // Hide loader after 2s for effect

    /* =========================================
     Theme Toggle (Dark/Light Mode)
     ========================================= */
    const themeToggleBtn = document.getElementById("theme-toggle");
    const body = document.body;
    const themeIcon = themeToggleBtn.querySelector("i");

    // Check local storage for theme preference
    const currentTheme = localStorage.getItem("theme");
    if (currentTheme) {
        if (currentTheme === "light") {
            body.classList.remove("dark-mode");
            themeIcon.classList.replace("fa-moon", "fa-sun");
        }
    }

    themeToggleBtn.addEventListener("click", () => {
        body.classList.toggle("dark-mode");

        if (body.classList.contains("dark-mode")) {
            themeIcon.classList.replace("fa-sun", "fa-moon");
            localStorage.setItem("theme", "dark");
        } else {
            themeIcon.classList.replace("fa-moon", "fa-sun");
            localStorage.setItem("theme", "light");
        }
    });

    /* =========================================
     Mobile Menu Toggle
     ========================================= */
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const navLinks = document.querySelector(".nav-links");
    const menuIcon = mobileMenuBtn.querySelector("i");

    mobileMenuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("active");
        if (navLinks.classList.contains("active")) {
            menuIcon.classList.replace("fa-bars", "fa-xmark");
        } else {
            menuIcon.classList.replace("fa-xmark", "fa-bars");
        }
    });

    // Close mobile menu when clicking a link
    const navItems = document.querySelectorAll(".nav-link");
    navItems.forEach((item) => {
        item.addEventListener("click", () => {
            navLinks.classList.remove("active");
            menuIcon.classList.replace("fa-xmark", "fa-bars");
        });
    });

    /* =========================================
     Sticky Navbar & Active Link Update
     ========================================= */
    const navbar = document.getElementById("navbar");
    const sections = document.querySelectorAll("section");

    window.addEventListener("scroll", () => {
        // Sticky navbar
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }

        // Active link update based on scroll position
        let current = "";
        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= sectionTop - 200) {
                current = section.getAttribute("id");
            }
        });

        navItems.forEach((item) => {
            item.classList.remove("active");
            if (item.getAttribute("href").substring(1) === current) {
                item.classList.add("active");
            }
        });
    });

    /* =========================================
     Scroll Reveal Animations
     ========================================= */
    const revealElements = document.querySelectorAll(".reveal");

    const revealCallback = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                // observer.unobserve(entry.target); // Un-comment to only animate once
            }
        });
    };

    const revealOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px",
    };

    const revealObserver = new IntersectionObserver(
        revealCallback,
        revealOptions,
    );

    revealElements.forEach((el) => {
        revealObserver.observe(el);
    });

    /* =========================================
     Project Filter & Search
     ========================================= */
    const filterBtns = document.querySelectorAll(".filter-btn");
    const projectCards = document.querySelectorAll(".project-card");
    const searchInput = document.getElementById("search-input");

    // Filter functionality
    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Remove active class from all buttons
            filterBtns.forEach((b) => b.classList.remove("active"));
            // Add active class to clicked button
            btn.classList.add("active");

            const filterValue = btn.getAttribute("data-filter");

            projectCards.forEach((card) => {
                const category = card.getAttribute("data-category");
                if (filterValue === "all" || filterValue === category) {
                    card.style.display = "flex";
                    // Re-trigger animation
                    setTimeout(() => {
                        card.style.opacity = "1";
                        card.style.transform = "translateY(0)";
                    }, 10);
                } else {
                    card.style.display = "none";
                    card.style.opacity = "0";
                }
            });
        });
    });

    // Search functionality
    searchInput.addEventListener("keyup", (e) => {
        const searchText = e.target.value.toLowerCase();

        // Reset filters when searching
        filterBtns.forEach((b) => b.classList.remove("active"));
        document
            .querySelector('.filter-btn[data-filter="all"]')
            .classList.add("active");

        projectCards.forEach((card) => {
            const title = card
                .querySelector(".project-title")
                .textContent.toLowerCase();
            const desc = card
                .querySelector(".project-desc")
                .textContent.toLowerCase();

            if (title.includes(searchText) || desc.includes(searchText)) {
                card.style.display = "flex";
                card.style.opacity = "1";
            } else {
                card.style.display = "none";
                card.style.opacity = "0";
            }
        });
    });

    /* =========================================
     Contact Form Submit (Dummy)
     ========================================= */
    const contactForm = document.getElementById("contact-form");
    if (contactForm) {
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const btn = contactForm.querySelector("button");
            const originalText = btn.innerHTML;

            btn.innerHTML =
                '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim...';
            btn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                btn.innerHTML =
                    '<i class="fa-solid fa-check"></i> Pesan Terkirim!';
                btn.classList.replace("btn-primary", "btn-outline");
                contactForm.reset();

                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.classList.replace("btn-outline", "btn-primary");
                    btn.disabled = false;
                }, 3000);
            }, 1500);
        });
    }

    /* =========================================
     Certificate Image Zoom Modal
     ========================================= */
    const modal = document.getElementById("cert-modal");
    const modalImg = document.getElementById("full-cert-img");
    const captionText = document.getElementById("caption");
    const closeBtn = document.getElementsByClassName("close-modal")[0];
    const certImages = document.querySelectorAll(".zoom-img");

    certImages.forEach((img) => {
        img.addEventListener("click", () => {
            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
            body.style.overflow = "hidden"; // Prevent scrolling when modal is open
        });
    });

    // Also allow clicking the overlay wrapper
    const certWrappers = document.querySelectorAll(".cert-img-wrapper");
    certWrappers.forEach((wrapper) => {
        wrapper.addEventListener("click", () => {
            const img = wrapper.querySelector("img");
            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
            body.style.overflow = "hidden";
        });
    });

    const closeModal = () => {
        modal.style.display = "none";
        body.style.overflow = "auto";
    };

    closeBtn.addEventListener("click", closeModal);

    // Close modal when clicking outside the image
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Close modal on Escape key
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && modal.style.display === "block") {
            closeModal();
        }
    });
});
