<base href="/public" >
<!-- Team Section -->
<div id="team" class="text-center">
    <div class="overlay">
        <div  class="container">
            <div style="background-color:greenyellow , color:black;" class="col-md-10 col-md-offset-1  ">
                <h2>Meet Our Chefs</h2>
                <hr>
                
            </div>
        
            <div id="row">
                @foreach ($data2 as $row2)
                <div class="col-md-4 team">
                    <div class="thumbnail">
                        <div class="team-img"><img  src="chefImage/{{$row2->image}}" alt="..."></div>
                        <div class="caption">
                        <h3>{{$row2->name}}</h3>
                        <p>{{$row2->special}}</p>
                        </div>
                    </div>
                </div>
              
                @endforeach
            </div>
        </div>
    </div>
</div>
