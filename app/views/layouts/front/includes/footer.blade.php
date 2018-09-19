<!--jQuery-->
<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>

<!-- Multiselect -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>

<!--Loader-->
<script>
$(window).load(function() {
   $("#loading").fadeOut(2000);
})
</script>
<!-- REGISTER SCRIPT -->
@if ($themingOptions['register'])
  @include('layouts.front.includes.script-register')
@endif

</body>
</html>
