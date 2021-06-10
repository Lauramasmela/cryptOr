@if(session()->has('success_msg'))
    <div class="msg success">{{session()->get('success_msg')}}</div>
    {{session()->forget('success_msg')}}
@endif

@if(session()->has('error_msg'))
    <div class="msg error">{{session()->get('error_msg')}}</div>
    {{session()->forget('error_msg')}}
@endif
