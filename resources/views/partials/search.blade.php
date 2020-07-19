<div class="brown--color box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="{{route('products_search')}}#all-books">
        <div class="field__search">
            <input type="text" placeholder="Saisissez votre recherche ici..." name="q" value="{{request()->q ?? ''}}">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>Fermer</span>
    </div>
</div>

