<x-app-layout>

    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h4 class="card-title">{{$item->title}}</h4>
            <button type="button" id="open_modal" class="btn btn-sm btn-secondary float-right"><i class="fa fa-plus"></i><span class="btn-icon-add"></span>Create New</button>
        </div>
    </div>

    <div class="row" id="content-section">
        @foreach ($data as $row)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" id="col_{{ $row->id }}">
                <div class="d-flex">
                    <a class="rounded-0 btn btn-success edit" href="javascript:void(0);" id="data-show" data-id="{{ $row->id }}">Edit</a>
                    <a class="rounded-0 btn btn-danger delete" href="javascript:void(0);">Delete</a>
                </div>
                <article class="products-item">
                    <h5><i class="mdi mdi-forward"></i>{{ $row->title }}</h5>
                    @foreach (json_decode($row->description) as $col)
                        <p>{{ $col->ingredient }}</p>
                        <ul>
                            @foreach ($col->list as $listItem)
                                <li><i class="mdi mdi-check-all"></i>{{ $listItem->name }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </article>
                <div class="download-pdf-catalog">
                    <a href="#"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>
                </div>
            </div>
        @endforeach

        
        
    </div>
    <!--=======//Modal Show Data//========-->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form class="form-valide" data-action="{{ route('past-committee-member.store') }}" method="POST" enctype="multipart/form-data" id="add-user-form">
                    @csrf
                    <input type="hidden" name="id" id="set_id">
                    <input type="text" name="product_category_id" value="{{$item->id}}">
                    <div class="modal-body py-2">
                        <div class="row" id="main-row-data">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Product Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" id="title" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">File Path</label>
                                    <div class="col-md-8">
                                        <input type="file" name="file_path" id="file_path" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="remarks" class="col-md-4 col-form-label">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="description" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Index</label>
                                    <input type="text" name="index" id="index" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-form-label">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="height: 180px; overflow-y: auto">
                            <div class="col-md-12">
                                <!--=====//Table//=====-->
                                <div class="table-responsive">
                                    <table id="items-table" class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th width="45%">Name</th>
                                                <th width="23%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body">
                                            <tr>
                                                <td><input type="text" name="moreFile[0][sub_item]" class="form-control val_description" placeholder="XXXXXXXXXX"></td>
                                                <td class="text-center">
                                                    <button type="button" title="Add New" class="btn btn-icon btn-outline-warning border-0 btn-xs add-row"><span class="fa fa-plus"></span></button>
                                                    <button type="button" title="Remove" class="btn btn-icon btn-outline-danger btn-xs border-0 remove-row"><span class="fa fa-trash"></span></button>
                                                </td>
                                            </tr>
                                        </tbody>                                        
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer" style="height:50px">
                        <button type="button" class="btn btn-sm btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary submit_btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('script')
    <script type="text/javascript">
        /*=======//Show Modal//=========*/
        $(document).on('click','#open_modal', function(){
            $("#set_id").val('');
            $("#title").val('');
            $("#designation").val('');
            $("#represent").val('');
            $("#file_path").val('');
            $("#description").val('');
            $("#index").val('');

            $(".modal-title").html('Add New');
            $("#exampleModalCenter").modal('show');
        });
        /*=======//Save Data //=========*/
        $('#add-user-form').on('submit', function(event){
            event.preventDefault();
            var url = $(this).attr('data-action');
            $.ajax({
                url: url,
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {
                    swal("Success Message Title", "Well done, you pressed a button", "success");
                    $("#exampleModalCenter").modal('hide');
                    
                    var statusHtml = (response.status == 0) ? '<span class="badge light badge-danger"><i class="fa fa-circle text-danger mr-1"></i> Inactive</span>' : '<span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i> Active</span>';
                    
                    var newRowHtml = `
                    <div class="col-lg-4" id="col_${response.id}">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('event.create') }}" class="btn btn-sm btn-primary py-1"><i class="fa fa-plus"></i><span class="btn-icon-add"></span>Member</a>
                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1" id="data-show" data-id="${response.id}"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="card-body">
                                <h6>${response.title}</h6>
                            </div>
                            <div class="card-footer">${statusHtml}</div>
                        </div>
                    </div>`;

                    if ($("#set_id").val()) { $("#col_" + response.id).replaceWith(newRowHtml); }
                    else { $("#content-section").prepend(newRowHtml); }
                },
                error: function (xhr) {
                    var errors = xhr.responseJSON.errors;
                    var errorHtml = '';
                    $.each(errors, function(key, value) {
                        errorHtml += `<li style="color:red">${value}</li>`;
                    });
                    Swal.fire({ icon: 'error', title: 'Error!', html: `<ul>${errorHtml}</ul>`, text: 'All input values are not null or empty.' });
                }
            });
        });

        // Function to format the date
        function formatDate(dateString) {
            var date = new Date(dateString);
            var options = { year: 'numeric', month: 'long', day: 'numeric' };
            return date.toLocaleDateString(undefined, options);
        }
        /*========//Edit Or View Data//=========*/
        $(document).on('click', '#data-show', function(){
            var id = $(this).data('id');
            $.ajax({
                url:'{{ route('past-committee.edit')}}',
                method:'GET',
                dataType:"JSON",
                data:{id:id},
                success:function(response){
                    $(".modal-title").html('Edit Data');

                    $("#set_id").val(response.id);
                    $("#title").val(response.title);
                    $("#index").val(response.index);
                    $("#description").val(response.description);

                    $("#status").empty();
                    var status = $("#status");
                    var row = '<option value="1" ' + (response.status == 1 ? 'selected' : '') + '>Active</option>';
                    row += '<option value="0" ' + (response.status == 0 ? 'selected' : '') + '>Inactive</option>';
                    status.append(row);

                    $("#exampleModalCenter").modal('show');
                },
                error: function(xhr, status, error) {
                    swal("Error!", "There are no details available for this item.", "error");
                }
            });
        });

        /*========//Delete Data//========*/
        $(document).on('click', '#data-delete', function(){
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // Place your delete code here
                    var id = $(this).data('id');
                    $.ajax({
                        url:'{{ route('member-qualification.delete')}}',
                        method:'GET',
                        dataType:"JSON",
                        data:{'id':id},
                        success:function(data){
                            swal("Success Message Title", "Well done, you pressed a button", "success");
                            $('[data-id="' + id + '"]').closest('tr').hide();
                        },
                        error:function(){
                            swal("Error!", "There are no details available for this item.", "error");
                        }
                    });
                } else {
                    // User clicked "No" button, do nothing
                    swal("Your data is safe!", {
                        icon: "success",
                    });
                }
            });
        });

    </script>
    
    <!--____________// ADD ROW \\____________-->
    <script type="text/javascript">
        var i = 0;
        $('#items-table').on('click', '.add-row', function() {
            ++i;
            var newRow = $('<tr>' +
                '<td><input type="text" name="moreFile['+i+'][sub_item]" class="form-control" placeholder="XXXXXXXXXX"></td>' +
                '<td class="text-center">' +
                    '<button type="button" title="Add New" class="btn btn-icon btn-outline-warning border-0 btn-xs add-row"><span class="fa fa-plus"></span></button>' +
                    '<button type="button" title="Remove" class="btn btn-icon btn-outline-danger btn-xs border-0 remove-row"><span class="fa fa-trash"></span></button>' +
                '</td>'+
            '</tr>');
            $('#items-table tbody').append(newRow);
        });
        //======Remove ROW
        $('#items-table').on('click', '.remove-row', function() {
            $(this).closest('tr').remove();
            var rec_qty= $('#rcvQty').val();
            $('#rcvQty').val(rec_qty-1);
        });

    </script>
    @endpush
</x-app-layout>
