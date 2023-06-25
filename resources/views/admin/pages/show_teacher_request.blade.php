@extends('admin.layouts.app')

@section('content')
  <!--                                          -------------         MAIN        --------------                                 -->
  <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Show Request Teachers</h1>
        </div>
        @if (session('success'))
           <div class="alert alert-success">
             {{ session('success') }}
           </div>
        @endif
      @if(!$teachers->isEmpty())
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
        <td>{{$teacher->id}}</td>
        <td>{{ $teacher->name }}</td>
         <td>{{ $teacher->user_Name }}</td>
        
         
          <td>{{ $teacher->email }}</td>
          <td>{{   $teacher->address}}</td>
          
           {{-- <td><a href="{{route('admin.accept')}}"><button class="btn btn-success btn-fw">Accept</button></a> </td> --}}
            <td>
                <form action="{{route('admin.accept',$teacher->id)}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                    class="btn btn-success btn-fw">
                    Accept
            </button>                       
            </form>
        </td>    
         <td>
                <form action="{{route('admin.unaccept',$teacher->id)}}" method="POST">
                @csrf
                @method('POST')
            <button type="submit"
                    class="btn btn-danger">
                    Delete
            </button>                       
            </form>
        </td>    
      </tr>
        
    </tr>
   @endforeach
</tbody>
@else
  <h2> No Request Teacher Yet</h2>
@endif
</table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--                                          -------------        END MAIN        --------------                                 -->

@endsection
