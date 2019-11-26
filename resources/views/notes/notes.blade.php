@extends('layouts.master')

@section('main')

            <!-- Main component for call to action -->
            <div class="container">
                <h1 class="pull-xs-left">
                    Notes
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('notes.add', $id)}}" role="button">
                        New Note +
                    </a>
                </div>
                <div class="clearfix">
                </div>
                <!--============= notes=========== -->
                <div class="list-group notes-group">
                    @foreach ($notes as $note)

                    <!--note1 -->
                    <div class="card card-block">
                        <a href="{{route('notes.details', $note->id)}}">
                            <h4 class="card-title">
                                {{$note->title}}
                            </h4>
                        </a>
                        <p class="card-text">
                            {{$note->body}}
                        </p>
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.update', [$note->id, $id])}}">
                            Edit
                        </a>
                        <form action="{{route('notes.delete', [$note->id, $id])}}" class="pull-xs-right" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                            
                            
                        </form>
                    </div>
                    @endforeach
                    
                </div>
            </div>

@endsection