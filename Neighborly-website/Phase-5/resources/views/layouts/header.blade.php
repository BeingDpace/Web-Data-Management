<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Theme style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
<script type="text/javascript">
var oldload = window.onload;
</script>
<script src="{{ asset('js/countryselect.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    // just making up for my double use of onload ;)
    var newload = window.onload;
    function replacedload() { oldload(); newload(); };
    if( oldload ) { window.onload = replacedload; }
</script>
