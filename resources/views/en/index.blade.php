<x-en_layout :page="$page">
    <x-slot name="hero">
        <section class="hero">
            <div class="left">
            <div class="intro">
                <p>
                Why is Highway <span>Limo</span> the best choice? Because our cars are modern models and equipped with all luxury amenities,
                Accuracy and punctuality drivers with experience and knowledge of the roads, We promise to provide you with exceptional service.
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
                <form method="POST" action="/en" enctype="multipart/form-data">
                    @csrf
                    <div class="booking">
                        <div class="logo"><img alt="" src="/images/logo.png" /></div>
                        <div class="selections">
                            <select title="Place of departure" name="depcity" class="@error('depcity') error @enderror" required>
                                <option value=""  disabled selected hidden>Departial place</option>
                                    @foreach ($depcities as $depcity)
                                    <option value="{{$depcity->id}}" {{isset($formFields) && $formFields['depcity']==$depcity->id ? 'selected':''}}>{{$depcity->enname}}</option>
                                @endforeach
                            </select>

                            <select title="Arrival Area" name="arivcity" class="@error('arivcity') error @enderror" required>
                                <option value=""  disabled selected hidden>Destination place</option>
                                @foreach ($arivcities as $arivcity)
                                    <option value="{{$arivcity->id}}" {{isset($formFields) && $formFields['arivcity']==$arivcity->id ? 'selected':''}}>{{$arivcity->enname}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="selections">
                            <select title="Trip Type" name="triptype" class="@error('triptype') error @enderror" required>
                                <option value=""  disabled selected hidden>Trip type</option>
                                @foreach ($tripTypes as $tripType)
                                    <option value="{{$tripType->id}}" {{isset($formFields) && $formFields['triptype']==$tripType->id ? 'selected':''}}>{{$tripType->enname}}</option>
                                @endforeach
                            </select>

                            <select title="Car Type" name="cartype" id="cartype" x-on:change="show=true" class="@error('cartype') error @enderror" required>
                                <option value=""  disabled selected hidden>Car type</option>
                                @foreach ($carTypes as $carType)
                                    <option value="{{$carType->id}}" data-type="{{$carType}}" {{isset($formFields) && $formFields['cartype']==$carType->id ? 'selected':''}}>
                                        {{$carType->enname}}
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
                            <div>@if(isset($price))<p>{{$price}} <span>LE</span></p>@endif<button type="submit">Show price</button></div>
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
            <h1>Highway <span>Limo</span></h1>
            <h2>We have everything you need and more</h2>
            </div>
            <div class="spec">
            <div>
                <span><i class="fa fa-plane"></i></span>
                <h3>Airport limousine</h3>
                <p>Luxury trips to and from the airport at any time and from anywhere</p>
            </div>
            <div>
                <span><i class="fa fa-hand-holding-heart"></i></span>
                <h3>Your comfort first</h3>
                <p>You will never feel the hardship of the road because your comfort is our most important priority</p>
            </div>
            <div>
                <span><i class="fa fa-car"></i></span>
                <h3>Luxury cars</h3>
                <p>A huge fleet of cars throughout the republic</p>
            </div>
            </div>
        </section>
        <section class="imgSec">
            <div>
            <p>
                Enjoy an unparalleled experience from the moment you book your flight until you arrive at your destination
            </p>
            </div>
        </section>
        <section class="partsSec">
            <div>
            <h1>A<span> fleet  </span>of cars</h1>
            <h2>We have all kinds of cars to suit your style</h2>
            </div>
            <div class="spec">
            <div>
                <div class="thumImg">
                <img alt="" src="/images/hiace.png" />
                </div>
                <h3>Hiace</h3>
                <p>Toyota Hiace<br />14 Passenger</p>
            </div>
            <div>
                <div class="thumImg"><img alt="" src="/images/sorento.png" /></div>
                <h3>Families</h3>
                <p>Toyota Rush, Carens<br />7 Passenger</p>
            </div>
            <div>
                <div class="thumImg">
                <img alt="" src="/images/mercedes.png" />
                </div>
                <h3>Excellency</h3>
                <p>Mercedes or BMW cars<br />3 Passenger</p>
            </div>
            <div>
                <div class="thumImg"><img alt="" src="/images/toyota.png" /></div>
                <h3>Classic</h3>
                <p>Toyota or Kia cars<br />3 Passenger</p>
            </div>
            </div>
            <div class="viewBtn"><a href="">View all</a></div>
        </section>
        <section class="reasonsSec">
            <img alt="" src="/images/reasons.jpg" />
            <div>
            <h2>Reasons for choosing us</h2>
            <ul>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                Complete sterilization and continuous cleaning of cars
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                Speed in arrival and punctuality
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                Drivers trained to the highest level
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                Everywhere, around the clock
                </li>
                <li><i
                    class="fa fa-arrow-alt-circle-left"
                ></i>
                Safe driving and superior services
                </li>
            </ul>
            </div>
        </section>
        <section class="excellenceSec">
            <div>
            <h2>With Highway <span>Limo</span></h2>
            <h3>You are at ease</h3>
            <p>
                Providing a safe, accurate, professional and licensed private car rental service with drivers
                 Our cars are carefully selected to go anywhere, driven by
                 Our drivers are at your service. We can provide customized transportation for individuals or companies
                 Both who are looking for the best professional services from car rental companies
                 Limousine. If you are a professional company, your business deserves the service of a professional driver
                 To help move your employees and customers safely, punctually, confidentially and in style
                 Great wherever they want.
            </p>
            </div>
            <div class="whyUs">
            <div>
                <div class="light">
                <span><i class="fa fa-car"></i></span>
                <h4>Latest cars</h4>
                </div>
                <div class="dark">
                <span><i class="fa fa-wifi"></i></span>
                <h4>Entertainment</h4>
                </div>
            </div>
            <div>
                <div class="dark">
                <span><i class="fa fa-user-clock"></i></span>
                <h4>Promptness</h4>
                </div>
                <div class="light">
                <span><i class="fa fa-map-marker-alt"></i></span>
                <h4>Anywhere</h4>
                </div>
            </div>
            </div>

        </section>
        </main>
    </x-slot>
</x-layout>
