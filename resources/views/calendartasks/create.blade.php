@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Character</div>

                <div class="card-body">

                    <form action="{{ route('calendartask.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">Task Name</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">Task Description</label>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">Task Date</label>
                            <div class="col-md-6">
                                <input type="text" name="task_date" class="date" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Save" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
@endsection


