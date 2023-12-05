// Function to be executed when the intersection occurs
function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        // Check if what element is visible.
        if (entry.target.tagName === "MAIN") {
            if (entry.isIntersecting && entry.intersectionRatio >= 0.01) {
                document.querySelector('nav').classList.add('scrolled');
                // document.querySelector('.success').style.opacity = "0";
            } else {
                document.querySelector('nav').classList.remove('scrolled');
            }
        } else if (entry.target.className === "headerText") {
            document.querySelector('.headerText').classList.add('slide-in');
        }
    });
}

// Intersection of the blog elements
const contentObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            // Add a delay based on the index of the entry
            setTimeout(() => {
                entry.target.classList.add("slide-up");
            }, index * 100);
        }
    });
}, {
    threshold: 0.1
});


// Create an intersection observer
const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.01, // Trigger when 1% of the element is visible
});

// Target the section and header text to observe
const main = document.querySelector('main');
const headerText = document.querySelector('.headerText');
const cols = document.querySelectorAll('.col');
const logos = document.querySelectorAll('.logo');

// Start observing the target section
observer.observe(main);
// Start observing the target header text
observer.observe(headerText);

// Loop through and observe each column of blogs
cols.forEach(col => {
    contentObserver.observe(col);
});

// Loop through logos and observe each logo
logos.forEach(logo => {
    contentObserver.observe(logo);
});




// Arrow scroll event
const arrow = document.querySelector('.arrow-down');

arrow.addEventListener('click', function () {
    scrollToSection('main');
});

function scrollToSection(main) {
    const section = document.querySelector(main);
    section.scrollIntoView({ behavior: 'smooth' });
}
// End Arrow scroll event


const manageSwitch = document.querySelector('.inner-circle');

manageSwitch.addEventListener('click', function () {
    console.log('clicked');
});
