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

    <h3>Выберите тип</h3>

    <br>
    <br>

<div class="conteiner">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td><label class="checkbox inline">
    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
  </label></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td><label class="checkbox inline">
    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
  </label></td>
      </tr>
    </tbody>
  </table>

</div>
<div class="row">
      <div class="col-md-6 mb-3">
          <label for="lastName">Средний годовой налет</label>
          <input type="text" v-model="flight.beginning" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
        </div>
      <div class="col-md-6 mb-3">
          <label for="lastName">Количество бортов</label>
          <input type="text" v-model="flight.ending" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
        </div>
</div>

<form>

<div class="row">
  <div class="col-md-6 mb-3">
      <div class="form-group">

          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
      </div>
  </div>

  <div class="col-md-6 mb-3">
    <button type="button" class="btn btn-secondary btn-sm-3">Сформировать</button>
  </div>
  </div>
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
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>Mark</td>
        </tr>
      </tbody>
    </table>
  </div>
<br>
<div class="row">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button">Button</button>
    </div>
  </div>
</div>
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
  </body>
</html>
