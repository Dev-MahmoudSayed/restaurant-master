<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.inc.admincss')
</head>
<body>
    @include('admin.inc.navbar')
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
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- @include('inc.success') --}}
                @if(Session::has('message'))
                <p class="alert alert-danger">{{ Session::get('message') }}</p>
                @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col"> Name</th>
                    <th scope="col"> Email</th>
                    <th scope="col"> phone</th>
                    <th scope="col"> message</th>
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$row->name}}</td>
                           <td>{{$row->email}}</td>
                           <td>{{$row->phone}}</td>
                           <td>{{$row->message}}</td>
                           <td>
                                 
                           <a href="{{url('deleteCon',$row->id)}}" type="submit" class="btn btn-danger">Delete <i class="fas fa-user-minus"></i></a>
                            
                            </td>
                            
                        </tr>
        
                    @endforeach
                </tbody>
                </table>
    
               
            </div>
        </div>
    </div>
    @include('admin.inc.adminjs')
</body>
</html>