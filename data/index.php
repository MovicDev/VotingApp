<?php 
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script defer src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
    <link href="dist/jquery.bootgrid.css" rel="stylesheet" />
     <script src="dist/jquery-1.11.1.min.js"></script>
     <script src="dist/bootstrap.min.js"></script>
     <script src="dist/jquery.bootgrid.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
     <!-- Header -->
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-[#203540] dark:border-[#082977]-700" style="height:50px">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only"></span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="https://flowbite.com" class="flex ms-2 md:me-24">
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Admin Dashboard</span>
          </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3 text-white">
              <span class="me-10 hidden-on-small-screen" id="displayUserEmail"></span>
               <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                 <span id="displayUserImage"></span>
                </button>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-[#203540] dark:border-[#082977]-700" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-[#203540]">
        <ul class="space-y-5 font-medium">
            <li>
              <button type="button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
</svg>                
                 <span class="flex-1 ms-3 whitespace-nowrap"><a href="../updateform.php" style="color:#fff; text-decoration:none;">Update Password</a></span>
              </button>
           </li>
            <!-- ------ -->
            <li>
              <button type="button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
             <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
             </svg>
                 <span class="flex-1 ms-3 whitespace-nowrap"><a href="../view.php" style="color:#fff; text-decoration:none;">View Result</a></span>
              </button>
           </li>
             <!-- ------ -->
             <li>
              <form action="logout.php" method="post">
              <button type="submit" name="submit" value="SignOut" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                </svg>
                
                 <span class="flex-1 ms-3 whitespace-nowrap text-white">SignOut</span>
              </button>
              </form>
           </li>
        </ul>
     </div>
  </aside>
  
  <div class="p-3 sm:ml-64 dark:bg-[#194FA6] h-screen">
  <div class="container" style="position:relative; top: 100px;">
      <div class="">
        <div class="col">
		<div class="well clearfix">
			
		<table id="vote_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
			<thead>
				<tr>
					<th data-column-id="s" data-type="numeric" data-identifier="true">Empid</th>
					<th data-column-id="voterName">Name</th>
					<th data-column-id="voterEmail">Email</th>
					<th data-column-id="selectedCandidate">selectedCandidate</th>
					<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
					
				</tr>
			</thead>
		</table>
    </div>
      </div>
    </div>
	
<div id="add_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add vote</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
				<input type="hidden" value="add" name="action" id="action">
                  <div class="form-group">
                    <label for="voterName" class="control-label">Name:</label>
                    <input type="text" class="form-control" id="voterName" name="voterName"/>
                  </div>
                  <div class="form-group">
                    <label for="voterEmail" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="voterEmail" name="voterEmail"/>
                  </div>
				  <div class="form-group">
                    <label for="selectedCandidate" class="control-label">selectedCandidate:</label>
                    <input type="text" class="form-control" id="aselectedCandidate" name="selectedCandidate"/>
                  </div>
                
					</div>
			</form>
        </div>
    </div>
</div>
<div id="edit_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit vote</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_edit">
				<input type="hidden" value="edit" name="action" id="action">
				<input type="hidden" value="0" name="edit_s" id="edit_s">
                  <div class="form-group">
                    <label for="voterName" class="control-label">Name:</label>
                    <input type="text" class="form-control" id="edit_voterName" name="edit_voterName"/>
                  </div>
                  <div class="form-group">
                    <label for="voterEmail" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="edit_voterEmail" name="edit_voterEmail"/>
                  </div>
				  <div class="form-group">
                    <label for="selectedCandidate" class="control-label">selectedCandidate:</label>
                    <input type="text" class="form-control" id="edit_selectedCandidate" name="edit_selectedCandidate"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
  </div>
</div>
  </div>

  <script type="text/javascript">
$( document ).ready(function() {
	var grid = $("#vote_grid").bootgrid({
		ajax: true,
		rowSelect: true,
		post: function ()
		{
			/* To accumulate custom parameter with the request object */
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		
		url: "response.php",
		formatters: {
		        "commands": function(column, row)
		        {
		            return "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-s=\"" + row.s + "\"><span class=\"glyphicon glyphicon-trash\"></span></button> "
		        }
		    }
   }).on("loaded.rs.jquery.bootgrid", function()
{
    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
			var ele =$(this).parent();
			var g_s = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
console.log(g_s);
                    console.log(g_name);

		//console.log(grid.data());//
		$('#edit_model').modal('show');
					if($(this).data("row-s") >0) {
							
                                // collect the data
                                $('#edit_s').val(ele.siblings(':first').html()); // in case we're changing the key
                                $('#edit_voterName').val(ele.siblings(':nth-of-type(2)').html());
                                $('#edit_voterEmail').val(ele.siblings(':nth-of-type(3)').html());
                                $('#edit_selectedCandidate').val(ele.siblings(':nth-of-type(4)').html());
					} else {
					 alert('Now row selected! First select row, then click edit button');
					}
    }).end().find(".command-delete").on("click", function(e)
    {
	
		var conf = confirm('Delete ' + $(this).data("row-s") + ' items?');
					alert(conf);
                    if(conf){
                                $.post('response.php', { s: $(this).data("row-s"), action:'delete'}
                                    , function(){
                                        // when ajax returns (callback), 
										$("#vote_grid").bootgrid('reload');
                                }); 
								//$(this).parent('tr').remove();
								//$("#vote_grid").bootgrid('remove', $(this).data("row-id"))
                    }
    });
});

function ajaxAction(action) {
				data = $("#frm_"+action).serializeArray();
				$.ajax({
				  type: "POST",  
				  url: "response.php",  
				  data: data,
				  dataType: "json",       
				  success: function(response)  
				  {
					$('#'+action+'_model').modal('hide');
					$("#vote_grid").bootgrid('reload');
				  }   
				});
			}
			
			$( "#command-add" ).click(function() {
			  $('#add_model').modal('show');
			});
			$( "#btn_add" ).click(function() {
			  ajaxAction('add');
			});
			$( "#btn_edit" ).click(function() {
			  ajaxAction('edit');
			});
});
</script>
</body>
</html>