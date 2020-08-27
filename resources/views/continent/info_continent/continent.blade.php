<!-- Club Section Begin -->
<!-- DataTables -->


<!-- jQuery -->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
<!--<script src="//code.jquery.com/jquery.js"></script>-->
<!-- DataTables -->
<!--<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>-->

<!--<script type="text/javascript" src="../assets/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>-->
<!--<script type="text/javascript" src="../assets/DataTables-1.10.21/css/dataTables.bootstrap4.css"></script>-->
<!--<script type="text/javascript" src="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></script>-->
<!--<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>-->
<!--<script type="text/javascript" src="../assets/datatables/dataTables.bootstrap4.js"></script>-->


<link rel="stylesheet" type="text/css" href="../assets/styles/continent/style_continent.css">
<section class="club-section spad">
    <div class="container">

        <div class="row">
            <div class="col-sm-10 col-lg-6 col-xl-6">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <form action="/continent" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="continent" class="col-sm-2 col-lg-3 col-form-label">Name Continent</label>
                        <div class="col-sm-10 col-lg-9">
                            <input type="text" class="form-control" id="continent" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="continent" class="col-sm-2 col-lg-3 col-form-label"></label>
                        <div class="col-sm-10 col-lg-9">
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-sm-6">
                <form action="/country" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="continent" class="col-sm-2 col-lg-3 col-form-label">Select Continent</label>
                        <div class="col-sm-10 col-lg-9">
                            <select class="form-control" id="exampleFormControlSelect1" name="continent">
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
                            <input type="text" class="form-control" id="country" name="name">
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
                                    id="add_data_sarana">
                                <span class="icon text-white">
                                <i class="fa fa-plus-circle"></i>
                                </span>
                                <span class="text text-white"></span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="jumlah-form" value="0">
                    <div id="sarana-form"></div>


                    <div class="form-group row">
                        <label for="continent" class="col-sm-2 col-lg-3 col-form-label"></label>
                        <div class="col-sm-10 col-lg-9">
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12 col-lg-6 col-xl-6">
                <div class="section-title sidebar-title">
                    <h5>Table Continent</h5>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name Continent</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataContinent as $continent)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$continent->name}}</td>
                        <td>
                            <button class="btn btn-warning btn-icon-split"
                                    data-toggle="modal"
                                    data-target="#update{{ $continent->id }}"
                                    data-backdrop="static"
                                    data-keyboard="false">
                            <span class="icon text-white-50">
                                <i class="fa fa-pencil"></i>
                            </span>
                                <span class="text text-white">Update</span>
                            </button>

                            <button class="btn btn-danger btn-icon-split"
                                    data-toggle="modal"
                                    data-target="#delete{{ $continent->id }}"
                                    data-backdrop="static"
                                    data-keyboard="false">
                            <span class="icon text-white-50">
                                <i class="fa fa-trash"></i>
                            </span>
                                <span class="text">Delete</span>
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="update{{ $continent->id }}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                            <button type="button" class="close bg-danger" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/continent/{{$continent->id}}" method="post">
                                            <div class="modal-body">

                                                @method('put')
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="continent" class="col-sm-3 col-form-label">Name
                                                        Continent</label>
                                                    <div class="col-sm-9">
                                                        <input type="text"
                                                               class="form-control"
                                                               id="continent"
                                                               name="name"
                                                               value="{{$continent->name}}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="delete{{ $continent->id }}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                            <button type="button" class="close bg-danger" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/continent/{{$continent->id}}" method="post">
                                            <div class="modal-body">
                                                @method('delete')
                                                @csrf

                                                <h5>Do you want to delete this data</h5>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


            <!--            Table Country         -->
            <div class="col-sm-12 col-lg-6 col-xl-6">
                <div class="section-title sidebar-title">
                    <h5>Table Country</h5>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name Continent</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataContinent as $continent)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$continent->name}}</td>
                        <td>
                            <button class="btn btn-warning btn-icon-split"
                                    data-toggle="modal"
                                    data-target="#update_country{{ $continent->id }}"
                                    data-backdrop="static"
                                    data-keyboard="false">
                            <span class="icon text-white-50">
                                <i class="fa fa-pen"></i>
                            </span>
                                <span class="text">Update</span>
                            </button>


                            <button class="btn btn-warning btn-icon-split"
                                    data-toggle="modal"
                                    data-target="#delete_country{{ $continent->id }}"
                                    data-backdrop="static"
                                    data-keyboard="false">
                            <span class="icon text-white-50">
                                <i class="fa fa-pen"></i>
                            </span>
                                <span class="text">Update</span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="update{{ $continent->id }}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                            <button type="button" class="close bg-danger" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/continent/{{$continent->id}}" method="post">
                                            <div class="modal-body">

                                                @method('put')
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="continent" class="col-sm-3 col-form-label">Name
                                                        Continent</label>
                                                    <div class="col-sm-9">
                                                        <input type="text"
                                                               class="form-control"
                                                               id="continent"
                                                               name="name"
                                                               value="{{$continent->name}}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>

        </div>

    </div>

</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/form/country.js"></script>


<script type="text/javascript">
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 4000);
</script>
<!-- Club Section End -->


