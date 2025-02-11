if (document.body.classList.contains('single-product')) { 



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
            targets: '.summary',
            opacity: [0, 1],
            // translateY: [20, 0],
            duration: 250,
            easing: 'easeInOutQuad',
            delay: 250
            // delay: anime.stagger(150)
        });
    }


    

}