@extends('turtle::layouts.modal')

@section('title', 'Delete Confirmation')
@section('content')
    <div class="modal-body">
        <p>Are you sure you want to delete this?</p>
    </div>

    <div class="modal-footer">
        <form method="POST" action="{{ route($route) }}" novalidate>
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $id }}">
            <button type="submit" class="btn btn-danger">Yes</button>
        </form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    </div>
@endsection