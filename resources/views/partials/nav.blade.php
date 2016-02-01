
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <!-- note the ng-init and ng-click here: -->
        <button type="button" class="navbar-toggle" ng-init="navCollapsed = true" ng-click="navCollapsed = !navCollapsed">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        {!! Html::link('/', 'inicio', 'class="navbar-brand"') !!}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" uib-collapse="navCollapsed">
        <ul class="nav navbar-nav">
            <li class="{{ Request::is( '/') ? "active" : '' }}">{!! Html::link('/', 'inicio') !!}</li>
            <li class="{{ Request::is( 'reportes') ? "active" : '' }}">{!! Html::link('/reportes', 'Reportes') !!}</li>
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->