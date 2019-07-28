<div id="editor" style="height:300px;">{!! old('body', $content) !!}</div>
<textarea style="display:none;" name="{{ $field['name'] ?? '' }}">{{ $value ?? $content }}</textarea>
