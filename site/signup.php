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
          <li><a href="/">Home</a></li>
          <li class="active"><a href="/signup.php">Sign up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row top30">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="POST" action="/signup">
          <fieldset>
            <legend>Registration</legend>

            {% include '_alert.html.twig' %}

            <div class="form-group required">
              <label class="col-lg-4 control-label">Username</label>
              <div class="col-lg-8">
                <input required="true" type="text" class="form-control" name="username" placeholder="username" tabindex="3">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label">Phone number</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" placeholder="phone" name="phone" tabindex="2" maxlength="11" required="true">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label">Frist name</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" placeholder="first name" name="firstname" tabindex="5">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label">Last name</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" placeholder="last name" name="lastname" tabindex="4">
              </div>
            </div>

            <div class="form-group required">
              <label class="col-lg-4 control-label">Password</label>
              <div class="col-lg-8">
                <input type="password" class="form-control" placeholder="password" name="password" required="true">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label">Confirm password</label>
              <div class="col-lg-8">
                <input type="password" class="form-control" placeholder="repeat your password" required="true">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label">Photo</label>
              <div class="col-lg-8">
                <span class="btn btn-default btn-file">
                  <input type="file">
                </span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label">Role</label>
              <div class="col-lg-8">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="isadmin"> Admin
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group top30">
              <label class="col-lg-4">&nbsp;</label>
              <div class="col-lg-8">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>