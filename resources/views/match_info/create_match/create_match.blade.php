<!-- Club Section Begin -->
<section class="club-section spad">
    <div class="container">

        <div class="section-title sidebar-title">
            <h5>Create Match</h5>
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

        <form action="/match-create" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5 mb-3">
                    <h4 class="text-center">Home</h4>
                </div>
                <div class="col-md-2 mb-3">
                    <h4 class="text-center">VS</h4>
                </div>
                <div class="col-md-5 mb-3">
                    <h4 class="text-center">Away</h4>
                </div>

                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text text-white bg-success"
                                   for="inputGroupSelect01">Home</label>
                        </div>
                        <select class="custom-select" id="home" name="home">
                            <option selected>Choose...</option>
                            @foreach($clubs  as $club)
                                <option value="{{$club->id}}">{{$club->club_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <button type="submit" class="btn btn-outline-success">Play</button>
                </div>
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <select class="custom-select" id="away" name="away">
                            <option selected>Choose...</option>
                            @foreach($clubs  as $club)
                                <option value="{{$club->id ?? ''}}">{{$club->club_name ?? ''}}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text text-white bg-danger"
                                   for="inputGroupSelect02">Away</label>
                        </div>
                    </div>
                </div>


                <div class="col-md-5 mb-3">

                    @if($player_home ?? '')
                        @foreach($player_home as $ph)
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 50px">{{$ph->number}}</span>
                                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 50px">{{$ph->position}}</span>
                                </div>
                                <input type="text" class="form-control" value="{{$ph->name_player}}">
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-2 mb-3">
                    <h4 class="text-center">-</h4>
                </div>
                <div class="col-md-5 mb-3">
                    @if($player_away ?? '')
                        @foreach($player_away as $py)
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 50px">{{$py->number}}</span>
                                    <span class="input-group-text" id="inputGroup-sizing-sm" style="width: 50px">{{$py->position}}</span>
                                </div>
                                <input type="text" class="form-control" value="{{$py->name_player}}">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Club Section End -->


