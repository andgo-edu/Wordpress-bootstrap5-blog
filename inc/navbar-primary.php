<header>
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
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;

    }

    .top-nav-bar {}

    .top-nav-bar>li {
        display: inline;
        float: left;

    }

    .top-nav-bar>a {
        display: block;
        padding: 8px;
        background-color: #dddddd;

    }
    </style>