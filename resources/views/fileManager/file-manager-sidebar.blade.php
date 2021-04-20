@section('content-sidebar')
<div class="sidebar-file-manager">
  <div class="sidebar-inner">
    <!-- sidebar menu links starts -->
    <!-- add file button -->
    <div class="dropdown dropdown-actions">
      <button
        class="btn btn-primary add-file-btn text-center btn-block"
        type="button"
        id="addNewFile"
        data-toggle="modal"
        data-target="#primary"
        aria-haspopup="true"
        aria-expanded="true"
      >
        <span class="align-middle">Add New</span>
      </button>
      <!-- Modal -->
      <!-- <div
        class="modal fade text-left modal-primary"
        id="primary"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel160"
        aria-hidden="true"
      >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel160">Upload File your file</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Upload Files</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div> -->

    </div>
    <!-- add file button ends -->

    <!-- sidebar list items starts  -->
    <div class="sidebar-list">
      <!-- storage status of file manager starts-->
      <div class="storage-status mb-1 px-2">
        <h6 class="section-label mb-1">Storage Status</h6>
        <div class="d-flex align-items-center cursor-pointer">
          <i data-feather="server" class="font-large-1"></i>
          <div class="file-manager-progress ml-1">
            <span>68GB used of 100GB</span>
            <div class="progress progress-bar-primary my-50" style="height: 6px">
              <div
                class="progress-bar"
                role="progressbar"
                aria-valuenow="80"
                aria-valuemin="80"
                aria-valuemax="100"
                style="width: 80%"
              ></div>
            </div>
          </div>
        </div>
      </div>
      <!-- storage status of file manager ends-->
    </div>
    <!-- side bar list items ends  -->
    <!-- <div class="sidebar-menu-list">
    </div> -->
    <!-- sidebar menu links ends -->
  </div>
</div>
@endsection
