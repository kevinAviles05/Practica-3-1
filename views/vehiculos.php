<?php
?>
<!DOCTYPE html>
      <head>
          <title><?php echo $data["titulo"]; ?></title>
</head>

<body>
    <h2><?php echo $data["titulo"]; ?></h2>
    <br/>
    <br/>
    <a href="nuevo_carro.php">AGREGAR</a>
    <br/>
    <br/>
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data["vehiculos"] as $dato) {
                echo "<tr>";
                echo "<td>".$dato["placa"]."</td>";
                echo "<td>".$dato["marca"]."</td>";
                echo "<td>".$dato["modelo"]."</td>";
                echo "<td>".$dato["año"]."</td>";
                echo "<td>".$dato["color"]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody
    </table>
</body>
</html>

