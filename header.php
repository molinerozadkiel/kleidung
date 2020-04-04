<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- GOOGLE FONTS! -->
  <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Spartan:200,300&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/> -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<view id="load" class="load">
			<div class="circle"></div>
	</view>

  <header class="header alt" id="header">


    <!-- NAVIGATION BAR -->
  	<?php
    	$args = array(
    	  'theme_location' => 'header',
    	  'depth' => 0,
    	  'container'	=> false,
    	  'fallback_cb' => false,
    	  'menu_class' => 'navBar',
    	);
    	wp_nav_menu($args);
  	?>

    <a href="<?php echo site_url('');  ?>">
      <svg
      class="headerLogo"
      width="356"
      height="28"
      viewBox="0 0 374 33"
      fill="currentColor"
      xmlns="http://www.w3.org/2000/svg">

      <!-- M   -->
      <path d="M0 1.63281C0 1.35938 0.0911458 1.13151 0.273438 0.949219C0.46875 0.753906 0.703125 0.65625 0.976562 0.65625C1.25 0.65625 1.48438 0.747396 1.67969 0.929688L13.6914 12.9219L25.5664 1.04688C25.6055 1.00781 25.6445 0.96875 25.6836 0.929688C25.8659 0.747396 26.0938 0.65625 26.3672 0.65625C26.6406 0.65625 26.8685 0.753906 27.0508 0.949219C27.2461 1.13151 27.3438 1.35938 27.3438 1.63281V27.0234C27.3438 27.2969 27.2461 27.5312 27.0508 27.7266C26.8685 27.9089 26.6406 28 26.3672 28C26.0938 28 25.8594 27.9089 25.6641 27.7266C25.4818 27.5312 25.3906 27.2969 25.3906 27.0234V3.99609L14.375 15.0117L14.2578 15.1289C14.0885 15.2461 13.8932 15.3047 13.6719 15.3047C13.3984 15.3047 13.1706 15.207 12.9883 15.0117C12.9362 14.9727 12.8971 14.9336 12.8711 14.8945L1.95312 3.97656V27.0234C1.95312 27.2969 1.85547 27.5312 1.66016 27.7266C1.47786 27.9089 1.25 28 0.976562 28C0.703125 28 0.46875 27.9089 0.273438 27.7266C0.0911458 27.5312 0 27.2969 0 27.0234V1.63281Z" fill="currentColor"/>

      <!-- A -->
      <path d="M45 3.82031L36.2891 21.1641H53.6914L45 3.82031ZM33.0664 27.5312C33.0273 27.5964 32.9818 27.6549 32.9297 27.707C32.7344 27.9023 32.5 28 32.2266 28C31.9531 28 31.7188 27.9089 31.5234 27.7266C31.3411 27.5312 31.25 27.2969 31.25 27.0234C31.25 26.763 31.3346 26.5417 31.5039 26.3594L43.9453 1.55469C43.9714 1.30729 44.069 1.09896 44.2383 0.929688C44.4206 0.747396 44.6484 0.65625 44.9219 0.65625C45.1953 0.65625 45.4297 0.747396 45.625 0.929688C45.7161 1.03385 45.7878 1.14453 45.8398 1.26172L45.8789 1.24219L58.6328 26.6719L58.5547 26.7109C58.5807 26.8151 58.5938 26.9193 58.5938 27.0234C58.5938 27.2969 58.4961 27.5312 58.3008 27.7266C58.1185 27.9089 57.8906 28 57.6172 28C57.3438 28 57.1159 27.9023 56.9336 27.707C56.7383 27.5247 56.6406 27.3034 56.6406 27.043L54.668 23.1172H35.3125L33.0859 27.5508L33.0664 27.5312Z" fill="currentColor"/>

      <!-- R -->
      <path d="M89.5703 26.3203C89.7526 26.5156 89.8438 26.75 89.8438 27.0234C89.8438 27.2969 89.7461 27.5312 89.5508 27.7266C89.3685 27.9089 89.1406 28 88.8672 28C88.5938 28 88.3659 27.9023 88.1836 27.707C88.1315 27.668 88.0924 27.6289 88.0664 27.5898L75.7812 15.3047H64.4531V27.0234C64.4531 27.2969 64.3555 27.5312 64.1602 27.7266C63.9779 27.9089 63.75 28 63.4766 28C63.2031 28 62.9688 27.9089 62.7734 27.7266C62.5911 27.5312 62.5 27.2969 62.5 27.0234V1.63281C62.5 1.35938 62.5911 1.13151 62.7734 0.949219C62.9688 0.753906 63.2031 0.65625 63.4766 0.65625H82.5195C84.5378 0.65625 86.263 1.3724 87.6953 2.80469C89.1276 4.23698 89.8438 5.96224 89.8438 7.98047C89.8438 9.9987 89.1276 11.724 87.6953 13.1562C86.263 14.5885 84.5378 15.3047 82.5195 15.3047H78.5547L89.5703 26.3203ZM82.5195 13.3516C84.0039 13.3516 85.2669 12.8307 86.3086 11.7891C87.3633 10.7344 87.8906 9.46484 87.8906 7.98047C87.8906 6.49609 87.3633 5.23307 86.3086 4.19141C85.2669 3.13672 84.0039 2.60938 82.5195 2.60938H64.4531V13.3516H82.5195Z" fill="currentColor"/>

      <!-- I -->
      <path d="M93.75 1.63281C93.75 1.35938 93.8411 1.13151 94.0234 0.949219C94.2188 0.753906 94.4531 0.65625 94.7266 0.65625C95 0.65625 95.2279 0.753906 95.4102 0.949219C95.6055 1.13151 95.7031 1.35938 95.7031 1.63281V27.0234C95.7031 27.2969 95.6055 27.5312 95.4102 27.7266C95.2279 27.9089 95 28 94.7266 28C94.4531 28 94.2188 27.9089 94.0234 27.7266C93.8411 27.5312 93.75 27.2969 93.75 27.0234V1.63281Z" fill="currentColor"/>

      <!-- A -->
      <path d="M113.359 3.82031L104.648 21.1641H122.051L113.359 3.82031ZM101.426 27.5312C101.387 27.5964 101.341 27.6549 101.289 27.707C101.094 27.9023 100.859 28 100.586 28C100.312 28 100.078 27.9089 99.8828 27.7266C99.7005 27.5312 99.6094 27.2969 99.6094 27.0234C99.6094 26.763 99.694 26.5417 99.8633 26.3594L112.305 1.55469C112.331 1.30729 112.428 1.09896 112.598 0.929688C112.78 0.747396 113.008 0.65625 113.281 0.65625C113.555 0.65625 113.789 0.747396 113.984 0.929688C114.076 1.03385 114.147 1.14453 114.199 1.26172L114.238 1.24219L126.992 26.6719L126.914 26.7109C126.94 26.8151 126.953 26.9193 126.953 27.0234C126.953 27.2969 126.855 27.5312 126.66 27.7266C126.478 27.9089 126.25 28 125.977 28C125.703 28 125.475 27.9023 125.293 27.707C125.098 27.5247 125 27.3034 125 27.043L123.027 23.1172H103.672L101.445 27.5508L101.426 27.5312Z" fill="currentColor"/>

      <!-- L -->
      <path d="M140.781 1.63281C140.781 1.35938 140.872 1.13151 141.055 0.949219C141.25 0.753906 141.484 0.65625 141.758 0.65625C142.031 0.65625 142.259 0.753906 142.441 0.949219C142.637 1.13151 142.734 1.35938 142.734 1.63281V26.0469H167.148C167.422 26.0469 167.65 26.1445 167.832 26.3398C168.027 26.5221 168.125 26.75 168.125 27.0234C168.125 27.2969 168.027 27.5312 167.832 27.7266C167.65 27.9089 167.422 28 167.148 28H141.758C141.484 28 141.25 27.9089 141.055 27.7266C140.872 27.5312 140.781 27.2969 140.781 27.0234V1.63281Z" fill="currentColor"/>

      <!-- E -->
      <path d="M173.008 0.65625H198.398C198.672 0.65625 198.9 0.753906 199.082 0.949219C199.277 1.13151 199.375 1.35938 199.375 1.63281C199.375 1.90625 199.277 2.14062 199.082 2.33594C198.9 2.51823 198.672 2.60938 198.398 2.60938H173.984V13.3516H198.398C198.672 13.3516 198.9 13.4492 199.082 13.6445C199.277 13.8268 199.375 14.0547 199.375 14.3281C199.375 14.6016 199.277 14.8359 199.082 15.0312C198.9 15.2135 198.672 15.3047 198.398 15.3047H173.984V26.0469H198.398C198.672 26.0469 198.9 26.1445 199.082 26.3398C199.277 26.5221 199.375 26.75 199.375 27.0234C199.375 27.2969 199.277 27.5312 199.082 27.7266C198.9 27.9089 198.672 28 198.398 28H173.008C172.734 28 172.5 27.9089 172.305 27.7266C172.122 27.5312 172.031 27.2969 172.031 27.0234V1.63281C172.031 1.35938 172.122 1.13151 172.305 0.949219C172.5 0.753906 172.734 0.65625 173.008 0.65625Z" fill="currentColor"/>

      <!-- B -->
      <path d="M226.992 14.3281C227.513 14.6406 228.008 15.0312 228.477 15.5C229.909 16.9323 230.625 18.6576 230.625 20.6758C230.625 22.694 229.909 24.4193 228.477 25.8516C227.044 27.2839 225.319 28 223.301 28H204.258C203.984 28 203.75 27.9089 203.555 27.7266C203.372 27.5312 203.281 27.2969 203.281 27.0234V1.63281C203.281 1.35938 203.372 1.13151 203.555 0.949219C203.75 0.753906 203.984 0.65625 204.258 0.65625H223.301C225.319 0.65625 227.044 1.3724 228.477 2.80469C229.909 4.23698 230.625 5.96224 230.625 7.98047C230.625 9.9987 229.909 11.724 228.477 13.1562C228.008 13.625 227.513 14.0156 226.992 14.3281ZM223.301 13.3516C224.785 13.3516 226.048 12.8307 227.09 11.7891C228.145 10.7344 228.672 9.46484 228.672 7.98047C228.672 6.49609 228.145 5.23307 227.09 4.19141C226.048 3.13672 224.785 2.60938 223.301 2.60938H205.234V13.3516H223.301ZM205.234 26.0469H223.301C224.785 26.0469 226.048 25.526 227.09 24.4844C228.145 23.4297 228.672 22.1602 228.672 20.6758C228.672 19.1914 228.145 17.9284 227.09 16.8867C226.048 15.832 224.785 15.3047 223.301 15.3047H205.234V26.0469Z" fill="currentColor"/>

      <!-- R -->
      <path d="M261.602 26.3203C261.784 26.5156 261.875 26.75 261.875 27.0234C261.875 27.2969 261.777 27.5312 261.582 27.7266C261.4 27.9089 261.172 28 260.898 28C260.625 28 260.397 27.9023 260.215 27.707C260.163 27.668 260.124 27.6289 260.098 27.5898L247.812 15.3047H236.484V27.0234C236.484 27.2969 236.387 27.5312 236.191 27.7266C236.009 27.9089 235.781 28 235.508 28C235.234 28 235 27.9089 234.805 27.7266C234.622 27.5312 234.531 27.2969 234.531 27.0234V1.63281C234.531 1.35938 234.622 1.13151 234.805 0.949219C235 0.753906 235.234 0.65625 235.508 0.65625H254.551C256.569 0.65625 258.294 1.3724 259.727 2.80469C261.159 4.23698 261.875 5.96224 261.875 7.98047C261.875 9.9987 261.159 11.724 259.727 13.1562C258.294 14.5885 256.569 15.3047 254.551 15.3047H250.586L261.602 26.3203ZM254.551 13.3516C256.035 13.3516 257.298 12.8307 258.34 11.7891C259.395 10.7344 259.922 9.46484 259.922 7.98047C259.922 6.49609 259.395 5.23307 258.34 4.19141C257.298 3.13672 256.035 2.60938 254.551 2.60938H236.484V13.3516H254.551Z" fill="currentColor"/>

      <!-- E -->
      <path d="M266.758 0.65625H292.148C292.422 0.65625 292.65 0.753906 292.832 0.949219C293.027 1.13151 293.125 1.35938 293.125 1.63281C293.125 1.90625 293.027 2.14062 292.832 2.33594C292.65 2.51823 292.422 2.60938 292.148 2.60938H267.734V13.3516H292.148C292.422 13.3516 292.65 13.4492 292.832 13.6445C293.027 13.8268 293.125 14.0547 293.125 14.3281C293.125 14.6016 293.027 14.8359 292.832 15.0312C292.65 15.2135 292.422 15.3047 292.148 15.3047H267.734V26.0469H292.148C292.422 26.0469 292.65 26.1445 292.832 26.3398C293.027 26.5221 293.125 26.75 293.125 27.0234C293.125 27.2969 293.027 27.5312 292.832 27.7266C292.65 27.9089 292.422 28 292.148 28H266.758C266.484 28 266.25 27.9089 266.055 27.7266C265.872 27.5312 265.781 27.2969 265.781 27.0234V1.63281C265.781 1.35938 265.872 1.13151 266.055 0.949219C266.25 0.753906 266.484 0.65625 266.758 0.65625Z" fill="currentColor"/>

      <!-- D -->
      <path d="M310.703 26.0469C313.945 26.0469 316.706 24.9076 318.984 22.6289C321.276 20.3372 322.422 17.5703 322.422 14.3281C322.422 11.0859 321.276 8.32552 318.984 6.04688C316.706 3.75521 313.945 2.60938 310.703 2.60938H298.984V26.0469H310.703ZM298.008 28C297.734 28 297.5 27.9089 297.305 27.7266C297.122 27.5312 297.031 27.2969 297.031 27.0234V1.63281C297.031 1.35938 297.122 1.13151 297.305 0.949219C297.5 0.753906 297.734 0.65625 298.008 0.65625H310.703C314.479 0.65625 317.702 1.99089 320.371 4.66016C323.04 7.32943 324.375 10.5521 324.375 14.3281C324.375 18.1042 323.04 21.3268 320.371 23.9961C317.702 26.6654 314.479 28 310.703 28H298.008Z" fill="currentColor"/>

      <!-- O -->
      <path d="M341.953 0.65625C345.729 0.65625 348.952 1.99089 351.621 4.66016C354.29 7.32943 355.625 10.5521 355.625 14.3281C355.625 18.1042 354.29 21.3268 351.621 23.9961C348.952 26.6654 345.729 28 341.953 28C338.177 28 334.954 26.6654 332.285 23.9961C329.616 21.3268 328.281 18.1042 328.281 14.3281C328.281 10.5521 329.616 7.32943 332.285 4.66016C334.954 1.99089 338.177 0.65625 341.953 0.65625ZM341.953 2.60938C338.711 2.60938 335.944 3.75521 333.652 6.04688C331.374 8.32552 330.234 11.0859 330.234 14.3281C330.234 17.5703 331.374 20.3372 333.652 22.6289C335.944 24.9076 338.711 26.0469 341.953 26.0469C345.195 26.0469 347.956 24.9076 350.234 22.6289C352.526 20.3372 353.672 17.5703 353.672 14.3281C353.672 11.0859 352.526 8.32552 350.234 6.04688C347.956 3.75521 345.195 2.60938 341.953 2.60938Z" fill="currentColor"/>
      </svg>
    </a>
<!--
    <a class="cartButton" id="cartButton" href="<?php echo wc_get_cart_url(); ?>">
      <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
        <path fill="currentColor" d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"></path>
      </svg>
      <p class="cartButtonCant" id="cartButtonCant">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
      </p>
    </a> -->
    <?php // woocommerce_mini_cart(); ?>

    <?php include 'socialMedia.php'; ?>


  </header>

  <header  class="mobileHeader">
    <div class="initialNavMobile">
      <a class="logoMobile" href="<?php echo site_url('');  ?>">
        <svg
        class="headerLogoMob"
        width="356"
        height="28"
        viewBox="0 0 374 33"
        fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">

        <!-- M   -->
        <path d="M0 1.63281C0 1.35938 0.0911458 1.13151 0.273438 0.949219C0.46875 0.753906 0.703125 0.65625 0.976562 0.65625C1.25 0.65625 1.48438 0.747396 1.67969 0.929688L13.6914 12.9219L25.5664 1.04688C25.6055 1.00781 25.6445 0.96875 25.6836 0.929688C25.8659 0.747396 26.0938 0.65625 26.3672 0.65625C26.6406 0.65625 26.8685 0.753906 27.0508 0.949219C27.2461 1.13151 27.3438 1.35938 27.3438 1.63281V27.0234C27.3438 27.2969 27.2461 27.5312 27.0508 27.7266C26.8685 27.9089 26.6406 28 26.3672 28C26.0938 28 25.8594 27.9089 25.6641 27.7266C25.4818 27.5312 25.3906 27.2969 25.3906 27.0234V3.99609L14.375 15.0117L14.2578 15.1289C14.0885 15.2461 13.8932 15.3047 13.6719 15.3047C13.3984 15.3047 13.1706 15.207 12.9883 15.0117C12.9362 14.9727 12.8971 14.9336 12.8711 14.8945L1.95312 3.97656V27.0234C1.95312 27.2969 1.85547 27.5312 1.66016 27.7266C1.47786 27.9089 1.25 28 0.976562 28C0.703125 28 0.46875 27.9089 0.273438 27.7266C0.0911458 27.5312 0 27.2969 0 27.0234V1.63281Z" fill="currentColor"/>

        <!-- A -->
        <path d="M45 3.82031L36.2891 21.1641H53.6914L45 3.82031ZM33.0664 27.5312C33.0273 27.5964 32.9818 27.6549 32.9297 27.707C32.7344 27.9023 32.5 28 32.2266 28C31.9531 28 31.7188 27.9089 31.5234 27.7266C31.3411 27.5312 31.25 27.2969 31.25 27.0234C31.25 26.763 31.3346 26.5417 31.5039 26.3594L43.9453 1.55469C43.9714 1.30729 44.069 1.09896 44.2383 0.929688C44.4206 0.747396 44.6484 0.65625 44.9219 0.65625C45.1953 0.65625 45.4297 0.747396 45.625 0.929688C45.7161 1.03385 45.7878 1.14453 45.8398 1.26172L45.8789 1.24219L58.6328 26.6719L58.5547 26.7109C58.5807 26.8151 58.5938 26.9193 58.5938 27.0234C58.5938 27.2969 58.4961 27.5312 58.3008 27.7266C58.1185 27.9089 57.8906 28 57.6172 28C57.3438 28 57.1159 27.9023 56.9336 27.707C56.7383 27.5247 56.6406 27.3034 56.6406 27.043L54.668 23.1172H35.3125L33.0859 27.5508L33.0664 27.5312Z" fill="currentColor"/>

        <!-- R -->
        <path d="M89.5703 26.3203C89.7526 26.5156 89.8438 26.75 89.8438 27.0234C89.8438 27.2969 89.7461 27.5312 89.5508 27.7266C89.3685 27.9089 89.1406 28 88.8672 28C88.5938 28 88.3659 27.9023 88.1836 27.707C88.1315 27.668 88.0924 27.6289 88.0664 27.5898L75.7812 15.3047H64.4531V27.0234C64.4531 27.2969 64.3555 27.5312 64.1602 27.7266C63.9779 27.9089 63.75 28 63.4766 28C63.2031 28 62.9688 27.9089 62.7734 27.7266C62.5911 27.5312 62.5 27.2969 62.5 27.0234V1.63281C62.5 1.35938 62.5911 1.13151 62.7734 0.949219C62.9688 0.753906 63.2031 0.65625 63.4766 0.65625H82.5195C84.5378 0.65625 86.263 1.3724 87.6953 2.80469C89.1276 4.23698 89.8438 5.96224 89.8438 7.98047C89.8438 9.9987 89.1276 11.724 87.6953 13.1562C86.263 14.5885 84.5378 15.3047 82.5195 15.3047H78.5547L89.5703 26.3203ZM82.5195 13.3516C84.0039 13.3516 85.2669 12.8307 86.3086 11.7891C87.3633 10.7344 87.8906 9.46484 87.8906 7.98047C87.8906 6.49609 87.3633 5.23307 86.3086 4.19141C85.2669 3.13672 84.0039 2.60938 82.5195 2.60938H64.4531V13.3516H82.5195Z" fill="currentColor"/>

        <!-- I -->
        <path d="M93.75 1.63281C93.75 1.35938 93.8411 1.13151 94.0234 0.949219C94.2188 0.753906 94.4531 0.65625 94.7266 0.65625C95 0.65625 95.2279 0.753906 95.4102 0.949219C95.6055 1.13151 95.7031 1.35938 95.7031 1.63281V27.0234C95.7031 27.2969 95.6055 27.5312 95.4102 27.7266C95.2279 27.9089 95 28 94.7266 28C94.4531 28 94.2188 27.9089 94.0234 27.7266C93.8411 27.5312 93.75 27.2969 93.75 27.0234V1.63281Z" fill="currentColor"/>

        <!-- A -->
        <path d="M113.359 3.82031L104.648 21.1641H122.051L113.359 3.82031ZM101.426 27.5312C101.387 27.5964 101.341 27.6549 101.289 27.707C101.094 27.9023 100.859 28 100.586 28C100.312 28 100.078 27.9089 99.8828 27.7266C99.7005 27.5312 99.6094 27.2969 99.6094 27.0234C99.6094 26.763 99.694 26.5417 99.8633 26.3594L112.305 1.55469C112.331 1.30729 112.428 1.09896 112.598 0.929688C112.78 0.747396 113.008 0.65625 113.281 0.65625C113.555 0.65625 113.789 0.747396 113.984 0.929688C114.076 1.03385 114.147 1.14453 114.199 1.26172L114.238 1.24219L126.992 26.6719L126.914 26.7109C126.94 26.8151 126.953 26.9193 126.953 27.0234C126.953 27.2969 126.855 27.5312 126.66 27.7266C126.478 27.9089 126.25 28 125.977 28C125.703 28 125.475 27.9023 125.293 27.707C125.098 27.5247 125 27.3034 125 27.043L123.027 23.1172H103.672L101.445 27.5508L101.426 27.5312Z" fill="currentColor"/>

        <!-- L -->
        <path d="M140.781 1.63281C140.781 1.35938 140.872 1.13151 141.055 0.949219C141.25 0.753906 141.484 0.65625 141.758 0.65625C142.031 0.65625 142.259 0.753906 142.441 0.949219C142.637 1.13151 142.734 1.35938 142.734 1.63281V26.0469H167.148C167.422 26.0469 167.65 26.1445 167.832 26.3398C168.027 26.5221 168.125 26.75 168.125 27.0234C168.125 27.2969 168.027 27.5312 167.832 27.7266C167.65 27.9089 167.422 28 167.148 28H141.758C141.484 28 141.25 27.9089 141.055 27.7266C140.872 27.5312 140.781 27.2969 140.781 27.0234V1.63281Z" fill="currentColor"/>

        <!-- E -->
        <path d="M173.008 0.65625H198.398C198.672 0.65625 198.9 0.753906 199.082 0.949219C199.277 1.13151 199.375 1.35938 199.375 1.63281C199.375 1.90625 199.277 2.14062 199.082 2.33594C198.9 2.51823 198.672 2.60938 198.398 2.60938H173.984V13.3516H198.398C198.672 13.3516 198.9 13.4492 199.082 13.6445C199.277 13.8268 199.375 14.0547 199.375 14.3281C199.375 14.6016 199.277 14.8359 199.082 15.0312C198.9 15.2135 198.672 15.3047 198.398 15.3047H173.984V26.0469H198.398C198.672 26.0469 198.9 26.1445 199.082 26.3398C199.277 26.5221 199.375 26.75 199.375 27.0234C199.375 27.2969 199.277 27.5312 199.082 27.7266C198.9 27.9089 198.672 28 198.398 28H173.008C172.734 28 172.5 27.9089 172.305 27.7266C172.122 27.5312 172.031 27.2969 172.031 27.0234V1.63281C172.031 1.35938 172.122 1.13151 172.305 0.949219C172.5 0.753906 172.734 0.65625 173.008 0.65625Z" fill="currentColor"/>

        <!-- B -->
        <path d="M226.992 14.3281C227.513 14.6406 228.008 15.0312 228.477 15.5C229.909 16.9323 230.625 18.6576 230.625 20.6758C230.625 22.694 229.909 24.4193 228.477 25.8516C227.044 27.2839 225.319 28 223.301 28H204.258C203.984 28 203.75 27.9089 203.555 27.7266C203.372 27.5312 203.281 27.2969 203.281 27.0234V1.63281C203.281 1.35938 203.372 1.13151 203.555 0.949219C203.75 0.753906 203.984 0.65625 204.258 0.65625H223.301C225.319 0.65625 227.044 1.3724 228.477 2.80469C229.909 4.23698 230.625 5.96224 230.625 7.98047C230.625 9.9987 229.909 11.724 228.477 13.1562C228.008 13.625 227.513 14.0156 226.992 14.3281ZM223.301 13.3516C224.785 13.3516 226.048 12.8307 227.09 11.7891C228.145 10.7344 228.672 9.46484 228.672 7.98047C228.672 6.49609 228.145 5.23307 227.09 4.19141C226.048 3.13672 224.785 2.60938 223.301 2.60938H205.234V13.3516H223.301ZM205.234 26.0469H223.301C224.785 26.0469 226.048 25.526 227.09 24.4844C228.145 23.4297 228.672 22.1602 228.672 20.6758C228.672 19.1914 228.145 17.9284 227.09 16.8867C226.048 15.832 224.785 15.3047 223.301 15.3047H205.234V26.0469Z" fill="currentColor"/>

        <!-- R -->
        <path d="M261.602 26.3203C261.784 26.5156 261.875 26.75 261.875 27.0234C261.875 27.2969 261.777 27.5312 261.582 27.7266C261.4 27.9089 261.172 28 260.898 28C260.625 28 260.397 27.9023 260.215 27.707C260.163 27.668 260.124 27.6289 260.098 27.5898L247.812 15.3047H236.484V27.0234C236.484 27.2969 236.387 27.5312 236.191 27.7266C236.009 27.9089 235.781 28 235.508 28C235.234 28 235 27.9089 234.805 27.7266C234.622 27.5312 234.531 27.2969 234.531 27.0234V1.63281C234.531 1.35938 234.622 1.13151 234.805 0.949219C235 0.753906 235.234 0.65625 235.508 0.65625H254.551C256.569 0.65625 258.294 1.3724 259.727 2.80469C261.159 4.23698 261.875 5.96224 261.875 7.98047C261.875 9.9987 261.159 11.724 259.727 13.1562C258.294 14.5885 256.569 15.3047 254.551 15.3047H250.586L261.602 26.3203ZM254.551 13.3516C256.035 13.3516 257.298 12.8307 258.34 11.7891C259.395 10.7344 259.922 9.46484 259.922 7.98047C259.922 6.49609 259.395 5.23307 258.34 4.19141C257.298 3.13672 256.035 2.60938 254.551 2.60938H236.484V13.3516H254.551Z" fill="currentColor"/>

        <!-- E -->
        <path d="M266.758 0.65625H292.148C292.422 0.65625 292.65 0.753906 292.832 0.949219C293.027 1.13151 293.125 1.35938 293.125 1.63281C293.125 1.90625 293.027 2.14062 292.832 2.33594C292.65 2.51823 292.422 2.60938 292.148 2.60938H267.734V13.3516H292.148C292.422 13.3516 292.65 13.4492 292.832 13.6445C293.027 13.8268 293.125 14.0547 293.125 14.3281C293.125 14.6016 293.027 14.8359 292.832 15.0312C292.65 15.2135 292.422 15.3047 292.148 15.3047H267.734V26.0469H292.148C292.422 26.0469 292.65 26.1445 292.832 26.3398C293.027 26.5221 293.125 26.75 293.125 27.0234C293.125 27.2969 293.027 27.5312 292.832 27.7266C292.65 27.9089 292.422 28 292.148 28H266.758C266.484 28 266.25 27.9089 266.055 27.7266C265.872 27.5312 265.781 27.2969 265.781 27.0234V1.63281C265.781 1.35938 265.872 1.13151 266.055 0.949219C266.25 0.753906 266.484 0.65625 266.758 0.65625Z" fill="currentColor"/>

        <!-- D -->
        <path d="M310.703 26.0469C313.945 26.0469 316.706 24.9076 318.984 22.6289C321.276 20.3372 322.422 17.5703 322.422 14.3281C322.422 11.0859 321.276 8.32552 318.984 6.04688C316.706 3.75521 313.945 2.60938 310.703 2.60938H298.984V26.0469H310.703ZM298.008 28C297.734 28 297.5 27.9089 297.305 27.7266C297.122 27.5312 297.031 27.2969 297.031 27.0234V1.63281C297.031 1.35938 297.122 1.13151 297.305 0.949219C297.5 0.753906 297.734 0.65625 298.008 0.65625H310.703C314.479 0.65625 317.702 1.99089 320.371 4.66016C323.04 7.32943 324.375 10.5521 324.375 14.3281C324.375 18.1042 323.04 21.3268 320.371 23.9961C317.702 26.6654 314.479 28 310.703 28H298.008Z" fill="currentColor"/>

        <!-- O -->
        <path d="M341.953 0.65625C345.729 0.65625 348.952 1.99089 351.621 4.66016C354.29 7.32943 355.625 10.5521 355.625 14.3281C355.625 18.1042 354.29 21.3268 351.621 23.9961C348.952 26.6654 345.729 28 341.953 28C338.177 28 334.954 26.6654 332.285 23.9961C329.616 21.3268 328.281 18.1042 328.281 14.3281C328.281 10.5521 329.616 7.32943 332.285 4.66016C334.954 1.99089 338.177 0.65625 341.953 0.65625ZM341.953 2.60938C338.711 2.60938 335.944 3.75521 333.652 6.04688C331.374 8.32552 330.234 11.0859 330.234 14.3281C330.234 17.5703 331.374 20.3372 333.652 22.6289C335.944 24.9076 338.711 26.0469 341.953 26.0469C345.195 26.0469 347.956 24.9076 350.234 22.6289C352.526 20.3372 353.672 17.5703 353.672 14.3281C353.672 11.0859 352.526 8.32552 350.234 6.04688C347.956 3.75521 345.195 2.60938 341.953 2.60938Z" fill="currentColor"/>
        </svg>
      </a>
      <div class="hamburger" onclick="altClassFromSelector('alt','#mobileNavBar')">
        <div class="menuStripe"></div>
        <div class="menuStripe"></div>
        <div class="menuStripe"></div>
      </div>
    </div>

    <nav class="mobileNavBar" id="mobileNavBar">
      <?php
      $args = array(
        'theme_location' => 'header',
        'depth' => 0,
        'container'	=> false,
        'fallback_cb' => false,
        'menu_class' => 'navBarMobile',
      );
      wp_nav_menu($args);
      ?>

      <form class="suscribe" action="">
        <p class="suscribeTitle">Suscríbete a nuestro newsletter</p>
        <input class="suscribeInput" type="email" placeholder="E-MAIL">
        <button class="btn suscribeButton">SUSCRIBE</button>
      </form>

      <?php include 'socialMedia.php'; ?>

    </nav>
  </header>
