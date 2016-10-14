<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Search</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
</head>
<body>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a href="#" id="logo-container" class="brand-logo">Laravel Search</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Github</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="section">
            <div class="row">
                <form action="" class="col s10">
                  <div class="input-field col s8">
                        <input id="search" type="text" v-model="query">
                        <label for="search">Search</label>
                   </div>
                   <div class="input-field col 12">
                        <button class="waves-effect waves-light btn blue" type="button" @click="search()">Search</button>
                   </div>
            </form>
            </div>

            <div class="row">
                <div class="col s12 m4" v-for="product in products">
                  <div class="card">
                    <div class="card-image">
                      <img :src="product.image" alt="@{{ product.title }}" />
                      <span class="card-title">@{{ product.title }}</span>
                    </div>
                    <div class="card-content">
                      <p>@{{ product.description }}</p>
                    </div>
                    <div class="card-action">
                      <a href="#" class="blue btn">OK</a>
                    </div>
                  </div>
                </div>
             </div>
        </div>
    </div>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>