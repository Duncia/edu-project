<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__left">
            <figure class="icon mr-sm">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.svg'; ?>" alt="Logo">
            </figure>
            <div class="title mr-sm">Educrat</div>
            <div class="menu mr-sm"></div>
            <div class="explore"><a href="#">Explore</a></div>
        </div>
        <div class="header__main-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="header__right">
            <div class="search mr-sm">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.58335 17.5C13.9556 17.5 17.5 13.9555 17.5 9.58329C17.5 5.21104 13.9556 1.66663 9.58335 1.66663C5.2111 1.66663 1.66669 5.21104 1.66669 9.58329C1.66669 13.9555 5.2111 17.5 9.58335 17.5Z" stroke="#1A064F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.3334 18.3333L16.6667 16.6666" stroke="#1A064F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="cart mr-sm">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.2196 20.502C18.0104 20.502 18.7719 20.1652 19.2991 19.5721C19.8263 18.979 20.0753 18.1882 19.9801 17.4047L18.2594 2.46024C18.0983 1.06171 16.9121 0 15.4989 0H4.50107C3.0879 0 1.90171 1.06171 1.74063 2.46024L0.0199243 17.4047C-0.0752635 18.1882 0.173689 18.979 0.700883 19.5721C1.22808 20.1652 1.98958 20.502 2.78037 20.502H17.2196ZM1.46971 17.5731L3.19773 2.62865C3.27095 1.96233 3.83476 1.46443 4.50107 1.46443H15.4989C16.1652 1.46443 16.729 1.96233 16.8023 2.62865L18.5303 17.5731C18.5742 17.9466 18.4571 18.3127 18.2008 18.5982C17.9518 18.8838 17.6004 19.0376 17.2196 19.0376H2.78037C2.39962 19.0376 2.04816 18.8838 1.7992 18.5982C1.54293 18.3127 1.42578 17.9466 1.46971 17.5731V17.5731Z" fill="#1A064F"/>
                <path d="M9.99997 8.78654C12.4226 8.78654 14.3933 6.81586 14.3933 4.39326V3.66105C14.3933 3.25672 14.0654 2.92883 13.661 2.92883C13.2567 2.92883 12.9288 3.25672 12.9288 3.66105V4.39326C12.9288 6.00823 11.6149 7.32212 9.99997 7.32212C8.385 7.32212 7.07112 6.00823 7.07112 4.39326V3.66105C7.07112 3.25672 6.74323 2.92883 6.3389 2.92883C5.93457 2.92883 5.60669 3.25672 5.60669 3.66105V4.39326C5.60669 6.81586 7.57737 8.78654 9.99997 8.78654Z" fill="#1A064F"/>
                </svg>
            </div>
            <div class="login mr-sm"><a href="#">Log in</a></div>
            <button class="btn btn--signup"><a href="#">Sign Up</a></button>
        </div>
    </header>