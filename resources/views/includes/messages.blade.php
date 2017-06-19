@if(Session::has('msg'))
    <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('msg') }}</div>
@endif