<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CyberRock</title>

    <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
            @if (Auth::user()->is_admin)
                 <a class="navbar-brand page-scroll" href="/homes">CyberRock - Welcome Admin: {{{ Auth::user()->email }}}</a>
            @else                
                <a class="navbar-brand page-scroll" href="/homes">CyberRock - Welcome User: {{{ Auth::user()->email }}}</a>
            @endif
            </div>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    @if (Auth::user()->is_admin)
                    <li>                        
                        <a class="page-scroll" href="/artists">Artist</a>                       
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="/songs">Songs</a>
                    </li>
                    @endif
                    <li>
                        <a class="page-scroll" href="/rocks">Send it to Rockola!</a>
                    </li>
                </ul>
            </div>

     </nav>  
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>

    <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>    
        
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTable').DataTable({
                    language: {
                        processing:     "Proceso en curso...",
                        search:         "Buscar&nbsp;:",
                        lengthMenu:    "Mostrar _MENU_ registros",
                        info:           "Mostrando del _START_ al _END_ de _TOTAL_ registros",
                        infoEmpty:      "Mostrando del 0 al 0 de 0 registros",
                        infoFiltered:   "(Resultado del filtro de _MAX_ registros en total)",
                        infoPostFix:    "",
                        loadingRecords: "Cargando registros...",
                        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                        emptyTable:     "Actualmente no hay registros disponibles",
                        paginate: {
                            first:      "Primero",
                            previous:   "Anterior",
                            next:       "Siguiente",
                            last:       "Ultimo"
                        },
                        aria: {
                            sortAscending:  ": Ordenar registros en forma ascendente",
                            sortDescending: ": Ordenar registros en forma descendente"
                        }
                    }
            });
        });
</script>     
            

</body>

</html>