<!DOCTYPE html>
<html>
  <head>
    <title>Unix Timestamp Microservice - PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
  </head>

  <body>
    <?php
      $time = array(); // holds the converted times
      $strString = 'l F  j\, Y'; // formats time output
      $site =  $_SERVER['SERVER_NAME'] .'/UnixTimestamp/timestamp.php' ; // URL for the microservice
      if(empty(basename($_SERVER['PATH_INFO']))){ // checks to see if a request was made


        $html = <<<HTML
<div class='container'>
  <div class='row'>
    <div class='h1'>Timestamp microservice <span class='h4'>Completed with PHP</span> </div>
    <blockquote>
      User Stories:
      <ol>
        <li> I can pass a string as a parameter, and it will check to see whether that string contains either a unix timestamp or a natural language date (example: January 1, 2016) </li>
        <li>If it does, it returns both the Unix timestamp and the natural language form of that date. </li>
        <li>If it does not contain a date or Unix timestamp, it returns null for those properties. </li>
      </ol>
    </blockquote>
  </div>
    <div class='h3'>Example Usage: </div>
    <div><code>$site/December 14,2015 </code></div>
    <div><code>$site/1450137600</code></div> <br/>
    <div class='h3'>Example Output: </div>
    <code>
     { <br/>
      "Unix Date": 1450137600, <br/>
      "Natural Date": "December 14, 2015" <br/>
    }
    </code>

</div>
HTML;
        echo $html;
      }else{
        $date = urldecode(basename($_SERVER['PATH_INFO']));
        if(!!strtotime($date) === true || is_numeric($date) === true ){
          if(strtotime($date)){
            $time = [
              'Unix Date' => strtotime($date) ,
              'Natural Date' => $date
            ];
            echo json_encode($time);
          }else{
            $time = [
              'Unix Date' => $date ,
              'Natural Date' => date($strString,$date)
            ];
            echo json_encode($time);
          }

        }else{
          echo 'Not a vaild date';
        }
      }
      //*/
     ?>

  </body>

</html>
