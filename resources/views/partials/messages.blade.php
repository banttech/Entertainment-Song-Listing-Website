<style>
    button.close {
        font-size: 1.5rem;
    }
</style>

@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{!! session('success') !!}</strong>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{!! session('error') !!}</strong>
    </div>
@endif
