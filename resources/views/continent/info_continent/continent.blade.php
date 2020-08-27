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
        <form action="/continent" method="post">
            @csrf
            <div class="form-group row">
                <label for="continent" class="col-sm-2 col-form-label">Name Continent</label>
                <div class="col-sm-10 col-lg-6 col-xl-4">
                    <input type="text" class="form-control" id="continent" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="continent" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10 col-lg-6 col-xl-4">
                    <button type="submit" class="btn btn-success float-right">Submit</button>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-sm-12 col-lg-6 col-xl-6">
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
                                <i class="fas fa-pen"></i>
                            </span>
                                <span class="text">Update</span>
                            </button>
                            <button type="button" class="btn btn-danger">Delete</button>

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
                                        <div class="modal-body">
                                            <form action="/continent" method="post">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="continent" class="col-sm-3 col-form-label">Name
                                                        Continent</label>
                                                    <div class="col-sm-9">
                                                        <input type="text"
                                                               class="form-control"
                                                               id="continent"
                                                               name="name"
                                                               value="{{ $continent->name}}">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success">Save changes</button>
                                        </div>
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


<!--<script>-->
<!--    $('.dropdown-toggle').dropdown()-->
<!--</script>-->

<!-- Club Section End -->


