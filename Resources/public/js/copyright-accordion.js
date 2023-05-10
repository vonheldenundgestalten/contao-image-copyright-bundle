function initAccordion() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    let previousHeader = null;
    let previousContent = null;

    accordionHeaders.forEach(function(header) {
        header.addEventListener('click', function(event) {
            const accordionContent = header.nextElementSibling;

            if (previousHeader !== null && previousHeader !== header) {
                previousHeader.classList.remove('active');
                previousContent.style.maxHeight = null;
            }

            header.classList.toggle('active');

            if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = null;
            } else {
                accordionContent.style.maxHeight = `${accordionContent.scrollHeight}px`;
                scrollToHeader(header);
            }

            window.addEventListener('resize', function() {
                accordionContent.style.maxHeight = `${accordionContent.scrollHeight}px`;
            });
            
            previousHeader = header;
            previousContent = accordionContent;
        });
    });

    function scrollToHeader(header) {
        setTimeout(function() {
            const rect = header.getBoundingClientRect();
            window.scroll({
                top: rect.top + window.pageYOffset,
                behavior: 'smooth'
            });
        }, 500);
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAccordion);
} else {
    (function() {
        initAccordion();
    })();
}

const observer = new MutationObserver(mutations => {

    for (const mutation of mutations) {
        if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
            const newHeight = myDiv.clientHeight;
            console.log(`The div's height is now ${newHeight}px`);
        }
    }
});