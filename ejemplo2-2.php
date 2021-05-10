<!DOCTYPE html>
<!-- Ejemplo 2.2: Un formulario completo -->
<!-- Procesamiento de la información enviada -->
<html>
   <head>
      <meta charset = "utf-8">
      <title>Form Validation</title>
      <style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
      </style>
   </head>
   <body>
      <?php
      	// Transforma el contenido de $_POST en variables      	   
         extract($_POST);
         // nombre variable = nombre índice ($_POST['nombre'] equivale $nombre)
      ?> <!-- Fin del script PHP -->
      <p>Hola <?php echo "$nombre"; ?>.Gracias por completar la encuesta. 
      	Ha sido agregado a la lista de distribución
      	de correo del libro <?php echo "$libro"; ?> </p>
      <p class = "head">Se ha guardado la siguiente información
          en nuestra base de datos:</p>
      <p>Nombre: <?php echo "$nombre $apellido"; ?></p>
      <p>Email:  <?php echo "$mail"; ?></p>
      <p>Teléfono: <?php echo "$telefono"; ?></p>
      <p>Sistema Operativo: <?php echo "$os"; ?></p>
      <p class = "head">Este es solo un formulario de muestra.
          No ha sido agregado a una lista de correo.</p>   
   </body>
</html>

<!--
**************************************************************************
* (C) Copyright 1992-2012 by Deitel & Associates, Inc. and               *
* Pearson Education, Inc. All Rights Reserved.                           *
*                                                                        *
* DISCLAIMER: The authors and publisher of this book have used their     *
* best efforts in preparing the book. These efforts include the          *
* development, research, and testing of the theories and programs        *
* to determine their effectiveness. The authors and publisher make       *
* no warranty of any kind, expressed or implied, with regard to these    *
* programs or to the documentation contained in these books. The authors *
* and publisher shall not be liable in any event for incidental or       *
* consequential damages in connection with, or arising out of, the       *
* furnishing, performance, or use of these programs.                     *
**************************************************************************
-->
