<?php 
/* Template Name: Home page */
?>
<?php get_header(); ?>

<div class="video-overlay display-none">
    <p class="video-overlay__close">Close video</p>
    <div class="video-overlay__frame">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QNTeq4QdOsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<section class="hero">
    <svg class="hero__blob--green" width="996" height="874" viewBox="0 0 996 874" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.07" d="M41.8681 577.958C39.4398 501.125 28.4899 420.831 9.01849 337.073C-10.453 253.316 4.26825 173.102 53.1821 96.4305C102.096 19.7592 173.272 -11.0896 266.711 3.88426C360.15 18.8581 442.782 22.3757 514.606 14.437C586.431 6.49835 650.812 25.2095 707.751 70.5705C764.689 115.932 833.993 162.536 915.662 210.383C997.332 258.23 1016.08 323.781 971.893 407.034C927.711 490.287 901.74 572.805 893.981 654.588C886.223 736.37 843.515 789.9 765.86 815.175C688.205 840.451 614.419 857.904 544.504 867.535C474.588 877.166 404.47 874.34 334.148 859.059C263.826 843.777 198.14 812.315 137.088 764.672C76.0363 717.029 44.2963 654.791 41.8681 577.958Z" fill="#00FF84"/></svg>
    <div class="hero__background">
        <img src="<?php echo get_template_directory_uri() . '/img/hero-bg-elements.svg'; ?>" alt="Hero image elements">
    </div>
    <div class="content">
        <div class="content__text">
            <p class="par-17 clr-blue pb-sm"><?php the_field('top-message');?></p>
            <h1 class="pb-sm">Build Data Skills <span class="clr-blue">Online</span></h1>
            <p class="content__text--par pb-sm"><?php the_field('sub-heading');?></p>
            <div class="content__text--buttons">
                <button class="btn btn--clr"><a href="">Join For Free</a></button>
                <button class="btn"><a href="">Find Courses</a></button>
            </div>
        </div> 
        <div class="content__video">
            <div class="wrapper">
                <svg viewBox="0 0 632 597" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                <clipPath id="user-space" clipPathUnits="userSpaceOnUse">
                <path d="M282.634 576.748C201.64 541.001 124.368 494.111 50.8163 436.075C14.0496 407.064 -2.26504 380.045 1.44893 355.004C5.16587 329.943 28.9797 306.567 73.2645 284.953C161.974 241.654 229.029 174.609 274.421 83.8324C297.058 38.5617 325.207 11.87 358.826 3.5891C392.453 -4.69388 431.697 5.40641 476.603 34.0528C566.397 91.3337 617.23 173.211 629.123 279.724C641.014 386.223 606.449 471.246 525.425 534.864C444.375 598.503 363.468 612.424 282.634 576.748Z" stroke="#EDEDED"/>
                </clipPath>
                </defs>
                <image width="100%" height="100%" preserveAspectRatio="xMinYMin slice" href="<?php echo get_template_directory_uri() . '/img/hero-img.jpg'; ?>" clip-path="url(#user-space)"/>
                </svg>
                <div class="play-button"><img src="<?php echo get_template_directory_uri() . '/img/play.svg'; ?>" alt="Play"></div>
            </div>
        </div>
    </div>
    <div class="hero__blob--purple">
    </div>
</section>
<section class="popular container pt-lr pb-lr">
    <div class="popular__text">
        <div class="popular__heading">
            <h3 class="pb-sm">Our Most Popular Courses</h3>
            <p class="pb-sm">10,000+ unique online course list designs</p>
        </div>
        <div class="popular__button pb-sm">
            <button class="btn btn--blue"><a href="#">All Courses</a></button>
        </div>
    </div>
    <div class="popular__boxes">
    <?php 
    $allPosts = new WP_Query(
        array(
            'post_type'=> array('post'), 
            'post_status'=>'publish'
        )); 
    while($allPosts->have_posts()) : $allPosts->the_post(); ?>
        <div class="box">
            <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}?>
                <div class="box__rating">
                    <span>4.5</span>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.46355 0.347861L3.24299 2.93348L0.512158 3.34944C0.0224388 3.42365 -0.173823 4.05443 0.181317 4.41572L2.15701 6.42719L1.68973 9.26863C1.60561 9.78224 2.12337 10.167 2.55701 9.92675L5 8.58512L7.44299 9.92675C7.87663 10.165 8.39439 9.78224 8.31028 9.26863L7.84299 6.42719L9.81868 4.41572C10.1738 4.05443 9.97756 3.42365 9.48784 3.34944L6.75701 2.93348L5.53645 0.347861C5.31776 -0.11302 4.68411 -0.118878 4.46355 0.347861Z" fill="#E59819"/>
                        </svg>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.46355 0.347861L3.24299 2.93348L0.512158 3.34944C0.0224388 3.42365 -0.173823 4.05443 0.181317 4.41572L2.15701 6.42719L1.68973 9.26863C1.60561 9.78224 2.12337 10.167 2.55701 9.92675L5 8.58512L7.44299 9.92675C7.87663 10.165 8.39439 9.78224 8.31028 9.26863L7.84299 6.42719L9.81868 4.41572C10.1738 4.05443 9.97756 3.42365 9.48784 3.34944L6.75701 2.93348L5.53645 0.347861C5.31776 -0.11302 4.68411 -0.118878 4.46355 0.347861Z" fill="#E59819"/>
                        </svg>  
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.46355 0.347861L3.24299 2.93348L0.512158 3.34944C0.0224388 3.42365 -0.173823 4.05443 0.181317 4.41572L2.15701 6.42719L1.68973 9.26863C1.60561 9.78224 2.12337 10.167 2.55701 9.92675L5 8.58512L7.44299 9.92675C7.87663 10.165 8.39439 9.78224 8.31028 9.26863L7.84299 6.42719L9.81868 4.41572C10.1738 4.05443 9.97756 3.42365 9.48784 3.34944L6.75701 2.93348L5.53645 0.347861C5.31776 -0.11302 4.68411 -0.118878 4.46355 0.347861Z" fill="#E59819"/>
                        </svg>  
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.46355 0.347861L3.24299 2.93348L0.512158 3.34944C0.0224388 3.42365 -0.173823 4.05443 0.181317 4.41572L2.15701 6.42719L1.68973 9.26863C1.60561 9.78224 2.12337 10.167 2.55701 9.92675L5 8.58512L7.44299 9.92675C7.87663 10.165 8.39439 9.78224 8.31028 9.26863L7.84299 6.42719L9.81868 4.41572C10.1738 4.05443 9.97756 3.42365 9.48784 3.34944L6.75701 2.93348L5.53645 0.347861C5.31776 -0.11302 4.68411 -0.118878 4.46355 0.347861Z" fill="#E59819"/>
                        </svg>  
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.46355 0.347861L3.24299 2.93348L0.512158 3.34944C0.0224388 3.42365 -0.173823 4.05443 0.181317 4.41572L2.15701 6.42719L1.68973 9.26863C1.60561 9.78224 2.12337 10.167 2.55701 9.92675L5 8.58512L7.44299 9.92675C7.87663 10.165 8.39439 9.78224 8.31028 9.26863L7.84299 6.42719L9.81868 4.41572C10.1738 4.05443 9.97756 3.42365 9.48784 3.34944L6.75701 2.93348L5.53645 0.347861C5.31776 -0.11302 4.68411 -0.118878 4.46355 0.347861Z" fill="#E59819"/>
                        </svg>  
                    <p>(1991)</p>
                </div>
                <div class="box__title"><?php the_title(); ?></div>
                <div class="box__details">
                    <div class="lesson"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" xmlns:v="https://vecta.io/nano"><g clip-path="url(#A)" fill="#6a7a99"><path d="M13.556 3.321L10.543.47A1.71 1.71 0 0 0 9.362 0H3.625a1.72 1.72 0 0 0-1.719 1.719v12.562A1.72 1.72 0 0 0 3.625 16h8.75a1.72 1.72 0 0 0 1.719-1.719V4.569a1.73 1.73 0 0 0-.538-1.249h0zm-.911.429h-2.333c-.086 0-.156-.07-.156-.156V1.395l2.489 2.355zm-.271 11.313h-8.75a.78.78 0 0 1-.781-.781V1.719a.78.78 0 0 1 .781-.781h5.594v2.656c0 .603.491 1.094 1.094 1.094h2.844v9.594a.78.78 0 0 1-.781.781zm-1.03-8.813H4.469A.47.47 0 0 0 4 6.719a.47.47 0 0 0 .469.469h6.875a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469zm0 2.5H4.469A.47.47 0 0 0 4 9.219a.47.47 0 0 0 .469.469h6.875a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469zm-4.603 2.5H4.469a.47.47 0 0 0-.469.469.47.47 0 0 0 .469.469h2.273a.47.47 0 0 0 .469-.469.47.47 0 0 0-.469-.469z"/></g><defs><clipPath id="A"><path fill="#fff" d="M0 0h16v16H0z"/></clipPath></defs></svg> 6 lessons</div>
                    <div class="clock"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C3.58891 0 0 3.58872 0 8C0 12.4113 3.58891 16 8 16C12.4113 16 16 12.4113 16 8C16 3.58872 12.4111 0 8 0ZM8 14.8321C4.23281 14.8321 1.16788 11.7672 1.16788 8C1.16788 4.23281 4.23281 1.16788 8 1.16788C11.7672 1.16788 14.8321 4.23278 14.8321 7.99981C14.8321 11.7672 11.7672 14.8321 8 14.8321Z" fill="#6A7A99"/>
                    <path d="M10.7251 7.99995H8.19473V4.49629C8.19473 4.17376 7.93332 3.91235 7.61079 3.91235C7.28826 3.91235 7.02686 4.17376 7.02686 4.49629V8.58389C7.02686 8.90642 7.28826 9.16782 7.61079 9.16782H10.7251C11.0477 9.16782 11.3091 8.90642 11.3091 8.58389C11.3091 8.26135 11.0477 7.99995 10.7251 7.99995Z" fill="#6A7A99"/>
                    </svg> 3h 56m</div>
                    <div class="level"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.15506 9.18054C0.966781 9.18054 0 10.1473 0 11.3356V13.8449C0 15.0333 0.966781 16 2.15509 16C3.34341 16 4.31016 15.0333 4.31016 13.8449V11.3356C4.31016 10.1473 3.34337 9.18054 2.15506 9.18054ZM3.06013 13.8449C3.06013 14.344 2.65412 14.75 2.15506 14.75C1.65603 14.75 1.25 14.344 1.25 13.8449V11.3356C1.25 10.8365 1.65603 10.4305 2.15509 10.4305C2.65416 10.4305 3.06016 10.8366 3.06013 11.3356V13.8449V13.8449Z" fill="#6A7A99"/>
                    <path d="M7.99993 0C6.81163 0 5.84485 0.966781 5.84485 2.15509V13.8449C5.84485 15.0332 6.81163 16 7.99993 16C9.18824 16 10.155 15.0332 10.155 13.8449V2.15509C10.155 0.966781 9.18824 0 7.99993 0ZM8.90503 13.8449C8.90503 14.344 8.499 14.75 7.99993 14.75C7.50087 14.75 7.09484 14.344 7.09484 13.8449V2.15509C7.09484 1.656 7.50087 1.25 7.99993 1.25C8.499 1.25 8.90503 1.656 8.90503 2.15509V13.8449Z" fill="#6A7A99"/>
                    <path d="M13.8448 4.59021C12.6565 4.59021 11.6897 5.55699 11.6897 6.7453V13.8449C11.6897 15.0332 12.6565 16 13.8448 16C15.0331 16 15.9999 15.0332 15.9999 13.8449V6.7453C15.9999 5.55699 15.0331 4.59021 13.8448 4.59021ZM14.7499 13.8449C14.7499 14.344 14.3438 14.75 13.8448 14.75C13.3457 14.75 12.9397 14.344 12.9397 13.8449V6.7453C12.9397 6.24621 13.3457 5.84021 13.8448 5.84021C14.3438 5.84021 14.7499 6.24621 14.7499 6.7453V13.8449Z" fill="#6A7A99"/>
                    </svg> Beginner</div>
                </div>
                <div class="box__separator"></div>
                <div class="box__price">
                    <div class="name">Ali Tufan</div>
                    <div class="amount"><span>$179</span> $<?php the_field('price');?></div>
                </div>
            </a>
        </div>
    <?php 
    endwhile; 
    wp_reset_postdata();
    ?>
    </div>
</section>
<section class="start-learning pb-lr">
    <div class="start-learning__top">
        <h3 class="clr-white pb-sm">Start your Learning Journey Today!</h3>
        <p class="clr-white pb-sm">Lorem ipsum dolor sit amet, consectetur.</p>
    </div>
    <div class="start-learning__boxes container">
        <div class="box">
            <img src="<?php echo get_template_directory_uri() . '/img/rating.svg'; ?>" alt="Rating">
            <h4><?php the_field('start-learning-title');?></h4>
            <p><?php the_field('start-learning-content');?></p>
        </div>
        <div class="box">
            <img src="<?php echo get_template_directory_uri() . '/img/science.svg'; ?>" alt="Rating">
            <h4>Learn Anything</h4>
            <p>Grursus mal suada faci lisis that ipsum ameti consecte.</p>
        </div>
        <div class="box">
            <img src="<?php echo get_template_directory_uri() . '/img/online-learning.svg'; ?>" alt="Rating">
            <h4>Flexible Learning</h4>
            <p>Grursus mal suada faci lisis that ipsum ameti consecte.</p>
        </div>
        <div class="box">
            <img src="<?php echo get_template_directory_uri() . '/img/certificate.svg'; ?>" alt="Rating">
            <h4>Industrial Standart</h4>
            <p>Grursus mal suada faci lisis that ipsum ameti consecte.</p>
        </div>
    </div>
</section>


<?php get_footer(); ?>