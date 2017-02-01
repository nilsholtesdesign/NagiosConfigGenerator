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
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">
</head>
<body>
	<div class="content">
		<div class="col-1 titel">
		      <h1>Nagios CFG Generator</h1>
		</div>
		
		<form action="admin.php" method="post">
		  <div class="col-3">
		    <label>
		      Host Name
		      <input id="hostname" name="hostname" placeholder="vps-holtesdesign.nl" tabindex="1" required="required" />
		    </label>
		  </div>
		  <div class="col-3">
		    <label>
		      Alias
		      <input id="alias" name="alias" placeholder="Holtes Design Production" tabindex="2" required="required"/>
		    </label>
		  </div>
		  <div class="col-3">
		    <label>
		      IP address
		      <input id="ip" name="ip" placeholder="127.0.0.1" tabindex="3" required="required"/>
		    </label>
		  </div>
		  <div class="col-2">
		    <label>
		      Website URL
		      <input id="website" name="website" placeholder="https://www.holtesdesign.nl" tabindex="4" />
		    </label>
		  </div>
		  <div class="col-2">
		    <label>
		      Website reference
		      <input id="websiteword" name="websiteword" placeholder="Welcome" tabindex="5" />    </label>
		  </div>
            <div class="col-2">
                <label>
                    Webmail URL
                    <input id="webmail" name="webmail" placeholder="http://webmail.holtesdesign.nl" tabindex="6" />
                </label>
            </div>
            <div class="col-2">
                <label>
                    Webmail reference
                    <input id="webmailword" name="webmailword" placeholder="Roundcube" tabindex="7" />    </label>
            </div>
		  <div class="col-3">
		    <label>
		      IMAP Host
		      <input id="imap_host" name="imap_host" placeholder="imap.holtesdesign.nl" tabindex="8" />
		    </label>
		  </div>
		  <div class="col-3">
		    <label>
		      IMAP User
		      <input id="imap_user" name="imap_user" placeholder="spam@email.com" tabindex="9" />
		    </label>
		  </div>
		  <div class="col-3">
		    <label>
		      IMAP Password
		      <input id="imap_pass" name="imap_pass" placeholder="Ketamine" tabindex="10" />
		    </label>
		  </div>
		  <div class="col-1 button">
		        <input type="submit" value="Make it R@!N" onclick="play()">
		    </div>
		</form>
	</div>
	
	<!-- Audio onclick --> 
	<video id="my-video" class="video" muted loop autoplay="autoplay">
	  <source id="source_video" src="/assets/video/matrix.mp4" type="video/mp4">
	</video>
	<!-- /video -->
	
	<!-- Audio onclick --> 
	<script>
	  function play(){
	       var audio = document.getElementById("audio");
	       audio.play();
	    }                      
	   </script>
	   <audio id="audio" src="assets/audio/nein.mp3"></audio>
	<!-- /audio -->
</body>