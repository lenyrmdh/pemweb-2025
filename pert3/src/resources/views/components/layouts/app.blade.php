<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.partials.header')


<body>
@include('components.partials.navbar')


	{{ $slot }}

{{-- @yyield('footer') --}}
{{-- @include('components.partials.footer')--}}

</body>
@include('components.partials.script')
</html>