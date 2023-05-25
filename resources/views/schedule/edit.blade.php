<!DOCTYPE html>
<html>
<head>
    <title>Edit schedule</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Schedule for {{ $schedule->residential_area }}</div>
                <div class="card-body">
                    <form action="/schedules/{{ $schedule->id }}/update" method="post" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="day">Day:</label>
                            <input type="date" class="form-control" id="day" name="day" value="{{ $schedule->day}}">
                            @error('day')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="startTime">Start Time:</label>
                            <input type="time" class="form-control" id="startTime" name="startTime" min="00:00"
                                   max="23:59" value="{{ $schedule->startTime}}">
                            @error('startTime')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="endTime">End Time:</label>
                            <input type="time" class="form-control" id="endTime" name="endTime" min="00:00" max="23:59"
                                   value="{{ $schedule->endTime}}">
                            @error('endTime')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="residential_area"
                                   value="{{ $schedule->residential_area}}">
                            @error('residential_area')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="area">Residential section:</label>
                            <input type="text" class="form-control" id="area" name="residential_section"
                                   value="{{ $schedule->residential_section}}">
                            @error('residential_section')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason:</label>
                            <input type="text" class="form-control" id="reason" name="reason"    value="{{ $schedule->reason}}">
                            @error('reason')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
