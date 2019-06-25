@section('styles')
    @append
    @if(session()->has('fail'))
        <section class="info-box fail">
            {{session()->get('fail')}}
        </section>
        @endif
@if(session()->has('success'))
    <section class="info-box success">
        {{session()->get('success')}}
    </section>
@endif
@if(count($errors)>0)
    <section class="info-box fail">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
    </section>
@endif