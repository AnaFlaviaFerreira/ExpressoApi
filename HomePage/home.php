<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Expresso API</title>
    <link rel="shortcut icon" href="../assets/images/image-logo.png" />

    <!-- Importação de CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/stylesMenu.css">
    <link rel="stylesheet" href="./styles/stylesContrast.css">

</head>

<body>
    <div id="page-menu">

        <!-- Navegação lateral -->
        <nav id="sidebar">
            <ul id="menu-sidebar" class="nav nav-pills flex-column" role="tablist">
                <li class="sidebar-header">
                    <img src="../assets/images/image-logo.png" class="logo">
                    <img src="../assets/images/titulo-white.png" class="app-title">
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#dashboard" role="tab" title="Dashboard">
                        <img src="../assets/icons/dashboard.svg" alt="Dashboard">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#settings" role="tab" title="Configurações">
                        <img src="../assets/icons/settings.svg" alt="Configurações">
                        <span class="ml-3">Configurações</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ExpressoAPI.html" title="Sair">
                        <img src="../assets/icons/log-out.svg" alt="Sair">
                        <span class="ml-3">Sair</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Conteúdo das páginas -->
        <div class="menu-content">
            <div id="menu-sidebarContent" class="tab-content h-100">

                <!-- Dashboard -->
                <?php require_once "dashboard.php" ?>

                <!-- Configurações -->
                <?php require_once "settings.php" ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->

    <!-- Script para Boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--Script para menu-->
    <script>
        // arrow functions
        document.querySelectorAll('.collapse-sidebar')
            .forEach(collapse => {
                collapse.addEventListener('click', () => {
                    document.querySelector('#sidebar').classList.toggle('collapsed')
                })
            })

        //Script para contraste

        const input = document.querySelector('#toggleTheme');
        const allPage = document.querySelector('#page-menu');

        input.onchange = toggleDarkMode;

        let theme = document.cookie.split('=')[1];

        if (theme) {
            input.setAttribute('checked', 'true');
            allPage.classList.add(theme);
        }

        function toggleDarkMode() {
            input.toggleAttribute('checked');
            allPage.classList.toggle('dark');

            if (theme) {
                theme = undefined;
                document.cookie = `theme=''; max-age=-1`;
                return;
            }

            theme = 'dark';
            document.cookie = `theme=${theme}`;
        }
    </script>

</body>

</html>