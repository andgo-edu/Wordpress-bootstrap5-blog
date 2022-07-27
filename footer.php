<?php
wp_footer();
?>

<div class="container-fluid bg-dark rounded-1 w-100">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">

        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <p class="text-white">&copy; 2022</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><?php
                                                                                        wp_nav_menu(array(
                                                                                            'theme_location' => 'footer-menu',
                                                                                            'container_class' => 'footer-class',
                                                                                        )); ?>
                    </a>
                </li>
            </ul>
        </div>


    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>

</html>