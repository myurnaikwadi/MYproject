<?php  session_start();?>
<style type="text/css">
	.col-md-1 
	{
    margin-bottom: 2%;
    width: 14.333 %!important;
}
</style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Excellence | Most Time Taken Analysis</title>
<?php include("link.php"); ?>
</head>
  <body class="skin-blue sidebar-mini">

    <div class="wrapper">

     <?php include('header.php');?>
      <?php include('sidemenu.php');?>
    
      <div class="content-wrapper">
        <section class="content">

           
  
           <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Most Time Taken Analysis</h3>
                    <hr />
                  </div><!-- /.box-header -->
                <div class="box-body">
					
                	  <table class="table table-bordered table-hover "  >
                 
                   <thead>
                       <tr>
	                       <th>Question No.</th>
	                       <th>Test Date</th>
	                       <th>Test Title</th>
	                       <th>Course</th>
	                       <th>Subject</th>
	                       <th>No. of students</th>
	                       <th>Percent Of Students</th>
                       </tr>
                    </thead>
                   
                   <tbody>
                      <?php 
                      		
                      			require 'include/test.php';	
                              	$testobj=new Test(SERVER_API_KEY);
								
					  			$result=$testobj->getMostTimeTakenQuestions($_GET['Id']);
								
								foreach($result as $row)
								{
								
									echo "<tr><td>$row->questionNo</td><td>$row->test_date</td><td>$row->test_title</td><td>$row->course_name</td><td>$row->subject_name</td><td>$row->incorrectcount</td><td>$row->studentpercentage %</td></tr>";
									
								}
							
					  ?>

                    </tbody>
                     
                  </table>
					      <!--<ul class="pagination">

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>
      </div>
     </div> 
   
      <div class="control-sidebar-bg"></div>
 <?php include("footer.php");?>
   
     <!-- Invite Super Administr -->
  <script type="text/javascript">
   $('#tbl-average-score').DataTable({});
       
		
       
</script>
   </body>
  </html>    
