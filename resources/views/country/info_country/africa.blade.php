<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Country</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dataAfrica as $africa)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$africa->name}}</td>
        <td>
            <button class="btn btn-warning btn-icon-split"
                    data-toggle="modal"
                    data-target="#update_country{{ $africa->id }}"
                    data-backdrop="static"
                    data-keyboard="false">
                                            <span class="icon text-white-50">
                                            <i class="fa fa-pen"></i>
                                            </span>
                <span class="text text-white">Update</span>
            </button>


            <button class="btn btn-danger btn-icon-split"
                    data-toggle="modal"
                    data-target="#delete_country{{ $africa->id }}"
                    data-backdrop="static"
                    data-keyboard="false">
                                            <span class="icon text-white-50">
                                            <i class="fa fa-pen"></i>
                                            </span>
                <span class="text text-white">Delete</span>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="update_country{{ $africa->id }}" tabindex="-1"
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
                        <form action="/country/{{$africa->id}}" method="post">
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
                                               value="{{$africa->name}}">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Save changes
                                </button>
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
{{ $dataAfrica->links() }}
Page : {{ $dataAfrica->currentPage() }} <br/>
Total Data : {{ $dataAfrica->total() }} <br/>
Data Per Page : {{ $dataAfrica->perPage() }} <br/>
