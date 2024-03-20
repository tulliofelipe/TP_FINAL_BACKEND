<html>
    <head>
        <title>exibir categorias </title>
    </head>
    <body>
       <?php
           $pdo = new PDO("sqlite:estoque.db");
           
           $categorias ="select * from categorias";

           $categorias = $pdo->query($categorias);

          echo "<table>";
          echo"<tr>";
          echo "<th>id</th>";
          echo "<th>nome</th>";
          echo"</tr>";

          echo "</table>";
           foreach($categorias as $categoria){
              echo "<tr><td>".$categoria["id"]."</td> </tr>";
              echo "<tr><td>".$categoria["nome"]."</td>
              </tr>";
           }
        ?>
    </body>
</html>