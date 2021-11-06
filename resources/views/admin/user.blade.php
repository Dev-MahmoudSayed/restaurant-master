<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.inc.admincss')
</head>
<body>
    @include('admin.inc.navbar')
    <div class="jumbotron p-2 m-4">
        <h3 class=""> 
        <a class="btn btn-success btn-lg" href="{{url('')}}" role="button">Add New User </a>
        </h3>
    </div>
    <h1 class=" p-3 border display-4">  All Users  </h1>
    
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
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$row->name}}</td>
                           <td>{{$row->email}}</td>
                           <td>
                                 @if ($row->usertype=="0")
                           <a href="{{url('deleteUser',$row->id)}}" type="submit" class="btn btn-danger">Delete <i class="fas fa-user-minus"></i></a>
                                @else
                                <a type="submit" class="btn btn-warning">Not Allow <i class="fas fa-ban"></i></a>
                                @endif
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