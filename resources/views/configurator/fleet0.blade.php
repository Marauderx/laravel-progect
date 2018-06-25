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

        <style>
        #white{
          color: #FFFFFF !important;
          text-decoration: none;
        }
        #white{
text-decoration: none;
}
        </style>
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
      <div class="container">
        <h1>Оптимизация расписания рейсов</h1>
        <p>Описание</p>
      </div>
    </header>

    <br>

<hr class="mb-4">
    <h3>Выберите тип</h3>

    <br>
    <br>

<div class="conteiner">
  <div class="row">
    <div id="vueform">
      <form class="needs-validation" @submit="save" novalidate>
        {{ csrf_field() }}
        <div v-for="(flight, key) in form.flights" v-bind:key="key">

               <div class="col-md-5 mb-3">
                 <label for="country">Тип воздушного судна</label>
                 <select v-model="flight.aercraft" class="custom-select d-block w-100" id="country" required>
                   <option value="">МС 21</option>
                   <option>МС 21</option>
                   <option>МС 22</option>
                 </select>
                 <div class="invalid-feedback">
                   Please select a valid country.
                 </div>
               </div>
               <div class="col-md-3 mb-3">
                 <label for="zip">Конфигурация</label>
                 <input v-model="flight.config" type="text" class="form-control" id="zip" placeholder="" required value="22231009">
                 <div class="invalid-feedback">
                   Zip code required.
                 </div>
               </div>
               <div class="col-md-3 mb-3">
                 <label for="zip">Средний налет</label>
                 <input type="text" v-model="flight.nalet" class="form-control" id="zip" placeholder="" required value="900 ч.">
                 <div class="invalid-feedback">
                   Средний годовой налет.
                 </div>
               </div>

               <div class="col-md-5 mb-3">
                 <button type="button" class="btn btn-secondary btn-sm-3" v-on:click="addFlight">Добавить борт</button>
               </div>

               <div class="col-md-5 mb-3">
                 <button type="button" class="btn btn-secondary btn-sm-3" v-on:click="delFlight(key)">Удалить борт</button>
               </div>


  </div>
<hr class="mb-4">
    <div>
    </form>
    </div>
</div>
<br>
<br>

<div class="row">

      <div class="col-md-5 mb-3">
          <label for="lastName">Количество бортов</label>
          <input type="text" v-model="flight.ending" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
        </div>

        <div class="col-md-6 mb-3">
          <label for="lastName">Выберите расписание</label>
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Аэрофлот</option>
                  <option>Авистар-ТУ</option>
                  <option>Аврора</option>
                  <option>Азимут</option>
                  <option>Атран</option>
                </select>
            </div>
        </div>

        <div class="col-md-5 mb-3">
          <button type="button" class="btn btn-secondary btn-sm-3"><a id="white" href="/fleetschedule/4">Сформировать</a></button>
        </div>

        <div class="input-group col-md-6 mb-3">
          <input type="text" class="form-control" placeholder="name" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Сохранить</button>
          </div>
        </div>

</div>

<form>

</form>



  <footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; Иркут</p>
  <ul class="list-inline">
  <li class="list-inline-item"><a href="#">Privacy</a></li>
  <li class="list-inline-item"><a href="#">Terms</a></li>
  <li class="list-inline-item"><a href="#">Support</a></li>
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
  <script>
  var token = document.head.querySelector('meta[name="csrf-token"]');
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

      let app = new Vue({
        el: '#vueform',
        data () {
          return {
            form: {
              name: undefined,
              flights: []
            }
          }
        },
        methods: {
          addFlight () {
            this.form.flights.push({
              aercraft: undefined,
              config: undefined,
              nalet: undefined,
            })
          },
  </script>
  </body>
</html>
