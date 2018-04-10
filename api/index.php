<!DOCTYPE html>
<html>
<head>
    <title>Vedic Rishi | Getting latitude,longitude and timezone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form>
    <div class="pull-left">
        <input type="text" class="typeahead" id="place" placeholder="Enter Place..">
    </div>
    <div class="pull-left dst">
        <label><input type="checkbox" name="dst" id="dst">DST</label>
    </div>

    <input type="text" id="latitude" placeholder="latitude" readonly>
    <input type="text" id="longitude" placeholder="longitude" readonly>
    <input type="text" id="timezone" placeholder="timezone" readonly>
</form>


<script src="https://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="js/typeahead.js"></script>
<script type="text/javascript" src="js/geonames.js"></script>
</body>
</html>