<section class="spotlight servicesPiece" id="servicesPiece">
    <div class="image">
        <img src="images/pic02.jpg" alt=""/>
        <img src="images/services.jpg" alt=""/>
        <img src="images/pic03.jpg" alt=""/>

    </div>

    <div class="content">
        <h2>Alternative service list</h2>
        <p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam
            aenean mi ligula.</p>

        <div class="row">

            {{ $numberOfCategories = $categories->count() }}


            {{-- number of categories devided by 2 so we get 2 columns. Probably take care of it here --}}

            {{-- Chunk one do something like

                @for ( $categoryNumber = 0; $categoryNumber < $serviceCategories->count() / 2; $categoryNumber++)
                    @foreach($serviceCategory[categoryNumber] as $serviceItem)
                        do stuff
            --}}
            @foreach($categories->chunk($numberOfCategories / 2) as $category)
                <div class="singleService">

            <div class="col-sm-6">
                {{--foreach loop starts here--}}
                <div class="singleService">
                    <h2 class="serviceHeader">Color</h2>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Color</span><span
                                class="servicePrice serviceItemPiece">$70+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Partial Highlight</span><span
                                class="servicePrice serviceItemPiece">$80+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Full Highlight</span><span
                                class="servicePrice serviceItemPiece">$100+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Color Correction</span><span
                                class="servicePrice serviceItemPiece">Consultation Required</span></div>
                </div>
                <div class="singleService">
                    <h2 class="serviceHeader">Hair</h2>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Womens Haircut &amp; Style</span><span
                                class="servicePrice serviceItemPiece">$67+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Mens Haircut</span><span
                                class="servicePrice serviceItemPiece">$40+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Childrens Haircut (under 12)</span><span
                                class="servicePrice serviceItemPiece">$37+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Blowdry/Style</span><span
                                class="servicePrice serviceItemPiece">$40+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Updo</span><span
                                class="servicePrice serviceItemPiece">$65+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Extensions</span><span
                                class="servicePrice serviceItemPiece">Consultation Required</span></div>
                </div>

                <div class="singleService">
                    <h2 class="serviceHeader">Treatment</h2>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Treatments</span><span
                                class="servicePrice serviceItemPiece">$37+</span></div>
                </div>
                <div class="singleService">
                    <h2 class="serviceHeader">Chemical Services</h2>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Perm</span><span
                                class="servicePrice serviceItemPiece">$100+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Relaxer</span><span
                                class="servicePrice serviceItemPiece">$150+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Brazilian Blowout</span><span
                                class="servicePrice serviceItemPiece">$250+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Thermal Hair Straightening</span><span
                                class="servicePrice serviceItemPiece">Consultation Required</span></div>
                </div>
                <div class="singleService">

                    <h2 class="serviceHeader">Waxing</h2>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Eyebrow</span><span
                                class="servicePrice serviceItemPiece">$25+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Lip/Chin</span><span
                                class="servicePrice serviceItemPiece">$12+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Nose/Ear</span><span
                                class="servicePrice serviceItemPiece">$12+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Full Face</span><span
                                class="servicePrice serviceItemPiece">$60+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Brazilian</span><span
                                class="servicePrice serviceItemPiece">Initial Visit $65+ / Future Appointments $45+</span>
                    </div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Bikini</span><span
                                class="servicePrice serviceItemPiece">$35+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Full Leg</span><span
                                class="servicePrice serviceItemPiece">$75+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Half Leg</span><span
                                class="servicePrice serviceItemPiece">$55+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Underarm</span><span
                                class="servicePrice serviceItemPiece">$25+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Full Arm</span><span
                                class="servicePrice serviceItemPiece">$45+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Half Arm</span><span
                                class="servicePrice serviceItemPiece">$35+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Chest/Back</span><span
                                class="servicePrice serviceItemPiece">$50+</span></div>
                </div>
            </div>
            @endforeach

            <div class="col-sm-6">
                <div class="singleService">
                    <h2 class="serviceHeader">Skincare</h2>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Facials</span><span
                                class="servicePrice serviceItemPiece">$95+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Chemical Peels</span><span
                                class="servicePrice serviceItemPiece">$80+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Skin Consultations</span><span
                                class="servicePrice serviceItemPiece">$50+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Acne Treatments</span><span
                                class="servicePrice serviceItemPiece">$75+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Eyelash Tint</span><span
                                class="servicePrice serviceItemPiece">$35+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Eyebrow Tint</span><span
                                class="servicePrice serviceItemPiece">$25+</span></div>
                    <span
                            class="small">
          For more information visit <a style="color: #96da6a; font-weight: 600;"
                                        href="http://liberationacneclinic.com/" target="_blank">Liberation Acne
                            Clinic</a>
        </span>
                </div>
                <div class="singleService">

                    <h2 class="serviceHeader">Laser Hair Removal</h2>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Full Face</span><span
                                class="servicePrice serviceItemPiece">$200+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Lip/Chin</span><span
                                class="servicePrice serviceItemPiece">$125+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Cheeks</span><span
                                class="servicePrice serviceItemPiece">$100+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Sideburns</span><span
                                class="servicePrice serviceItemPiece">$80+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Bikini Line to Brazilian</span><span
                                class="servicePrice serviceItemPiece">$200–$400</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Aerola</span><span
                                class="servicePrice serviceItemPiece">$80+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Full Arm</span><span
                                class="servicePrice serviceItemPiece">$300+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Half Arm</span><span
                                class="servicePrice serviceItemPiece">$200+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Upper/Lower Back</span><span
                                class="servicePrice serviceItemPiece">$200–$400+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Shoulders</span><span
                                class="servicePrice serviceItemPiece">$200–$350+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Neck</span><span
                                class="servicePrice serviceItemPiece">$150+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Toes/Hands</span><span
                                class="servicePrice serviceItemPiece">$80+</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Beard</span><span
                                class="servicePrice serviceItemPiece">Consultation Required</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Chest</span><span
                                class="servicePrice serviceItemPiece">$200+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Buttocks</span><span
                                class="servicePrice serviceItemPiece">Consultation Required</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Full Leg</span><span
                                class="servicePrice serviceItemPiece">$450+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Lower Leg</span><span
                                class="servicePrice serviceItemPiece">$200+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Upper Leg</span><span
                                class="servicePrice serviceItemPiece">Consultation Required</span></div>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Stomach</span><span
                                class="servicePrice serviceItemPiece">$100–$200+</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Underarm</span><span
                                class="servicePrice serviceItemPiece">$150+</span></div>
                </div>
                <div class="singleService">

                    <h2 class="serviceHeader">Laser Treatment</h2>
                    <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">IPL</span><span
                                class="servicePrice serviceItemPiece">$400</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Laser Genesis</span><span
                                class="servicePrice serviceItemPiece">$350</span></div>
                    <div class="serviceItem clearfix"><span
                                class="serviceName serviceItemPiece">Leg Veins (15min)</span><span
                                class="servicePrice serviceItemPiece">Consultation Required</span></div>               <!--  <span class="small">
          *these treatments include a peel and customized mask<br />
          **face, hands, arms, chest, shoulders, other areas treated<br />
          For more information visit <a style="color: #96da6a; font-weight: 600;" href="http://c3scottsdale.com/" target="_blank">C3 Clinical Corrective Care</a>
        </span> -->
                </div>
            </div>
        </div>

    </div>
</section>
</section>