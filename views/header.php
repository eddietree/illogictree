<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->htmlEncode($this->app->getConfig('siteName')) . ' - ' . $this->pageTitle ?></title>

    <link href="http://fonts.googleapis.com/css?family=Droid+Sans+Mono|Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap -->
	 <link rel="stylesheet" href="<?= $this->app->getRootPath() ?>extlib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $this->app->getRootPath() ?>extlib/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= $this->app->getRootPath() ?>css/layout.css">

  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>