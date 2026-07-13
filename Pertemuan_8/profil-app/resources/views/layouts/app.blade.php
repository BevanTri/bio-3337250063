<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profil App')</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f4f8fa; color: #262626; transition: background 0.3s, color 0.3s; }
        .navbar { background: #0B1F3A; color: white; padding: 14px 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px; }
        .nav-links { display: flex; align-items: center; gap: 15px; }
        .navbar a { color: #21B0A7; text-decoration: none; font-weight: bold; }
        .container { max-width: 900px; margin: 30px auto; padding: 0 16px; }
        footer { text-align: center; padding: 20px; color: #888; font-size: 13px; }

        #btnToggle { padding: 8px 16px; border: 2px solid white; background: transparent; color: white; border-radius: 20px; cursor: pointer; font-size: 14px; }

        section { background-color: white; padding: 24px; margin-bottom: 20px; border-radius: 12px; border: 1px solid #e0e0e0; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        section h2 { margin-bottom: 16px; color: #065A82; font-size: 1.5rem; border-bottom: 2px solid #21B0A7; padding-bottom: 8px; }

        #fakta { background: linear-gradient(135deg, #065A82, #1C7293); color: white; text-align: center; }
        #fakta h2 { color: white; border-bottom-color: #21B0A7; }
        #isi-fakta { font-size: 1.1rem; line-height: 1.6; font-style: italic; margin: 16px 0; min-height: 60px; }
        #btnRefresh { padding: 10px 24px; background: white; color: #065A82; border: none; border-radius: 25px; cursor: pointer; font-weight: bold; }

        body.dark { background-color: #1a1a2e; color: #e0e0e0; }
        body.dark .navbar { background-color: #0f3460; }
        body.dark section { background-color: #16213e; border-color: #2a2a4a; }
        body.dark section h2 { color: #e0e0e0; }
        body.dark #fakta { background: linear-gradient(135deg, #0f3460, #1a4a6e); }

        @media (max-width: 480px) {
            .navbar { flex-direction: column; text-align: center; }
            .nav-links { flex-direction: column; width: 100%; }
            .navbar a, #btnToggle { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <span>Pemrograman Web – UNTIRTA</span>
        <div class="nav-links">
            <a href="{{ route('profil') }}">Profil Saya</a>
            <a href="{{ route('tentang') }}">Tentang</a>
            <button id="btnToggle">🌙 Dark Mode</button>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} – Bevan Tri Ramadiyas
    </footer>

    <script>
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
    </script>
</body>
</html>