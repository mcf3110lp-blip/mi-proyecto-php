<h4 class="title mb-3">Reporte de Inventario</h4>

<div class="d-flex justify-content-between mb-3">
    <div>
        <a href="index.php?m=listar" class="btn btn-primary">Volver</a>
        <a href="index.php?m=dashboard" class="btn btn-success">Nuevo</a>
    </div>

    <a href="index.php?m=logout" class="btn btn-danger">Salir</a>
</div>

<div class="card shadow-soft p-3">

<table class="table table-bordered align-middle">
<thead>
<tr>
<th>Producto</th>
<th>Cliente</th>
<th>Empresa</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Total</th>
<th>Fecha</th>
</tr>
</thead>

<tbody>
<?php 
$total_general = 0;
while($r=mysqli_fetch_assoc($datos)){ 
$total_general += $r['total'];
?>
<tr>
<td><?= $r['producto'] ?></td>
<td><?= $r['cliente'] ?></td>
<td><?= $r['empresa'] ?></td>
<td><?= $r['cantidad'] ?></td>
<td>$<?= $r['precio'] ?></td>
<td class="total">$<?= $r['total'] ?></td>
<td><?= $r['fecha'] ?></td>
</tr>
<?php } ?>
</tbody>

<tfoot>
<tr style="background:#065f46;">
<td colspan="5"><strong>Total General</strong></td>
<td colspan="2"><strong>$<?= $total_general ?></strong></td>
</tr>
</tfoot>

</table>

</div>