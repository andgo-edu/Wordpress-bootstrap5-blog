<?php

/*
Template Name: Contact
 */

get_header();
?>


<div class="container-fluid text-center">
    <h1 class="">
        Contact Form
    </h1>
    <div class="input-groput mb-4">

        <form action="contact.php">
            <label class="input-group-text">
                Name
            </label>
            <input class="form-control" placeholder="Name" name="name" />
            <label class="input-group-text">Message</label>
            <div class="form-floating">
                <textarea class="form-control" style="resize:none;" placeholder="Message" name="message"
                    id="floatingTextarea2" style="height: 100px">
        </textarea>

            </div>

            <button class="py-2 w-100 bg-success" style="border-radius: 18px;" type="submit" class="" onclick="">
                Submit Message
            </button>

        </form>


    </div>



</div>


<?php

get_footer();
?>