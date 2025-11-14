<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Portofolio M.Adzanudin</title>
    <meta name="description" content="Responsive Emeet HTML Template" />
    <meta name="keywords" content="Bootstrap3, Event,  Conference, Meetup, Template, Responsive, HTML5" />
    <meta name="author" content="themearth.com" />

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="http://yourdomain.com" />
    <meta name="twitter:title" content="Your home page title, max 140 char" />
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char " />
    <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-280-150.jpg" />
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="INNOV8 - Bihar Startup Connect 2024" />
    <meta property="og:url" content="https://innov8.gofloww.co" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="INNOV8 - Bihar Startup Connect 2024" />
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg" />
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    @include('layouts.inc.css')

  </head>

  <body class="home">
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="lgx-container">
      <!-- ***  ADD YOUR SITE CONTENT HERE *** -->

      <!--HEADER-->
      @include('layouts.inc.header')
      <!--HEADER END-->

      <!--BANNER-->
      @yield('content')

      <!--FOOTER-->
      @include('layouts.inc.footer')
      <!--FOOTER END-->
    </div>
    @include('layouts.inc.js')
  </body>
</html>
