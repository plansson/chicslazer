<?php

// ini_set('xdebug.var_display_max_depth', -1);
// ini_set('xdebug.var_display_max_children', -1);
// ini_set('xdebug.var_display_max_data', -1);


require_once '../application/mktplace/apps/DAO/empresaDAO.php';
$empresas = empresaDAO::getInstance()->selectEmpresas();

?>   
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Advanced Form Elements</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">

    <link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

	<style>
		table.dataTable.dataTables-example tbody tr,
		table.dataTable.dataTables-example thead th:first-child {
			cursor: pointer;
		}
		
		table.dataTable tbody td {
          vertical-align: middle;
        }

	</style>

</head>

<body>

    <div id="wrapper">

        <?php 
        require_once 'leftSide.php';
    ?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Produtos</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Entidades</a>
                        </li>
                        <li class="active">
                            <strong>Produtos</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            
            <div class="row">
	                <div class="col-lg-12">
	
	                    <div class="ibox">
	
	                        <div class="ibox-content">
	
	                            <div class="row">	
	                                <div class="col-md-4">
	                                    <div class="form-group">
	                                    <label class="control-label" for="empresaId">Escolha uma Empresa:</label>
	                                    <select class="select2_demo_3 form-control" id="empresaId" name="empresaId">
	                                        <option></option>
	                                        <?php 
	                                        	foreach ($empresas['data'] as $empresa) {
	                                        ?>
	                                        <option value="<?php echo $empresa->CODIGO; ?>">
	                                        	<?php echo $empresa->CODIGO . '-' . $empresa->NOMEFANTASIA; ?>
	                                        </option>
	                                        <?php 		
	                                        	}
	                                        ?>
	                                    </select>
	                                    </div>
	                                </div>
	                            </div>

                                <div class="row">   
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label" for="touchspin3">Saldo (Maior ou Igual):</label>
                                            <input id="touchspin3" type="text" value="0" name="touchspin3"">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
<!--                                         <button type="button" class="btn btn-w-m btn-primary pull-right" id="btnExportar">Exportar</button> -->
                                        <button type="button" class="ladda-button ladda-button-demo btn btn-w-m btn-primary" data-style="zoom-in" id="btnExportar">Exportar</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-w-m btn-primary pull-right" id="btnPesquisar">Pesquisar</button>
                                    </div>
                                </div>

	                        </div>
	                    </div>
	
	                </div>
	            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <div class="table-responsive">
    		                    <table id="tblProducts" class="table table-striped table-bordered table-hover dataTables-example" width="100%">
    		                    <thead>
    		                    	<tr>
    				                	<th>
                                            <div class="checkbox checkbox-primary">
                                                <input name="select_all" value="1" type="checkbox">
                                                    <label></label>
                                                </div>
                                        </th>
                                        <th nowrap="nowrap" width="10%"><center>EMPRESA</center></th>
    				                	<th nowrap="nowrap" width="10%"><center>CÓDIGO</center></th>
    				                	<th nowrap="nowrap" width="35%"><center>DESCRIÇÃO</center></th>
    				                	<th nowrap="nowrap" width="5%"><center>ESTOQUE</center></th>
    				            	</tr>
    		                    </thead>
    		                    <tfoot>
    		                    	<tr>
    				                	<th nowrap="nowrap"><center>EMPRESA</center></th>
    				                	<th nowrap="nowrap"><center>CÓDIGO</center></th>
    				                	<th nowrap="nowrap"><center>DESCRIÇÃO</center></th>
    				                	<th nowrap="nowrap"><center>ESTOQUE</center></th>
    				            	</tr>
    		                    </tfoot>
    		                    </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

        </div>
        </div>
<!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- MENU -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    
    <!--  DataTables -->
    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Select2 -->
    <script src="js/plugins/select2/select2.full.min.js"></script>

    <!-- TouchSpin -->
    <script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    
    <script type="text/javascript">

        //
        // Updates "Select all" control in a data table
        //
        function updateDataTableSelectAllCtrl(table){
           var $table             = table.table().node();
           var $chkbox_all        = $('tbody input[type="checkbox"]', $table);
           var $chkbox_checked    = $('tbody input[type="checkbox"]:checked', $table);
           var chkbox_select_all  = $('thead input[name="select_all"]', $table).get(0);

           // If none of the checkboxes are checked
           if($chkbox_checked.length === 0){
              chkbox_select_all.checked = false;
              if('indeterminate' in chkbox_select_all){
                 chkbox_select_all.indeterminate = false;
              }

           // If all of the checkboxes are checked
           } else if ($chkbox_checked.length === $chkbox_all.length){
              chkbox_select_all.checked = true;
              if('indeterminate' in chkbox_select_all){
                 chkbox_select_all.indeterminate = false;
              }

           // If some of the checkboxes are checked
           } else {
              chkbox_select_all.checked = true;
              if('indeterminate' in chkbox_select_all){
                 chkbox_select_all.indeterminate = true;
              }
           }
        }

    	$(document).ready(function(){

            var table;
            var rows_selected = [];
        	
    		$(".select2_demo_3").select2({
    	        placeholder: "Selecione uma Empresa",
    	        allowClear: true
    	    }).val('05').trigger('change');

            $("input[name='touchspin3']").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            }).val(1).trigger('change');

            table = $('.dataTables-example').DataTable({
                "bDestroy": true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    type : "POST",
                    url: '../includes/ajaxProdutos.php',
                    data: function(d){
                        d.empresaId = $('#empresaId').val();
                        d.saldo     = $('#touchspin3').val();
                    }
                },
                "columns": [
                    { "data": null},
                    { "data": "EMPRESA"},
                    { "data": "PRODUTO"},
                    { "data": "DESCRICAO" },
                    { "data": "ESTDISPONIVEL"},
                ],
                "columnDefs": [
                    {
                        'targets': 0, 
                        'searchable':false, 
                        'orderable':false, 
                        "class":'text-center', 
                        'width':'1%', 
                        'render': function (data, type, full, meta){
                            return '<div class="checkbox checkbox-primary"><input type="checkbox"><label></label></div>';
                            //return '<input type="checkbox">';
                        }
                    },
                   ],
                'order': [[1, 'asc'], [3, 'asc']],
                "language": {
                            "url": "../includes/Portuguese-Brasil.json"
                },
                "pageLength": 10,
                "responsive": true,
                'rowCallback': function(row, data, dataIndex){
                    // Get row ID
                    //var rowId = data[0];
                    var rowId = data.PRODUTO;

                    // If row ID is in the list of selected row IDs
                    if($.inArray(rowId, rows_selected) !== -1){
                        $(row).find('input[type="checkbox"]').prop('checked', true);
                        $(row).addClass('selected');
                    }
                }
            });

            // Handle click on checkbox
               $('#tblProducts tbody').on('click', 'input[type="checkbox"]', function(e){

                  var $row = $(this).closest('tr');

                  // Get row data
                  var data = table.row($row).data();

                  // Get row ID
                  var rowId = data.PRODUTO;

                  // Determine whether row ID is in the list of selected row IDs
                  var index = $.inArray(rowId, rows_selected);

                  // If checkbox is checked and row ID is not in list of selected row IDs
                  if(this.checked && index === -1){
                     rows_selected.push(rowId);

                  // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
                  } else if (!this.checked && index !== -1){
                     rows_selected.splice(index, 1);
                  }

                  if(this.checked){
                     $row.addClass('selected');
                  } else {
                     $row.removeClass('selected');
                  }

                  // Update state of "Select all" control
                  updateDataTableSelectAllCtrl(table);

                  // Prevent click event from propagating to parent
                  e.stopPropagation();
               });

            

            // Handle click on table cells with checkboxes
            $('#tblProducts').on('click', 'tbody td, thead th:first-child', function(e){
              $(this).parent().find('input[type="checkbox"]').trigger('click');
            });

            // Handle click on "Select all" control
            $('#tblProducts thead input[name="select_all"]', table.table().container()).on('click', function(e){
              if(this.checked){
                 $('#tblProducts tbody input[type="checkbox"]:not(:checked)').trigger('click');
              } else {
                 $('#tblProducts tbody input[type="checkbox"]:checked').trigger('click');
              }

              // Prevent click event from propagating to parent
              e.stopPropagation();
            });

            // Handle table draw event
            table.on('draw', function(){
              // Update state of "Select all" control
              updateDataTableSelectAllCtrl(table);
            });

            $('#btnPesquisar').on('click', function(){
                table.ajax.reload(null, false);
            });
            

            $('#btnExportar').on('click', function(){

                var empresaId = $('#empresaId');

                $.each(rows_selected, function(index, el) {

                    $.ajax({
                      url: "../includes/ajaxTrayCommerce.php",
                      type: 'POST',
                      dataType: 'json',
                      data: {
                        "empresaCodigo" : empresaId.val(),
                        "produtoCodigo" : el
                      },
                      async:false,
                    })
                    .done(function(data) {
                        //console.log("success");
                        //console.log('POST: ' + data);
                        console.log('Finalizado.');
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log("error: " + errorThrown);
                    })
                    .always(function() {
                        console.log("complete");
                    });
                    if(rows_selected.length == index+1) {
                        alert("Processo Finalizado");
                        table.ajax.reload(null, false);
                    }      
                    
                    /*$.post(
                            "../includes/ajaxTrayCommerce.php",
                            {
                                "empresaCodigo" : empresaId.val(),
                                "produtoCodigo" : el
                            }
                    ).done(function(data){
                        alert(data);
                        table.ajax.reload(null, false);
                    });  */             
                });

            });

            
        });
    </script>

</body>

</html>