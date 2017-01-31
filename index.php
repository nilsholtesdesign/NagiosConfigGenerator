<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: nilsringersma
 * Date: 31-01-17
 * Time: 14:53
 */


?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nagios CFG Generator</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
<div class="content">
  <form class="form-horizontal" action="admin.php" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend>Nagios CFG Generator</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="hostname">Host Name</label>
                <div class="col-md-4">
                    <input id="hostname" name="hostname" type="text" placeholder="&#61447;   Host Name - i.e. vps-holtesdesign.nl" class="form-control input-md" required="">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="alias">Alias</label>
                <div class="col-md-4">
                    <input id="alias" name="alias" type="text" placeholder="&#61447;   Alias - i.e. holtes design production" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ip">IP address</label>
                <div class="col-md-4">
                    <input id="ip" name="ip" type="text" placeholder="&#61447;   IP address - i.e. 127.0.0.1" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="website">Website url</label>
                <div class="col-md-4">
                    <input id="website" name="website" type="text" placeholder="&#61447;   Website url - i.e. https://holtesdesign.nl" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="websiteword">Website reference</label>
                <div class="col-md-4">
                    <input id="websiteword" name="websiteword" type="text" placeholder="&#61447;   Website reference - i.e. welkom" class="form-control input-md">
                    
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="imap_host">IMAP host</label>
                <div class="col-md-4">
                    <input id="imap_host" name="imap_host" type="text" placeholder="&#61447;   IMAP host - i.e. imap.holtesdesign.nl" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="imap_user">IMAP user</label>
                <div class="col-md-4">
                    <input id="imap_user" name="imap_user" type="text" placeholder="&#61447;   IMAP user - i.e. spam@email.com" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="imap_pass">IMAP pass</label>
                <div class="col-md-4">
                    <input id="imap_pass" name="imap_pass" type="text" placeholder="&#61447;   IMAP pass - i.e. magicword" class="form-control input-md">

                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <div class="col-md-8">
                    <input type="submit" value="Make it R@!N">

                </div>
            </div>

        </fieldset>
    </form>
</div><!-- /content -->

<video id="my-video" class="video" muted loop>
  <source src="/assets/video/matrix.mp4" type="video/mp4">
</video><!-- /video -->

<script>
(function() {
  /**
   * Video element
   * @type {HTMLElement}
   */
  var video = document.getElementById("my-video");

  /**
   * Check if video can play, and play it
   */
  video.addEventListener( "canplay", function() {
    video.play();
  });
})();
</script>

</body>
</html>