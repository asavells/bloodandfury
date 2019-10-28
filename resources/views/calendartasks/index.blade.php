@extends('layouts.app')

@section('content')
<div class="parallax">
</div>
<div class="container">
    <h1>Calendar</h1>
    <div id='calendar' style="width: 1000px"></div>
</div>
@endsection

@section('scripts')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->name }}',
                    start : '{{ $task->task_date }}',
                    url : '{{ route('calendartask.edit', $task->id) }}'
                },
                @endforeach
            ]
        })
    });
</script>

@endsection
