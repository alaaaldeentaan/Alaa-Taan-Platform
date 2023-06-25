@extends('admin.layouts.app')

@section('content')
  <!--                                          -------------        MAIN        --------------                                 -->
  <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>SHOW TEACHERS</h1>
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
    @foreach ($teachers as $teacher)
    <tbody>
     
      
        <tr>
        <td>{{   $teacher->id}}</td>
        <td>{{ $teacher->name }}</td>
         <td>{{ $teacher->user_Name }}</td>
        
         
          <td>{{ $teacher->email }}</td>
          <td>{{   $teacher->address}}</td>
          
      {{-- <td><a href="#"><button class="btn btn-success btn-fw">update</button></a> </td> --}}
            <td>
                <form action="{{route('admin.updateteacher',$teacher->id)}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                   class="btn btn-success btn-fw">
                    update
            </button>                       
            </form>
        </td>
          <td>
                <form action="{{route('admin.deleteteacher',$teacher->id)}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                    class="btn btn-danger">
                    Delete
            </button>                       
            </form>
        </td>
        <td> <form action="{{route('admin.block_teacher',$teacher)}}" method="POST">
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
