
<?php
if (isset($_POST['submit'])) {


	//variables entrantes desde el formulario
	$tasaInteres = $_POST['T_interes'];
	$numeroCuota = $_POST['N_cuota'];
	$credito = $_POST['credito'];

	//Arreglo para manejar los meses de las cuotas
	$fecha = array('Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Octubre','Noviembre','Diciembre');
	//Calcular el total del interes con la formula de interes simple
	$interes = round($tasaInteres * $credito * $numeroCuota) / 1200;
	//Calcular el valor de la cuota el interes y el total a pagar de cada mes y al final
	$valorCuota = round($credito / $numeroCuota);
	$valorInteres = round($interes / $numeroCuota);
	$total = round($valorCuota + $valorInteres);
	$totalPagar=round($credito+$interes);

	echo "
        <table>
			<thead>
				<tr>
                    <th>Mes</th>
                    <th>Valor cuota</th>
                    <th>Valor interés</th>
                    <th>Total a  pagar</th>
				</tr>
            </thead>";

	foreach ($fecha as $numeroCuota => $value) {
		echo
			"
			<tr>
                <td>" . $fecha[$numeroCuota] . "</td>
				<td>$" . $valorCuota . "</td>
				<td>$" . $valorInteres . "</td>
				<td>$" . $total . "</td>
				
			</tr>
            ";
	}
	echo "
	<tr>
                <td><b>Total</td>
				<td>$" . $credito . "</td>
				<td>$" . $interes . "</td>
				<td>$" . $totalPagar . "</td>
				
			</tr>
        </table>
    </div>";
}


?>
    