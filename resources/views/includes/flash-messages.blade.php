@if($message = Session::get('created'))
    <script>
        M.toast({html: '{{ $message }}'});
    </script>
@endif

@if($message = Session::get('updated'))
    <script>
        M.toast({html: '{{ $message }}'});
    </script>
@endif

@if($message = Session::get('deleted'))
    <script>
        M.toast({html: '{{ $message }}'});
    </script>
@endif