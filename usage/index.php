<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
    Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/jquery.picadiff.css"/>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="diff_match_patch.js"></script>

    <!-- Helper Classes -->
    <script type="text/javascript" src="../src/diff_match_patch_extended.js"></script>

    <!-- Widget -->
    <script src="../src/picadiff.js"></script>

    <!-- Script showing the usage of the widget -->
    <script>
      $(document).ready(function(){
          $('form').submit(function(event){
            event.preventDefault();
            $('#leftarea').val($('#final_span').text());
            $('.picadiff').picadiff({
              leftContent: $('.leftForm textarea').val(),
              rightContent: $('.rightForm textarea').val()
            });
          });
      });
    </script>
    <title>jQuery picadiff Plugin Demo</title>

  </head>

<body>



  <div class="container">
    <form id="form">

    
<div class="container">
  <div id="info">
      <p id="info_start">Click on the microphone icon and begin speaking.</p>
      <p id="info_speak_now">Speak now.</p>
      <p id="info_no_speech">No speech was detected. You may need to adjust your <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892"> microphone settings</a>.</p>
      <p id="info_no_microphone" style="display:none">No microphone was found. Ensure that a microphone is installed and that<a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">microphone settings</a> are configured correctly.</p>
      <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>
      <p id="info_denied">Permission to use microphone was denied.</p>
      <p id="info_blocked">Permission to use microphone is blocked. To change, go to chrome://settings/contentExceptions#media-stream</p>
      <p id="info_upgrade">Web Speech API is not supported by this browser. Upgrade to <a href="//www.google.com/chrome">Chrome</a> version 25 or later.</p>
  </div>

  <div class="rightpos">
      <button id="start_button" onclick="startButton(event)">
          <img id="start_img" src="icons/mic.gif" alt="Start">
      </button>
  </div>

  <div id="results">
      <span id="final_span" class="final">As technology advances people have a greater ability to learn. This learning can happen at a much faster pace thanks to the internet. Contrast today's speed of information delivery with that of the </span>
      <span id="interim_span" class="interim"></span>
      <p>
  </div>

  <div class="center"> 
    <p>
    <div id="div_language">
      <select id="select_language" onchange="updateCountry()"></select>
      &nbsp;&nbsp;
      <select id="select_dialect"></select>
    </div>
  </div>
</div>

      <div class="leftForm form">
        <h2>Left text</h2>
        <textarea name="" id="leftarea" cols="40" rows="20">
As technology advances people have a greater ability to learn. This learning can happen at a much faster pace thanks to the internet. Contrast today's speed of information delivery with that of the 1950s. In the 50s, the primary means of mass communication was radio, television, newspapers, magazines and books.
Consider how much time it took to deliver an important message, The fastest method of delivery was radio and TV. However, not everyone was glued to the TV a</textarea>
      </div>

      <div class="rightForm form">
        <h2>Right text</h2>
        <textarea name="" id="" cols="40" rows="20">As technology advances people have a greater ability to learn. This learning can happen at a much faster pace thanks to the internet. Contrast today's speed of information delivery with that of the 1950s. In the 50s, the primary means of mass communication was radio, television, newspapers, magazines and books.
Consider how much time it took to deliver an important message, The fastest method of delivery was radio and TV. However, not everyone was glued to the TV at all hours of the day. If an important message were to be played but few people were paying attention to the radio or TV, the message would take many hours to reach the general population. Contrast with today's technology and a different picture is painted. Anyone with a 3G cell phone can receive news on demand at any hour of the day. People can be alerted of news at any time. These people can quickly notify others.</textarea>
      </div>
      <input type="submit" value="submit">
    </form>
    
    <div class="picadiff">
      <div class="picadiff-content">
        <div class='left'>          
        </div>
        <div class='right'>
        </div>
      </div>
    </div>
  </div>


<?php
require_once('speechfunction.php');
?>
</body>
</html>
