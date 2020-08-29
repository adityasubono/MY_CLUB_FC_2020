<link rel="stylesheet" type="text/css" href="../assets/styles/continent/style_continent.css">
<section class="club-section spad">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-title sidebar-title">
                    <h5>Insert Country</h5>
                </div>
                <form action="/country" method="post">
                    @method('post')
                    @csrf
                    <div class="form-group row">
                        <label for="continent_id" class="col-sm-2 col-lg-3 col-form-label">Select Continent</label>
                        <div class="col-sm-10 col-lg-9">
                            <select class="form-control" id="continent_id" name="country[0][continent_id]">
                                <option selected disabled>--Choose Continent--</option>
                                @foreach($dataContinent as $continent)
                                <option value="{{$continent->id}}">{{$continent->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-lg-3 col-form-label">Name Country</label>
                        <div class="col-sm-10 col-lg-6">
                            <input type="text" class="form-control" id="country" name="country[0][name]">
                        </div>
                        <div class="col-sm-10 col-lg-3">
                            <button type="button"
                                    class="btn btn-danger btn-icon-split float-right"
                                    id="btn-reset-form">
                                <span class="icon text-white">
                                <i class="fa fa-refresh"></i>
                            </span>
                                <span class="text text-white"></span>
                            </button>

                            <button type="button"
                                    class="btn btn-primary btn-icon-split float-right"
                                    id="add_country">
                                <span class="icon text-white">
                                <i class="fa fa-plus-circle"></i>
                                </span>
                                <span class="text text-white"></span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="jumlah-form" value="0">
                    <div id="country_form"></div>


                    <div class="form-group row">
                        <label for="continent" class="col-sm-2 col-lg-3 col-form-label"></label>
                        <div class="col-sm-10 col-lg-9">
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-12 col-lg-6 col-xl-6">
                <div class="section-title sidebar-title">
                    <h5>Table Country</h5>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active"
                           id="home-tab"
                           data-toggle="tab"
                           href="#asia"
                           role="tab"
                           aria-controls="home"
                           aria-selected="true">Asia
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link"
                           id="profile-tab"
                           data-toggle="tab"
                           href="#africa"
                           role="tab"
                           aria-controls="profile"
                           aria-selected="false">Africa</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link"
                           id="contact-tab"
                           data-toggle="tab"
                           href="#europa"
                           role="tab"
                           aria-controls="contact"
                           aria-selected="false">Europa</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link"
                           id="contact-tab"
                           data-toggle="tab"
                           href="#america"
                           role="tab"
                           aria-controls="contact"
                           aria-selected="false">America</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link"
                           id="contact-tab"
                           data-toggle="tab"
                           href="#australia"
                           role="tab"
                           aria-controls="contact"
                           aria-selected="false">Australia</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active"
                         id="asia"
                         role="tabpanel"
                         aria-labelledby="home-tab">
                        <h3>Asia</h3>
                        @include('country.info_country.asia')
                    </div>

                    <div class="tab-pane fade"
                         id="africa"
                         role="tabpanel"
                         aria-labelledby="profile-tab">
                        <h3>Africa</h3>
                        @include('country.info_country.africa')
                    </div>

                    <div class="tab-pane fade"
                         id="europa"
                         role="tabpanel"
                         aria-labelledby="contact-tab">
                        <h3>Europa</h3>
                        @include('country.info_country.europa')
                    </div>
                    <div class="tab-pane fade"
                         id="america"
                         role="tabpanel"
                         aria-labelledby="contact-tab">
                        <h3>America</h3>
                        @include('country.info_country.america')
                    </div>

                    <div class="tab-pane fade"
                         id="australia"
                         role="tabpanel"
                         aria-labelledby="contact-tab">
                        <h3>Australia</h3>
                        @include('country.info_country.australia')
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/form/country.js"></script>

