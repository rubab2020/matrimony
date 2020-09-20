<script>
@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    $( document ).ready(function() {
        new PNotify({
            title: 'Error',
            text: '{{ $error }}',
            type: 'error',
            hide: true,
            styling: 'fontawesome',
            addclass: 'pnotify-center',
            delay: 2000,
        });
    });
    @endforeach
@endif

@if(isset($success) || Session::has('success'))
    $( document ).ready(function() {
        new PNotify({
            title: 'Success',
            text: '{!! $success ?? Session::get('success') !!}',
            type: 'success',
            hide: true,
            styling: 'fontawesome',
            addclass: 'pnotify-center',
            delay: 2000,
        });
    });
@endif

@if(Session::has('error'))
$( document ).ready(function() {
    new PNotify({
        title: 'Error',
        text: '{!! Session::get('error') !!}',
        type: 'error',
        hide: true,
        styling: 'fontawesome',
        addclass: 'pnotify-center',
        delay: 2000,
    });
});
@endif

@if(Session::has('info'))
$( document ).ready(function() {
    new PNotify({
        title: 'Info',
        text: '{!! Session::get('info') !!}',
        type: 'info',
        hide: true,
        styling: 'fontawesome',
        addclass: 'pnotify-center',
        delay: 2000,
    });
});
@endif

</script>