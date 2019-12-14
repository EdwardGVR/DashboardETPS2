<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\LineChart;
?>

<div class="text-center">
    <h1>Sales Report</h1>
    <h4>Ths report shows top 10 sales by customer</h4>
</div>
<hr/>

<?php
    \koolreport\widgets\google\LineChart::create(array(
        "dataStore"=>$this->dataStore('insumos'),
        "min-width"=>"100%",
        "height"=>"1000px",
        "columns"=>array(
            "nombre_insumo"=>array(
                "label"=>"Insumo"
            ),
            "costo_unidad"=>array(
                "type"=>"number",
                "label"=>"Costo unidad",
                "prefix"=>"$",
            )
        ),
        "options"=>array(
            "title"=>"Costos por unidad"
        )
    ));
?>

<?php
Table::create(array(
    "dataStore"=>$this->dataStore('insumos'),
        "columns"=>array(
            "nombre_insumo"=>array(
                "label"=>"Insumo"
            ),
            "costo_unidad"=>array(
                "type"=>"double",
                "label"=>"Costo unidad",
                "prefix"=>"$",
            )
        ),
    "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
    )
));
?>