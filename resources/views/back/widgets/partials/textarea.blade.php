@php
    if (isset($widget)) {
        $input_value = $widget->option($option['key'], $option['default'] ?? '');
    } else {
        $input_value = $option['default'] ?? '';
    }
@endphp

<div class="{{ $option['class'] ?? 'col-md-6 col-12' }}">
    <div class="form-group">
        <label>{{ $option['title'] }}</label>
        <textarea type="{{ $option['type'] ?? 'text' }}" class="form-control" name="options[{{ $option['key'] }}]"  {!! $option['attributes'] ?? '' !!}>{{ $input_value }}</textarea>
    </div>
</div>
