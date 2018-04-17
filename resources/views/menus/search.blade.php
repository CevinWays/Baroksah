<form action="{{route('search')}}" method="GET" class="sky-form sty-one" sty-one>
    <fieldset class="sty-one">
          <label class="input">
            <i class="icon-append fa fa-search"></i>
            <input name="query" id="query" type="text" value="{{ request()->input('query') }}" placeholder="cari reksadana">
          </label>
    </fieldset>
</form>
{{-- end form --}}