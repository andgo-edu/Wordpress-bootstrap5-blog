<?php
wp_head();
?>

<div id="andgoprimary" class="sidebar__primary">
    <?php if (is_active_sidebar('andgoprimary')) : ?>
    <div class="andgoprimary__sidebar" id="andgoPSideBar">
        <?php dynamic_sidebar('andgoprimary'); ?>

        <button class="sidebar__primary__btn" onclick="closeSideBar()">
            Close &times;
        </button>
    </div>

    <button class="sidebar__primary__btn" onclick="openSideBar()">
        ☰
    </button>

    <?php else : ?>
    <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>

<style>
.sidebar__primary {
    text-align: left;
    font-size: 2rem;
    background-color: #63d471;
    background-image: linear-gradient(315deg, #63d471 0%, #233329 74%);
    border-radius: 12px;


}

.sidebar__primary__btn {
    background-color: #d5fefd;
    background-image: linear-gradient(315deg, #d5fefd 0%, #fffcff 74%);
    border-radius: 18px;

}
</style>

<script>
function openSideBar() {
    document.getElementById('andgoPSideBar').style.width = "100%";
    document.getElementById("andgoPSideBar").style.display = "block";
}

function closeSideBar() {
    document.getElementById("andgoPSideBar").style.display = "none";
}
</script>