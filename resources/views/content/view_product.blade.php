<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$title}}</h2>
                <div class="d-flex flex-row-reverse"><button
                        class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" id="createNewUser"><i
                            class="fas fa-plus"></i>Add data </button></div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table" id="tableUser">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    {{-- <th>No.</th> --}}
                                    <th>Id Product</th>
                                    <th>Title Product</th>
                                    <th>Description Product</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th style="width:90px;">Action</th>
                                </tr>
                                
                            </thead>
                            <tbody class="text-center">
                                {{-- @foreach ($users as $r_users)
                                    <tr>
                                <td>{{$r_users->id}}</td>
                                <td>{{$r_users->name}}</td>
                                <td>{{$r_users->email}}</td>
                                <td>{{$r_users->level}}</td>
                                <td>
                                    <div class="btn btn-success editUser" data-id="{{$r_users->id}}">Edit</div>
                                    <div class="btn btn-danger deleteUser" data-id="{{$r_users->id}}">Delete</div>
                                </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal-->
<div class="modal fade" id="modal-user" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUser" name="formUser" enctype="multipart/form-data" action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title_product" class="form-control" id="title_product" placeholder="Title Product"><br>
                        <input type="text" name="description_product" class="form-control" id="description_product" placeholder="Deskripsi Product"><br>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Foto"><br>
                        <input type="hidden" name="created_at" id="created_at" value="">
                        <input type="hidden" name="updated_at" id="updated_at" value="">
                        <input type="hidden" name="id_product" id="id_product" value="">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold" id="saveBtn">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>



@push('scripts')
<script>
    $('document').ready(function () {
        // success alert
        function swal_success() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1000
            })
        }
        // error alert
        function swal_error() {
            Swal.fire({
                position: 'centered',
                icon: 'error',
                title: 'Something goes wrong !',
                showConfirmButton: true,
            })
        }
        // table serverside
        var table = $('#tableUser').DataTable({
            processing: false,
            serverSide: true,
            ordering: false,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ],
            ajax: "{{ url('product') }}",
            columns: [{
                    data: 'id_product',
                    name: 'id_product'
                },
                {
                    data: 'title_product',
                    name: 'title_product'
                },
                {
                    data: 'description_product',
                    name: 'description_product'
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function( data, type, full, meta ) {
                        return "<img src=\"" + data + "\" height=\"50\"/>";
                    }
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        
        // csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // initialize btn add
        $('#createNewUser').click(function () {
            $('#saveBtn').val("tambah produk");
            $('#id_product').val('');
            $('#formUser').trigger("reset");
            $('#modal-user').modal('show');
        });
        // initialize btn edit
        $('body').on('click', '.editUser', function () {
            var id_product = $(this).data('id');
            $.get("{{url('product')}}" + '/' + id_product , function (data) {
                $('#saveBtn').val("edit-user");
                $('#modal-user').modal('show');
                $('#id_product').val(data.id_product);
                $('#title_product').val(data.title_product);
                $('#description_product').val(data.description_product);
                $('#image').val(data.image);
            })
        });

    
        // initialize btn save
        $('#saveBtn').click(function (e) {
            var formData = new FormData($("#formUser")[0]);
            // console.log(formData);
               var id_product = $('#id_product').val();
               var title_product = $('#title_product').val();
               var description_product = $('#description_product').val();
               var image = $('#image').val();
               var created_at = $('#created_at').val();
               var updated_at = $('#updated_at').val();
            e.preventDefault();
            $(this).html('Save');
            $.ajax({
                data: formData,
                url: "{{ route('product.store') }}",
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    $('#formUser').trigger("reset");
                    $('#modal-user').modal('hide');
                    swal_success();
                    table.draw();
                },
                error: function (data) {
                    console.log(data);
                    swal_error();
                    $('#saveBtn').html('Save Changes');
                }
            });
        });
        // initialize btn delete
        $('body').on('click', '.deleteUser', function (e) {
            var id_product = $(this).data("id");
            console.log(id_product);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ url('/product/') }}" + '/' + id_product,
                        success: function (data) {
                            swal_success();
                            table.draw();
                        },
                        error: function (data) {
                            swal_error();
                        }
                    });
                }
            })
        });

        // statusing


    });

</script>
@endpush
