@if (session()->has('flash_message'))
<div class="alert alert-info" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Notice: </span>
        {{ session('flash_message') }}
</div>
@endif
