@extends('turtle::layouts.modal')

@section('title', $activity->log)
@section('content')
    <div class="modal-body">
        @if($user)
            <div class="card mb-3">
                <div class="card-header">User</div>
                <div class="card-body">
                    <pre class="mb-0">{{ json_encode($user->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</pre>
                </div>
            </div>
        @endif

        @if($model)
            <div class="card mb-3">
                <div class="card-header">Model</div>
                <div class="card-body">
                    <pre class="mb-0">{{ json_encode($model->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</pre>
                </div>
            </div>
        @endif

        @if($activity->data != '[]')
            <div class="card mb-3">
                <div class="card-header">Data</div>
                <div class="card-body">
                    <pre class="mb-0">{{ json_encode(json_decode($activity->data), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</pre>
                </div>
            </div>
        @endif
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
@endsection