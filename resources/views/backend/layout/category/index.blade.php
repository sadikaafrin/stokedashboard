@extends('backend.app')
@section('title', 'Category')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Form Validation</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Range validation</h4>
                    <p class="card-title-desc">Parsley is a javascript form validation
                        library. It helps you provide your users with feedback on their form
                        submission before sending it to your server.</p>

                    <form action="#" class="custom-validation">

                        <div class="mb-3">
                            <label>Min Length</label>
                            <div>
                                <input type="text" class="form-control" required data-parsley-minlength="6"
                                    placeholder="Min 6 chars." />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Max Length</label>
                            <div>
                                <input type="text" class="form-control" required data-parsley-maxlength="6"
                                    placeholder="Max 6 chars." />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Range Length</label>
                            <div>
                                <input type="text" class="form-control" required data-parsley-length="[5,10]"
                                    placeholder="Text between 5 - 10 chars length" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Min Value</label>
                            <div>
                                <input type="text" class="form-control" required data-parsley-min="6"
                                    placeholder="Min value is 6" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Max Value</label>
                            <div>
                                <input type="text" class="form-control" required data-parsley-max="6"
                                    placeholder="Max value is 6" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Range Value</label>
                            <div>
                                <input class="form-control" required type="text range" min="6" max="100"
                                    placeholder="Number between 6 - 100" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Regular Exp</label>
                            <div>
                                <input type="text" class="form-control" required data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                    placeholder="Hex. Color" />
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
