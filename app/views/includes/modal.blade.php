<div class="modal fade" id="messageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
        @if( Session::has('modalTitle') )
       	{{ Session::get('modalTitle') }}
       @endif
        </h4>
      </div>
      <div class="modal-body">
        <p>{{ Session::get('message') }}</p>
      </div>
      <div class="modal-footer">
       @if( Session::has('modalFooter') )
       	{{ Session::get('modalFooter') }}
       @endif
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->