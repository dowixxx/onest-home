if (document.body.classList.contains('page-template-page-construction')) { 



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
                            targets: '.pitch p',
                            opacity: [0, 1],
                            translateY: [20, 0],
                            duration: 300,
                            easing: 'easeOutQuad',
                            delay: anime.stagger(150),
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
        const scrollElements = document.querySelectorAll('.reviews, .project-item, .form-lead'); //.pitch commented
        scrollElements.forEach(el => observer.observe(el));
    }

    /**
     * Anime.js animation for elements that appear on scroll
     */
    function animateOnScroll(element) {

        if (element.matches('.reviews')) {
            anime({
                targets: ['.reviews-item'],
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 300,
                easing: 'easeOutQuad',
                delay: anime.stagger(150)
            });
        } 

        if (element.matches('.project-item')) {
            anime({
                targets: ['.project-collection h3', '.project-item'],
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 300,
                easing: 'easeOutQuad',
                delay: anime.stagger(150)
            });
        } 

        if (element.matches('.form-lead')) {
            anime({
                targets: element,
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 600,
                easing: 'easeOutQuad'
            });
        } 

        // if (element.matches('.pitch')) {
        //     anime({
        //         targets: '.pitch p',
        //         opacity: [0, 1],
        //         translateY: [20, 0],
        //         duration: 300,
        //         easing: 'easeOutQuad',
        //         delay: anime.stagger(150)
        //     });
        // } 
        
    }



}