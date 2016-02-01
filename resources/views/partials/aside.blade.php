<h3>Sub-Menu</h3>
<ul class="nav nav-pills nav-stacked">
    <li class="{{ Request::is( 'reportes') ? "active" : '' }}">{!! Html::link('/reportes', 'Primera') !!}</li>
    <li class="{{ Request::is( 'reportes/tipo-sujeto-agredido') ? "active" : '' }}">{!! Html::link('/reportes/tipo-sujeto-agredido', 'Segunda') !!}</li>

</ul>
