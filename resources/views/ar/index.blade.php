<x-ar_layout :page="$page">
    <x-slot name="hero">
        <section class="hero">
            <div class="left">
            <div class="intro">
                <p>
                ليه هاى واى <span>ليمو</span> الإختيار الأفضل لأن سياراتنا موديلات
                حديثه ومزوده بكل وسائل الرفاهية وكمان الدقة والإلتزام بالمواعيد
                وسائقينا على أعلى خبرة ودراية بالطرق، نعدكم دايما بتقديم خدمة
                مُميزه
                </p>
            </div>
            <div class="bags">
                <img alt="" src="/images/bag.png" />
            </div>
            <div class="car">
                <img alt="" src="/images/car.png" />
            </div>
            </div>
            <div class="right">
                <form method="POST" action="/" enctype="multipart/form-data">
                    @csrf
                    <div class="booking">
                        <div class="logo"><img alt="" src="/images/logo.png" /></div>
                        <div class="selections">
                            <select title="Arrival Area" name="arivcity" class="@error('arivcity') error @enderror" required>
                                <option value=""  disabled selected hidden>مكـان الوصـول</option>
                                @foreach ($arivcities as $arivcity)
                                    <option value="{{$arivcity->id}}" {{isset($formFields) && $formFields['arivcity']==$arivcity->id ? 'selected':''}}>{{$arivcity->arname}}</option>
                                @endforeach
                            </select>

                            <select title="Place of departure" name="depcity" class="@error('depcity') error @enderror" required>
                                <option value=""  disabled selected hidden>مكـان التحـرك</option>
                                    @foreach ($depcities as $depcity)
                                    <option value="{{$depcity->id}}" {{isset($formFields) && $formFields['depcity']==$depcity->id ? 'selected':''}}>{{$depcity->arname}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="selections">
                            <select title="Trip Type" name="triptype" class="@error('triptype') error @enderror" required>
                                <option value=""  disabled selected hidden>نوع الرحلـة</option>
                                @foreach ($tripTypes as $tripType)
                                    <option value="{{$tripType->id}}" {{isset($formFields) && $formFields['triptype']==$tripType->id ? 'selected':''}}>{{$tripType->arname}}</option>
                                @endforeach
                            </select>

                            <select title="Car Type" name="cartype" id="cartype" x-on:change="show=true" class="@error('cartype') error @enderror" required>
                                <option value=""  disabled selected hidden>نوع السيـارة</option>
                                @foreach ($carTypes as $carType)
                                    <option value="{{$carType->id}}" data-type="{{$carType}}" {{isset($formFields) && $formFields['cartype']==$carType->id ? 'selected':''}}>
                                        {{$carType->arname}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="automotive">
                            <div>
                                <img alt="" id="carthump" src="/images/bmw.png"/>
                                <label class="userCount" style="display: none" x-show="show"><span id="seats">0</span> <i class="fa fa-user"></i></label>
                                <label class="bagCount" style="display: none" x-show="show"><span id="bags">0</span> <i class="fa fa-shopping-bag"></i></label>
                            </div>
                            <div>@if(isset($price))<p x-show="!show">{{$price}} <span>جنيـه</span></p>@endif<button type="submit">عرض السِعر</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </x-slot>
    <x-slot name="main">
        <main>
        <section class="partsSec">
            <div>
            <h1>هـاى واى <span>ليـمو</span></h1>
            <h2>كل ماتحتاجه متوفر لدينـا وأكثر</h2>
            </div>
            <div class="spec">
            <div>
                <span><i class="fa fa-plane"></i></span>
                <h3>ليموزين المطـار</h3>
                <p>رحلات فاخرة من وإلى المطـار فى أى وقت ومن أى مكان</p>
            </div>
            <div>
                <span><i class="fa fa-hand-holding-heart"></i></span>
                <h3>راحتك أولا</h3>
                <p>لن تشعر أبدا بعناء الطريق لأن راحتك أهم أولوياتنا</p>
            </div>
            <div>
                <span><i class="fa fa-car"></i></span>
                <h3>سيارات فاخرة</h3>
                <p>إسطول ضخم من السيارات فى جميع أنحاء الجمهورية</p>
            </div>
            </div>
        </section>
        <section class="imgSec">
            <div>
            <p>
                إستمتع بتجربة لا مثيل لها من لحظة حجز رحلتك وحتى وصولك إلى وجهتك
            </p>
            </div>
        </section>
        <section class="partsSec">
            <div>
            <h1><span>اسطول </span>من السيارات</h1>
            <h2>لدينا كل أنواع السيارات التى تناسب إسلوبك</h2>
            </div>
            <div class="spec">
            <div>
                <div class="thumImg">
                <img alt="" src="/images/hiace.png" />
                </div>
                <h3>هاى آيس</h3>
                <p>تويوتا هـاى آيس<br />14 راكب</p>
            </div>
            <div>
                <div class="thumImg"><img alt="" src="/images/sorento.png" /></div>
                <h3>عائلات</h3>
                <p>تويوتا راش أو كارينز أو أرتيجا<br />7 راكب</p>
            </div>
            <div>
                <div class="thumImg">
                <img alt="" src="/images/mercedes.png" />
                </div>
                <h3>فخامة</h3>
                <p>سيارات مرسيدس أو BMW<br />3 راكب</p>
            </div>
            <div>
                <div class="thumImg"><img alt="" src="/images/toyota.png" /></div>
                <h3>كلاسيـك</h3>
                <p>سيارات تويوتا أو كيا<br />3 راكب</p>
            </div>
            </div>
            <div class="viewBtn"><a href="">عرض الكل</a></div>
        </section>
        <section class="reasonsSec">
            <div>
            <h2>أسباب إختيارك لنــا</h2>
            <ul>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                تعقيم كامل وتنظيف مستمر للسيارات
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                سرعة فى الوصول ودقة في المواعيد
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                سائقين مُدربين على أعلى مستوى
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                فى كل مكان وعلى مدار الساعة
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                قيـادة آمنة ورُقى فى الخدمـات
                </li>
            </ul>
            </div>
            <img alt="" src="/images/reasons.jpg" />
        </section>
        <section class="excellenceSec">
            <div class="whyUs">
            <div>
                <div class="light">
                <span><i class="fa fa-car"></i></span>
                <h4>أحدث السيارات</h4>
                </div>
                <div class="dark">
                <span><i class="fa fa-wifi"></i></span>
                <h4>وسائل الترفيه</h4>
                </div>
            </div>
            <div>
                <div class="dark">
                <span><i class="fa fa-user-clock"></i></span>
                <h4>دقة فى الوقت</h4>
                </div>
                <div class="light">
                <span><i class="fa fa-map-marker-alt"></i></span>
                <h4>فى أى مكان</h4>
                </div>
            </div>
            </div>
            <div>
            <h2>مع هاى واى <span>ليمو</span></h2>
            <h3>أنت على كفـوف الراحــة</h3>
            <p>
                تقديم خدمة تأجير سيارات خاصة آمنة ودقيقة ومحترفة ومرخصة مع سائقين
                يتم اختيارهم بعناية للذهاب الي اي مكان ، سياراتنا التي يقودها
                سائقينا في خدمتك. يمكننا توفير النقل حسب الطلب للأفراد أوالشركات على
                حد سواء الذين يبحثون عن أفضل الخدمات المهنية من شركات تأجير سيارات
                الليموزين. إذا كنت شركة محترفة ، فإن عملك يستحق خدمة سائق محترف
                للمساعدة في نقل موظفيك وعملائك بأمان ودقة في المواعيد وسرية وبأسلوب
                رائع أينما يريدون.
            </p>
            </div>
        </section>
        </main>
    </x-slot>
</x-layout>
