@extends('admin.layouts.app')

@section('content')
  <!--                                          -------------         MAIN        --------------                                 -->
  <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>SHOW Students</h1>
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
            <td></td>
            <td>Name</td>
    
            <td>Email</td>
            
            <td>Address</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
    </thead>
    @foreach ($students as $student)
    <tbody>
     
      
        <tr>
        <td>{{   $student->id}}</td>
        <td>{{ $student->first_name }}</td>
         <td>{{ $student->last_name }}</td>
        
         
          <td>{{ $student->email }}</td>
          <td>{{   $student->user_name}}</td>
          
      {{-- <td><a href="{{route('admin.updatestudent' , $student->id )}}"><button class="btn btn-success btn-fw">update</button></a> </td> --}}
            <td>
                <form action="{{route('admin.updatestudent' , $student->id )}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                    class="btn btn-success btn-fw">
                    update
            </button>                       
            </form>
        </td>
          <td>
                <form action="{{  route('admin.deletestudent' , $student->id)}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                    class="btn btn-danger">
                    Delete
            </button>                       
            </form>
        </td>
        <td> <form action="" method="POST">
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
