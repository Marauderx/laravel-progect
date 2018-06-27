<!DOCTYPE html>
<head>


  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <title>Simple Sidebar - Start Bootstrap Template</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/simple-sidebar.css')}}" rel="stylesheet">

    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
    let remove = function(event){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      let id = $(event.target).data("id");
      let token = $(event.target).data("token");
      $.ajax({
        url: "/gantt/"+id,
        type: 'DELETE',
        dataType: "JSON",
        data: {
          "id": id,
          "_method": 'DELETE',
          "_token": token,
        },
        success: result => {
          $('[data-id='+id+']').remove()
        }
      });
    }
    </script>
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
        <div class="container-fluid">
          <h1>ᅠКонфигуратор Гант</h1>
          <p></p>
          <br>
        </div>
      </header>

      <hr class="mb-4">

      </div>

<div class="container-fluid">

  <form id="add_name" class="validateform">
    {{ csrf_field() }}
  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <button  class="btn btn-outline-secondary"  type="submit">Добавить</button>
    </div>
    <input type="text" name="name" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
  </div>
  </form>

<table class="table table-hover table-striped" >
  <thead>
    <tr>
      <th scope="col">Идентификатор</th>
      <th scope="col">Название</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody id="table">
  @foreach($mainGantts as $Gantt)
    <tr data-id="{{ $Gantt->id}}">
      <th scope="row">{{ $Gantt->id}}</th>
      <td><a href="/gantt/{{ $Gantt->id }}">{{ $Gantt->name}}</a></td>
      <td><button type="button" class="btn btn-outline-secondary btn-sm deleteGantt" data-id="{{ $Gantt->id }}">Удалить</button></td>
      <td><button type="button" class="btn btn-outline-secondary btn-sm">Изменить</button></td>
    </tr>
  @endforeach
  </tbody>
</table>

<br>




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

$(document).ready(function(){
    $('#add_name').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/list',
            data: $('#add_name').serialize(),
            success: function(result){
              console.log(result)
                $("#table:last-child")
                .append("<tr data-id="
                +result.tid
                +"><th>"
                +result.tid
                +"</th><td><a href='/gantt/"
                +result.tid
                +"'>"
                +result.name
                +"</a></td><td><button type='button' class='btn btn-outline-primary btn-sm deleteGantt' data-id="
                +result.tid
                +" onclick='remove(event)'>Удалить</button></td><td><button type='button' class='btn btn-outline-primary btn-sm'>Изменить</button></td></tr>");
                $('#add_name')[0].reset();
            }
        });
    });
});

$(".deleteGantt").click(remove);
</script>
