var ActiveAccordion = document.getElementById("JobTab-1");
var ActiveJob = document.getElementById("Job-1");
var ActivePhoto = document.getElementById("JobPhoto-1");
var ActiveIcon = document.getElementById("JobIcon-1");


ActiveAccordion.style.color = "#8732ff";
ActiveJob.classList.add("job-content-open");
ActivePhoto.style.display = "block";
ActiveIcon.classList.remove("fa-hand-o-down");
ActiveIcon.classList.add("fa-hand-o-up");


//payment types accordion
function JobShow(n) {
    for (j = 1; j < 6; j ++) {
        ActiveAccordion = document.getElementById("JobTab-" + j);
        ActiveJob = document.getElementById("Job-" + j);
        ActivePhoto = document.getElementById("JobPhoto-" + j);
        ActiveIcon = document.getElementById("JobIcon-" + j);
        if (j == n) {
            ActiveAccordion.style.color = "#8732ff";
            ActiveJob.classList.add("job-content-open");
            ActivePhoto.style.display = "block";
            ActiveIcon.classList.remove("fa-hand-o-down");
            ActiveIcon.classList.add("fa-hand-o-up");
        }
        else {
            ActiveAccordion.style.color = "white";
            ActiveJob.classList.remove("job-content-open");
            ActivePhoto.style.display = "none";
            ActiveIcon.classList.remove("fa-hand-o-up");
            ActiveIcon.classList.add("fa-hand-o-down");
        }
    }
}

// sticky menu
window.onscroll = function() {navFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function navFunction() {
    if (window.pageYOffset >= 400) {
        navbar.classList.remove("header");
        navbar.classList.add("sticky-header")
    } else {
        navbar.classList.remove("sticky-header");
        navbar.classList.add("header")
    }
}

//side nav
function OpenSideNav() {
    var nav = document.getElementById("SideNav");
    nav.style.width = "80%";
}
function CloseSideNav() {
    var nav = document.getElementById("SideNav");
    nav.style.width = "0";
}