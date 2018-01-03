<?php
/**
* 	Template Name: Home Page
*
*	This page template has a sidebar built into it,
* 	and can be used as a home page, in which case the title will not show up.
*
*/
get_header(); // This fxn gets the header.php file and renders it ?>
  <div class="home-banner">
    <div class="home-flag">
      <img id="flag-banner" src="<?php echo get_template_directory_uri(); ?>/img/banner.png" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" />
      <?php $post_id = 5; ?>
      <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>
    </div>
    <div class="target" id="home-image">
      <img srcset="<?php echo get_template_directory_uri(); ?>/img/banner-mobile.png 760w,
<?php echo get_template_directory_uri(); ?>/img/banner-1440.jpg 1440w,
<?php echo get_template_directory_uri(); ?>/img/banner-2880.jpg 2880w" sizes="100vw" src="<?php echo get_template_directory_uri(); ?>/img/banner-1440.jpg" alt="Current Events">
    </div>
    <div id="navbar">
      <a id="nav-logo" onclick="$.scrollTo('#home-image', 400)"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"/></a>
      <ul>
        <li><a id="nav-what" onclick="$.scrollTo('#what-we-do', 400)">What we do</a></li>
        <li><a id="nav-services" onclick="$.scrollTo('#services', 400)">Services</a></li>
        <li><a id="nav-clients" onclick="$.scrollTo('#clients', 400)">Clients</a></li>
        <li><a id="nav-global" onclick="$.scrollTo('#global', 400)">Global reach</a></li>
        <li><a id="nav-connect" onclick="$.scrollTo('#connect-with-us', 400)">Connect with us</a></li>
      </ul>
      <a href="https://www.pinterest.com/current_events/" class="social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.svg" /></a>
      <a href="https://twitter.com/CurrentKris" class="social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" /></a>
      <a href="https://www.instagram.com/eventscurrents/" class="social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" /></a>
      <a href="https://www.facebook.com/EVENTSCURRENTEVENTS" class="social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" /></a>
    </div>
    <div id="mobile-navbar">
      <a id="mobile-logo" onclick="$.scrollTo('#home-image', 400)"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"/></a>
      <a id="show-menu" onclick="mobileToggle()"><img src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png"/></a>
      <a id="hide-menu" onclick="mobileToggle()"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png"/></a>
      <ul>
        <li><a id="nav-what" onclick="mobileLink('#what-we-do')">What we do</a></li>
        <li><a id="nav-services" onclick="mobileLink('#services')">Services</a></li>
        <li><a id="nav-clients" onclick="mobileLink('#clients')">Clients</a></li>
        <li><a id="nav-global" onclick="mobileLink('#global')">Global reach</a></li>
        <li><a id="nav-connect" onclick="mobileLink('#connect-with-us')">Connect with us</a></li>
        <li><a href="" class="social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/sm-pin.png" /></a>
          <a href="" class="social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/sm-fb.png" /></a>
        </li>
        <hr>
        <li class="mobile-social">
          <a href="https://www.pinterest.com/current_events/" class="mobile-social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.svg" /></a>
          <a href="https://twitter.com/CurrentKris" class="mobile-social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" /></a>
          <a href="https://www.instagram.com/eventscurrents/" class="mobile-social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" /></a>
          <a href="https://www.facebook.com/EVENTSCURRENTEVENTS" class="mobile-social-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" /></a>
        </li>
      </ul>
    </div>
  </div>
  <!-- .home-banner -->
  <div class="main-fluid">
    <!-- start the page containter -->
    <div class="row-fluid">
      <?php if ( have_posts() ) :
// Do we have any posts/pages in the databse that match our query?
?>
      <?php while ( have_posts() ) : the_post();
// If we have a page to show, start a loop that will display it
?>
      <?php //the_content(); ?>
      <!-- WHAT WE DO SECTION -->
      <figure class="target page-section ps-what-we-do" id="what-we-do">
        <h1 class="heading">What We Do</h1>
        <div class="lead-paragraph">
          <?php $post_id = 7; ?>
          <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>
        </div>
        <div class="three-col-list">
          <ul>
            <?php
if( have_rows('capabilities_left', 7) ):
while ( have_rows('capabilities_left', 7) ) : the_row();
echo "<li>";
the_sub_field('item');
echo "</li>";
endwhile;
endif;
?>
          </ul>
          <ul>
            <?php
if( have_rows('capabilities_center', 7) ):
while ( have_rows('capabilities_center', 7) ) : the_row();
echo "<li>";
the_sub_field('item');
echo "</li>";
endwhile;
endif;
?>
          </ul>
          <ul>
            <?php
if( have_rows('capabilities_right', 7) ):
while ( have_rows('capabilities_right', 7) ) : the_row();
echo "<li>";
the_sub_field('item');
echo "</li>";
endwhile;
endif;
?>
          </ul>
        </div>
      </figure>
    </div>
  </div>
  <!-- SERVICES SECTION -->
  <div class="target section-header services-header" id="services">
    <img srcset="<?php echo get_template_directory_uri(); ?>/img/services-header-mobile.png 760w,
<?php echo get_template_directory_uri(); ?>/img/services-header.jpg 1440w,
<?php echo get_template_directory_uri(); ?>/img/services-header@2x.jpg 2880w" sizes="100vw" src="<?php echo get_template_directory_uri(); ?>/img/services-header.jpg" alt="Current Events - Services">
    <h1 class="heading">Services</h1>
  </div>
  <div class="main-fluid">
    <!-- start the page containter -->
    <div class="row-fluid">
      <figure class="page-section ps-services">
        <div class="indented-row">
          <div class="three-up-col">
            <h3><?php the_field('copy-heading-left', 12); ?></h3>
            <p>
              <?php the_field('copy-block-left', 12); ?>
            </p>
          </div>
          <div class="three-up-col">
            <h3><?php the_field('copy-heading-center', 12); ?></h3>
            <p>
              <?php the_field('copy-block-center', 12); ?>
            </p>
          </div>
          <div class="three-up-col">
            <h3><?php the_field('copy-heading-right', 12); ?></h3>
            <p>
              <?php the_field('copy-block-right', 12); ?>
            </p>
          </div>
        </div>
      </figure>
      <hr class="split">
      <figure class="page-section ps-services second">
        <div class="indented-row">
          <div class="four-up-col service-list">
            <h4><?php the_field('services_column_1_heading', 12); ?></h4>
            <ul>
              <?php
if( have_rows('services_column_1', 12) ):
while( have_rows('services_column_1', 12) ): the_row();
echo "<li>";
the_sub_field('services');
echo "</li>";
endwhile;
endif;
?>
            </ul>
          </div>
          <div class="four-up-col service-list">
            <h4><?php the_field('services_column_2_heading', 12); ?></h4>
            <ul>
              <?php
if( have_rows('services_column_2', 12) ):
while( have_rows('services_column_2', 12) ): the_row();
echo "<li>";
the_sub_field('services');
echo "</li>";
endwhile;
endif;
?>
            </ul>
          </div>
          <div class="four-up-col service-list">
            <h4><?php the_field('services_column_3_heading', 12); ?></h4>
            <ul>
              <?php
if( have_rows('services_column_3', 12) ):
while( have_rows('services_column_3', 12) ): the_row();
echo "<li>";
the_sub_field('services');
echo "</li>";
endwhile;
endif;
?>
            </ul>
          </div>
          <div class="four-up-col service-list">
            <h4><?php the_field('services_column_4_heading', 12); ?></h4>
            <ul>
              <?php
if( have_rows('services_column_4', 12) ):
while( have_rows('services_column_4', 12) ): the_row();
echo "<li>";
the_sub_field('services');
echo "</li>";
endwhile;
endif;
?>
            </ul>
          </div>
        </div>
      </figure>
    </div>
  </div>
  <!-- END SERVICES -->
  <!-- CLIENTS SECTION -->
  <div class="target section-header clients-header" id="clients">
    <img srcset="<?php echo get_template_directory_uri(); ?>/img/clients-mobile.png 760w,
<?php echo get_template_directory_uri(); ?>/img/clients.jpg 1440w,
<?php echo get_template_directory_uri(); ?>/img/clients@2x.jpg 2880w" sizes="100vw" src="<?php echo get_template_directory_uri(); ?>/img/clients.jpg" alt="Current Events - Satisfied Clients">
    <h1 class="heading">Satisfied Clients</h1>
  </div>
  <div class="lead-paragraph" id="client-leader">
    <h3><?php the_field('sub-heading', 14); ?></h3>
    <p>
      <?php the_field('clients_copy', 14); ?>
    </p>
  </div>
  <div class="reviews-block non-mobile">
    <div class="reviews">
      <ul>
        <?php
if( have_rows('review', 14) ):
while( have_rows('review', 14) ): the_row();
echo "<li>"; ?>
          <h3><?php the_sub_field('heading'); ?></h3>
          <p>
            <?php the_sub_field('quote'); ?>
          </p>
          <p>
            <?php
if( have_rows('client') ):
while( have_rows('client') ): the_row();?>
              <span class="client-info"><?php the_sub_field('client_info'); ?></span>
              <?php
endwhile;
endif;
?>
          </p>
          <?php	echo "</li>";
endwhile;
endif;
?>
      </ul>
    </div>
  </div>
  <div class="mobile-reviews">
    <ul>
      <?php
if( have_rows('review', 14) ):
$total = count( get_field('review', 14) );
$counter = 0;
while( have_rows('review', 14) ): the_row();
if( $counter == 1 ){
echo "<div id='more-reviews'>";
}
echo "<li>"; ?>
        <h3><?php the_sub_field('heading'); ?></h3>
        <p>
          <?php the_sub_field('quote'); ?>
        </p>
        <p>
          <?php
if( have_rows('client') ):
while( have_rows('client') ): the_row();?>
            <span class="client-info"><?php the_sub_field('client_info'); ?></span>
            <?php
endwhile;
endif;
?>
        </p>
        <?php	echo "</li>";
$counter ++;
endwhile;
if( $counter > 2 ){
$base = get_template_directory_uri();
echo "</div>";
echo "<hr class='reviews-rule'>";
echo "<a id='show-reviews'><img src='" . $base . "/img/show-arrow.png'> READ MORE TESTIMONIALS</a>";
echo "<hr class='reviews-rule'>";
}
endif;
?>
    </ul>
  </div>
  <!-- END CLIENTS -->
  <!-- style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/world_map.svg')" -->
  <!-- GLOBAL REACH SECTION -->
  <figure class="target page-section " id="global" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/world_map.svg');">
    <div class="global-header">
      <h1 class="heading">Global Reach</h1>
    </div>
    <div class="lead-paragraph" id="global-leader">
      <?php echo apply_filters('the_content', get_post_field('post_content', 16)); ?>
    </div>
    <div class="global-block">
      <ul class="global-list">
        <lh>North America</lh>
        <li>Akron</li>
        <li>Atlanta</li>
        <li>Austin</li>
        <li>Boston</li>
        <li>Chicago</li>
        <li>Dallas/Fort Worth</li>
      </ul>
      <ul class="global-list">
        <li>Eugene</li>
        <li>Honolulu</li>
        <li>Las Vegas</li>
        <li>Los Angeles</li>
        <li>Milwaukie</li>
        <li>New York</li>
        <li>Orlando</li>
      </ul>
      <ul class="global-list">
        <li>Palm Springs</li>
        <li>Philadelphia</li>
        <li>Phoenix</li>
        <li>Portland</li>
        <li>San Diego</li>
        <li>San Francisco</li>
        <li>Santa Monica</li>
      </ul>
      <ul class="global-list">
        <li>Scottsdale</li>
        <li>Seattle</li>
        <li>Washington DC</li>
        <li>Montreal</li>
        <li>Toronto</li>
        <li>Vancouver</li>
      </ul>
      <ul class="global-list">
        <lh>South America</lh>
        <li>Brazil</li>
        <li>Mexico</li>
        <lh>Europe</lh>
        <li>England</li>
        <li>Spain</li>
      </ul>
      <ul class="global-list">
        <lh>Asia</lh>
        <li>Korea</li>
        <li>Taiwan</li>
        <li>Thailand</li>
        <li>Vietnam</li>
      </ul>
      <!-- mobile global reach list -->
      <ul class="mobile-global">
        <lh>North America</lh>
        <li>Akron</li>
        <li>Atlanta</li>
        <li>Austin</li>
        <li>Boston</li>
        <li>Chicago</li>
        <li>Dallas/Fort Worth</li>
        <li>Eugene</li>
        <li>Honolulu</li>
        <li>Las Vegas</li>
        <li>Los Angeles</li>
        <li>Milwaukie</li>
        <li>New York</li>
        <li>Orlando</li>
        <li>Palm Springs</li>
        <li>Philadelphia</li>
        <li>Phoenix</li>
        <li>Portland</li>
        <li>San Diego</li>
        <li>San Francisco</li>
      </ul>
      <ul class="mobile-global">
        <li>Santa Monica</li>
        <li>Scottsdale</li>
        <li>Seattle</li>
        <li>Washington DC</li>
        <li>Montreal</li>
        <li>Toronto</li>
        <li>Vancouver</li>
        <lh>South America</lh>
        <li>Brazil</li>
        <li>Mexico</li>
        <lh>Europe</lh>
        <li>England</li>
        <li>Spain</li>
        <lh>Asia</lh>
        <li>Korea</li>
        <li>Taiwan</li>
        <li>Thailand</li>
        <li>Vietnam</li>
      </ul>
    </div>
    </div>
  </figure>
  <!-- END GLOBAL -->
  <!-- CONNECT SECTION -->
  <div class="target connect" id="connect-with-us">
    <div class="Connect-header">
      <h1 class="heading">Connect With Us</h1>
    </div>
    <div id="team">
      <?php
if( have_rows('team_member', 18) ) :
while( have_rows('team_member', 18) ) : the_row();
?>
        <div class="team-member">
          <h2><?php the_sub_field('name'); ?></h2>
          <p class="job-title">
            <?php the_sub_field('title_1'); ?> |
            <?php the_sub_field('title_2'); ?>
          </p>
          <img src="<?php the_sub_field('photo'); ?>" alt="<?php the_sub_field('name') . ',' . the_sub_field('title_1') . ' | ' . the_sub_field('title_2'); ?>">
          <h4 class="nickname"><?php the_sub_field('nickname'); ?></h4>
          <p class="team-member-info">
            <?php the_sub_field('info'); ?>
          </p>
          <p class="team-member-contact">
            <?php the_sub_field('phone'); ?><br>
            <a href="mailto:<?php the_sub_field('email'); ?>">
              <?php the_sub_field('email'); ?>
            </a>
          </p>
        </div>
        <?php
endwhile;
endif;
?>
    </div>
  </div>
  <div class="form-block">
    <?php echo do_shortcode( '[contact-form-7 id="62" title="Contact_copy"]' ); ?>
  </div>
  <hr class="split">
  <div id="footer">
    <p class="bold">A Company By:</p>
    <img src="<?php echo get_template_directory_uri(); ?>/img/zen_mavens.svg">
    <p><span class="bold">ZEN:</span> Complete and absolute peace. Zen is a way of being. It also is a state of mind.</p>
    <p><span class="bold">MAVEN:</span> A maven is a trusted expert in a particular field, who seeks to pass knowledge on to others</p>
    <p>&nbsp;</p>
    <p>&copy; Zen Mavens
      <?php echo date("Y"); ?>
    </p>
  </div>
  <!-- END CONNECT -->
  <?php endwhile; // OK, let's stop the page loop once we've displayed it ?>
  <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
  <article class="post error">
    <h3 class="404">We're sorry, but the page you're looking for does not exist.</h3>
    <h3><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"/><br>Return to Home.</a>
</article>
<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>
</div><!-- .content-area -->
</div><!-- / end page container -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>