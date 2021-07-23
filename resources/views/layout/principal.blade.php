<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('notifIt/css/notifIt.css') }}">
    <title>Controle de estoque</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('notifIt/js/notifIt.js') }}"></script>
    <script>
        function notifySuccess(text){
            notif({
                msg: text,
                type: "success",
                bgcolor: "#00B55E",
                color: "#FFF"
            });
        }
        function notifyError(text){
            notif({
                msg: text,
                type: "error",
                bgcolor: "#00B55E",
                color: "#FFF"
            });
        }
        function excluir(id, url, text, textSuccess, url2){
            var myCallback = function (choice){
                if (choice) {
                    window.open(url, '_self');
                }
            }
            notif_confirm(({
                'message': text,
                'textaccept': 'Sim',
                'textcancel': 'Não',
                'fullscreen': true,
                'callback': myCallback
            }))
        }
    </script>
</head>
<style>
    .acao{
        text-align: center;
    }
    .footer{
        text-align: center;
        border-radius: 0px!important;
        position: fixed;
        bottom:0;
        left:0;
        width: 100%;
        position: fixed;
        background-color: #005682!important;
    }
    .container{
        padding-top: 50px; 
    }
</style>
<body>
    <div class="header">
        <div class="logo"><p>LOCSOFT</p></div>
        <div class="shortcuts">
            <div class="shortcut tooltip-bottom" tooltip-text="############### ">
            <span class="fas fa-user-tie"></span>
            </div>
            <div class="shortcut tooltip-bottom" tooltip-text="###############">
            <span class="fas fa-calendar-alt"></span>
            </div>
            <div class="shortcut tooltip-bottom" tooltip-text="###############">
            <span class="fas fa-truck-moving"></span>
            </div>
            <div class="shortcut tooltip-bottom" tooltip-text="###############">
            <span class="fas fa-box"></span>
            </div>
        </div>
        <div class="menu-right">
            <div class="notifications">
            <button class="notification">
                <span class="ttpntf">
                    <span class="fas fa-bell"></span>
                    <span class="contadorNotificacao"></span>
                </span>
            </button>
            </div>
            <div class="dropdown">
                <div class="options">
                    <div class="imgProfile"><img src="https://s3.amazonaws.com/tinycards/image/8b896070c65d01f7aadb26b341a16bf5"></div>
                    <div class="profile">
                        <div class="prTop">
                            <p>Admin</p>
                        </div>
                        <div class="prBot">
                            <p>Gerente</p>
                        </div>
                    </div>
                    <span class="fas fa-sort-down"></span>
                </div>
                <div class="dropdown-content">
                    <a href="configuracoes-sistema.php"><span class="fas fa-cogs"></span> Configurações do sistema</a>
                    <a href="sair.php"><span class="fas fa-sign-out-alt"></span> Sair</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="conteudo" style="margin-bottom: 100px">
        @yield('conteudo')
    </div>
    <footer class="footer">
        <p>&COPY; Estoque de produtos {{ date('Y') }}</p>
    </footer>
</body>
</html>