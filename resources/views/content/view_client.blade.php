<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-left">
                    <h2 class="mt-2">{{ $title }}</h2>
                    <a href="{{ url('/') }}" target="_blank">
                        <div class="btn btn-sm btn-pill btn-outline-primary py-1 mx-2">view Client</div>
                    </a>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" id="createNewUser">
                        <i class="fas fa-plus"></i>Add data </button></div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table" id="tableUser">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    {{-- <th>No.</th> --}}
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Description Perusahaan</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th style="width:90px;">Action</th>
                                </tr>

                            </thead>
                            <tbody class="text-center">
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
                <form id="formUser" name="formUser" enctype="multipart/form-data" action="{{ route('post.store') }}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" required>
                        <div class="is-invalid"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" id="description" placeholder="Deskripsi Perusahaan" required><br>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Foto" required><br>
                        <label for="image" id="image_label">Old image</label>
                        <a href="" id="image_name" name="image_name" value=""><img id="image_url" width="100%"/></a>
                        <input type="hidden" name="created_at" id="created_at" value="">
                        <input type="hidden" name="updated_at" id="updated_at" value="">
                        <input type="hidden" name="id_client" id="id_client" value="">
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
        $("#modal-user").on("hidden.bs.modal", function(e) {
            $('#image').prop('required', true);
            $('#image_label').hide();
            $('#image_url').removeAttr('src');
            $('.is-invalid').html('');
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
                ajax: "{{ route('partner') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama_perusahaan',
                        name: 'nama_perusahaan'
                    },
                    {
                        data: 'description',
                        name: 'description'
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
                $('#id_client').val('');
                $('#formUser').trigger("reset");
                $('#modal-user').modal('show');
            });
            // initialize btn edit
            $('body').on('click', '.editUser', function() {
                var id_client = $(this).data('id');
                $.get("{{ url('partner') }}" + '/' + id_client, function(data) {
                    $('#saveBtn').val("edit-user");
                    $('#image').removeAttr('required');
                    $('#modal-user').modal('show');
                    $('#id_client').val(data.id_client);
                    $('#nama_perusahaan').val(data.nama_perusahaan);
                    $('#description').val(data.description);
                    $('#image_url').attr('src', data.image);
                    $('#image_label').show();
                    $('#image_name').attr("href", data.image);
                })
            });


            // initialize btn save
            $('#saveBtn').click(function(e) {
                var formData = new FormData($("#formUser")[0]);
                // console.log(formData);
                var id_client = $('#id_client').val();
                var nama_perusahaan = $('#nama_perusahaan').val();
                var description = $('#description').val();
                var image = $('#image').val();
                var created_at = $('#created_at').val();
                var updated_at = $('#updated_at').val();
                e.preventDefault();
                $(this).html('Save');
                $.ajax({
                    data: formData,
                    url: "{{ route('partner.store') }}",
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        $('#formUser').trigger("reset");
                        $('#modal-user').modal('hide');
                        swal_success();
                        table.draw();
                    },
                    error: function(data) {
                        console.log(data);
                        // swal_error();
                        $('.is-invalid').html('This Field is Required');
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });
            // initialize btn delete
            $('body').on('click', '.deleteUser', function(e) {
                var id_client = $(this).data("id");

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
                            url: "{{ url('/partner/') }}" + '/' + id_client,
                            success: function(data) {
                                swal_success();
                                table.draw();
                                $('#image').attr('required');
                            },
                            error: function(data) {
                                swal_error();
                                $('#image').attr('required');
                            }
                        });
                    }
                })
            });

            // statusing


        });
    </script>
@endpush
