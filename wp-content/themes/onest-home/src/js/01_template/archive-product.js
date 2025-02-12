if (document.body.classList.contains('post-type-archive-product')) { 



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
            targets: '.product',
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 300,
            easing: 'easeOutQuad',
            delay: anime.stagger(150),
            complete: () => {
                // 
                anime({
                    targets: '.page-description',
                    opacity: [0, 1],
                    translateY: [20, 0],
                    duration: 300,
                    easing: 'easeOutQuad',
                });
            }
        });
    }


    

}