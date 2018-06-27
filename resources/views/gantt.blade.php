<!DOCTYPE html>
<head>




    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <meta name="description" content="">
              <meta name="author" content="">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

              <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
              <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


              <!-- Bootstrap core CSS -->
              <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

              <!-- Custom styles for this template -->
              <link href="{{ asset('/css/simple-sidebar.css')}}" rel="stylesheet">
    <style type="text/css">
        html, body{
            height:100%;
            padding:0px;
            margin:0px;
            overflow: hidden;
        }

        .btn {
          font-size: 0.7rem;
          padding: 5px;

        }

        .btn-secondary {
    color: #6c757d;
    background-color: #fff;
    border-color: #fff;
    width: 25px;
    height: 25px;
}
.buttonnav {
    padding: 5px;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
    margin-bottom: 10px;

}
    </style>
</head>
<body>
  <div id="wrapper">

  <!-- Sidebar -->
  @include('layouts.nav')
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper" style='padding: 0px;  z-index:4; '>

  @include('layouts.navbutton')
</div>
</div>

<div  id="gantt_here" style='width:100%; height:100%;'></div>


<script src="{{ asset('/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
<script type="text/javascript">
    gantt.config.xml_date = "%Y-%m-%d %H:%i:%s";

    gantt.config.order_branch = true;
    gantt.config.order_branch_free = true;

    gantt.init("gantt_here");
    gantt.load("/api/data/{{ $id }}");

    var dp = new gantt.dataProcessor("/api/gantt/{{ $id }}");
    dp.init(gantt);
    dp.setTransactionMode("REST");
</script>

</body>
