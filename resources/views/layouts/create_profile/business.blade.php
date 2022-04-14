@extends('site.template')
@section('main-content')

    <section class="createBusinessProfile">
        <div class="pagetitle">
            <h1>Register Business Profile</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Your Name</h5>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Authorized Person Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="col-md-6">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name">
                            </div>

                            <div class="col-md-6">
                                <label for="phone_number " class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="phone_number " name="phone_number ">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Enter official email for quick verification</label>
                                <input type="text" class="form-control" id="designation" name="email">
                            </div>


                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Business Information</h5>
                        <form class="row g-3">
                            <div class="row mb-3">
                                <label for="select_business_type" class="col-sm-2 col-form-label">You are a(n)</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="select_business_type" name="type">
                                        <option value="">Select Option</option>
                                        <option value="Business Owner">Business Owner </option>
                                        <option value="Investor">Investor</option>
                                        <option value="Franchise">Franchise</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="select_business_interest" class="col-sm-2 col-form-label">You are interested in</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="select_business_interest" name="interest">
                                        <option value="Full sale of business">Full sale of business</option>
                                        <option value="Partial stake sale of business/investment">Partial stake sale of business/investment</option>
                                        <option value="Loan for business">Loan for business</option>
                                        <option value="Selling or Leasing out Business Assets">Selling or Leasing out Business Assets</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_established" class="col-sm-2 col-form-label">When was the business established?</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="business_established" name="established_date">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="select_business_industry" class="col-sm-2 col-form-label">Select business' industry</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="select_business_industry" name="industry">
                                        <option value="Energy">Energy</option>
                                        <option value="Energy">industry</option>
                                        <option value="Energy">Finance</option>
                                        <option value="Energy">Healthcare</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_located" class="col-sm-2 col-form-label">Where is the business located / headquartered?</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="business_located" name="business_located">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_employees_number" class="col-sm-2 col-form-label">How many permanent employees does the business have?</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="business_employees_number" name="employees_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="select_entity_type" class="col-sm-2 col-form-label">Select business legal entity type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="select_entity_type" name="entity_type">
                                        <option value="Sole Proprietorship/Sole Trader">Sole Proprietorship/Sole Trader</option>
                                        <option value="General Partnership">General Partnership</option>
                                        <option value="Limited Liability Partnership (LLP)">Limited Liability Partnership (LLP)</option>
                                        <option value="Limited Liability Company (LLC)">Limited Liability Company (LLC)</option>
                                        <option value="Private Limited Company">Private Limited Company</option>
                                        <option value="Public Limited Company">Public Limited Company</option>
                                        <option value="S Corporation">S Corporation</option>
                                        <option value="C Corporation">C Corporation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="business_description" class="col-sm-2 col-form-label">Describe the business in a single line</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="business_description" name="description "></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_highlights " class="col-sm-2 col-form-label">Mention highlights of the business including number of clients, growth rate, promoter experience, business relationships, awards, etc</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="business_highlights" name="highlights" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_products" class="col-sm-2 col-form-label">List all products and services of the business</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="business_products" name="products" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_facility_details" class="col-sm-2 col-form-label">Describe your facility such as built-up area, number of floors, rental/lease details</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="business_facility_details" name="facility_details" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="avg_monthly_sales" class="col-sm-2 col-form-label">At present, what is your average monthly sales?</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="avg_monthly_sales" name="avg_monthly_sales">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="year_sales" class="col-sm-2 col-form-label">What was your latest reported yearly sales?</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="year_sales" name="year_sales">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_EBITDA" class="col-sm-2 col-form-label">What is the EBITDA / Operating Profit Margin Percentage?</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="business_EBITDA" name="EBITDA">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_assets" class="col-sm-2 col-form-label">List all the tangible and intangible assets the buyer would get</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="business_assets" name="assets" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="physical_assets" class="col-sm-2 col-form-label">What is the value of physical assets owned by the business?</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="physical_assets" name="Phisycal_assets_value">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tentative_selling" class="col-sm-2 col-form-label">What is the tentative selling price for the business?</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="tentative_selling" name="tentative_selling">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_assets" class="col-sm-2 col-form-label">Provide reason for sale</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="business_assets" name="assets" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_photos" class="col-sm-2 col-form-label">Add business and product photos</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="business_photos" name="business_photos">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_documents" class="col-sm-2 col-form-label">Add business documents</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="business_documents" name="business_documents">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="business_proof" class="col-sm-2 col-form-label">Attach proof of business for faster verification </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="business_proof" name="business_proof">
                                </div>
                            </div>

                            <hr/>

                            <h5 class="card-title">Select a Plan</h5>


                            <div class="col-sm-10 offset-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="business_plan" id="Active_Business">
                                    <label class="form-check-label" for="Active_Business">
                                        Active Business
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-10 offset-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="business_plan" id="Fast_Business">
                                    <label class="form-check-label" for="Fast_Business">
                                        Fast Track Business
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-10 offset-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="business_plan" id="Professional_Business">
                                    <label class="form-check-label" for="Professional_Business">
                                        Professional Business
                                    </label>
                                    <br>
                                </div>
                            </div>

                            <div class="col-sm-10 offset-sm-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        I accept 1% finder's fee (payable post transaction) and other terms of engagement </a>
                                    </label>
                                </div>
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            </div>
        </section>

    </section>



@endsection
