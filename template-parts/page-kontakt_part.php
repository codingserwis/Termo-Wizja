<h4 class="font-weight-light">
    <span><?php the_field('addres_city'); ?></span> <span>ul. <?php the_field('address_street'); ?></span>
</h4>
<ul class="mt-3">
    <li>
        <a href="tel:<?php echo str_replace(' ', '', get_field('address_phone')); ?>">
            <i class="fa fa-phone fa-rotate-90 mr-3"></i><span><?php the_field('address_phone'); ?></span>
        </a>
    </li>
    <li>
        <a href="mailto:<?php the_field('address_email'); ?>">
        <i class="fa fa-envelope-open-o mr-2"></i><span><?php the_field('address_email'); ?></span>
        </a>
    </li>
</ul>
<?php the_comment(); ?>