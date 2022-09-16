<div class="">
    @if ($type == 'text')
        <input type="{{ $type }}" name="{{ $name }}" class="form-control" id="input-21" placeholder="{{ $name }}" />

    @elseif($type == 'file')
        <div class="input_file_body" data-toggle="modal" data-target="#fileManagerModal">
            <div class="overlay"></div>
            <img src="" style="height: 50px; margin: 5px" alt="preview">
            <input type="text" name="{{ $name }}" class="form-control" {{ isset($attr) ? $attr : '' }} placeholder="Choose file {{ $name }}">
        </div>

    @else
        <input type="{{ $type }}" name="{{ $name }}" class="form-control" id="input-21" placeholder="{{ $name }}" />

    @endif
     <span class="text-danger {{ $name }}"></span>


    <style>
        .price{
            font-size: unset;
        }
    </style>
</div>