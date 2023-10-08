<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./?page=accueil&layout=html">Annuaire NWS</a>
            <div class=" navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                <a class="nav-link <?php echo (isset( $_GET['page']) ? ($_GET['page'] == "accueil" ? "active" : "") : "active"); ?>" aria-current="page" href="./?page=accueil&layout=html">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php echo (isset( $_GET['page']) && $_GET['page'] == "formulaire") ? "active" : ""; ?>" href="./?page=formulaire&layout=html">Ajouter</a>
                </li>
            </ul>
            <!-- formulaire de recherche-->
            <form class="d-flex" role="search">
                <input class="form-control me-1" type="search" placeholder="Rechercher..." aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Rechercher</button>
            </form>
            </div>
        </div>
    </nav>
</header>