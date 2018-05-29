<!DOCTYPE html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="container-fluid">
<h1>Список задач</h1>
<div>
<br>
<br>

<div class="container-fluid">

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
      <td><button type="button" class="btn btn-outline-primary btn-sm deleteGantt" data-id="{{ $Gantt->id }}">Удалить</button></td>
      <td><button type="button" class="btn btn-outline-primary btn-sm">Изменить</button></td>
    </tr>
  @endforeach
  </tbody>
</table>

<br>


<form id="add_name" class="validateform">
  {{ csrf_field() }}
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <button  class="btn btn-outline-primary"  type="submit">Добавить</button>
  </div>
  <input type="text" name="name" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
</div>
</form>

</div>

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
