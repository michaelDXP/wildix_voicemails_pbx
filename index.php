<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <title>Wildix Voicemails Today - DXP</title>
</head>

<body style="background-color: #222;">

<div class="vm_results" id="vm_results"></div>


<script>
    function refresh_div() {
        jQuery.ajax({
            url:'voicemails.php',
            type:'POST',
            success:function(results) {
                jQuery(".vm_results").html(results);
            }
        });
    }

    t = setInterval(refresh_div,1000);
</script> 

</body>
</html>