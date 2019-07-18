<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>image_sizing</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="" method="POST">@csrf
        <h1>UPLOAD PHOTO</h1>
        <input type="file" name="original" onchange="form.submit()" />
        
    </form>
<div class="d-flex flex-wrap">
        <div class=" m-1 p-1">
            <h3>Original Size</h3>
            <img  class="border border-success" src="/storage/image_sizing/original.jpg"  ></img>
        </div>
        <div class=" m-1 p-1">
            <h3>120x240</h3>
            <img  class="border border-success" src="/storage/image_sizing/120x240.jpg"  ></img>
        </div>

        <div class=" m-1 p-1">
                <h3>300x120</h3>
                <img  class="border border-success" src="/storage/image_sizing/300x120.jpg"  ></img>
            </div>
    
            <div class=" m-1 p-1">
                <h3>120x300</h3>
                <img  class="border border-success" src="/storage/image_sizing/120x300.jpg"  ></img>
            </div>

            <div class=" m-1 p-1">
                <h3>120x600</h3>
                <img  class="border border-success" src="/storage/image_sizing/120x600.jpg"  ></img>
            </div>

            <div class=" m-1 p-1">
                <h3>160x600</h3>
                <img  class="border border-success" src="/storage/image_sizing/160x600.jpg"  ></img>
            </div>
        <div class=" m-1 p-1">
            <h3>800x150</h3>
            <img  class="border border-success" src="/storage/image_sizing/800x150.jpg"  ></img>
        </div>
        <div class=" m-1 p-1">
            <h3>1200x628</h3>
            <img  class="border border-success" src="/storage/image_sizing/1200x628.jpg"  ></img>
        </div>



</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



