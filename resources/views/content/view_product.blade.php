<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-left">
                    <h2 class="mt-2">{{ $title }}</h2>
                    <a href="{{ url('page/products') }}" target="_blank">
                        <div class="btn btn-sm btn-pill btn-outline-primary py-1 mx-2">view Products</div>
                    </a>
                </div>
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
                                    <th>Image</th>
                                    <th>Created At</th>
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
                <form id="formUser" name="formUser" enctype="multipart/form-data"
                    action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title_product" class="form-control" id="title_product"
                            placeholder="Title Product"><br>
                        <textarea name="description_product" class="form-control" id="description_product" placeholder="Deskripsi Product"></textarea><br>
                        <input type="file" name="image" class="form-control" id="image" required
                            placeholder="Foto"><br>
                        <label for="image" id="image_label">Old image</label>
                        <a href="" id="image_name" name="image_name" value=""><img id="image_url" width="100%"/></a>
                        <input type="hidden" name="created_at" id="created_at" value="">
                        <input type="hidden" name="updated_at" id="updated_at" value="">
                        <input type="hidden" name="id_product" id="id_product" value="">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold" name="submit" id="submit">Save
                    changes</button>
            </div>
            </form>
        </div>
    </div>
</div>



@push('scripts')
    <script>
        let YourEditor;
        ClassicEditor
            .create(document.querySelector('#description_product'))
            .then(editor => {
                window.editor = editor;
                YourEditor = editor;
            })

        $("#modal-user").on("hidden.bs.modal", function(e) {
            $('#image').prop('required', true);
            $('#image_label').hide();
            $('#image_url').removeAttr('src');
            YourEditor.setData('');
        });

        $('document').ready(function() {
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
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta) {
                            return "<img src=\"" + data + "\" height=\"50\"/>";
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data, type, full, meta) {
                            if (data == '01/01/1970') {
                                return '';
                            } else {
                                return data;
                            }
                        }
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
            $('#createNewUser').click(function() {
                $('#saveBtn').val("tambah produk");
                $('#id_product').val('');
                $('#formUser').trigger("reset");
                $('#modal-user').modal('show');
            });
            // initialize btn edit
            $('body').on('click', '.editUser', function() {
                var id_product = $(this).data('id');
                $.get("{{ url('product') }}" + '/' + id_product, function(data) {
                    $('#image').removeAttr('required');
                    $('#modal-user').modal('show');
                    $('#id_product').val(data.id_product);
                    $('#title_product').val(data.title_product);
                    YourEditor.setData(data.description_product);
                    $('#image_url').attr('src', data.image);
                    $('#image_label').show();
                    $('#image_name').attr("href", data.image);
                })
            });


            // initialize btn save
            Array.prototype.filter.call($('#formUser'), function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        form.classList.add('invalid');
                    }
                    form.classList.add('was-validated');
                    event.preventDefault();

                    var data = new FormData(this);

                    $.ajax({
                        url: '{{ route('product.store') }}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content')
                        },
                        data: data,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if (response.error) {

                                swal_error();

                            } else {

                                setTimeout(function() {
                                    $('#tableUser')
                                        .DataTable().ajax
                                        .reload();

                                }, 1000);

                                swal_success();

                            }
                            var reset_form = $('#formUser')[0];
                            $(reset_form).removeClass('was-validated');
                            YourEditor.setData('');
                            $('#image').attr('required');
                            reset_form.reset();
                            $('#modal-user').modal('hide');

                        },
                    });

                });

            });

            // initialize btn delete
            $('body').on('click', '.deleteUser', function(e) {
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
                            success: function(data) {
                                swal_success();
                                table.draw();
                            },
                            error: function(data) {
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
