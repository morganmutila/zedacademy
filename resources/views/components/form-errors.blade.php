@props(['errors' => $errors])
<div class="pb-2">
    <ul class="m-0 d-md-block" style="
        line-height: 1.3;
        font-size: .96rem;
        padding-left: 1.4rem;
        color: #ff5555;
    ">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>        