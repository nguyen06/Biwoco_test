<div class="support_text text-center">
    <p class="support-title">
        Existing customer? <a href="">Open a ticket</a>
    </p>
    <p class="support-title">
        Need a fast answer? Search our <a href="">Community Q&A</a>
    </p>
</div>

<div class="container pt-5 w-75">
        <form id="myform" method="post" action="/postSubmit">

            <div class="row">
                <div class="col">
                    @csrf
                    <div class="inner-addon right-addon form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        <a href="#">
                            <span class="glyphicon glyphicon-asterisk"></span>
                        </a>
                        <input type="text" class="form-control" name="name" placeholder="Name"/>

                    </div>
                </div>
                <div class="col">
                    <div class="inner-addon right-addon">
                        <a href="#">
                            <span class="glyphicon glyphicon-asterisk"></span>
                        </a>
                        <input type="email" class="form-control" name="email" placeholder="Email" />
                    </div>
                </div>

            </div>
            <div class="row pt-3">
                <div class="col">
                    <div class=" form-group inner-addon right-addon">
                        <a href="#">
                            <span class="glyphicon glyphicon-asterisk"></span>
                        </a>
                        <select name="contact" id="" class="form-control">
                            <option value="">Reason for getting in touch</option>
                            <option value="Account_Control Panel">Account / Control Panel</option>
                            <option value="App_Website">App / Website</option>
                            <option value="Billing">Billing</option>
                            <option value="Droplets">Droplets</option>
                            <option value="Networking">Networking</option>
                            <option value="Something is Broken">Something is Broken</option>
                            <option value="Spaces">Spaces</option>
                            <option value="Volumes">Volumes</option>
                            <option value="Other">Other</option>
                        </select>


                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <div class="inner-addon right-addon">
                        <a href="#">
                            <span class="glyphicon glyphicon-asterisk"></span>
                        </a>
                        <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <div class="form-group inner-addon right-addon">
                        <a href="#">
                            <span class="glyphicon glyphicon-asterisk"></span>
                        </a>
                        <textarea  class="form-control-1" rows="3" cols="100" name="message" placeholder="Brief description of how DigitalOcean can help you"></textarea>

                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <div class="form-group inner-addon right-addon">
                        <a href="#">
                            <span class="glyphicon glyphicon-asterisk"></span>
                        </a>
                    </div>
                </div>
                <div class="col">

                    <input class="www-Button www-Button--primary www-Button--fullWidth" type="submit">

                </div>
            </div>
        </form>
</div>
</br>
<br>
