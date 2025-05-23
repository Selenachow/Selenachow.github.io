// document.getElementById("hi").addEventListener("mouseover", (self) => {
//     self.textContent = "About";
// })


document.querySelector(".heroTextTyping").addEventListener("animationend", () => {
    
    setTimeout(() => {    

    let navigation = document.querySelector(".heroNavigation");
    navigation.style.color = "grey";
    
    let headerText = document.querySelector(".heroNavigation").style.display = "flex";

    let aboutNav = document.getElementById("about");
    let projectsNav = document.getElementById("projects");
    let contactNav = document.getElementById("contact");
    let linkedinNav = document.getElementById("linkedin")

    aboutNav.id = "aboutDone";
    projectsNav.id = "projectsDone";
    contactNav.id = "contactDone";
    linkedinNav.id = "linkedinDone"

    }, 200)

    
});

