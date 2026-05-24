
<div class="container mt-4">

<div class="d-flex justify-content-between mb-4">
    <h3 class="title">Registrar Producto</h3>

    <div>
        <a href="index.php?m=listar" class="btn btn-primary">Lista</a>
        <a href="index.php?m=logout" class="btn btn-danger">Cerrar sesión</a>
        <a href="index.php?m=logout" class="btn btn-danger">nuevo cliente</a>
    </div>
</div>

<div class="row">

<!-- FORMULARIO -->
    <div class="col-md-8">

    <div class="card p-4 shadow-soft">

    <form method="POST" action="index.php?m=guardar">

    <div class="row">

    <div class="col-md-6 mb-3">
    <label>Producto</label>
    <input name="producto" class="form-control" required>
    </div>

    <div class="col-md-6 mb-3">
    <label>Cliente</label>
    <input name="cliente" class="form-control" required>
    </div>

    <div class="col-md-6 mb-3">
    <label>Empresa</label>
    <input name="empresa" class="form-control" required>
    </div>

    <div class="col-md-3 mb-3">
    <label>Cantidad</label>
    <input type="number" id="cantidad" name="cantidad" class="form-control" required>
    </div>

<div class="col-md-3 mb-3">
<label>Precio</label>
<input type="number" step="0.01" id="precio" name="precio" class="form-control">
</div>
<input type="datetime-local" name="fecha" class="form-control">

</div>

<button class="btn btn-success w-100 mt-3">Guardar</button>

</form>

</div>

</div>

<!-- RESUMEN -->
<div class="col-md-4">

<div class="card p-4 shadow-soft bg-dark text-white">

<h5>Resumen</h5>

<div class="d-flex justify-content-between">
<span>Cantidad:</span>
<span id="rCantidad">0</span>
</div>

<div class="d-flex justify-content-between">
<span>Precio:</span>
<span id="rPrecio">$0.00</span>
</div>

<hr>

<div class="d-flex justify-content-between">
<strong>Total:</strong>
<strong id="rTotal" class="text-success">$0.00</strong>
</div>

</div>

</div>

</div>

</div>


<script>
    const c = document.getElementById('cantidad');
    const p = document.getElementById('precio');

    const rc = document.getElementById('rCantidad');
    const rp = document.getElementById('rPrecio');
    const rt = document.getElementById('rTotal');

    function calc(){
        let cantidad = parseFloat(c.value) || 0;
        let precio = parseFloat(p.value) || 0;
        let total = cantidad * precio;

        rc.textContent = cantidad;
        rp.textContent = "$" + precio.toFixed(2);
        rt.textContent = "$" + total.toFixed(2);
    }

    c.addEventListener('input', calc);
    p.addEventListener('input', calc);
</script>