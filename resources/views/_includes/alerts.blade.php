@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif
@foreach (Alert::getMessages() as $type => $messages)
    @foreach ($messages as $message)
        <div class="alert alert-{{ $type }}">{{ $message }}</div>
    @endforeach
@endforeach