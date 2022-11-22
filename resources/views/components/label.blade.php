@props(['value'])

{{-- 
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
--}}

<label {{ $attributes->merge(['class' => 'form-control form-control-solid h-auto p-6 rounded-lg']) }}>
    {{ $value ?? $slot }}
</label>
