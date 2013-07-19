<?php

require 'spyc.php';

$terms = spyc_load_file('data.yml');

$random_term = $terms['terms'][rand(0, count($terms['terms']))];

?>
<!doctype HTML>
<html>
  <head>
    <title>Something as a Service</title>
    <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
    <style type="text/css">
      body {
        font-family: 'Fauna One', serif;
        font-size: 70px; text-align: center;
      }

      p { margin-top: 100px; }
      p.github { font-size: 12px; margin-top: 50px; }
      p u { text-decoration: none; border-bottom: 1px solid #000;  }
    </style>
  </head>
  <body>
    <p>
      <u><strong><?= ucfirst( $random_term ) ?></strong></u> as a service.
    </p>
    <p class="github">Fork me on <a href="https://github.com/stevedev/saas" target="_blank">Github</a> to add more terms.</p>
  </body>
</html>