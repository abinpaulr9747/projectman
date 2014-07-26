@if(Session::has('flash_success'))
<div class="alert alert-success" id="flash_notice">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('flash_success') }}</div>
@endif
@if(Session::has('flash_error'))
<div class="alert alert-error" id="flash_notice">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('flash_error') }}</div>
@endif
@if(Session::has('flash_warning'))
<div class="alert alert-warning" id="flash_notice">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('flash_notice') }}</div>
@endif
@if(Session::has('flash_notice'))
<div class="alert alert-info" id="flash_notice">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    {{ Session::get('flash_notice') }}</div>
@endif