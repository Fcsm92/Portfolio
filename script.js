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
