<h4 class="title mb-3">Inventario</h4>

<div class="d-flex justify-content-between mb-3">
    <div>
        <a href="index.php?m=dashboard" class="btn btn-primary">Nuevo</a>
        <a href="index.php?m=reporte" class="btn btn-success">Reporte</a>
    </div>

    <a href="index.php?m=logout" class="btn btn-danger">Salir</a>
</div>

<div class="card shadow-soft p-3">

<table class="table table-hover align-middle">
<thead>
<tr>
<th>Producto</th>
<th>Cliente</th>
<th>Empresa</th>
<th>Cantidad</th>
<th>Total</th>
</tr>
</thead>

<tbody>
<?php while($r=mysqli_fetch_assoc($datos)){ ?>
<tr>
<td><?= $r['producto'] ?></td>
<td><?= $r['cliente'] ?></td>
<td><?= $r['empresa'] ?></td>
<td><?= $r['cantidad'] ?></td>
<td class="total">$<?= $r['total'] ?></td>
</tr>
<?php } ?>
</tbody>

</table>

</div>