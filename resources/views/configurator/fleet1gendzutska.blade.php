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

               <div class="col-md-5 mb-3">
                 <label for="country">Тип воздушного судна</label>
                 <select class="custom-select d-block w-100" id="country" required>
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
                 <input type="text" class="form-control" id="zip" placeholder="" required value="22231009">
                 <div class="invalid-feedback">
                   Zip code required.
                 </div>
               </div>
               <div class="col-md-3 mb-3">
                 <label for="zip">Средний налет</label>
                 <input type="text" class="form-control" id="zip" placeholder="" required value="900 ч.">
                 <div class="invalid-feedback">
                   Средний годовой налет.
                 </div>
               </div>

               <div class="col-md-5 mb-3">
                 <button type="button" class="btn btn-secondary btn-sm-3">Добавить борт</button>
               </div>

               <div class="col-md-5 mb-3">
                 <button type="button" class="btn btn-secondary btn-sm-3">Удалить борт</button>
               </div>


  </div>
<hr class="mb-4">
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


</div>

<form>

  <!-- $link = new Link();

  $newschedule = newschedule::all();

  $inputclear= array();
  foreach ($newschedule as $que) {
  $task = new Task();
  $zag1 = $inputclear;
  $zag2 = $inputclear;
  $numzag = 0;
  $zagtext1= 'Рейс ' . $que['number'] . ' действителен c ' . $que['beginning'] . ' - ' . $que['ending'] . ' ' . $que['airportOfDeparture'] . ' ' . $que['airportOfArriving'];
  $zagtext2= $que['type'] . ' ' . $que['timeOfDeparture'];
  $zag1['text'] = $zagtext1;
  $zag2['text'] = $zagtext2;
  $zag1['start_date'] = $que['beginning'];
  $zag2['start_date'] = $que['beginning'];
  $zag1['duration'] = '4';
  $zag2['duration'] = '1';
  $zag1['progress'] = '0';
  $zag2['progress'] = '0';
  $zag1['gantt_id'] = $request->idGantt;
  $zag1['parent']= '0';
  Task::create($zag1);
  $numzag = Task::where('text', $zag1['text'])->value('id');
  $zag2['parent'] = $numzag;
  Task::create($zag2); -->
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

  </script>
  </body>
</html>
