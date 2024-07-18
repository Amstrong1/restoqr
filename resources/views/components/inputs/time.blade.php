<div class="relative">
    <input step="0" type="time" {!! $attributes->merge([
        'class' => implode(' ', [
            $errors->has($name)
                ? 'form-input is-invalid block w-full peer min-h-[auto] rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none'
                : 'form-input block w-full peer min-h-[auto] rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none',
        ]),
    ]) !!}>
</div>
