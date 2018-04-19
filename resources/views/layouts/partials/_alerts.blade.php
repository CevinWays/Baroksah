@if (session()->has('success_message'))
<div class="alert alert-primary animate-in" data-anim-delay="300" data-anim-type="fade-in-down">
    <span>
        <i class="fa fa-thumbs-o-up"></i>
    </span>
    {{ session()->get('success_message') }}
</div>
@endif @if(count($errors) > 0)
<div class="alert alert-danger animate-in" data-anim-delay="400" data-anim-type="fade-in-down">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            <span class="fa fa-info-circle"></span> {!! $error !!}</li>
        @endforeach
    </ul>
</div>
@endif