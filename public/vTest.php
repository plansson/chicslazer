<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/plugins/dataTables/buttons.dataTables.min.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesome-bootstrap-checkbox/0.3.5/awesome-bootstrap-checkbox.min.css" />

    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">

        <style>

        body{
            margin: 20px;
            background-color: white;
        }
    
        span.select2-container {
            z-index:10050;
        }

    </style>
</head>
<body>
<div id="result"></div>
<!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="js/plugins/select2/select2.full.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/dataTables/dataTables.buttons.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            
            $.ajax({
                url: 'http://plansson.com.br/loja/importaProduto.php',
                type: 'POST',
                dataType: 'json',
                crossDomain: true,
                data: {param1: 'value1'},
            })
            .done(function(data) {
                console.log("success");
                console.log(data);
                //$('#result').text(data);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });     
    </script>           
</body>