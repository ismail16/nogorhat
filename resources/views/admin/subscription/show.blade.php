@extends('admin.layouts.master')
@section('title','Payment Confirmation')

@push('css')

@endpush

@section('content')
<div class="container" id="printarea">
    <div class="row">
      <div class="col-12" style="padding: 0px 50px">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Name </label>
                                <p>: {{ $contact->name }}</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Email </label>
                                <p>: {{ $contact->email }}</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Phone</label>
                                <p>: {{ $contact->phone }}</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Subject</label>
                                <p>: {{ $contact->subject }} TK</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Message</label>
                                <p>: {{$contact->message}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer" role="group" aria-label="Basic example">
                    <a href="{{route('admin.contact.index')}}" type="button" class="btn btn-default mr-2">Cancel</a>
                </div>
            </div>
        </div>
</div>

</div>
</div>
@endsection


@push('scripts')

@endpush
