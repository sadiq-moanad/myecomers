<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .text {
        height: 20px;
        overflow: hidden;
    }
</style>
<body>
    <div class="container">
        @foreach($products as $prodect)
        <div class="row mb-4 justify-content-center">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/'.$prodect->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$prodect->productname}}</h5>
                        <p class="card-text text">{{$prodect->descrbion}}</p>
                        @if(strlen($prodect->descrbion) > 20)
                            <a href="#" id="btn{{$prodect->id}}" class="btn btn-primary show-more">Show More</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".show-more").click(function(){
                var $cardText = $(this).prev(".card-text");
                var text = $cardText.text();
                $cardText.text(text === "{{$prodect->descrbion}}" ? text.substring(0, 20) + "..." : "{{$prodect->descrbion}}");
                $(this).text(function(i, text){
                    return text === "Show Less" ? "Show More" : "Show Less";
                });
            });
        });
    </script>
</body>
</html>
