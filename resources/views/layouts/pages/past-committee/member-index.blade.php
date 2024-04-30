<x-app-layout>

    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h4 class="card-title">{{$productCategory->title}}</h4>
            <button type="button" id="open_modal" class="btn btn-sm btn-secondary float-right"><i class="fa fa-plus"></i><span class="btn-icon-add"></span>Create New</button>
        </div>
    </div>

    <div class="row" id="content-section">
        @foreach ($data as $row)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" id="col_{{ $row->id }}">
                <div class="float-right">
                    <div class="dropdown">
                        <button type="button" class="btn btn-success sharp" data-toggle="dropdown">
                            <i class="flaticon-381-edit"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);" id="data-show" data-id="{{ $row->id }}">Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);" id="data-delete" data-id="{{ $row->id }}">Delete</a>
                        </div>
                    </div>
                </div>
                <article class="products-item">
                    <p class="mb-3 text-info">Product Code: <strong>{{$row->code}}</strong></p>
                    <h5><i class="mdi mdi-forward"></i>{{ $row->title }}</h5>
                    @if(isset($row->ingredient))
                        @php
                            $ingredients = json_decode($row->ingredient, true);
                        @endphp
                        <p>Main Ingredient</p>
                        <ul>
                            @foreach ($ingredients as $ingredient)
                                <li><i class="mdi mdi-check-all"></i> {{ $ingredient['name'] }}</li>
                            @endforeach
                        </ul>
                    @endif
                </article>
                <div class="download-pdf-catalog">
                    <a href="{{route('product-item.download', $row->id)}}"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>
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
                <form class="form-valide" data-action="{{ route('product-item.store') }}" method="POST" enctype="multipart/form-data" id="add-user-form">
                    @csrf
                    <input type="hidden" name="id" id="set_id">
                    <input type="hidden" name="product_category_id" value="{{$productCategory->id}}">
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
                                        <input type="file" name="file_path" id="file_path" accept=".pdf"  class="form-control" value="">
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
                                <div class="table-responsive" id="items-table">
                                    <div id="item-add-btn" class="float-right" style="display: none">
                                        <button type="button" class="btn btn-sm btn-success rounded-0 add-row-btn"><span class="fa fa-plus mr-1"></span> ADD ITEM</button>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th width="45%">Name</th>
                                                <th width="25%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body">
                                            <tr>
                                                <td><input type="text" name="moreFile[0][sub_item]" class="form-control val_description" placeholder="Ingredient Name...."></td>
                                                <td class="text-center">
                                                    <button type="button" title="Add New" class="btn btn-icon btn-outline-warning border-0 btn-xs add-row-btn"><span class="fa fa-plus"></span></button>
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
            $("#file_path").val('');
            $("#description").val('');
            $("#index").val('');

            $('#table-body').empty();
            addRow(0);

            $(".modal-title").html('Add New');
            $("#exampleModalCenter").modal('show');
        });
        /*=======//Save Data //=========*/
        var downloadUrl = "{{ route('product-item.download', ':id') }}";
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
                    
                    var newRowHtml = '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" id="col_' + response.id + '">' +
                    '<div class="float-right">' +
                        '<div class="dropdown">' +
                            '<button type="button" class="btn btn-success sharp" data-toggle="dropdown">' +
                                '<i class="flaticon-381-edit"></i>' +
                            '</button>' +
                            '<div class="dropdown-menu">' +
                                '<a class="dropdown-item" href="javascript:void(0);" id="data-show" data-id="' + response.id + '">Edit</a>' +
                                '<a class="dropdown-item" href="javascript:void(0);" id="data-delete" data-id="' + response.id + '">Delete</a>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<article class="products-item">' +
                        '<p class="mb-3 text-info">Product Code: <strong>' + response.code + '</strong></p>' +
                        '<h5><i class="mdi mdi-forward"></i>' + response.title + '</h5>' +
                        '<p>Main Ingredient</p>' +
                        '<ul>';
                        var ingredients = JSON.parse(response.ingredient);
                        ingredients.forEach(function(ingredient) {
                            newRowHtml += '<li><i class="mdi mdi-check-all"></i> ' + ingredient.name + '</li>';
                        });

                        newRowHtml += '</ul>' +
                        '</article>' +
                        '<div class="download-pdf-catalog">' +
                            '<a href="' + downloadUrl.replace(':id', response.id) + '"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>' +
                        '</div>' +
                    '</div>';

                    if ($("#set_id").val()) { 
                        $("#col_" + response.id).replaceWith(newRowHtml); 
                    } else { 
                        $("#content-section").append(newRowHtml); 
                    }
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

        /*========//Edit Or View Data//=========*/
        $(document).on('click', '#data-show', function(){
            var id = $(this).data('id');
            $.ajax({
                url:'{{ route('product-item.edit')}}',
                method:'GET',
                dataType:"JSON",
                data:{id:id},
                success:function(response){
                    $(".modal-title").html('Edit Data');

                    $("#set_id").val(response.id);
                    $("#title").val(response.title);
                    $("#file_path").val('');
                    $("#description").val(response.description);
                    $("#index").val(response.index);

                    $("#status").empty();
                    var status = $("#status");
                    var row = '<option value="1" ' + (response.status == 1 ? 'selected' : '') + '>Active</option>';
                    row += '<option value="0" ' + (response.status == 0 ? 'selected' : '') + '>Inactive</option>';
                    status.append(row);


                    var tableBody = $('#table-body');
                    tableBody.empty();

                    var ingredients = JSON.parse(response.ingredient);
                    $.each(ingredients, function(i, ingredient) {
                        // Construct HTML for each row
                        var html = '<tr>' +
                                    '<td><input type="text" name="moreFile[' + i + '][sub_item]" class="form-control val_description" value="' + ingredient.name + '"></td>' +
                                    '<td class="text-center">' +
                                        '<button type="button" title="Add New" class="btn btn-icon btn-outline-warning border-0 btn-xs add-row-btn"><span class="fa fa-plus"></span></button>' +
                                        '<button type="button" title="Remove" class="btn btn-icon btn-outline-danger btn-xs border-0 remove-row"><span class="fa fa-trash"></span></button>' +
                                    '</td>' +
                                '</tr>';
                        
                        // Append the HTML to the table body
                        tableBody.append(html);
                    });

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
                        url:'{{ route('product-item.delete')}}',
                        method:'GET',
                        dataType:"JSON",
                        data:{'id':id},
                        success:function(data){
                            swal("Success Message Title", "Well done, you pressed a button", "success");
                            $("#col_" + data.id).hide();
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
        $('#items-table').on('click', '.add-row-btn', function() {
            var rowCount = parseInt($('#items-table tbody tr td .add-row-btn').length);
            addRow(rowCount);
            if(rowCount < 0){
                $('#item-add-btn').show();
            }else{
                $('#item-add-btn').hide();
            }
        });
        function addRow(i){
            var newRow = $('<tr>' +
                '<td><input type="text" name="moreFile['+i+'][sub_item]" class="form-control" placeholder="Ingredient Name...."></td>' +
                '<td class="text-center">' +
                    '<button type="button" title="Add New" class="btn btn-icon btn-outline-warning border-0 btn-xs add-row-btn"><span class="fa fa-plus"></span></button>' +
                    '<button type="button" title="Remove" class="btn btn-icon btn-outline-danger btn-xs border-0 remove-row"><span class="fa fa-trash"></span></button>' +
                '</td>'+
            '</tr>');
            $('#items-table tbody').append(newRow);
        }
        //======Remove ROW
        $('#items-table').on('click', '.remove-row', function() {
            $(this).closest('tr').remove();

            var rowCount = parseInt($('#items-table tbody tr td .add-row-btn').length);
            if(rowCount < 1){
                $('#item-add-btn').show();
            }else{
                $('#item-add-btn').hide();
            }
        });

    </script>

    @endpush
</x-app-layout>
