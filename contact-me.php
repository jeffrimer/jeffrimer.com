<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">
  <script src="includes/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <?php include('includes/php/header.php'); ?>
  <div id="main">
   <div id="content">
      <h1>Drop me a line.</h1>
      <p class="top">If interested in contacting me, please fill out the small form below. I will return your message as soon as time permits. Thank you!</p>
      <form action="contact.php" method="post" id="contact">
        <div class="hideOnSubmit">
          <label for="cf_name" class="contactLabel">Your name</label>
          <input type="text" class="contactInput" name="cf_name" />
        </div>
        <div class="hideOnSubmit">
          <label for="cf_email" class="contactLabel">Your e-mail</label>
          <input type="text" class="contactInput" name="cf_email" />
        </div>
        <div class="hideOnSubmit">
          <label for="cf_message" class="contactLabel">Message</label>
          <textarea name="cf_message"></textarea>
        </div>
        <div class="hideOnSubmit">
          <input type="submit" id="contactSubmit" class="submit" value="Send">
          <input type="reset" value="Clear" class="submit">
        </div>
      </form>
    </div>
  </div>

  <?php include('includes/php/footer.php'); ?>

</body>
</html>