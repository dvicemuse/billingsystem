<section>
<div class="row">
    	<h3>List Teachers</h3>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
    	<table class="table table-striped table-hover">
            <tbody><tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Active</td>
                <td></td>
                
            </tr>
            
            <!-- REPLACE WITH DYNAMIC CLIENT LIST -->
            <tr class="clickableRow" data-target="/teachers/edit/1">
                <td>0001</td>
                <td>John</td>
                <td>Smith</td>
                <td>Check Mark</td>
                <td>
                <div class="btn-group">                       
                        <a href="/teachers/edit/1" class="btn btn-default editBtn"><i class="fa fa-pencil" title="Edit"></i></a>
                        <a href="/teachers/delete/1" class="btn btn-danger confirmModal" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                    </td>
            </tr>
            
        </tbody></table>
    </div>
</div>
</section>