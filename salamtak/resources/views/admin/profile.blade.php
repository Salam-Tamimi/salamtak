@include('admin.Layout.navbar')

@include('admin.Layout.sidebar') 
@php
    $user= Auth::user();
@endphp
<div id="content" dir="rtl" style="text-align: right; margin-right:10%">
    @include('profile.edit')
</div>