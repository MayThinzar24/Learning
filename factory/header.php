<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package factory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="<?php echo get_the_permalink(); ?>" />
  <?php /* OGP settings ---------------------------------- */ ?>
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo get_the_permalink(); ?>">
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="<?php print get_template_directory_uri(); ?>/assets/img/shared/ogp.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <!-- favicon, touch-icon -->
  <link rel="shortcut icon" href="<?php print get_template_directory_uri(); ?>/favicon.png">
  <link rel="apple-touch-icon" href="<?php print get_template_directory_uri(); ?>/assets/img/shared/apple-touch-icon.png">
  <!-- css -->
  <link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/assets/css/share.css">

  <?php wp_head(); ?>
  <script src="<?php print get_template_directory_uri(); ?>/assets/lib/main.js" defer="defer"></script>
  <script src="<?php print get_template_directory_uri(); ?>/assets/lib/locales/en-au.js" defer="defer"></script>
  <link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/assets/lib/main.css">
  <script src='https://unpkg.com/popper.js/dist/umd/popper.min.js'></script>
  <script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>
  
</head>
<script>
    //Full Calendar
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'en-au',
        plugins: ['dayGrid', 'googleCalendar'],
        googleCalendarApiKey: 'AIzaSyBgw69f5-LlsBgfzoB2vd0n5-jjzMarAnA',
        events: 'mailto:ac576ac492329c9e632d84d4aa35afe016d53de995f7d4b46be6fbb3098f9b84@group.calendar.google.com'
      });
      calendar.render();
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        dayCellContent: function(e) {
          e.dayNumberText = e.dayNumberText.replace('日', '');
        },
        headerToolbar: {
          left: 'prev',
          center: 'title',
          right: 'next'
        },
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        locale: 'en-au',
        googleCalendarApiKey: 'AIzaSyBYTkqARVFGJXvDfDvnqbi6dFlp-xvdU7Q', // api-key
        eventSources: [{
            googleCalendarId: 'ac576ac492329c9e632d84d4aa35afe016d53de995f7d4b46be6fbb3098f9b84@group.calendar.google.com'
          },
          {
            googleCalendarId: 'en.mm#holiday@group.v.calendar.google.com',
            className: 'holiday-event'
          }
        ] //calendar-id
      });
      calendar.render();
    });
  </script>

<body>
  <!-- ===============  header ============== -->
  <header class="header">
    <div class="h-inner">
      <div class="logo">
        <a href="<?php echo get_bloginfo('url'); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/shared/img_logo.png" alt="Product Factory" width="122" height="52" loading="lazy">
        </a>
      </div>
      <div class="menu-toggle s-sp js-toggle">
        <span></span>
      </div>
      <nav class="nav">
        <ul class="menu-list clearfix">
          <li class="menu">
            <a href="<?php echo get_bloginfo('url'); ?>" class="menu-link">HOME</a>
          </li class="menu">
          <li class="menu dropdown">
            <a class="menu-link">SERVICE</a>
            <ul class="sub-menu-list">
              <li>
                <a href="#" class="sub-menu">WEB/SNS Monitoring</a>
              </li>
              <li>
                <a href="#" class="sub-menu">Engagement</a>
              </li>
              <li>
                <a href="#" class="sub-menu">Investigation</a>
              </li>
              <li>
                <a href="#" class="sub-menu">Column</a>
              </li>
              <li>
                <a href="#" class="sub-menu">Operation</a>
              </li>
            </ul>
          </li>
          <li class="menu">
            <a href="<?php echo site_url(); ?>" class="menu-link">CASE STUDY</a>
          </li>
          <li class="menu">
            <a href="<?php echo site_url(); ?>/column" class="menu-link">COLUMN</a>
          </li>
          <li class="menu">
            <a href="<?php echo site_url(); ?>" class="menu-link">OPERATION COMPANY</a>
          </li>
        </ul>
        <div class="btn-list">
          <a href="<?php echo site_url(); ?>/contact/" class="cmn-btn btn-blue">
            <span>Inquiry</span>
          </a>
          <a href="tel:09123456789" class="cmn-btn btn-red">
            <span>09-123 456 789</span>
          </a>
        </div>
      </nav>
    </div>
  </header>
  <!-- ./header -->