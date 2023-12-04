<div class="w-full pb-8 nav_barre bg-white flex justify-evenly flex_col_800">
    <form action="{{ route('search') }}" method="GET" class="flex h-10 w-1/2">
      <input type="text" name="query" placeholder="Rechercher votre article..." class="w-3/4 open nav_barre rounded-l-lg ">
      <button type="submit" class="border-solid border-2 p-2 rounded-r-lg nav bg_pink"><i class="fa fa-search flex justify-center hover"></i></button> 
    </form>
</div>