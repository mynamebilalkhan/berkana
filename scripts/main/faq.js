const faqItemWrappers = document.querySelectorAll(".faq-item__wrapper");

faqItemWrappers.forEach((wrapper) => {
    wrapper.addEventListener("click", () => {
        // Add active class to the parent element
        const parentWidget = wrapper.closest(".faq-dropdown-widget");
        parentWidget.classList.toggle("active");

        // Toggle the active class on the clicked wrapper
        wrapper.classList.toggle("active");

        const panel = wrapper.nextElementSibling;
        panel.style.maxHeight = panel.style.maxHeight
            ? null
            : `${panel.scrollHeight}px`;
    });
});
