{{-- @extends('layout.master')
@section('title','سلامتك - معلومات الطبيب')
@section('css')
      <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link href="{{ asset('/css/doctor-single.css') }}" rel="stylesheet">
@endsection
@section('content') --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <div id="blur">
          <div class="d-flex justify-content-around flex-wrap mx-5 row ">
    <img src="{{ asset('/images/doctor2.png') }}" alt="صورة الدكتور" style="width: 24%;">
    <div class="col mt-5"> 
    <br> <br>
    <strong class="d-flex">
        <h2> {{ $doctor->name }}  &nbsp;</h2>    
        <button class="btn view-modal">
            <svg width="53px" height="53px" viewBox="-2.4 -2.4 28.80 28.80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" transform="matrix(-1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#f0f0f0" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>شارك هذا الطبيب</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="System" transform="translate(-1296.000000, -48.000000)" fill-rule="nonzero"> <g id="share_forward_fill" transform="translate(1296.000000, 48.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M10.1141,4.49112 L9.91063,7.63542 L9.891,8.05196 L9.8012,8.06134 C5.36297,8.583 2,12.3671 2,17 C2,17.457 2.03414,17.91 2.10168,18.3565 C2.38094,20.2022 2.59088,20.3807 3.87391,18.8547 C4.18977,18.479 4.54227,18.1439 4.91368,17.8247 C6.24977,16.7224 7.90632,16.0786 9.66842,16.0067 L9.894,16.002 L9.95549,17.2308 L10.1215,19.576 C10.2008,20.38 11.0467,20.9293 11.8253,20.4902 C12.1766,20.2919 12.52,20.0809 12.8641,19.8706 C14.652,18.7519 16.3249,17.4666 17.9553,16.1321 C18.9147,15.3326 19.7558,14.5744 20.4714,13.8844 C20.8007,13.5606 21.1304,13.2376 21.4496,12.9037 C21.9118,12.42 21.9575,11.6189 21.4737,11.1124 C20.3603,9.94706 18.7862,8.48751 16.8271,6.94049 C15.2394,5.69825 13.597,4.53773 11.8571,3.51856 C11.0203,3.04172 10.1902,3.69599 10.1141,4.49112 Z" id="路径" fill="#0d51ac"> </path> </g> </g> </g> </g></svg>    
        </button>
    </strong>

    @if ($doctor->departments)
        <h4 style="color: rgb(207, 206, 206);">{{ $doctor->departments->name }}</h4>
    @else
        <p style="color: red;"></p>
    @endif

    <div>
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#fcf531"></path> </g></svg>           
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#fcf531"></path> </g></svg>           
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#fcf531"></path> </g></svg>           
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#fcf531"></path> </g></svg>           
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" stroke="#e2fd1c" stroke-width="1.5"></path> </g></svg>                
        <span><a href="#reviews"><button style="font-size: small;"class="btn btn-link">التقييمات</button></a></span>
    </div> <br>
    <div class="d-flex">
        <svg width="35px" height="35px" viewBox="0 0 72 72" id="emoji" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="color"> <path fill="#D0CFCE" d="M36,65.0208c0,0-3.091-5.9737-13.8722-26.8922C20,34,17.3106,30.4224,17.3106,25.6045 c0-10.3214,8.3671-18.6885,18.6885-18.6885l0.0001,8.0285c0,0-10.4584,0.5199-10.4584,10.3971s10.4587,10.7561,10.4587,10.7561 L36,65.0208z"></path> <path fill="#D0CFCE" d="M35.9736,65.0172c0,0,2.998-6.0172,13.8722-26.8922c2.0634-3.9611,4.8173-7.7062,4.8173-12.5242 c0-10.3214-8.3671-18.6885-18.6885-18.6885l-0.2836,8.0321c0,0,11.1773,0.2666,11.0085,10.7347S35.6907,36.0975,35.6907,36.0975 L35.9736,65.0172z"></path> <path fill="#9B9B9A" d="M36.8281,7.5469c0,0,9.7494,4.0365,11.8385,15.2865C50.7057,33.8135,39.5,53,36.5,62.6667 S54.6914,28,54.6914,28S55.1562,7.2812,36.8281,7.5469z"></path> </g> <g id="hair"></g> <g id="skin"></g> <g id="skin-shadow"></g> <g id="line"> <circle cx="36.001" cy="25.5211" r="10.5766" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle> <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M36,65.0208c0,0-3.091-5.9737-13.8722-26.8922C20,34,17.3106,30.4224,17.3106,25.6045c0-10.3214,8.3671-18.6885,18.6885-18.6885"></path> <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M36.002,65.0172c0,0,2.998-6.0172,13.8722-26.8922c2.0634-3.9611,4.8173-7.7062,4.8173-12.5242 c0-10.3214-8.3671-18.6885-18.6885-18.6885"></path> </g> </g></svg>
        <h5> {{ $doctor->hospitals->location }}</h5>
    </div>
    <div class="d-flex">
        <svg width="40px" height="40px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#dde4fd"></path><path d="M539.5 838.8c-1.4 0-2.9-0.3-4.2-1L330.1 730.3a8.95 8.95 0 0 1-3.8-12.1L529 331.1a8.92 8.92 0 0 1 8-4.8c1.4 0 2.9 0.3 4.2 1l205.2 107.5c4.4 2.3 6.1 7.7 3.8 12.1L547.4 834a8.92 8.92 0 0 1-7.9 4.8z" fill="#7584f0"></path><path d="M537 335.3l205.2 107.5-202.7 387-205.2-107.4L537 335.3m0-17.9c-1.8 0-3.6 0.3-5.3 0.8-4.5 1.4-8.3 4.6-10.5 8.8L318.4 714.1a17.9 17.9 0 0 0 7.6 24.2l205.2 107.5c2.6 1.4 5.4 2 8.3 2 1.8 0 3.6-0.3 5.3-0.8 4.5-1.4 8.3-4.6 10.5-8.8L758.1 451a17.88 17.88 0 0 0-7.6-24.1L545.3 319.4c-2.5-1.3-5.4-2-8.3-2z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-2-0.2-2.9-0.5l-254-87a8.98 8.98 0 0 1-5.6-11.4L440 257.4c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l254 87c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-164 479.3c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M448.6 260.4l254 87-164.2 479.1-254-87 164.2-479.1m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3L267.5 733.7c-3.2 9.4 1.8 19.5 11.1 22.7l254 87c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l164.1-479.2c3.2-9.4-1.8-19.5-11.1-22.7l-254-87c-1.9-0.6-3.9-0.9-5.8-0.9z" fill="#151B28"></path><path d="M448.6 323c-6.9 0-13.7-1.1-20.3-3.4-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8a62.83 62.83 0 0 1-59.3 42.4z" fill="#FFFFFF"></path><path d="M448.6 260.4l50.8 17.4a53.82 53.82 0 0 1-50.8 36.3c-5.8 0-11.6-0.9-17.4-2.9l17.4-50.8m0-17.9c-7.4 0-14.4 4.7-16.9 12.1l-17.4 50.8c-1.5 4.5-1.2 9.4 0.9 13.7 2.1 4.3 5.8 7.5 10.3 9.1 7.5 2.6 15.3 3.9 23.2 3.9a71.6 71.6 0 0 0 67.7-48.4c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1l-50.8-17.4c-2-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M685.1 407.1c-1 0-2-0.2-2.9-0.5a62.74 62.74 0 0 1-39-79.6c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c4.7 1.6 7.2 6.7 5.6 11.4L693.6 401c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M651.7 330l50.8 17.4-17.4 50.8a53.8 53.8 0 0 1-33.4-68.2m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3c-12.8 37.3 7.2 78.1 44.5 90.9 1.9 0.7 3.9 1 5.8 1 7.4 0 14.4-4.7 16.9-12.1l17.4-50.8c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1L657.5 313c-1.8-0.6-3.8-0.9-5.8-0.9z" fill="#151B28"></path><path d="M335.3 765.9c-1 0-2-0.2-2.9-0.5L281.6 748c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c0.8-2.2 2.4-4.1 4.5-5.1a8.9 8.9 0 0 1 6.8-0.4 62.74 62.74 0 0 1 39 79.6c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.5-2.7 0.8-4 0.8z" fill="#FFFFFF"></path><path d="M301.9 688.8c28.1 9.6 43 40.1 33.4 68.2l-50.8-17.4 17.4-50.8m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3l-17.4 50.8c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3 6.2-18.1 5-37.5-3.4-54.7-8.4-17.2-23-30-41.1-36.2-1.9-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-1.9-0.2-2.9-0.5l-50.8-17.4c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8a62.75 62.75 0 0 1 59.2-42.4c6.9 0 13.8 1.1 20.4 3.4 2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-17.4 50.8a9.01 9.01 0 0 1-8.5 6.1z" fill="#FFFFFF"></path><path d="M538.4 772.8c5.8 0 11.7 0.9 17.5 2.9l-17.4 50.8-50.8-17.4a53.56 53.56 0 0 1 50.7-36.3m0-17.9v17.9-17.9a71.6 71.6 0 0 0-67.7 48.4c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l17.4-50.8c3.2-9.4-1.8-19.5-11.1-22.7-7.6-2.6-15.4-3.9-23.3-3.9z" fill="#151B28"></path><path d="M493.6 692.4c-16.4 0-32.6-2.7-48.3-8.1-1-0.4-2.2-0.7-3.4-1.3a148.5 148.5 0 0 1-97.2-143c0-0.8 0.2-1.7 0.4-2.4l27.6-80.6c0.3-0.8 0.7-1.5 1.2-2.2 27.9-37.8 72.7-60.3 119.7-60.3 16.4 0 32.6 2.7 48.2 8.1 51.5 17.6 89.2 61.9 98.4 115.5 1.7 9.5 2.5 19.2 2.3 28.8 0 0.8-0.2 1.6-0.4 2.4l-27.6 80.6c-0.3 0.8-0.7 1.5-1.2 2.2-28 37.7-72.7 60.3-119.7 60.3z" fill="#FFFFFF"></path><path d="M493.5 402.6c15.1 0 30.5 2.5 45.6 7.6 50.3 17.2 84.6 60.1 93 109.2 1.6 8.9 2.4 18.1 2.2 27.2l-27.6 80.6a141.19 141.19 0 0 1-113.1 57.1c-15.1 0-30.5-2.5-45.7-7.6-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-57.7-21.3-93.3-76.6-91.9-135.2l27.6-80.6c26.4-35.8 68.7-57 113.1-57m0-16.3c-49.6 0-96.8 23.8-126.3 63.6-1 1.3-1.8 2.8-2.3 4.4l-27.6 80.6c-0.5 1.6-0.8 3.2-0.9 4.9a156.78 156.78 0 0 0 102.3 150.7l3.8 1.5c16.5 5.7 33.6 8.5 50.9 8.5 49.6 0 96.7-23.8 126.2-63.6 1-1.3 1.8-2.8 2.3-4.4l27.6-80.6c0.5-1.6 0.8-3.2 0.9-4.9 0.3-10.1-0.6-20.4-2.4-30.5a156.69 156.69 0 0 0-103.8-121.7c-16.3-5.6-33.4-8.5-50.7-8.5z" fill="#151B28"></path><path d="M634.3 546.6l-27.6 80.6c-35.5 48-99.2 69.8-158.8 49.4-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-43.1-31.7-62.9-88.9-44.6-142.2 22.5-65.7 94-100.7 159.6-78.3a125.1 125.1 0 0 1 72.5 64.4 140 140 0 0 1 2.1 27.4z" fill="#2AEFC8"></path><path d="M456.5 496.9c-11 5.4-18 10.7-22.3 23.3-4.8 14.1 1.3 26.5 14.5 31 34.1 11.7 45.7-54.8 94.4-38.1 21.3 7.3 31.1 25.7 26.7 47.7l22.3 7.6-4.2 12.2-22.1-7.6c-6.4 14-18.5 25.7-30.3 32l-8.6-11.7c11.4-6.4 22.1-15.5 26.9-29.6 5.9-17.3-0.5-29.3-15.1-34.3-38.1-13.1-50.7 53.1-94.9 37.9-19.7-6.7-29.4-24.9-25.7-44.9l-22.3-7.6 4.2-12.2 22.1 7.6c6.3-13.8 16.3-20.7 27.4-25.6l7 12.3z" fill=""></path></g></svg>
        <h5>الكشفية: {{ $doctor->price }} دينار أردني</h5>
    </div>  
   </div>


   <div class="pt-5 col" >
    @php
    use App\Http\Controllers\AppointmentController;
    @endphp
    <h3>جدول مواعيد الدوام الرسمي لدى الدكتور {{ $doctor->name }}</h3>
    @if ($schedules && count($schedules) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>أيام الأسبوع</th>
                    <th>بداية الدوام</th>
                    <th>نهاية الدوام </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->day_of_week }}</td>
                        <td>{{ $schedule->start_time }}</td>
                        <td>{{ $schedule->end_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('appointments.create', ['doctor_id' => $doctor_id]) }}">احجز موعدك الآن</a>
        {{-- <a href="{{ route('appointments.create') }}">احجز موعدك الآن</a> --}}
    
    @else
        <p>لم يتم إضافة مواعيد الدوام لحد الآن</p>
    @endif
    

       {{-- <section id="availability" class="availability availability--profile">
     <div class="availability__calendar">
        <div class="availability__next">
            <span class="custom-arrow arrow--right"></span>
        </div>
        <div class="availability__previous">
            <span class="custom-arrow"></span>
        </div>
        <div class="availability__content">
            <div class="availability__day">
                <div class="availability__day-header">اليـوم</div>
                <availability-day class="ng-star-inserted">
                    <div class="availability__time ng-star-inserted">
                        <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-12T13:00:00.0000000&amp;DId=5816">01:00 م</a>
                        </div>
                        <div class="availability__time availability__time--booked ng-star-inserted">
                            <span class="block ng-star-inserted" title="الموعد محجوز">01:20 م</span>
                        </div>
                            <div class="availability__time ng-star-inserted">
                                <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-12T13:40:00.0000000&amp;DId=5816">01:40 م</a>
                                </div>
                                <div class="availability__time ng-star-inserted">
                                    <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-12T14:00:00.0000000&amp;DId=5816">02:00 م</a>
                                </div>
                                <div class="availability__time availability__time--booked ng-star-inserted">
                                    <span class="block ng-star-inserted" title="الموعد محجوز">02:20 م</span>
                                </div>
                            </availability-day>
                            <div class="availability__more-button ng-star-inserted">
                                <span class="ng-star-inserted">المزيد&nbsp;</span>
                                <span class="custom-arrow arrow--down ng-star-inserted"></span>
                            </div>
                            <div class="btn btn--book ng-star-inserted rounded-pill">إحجز</div>
                        </div>
                        <div class="availability__day">
                            <div class="availability__day-header">غـداً</div><availability-day class="ng-star-inserted">
                                <div class="availability__time availability__time--booked ng-star-inserted">
                                    <span class="block ng-star-inserted" title="الموعد محجوز">11:20 ص</span>
                                </div>
                                <div class="availability__time ng-star-inserted">
                                    <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-13T11:20:00.0000000&amp;DId=5816">11:20 ص</a>
                                </div>
                                <div class="availability__time ng-star-inserted">
                                    <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-13T11:40:00.0000000&amp;DId=5816">11:40 ص</a>
                                </div>
                                <div class="availability__time ng-star-inserted">
                                    <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-13T12:00:00.0000000&amp;DId=5816">12:00 م</a>
                                    </div>
                                    <div class="availability__time availability__time--booked ng-star-inserted">
                                        <span class="block ng-star-inserted" title="الموعد محجوز">12:20 م</span>
                                    </div>
                                </availability-day>
                                <div class="availability__more-button ng-star-inserted">
                                    <span class="ng-star-inserted">المزيد &nbsp;</span>
                                    <span class="custom-arrow arrow--down ng-star-inserted"></span>
                                </div>
                                <div class="btn btn--book ng-star-inserted rounded-pill">إحجز</div>
                            </div>
                            <div class="availability__day">
                                <div class="availability__day-header">إثنين 8/14</div>
                                <availability-day class="ng-star-inserted">
                                    <div class="availability__time ng-star-inserted">
                                        <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-14T11:00:00.0000000&amp;DId=5816">11:00 ص</a>
                                    </div>
                                    <div class="availability__time availability__time--booked ng-star-inserted">
                                        <span class="block ng-star-inserted" title="الموعد محجوز">11:20 ص</span>
                                    </div>
                                    <div class="availability__time ng-star-inserted">
                                        <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-14T11:40:00.0000000&amp;DId=5816">11:40 ص</a>
                                    </div>
                                    <div class="availability__time ng-star-inserted">
                                        <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-14T12:00:00.0000000&amp;DId=5816">12:00 م</a>
                                    </div>
                                    <div class="availability__time ng-star-inserted">
                                        <a class="block ng-star-inserted" href="/ar/Jordan/doctor/Booking/Request?Destination=inclinic&amp;sc=1&amp;slotDateTime=2023-08-14T12:20:00.0000000&amp;DId=5816">12:20 م</a>
                                    </div>
                                </availability-day>
                                <div class="availability__more-button ng-star-inserted">
                                    <span class="ng-star-inserted">المزيد &nbsp;</span>
                                    <span class="custom-arrow arrow--down ng-star-inserted"></span>
                                </div>
                                <div class="btn btn--book ng-star-inserted rounded-pill">إحجز</div>
                            </div>
                        </div>
                    </div>
                    <a class="availability__info" href="/ar/Jordan/dr/دكتورة-لجين-مرابحة-نسائية-وتوليد_5816?Destination=inclinic">
                        <div class="ng-star-inserted">
                            <span>المواعيد المتاحة من</span>
                            <span class="availability__info-date"> 01:00 م</span>
                        </div>
                    </a>
                </section> --}}
   </div>

    </div>

    <div class="px-5 py-2 me-5" style="width: 60%; background-color: rgb(238, 238, 238);">
        <div>
            <br><h4>الخبرة المهنية :</h4>
            {{ $doctor->experience }}
        </div><br>
    </div>
<hr>
<!-- *******feedback******* -->
<div class="main" id="reviews">
 <section class="container review">
      <div class="title">
        <h2 style="color: var(--dark);">تقييمات الطبيب</h2>
        <div class="underline"></div>
      </div>
  
      <article class="reviewcard">
        <div class="img-container">
          <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="person-img">
        </div> 
        <h4 class="author">اسم المعلق</h4>
        
        <p class="info">
            ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر        
        </p>
  
        <div class="button-container">
          <button class="prev-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
              </svg>
          </button>
          <button class="next-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
              </svg>
          </button>
        </div>
  
        <!-- <button class="random-btn"><svg fill="#0d51ac" width="40px" height="40px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>random</title> <path d="M0 24q0 0.832 0.576 1.44t1.44 0.576h1.984q2.048 0 3.904-0.8t3.168-2.144 2.144-3.2 0.8-3.872q0-2.464 1.728-4.224t4.256-1.76h4v1.984q0 0.672 0.384 1.152t0.864 0.704 1.12 0.128 1.056-0.544l4-4q0.608-0.64 0.576-1.44t-0.576-1.408l-4-4q-0.48-0.448-1.088-0.544t-1.12 0.128-0.864 0.704-0.352 1.12v2.016h-4q-2.016 0-3.872 0.8t-3.2 2.112-2.144 3.2-0.768 3.872q0 2.496-1.76 4.256t-4.256 1.76h-1.984q-0.832 0-1.44 0.576t-0.576 1.408zM0 8.032q0 0.832 0.576 1.408t1.44 0.576h1.984q1.408 0 2.592 0.608t2.080 1.664q0.672-2.048 1.984-3.68-2.912-2.592-6.656-2.592h-1.984q-0.832 0-1.44 0.608t-0.576 1.408zM13.376 23.456q2.848 2.56 6.624 2.56h4v2.016q0 0.64 0.384 1.152t0.864 0.704 1.12 0.096 1.056-0.544l4-4q0.608-0.608 0.576-1.44t-0.576-1.376l-4-4q-0.48-0.48-1.088-0.576t-1.12 0.128-0.864 0.736-0.352 1.12v1.984h-4q-1.376 0-2.592-0.576t-2.048-1.664q-0.704 2.048-1.984 3.68z"></path> </g></svg></button> -->
      </article>
    </section>
</div>
<!-- ******* end feedback******* -->
    </div>



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
<!-- *********** social media *********** -->
<div class="popup">
    <header>
      <span>مشاركة صفحة هذا الطبيب</span>
      <div class="close"><i class="uil uil-times"></i></div>
    </header>
    <div class="content">
      <p>مشاركة الرابط باستخدام</p>
      <ul class="icons">
        <a href="#" onclick="shareOnFacebook()"><i class="fab fa-facebook-f">ff</i></a>
        <a href="#" onclick="shareOnTwitter()"><i class="fab fa-twitter"></i></a>
        <a href="#" onclick="shareOnInstagram()"><i class="fab fa-instagram"></i></a>
        <a href="#" onclick="shareOnWhatsApp()"><i class="fab fa-whatsapp"></i></a>
        <a href="#" onclick="shareOnTelegram()"><i class="fab fa-telegram-plane"></i></a>
      </ul>
      <p>أو قم بنسخ الرابط</p>
      <div class="field">
        <i class="url-icon uil uil-link"></i>
        <input type="text" readonly id="pageLinkInput">
        <button class="btn" style="background-color: var(--primary); color: white;" onclick="copyLink()">نسخ</button>
      </div>
    </div>
  </div>



{{-- @endsection

@section('js') --}}


{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Enable time dropdown when a day is selected
        $('#day').change(function () {
            var selectedDay = $(this).val();
            var startTime = $('#day option:selected').data('start');
            var endTime = $('#day option:selected').data('end');
            var interval = 30;
            var format = 'HH:mm';

            // Populate time dropdown
            $('#time').empty();
            var currentTime = moment(startTime, format);
            var endTimeMoment = moment(endTime, format);
            while (currentTime.isBefore(endTimeMoment)) {
                $('#time').append('<option value="' + currentTime.format(format) + '">' + currentTime.format(format) + '</option>');
                currentTime.add(interval, 'minutes');
            }

            // Enable time dropdown
            $('#time').prop('disabled', false);
        });
    });
</script> --}}

<script>
  // Set the value of the input field with the current page link
  document.getElementById('pageLinkInput').value = window.location.href;

  // Function to copy the link to the clipboard
  function copyLink() {
    var copyText = document.getElementById('pageLinkInput');
    copyText.select();
    document.execCommand('copy');
    alert('تم نسخ الرابط: ' + copyText.value);
  }

  // Function to share on Facebook
  function shareOnFacebook() {
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank');
  }

  // Function to share on Twitter
  function shareOnTwitter() {
    window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location.href), '_blank');
  }

  // Function to share on Instagram
  function shareOnInstagram() {
    // Use Instagram sharing URL or fallback to the page link
    window.open('https://www.instagram.com/share?url=' + encodeURIComponent(window.location.href), '_blank');
  }

  // Function to share on WhatsApp
  function shareOnWhatsApp() {
    window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(window.location.href), '_blank');
  }

  // Function to share on Telegram
  function shareOnTelegram() {
    window.open('https://t.me/share/url?url=' + encodeURIComponent(window.location.href), '_blank');
  }
</script>


    {{-- <script>
    const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    field = popup.querySelector(".field"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");

    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
      var blur = document.getElementById("blur");
      blur.classList.toggle("active");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }

    copy.onclick = ()=>{
      input.select(); //select input value
      if(document.execCommand("copy")){ //if the selected text copy
        field.classList.add("active");
        copy.innerText = "نسخ";
        setTimeout(()=>{
          window.getSelection().removeAllRanges(); //remove selection from document
          field.classList.remove("active");
          copy.innerText = "Copy";
        }, 3000);
      }
    }
  </script>  
  <script src="../js/doctor-single.js"></script>

  <script src="plugins/validate.js"></script>
  <script src="plugins/wow.js"></script>
  <script src="plugins/jquery-ui.js"></script>
  <script src="plugins/timePicker.js"></script>
@endsection --}}





