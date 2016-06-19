<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
  </head>

  <body>
    <?php
      $time = array();
      $strString = 'l F  j\, Y'; // formats time output
      $date = '968536800';

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



      //*/
     ?>
  </body>

</html>
