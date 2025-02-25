if (document.body.classList.contains('page-template-page-about-us')) { 



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
            targets: ['.intro .page-content'],
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 300,
            easing: 'easeOutQuad',
            delay: anime.stagger(150),
            complete: () => {
                //
                anime({
                    targets: ['.intro .img-wrapper'],
                    opacity: [0, 1],
                    translateY: [20, 0],
                    duration: 300,
                    easing: 'easeOutQuad',
                    complete: () => {
                        //
                        anime({
                            targets: '.intro .page-content .btn',
                            opacity: [0, 1],
                            duration: 300,
                            easing: 'easeOutQuad',
                            complete: () => {
                                anime({
                                    targets: '.reviews-item',
                                    opacity: [0, 1],
                                    translateY: [20, 0],
                                    duration: 300,
                                    easing: 'easeOutQuad',
                                    delay: anime.stagger(150)
                                });
                            }
                        });
                    }
                });
            }
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
            threshold: 0.25  
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
        const scrollElements = document.querySelectorAll('.gallery, .additional-content p, .form-lead, .product-collection h3');
        scrollElements.forEach(el => observer.observe(el));
    }

    /**
     * Anime.js animation for elements that appear on scroll
     */
    function animateOnScroll(element) {

        if (element.matches('.gallery') || element.matches('.form-lead')) {
            anime({
                targets: element,
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 300,
                easing: 'easeOutQuad',
            });
        } 

        if (element.matches('.additional-content p') || element.matches('.form-lead')) {
            anime({
                targets: element,
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 600,
                easing: 'easeOutQuad'
            });
        } 
        
        if (element.matches('.product-collection h3')) {
            anime({
                targets: element,
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 300,
                easing: 'easeOutQuad',
                complete: () => {
                    //
                    anime({
                        targets: '.product',
                        opacity: [0, 1],
                        translateY: [20, 0],
                        duration: 300,
                        easing: 'easeOutQuad',
                        delay: anime.stagger(150)
                    });
                }
            });
        } 

        
    }



}