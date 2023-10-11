<div class="container">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a href="./?page=accueil&layout=html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <image xlink:href="./image/NWS.png" width="40" height="32" />
                </svg>
                <span class="navbar-brand ">Annuaire NWS</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="./?page=accueil&layout=html" class="nav-link <?php echo (isset( $_GET['page']) ? ($_GET['page'] == "accueil" ? "active" : "") : "active"); ?>" aria-current="page">Accueil</a></li>
                <li class="nav-item"><a href="./?page=formajout&layout=html" class="nav-link <?php echo (isset( $_GET['page']) && $_GET['page'] == "ajouter") ? "active" : ""; ?>">Ajouter</a></li>
            </ul>
        </nav>
    </header>
  </div>