if (document.body.classList.contains('page-template-page-projects')) { 



    document.addEventListener('DOMContentLoaded', () => {
        animate_initial();
        // animate_scroll();
    });
    


    /**
     * Animate hero elements in sequence
     */
    function animate_initial() {

        // 
        anime({
            targets: ['.title'],
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 300,
            easing: 'easeOutQuad',
            complete: () => {
                //
                anime({
                    targets: '.portfolio-item',
                    opacity: [0, 1],
                    translateY: [20, 0],
                    duration: 300,
                    easing: 'easeOutQuad',
                    delay: anime.stagger(150)
                });
            }
        });
 
    }

    

    // /**
    //  * Set up Intersection Observer to animate .product-item or other
    //  * elements as they enter the viewport
    //  */
    // function animate_scroll() {
    //     // Intersection Observer options
    //     const observerOptions = {
    //         root: null,       // observes the viewport
    //         rootMargin: '0px',
    //         threshold: 0.25  
    //     };

    //     const observer = new IntersectionObserver((entries, observer) => {
    //         entries.forEach(entry => {
    //             if (entry.isIntersecting) {
    //                 // Animate the element that just scrolled into view
    //                 animateOnScroll(entry.target);
    //                 // Unobserve once the animation is triggered
    //                 observer.unobserve(entry.target);
    //             }
    //         });
    //     }, observerOptions);

    //     // Grab all elements that need scroll-based animations
    //     const scrollElements = document.querySelectorAll('.reviews-contact-info-wrapper, .form-lead');
    //     scrollElements.forEach(el => observer.observe(el));
    // }

    // /**
    //  * Anime.js animation for elements that appear on scroll
    //  */
    // function animateOnScroll(element) {
    //     anime({
    //         targets: element,
    //         opacity: [0, 1],
    //         translateY: [20, 0],
    //         duration: 600,
    //         easing: 'easeOutQuad'
    //     });
    // }



}