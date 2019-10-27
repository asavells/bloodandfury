@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Character</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('character.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Character Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class_type" class="col-md-4 col-form-label text-md-right">Character Class</label>

                            <div class="col-md-6">
                                <select class="form-control" id="class_type" name="class_type">
                                    @foreach ($class_types as $class_type)
                                        <option id="class_type" value="{{ $class_type }}">{{ $class_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">Character Level</label>

                            <div class="col-md-6">
                                <input id="level" type="number" class="form-control" name="level" required autocomplete="level" min="0" max="60">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="is_main" class="col-md-4 col-form-label text-md-right">Character is Main</label>

                            <div class="col-md-6">
                                <input id="is_main" type="checkbox" class="form-control" name="is_main" required autocomplete="is_main">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">Raid Assignment</label>

                            <div class="col-md-6">
                                <select class="form-control" id="raid_team" name="raid_team">
                                    @foreach ($raid_assignments as $raid_assignment)
                                        <option id="raid_team" value="{{ $raid_assignment }}">{{ $raid_assignment }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Character
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
