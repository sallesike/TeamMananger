<!DOCTYPE html>
<html>
<head>
	<title>Gerenciamento de times</title>
		<script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.mask.js')}}" type="text/javascript"></script>
	  <script src="{{asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">



	<script type="text/javascript">$(document).ready(function() {
        $('#example').dataTable( {
            "language": {
                "url": "dataTables.Portuguese-Brasil.lang"
            }
        } );
    } );</script>
	
	<script src="{{asset('js/sistema.js')}}" type="text/javascript"></script>

	<script src="{{asset('js/dataTable.js')}}" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/dataTable.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{url('painel/css/style.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<body>
</head>
<body>
	<div class="container">
	@yield('conteudo')
	</div>
</body>
</html>