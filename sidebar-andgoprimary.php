<?php
wp_head();
?>

<div id="andgoprimary" class="sidebar__primary" >
    <?php if ( is_active_sidebar('andgoprimary') ) : ?>
        <div class="andgoprimary__sidebar" id="andgoPSideBar">
        <?php dynamic_sidebar('andgoprimary'); ?>

        <button onclick="closeSideBar()">
        Close &times;
        </button>
        </div>
  
        <button onclick="openSideBar()">
        ☰
        </button>

    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>

<style>
    .sidebar__primary{
        text-align: left;
        font-size: 2rem;
    }
</style>

<script>
    function openSideBar(){
        document.getElementById('andgoPSideBar').style.width="100%";
        document.getElementById("andgoPSideBar").style.display="block";
    }

    function closeSideBar(){
        document.getElementById("andgoPSideBar").style.display="none";
    }
    
</script>