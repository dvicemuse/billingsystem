<div class="panel panel-default">
	<div class="panel-heading">
    	<h3 class="panel-title" data-icon="list">List Events</h3>
    </div>
    <div class="panel-body">
    	<table class="table table-striped table-hover">
            <tbody><tr>
                <td>Name</td>
                <td>Date</td>
                <td>Time</td>
                <td></td>
                               
            </tr>
            
            <!-- REPLACE WITH DYNAMIC CLIENT LIST -->
            <tr class="clickableRow" data-target="/events/edit/1">
                <td>Demo Event</td>
                <td>01/16/2016</td>
                <td>1:00 pm - 5:30pm</td>
                <td>
                	<div class="btn-group pull-right clearfix">
                        <a href="/events/edit/1" class="btn btn-default has-icon editBtn" data-icon="pencil" title="edit"></a>
                        <a href="/events/delete/1" class="btn btn-danger confirmBtn has-icon" data-icon="trash-o" title="delete"></a>
                    </div>
                </td>
                
            </tr>
            
        </tbody></table>
    </div>
</div>