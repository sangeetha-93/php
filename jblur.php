<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("input").blur(function(){
    $(this).css("background-color", "#ffffff");
});    
});
</script>
</head>
<body>

Enter your name: <input type="text">
<p>Write something in the input field, and then click outside the field to lose focus </p>

</body>
</html>
