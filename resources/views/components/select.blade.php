@props([
    'options' => [], // Array of options to display in the select
    'disabled' => false, // Whether the select is disabled
    'selected' => null, // The selected value
])

<select
    @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}
>
    @foreach($options as $value => $label)
        <option value="{{ $value }}" @if($value == $selected) selected @endif>{{ $label }}</option>
    @endforeach
</select>
