<!-- Footer block -->
<footer>
    <h2>Kontakta mig.</h2>
    <?php dynamic_sidebar("footer_block"); ?> 
    <h3><?php echo get_userdata(1)->first_name ?> <?php echo get_userdata(1)->last_name ?></h3>
    <p><?php echo get_userdata(1)->description ?></p>
    <a href="https://www.facebook.com/sebastian.kellgren.1" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
</footer>