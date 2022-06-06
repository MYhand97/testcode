@if($errors->any())
<div id="divFormErrors" class="form-group" style="color: #fff; background: #d0312d; opacity: 1;">
    <div class="col-md-12 text-center" >
        <h7>{{ $errors->first() }}</h7>
    </div>
</div>
<script>
    setTimeout(function() {
        $("#divFormErrors").remove();
    }, 5000);
</script>
@endif