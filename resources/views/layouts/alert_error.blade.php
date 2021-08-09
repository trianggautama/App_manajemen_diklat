<script>
   @foreach ($errors->all() as $error)
            iziToast.error({
                title: 'Error',
                message: '{{$error}}',
                position: 'topRight',
            });
         @endforeach
</script>