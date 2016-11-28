<?php
/**
 * The main template file
 */
?>

<?php get_header(); ?>

        <section id="home" class="site-wrapper-text">
            <div class="site-wrapper-inner-text">
                <div class="cover-container">
                    <div class="inner cover">
                        <h1 class="cover-heading">Nathan Catlin</h1>
                        <p class="lead cover-sub">Printmaker, Painter, Mad-Decent Guy</p>
                        <p class="lead smooth-btn">
                            <a href="#cv" class="btn btn-lg btn-default">CV</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="prints" class="container-fluid site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="inner cover">
                        <h1 class="cover-heading">Prints</h1>
                        <div id="rg-gallery-2" class="rg-gallery">
                            <div class="rg-thumbs">
                            <!-- Elastislide Carousel Thumbnail Viewer -->
                                <div class="es-carousel-wrapper">
                                    <div class="es-nav">
                                        <span class="es-nav-prev">Previous</span>
                                        <span class="es-nav-next">Next</span>
                                    </div>
                                    <div class="es-carousel">
                                        <ul class="elastislide-list">
                                            <?php 
                                                $args = array(
                                                    'numberposts' => -1,
                                                    'orderby' => 'menu_order',
                                                    'order' => 'ASC',
                                                    'post_mime_type' => 'image',
                                                    'post_parent' => null,
                                                    'post_type' => 'attachment',
                                                    'category_name' => 'prints',
                                                    'posts_per_page' => -1
                                                );
                
                                                $attachments = get_posts($args);

                                                if($attachments) {
                                                    foreach ($attachments as $attachment) {
                                                        echo "<li>";
                                                        $img = wp_get_attachment_url($attachment->ID);
                                                        $title = get_the_title($attachment->ID);
                                                        echo '<a href="#"><img src="'.$img.'" data-large="'.$img.'" data-description="'.$title.'"></a>';
                                                        echo "</li>";
                                                    }
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Elastislide Carousel Thumbnail Viewer -->
                            </div><!-- rg-thumbs -->
                        </div><!-- rg-gallery -->
                    </div>
                </div>
            </div>
        </section>

        <section id="paintings" class="container-fluid site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="inner cover">
                        <h1 class="cover-heading">Paintings</h1>
                        <div id="rg-gallery-3" class="rg-gallery">
                            <div class="rg-thumbs">
                            <!-- Elastislide Carousel Thumbnail Viewer -->
                                <div class="es-carousel-wrapper">
                                    <div class="es-nav">
                                        <span class="es-nav-prev">Previous</span>
                                        <span class="es-nav-next">Next</span>
                                    </div>
                                    <div class="es-carousel">
                                        <ul class="elastislide-list">
                                            <?php 
                                                $args = array(
                                                    'numberposts' => -1,
                                                    'orderby' => 'menu_order',
                                                    'order' => 'ASC',
                                                    'post_mime_type' => 'image',
                                                    'post_parent' => null,
                                                    'post_type' => 'attachment',
                                                    'category_name' => 'paintings',
                                                    'posts_per_page' => -1
                                                );
                
                                                $attachments = get_posts($args);
                
                                                $post_count = count ($attachments);

                                                if($attachments) {
                                                    foreach ($attachments as $attachment) {
                                                        echo "<li>";
                                                        $img = wp_get_attachment_url($attachment->ID);
                                                        $title = get_the_title($attachment->ID);
                                                        echo '<a href="#"><img src="'.$img.'" data-large="'.$img.'" data-description="'.$title.'"></a>';
                                                        echo "</li>";
                                                    }
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Elastislide Carousel Thumbnail Viewer -->
                            </div><!-- rg-thumbs -->
                        </div><!-- rg-gallery -->
                    </div>
                </div>
            </div>
        </section>

        <section id="murals" class="container-fluid site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="inner cover">
                        <h1 class="cover-heading">Murals</h1>
                        <div id="rg-gallery-4" class="rg-gallery">
                            <div class="rg-thumbs">
                            <!-- Elastislide Carousel Thumbnail Viewer -->
                                <div class="es-carousel-wrapper">
                                    <div class="es-nav">
                                        <span class="es-nav-prev">Previous</span>
                                        <span class="es-nav-next">Next</span>
                                    </div>
                                    <div class="es-carousel">
                                        <ul class="elastislide-list">
                                            <?php 
                                                $args = array(
                                                    'numberposts' => -1,
                                                    'orderby' => 'menu_order',
                                                    'order' => 'ASC',
                                                    'post_mime_type' => 'image',
                                                    'post_parent' => null,
                                                    'post_type' => 'attachment',
                                                    'category_name' => 'murals',
                                                    'posts_per_page' => -1
                                                );
                
                                                $attachments = get_posts($args);
                
                                                $post_count = count ($attachments);

                                                if($attachments) {
                                                    foreach ($attachments as $attachment) {
                                                        echo "<li>";
                                                        $img = wp_get_attachment_url($attachment->ID);
                                                        $title = get_the_title($attachment->ID);
                                                        echo '<a href="#"><img src="'.$img.'" data-large="'.$img.'" data-description="'.$title.'"></a>';
                                                        echo "</li>";
                                                    }
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Elastislide Carousel Thumbnail Viewer -->
                            </div><!-- rg-thumbs -->
                        </div><!-- rg-gallery -->
                    </div>
                </div>
            </div>
        </section>

        <section id="cv" class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="inner cover">
                        <h1 id="cv-head" class="cover-heading">CV</h1>
                        <div class="cv-col"><a class="sec-title" data-toggle="collapse" data-target="#cv-1">Events</a>
                        <p id="cv-1" class="lead cv collapse"><span class="year">2015</span> <span class="event">Peridot Green: Q03 A Gathering of Clouds</span>, NYC, NY | <span class="event">Bogo!, Davidson Contemporary (Maxwell Davidson Gallery</span>, NYC, NY | <span class="event">Deep Breath, Local Project</span>, Long Island City, NY | <span class="event">Peridot Green: Q01 Symbolic Symbiotic</span>, NYC, NY | <span class="event">Draw: Mapping Madness</span>, Dali Contemporary Art Museum, Dali, China | <span class="event">Surface of Revolution</span>, Southampton Arts Center, Southampton, NY | <span class="year">2014</span> <span class="event">Draw: Mapping Madness</span>, Inside Out Art Museum, Beijing, China | <span class="event">If These Walls Could Talk</span>, ABC NO RIO, NYC, NY | <span class="event">The Portrait Show</span>, LeRoy Neiman Gallery, NYC, NY | <span class="event">Forgotten History (Mural)</span>, Falchi Building, Long Island City, NY | <span class="event">Store Front Installation</span>, Desert Island, Brooklyn, NY | <span class="event">Drawing Show II: Connecting Dots</span>, LeRoy Neiman Gallery, NYC, NY | <span class="event">Drawing Show II: Connecting Dots</span>, Aquabit Gallery, Berlin, Germany | <span class="year">2013</span> <span class="event">Another View</span>, Saddleback College Art Gallery, Mission Viejo, CA | <span class="event">Wall Mural "Fox Hole 2"</span>, Local Project Art Space</span>, Long Island City, NY | <span class="event">Make: Paper and Print Work</span>, Hotel Indigo, Athens, GA | <span class="event">Personal Desire Propaganda</span>, 111 Front Street Galleries, Brooklyn, NY | <span class="year">2012</span> <span class="event">Art Jam (2 Person Show)</span>, Platform, Brooklyn, NY | <span class="event">Thesis Show</span>, Fisher Landau Center, Long Island City, NY | <span class="year">2011</span> <span class="event">When We Were Young</span>, LeRoy Neiman Gallery, NYC, NY | <span class="event">Up Against the Wall MotherFucker</span>, LeRoy Neiman Gallery, NYC, NY | <span class="event">First Year Show</span>, Wallach Gallery, Columbia University, NY | <span class="year">2010</span> <span class="event">IPCNY 10th Year Benefit Show</span>, International Print Center New York, NYC, NY | <span class="event">Shy Rabbit 2nd Print National</span>, Shy Rabbit Contemporary Arts Gallery, Pagosa Springs, CO | <span class="event">Show Me Some Skin</span>, Sho Gallery, Brooklyn, NY | <span class="event">HEAT, IPCNY New Prints Summer 2010</span>, International Print Center New York, NYC, NY | <span class="event">Printwork '10</span>, Barrett Art Center, Poughkeepsie, NY | <span class="event">MFA Art on Paper National Juried Exhibition</span>, MFA Main Gallery, Annapolis, MD | <span class="event">Ink and Clay 36</span>, W. Keith and Janet Kellogg University Art Gallery Pomona, CA | <span class="year">2009</span> <span class="event">Los Angeles Printmaking Societies 20th National Exhibition</span>, The Los Angeles Municipal Art Gallery, Los Angeles, CA | <span class="event">Axis 4th National Juried Exhibition, Juror: Janet Bishop</span>, Curator at SFMOMA, Axis Gallery, Sacramento, CA | <span class="event">Principles and Perspectives in Progress</span>, Lee Gallery at Clemson University, Clemson, SC | <span class="event">Boston Printmakers 2009 North American Print Biennial</span>, 808 Gallery, Boston, MA | <span class="event">IPCNY New Prints Winter 2009</span>, International Print Center New York, NYC, NY | <span class="year">2008</span> <span class="event">4th Biennial National Print Exhibition</span>, NAU Art Museum, Flagstaff, AZ | <span class="event">Loyola University Chicago Print Biannual IV</span>, Crown Center Gallery, Chicago, IL | <span class="year">2007</span> <span class="event">SFAI Anne Bremer Memorial Library's 24th Artist Book Contest</span>, San Francisco Art Institute, San Francisco, CA | <span class="event">California Centered: Printmaking</span>, Merced County Art Gallery, Merced, CA | <span class="year">2006</span> <span class="event">Don't I Know You?</span>, Live Worms Gallery, San Francisco, CA | <span class="event">Unlikely Friends</span>, Diego Rivera Gallery, San Francisco, CA | <span class="event">Fuck Conceptual Drawing Group Show</span>, Blank Space Gallery, Oakland, CA | <span class="event">Sixth Annual Monster Drawing Rally</span>, Southern Exposure, San Francisco, CA</p>
                        </div>
                        <div class="cv-col"><a class="sec-title" data-toggle="collapse" data-target="#cv-2">Awards</a>
                        <p id="cv-2" class="lead cv collapse"><span class="year">2012</span> <span class="event">Leroy Neiman Fellowship</span>, Columbia University, NY | <span class="event">Emily Fisher Landau Fellowship</span>, Columbia University, NY | <span class="year">2011</span> <span class="event">Leroy Neiman Fellowship</span>, Columbia University, NY | <span class="event">Emily Fisher Landau Fellowship</span>, Columbia University, NY | <span class="year">2010</span> <span class="event">Leroy Neiman Fellowship</span>, Columbia University, NY | <span class="year">2007</span> <span class="event">Bronze Roller</span>, San Francisco Art Institute, CA</p>
                        </div>
                        <div class="cv-col"><a class="sec-title" data-toggle="collapse" data-target="#cv-3">Curatorial</a>
                        <p id="cv-3" class="lead cv collapse"><span class="year">2013</span> <span class="event">Start As Close to the End As Possible</span>, Torrance Shipman Gallery, Brooklyn, NY | <span class="year">2011</span> <span class="event">When We Were Young</span>, Leroy Neiman Gallery, NYC, NY | <span class="year">2010</span> <span class="event">Show Me Some Skin</span>, Sho Gallery, Brooklyn, NY</p>
                        </div>
                        <div class="cv-col"><a class="sec-title" data-toggle="collapse" data-target="#cv-4">Collections</a>
                        <p id="cv-4" class="lead cv collapse"><span class="event">Emily Fisher Landau</span> | <span class="event">Rebecca Lax</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
