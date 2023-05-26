@extends("app")
@section("content")

<section class="flex flex-col justify-center px-6 py-8  gap-6 sm:gap-10 md:gap-16 lg:flex-row ">
      <!-- content - start -->
      <div class="flex flex-col justify-center sm:text-center lg:py-12 lg:text-left xl:w-5/12">
        <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">Very proud to introduce</p>

        <h1 class="text-black-800 mb-8 text-4xl font-bold sm:text-5xl md:mb-12 md:text-6xl">Revolutionary way to build the web</h1>

        <p class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random.</p>

        <div class="flex flex-col gap-2.5 sm:flex-row sm:justify-center lg:justify-start">
          <a href="#" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Start now</a>

          <a href="#" class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Take tour</a>
        </div>
      </div>
      <!-- content - end -->

      <!-- image - start -->
      <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12">
        <img src="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Fakurian Design" class="h-full w-full object-cover object-center" />
      </div>
      <!-- image - end -->


    </section>
    <section>
        <h1 class="text-center font-bold text-4xl underline"> Feature Products </h1>
        <div class="grid grid-cols-5 gap-2 px-8 pt-4">
            @foreach ($products as $items)
               <!-- product - start -->
      <div>
        <a href="/detail/{{$items['id']}}" class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3">
          <img src="{{$items['gallery']}}"  loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

          <div class="absolute left-0 bottom-2 flex gap-2">
            <span class="rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white">-50%</span>
            <span class="rounded-lg bg-white px-3 py-1.5 text-sm font-bold uppercase tracking-wider text-gray-800">New</span>
          </div>
        </a>

        <div class="flex items-start justify-between gap-2 px-2">
          <div class="flex flex-col">
            <a href="#" class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl">{{$items["name"]}}</a>
            <span class="text-gray-500">by {{$items["category"]}}</span>
          </div>

          <div class="flex flex-col items-end">
            <span class="font-bold text-gray-600 lg:text-lg">${{$items["price"]}}</span>
            <span class="text-sm text-red-500 line-through">$39.99</span>
          </div>
        </div>
      </div>
      <!-- product - end -->
<!-- 
        <a href="/detail/{{$items['id']}}" class="bg-gray-200 rounded-md py-2 px-2">
          <div style="width:230px; height: 180px; margin: auto;" class="group cursor-pointer hover:bg-gray-200 overflow-hidden  relative bg-gray-200 rounded-md">
            <img src="{{$items['gallery']}}" style="width: 100%; height:100%; object-fit: fill;" alt="{{$items['name']}}" class="group-hover:scale-[1.1] transition-all">
          </div>
            <div class=" z-1 bg-black text-white px-2 py-2 capitalize">{{$items["category"]}} </div>

          <div class="flex justify-between items-center px-2 pt-2">
            <h1 class="font-bold text-xl" class="px-2">{{$items["name"]}}</h1>
            <p class="bg-orange-500 rounded-md px-2 py-1  text-white">{{$items["price"]}}</p>
          </div>
        </a> -->
            @endforeach
          </div>
      </section>
@endsection