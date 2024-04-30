<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  <button id = "myinput"class=" m-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  hide
</button>
<button id = "myinput2"class=" m-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  show
</button>
<input type="text" id="myinput1" placeholder="Enter text...">

 

  <script>
  $(document).ready(function(){
    $("#myinput").click(function(){
        $('h1').fadeOut(500);
    });
    $("#myinput2").click(function(){
        $('h1').fadeToggle(500);
    });
}); 


var myval = "";
$(document).ready(function(){
  $('#myinput1').keyup(function(event){
    myval = $('#myinput1').val();
    //alert(myval);
    $('h1').text(myval);
   



  })  ;



});

</script>
</body>
</html>