@section('contact')
 <div id="contact" class="first-section">
<div class="row">
    <div class="col-md-6">
        <div class="contact_form">
            <div id="message"></div>
            <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                <fieldset class="row-fluid">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Website">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="sr-only">Select Department</label>
                        <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                            <option value="12">Technical Service</option>
                            <option value="Web Design">Email Design</option>
                            <option value="Web Development">Financial Questions/option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                        <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!-- end col -->
    <div class="col-md-6">
        <div class="map-box">
            <div id="custom-places" class="small-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.7420670119227!2d-76.15903968521961!3d36.82470027402083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89babe1fdc492a07%3A0x17d08a1da726d1c4!2s5010%20Dunderdale%20Ct%2C%20Virginia%20Beach%2C%20VA%2023462%2C%20%D0%A1%D0%A8%D0%90!5e0!3m2!1sru!2sua!4v1577532519304!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
</div><!-- end container -->
</div><!-- end section -->
</div>
