<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>

<footer class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p>&copy; <?php echo date("Y");?> Nathan Catlin</p>
            </div>
        </footer>

        <noscript>
            <style>
                .es-carousel ul{
                    display:block;
                }
            </style>
        </noscript>
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">    
            <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                    <div class="rg-image-nav">
                        <a href="#" class="rg-image-nav-prev">Previous Image</a>
                        <a href="#" class="rg-image-nav-next">Next Image</a>
                    </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
                <div class="rg-caption-wrapper">
                    <div class="rg-caption" style="display:none;">
                        <p></p>
                    </div>
                </div>
            </div>
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
