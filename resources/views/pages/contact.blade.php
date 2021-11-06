<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
    <div class="container">
        <h2>Want to make a reservation? Call <strong>1-887-654-3210</strong></h2>
    </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="container">
        <div style="background-color:greenyellow , color:black;"  class=" text-center">
            <h2>Reservation Form</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
        <div class="col-md-10 col-md-offset-1">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        <form class="p-4 m-3 border bg-gradient-info" method="post" action="{{url('conFact')}}" >
            @csrf
            <div class="form-group">
                <label for="cat">name</label>
            <input type="text" class="form-control" id="cat" name="name" value="" >
            </div>
            <div class="form-group">
                <label for="cat">email</label>
                <input type="email" class="form-control" id="cat" name="email" value="" >
            </div>

            <div>
                <label for="formFileLg" class="form-label">phone</label>
                <input class="form-control form-control-lg" name="phone" value="" type="number">
              </div>

              <div class="form-floating">
                <label for="floatingTextarea2">message</label>
                <textarea class="form-control"  name="message"  value="" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>

            <button type="submit" name="submit"  class="btn btn-success mt-3">
                <i class="bi bi-reply-all-fill"></i> Submit
             </button>
        </form>
      
    </div>
</div>
</div>
