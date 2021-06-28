<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
        if (btn.classList.contains("bx-menu")) {
            btn.classList.replace("bx-menu", "bx-menu-alt-right");
            document.getElementsByTagName("body")[0].style.paddingLeft = '260px';
            document.getElementsByTagName("body")[0].style.transition = '0.5s';
            document.getElementById("correo").style.visibility = 'visible';
            document.getElementById("nombre").style.visibility = 'visible';
        } else {
            btn.classList.replace("bx-menu-alt-right", "bx-menu");
            document.getElementById("correo").style.visibility = 'hidden';
            document.getElementById("nombre").style.visibility = 'hidden';
            document.getElementsByTagName("body")[0].style.paddingLeft = '100px';
        }
    }
    searchBtn.onclick = function() {
        sidebar.classList.toggle("active");
    }

    let logout = document.querySelector("#log_out");
    logout.addEventListener('click', (e) => {
        window.location.href = "logout";
    })
</script>

</body>

</html>