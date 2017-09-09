@extends('turtle::layouts.modal')

@section('title', 'Create crud_model_string')
@section('content')
    <form method="POST" action="{{ route('crud_model_variables.create') }}" novalidate>
        {{ csrf_field() }}

        <div class="modal-body">
            <!-- crud_input_create -->
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </form>
@endsection