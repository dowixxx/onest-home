document.addEventListener("DOMContentLoaded", function () {

    

    const megaClose = document.querySelector(".mega-close");
    const megaMenuToggle = document.querySelector(".mega-menu-toggle");
    const newParent = document.querySelector("#mega-menu-header-primary-menu");

    

    //
    if (megaMenuToggle) {
        // Clear all existing content
        megaMenuToggle.innerHTML = "";

        // Create the SVG element
        let svgNS = "http://www.w3.org/2000/svg";
        let svg = document.createElementNS(svgNS, "svg");
        svg.setAttribute("xmlns", svgNS);
        svg.setAttribute("x", "0px");
        svg.setAttribute("y", "0px");
        svg.setAttribute("width", "45px");
        svg.setAttribute("height", "15px");
        svg.setAttribute("viewBox", "0 0 45 15");
        svg.setAttribute("xml:space", "preserve");

        // Create and append three lines to the SVG
        for (let y of [0.5, 7.5, 14.5]) {
            let line = document.createElementNS(svgNS, "line");
            line.setAttribute("x1", "0");
            line.setAttribute("y1", y);
            line.setAttribute("x2", "45");
            line.setAttribute("y2", y);
            line.setAttribute("stroke", "black"); // Ensure lines are visible
            line.setAttribute("stroke-width", "1");
            svg.appendChild(line);
        }

        // Append the SVG to the button
        megaMenuToggle.appendChild(svg);
    }

    

    //
    if (megaClose) {
        // megaClose.classList.add("-pseudo-none");

        // Create the SVG element
        let svgNS = "http://www.w3.org/2000/svg";
        let svg = document.createElementNS(svgNS, "svg");
        svg.setAttribute("xmlns", svgNS);
        svg.setAttribute("x", "0px");
        svg.setAttribute("y", "0px");
        svg.setAttribute("width", "16");
        svg.setAttribute("height", "16");
        svg.setAttribute("viewBox", "0 0 16 16");
        svg.setAttribute("xml:space", "preserve");

        // Create the first line
        let line1 = document.createElementNS(svgNS, "line");
        line1.setAttribute("x1", "0.5");
        line1.setAttribute("y1", "0.5");
        line1.setAttribute("x2", "15.5");
        line1.setAttribute("y2", "15.5");
        line1.setAttribute("stroke", "black"); // Ensure visibility
        line1.setAttribute("stroke-width", "1");

        // Create the second line
        let line2 = document.createElementNS(svgNS, "line");
        line2.setAttribute("x1", "15.5");
        line2.setAttribute("y1", "0.5");
        line2.setAttribute("x2", "0.5");
        line2.setAttribute("y2", "15.5");
        line2.setAttribute("stroke", "black");
        line2.setAttribute("stroke-width", "1");

        // Append lines to SVG
        svg.appendChild(line1);
        svg.appendChild(line2);

        // Append the SVG to .mega-close
        megaClose.innerHTML = ""; // Clear existing content
        megaClose.appendChild(svg);
    }


    
    //
    if (megaClose && newParent) {
        // Remove megaClose from its current parent
        megaClose.remove();

        // Append it to the new parent
        newParent.appendChild(megaClose);
    }


});