<!-- Notification -->
@if (session('status'))
    <div class="alert alert-info notification">{{session('status')}}</div>
@elseif (session('alert'))
    <div class="alert alert-danger notification">{{session('alert')}}</div>
@endif



<!-- Validation -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

