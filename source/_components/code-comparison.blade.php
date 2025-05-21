@props(['title' => null])
@props(['good' => null])
@props(['bad' => null])


@if($title)
<h3 class="">{{ $title }}</h3>
@endif

<div class="conditional-card conditional-card--good">
    <div class="status-icon">✔</div>
   {!! $good !!}
</div>

<div class="conditional-card conditional-card--bad">
    <div class="status-icon">✖</div>
   {!! $bad !!}
</div>
