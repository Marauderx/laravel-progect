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
        <h1>Расписание рейсов</h1>
        <p></p>
      </div>
    </header>

    <hr class="mb-4">



    <form method="post" action="/fleetschedule/{{ $id }}">
      <input name="_token" type="hidden" value="{{ csrf_token() }}" />

      <div class="conteiner" style="overflow: scroll">
          <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Тип ВС</th>
              <th scope="col">Номер рейса</th>
              <th scope="col">Действие рейса</th>
              <th scope="col">Действие рейса</th>
              <th scope="col">Аэропорт отправления</th>
              <th scope="col">Время на обслуживание</th>
              <th scope="col">Время вылета</th>
              <th scope="col">Аэропорт прибытия</th>
              <th scope="col">Время на обслуживание</th>
              <th scope="col">Время прилета</th>
            </tr>
          </thead>
          <tbody>
            @foreach($mainshedule as $schedule)
            <tr>
              <td>{{ $schedule->type}}</td>
              <td>{{ $schedule->number}}</td>
              <td>{{ $schedule->beginning}}</td>
              <td>{{ $schedule->ending}}</td>
              <td>{{ $schedule->airportOfDeparture}}</td>
              <td>40 минут</td>
              <td>{{ $schedule->timeOfDeparture}}</td>
              <td>{{ $schedule->airportOfArriving}}</td>
              <td>40 минут</td>
              <td>{{ $schedule->timeOfArriving}}</td>
            </tr>
          @endforeach

          </tbody>
        </table>
      </div>
    <br>
    <div class="row">
      <div class="col-md-6 mb-3">
          <div class="form-group">


              <select class="form-control" id="exampleFormControlSelect1" name="idGantt">
                @foreach($mainGantt as $Gantt)
                <option value="{{ $Gantt->id}}">{{ $Gantt->name}}</option>
                @endforeach
              </select>
          </div>
      </div>

      <div class="col-md-6 mb-3">
        <button type="submit" class="btn btn-secondary btn-sm-3">Сформировать в Гант</button>
      </div>
      </div>
    </form>

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
