@extends('layouts/contentLayoutMaster')

@section('title', 'Modals')

@section('content')


<!-- Modal Themes start -->
<section id="modal-themes">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="d-inline-block">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#success">
                Success
              </button>
              <!-- Modal -->
              <div
                class="modal fade text-left modal-success"
                id="success"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myModalLabel110"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p class="card-text">
            Make a permission for a specific menu.
          </p>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 1</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch1" />
                    <label class="custom-control-label" for="accountSwitch1"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 2</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch2" />
                    <label class="custom-control-label" for="accountSwitch2"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 3</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch3" />
                    <label class="custom-control-label" for="accountSwitch3"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 4</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch4" />
                    <label class="custom-control-label" for="accountSwitch4"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 5</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch5" />
                    <label class="custom-control-label" for="accountSwitch5"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 6</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch6" />
                    <label class="custom-control-label" for="accountSwitch6"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 7</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch7" />
                    <label class="custom-control-label" for="accountSwitch7"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 8</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch8" />
                    <label class="custom-control-label" for="accountSwitch8"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 9</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch9" />
                    <label class="custom-control-label" for="accountSwitch9"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 10</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch10" />
                    <label class="custom-control-label" for="accountSwitch10"></label>
                  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>Menu 11</strong></span>
              <div class="custom-control custom-switch custom-switch-success">
                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch11" />
                    <label class="custom-control-label" for="accountSwitch11"></label>
                  </div>
            </li>
          </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal">Accept</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-inline-block">
              <!-- Button trigger modal -->
              
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal Themes end -->


@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/components/components-modals.js')) }}"></script>
@endsection
