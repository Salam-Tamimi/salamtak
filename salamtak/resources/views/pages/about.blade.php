
@extends('layout.master')
@section('title', 'من نحن')

@section('content')
            <!-- About Start -->
            <div class="container-xxl py-6 mt-1" style=" margin-top: -13%; margin-bottom: -18%;">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 wow zoomIn" data-wow-delay="0.2s">
                            <img class="img-fluid" src="{{ asset('/images/about-doctors.png') }}">
                        </div>
                        <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.s">
                            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">من نحن</div>
                            <h2 class="mb-4">سلامتك</h2>
                            <p class="mb-4" style=" font-size:larger; padding-left: 10%;">
                                موقعنا يعتبر مؤسسة طبية متميزة تهدف إلى تقديم أعلى مستويات الرعاية الصحية في خدمة مجتمعنا العزيز. يمتد تاريخنا الطويل لعقود من الخبرة والتفاني في مجال الرعاية الصحية، حيث نفخر بتقديم خدمات متميزة وشاملة للمرضى من مختلف الأعمار والتخصصات الطبية.
                                
                                رسالتنا تتمثل في تحسين جودة حياة المرضى من خلال تقديم رعاية صحية متفوقة، مبتكرة، ومعتمدة على أحدث التقنيات الطبية. نحن ملتزمون بتقديم تجربة مرضية شاملة تأخذ في الاعتبار الاحترام والتواصل الفعّال مع المرضى وأسرهم.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
    
    
            <!-- why us Start -->
            <div class="container-xxl py-6"style=" margin-top: -13%; margin-bottom: -8%;">
                <div class="container">
                    <div class="row g-5 ">
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">"سلامتك "</div>
                            <h2 class="mb-4">لماذا يختارنا المرضى ؟<br> ما الذي يميز موقع  <strong style="color: var(--dark);">"سلامتك"</strong>  عن المواقع المشابهة ؟</h2>
                            <p>يوفر موقعنا العديد من المزايا للمرضى وتحسين تجربتهم في الحصول على الرعاية الصحية. ويسهم في تيسير وتحسين عملية الحجز والتواصل مع مقدمي الرعاية الصحية وتعزيز المرونة والسرعة في الحصول على الخدمات الطبية المطلوبة.</p>
                            <img class="img-fluid" src="{{ asset('/images/Medicine-amico.png') }}" style=" height: 60%; ">
                        </div>
                        
                        <div class="col-lg-7 ">
    
                            <!-- *********** slider *********** -->
                            <div class="row d-flex flex-row">
                               
                                
                                <div class="row g-5 aboutuscard">
                                <div class="col-sm-5 mx-3 wow fadeIn aboutus" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3 ">
                                        <div class="flex-shrink-0 btn-square rounded-circle me-3" style=" background-color: var(--dark); ">
                                            <i class="fa fa-cubes text-white"></i>
                                        </div>
                                        <h6 class="mb-0">&nbsp;توفير الوقت</h6>
                                    </div>
                                    <span>يعني حجز المواعيد عبر الإنترنت توفير الوقت الذي يمكن أن يستغرقه الاتصال بالمركز الطبي هاتفيًا والانتظار في الطابور</span>
                                </div>
                                <div class="col-sm-5 mx-3 wow fadeIn aboutus" data-wow-delay="0.2s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square rounded-circle me-3" style=" background-color: var(--dark); ">
                                            <i class="fa fa-percent text-white"></i>
                                        </div>
                                        <h6 class="mb-0">&nbsp;توفير الجهد</h6>
                                    </div>
                                    <span>يسمح الموقع للمرضى بحجز المواعيد في أي وقت ومن أي مكان دون الحاجة إلى الذهاب إلى المركز الطبي شخصيًا. يمكن للمرضى البحث عن الأطباء المتاحين وتحديد الموعد المناسب بسهولة تامة.</span>
                                </div>
                                <div class="col-sm-5 mx-3 wow fadeIn aboutus" data-wow-delay="0.3s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square rounded-circle me-3" style=" background-color: var(--dark);">
                                            <i class="fa fa-award text-white"></i>
                                        </div>
                                        <h6 class="mb-0">&nbsp;تقليل التكلفة</h6>
                                    </div>
                                    <span>يمكن أن يساعد في تجنب التكاليف الإضافية التي يمكن أن تتكبدها الاتصالات الهاتفية.</span>
                                </div>
                                <div class="col-sm-5 mx-3 wow fadeIn aboutus" data-wow-delay="0.4s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square rounded-circle me-3" style=" background-color: var(--dark); ">
                                            <i class="fa fa-smile-beam text-white"></i>
                                        </div>
                                        <h6 class="mb-0"> &nbsp;تقليل الازدحام: </h6>
                                    </div>
                                    <span> من خلال حجز المواعيد عبر موقعنا، يمكن أن يساهم المرضى في تقليل الزحام وتوزيع الزيارات الطبية على مدار اليوم، مما يسهل عملية التنظيم للمراكز الطبية.</span>
                                </div>
                                <div class="col-sm-5 mx-3 wow fadeIn aboutus" data-wow-delay="0.5s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square rounded-circle me-3" style=" background-color: var(--dark); ">
                                            <i class="fa fa-user-tie text-white"></i>
                                        </div>
                                        <h6 class="mb-0">&nbsp;تقييمات المرضى والتعليقات: </h6>
                                    </div>
                                    <span>يحتوي الموقع على تقييمات وتعليقات المرضى الآخرين عن الأطباء ومقدمي الخدمة الصحية، وهذا يمكن أن يساعد المرضى على اتخاذ قرار مطلع عن الطبيب الذي يرغبون في مراجعته.</span>
                                </div>
                                <div class="col-sm-5 mx-3 wow fadeIn aboutus" data-wow-delay="0.6s">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-shrink-0 btn-square rounded-circle me-3" style=" background-color: var(--dark); ">
                                            <i class="fa fa-headset text-white"></i>
                                        </div>
                                        <h6 class="mb-0">&nbsp;التذكير بالمواعيد:</h6>
                                    </div>
                                    <span>تذكير المرضى بمواعيدهم المقبلة عبر البريد الإلكتروني أو الرسائل النصية، مما يساعدهم على عدم نسيان المواعيد المهمة.</span>
                                </div>
                            </div>
                             
                            </div>
                            <!-- ***********end slider *********** -->
    
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- why us End -->
           
@endsection 
