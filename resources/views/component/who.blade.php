
@if(Auth::guard('web')->check())
    <P class="text-success">
        you are logged in as <strong>USER</strong>
    </P>
    @else
<p class="text-danger">
    You are logged out as <strong>USER</strong>
</p>

    @endif


@if(Auth::guard('admin')->check())
    <P class="text-success">
        you are logged in as <strong>ADMIN</strong>
    </P>
@else
    <p class="text-danger">
        You are logged out as <strong>ADMIN</strong>
    </p>

@endif