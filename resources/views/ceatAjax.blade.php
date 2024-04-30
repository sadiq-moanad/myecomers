<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <title>Document</title>
</head>
<body>
    <form method="POST" id="myform" action="{{ route('storAjax') }}">
        @csrf
        <input type="text" class="form-control" id="productName" name="name" placeholder="ادخل اسم المنتج">
        <textarea class="form-control" id="productDescription" name="descrbion" rows="5" placeholder="ادخل وصف المنتج"></textarea>
        <button type="submit" class="btn btn-primary" id="mysub">إرسال</button>
        <div id="result"></div>
    </form>
    

 <script>

$(document).ready(function(){
    $('#mysub').click(function(){$(this).css('color','green')});


});

$(document).ready(function(){
    $('#mysub').click(function(event){
        event.preventDefault();
        // Your additional logic here
        var form = $("#myform")[0];
        var data = new FormData(form); // تصحيح الكتابة هنا
        
        $.ajax({
            type: "POST",
            url: "{{ route('storAjax') }}",
            data: data,
            processData: false,
            contentType: false,
            success: function (data) {
                $('#result').text(data.message);
            },
            error: function(error){
                console.log(error); // يمكنك تعزيز هذا لتوفير معلومات أكثر تحديداً حول الخطأ
            }
        });
    });
});

</script> 


</body>
</html>
