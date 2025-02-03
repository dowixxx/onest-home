if (document.body.classList.contains('single-project')) { 



    document.addEventListener('DOMContentLoaded', () => {
        animate_initial();
        animate_scroll();
    });
    


    /**
     * Animate hero elements in sequence
     */
    function animate_initial() {

        // 
        anime({
            targets: ['.img-featured'],
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 600,
            easing: 'easeOutQuad'
        });
 
    }

    

    /**
     * Set up Intersection Observer to animate .product-item or other
     * elements as they enter the viewport
     */
    function animate_scroll() {
        // Intersection Observer options
        const observerOptions = {
            root: null,       // observes the viewport
            rootMargin: '0px',
            threshold: 0.5  
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateOnScroll(entry.target); // Animate the element that just scrolled into view
                    observer.unobserve(entry.target); // Unobserve once the animation is triggered
                }
            });
        }, observerOptions);

        // Grab all elements that need scroll-based animations
        const scrollElements = document.querySelectorAll('.title, .project-info-item, .wp-block-image, article p:not(.project-info p)');
        scrollElements.forEach(el => observer.observe(el));
    }

    /**
     * Anime.js animation for elements that appear on scroll
     */
    function animateOnScroll(element) {

        if (element.matches('.title') || element.matches('.project-info-item') || element.matches('article p:not(.project-info p)')) {
            anime({
                targets: element,
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 300,
                easing: 'easeOutQuad'
            });
        } 

        if (element.matches('.wp-block-image')) {
            anime({
                targets: element,
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 600,
                easing: 'easeOutQuad'
            });
        } 

    }



}