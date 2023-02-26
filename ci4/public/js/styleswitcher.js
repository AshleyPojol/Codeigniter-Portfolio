/* ============ TOGGLE STYLE HERE ASH ============== */
// This is for the theme switcher in the website.//
const styleSwitcherToggle = document.querySelector(".style-switcher-toggler");

// Event Listener - Lesson 22 //

styleSwitcherToggle.addEventListener("click", () => {
    document.querySelector(".style-switcher").classList.toggle("open");
})

// HIDE W/ SCROLLING - this option will hide the themes setting while scrolling.// 
window.addEventListener("scroll", () => {
    if (document.querySelector(".style-switcher").classList.contains("open"))
    {
        document.querySelector(".style-switcher").classList.remove("open");
    }
})

/* FINALLY TOGGLE THEME */
//This will switch the colors of the themes in the website.//

const alternateStyles = document.querySelectorAll(".alternate-style");


// Function - Lesson 18 //
function setActiveStyle(color)

//If Else Option - Lesson 9 //
{
    alternateStyles.forEach((style) => {
        if(color === style.getAttribute("title"))
        {
            style.removeAttribute("disabled");
        }
        else
        {
            style.setAttribute("disabled", "true");
        }
    })
}

/* DARK MODE */
//This option will change the light theme in to a dark theme.//

//Lesson 2 - Const //
const dayNight = document.querySelector(".day-night");
dayNight.addEventListener("click", () => {
    dayNight.querySelector("i").classList.toggle("fa-sun");
    dayNight.querySelector("i").classList.toggle("fa-moon");

//Lesson 22 - Document //
    
    document.body.classList.toggle("dark");
})

// Lesson 23 - Window //
window.addEventListener("load", () => {
    if(document.body.classList.contains("dark"))
    {
        // Lesson 27  - jQuery Selectors // 
        dayNight.querySelector("i").classList.add("fa-sun");
    }
    else
    {
        dayNight.querySelector("i").classList.add("fa-moon"); 
    }
})

