<!-- Footer block -->
<footer>
    <ul>
        <h2><?php echo get_userdata(1)->first_name ?> <?php echo get_userdata(1)->last_name ?></h2>
        <p><?php echo get_userdata(1)->description ?></p>
        <a href="mailto:<?php echo get_the_author_meta( 'user_email', 1 ); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <a href="tel:+46708472955"><i class="fa fa-mobile" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/sebastian.kellgren.1" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    </ul>
</footer>