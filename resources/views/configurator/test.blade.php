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
  <div class="container">
    <h1>Название страницы</h1>
    <p>Описание</p>
  </div>
</header>

      <hr class="mb-4">
              <div class="row">
                  <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Заполните форму</h4>
                    <div id="vueform">
                      <form class="needs-validation" @submit="save" novalidate>
                        {{ csrf_field() }}
                        <div v-for="(flight, key) in form.flights" v-bind:key="key">

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Номер рейса</label>
                  <input type="text" v-model="flight.number" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                </div>
  </div>
                <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="lastName">Начало рейса</label>
                          <input type="date" v-model="flight.beginning" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                        </div>
                      <div class="col-md-6 mb-3">
                          <label for="lastName">Конец рейса</label>
                          <input type="date" v-model="flight.ending" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                        </div>
              </div>

              <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Тип судна</label>
                        <input type="text" v-model="flight.type" class="form-control" id="lastName" placeholder="" value="" required>
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                      </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Конфигурация самолета</label>
                        <input type="text" v-model="flight.configuration" class="form-control" id="lastName" placeholder="" value="" required>
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                      </div>
            </div>

            <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="lastName">Аэропорт отправления</label>
                      <input type="text" v-model="flight.airportOfDeparture" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                    </div>
                  <div class="col-md-6 mb-3">
                      <label for="lastName">Время отправления</label>
                      <input type="text" v-model="flight.timeOfDeparture" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                    </div>
          </div>

          <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lastName">Аэропорт прибытия</label>
                    <input type="text" v-model="flight.airportOfArriving" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                  </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Время прибытия</label>
                    <input type="text" v-model="flight.timeOfArriving" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                  </div>

        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
          <button type="button" class="btn btn-secondary btn-sm-3" v-on:click="delFlight(key)">Удалить поле </button>
        </div>
      </div>
          <hr class="mb-4">
  </div>


    <div class="row">
      <div class="col-md-6 mb-4">
      <button type="button" class="btn btn-secondary btn-sm-3" v-on:click="addFlight">Добавить поле</button>
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
</div>

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
                number: undefined,
                beginning: undefined,
                ending: undefined,
                type: undefined,
                configuration: undefined,
                airportOfDeparture: undefined,
                timeOfDeparture: undefined,
                airportOfArriving: undefined,
                timeOfArriving: undefined,
              })
            },
            delFlight (key) {
              this.form.flights.splice(key, 1)
            },
            save (e) {
              axios.post('/api/config/{{ $id }}', this.form)
              .then(res => {
                console.log(this.form.flights)
              })
              .catch(err => {
                console.log(err.data)
              })
              e.preventDefault()
            }
          },
          mounted () {
            this.addFlight()
          }
        })
    </script>
  </body>
</html>
