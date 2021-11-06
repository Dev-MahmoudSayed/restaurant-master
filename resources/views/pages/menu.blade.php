
<div id="restaurant-menu" >
    <div class="section-title text-center center m">
        <div class="overlay">
            <h2>Menu</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div> 

    <div class="container-fluid">
        <div class="row">
          @foreach ($data as $data)
          <form action="{{url('/addCard/',$data->id)}}" method="post">
            @csrf
            
             <div class="col-md-3">
                <div class="card m-5 pb-3" style="">
                    <img height="200" width="200" src="{{ asset('/foodimage/'.$data->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                    <h5 class="card-title">{{$data->title}}</h5>
                    <p class="card-text">
                        {{Str::limit($data->description,25)}}
                    </p>
                    <div style="margin: 1em">
                    <a style="" class="btn btn-info"> Price: {{$data->price}}$</a>
                    
                    <input type="number" name="quantity" min="1" value="1" style="width:80px;">
                    <a  class="btn btn-danger" type="submit"  value="add card" >add cart</a>
                    
                    </div>

                    </div>
                
                </div>
               </div>
            </form>
           @endforeach
           
        </div>
        
        


  
             
</div>