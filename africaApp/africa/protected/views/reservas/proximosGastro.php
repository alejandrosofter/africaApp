<table id='tablaServicios' class="table table-condensed">
<tr><th>Cumpleañero</th><th>Debe</th><th>Comienza...</th></tr>
<?php 
$res=ReservasServicios::model()->proximosGastro();
if(count($res)>0)
foreach($res as $r){?>
<tr><td><a title='Cel: <?=$r->reserva->cliente->telefonoMovil?> Tel: <?=$r->reserva->cliente->telefonoFijo?>'><?=$r->reserva->nombreCumpleano==''?$r->reserva->cliente->nombres:$r->reserva->nombreCumpleano;?></a></td><td>$  <?= $r->reserva->importe-$r->reserva->pagado?></td><td><abbr class="timeago" title="<?=$r->reserva->comienza?>"></abbr></td></tr>
<?php }?>
</table>