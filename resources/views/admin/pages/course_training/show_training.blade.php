{{-- @dd($courses) --}}
@extends('admin.layouts.app')

@section('content')
  <!--                                      
"id": 1,
"description": "this course is a web design  i will learn how to become good student in this course in programming",
"count_episod": 22,
"price": "25",
"duration": "12:38:35",
"img": "images/Course_Traning/photo/O2.jfif",
"aproved": 0,
"created_at": null,
"updated_at": null,
"teacher_id": 3,
"category__course_id": 1
    -------------        MAIN        --------------                                 -->
  <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Show Courses Training</h1>
        </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                                <table class="table" >
                                
                                    <thead>
                                    
                                        <tr>
                                        {{-- <td>Id</td> --}}
                                        <td>description</td>
                                        <td>count episod</td>
                                
                                        <td>price</td>
                                        
                                        <td>duration</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                </thead>
                                @foreach ($courses as $course)
                                <tbody>
                                
                                
                                    <tr>
                                    {{-- <td>{{   $course->id}}</td> --}}

                                    <td>{{ $course->description }}</td>
                                    <td>{{ $course->count_episod }}</td>
                                    
                                    
                                    <td>{{ $course->price }}</td>
                                    <td>{{   $course->duration}}</td>
                                    
                                {{-- <td><a href="#"><button class="btn btn-success btn-fw">update</button></a> </td> --}}
                                        <td>
                                            <form action="{{route('admin.detailtraining',$course->id)}}" method="POST">
                                            @csrf
                                            @method('POST')
                                        <button type="submit"
                                            class="btn btn-success btn-fw">
                                                update
                                        </button>                       
                                        </form>
                                    </td>
                                    <td>
                                            <form action="{{route('admin.deleteTraining',$course->id)}}" method="POST">
                                            @csrf
                                            @method('POST')
                                        <button type="submit"
                                                class="btn btn-danger">
                                                Delete
                                        </button>                       
                                        </form>
                                    </td>
                                    <td> <form action="{{route('admin.block_teacher',$course)}}" method="POST">
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
