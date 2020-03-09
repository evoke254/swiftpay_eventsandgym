@extends('admin.app')
@section('content')

        @include('admin.nav')

<div style="margin-top: 100px">
	<div class="row m-4 p-4">
	    <div class="col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center">
	        <div class="card m-4 p-4">
	        	<div class="card-body">
		            <div class="card-title">
		                <h2 class="text-center">Listing Images</h2>
		            </div>
		            <div class="">
		                <form method="POST" action="{{ route('admingallery.store') }}" enctype="multipart/form-data"  class="form-inline justify-content-center">
		                    <div class="row w-100">
		                    	<p><small>Note: Total size of uploading files shold not be greater than 8 MB.</small></p>
		                    </div>
		                    <div class="row">
			                    <div class="form-group">
			                        <label for="">Image</label>
			                        <input type="file" name="image[]"  accept="image/png, image/jpeg, image/jpg, image/gif"  class="m-2" multiple/>
			                        <input type="text" name="title" placeholder="Image description (Optional)" class="form-control m-2"/>
			                        <input type="text" name="caption" placeholder="Caption" class="form-control m-2"/>
			                        <select name="category" class="form-control m-2">
			                            <option value="">Category</option>
			                        </select>
			                        <select name="status" class="form-control m-2">
			                            <option value="1">Publish</option>
			                            <option value="0">Save in draft</option>
			                        </select>
			                        {{ csrf_field() }}
			                        <button type="submit" class="btn btn-success btn-md" style="margin-bottom: 0px;">Upload</button>
			                    </div>
		                    </div>
		                </form>
		                <div class="ln_solid"></div>

		                @if(empty($images->count()))
		                    <p>No record found.</p>
		                @else
		                    <div class="table-responsive">
		                        <table class="table table-bordered table-striped">

		                            <thead>
		                                <tr>
		                                    <th>SN</th>
		                                    <th>Image</th>
		                                    <th>Status</th>
		                                    <th>Date/Time Added</th>
		                                    <th>Operations</th>
		                                </tr>
		                            </thead>

		                            <tbody>
		                                @foreach ($images as $image)
		                                <tr>
		                                    <td>{{ (($images->currentPage() - 1 ) * $images->perPage() ) + $loop->iteration }}</td>
		                                    <td><img style="width: 150px;" class="img-responsive" src="{{  asset($image->thumbnail) }}" /></td>
		                                    <td>
		                                        @if($image->status == 1)
		                                            <span class="enable">Active</span>
		                                        @else
		                                            <span class="disable">Inactive</span>
		                                        @endif
		                                    </td>
		                                    <td>{{ $image->updated_at->format('F d, Y') }}</td>
		                                    <td>
		                                        <form action="{{ route('admingallery.update', $image->id) }}" method="post"
		                                            onsubmit="return confirm('Revert process will Enable/Disable the image. Continue?');">
		                                            {{ csrf_field() }}
		                                            <input type="hidden" name="_method" value="put" />
		                                            <input type="hidden" name="id" value="{{ $image->id }}" />
		                                            <button type="submit" class="btn btn-sm btn-info action_btn">Revert</button>
		                                        </form>
		                                        <form action="{{ route('admingallery.destroy', $image->id) }}" method="post"
		                                            onsubmit="return confirm('Are you sure you want to delete this record?');">
		                                            <input type="hidden" name="_method" value="DELETE" />
		                                            {{ csrf_field() }}
		                                            <button type="submit" name="Delete" class="btn btn-sm btn-danger action_btn">Delete</button>
		                                        </form>
		                                    </td>
		                                </tr>
		                                @endforeach
		                            </tbody>
		                        </table>
		                        @if($images->total() != 0)
		                            <div>Showing
		                                {{ ($images->currentpage()-1) * $images->perpage()+1}} to
		                                {{(($images->currentpage()-1) * $images->perpage())+$images->count()}} of
		                                {{$images->total()}} records
		                            </div>
		                            {{ $images->links() }}
		                        @else
		                            No records found.
		                        @endif
		                    </div>
		                @endif
		            </div>
	        	</div>
	        </div>
	    </div>
	</div>
</div>

@endsection
@section('scripts')
    <script src="{{ asset('js/kahaki/demo/dashboard.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
@endsection