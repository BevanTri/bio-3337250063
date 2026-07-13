const btnToggle = document.querySelector("#btnToggle");
const body = document.body;

if (localStorage.getItem("darkMode") === "true") {
  body.classList.add("dark");
  btnToggle.textContent = "☀️ Light Mode";
}

btnToggle.addEventListener("click", () => {
  body.classList.toggle("dark");
  
  const isDark = body.classList.contains("dark");
  localStorage.setItem("darkMode", isDark);
  
  if (body.classList.contains("dark")) {
    btnToggle.textContent = "☀️ Light Mode";
  } else {
    btnToggle.textContent = "🌙 Dark Mode";
  }
});