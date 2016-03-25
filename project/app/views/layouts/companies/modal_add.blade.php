@section('modal_add')
<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog" role="document">
      <div class="modal-content">
		{{ Form::open(array('url' => 'store/companies/create', 'method' => 'post')) }}
		<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">ข้อมูลใหม่</h4>
        </div>
        <div class="modal-body">
			    <?php echo Helper::text('ชื่อ', array('name' => 'name'));?>
          <?php echo Helper::text('', array('name' => 'id'), true);?>
          <?php echo Helper::textarea('ที่อยู่', array('name' => 'address'));?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
		{{ Form::close() }}
      </div>
    </div>
</div>
@show
