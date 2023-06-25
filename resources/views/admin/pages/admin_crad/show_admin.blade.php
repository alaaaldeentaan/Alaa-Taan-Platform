@extends('admin.layouts.app')

@section('content')
  <!--                                          -------------        MAIN        --------------                                 -->
  <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>SHOW Admin</h1>
        </div>
        @if (session('success'))
           <div class="alert alert-success">
             {{ session('success') }}
           </div>
        @endif
       <table class="table" >
       
         <thead>
           
            <tr >
            <td>Id</td>
            <td>Name</td>
    
            <td>user name</td>
            
            <td>Email</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
    </thead>
    @foreach ($admins as $admin)
    <tbody>
     
      
        <tr>
        <td>{{ $admin->id}}</td>
        <td>{{ $admin->name }}</td>
         <td>{{ $admin->user_Name }}</td>
          <td>{{ $admin->email }}</td>
          
      {{-- <td><a href="#"><button class="btn btn-success btn-fw">update</button></a> </td> --}}
            <td>
                <form action="{{route('admin.updateAdmin',$admin->id)}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                   class="btn btn-success btn-fw">
                    update
            </button>                       
            </form>
        </td>
          <td>
                <form action="{{route('admin.deleteAdmin',$admin->id)}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                    class="btn btn-danger">
                    Delete
            </button>                       
            </form>
        </td>
        <td> <form action="{{route('admin.block_teacher',$admin)}}" method="POST">
            @csrf
            @method('PUT')
        <button type="submit"
                class="btn btn-warning btn-fw">
                Block
        </button>                       
    </form></td>    
      </tr>
        
    </tr>
   @endforeach
</tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--                                          -------------        END MAIN        --------------                                 -->

@endsection
