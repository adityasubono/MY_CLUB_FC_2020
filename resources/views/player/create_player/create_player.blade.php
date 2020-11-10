<!-- Club Section Begin -->
<section class="club-section spad">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="section-title sidebar-title">
                    <h5>Create Player {{$club->club_name}}</h5>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                <form action="/player-store" method="post">
                    @method('post')
                    @csrf

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="club_id" name="club_id"
                               value="{{$club->id}}">
                    </div>

                    <div class="form-group">
                        <label for="name_player">Name Player</label>
                        <input type="text" class="form-control" id="name_player" name="name_player"
                               placeholder="Example : Jhon Allan">
                    </div>

                    <div class="form-group">
                        <label for="dob">DOB</label>
                        <input type="date" class="form-control" id="dob" name="dob">
                    </div>

                    <div class="form-group">
                        <label for="continent_id">Select Continent</label>
                        <select class="form-control" id="continent_id" name="continent_id">
                            <option selected>-- Choose Continent --</option>
                            @foreach($continent as $key => $name_continent)
                                <option value="{{$key}}">{{$name_continent}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="country_id">Select Country</label>
                        <select class="form-control" id="country_id" name="country_id">
                            <option selected>-- Choose Country --</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="number_player">Number Player</label>
                        <input type="number" class="form-control" id="number_player" name="number_player"
                               placeholder="Example : 10">
                    </div>

                    <div class="form-group">
                        <label for="position_id">Position Area</label>
                        <select class="form-control" id="position_id" name="position_id">
                            <option selected>-- Choose Position Area --</option>
                            @foreach($position as $key => $position_area)
                                <option value="{{$key}}">{{$position_area}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="position_code">Select Position Code</label>
                        <select class="form-control" id="position_code" name="position_code">
                            <option selected>-- Choose Position Code--</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="height">Height Player (cm)</label>
                        <input type="number" class="form-control" id="height" name="height"
                               placeholder="Example : 10">
                    </div>

                    <div class="form-group">
                        <label for="weight">Weight Player (kg)</label>
                        <input type="number" class="form-control" id="weight" name="weight"
                               placeholder="Example : 10">
                    </div>

                    <div class="form-group">
                        <label for="stronger_foot">Stronger Foot</label>
                        <select class="form-control" id="stronger_foot" name="stronger_foot">
                            <option selected>-- Choose Stronger Foot --</option>
                            <option value="Left">Left Foot</option>
                            <option value="Right">Right Foot</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-sm-8">
                <div class="section-title sidebar-title">
                    <h5>Table Player </h5>
                </div>

                @foreach($players as $player)

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning" style="width: 50px">{{$player->number}}</span>
                        </div>
                        <input type="text"
                               class="form-control"
                               value="{{$player->name_player}}">
                        <div class="input-group-append">
                            <span class="input-group-text bg-info" style="width: 50px">{{$player->position}}</span>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </div>
    <script type=text/javascript>

        $(function () {
            var timeout = 3000; // in miliseconds (3*1000)
            $('.alert').delay(timeout).fadeOut(300);
        });

        $('#continent_id').change(function () {
            var continentID = $(this).val();
            if (continentID) {
                $.ajax({
                    type: "GET",
                    url: "{{url('get-country')}}?continent_id=" + continentID,
                    success: function (res) {
                        if (res) {
                            $("#country_id").empty();
                            $("#country_id").append('<option>Select</option>');
                            $.each(res, function (key, value) {
                                $("#country_id").append('<option value="' + key + '">' + value + '</option>');
                            });

                        } else {
                            $("#state").empty();
                        }
                    }
                });
            }
        });

        $('#position_id').change(function () {
            var positionID = $(this).val();
            if (positionID) {
                $.ajax({
                    type: "GET",
                    url: "{{url('get-position-code')}}?position_id=" + positionID,
                    success: function (res) {
                        if (res) {
                            $("#position_code").empty();
                            $("#position_code").append('<option>Select</option>');
                            $.each(res, function (key, value) {
                                $("#position_code").append('<option value="' + key + '">' + value + '</option>');
                            });

                        } else {
                            $("#position_code").empty();
                        }
                    }
                });
            }
        });
    </script>
</section>

<!-- Club Section End -->


