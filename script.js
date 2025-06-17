// typed animation

var typed = new Typed("#typed", {
  strings: ["Etudiant", "Gestion de Projet", "Dev Web"],
  typeSpeed: 50,
  backSpeed: 20,
  backDelay: 2000,
  showCursor: false,
  loop: true,
});

//Changer de thème
function theme() {
  const NuitBtn = document.getElementById("nuitBtn");
  const JourBtn = document.getElementById("jourBtn");

  document.body.classList.toggle("light");

  if (document.body.classList.contains("light")) {
    NuitBtn.style.display = "none";
    JourBtn.style.display = "block";
  } else {
    JourBtn.style.display = "none";
    NuitBtn.style.display = "block";
  }
}

////////// Création div projet lors d'un clic
document.addEventListener("DOMContentLoaded", function () {
  const projects = document.querySelectorAll(".projet");
  console.log(projects);
  console.log("sdcdss");
  const modal = document.getElementById("projectModal");
  //const projectDetails = document.getElementById("projectDetails");
  const closeBtn = document.getElementById("closeModal");

  projects.forEach((project) => {
    project.addEventListener("click", () => {
      const projectName = project.getAttribute("data-project");
      //  projectDetails.textContent = `Détails pour ${projectName}`;
      modal.classList.add("show");
    });
  });

  closeBtn.addEventListener("click", () => {
    modal.classList.remove("show");
  });

  // Fermer la modale si on clique en dehors de celle-ci
  modal.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.classList.remove("show");
    }
  });
});
