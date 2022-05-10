


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<div id='app' class="bg-main">
  <header> 
        <div class="bg-album">
            <img src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png" alt="" class="logo p-3">
        </div>
    
  </header>

  <div class="container w-50 h-100">

    <div class="row mt-2 pt-3 d-flex justify-content-center">
   

            
                        <div v-for="(element) in dischi" class='col-3 flex-column d-flex m-3 align-items-center bg-album'>
                           <img  :src='element.poster' class='album-img img-fluid'>
                           <h5 class='text-title'> {{element.title}}</h5> 
                           <div class='text-secondary'> {{element.author}}</div>
                           <div class='text-secondary pb-3 mb-3'>{{element.year}}</div>
                        </div>
    </div>
   
  </div>
</div>












<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="./js/main.js"></script> 
</body>
</html>