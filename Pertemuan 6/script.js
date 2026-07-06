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

const isiFakta = document.querySelector("#isi-fakta");
const btnRefresh = document.querySelector("#btnRefresh");

async function ambilFakta() {
    isiFakta.textContent = "⏳ Memuat fakta...";

    try {
        const response = await fetch("https://catfact.ninja/fact");

        if (!response.ok) {
            throw new Error("HTTP Error: " + response.status);
        }

        const data = await response.json();
        isiFakta.textContent = data.fact;
    } catch (error) {
        isiFakta.textContent = "⚠️ Gagal memuat fakta. Cek koneksi internet Anda.";
        console.error("Error:", error.message);
    }
}

ambilFakta();

btnRefresh.addEventListener("click", ambilFakta);