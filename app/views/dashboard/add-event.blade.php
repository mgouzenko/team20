@section('body')
<div>
    <form role="form">
    <div class="form-group">
        <label for="eaventName">Event Name:</label>
        <input type="type" class="form-control" id="eventName" placeholder="Event Name">
    </div>
    <div class="form-group">
            <label for="eaventLocat">Event Location:</label>
            <input id="geocomplete" type="text" placeholder="Type in an address"  />
            <input name="lat" type="hidden">
            <input name="lng" type="hidden">
            <input name="formatted_address" type="hidden">
    </div>
    </form>
</div>

<script type="text/javascript">
        $("#geocomplete").geocomplete()
          .bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
          })
          .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
          })
          .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
          });
        </script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
        <script type="text/javascript" src="/js/jquery.geocomplete.js"></script>
@stop