<?php

/*
Template Name: Contact
 */

get_header();
?>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Columns with icons</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 text-center">
        <div class="feature col">
            <div class="feature-icon bg-success bg-gradient rounded-5 shadow-5-strong ">
                <img class="bi" src="https://www.svgrepo.com/show/34965/email.svg" width="200px" height="200px"
                    loading="lazy" />
            </div>
            <h2>Email</h2>
            <small>
                angoedu@email.com
            </small>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" />
                </svg>
            </a>
        </div>
        <div class="feature col tex">
            <div class="feature-icon bg-dark bg-gradient rounded-5 shadow-5-strong">
                <img class="bi" src="https://www.svgrepo.com/show/59123/phone.svg" width="200px" height="200px"
                    loading="lazy" />
            </div>
            <h2>Phone Number</h2>
            <small>
                NUMBER : 0000000000000
            </small>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" />
                </svg>
            </a>
        </div>
        <div class="feature col ">
            <div class="feature-icon bg-warning bg-gradient rounded-5 shadow-5-strong">
                <img class="bi rounded-5 shadow-5-strong" src="https://www.svgrepo.com/show/40718/location.svg"
                    width="200px" height="200px" loading="lazy" />
            </div>
            <h2>Address</h2>
            <small>
                NUMBER : 0000000000000
            </small> <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" />
                </svg>
            </a>
        </div>
    </div>
</div>
<!--- Contact Form  Start -->


<div class="b-example-divider"></div>
<div class="container">
    <h1 class="text-center"><?php the_title(); ?></h1>
    <form action="contact.php">

        <label class="form-label">Name</label>
        <input type="text" placeholder="Name" name="name" class="form-control" />
        <hr class="py-1" />

        <label class="form-label">Message</label>
        <textarea class="form-control" style="height:200px; resize:none;">

    </textarea>
        <hr class="py-2" />
        <button type="submit" class="btn btn-success w-100">
            Submit Message
        </button>

    </form>
</div>


<!--- Contact Form  End -->


</div>


<?php

get_footer();
?>