<li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
  <div class="search-box">
    <div class="content">
      <div class="form-control">
        <form action="{{route('search')}}" method="GET">
          <input type="text" id="query" name="query" placeholder="cari reksadana" value="{{ request()->input('query') }}" />
          <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a> 
        </form>
      </div>
      <a href="#" class="close-btn">x</a> </div>
  </div>
</li>