<select id="country_id" name="country_id" class="select2 browser-default">
    <option value="" disabled selected>{{ trans('q_s.select') }}</option>
    @foreach ($countries as $country)
    <option value="{{ $country->id }}" {{ $country->name=="Saudi Arabia"?"selected":'' }}>{{ $country->name }}</option>
    @endforeach
</select>
<label class="active">{{ trans('a_c.country') }}<span class="text-danger">*</span></label>
