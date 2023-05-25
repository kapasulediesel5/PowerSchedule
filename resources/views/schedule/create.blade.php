<!DOCTYPE html>
<html>
<head>
    <title>Create schedule</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
</head>
<body>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create Schedule </div>
                <div class="card-body">
                    <form  method="POST" action="/schedules">
                        @csrf
                        <div class="form-group">
                            <label for="day">Day:</label>
                            <input type="date" class="form-control" id="day" name="day" value="{{old('day')}}">
                            @error('day')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="startTime">Start Time:</label>
                            <input type="time" class="form-control" id="startTime" name="startTime" min="00:00" max="23:59"value="{{old('startTime')}}" >
                            @error('startTime')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="endTime">End Time:</label>
                            <input type="time" class="form-control" id="endTime" name="endTime" min="00:00" max="23:59" value="{{old('endTime')}}" >
                            @error('endTime')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="residential_area" value="{{old('residential_area')}}">
                            @error('residential_area')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="area">Residential section:</label>
                            <input type="text" class="form-control" id="area" name="residential_section" value="{{old('residential_section')}}" >
                            @error('residential_section')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason:</label>
                            <input type="text" class="form-control" id="reason" name="reason" value="{{old('reason')}}" >
                            @error('reason')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
