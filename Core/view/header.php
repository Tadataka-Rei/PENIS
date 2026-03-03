    <header>
        <link rel="stylesheet" href="./style.css">
        <button class="hamburger" id="hamburger">
            ☰
        </button>

        <img class="logo" src="./images/logo.jpg" alt="Novel Vote Logo">

        <nav>
            <ul class="nav_links" id="navLinks">
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Translation</a></li>
                <li><a href="#0">About_me</a></li>
                <li><a href="#0">Contact</a></li>
            </ul>
        </nav>

        <a class="cta" href="#0">
            <img src="./images/user.png" alt="User Icon">
        </a>
    </header>
    <script>
        const hamburger = document.getElementById("hamburger");
        const navLinks = document.getElementById("navLinks");

        hamburger.addEventListener("click", () => {
            navLinks.classList.toggle("active");
        });
    </script>