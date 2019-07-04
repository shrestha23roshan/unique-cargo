@extends('layouts.backend.containerform')

@section('footer_js')
<script type="text/javascript">
    $(document).ready(function () {
        
        $('#worksAddForm').formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                // title: {
                //     validators: {
                //         notEmpty: {
                //             message: 'Title field is required.'
                //         },
                //     }
                // },  
                // category: {
                //     validators: {
                //         notEmpty: {
                //             message: 'Category field is required.'
                //         },
                //     }
                // },  
                // description: {
                //         validators: {
                //             notEmpty: {
                //                 message: 'Description field is required.'
                //             },
                //         }
                //     },
                attachment: {
                    validators: {
                        notEmpty: {
                            message: 'Attachment field is required.'
                        },
                        file: {
                            extension: 'jpg,jpeg,png',
                            maxSize: 1048576,   // 1 * 1024 * 1024
                            message: 'The selected file is not valid or file size greater than 1 MB.'
                        }
                    }
                },
                
            }
        })
        .on('blur', '[name="title"]', function(e){
            $('#worksAddForm').formValidation('revalidateField', 'title');
            $('#worksAddForm').formValidation('revalidateField', 'description');
        })
        .find('[name="description"]')
                .each(function () {
                    $(this)
                        .ckeditor({
                            allowedContent: true,
                            removePlugins: 'sourcearea' // disable source area
                        })
                        .editor
                        .on('change', function (e) {
                            $('#worksAddForm').formValidation('revalidateField', e.sender.name);
                        });
                });
    });
</script>

@endsection 

@section('dynamicdata')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Create Work</h3>
</div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="worksAddForm" method="POST" action="{{ route('admin.content-management.works.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
        @include('layouts.backend.alert')

            {{-- <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title." value="{{ old('title') }}" >
            </div>

            <div class="form-group">
                <label for="category">Category *</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Enter category." value="{{ old('category') }}" >
            </div>
            
            <div class="form-group">
                <label for="description">Description *</label>
                <textarea class="form-control" id="description" name="description">{!! old('description') !!}</textarea>
            </div> --}}

            <div class="form-group">
                <label for="attachment">Photo Attachment *</label>
    
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 600px; height: auto;">
                        <img src="{{ asset('uploads/content-management/works/default-img.jpg') }}" alt="">
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail"
                        style="max-width: 600px; max-height: auto; line-height: 20px;">
                    </div>
                    <div>
                        <span class="btn btn-primary btn-file">
                        <span class="fileupload-new"><i class="fa fa-file-pencil"></i> Select photo</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change photo</span>
                        <input type="file" name="attachment" class="default"/>
                        </span>
                    </div>
                </div>
                <span class="badge bg-red">NOTE!</span>
                <span>Photo file format should be in jpg, jpeg and png.</span>
            </div>
          
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="is_active">
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
                </select>
            </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection