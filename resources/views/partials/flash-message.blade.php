<div class="container mt-4">
    @if(session('success'))
        <div class="alert  alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
        <div class="alert  alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session('error')}}
        </div>
    @endif

</div>
