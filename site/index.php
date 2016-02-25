<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title></title>

  <link rel="icon" type="image/x-icon" href="/favicon.png" />

  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css" />

  <link rel="stylesheet/less" href="/assets/styles/all.less">

  <script data-env="development" src="/assets/vendor/less.min.js"></script>
  <script type="text/javascript">less.watch()</script>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-book"></span> Database Playground</a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/signup.php">Sign up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row top30">
      host: <?php var_dump($_SERVER); ?>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>