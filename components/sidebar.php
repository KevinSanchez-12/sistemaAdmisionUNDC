    <nav class="sidebarb closeb">
        <header>
            <div class="image-textb">
                <span class="imageb">
                    <img src="assets/img/logo.png">
                </span>
                <div class="textb logo-textb">
                    <span class="nameb">UNDC</span>
                    <span class="professionb">Admisión 2023</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-barb">
            <div class="menub">
                <ul class="menu-linksb">
                    <li class="nav-linkb">
                        <a href="home">
                            <i class='bx bx-home icon'></i>
                            <span class="textb nav-textb">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-linkb">
                        <a href="page-requisitos">
                            <i class='bx bx-upload icon'></i>
                            <span class="textb nav-textb">Requisitos</span>
                        </a>
                    </li>
                    <li class="nav-linkb">
                        <a href="page-pagos">
                            <i class="bx bx-credit-card icon"></i>
                            <span class="textb nav-textb">Pagos</span>
                        </a>
                    </li>
                    <li class="nav-linkb">
                        <a href="page-descargas">
                            <i class='bx bx-download icon'></i>
                            <span class="textb nav-textb">Descargas</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-contentb">
                <li class="">
                    <a href="logout">
                        <i class='bx bx-log-out icon'></i>
                        <span class="textb nav-textb">Cerrar sesión</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        modeSwitch = body.querySelector(".toggle-switchb"),
        modeText = body.querySelector(".mode-textb");
        toggle.addEventListener("click" , () =>{
            sidebar.classList.toggle("closeb");
        })
    </script>