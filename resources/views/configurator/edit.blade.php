<!doctype html>
<html lang="en">
  <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('/css/simple-sidebar.css')}}" rel="stylesheet">
  </head>
  <body>

        <div id="wrapper">

            <!-- Sidebar -->
            @include('layouts.nav')
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

              @include('layouts.navbutton')

<div class="container-fluid">

<header>
  <div class="row">
    <h1>Изменение записи</h1>
    <br>
    <p></p>
  </div>
</header>

      <hr class="mb-4">
              <div class="row">
                  <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Заполните форму для изменения записи</h4>
                      <form>


  <div class="row">

              <div class="col-md-6 mb-3">
                <label for="firstName">Название поля</label>
                  <input type="text"  class="form-control" id="number" placeholder="" name="number" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                </div>
  </div>
                <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="lastName">Начало рейса</label>
                          <input type="text"  class="form-control" id="beginning" placeholder="" name="beginning" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                        </div>
                      <div class="col-md-6 mb-3">
                          <label for="lastName">Конец рейса</label>
                          <input type="text"  class="form-control" id="ending" placeholder="" name="ending" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                        </div>
              </div>


        <div class="row">
          <div class="col-md-6 mb-3">
          <button type="button" class="btn btn-secondary btn-sm-3" v-on:click="delFlight(key)"> Очистить </button>
        </div>
      </div>
          <hr class="mb-4">



    <div class="row">
      <div class="col-md-6 mb-4">
      <button type="button" class="btn btn-secondary btn-sm-3" v-on:click="addFlight">Изменить</button>
          </div>
          <div class="col-md-6 mb-4">
          <div class="input-group mb-3">
        <div class="input-group-append">
          <input type="submit" class="btn btn-outline-secondary">
        </div>
      </div>
      </div>
              </div>
              <br>

            </form>


        </div>
    </div>
</div>

              <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1"></p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"></a></li>
                  <li class="list-inline-item"><a href="#"></a></li>
                  <li class="list-inline-item"><a href="#"></a></li>
                </ul>
              </footer>
              </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>


    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

  </body>
</html>
