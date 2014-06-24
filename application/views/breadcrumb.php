<?php if (is_array($breadcrumb) && sizeof($breadcrumb) > 0) : ?>
<!-- BreadCrumb -->
<nav>
    <div id="jCrumbs" class="breadCrumb module">
        <ul>
            <li><a href="#"><i class="icon-home"></i></a></li>
            <?php for ( $i = 0; $i <= sizeof($breadcrumb) -1 ; $i++) :?>
            <li>
                <?php if (is_array($breadcrumb[$i])) : ?>
                <a href="<?php echo base_url().$breadcrumb[$i][1]; ?>"> <?php echo $breadcrumb[$i][0]; ?> </a>
                <?php else: ?>
                    <?php echo $breadcrumb[$i]; ?>
                <?php endif; ?>
            </li>
            <?php endfor; ?>
        </ul>
    </div>
</nav>
<!-- End BreadCrumb -->
<?php endif; ?>