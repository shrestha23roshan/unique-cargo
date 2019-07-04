@extends('layouts.backend.containerlist')

@section('dynamicdata')
<div class="box">
    <div class="box-header with-border">
       <h4>About Us</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      @include('layouts.backend.alert')
      <table id="example1" class="table table-bordered table-striped about-us-table">
        <thead>
        <tr>
            <th>SN</th>
            <th>Description</th>
            <th>Experience</th>
            <th>Image</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        </thead>
       
        <tbody id="tablebody">
            @foreach($aboutUs as $index => $record)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{!! str_limit(strip_tags($record->description), 40) !!}</td>
                    <td>{{ $record->experience }}</td>
                    <td class="image">
                        @if($record->attachment)
                            <img src="{{ asset('uploads/content-management/about-us/' . $record->attachment) }}" alt="{{ $record->name }}" width="200">
                        @endif
                    </td>
                    <td>
                        @if($record->is_active == '1')
                        <small class="label bg-green">Published</small>
                        @else
                        <small class="label bg-red">Unpublished</small>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.content-management.about-us.edit', $record->id) }}" title="Edit message"><button class="btn btn-primary btn-flat"><i class="fa fa-edit"></i></button></a>&nbsp;
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
        <tr>
            <th>SN</th>
            <th>Description</th>
            <th>Experience</th>
            <th>Image</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
@endsection

@section('footer_js')
<script type="text/javascript">
    $(document).ready(function() {
        var oTable = $('.about-us-table').dataTable();
    });
</script>
@endsection