<section>
	<div class="row">
	<h3>List Clients</h3>
    <div class="col-sm-2">
    	
    </div>
    <div class="col-sm-8">
<!--<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title">List Clients</h3>
    </div>
    <div class="panel-body">-->
    	<table class="table table-striped table-hover">
            <tbody><tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Active</td>
                <td></td>
                
            </tr>
            
            <!-- REPLACE WITH DYNAMIC CLIENT LIST -->
            <tr class="clickableRow" data-target="/clients/edit/1">
                <td>0001</td>
                <td>John</td>
                <td>Smith</td>
                <td>Check Mark</td>
                <td>
                	<div class="btn-group">                       
                        <a href="/clients/edit/1" class="btn btn-default editBtn"><i class="fa fa-pencil" title="Edit"></i></a>
                        <a href="/clients/delete/1" class="btn btn-danger confirmModal" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </div>
				</td>
            </tr>
            
        </tbody></table>
    <!--</div>
</div>-->
	</div>
    </div>
</section>