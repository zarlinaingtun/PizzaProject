
@extends("layout.layout")
@section("content")


  <div class="container">
  {{-- accept data as variable
  <h1>{{$key}}</h1> --}}
  {{-- <h2>{{$pizzas[0]['username']}}</h2> --}}
  @if(Session("Delete"))
  <h2 class="alert alert-danger my-3">{{Session("Delete")}}</h2>
  @endif
  @if(Session("updatesuccess"))
  {{-- <div class="alert alert-success my-3" >{{Session("updatesuccess")}}</div> --}}
  <div id="updatesuccess" data="{{Session("updatesuccess")}}"></div>
  @endif
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Username</th>
            <th scope="col">Pizza Name</th>
            <th scope="col">Toppings</th>
            <th scope="col">Sauce</th>
            <th scope="col">Price</th>
            <th scope="col">Edit Order</th>
            <th scope="col">Order Complete</th>
          </tr>
        </thead>
        <tbody>
        {{-- got data from controller as variable pizzas
        $pizzas=[
            ["id"=>1,"username"=>"mgmg","pizza_name"=>"chessy pizza","topping"=>"salad","sauce"=>"tomato","price"=>9.99],
            ["id"=>2,"username"=>"mama","pizza_name"=>"spicy pizza","topping"=>"salad","sauce"=>"tomato","price"=>8.99]
        ];--}}
        @foreach ($pizzas as $pizza)
          <tr>
            <th scope="row">{{$pizza["id"]}}</th>
            <td>{{$pizza->username}}</td>
            <td>{{$pizza["pizza_name"]}}</td>
            <td>{{$pizza["topping"]}}</td>
            <td>{{$pizza["sauce"]}}</td>
            <td>{{$pizza["price"]}}$</td>
            <td><a class="btn btn-warning btn-sm" href="{{route('edit',$pizza->id)}}">Edit Order</a></td>
            <td><a class="btn btn-success btn-sm" href="{{route("delete",$pizza->id)}}" href={{url("/pizzas/$pizza->id")}}>Complete Order</a></td>
            {{-- OR =><td><a class="btn btn-success btn-sm" href={{url("/pizzas/$pizza->id")}}>Complete Order</a></td> --}}
          </tr>

  {{-- //modal --}}
  {{-- <div class="modal" tabindex="-1" role="dialog" id="mymodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>{{$pizza->id}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div> --}}
</div>
        @endforeach
        </tbody>
      </table>
      
</div>


  </div>
<script type="text/javascript">
const alert=document.querySelector('#updatesuccess');
if(alert!=null){
  const data=alert.getAttribute('data');
  const myalert=window.alert(data);
  
  alert.innerText=myalert;
}

</script>
@endsection
