<div class="form-group">
    <label for="username" class="control-label">User Name: <small class="text-red"><i class="fa fa-fw fa-asterisk"></i></small></label>
    <input type="text" name="name" value="{{ $form->name }}" class="form-control" id="username">
</div>
<div class="form-group">
    <label for="email" class="control-label">Email: <small class="text-red"><i class="fa fa-fw fa-asterisk"></i></small></label>
    <input type="email" name="email" value="{{ $form->email }}" class="form-control" id="email">
</div>
<div class="form-group">
    <label for="age" class="control-label">age: <small class="text-red"><i class="fa fa-fw fa-asterisk"></i></small></label>
    <input type="number" name="age" value="{{ $form->age }}" class="form-control" id="age">
</div>

@if(isset($uid))
<div class="form-group">
    <label for="status" class="control-label">status: <small class="text-red"><i class="fa fa-fw fa-asterisk"></i></small></label>
    <select name="status">
        
    </select>
</div>
@endif