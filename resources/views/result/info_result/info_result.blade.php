<section class="schedule-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left-blog-pad">
                <div class="schedule-text">
                    <h4 class="st-title">World Cup 2019</h4>
                    <div class="st-table">
                        <form action="/result" method="post">
                            @csrf
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="../assets/img/club/liga_inggris/arsenal.png" alt="">
                                        <input type="hidden" name="home" value="Arsenal">
                                        <h4>Arsenal</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Wembley Stadium, London</div>
                                        <h4>
                                            <button type="submit" class="btn btn-success">Play</button>
                                        </h4>
                                        <input type="hidden" name="stadium" value="Wembley Stadium, London">
                                        <input type="hidden" name="date" value="29 August 2020">
                                        <input type="hidden" name="time" value="22:30">
                                        <div class="so-text">29 August 2020 22:30</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="../assets/img/club/liga_inggris/liverpool.png" alt="">
                                        <input type="hidden" name="away" value="Liverpool">
                                        <h4>Liverpool</h4>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>


                    <h4 class="st-title">Result</h4>
                    <div class="st-table">
                        <table>
                            <tbody>
                            @foreach($data_result as $result)
                            @if($result->skor_home > $result->skor_away)
                            <tr>
                                <td class="left-team bg-success">
                                    <img src="../assets/img/club/liga_inggris/arsenal.png" alt="">
                                    <h4>{{$result->home}}</h4>
                                    <p class="text-white" style="font-size: smaller">{{$result->player_gol_home}}</p>
                                </td>
                                <td class="st-option">
                                    <div class="so-text"><b>Matchday {{$loop->iteration}}</b>
                                        <br>{{$result->stadium}}
                                    </div>
                                    <h4>{{$result->skor_home}} : {{$result->skor_away}}</h4>
                                    <h4>WIN : LOSE</h4>
                                    <div class="so-text">{{$result->date}} {{$result->time}}</div>
                                </td>
                                <td class="right-team bg-danger">
                                    <img src="../assets/img/club/liga_inggris/liverpool.png" alt="">
                                    <h4>{{$result->away}}</h4><br>
                                    <p class="float-right text-white ml-2" style="font-size: smaller">
                                        {{$result->player_gol_away}}
                                    </p>
                                </td>
                            </tr>
                            @elseif ($result->skor_home == $result->skor_away)
                            <tr>
                                <td class="left-team bg-warning">
                                    <img src="../assets/img/club/liga_inggris/arsenal.png" alt="">
                                    <h4>{{$result->home}}</h4>
                                    <p class="text-white" style="font-size: smaller">
                                        {{$result->player_gol_home}}
                                    </p>
                                </td>
                                <td class="st-option">
                                    <div class="so-text"><b>Matchday {{$loop->iteration}}</b><br>
                                        {{$result->stadium}}
                                    </div>
                                    <h4>{{$result->skor_home}} : {{$result->skor_away}}</h4>
                                    <h4>DRAW</h4>
                                    <div class="so-text">{{$result->date}} {{$result->time}}</div>
                                </td>
                                <td class="right-team bg-warning">
                                    <img src="../assets/img/club/liga_inggris/liverpool.png" alt="">
                                    <h4>{{$result->away}}</h4>
                                    <p class="text-white float-right" style="font-size: smaller">
                                        {{$result->player_gol_away}}
                                    </p>
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td class="left-team bg-danger">
                                    <img src="../assets/img/club/liga_inggris/arsenal.png" alt="">
                                    <h4>{{$result->home}}</h4>
                                    <p class="text-white" style="font-size: smaller">
                                        {{$result->player_gol_home}}
                                    </p>
                                </td>
                                <td class="st-option">
                                    <div class="so-text"><b>Matchday {{$loop->iteration}}</b><br>
                                        {{$result->stadium}}
                                    </div>
                                    <h4>{{$result->skor_home}} : {{$result->skor_away}}</h4>
                                    <h4>LOSE : WIN</h4>
                                    <div class="so-text">{{$result->date}} {{$result->time}}</div>
                                </td>
                                <td class="right-team bg-success">
                                    <img src="../assets/img/club/liga_inggris/liverpool.png" alt="">
                                    <h4>{{$result->away}}</h4>
                                    <p class="text-white float-right" style="font-size: smaller">
                                        {{$result->player_gol_away}}
                                    </p>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $data_result->links() }}
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="schedule-sidebar">
                    <div class="ss-widget">
                        <div class="section-title sidebar-title">
                            <h5>Table</h5>
                        </div>
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Club</th>
                                <th scope="col">Play</th>
                                <th scope="col">Pts</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data_standing as $standing)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$standing->club}}</td>
                                <td>{{$standing->played}}</td>
                                <td>{{$standing->points}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="ss-league">
                        <div class="section-title sidebar-title">
                            <h5>Top Leagues</h5>
                        </div>
                        <a href="#" class="sl-item">
                            <img src="../assets/img/flag/flag-1.jpg" alt="">
                            <span>Afghanis</span>
                        </a>
                        <a href="#" class="sl-item">
                            <img src="../assets/img/flag/flag-2.jpg" alt="">
                            <span>Australia</span>
                        </a>
                        <a href="#" class="sl-item">
                            <img src="../assets/img/flag/flag-3.jpg" alt="">
                            <span>Qatar</span>
                        </a>
                        <a href="#" class="sl-item">
                            <img src="../assets/img/flag/flag-4.jpg" alt="">
                            <span>Cambodia</span>
                        </a>
                        <a href="#" class="sl-item">
                            <img src="../assets/img/flag/flag-5.jpg" alt="">
                            <span>Uzbekistan</span>
                        </a>
                    </div>
                    <div class="ss-widget other-sport">
                        <div class="section-title sidebar-title">
                            <h5>Other Sport</h5>
                        </div>
                        <ul>
                            <li><a href="#">American Football</a></li>
                            <li><a href="#">Athletics</a></li>
                            <li><a href="#">Aussie Rules</a></li>
                            <li><a href="#">Baseball</a></li>
                            <li><a href="#">Basketball</a></li>
                            <li><a href="#">Beach Soccer</a></li>
                            <li><a href="#">Beachvolleyball</a></li>
                            <li><a href="#">Badminton</a></li>
                            <li><a href="#">Boxing</a></li>
                            <li><a href="#">Cycling</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
