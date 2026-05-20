import "./bootstrap";

// Projects expaned and collapsation
const initializeProjectCards = () => {
    document.querySelectorAll(".project__wrapper").forEach((wrapper) => {
        if (wrapper.dataset.projectCardsInitialized) {
            return;
        }

        wrapper.dataset.projectCardsInitialized = "true";

        const projects = wrapper.querySelectorAll(
            ".small__project, .big__project",
        );

        projects.forEach((project) => {
            project.addEventListener("mouseenter", () => {
                projects.forEach((p) => {
                    if (p === project) {
                        p.style.flexBasis = "70%";
                    } else {
                        p.style.flexBasis = "30%";
                    }
                });
            });
        });
    });
};

// Service on homepage expanded
const initializeHomeServiceCards = () => {
    document.querySelectorAll(".services_wrapper").forEach((wrapper) => {
        if (wrapper.dataset.servicesInitialized) {
            return;
        }

        wrapper.dataset.servicesInitialized = "true";

        const cards = wrapper.querySelectorAll("[data-service-card]");

        cards.forEach((card) => {
            card.addEventListener("mouseenter", () => {
                cards.forEach((serviceCard) => {
                    serviceCard.classList.toggle(
                        "is-active",
                        serviceCard === card,
                    );
                });
            });
        });
    });
};

// Testimonials expandation
const initializeTestimonialCards = () => {
    document
        .querySelectorAll(".testimonials .cards_wrapper")
        .forEach((wrapper) => {
            if (wrapper.dataset.testimonialsInitialized) {
                return;
            }

            wrapper.dataset.testimonialsInitialized = "true";

            const cards = wrapper.querySelectorAll("[data-testimonial-card]");

            cards.forEach((card) => {
                card.addEventListener("mouseenter", () => {
                    cards.forEach((testimonialCard) => {
                        testimonialCard.classList.toggle(
                            "is-active",
                            testimonialCard === card,
                        );
                    });
                });
            });
        });
};

const initializeFrontendInteractions = () => {
    initializeProjectCards();
    initializeHomeServiceCards();
    initializeTestimonialCards();
};

document.addEventListener("DOMContentLoaded", initializeFrontendInteractions);
document.addEventListener("livewire:navigated", initializeFrontendInteractions);
