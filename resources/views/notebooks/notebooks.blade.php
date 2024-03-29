@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Notebooks
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('notebooks.add')}}" role="button">
                        New NoteBook +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->
                @foreach($notebooks as $notebook)
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="{{route('notes.all', $notebook->id)}}">
                                <h4 class="card-title">
                                    {{ $notebook->title }}
                                </h4>
                            </a>
                        </div>
                        <a href="#">
                            <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                        </a>
                        <div class="card-block">
                            <a class="card-link" href="{{route('notebooks.edit', $notebook->id)}}">
                                Edit Notebook
                            </a>
                            <form action="{{route('notebooks.delete', $notebook->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
           

@endsection
