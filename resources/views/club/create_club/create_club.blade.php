<!-- Club Section Begin -->
<section class="club-section spad">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="section-title sidebar-title">
                    <h5>Create Club Football Lover</h5>
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


                <form action="/club/create" method="post">
                    @method('post')
                    @csrf

                    <div class="form-group">
                        <label for="club_name">Club Name</label>
                        <input type="text" class="form-control" id="club_name" name="club_name"
                               placeholder="Example : Arsenal FC">
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
                        <label for="stadium">Stadium</label>
                        <input type="text" class="form-control" id="stadium" name="stadium"
                               placeholder="Example : Emirates Stadium">
                    </div>

                    <div class="form-group">
                        <label for="information_club">Information Club</label>
                        <textarea class="form-control" id="information_club" name="information_club"
                                  rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-sm-8">
                <div class="section-title sidebar-title">
                    <h5>Table Club</h5>
                </div>
                <table class="table table-bordered table-sm table-striped">
                    <thead class="bg-success">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name Club</th>
                        <th scope="col">Stadium</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clubs as $club)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$club->club_name}}</td>
                            <td>{{$club->stadium}}</td>
                            <td>
                                <a href="/player-create/{{$club->id}}"
                                   class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fa fa-list-alt"></i>
                                    </span>
                                </a>

                                <button class="btn btn-warning btn-icon-split"
                                        data-toggle="modal"
                                        data-target="#update{{$club->id}}"
                                        data-backdrop="static"
                                        data-keyboard="false">
                                    <span class="icon text-white-50">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                </button>

                                <button class="btn btn-danger btn-icon-split"
                                        data-toggle="modal"
                                        data-target="#delete{{$club->id}}"
                                        data-backdrop="static"
                                        data-keyboard="false">
                                     <span class="icon text-white-50">
                                         <i class="fa fa-trash"></i>
                                     </span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
    </script>
</section>

<!-- Club Section End -->


