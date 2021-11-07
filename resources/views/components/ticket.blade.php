<style>
    * {
    font-size: 12px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.producto,
th.producto {
    width: 75px;
    max-width: 75px;
}

td.cantidad,
th.cantidad {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.precio,
th.precio {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

.centrado {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 155px;
    max-width: 155px;
}

img {
    max-width: inherit;
    width: inherit;
}
</style>
<div class="ticket">
    <img
        src="{{asset('img/logo.png')}}"
        alt="Logotipo">
    <p class="centrado">
        {{ date('d/m/Y')}} <br>
        {{ date('H:i:s')}} Hrs
    </p>
    <table>
        <thead>
            <tr>
                <th class="cantidad">CANT</th>
                <th class="producto">PRODUCTO</th>
                <th class="precio">$$</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i<10; $i++)
            <tr>
                <td class="cantidad">1.00</td>
                <td class="producto">CHEETOS VERDES 80 G</td>
                <td class="precio">$8.50</td>
            </tr>
            @endfor
            <tr>
                <td class="cantidad"></td>
                <td class="producto">TOTAL</td>
                <td class="precio">$28.50</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <p class="centrado">¡GRACIAS POR SU COMPRA!
        <br>parzibyte.me</p>
</div>
