<div class="vpt-signup-form vpt-section" id="petition">
    <div class="vpt-signup-form__container">
        <div class="fdb-signup-form__inner">
            <form action="/supporters" method="POST" class="vpt-form mt-6">
                @foreach (__("vpt.form.fields") as $field)
                    <x-form-field :name="$field['name']" :label="$field['label']" :placeholder="$field['placeholder'] ?? ''" :required="$field['required']" :type="$field['type']" :checked="$field['checked'] ?? false" :classes="$field['class'] ?? false" />
                @endforeach
                @csrf
                <input type="hidden" name="source" value="{{$_COOKIE['sr_source'] ?? ""}}">
                <input type="hidden" name="locale" value="{{app()->getLocale()}}">
                <button type="submit" class="vpt-button !bg-white !text-primary w-full flex justify-center items-center gap-x-2 mt-2 font-bold">{{__("vpt.form.submit") }}  <i class="icofont-duotone icofont-apply"></i></button>
            </form>
        </div>
    </div>
</div>
