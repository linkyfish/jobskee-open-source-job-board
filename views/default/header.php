<?php global $categories, $cities; ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php _e($seo_title); ?></title>
    <meta name="author" content="<?php _e(APP_AUTHOR); ?>">
    <meta name="description" content="<?php _e($seo_desc); ?>">
    <!-- Bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/theme.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php _e(THEME_ASSETS);; ?>ico/favicon.png">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php _e($seo_title); ?>" />
    <meta property="og:url" content="<?php _e($seo_url); ?>" />
    <?php if (isset($job) && $job->logo != ''): ?>
    <meta property="og:image" content="<?php _e(ASSET_URL . "images/thumb_{$job->logo}"); ?>" />
    <?php endif; ?>
    <meta property="og:description" content="<?php _e($seo_desc); ?>" />
    <meta property="og:site_name" content="<?php _e($seo_title); ?>" />

    <link rel="canonical" href="<?php _e($seo_url); ?>" />
    <link rel="shortlink" href="<?php _e($seo_url); ?>" />

    <?php if(isset($job) && $job):?>
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "<?php _e(SHARETHIS_PUBID); ?>", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <?php endif; ?>
    
    <?php if (isset($markdown)): ?>
        <link href="<?php _e(ASSET_URL); ?>bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet">
    <?php endif; ?>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php _e(BASE_URL); ?>">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php foreach($categories as $cat): ?>  
                <li><a href="<?php _e(BASE_URL . "categories/{$cat->id}/{$cat->url}"); ?>"><?php _e($cat->name); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cities <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php foreach($cities as $cit): ?>  
                <li><a href="<?php _e(BASE_URL . "cities/{$cit->id}/{$cit->url}"); ?>"><?php _e($cit->name); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
            <li><a href="<?php _e(BASE_URL .'about'); ?>">About</a></li>
            <li><a href="<?php _e(BASE_URL .'contact'); ?>">Contact</a></li>
            <?php if (userIsValid()): ?>
                <li><a href="<?php _e(BASE_URL .'admin/manage'); ?>">Admin</a></li>
            <?php else: ?>
                <li><a href="<?php _e(BASE_URL .'admin/login'); ?>">Login</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase">
     