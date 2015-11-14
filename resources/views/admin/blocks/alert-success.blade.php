@if(Session::has('message'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>  <i class="icon fa fa-check"></i> 提示！</h4>
        {{ Session::get('message') }}
    </div>
@endif