@extends('layouts.nav')

@section('content')

    <div class="album py-5 bg-light">
        <div class="container">

        <h1> CAKES </h1>

        <h3> 
            <a class="cake-links active"  href="/occassional"><strong>Occassional</strong></a>
            
            <!-- <a class="cake-links" href="/customize"><strong>Customize Cakes</strong></a>
            <a class="cake-links" href="/birthday"><strong>Birthday</strong></a> -->
</h3>

            <div class="card mb-4 box-shadow">
            </div>

            <!-- <div class="col-md-4">  -->
              <table>  
                @foreach($test as $cake) 
                <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="col-md-4">   -->
                <tr class="col-md-4"> 
                  <td>                   
                  <img src="{{ $cake->image }}"
                  alt="ID Logo" 
                draggable="false"
                height="300" width="250"/>
                <p style="text-align:center">{{$cake->premade_cake_name}} 
              <!-- </br> with Donut Munchkins -->
            </p>
                
              <p style="text-align:center"> ${{$cake->price}}</p>

              <div style="text-align:center">
              <form action="{{url('add_cart', $cake->id)}}" method="Post">
                @csrf
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" value="Add To Cart">
              </form>
            </td>
</tr></div>
                @endforeach
</table>
                <!-- </div> -->
              
              </div>
</div>
            
@endsection
