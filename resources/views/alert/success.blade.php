@if (session('status'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismis="alert" arial-hidden="true">x</button>
    {{ session('status') }}
</div>

@endif