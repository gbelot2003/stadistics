<!doctype html>
<html class="no-js" lang="es">
<head>
    <title>Titulo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/metro.css">
</head>

<body class="bg-steel" cz-shortcut-listen="true" data-ng-app="adminApp">

<div class="app-bar fixed-top darcula" data-role="appbar">
    <a class="app-bar-element branding">SATCOM</a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
        <li data-flexorderorigin="0" data-flexorder="1"><a href="#/">Dashboard</a></li>
        <li data-flexorderorigin="1" data-flexorder="2">
            <a href="" class="dropdown-toggle">Project</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="">New project</a></li>
                <li class="divider"></li>
                <li>
                    <a href="" class="dropdown-toggle">Reopen</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="">Project 1</a></li>
                        <li><a href="">Project 2</a></li>
                        <li><a href="">Project 3</a></li>
                        <li class="divider"></li>
                        <li><a href="">Clear list</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li data-flexorderorigin="2" data-flexorder="3"><a href="">Security</a></li>
        <li data-flexorderorigin="3" data-flexorder="4"><a href="">System</a></li>
        <li data-flexorderorigin="4" data-flexorder="5">
            <a href="" class="dropdown-toggle">Help</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="">ChatOn</a></li>
                <li><a href="">Community support</a></li>
                <li class="divider"></li>
                <li><a href="">About</a></li>
            </ul>
        </li>
    </ul>

    <div class="app-bar-element place-right">
        <span class="dropdown-toggle"><span class="mif-cog"></span> User Name</span>
        <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
            <h2 class="text-light">Quick settings</h2>
            <ul class="unstyled-list fg-dark">
                <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                <li><a href="" class="fg-white3 fg-hover-yellow">Exit</a></li>
            </ul>
        </div>
    </div>
    <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>

<div class="page-content">
    <div class="flex-grid no-responsive-future" style="height: 100%;">
        <div class="row" style="height: 100%">
            <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                <ul class="sidebar">
                    <li><a href="#">
                            <span class="mif-apps icon"></span>
                            <span class="title">all items</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-vpn-publ icon"></span>
                            <span class="title">websites</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li class="active"><a href="#">
                            <span class="mif-drive-eta icon"></span>
                            <span class="title">Virtual machines</span>
                            <span class="counter">2</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-cloud icon"></span>
                            <span class="title">Cloud services</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-database icon"></span>
                            <span class="title">SQL Databases</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-cogs icon"></span>
                            <span class="title">Automation</span>
                            <span class="counter">0</span>
                        </a></li>
                    <li><a href="#">
                            <span class="mif-apps icon"></span>
                            <span class="title">all items</span>
                            <span class="counter">0</span>
                        </a></li>
                </ul>
            </div>
            <div class="cell auto-size padding20 bg-white" id="cell-content">
                <ng-view></ng-view>
            </div>
        </div>
    </div>
</div>

<div class="notify-container"></div>.

</body>

<script src="js/all.js"></script>
<script src="js/app/bundle.js"></script>
<script>
    function pushMessage(t){
        var mes = 'Info|Implement independently';
        $.Notify({
            caption: mes.split("|")[0],
            content: mes.split("|")[1],
            type: t
        });
    }

    $(function(){
        $('.sidebar').on('click', 'li', function(){
            if (!$(this).hasClass('active')) {
                $('.sidebar li').removeClass('active');
                $(this).addClass('active');
            }
        })
    })
</script>
</html>