console.log("Dashboard BC 2026 cargado correctamente");

/* EFECTO SIMPLE */

const cards = document.querySelectorAll(".dashboard-card");

cards.forEach(card => {

    card.addEventListener("mouseenter", () => {

        card.style.transform = "translateY(-10px) scale(1.02)";

    });

    card.addEventListener("mouseleave", () => {

        card.style.transform = "translateY(0) scale(1)";

    });

});