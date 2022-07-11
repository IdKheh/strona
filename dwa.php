<html>
 <head>
  <title>Kontakt</title>
 </head>

 <body>
  Imię i nazwisko: <?php echo $_GET['imie']?><?php echo $_GET['nazwisko']?><br>
  e-mail: <?php echo ($_GET['e-mail']?><br>
  temat: <?php echo ($_GET['temat']?><br>
  Wiadomość: <?php echo($_GET['wiadomosc']?><br>

  Wysłanie <?php switch($_GET['Wyślij'])?>
 </body>
</html>