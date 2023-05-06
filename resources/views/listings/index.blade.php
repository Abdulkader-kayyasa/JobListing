<x-layout>
@include('partials.__hero')
@include('partials.__search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless ( count($listings) == null )

@foreach ($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach
    
@else
    <p>No Listing Found</p>
@endunless

</div>

</x-layout>