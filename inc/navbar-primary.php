<header class="navbar__header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/wordpress">AndGoEdu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="sass__ul__nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-items-sass">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'Andgo ',
                                'container_class' => 'custom-menu-class',
                                'menu_id' => 'top-nav-menu',
                                'menu_class' => 'top-nav-bar',
                            ));
                            ?>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </nav>
</header>



<body>

    <style>
    .top-nav-bar {
        text-decoration: none;
        text-align: right;
        float: right;
        justify-content: space-evenly;

    }


    .top-nav-bar,
    ul,
    li,
    a,
    .page_item {
        display: inline;
        text-decoration: none;

    }
    </style>