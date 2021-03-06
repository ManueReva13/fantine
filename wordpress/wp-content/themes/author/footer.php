<?php hybrid_do_atomic( 'main_bottom' ); ?>
</div> <!-- .main -->

<footer class="site-footer" role="contentinfo">
    <?php hybrid_do_atomic( 'footer_top' ); ?>
    <div class="design-credit">
        <span>
            <?php
                $site_url = 'https://www.competethemes.com/author/';
                $footer_text = sprintf( __( 'Site réalisé par <a href="http://www.doyoubuzz.com/stermann-emmanuelle">Emmanuelle STERMANN</a> ', 'author' ), esc_url( $site_url ) );
                $footer_text = apply_filters( 'ct_author_footer_text', $footer_text );
                echo $footer_text;
            ?>
        </span>
    </div>
</footer>
</div><!-- .max-width -->
</div><!-- .overflow-container -->

<?php wp_footer(); ?>

<!--[if IE 8 ]>
<script src="<?php echo trailingslashit( get_template_directory_uri() ) . 'js/build/respond.min.js'; ?>"></script>
<![endif]-->

<?php hybrid_do_atomic( 'body_bottom' ); ?>
</body>
</html>